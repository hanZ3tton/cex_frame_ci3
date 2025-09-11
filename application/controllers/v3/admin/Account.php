    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Account extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this->defaultLayout = 'v3/layouts/app';
            $this->load->model('User_model');
            $this->load->model('Role_model');
            $this->load->library('form_validation');
            if (!$this->session->userdata('logged_in')) {
                redirect('v3/auth');
            }
        }

        public function index()
        {
            $tab = $this->input->get('tab', TRUE) ?: 'overview';
            $data = [
                'active_tab' => $tab,
                'tab_view'   => "v3/admin/account/tab/{$tab}",
                'tab_url'    => site_url('v3/admin/account/index'),
                'users'     => $this->User_model->getUserById($this->session->userdata('user_id')),
                'roles'     => $this->Role_model->getRoleById($this->session->userdata('role_id')),
            ];
            $this->config->load('assets/account');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/account/index', 'My Account', $data);
        }

        public function edit_profile()
        {
            $tab = $this->input->get('tab', TRUE) ?: 'settings';
            $data = [
                'active_tab' => $tab,
                'tab_view'   => "v3/admin/account/tab/{$tab}",
                'tab_url'    => site_url('v3/admin/account/index'),
                'users'     => $this->User_model->getUserById($this->session->userdata('user_id')),
                'roles'     => $this->Role_model->getRoleById($this->session->userdata('role_id'))
            ];
            $this->config->load('assets/account');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('phone', 'Contact Phone', 'numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');



            if ($this->form_validation->run() == FALSE) {
                $this->loadView('v3/admin/account/index', 'My Account', $data);
            } else {
                $data = [
                    'username' => $this->input->post('username'),
                    'agent' => $this->input->post('agent'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'address' => $this->input->post('address'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
                $this->User_model->updateUser($this->session->userdata('user_id'), $data);
                redirect('v3/admin/account/index');
            }
        }

        public function settings()
        {
            $data = [];
            $this->config->load('assets/account');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/account/settings', 'Settings Account', $data);
        }
    }
