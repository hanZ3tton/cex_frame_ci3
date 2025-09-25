    <?php
    defined('BASEPATH') or exit('no direct script access allowed');

    class Inbound extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->defaultLayout = 'v3/layouts/app';
            $this->load->helper('upload');
            $this->load->helper('image');
            $this->load->model('Inbound_model');
            $this->load->model('User_model');
            $this->load->library('form_validation');
            if (!$this->session->userdata('logged_in')) {
                redirect('auth');
            }
        }

        public function index()
        {
            $data = [
                'inbounds' => $this->Inbound_model->get_all_inbound(),
            ];

            $this->config->load('assets/inbound/list');
            $page_assets = $this->config->item('assets');
            $this->pageScripts = $page_assets['js'];
            $this->pageStyles = $page_assets['css'];

            $this->loadView('v3/admin/inbound/index', 'Inbound List', $data);
        }

        public function not_process()
        {
            $status_id = 15;

            $data = [
                'inbounds' => $this->Inbound_model->get_inbound_by_status($status_id)
            ];
            $this->config->load('assets/inbound/list');
            $page_assets = $this->config->item('assets');
            $this->pageScripts = $page_assets['js'];
            $this->pageStyles = $page_assets['css'];

            $this->loadView('v3/admin/inbound/not_process', 'Not Process', $data);
        }

        public function create()
        {
            $data = [
                'inbounds' => $this->Inbound_model->get_all_inbound(),
                'users' => $this->User_model->getAllUser()
            ];

            $this->loadView('v3/admin/inbound/create', 'Create Inbound', $data);
        }

        public function store()
        {
            $this->form_validation->set_rules('shipper_name', 'Sender Name', 'required');
            $this->form_validation->set_rules('shipper_phone', 'Phone Number', 'required|min_length[10]');
            $this->form_validation->set_rules('weight', 'Weight', 'required');
            $this->form_validation->set_rules('goods_desc', 'Goods Description', 'required');
            $this->form_validation->set_rules('cs', 'CS', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->create();
            } else {
                $data = [
                    'account' => $this->session->userdata('account'),
                    'inbound_date' => date('Y-m-d'),
                    'shipper_name' => $this->input->post('shipper_name'),
                    'shipper_phone' =>  $this->input->post('shipper_phone'),
                    'weight' =>  $this->input->post('weight'),
                    'goods_desc' =>  $this->input->post('goods_desc'),
                    'cs' =>  $this->input->post('cs'),
                    'status' =>  15,
                    'updatedby' => $this->session->userdata('name')
                ];

                $photo_fields = [
                    'picture' => 'photo_1',
                    'picture2' => 'photo_2',
                    'picture3' => 'photo_3'
                ];

                foreach ($photo_fields as $key => $field) {
                    if (!empty($_FILES[$field]['name'])) {
                        $fileName = upload_photo($field);
                        if (!$fileName) {
                            $this->session->set_flashdata('error', $this->upload->display_errors());
                            redirect('admin/inbound');
                            return;
                        }
                        $data[$key] = $fileName;
                    }
                }

                $this->Inbound_model->insert($data);
                $this->session->set_flashdata('success', 'Data berhasil disimpan!');
                redirect('admin/inbound');
            }
        }

        public function edit($code)
        {
            $data = [
                'inbound' => $this->Inbound_model->get_inbound_by_code($code),
                'users' => $this->User_model->getAllUser()
            ];

            $this->loadView('v3/admin/inbound/edit', 'Edit Inbound', $data);
        }

        public function update($code)
        {
            $this->form_validation->set_rules('shipper_name', 'Shipper Name', 'required');
            $this->form_validation->set_rules('shipper_phone', 'Shipper Phone', 'required|min_length[10]');
            $this->form_validation->set_rules('weight', 'Weight', 'required');
            $this->form_validation->set_rules('goods_desc', 'Goods Description', 'required');
            $this->form_validation->set_rules('cs', 'CS', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data = [
                    'inbounds' => $this->Inbound_model->get_inbound_by_status()
                ];

                $this->config->load('assets/inbound/list');
                $page_assets = $this->config->item('assets');
                $this->pageScripts = $page_assets['js'];
                $this->pageStyles = $page_assets['css'];

                $this->loadView('v3/admin/inbound/not_proccess', 'Not Process', $data);
                return;
            }

            $data = [
                'shipper_name' => $this->input->post('shipper_name'),
                'shipper_phone' =>  $this->input->post('shipper_phone'),
                'weight' =>  $this->input->post('weight'),
                'goods_desc' =>  $this->input->post('goods_desc'),
                'cs' =>  $this->input->post('cs'),
                'updatedon' => date('Y-m-d H:i:s'),
                'updatedby' =>  $this->session->userdata('account'),
            ];

            $photo_fields = [
                'picture' => 'photo_1',
                'picture2' => 'photo_2',
                'picture3' => 'photo_3'
            ];

            foreach ($photo_fields as $key => $field) {
                if (!empty($_FILES[$field]['name'])) {
                    $fileName = upload_photo($field);
                    if (!$fileName) {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('admin/inbound');
                        return;
                    }
                    $data[$key] = $fileName;
                }
            }

            $this->Inbound_model->update($code, $data);
            $this->session->set_flashdata('success', 'Data berhasil disimpan!');
            redirect('admin/inbound');
        }

        public function soft_delete($code)
        {
            $inbound = $this->Inbound_model->get_inbound_by_code($code);

            if (!$inbound) {
                $this->session->set_flashdata('error', 'Data tidak ditemukan!');
                redirect('admin/inbound');
                return;
            }

            $this->Inbound_model->soft_delete($code);
            $this->session->set_flashdata('success', 'Data Berhasil diapuskan!');
            redirect('admin/inbound');
        }

        public function claim_to_recipt($code)
        {
            $inbound = $this->Inbound_model->get_inbound_by_code($code);
            $username = $this->session->userdata('username');
            $account = $this->session->userdata('account');
            $time = time();
            $data = [
                'connote' => $time,
                'ship_account_number' => $account,
                'domestic_courier' => '',
                'domestic_awb' => '',
                'ship_account' => $account,
                'ship_ref' => '',
                'ship_address' => '',
                'ship_province' => '',
                'ship_city' => '',
                'ship_country' => '',
                'rec_account_number' => '',
                'rec_name' => '',
                'rec_ref' => '',
                'rec_address' => '',
                'rec_postcode' => '',
                'rec_city' => '',
                'rec_phone' => '',
                'rec_country' => '',
                'origin' => 'INDONESIA',
                'destination' => '',
                'number_of_pieces' => '0',
                'total_amount' => '0',
                'currency' => 'USD',
                'notes' => '',
                'status' => '3',
                'mode' => '1',
                'updatedby' => $username,
                'updatedon' => date('Y-m-d H:i:s'),
                'sumber' => 'FRM',
                'value_of_goods' => '',
                'picture_of_goods' => '',
                'picture_of_paket' => '',
                'request_pickup' => '',
                'picture_of_idcard_receiver' => '',
                'payment_method' => '',
                'ship_postcode' => '',
                'tgl_kirim' => null,
                'inbound' => 1,
                'inbound_date' => '',
                'outbound' => '0',
                'outbound_date' => '',
                'ongkir' => '0',
                'inbound_by' => $username,
                'service' => '',
                'arc_no' => '',
                'ship_account' => '',
                'weight' => $inbound->weight,
                'charge_weight' => ceil($inbound->weight),
                'ship_name' => $inbound->shipper_name,
                'ship_phone' => $inbound->shipper_phone,
                'desc_of_goods' => $inbound->goods_desc,
                'cs' => $inbound->cs,
            ];
            try {
                $this->Inbound_model->input_cleansing($data);
                $insert_id = $this->db->insert_id();
                $data_item = [
                    'connote' => $account . '-' . $insert_id,
                    'final_connote' => $insert_id,
                ];

                if ($this->Inbound_model->update_cleansing($insert_id, $data_item)) {
                    $data = [
                        'status' => '3'
                    ];
                    $this->Inbound_model->update($code, $data);
                    $this->session->set_flashdata('success', 'This inbound data success claim to recipt!');
                    redirect('admin/inbound');
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('success', '$e->getMessage()');
            }
        }

        public  function delete($code)
        {
            $inbound = $this->Inbound_model->get_inbound_by_code($code);

            if (!$inbound) {
                $this->session->set_flashdata('error', 'Data tidak ditemukan!');
                redirect('admin/inbound');
                return;
            }

            if (!empty($inbound->picture) && file_exists(FCPATH . 'uploads/' . $inbound->picture)) {
                unlink(FCPATH . 'uploads/' . $inbound->picture);
            }
            if (!empty($inbound->picture2) && file_exists(FCPATH . 'uploads/' . $inbound->picture2)) {
                unlink(FCPATH . 'uploads/' . $inbound->picture2);
            }
            if (!empty($inbound->picture3) && file_exists(FCPATH . 'uploads/' . $inbound->picture3)) {
                unlink(FCPATH . 'uploads/' . $inbound->picture3);
            }

            $this->Inbound_model->delete($code);
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
            redirect('admin/inbound');
        }
    }
