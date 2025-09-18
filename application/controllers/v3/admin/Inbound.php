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
            if (!$this->session->userdata('logged_in')) {
                redirect('auth');
            }
        }

        public function index()
        {
            $data = [
                'inbounds' => $this->Inbound_model->getAll(),
            ];

            $this->config->load('assets/inbound');
            $page_assets = $this->config->item('assets');

            $this->config->load('assets/_partials/dataTables');
            $datatables_assets = $this->config->item('assets');

            $this->pageScripts = array_merge($datatables_assets['js'], $page_assets['js']);
            $this->pageStyles = array_merge($datatables_assets['css'], $page_assets['css']);

            $this->loadView('v3/admin/inbound/index', 'Inbound List', $data);
        }

        public function not_proccess()
        {
            $data = [
                'inbounds' => $this->Inbound_model->get_inbound_by_status()
            ];
            $this->config->load('assets/inbound');
            $page_assets = $this->config->item('assets');

            $this->config->load('assets/_partials/dataTables');
            $datatables_assets = $this->config->item('assets');

            $this->pageScripts = array_merge($datatables_assets['js'], $page_assets['js']);
            $this->pageStyles = array_merge($datatables_assets['css'], $page_assets['css']);

            $this->loadView('v3/admin/inbound/not_proccess', 'Not Process', $data);
        }

        public function outbond()
        {
            $data = [];

            $this->config->load('assets/inbound');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/shipment/outbond/index', 'Create Inbound', $data);
        }

        public function create()
        {
            $data = [
                'inbounds' => $this->Inbound_model->getAll(),
                'users' => $this->User_model->getAllUser()
            ];

            $this->config->load('assets/_partials/form');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/inbound/create', 'Create Inbound', $data);
        }

        public function store()
        {
            $this->form_validation->set_rules('sender_name', 'Sender Name', 'required');
            $this->form_validation->set_rules('phone_num', 'Phone Number', 'required|min_length[10]');
            $this->form_validation->set_rules('weight', 'Weight', 'required');
            $this->form_validation->set_rules('goods_desc', 'Goods Description', 'required');
<<<<<<< HEAD
=======
            $this->form_validation->set_rules('cs', 'CS', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data = [
                    'inbounds' => $this->Inbound_model->get_inbound_by_status()
                ];
                $this->config->load('assets/inbound');
                $page_assets = $this->config->item('assets');

                $this->config->load('assets/_partials/dataTables');
                $datatables_assets = $this->config->item('assets');

                $this->pageScripts = array_merge($datatables_assets['js'], $page_assets['js']);
                $this->pageStyles = array_merge($datatables_assets['css'], $page_assets['css']);

                $this->loadView('v3/admin/inbound/not_proccess', 'Not Process', $data);
                return;
            }

            $data = [
                'account' => $this->session->userdata('account'),
                'inbound_date' => date('Y-m-d'),
                'shipper_name' => $this->input->post('shipper_name'),
                'shipper_phone' =>  $this->input->post('shipper_phone'),
                'weight' =>  $this->input->post('weight'),
                'goods_desc' =>  $this->input->post('goods_desc'),
                'cs' =>  $this->input->post('cs'),
                'status' =>  15
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
                        redirect('admin/list_inbound');
                        return;
                    }
                    $data[$key] = $fileName;
                }
            }

            $this->Inbound_model->insert($data);
            $this->session->set_flashdata('success', 'Data berhasil disimpan!');
            redirect('admin/list_inbound');
>>>>>>> 546ea907ec3f00bc99f7be7343c8412da0028b2f
        }

        public function edit($code)
        {
            $data = [
                'inbound' => $this->Inbound_model->get_inbound_by_code($code),
                'users' => $this->User_model->getAllUser()
            ];

            $this->config->load('assets/_partials/form');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

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
                $this->config->load('assets/inbound');
                $page_assets = $this->config->item('assets');

                $this->config->load('assets/_partials/dataTables');
                $datatables_assets = $this->config->item('assets');

                $this->pageScripts = array_merge($datatables_assets['js'], $page_assets['js']);
                $this->pageStyles = array_merge($datatables_assets['css'], $page_assets['css']);

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
                        redirect('admin/list_inbound');
                        return;
                    }
                    $data[$key] = $fileName;
                }
            }

            $this->Inbound_model->update($code, $data);
            $this->session->set_flashdata('success', 'Data berhasil disimpan!');
            redirect('admin/list_inbound');
        }
    }
