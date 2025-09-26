    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Account extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->defaultLayout = 'v3/layouts/app';
            $this->load->model('User_model');
            $this->load->model('Mitra_model');
            $this->load->library('form_validation');
            if (!$this->session->userdata('logged_in')) {
                redirect('auth');
            }
        }

        public function index()
        {
            $tab = $this->input->get('tab', TRUE) ?: 'overview';
            $data = [
                'active_tab' => $tab,
                'tab_view'   => "v3/admin/account/tab/{$tab}",
                'tab_url'    => site_url('admin/account'),
                'user'     => $this->User_model->getUserByCode($this->session->userdata('user_code')),
                'mitra'     => $this->Mitra_model->getMitrabyAccount($this->session->userdata('account')),
            ];
            load_page__assets($this, 'account/page');

            $this->loadView('v3/admin/account/index', 'My Account', $data);
        }

        public function settings()
        {
            $data = [];
            load_page__assets($this, 'account/page');

            $this->loadView('v3/admin/account/settings', 'Settings Account', $data);
        }

        public function edit_profile()
        {
            $this->form_validation->set_rules('phone', 'Contact Phone', 'numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if ($this->form_validation->run() == FALSE) {
                $this->index();
            } else {
                $dataUser = [
                    'nama' => $this->input->post('name')
                ];
                $data = [
                    'name' => $this->input->post('agent'),
                    'business_name' => $this->input->post('business_name'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'address' => $this->input->post('address'),
                    'updatedon' => date('Y-m-d H:i:s'),
                ];
                $account = $this->session->userdata('account');
                $updateMitra = $this->Mitra_model->updateMitra($account, $data);
                $updateUser =  $this->User_model->updateUser($this->session->userdata('user_code'), $dataUser);
                if ($updateMitra && $updateUser) {
                    redirect('admin/account/index');
                } else {
                    $this->session->set_flashdata('error', 'Invalid username or password');
                }
            }
        }

        public function change_password()
        {
            $data = [];

            $this->loadView('v3/admin/account/change_password', 'Change Password', $data);
        }

        public function update_password()
        {
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('confirm_password', 'Password', 'required|matches[password]');
            if ($this->form_validation->run() == false) {
                $this->change_password();
            } else {
                $code = $this->session->userdata('user_code');
                $password = $this->input->post('password');
                $data = [
                    'password' => hash('sha256', $password)
                ];
                if ($this->User_model->updateUser($code, $data)) {
                    $this->session->set_flashdata('success', 'Password successfully updated! You can now log in with your new password. ');
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Failed to change password. Try again later');
                    redirect('admin/dashboard');
                }
            }
        }
    }
