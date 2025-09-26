<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Inbound extends MY_Controller
{
    const STATUS_NOT_PROCESSED = 15;
    const STATUS_CLAIMED = 3;
    const STATUS_DELETED = 10;

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
        load_page__assets($this, 'inbound/list');

        $this->loadView('v3/admin/inbound/index', 'Inbound List', $data);
    }

    public function not_process()
    {
        $data = [
            'inbounds' => $this->Inbound_model->get_inbound_by_status(self::STATUS_NOT_PROCESSED)
        ];
        load_page__assets($this, 'inbound/list');

        $this->loadView('v3/admin/inbound/not_process', 'Not Process', $data);
    }

    public function create()
    {
        $data = [
            'users' => $this->User_model->getAllUser()
        ];

        $this->loadView('v3/admin/inbound/create', 'Create Inbound', $data);
    }

    private function set_validation_rules()
    {
        $this->form_validation->set_rules('shipper_name', 'Sender Name', 'required|trim');
        $this->form_validation->set_rules('shipper_phone', 'Phone Number', 'required|min_length[10]|trim');
        $this->form_validation->set_rules('weight', 'Weight', 'required|numeric|greater_than[0]|trim');
        $this->form_validation->set_rules('goods_desc', 'Goods Description', 'required|trim');
        $this->form_validation->set_rules('cs', 'CS', 'required|trim');
    }

    private function sanitize_input($data)
    {
        $sanitized = [];
        foreach ($data as $key => $value) {
            $sanitized[$key] = $this->security->xss_clean(trim($value));
        }
        return $sanitized;
    }

    private function handle_photo_uploads(&$data)
    {
        $photo_fields = [
            'picture' => 'photo_1',
            'picture2' => 'photo_2',
            'picture3' => 'photo_3'
        ];

        foreach ($photo_fields as $key => $field) {
            if (!empty($_FILES[$field]['name'])) {
                $fileName = upload_photo($field);
                if (!$fileName) {
                    throw new Exception($this->upload->display_errors());
                }
                $data[$key] = $fileName;
            }
        }
    }

    public function store()
    {
        $this->set_validation_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            try {
                $data = [
                    'account' => $this->session->userdata('account'),
                    'inbound_date' => date('Y-m-d'),
                    'shipper_name' => $this->input->post('shipper_name'),
                    'shipper_phone' => $this->input->post('shipper_phone'),
                    'weight' => $this->input->post('weight'),
                    'goods_desc' => $this->input->post('goods_desc'),
                    'cs' => $this->input->post('cs'),
                    'status' => self::STATUS_NOT_PROCESSED,
                    'updatedby' => $this->session->userdata('name')
                ];

                // Sanitize input data
                $data = $this->sanitize_input($data);

                // Handle photo uploads
                $this->handle_photo_uploads($data);

                if ($this->Inbound_model->insert($data)) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan!');
                } else {
                    $this->session->set_flashdata('error', 'Gagal menyimpan data!');
                }
            } catch (Exception $e) {
                log_message('error', 'Store inbound error: ' . $e->getMessage());
                $this->session->set_flashdata('error', 'Terjadi kesalahan: ' . $e->getMessage());
            }

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
        $this->set_validation_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->not_process();
        } else {
            try {
                $data = [
                    'shipper_name' => $this->input->post('shipper_name'),
                    'shipper_phone' => $this->input->post('shipper_phone'),
                    'weight' => $this->input->post('weight'),
                    'goods_desc' => $this->input->post('goods_desc'),
                    'cs' => $this->input->post('cs'),
                    'updatedon' => date('Y-m-d H:i:s'),
                    'updatedby' => $this->session->userdata('account'),
                ];

                // Sanitize input data
                $data = $this->sanitize_input($data);

                // Handle photo uploads
                $this->handle_photo_uploads($data);

                if ($this->Inbound_model->update($code, $data)) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan!');
                } else {
                    $this->session->set_flashdata('error', 'Gagal menyimpan data!');
                }
            } catch (Exception $e) {
                log_message('error', 'Update inbound error: ' . $e->getMessage());
                $this->session->set_flashdata('error', 'Terjadi kesalahan: ' . $e->getMessage());
            }

            redirect('admin/inbound');
        }
    }

    public function claim_to_receipt($code)
    {
        $username = $this->session->userdata('username');
        $account  = $this->session->userdata('account');

        try {
            $result = $this->Inbound_model->claim_to_receipt($code, $username, $account);

            if ($result) {
                $this->session->set_flashdata('success', 'Data inbound berhasil diklaim ke receipt!');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengklaim data inbound!');
            }
        } catch (Exception $e) {
            log_message('error', 'Claim to receipt error: ' . $e->getMessage());
            $this->session->set_flashdata('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        redirect('admin/inbound');
    }

    public function soft_delete($code)
    {
        try {
            $inbound = $this->Inbound_model->get_inbound_by_code($code);

            if (!$inbound) {
                $this->session->set_flashdata('error', 'Data tidak ditemukan!');
                redirect('admin/inbound');
                return;
            }

            if ($this->Inbound_model->soft_delete($code)) {
                $this->session->set_flashdata('success', 'Data berhasil dihapus!');
            } else {
                $this->session->set_flashdata('error', 'Gagal menghapus data!');
            }
        } catch (Exception $e) {
            log_message('error', 'Soft delete inbound error: ' . $e->getMessage());
            $this->session->set_flashdata('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        redirect('admin/inbound');
    }

    public function delete($code)
    {
        try {
            $inbound = $this->Inbound_model->get_inbound_by_code($code);

            if (!$inbound) {
                $this->session->set_flashdata('error', 'Data tidak ditemukan!');
                redirect('admin/inbound');
                return;
            }

            // Delete associated files
            $this->delete_associated_files($inbound);

            if ($this->Inbound_model->delete($code)) {
                $this->session->set_flashdata('success', 'Data berhasil dihapus!');
            } else {
                $this->session->set_flashdata('error', 'Gagal menghapus data!');
            }
        } catch (Exception $e) {
            log_message('error', 'Delete inbound error: ' . $e->getMessage());
            $this->session->set_flashdata('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        redirect('admin/inbound');
    }

    private function delete_associated_files($inbound)
    {
        $pictures = ['picture', 'picture2', 'picture3'];

        foreach ($pictures as $picture) {
            if (!empty($inbound->$picture) && file_exists(FCPATH . 'uploads/' . $inbound->$picture)) {
                unlink(FCPATH . 'uploads/' . $inbound->$picture);
            }
        }
    }
}
