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
                'user'     => $this->User_model->getUserByCode($this->session->userdata('user_code')),
                'mitra'     => $this->Mitra_model->getMitrabyAccount($this->session->userdata('account')),
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
                'user'     => $this->User_model->getUserByCode($this->session->userdata('user_code')),
                'mitra'     => $this->Mitra_model->getMitrabyAccount($this->session->userdata('account')),

            ];
            $this->config->load('assets/account');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->form_validation->set_rules('phone', 'Contact Phone', 'numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');



            if ($this->form_validation->run() == FALSE) {
                $this->loadView('v3/admin/account/index', 'My Account', $data);
            } else {
                $data = [
                    'name' => $this->input->post('agent'),
                    'business_name' => $this->input->post('business_name'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'address' => $this->input->post('address'),
                    'updatedon' => date('Y-m-d H:i:s'),
                ];
                $account = $this->session->userdata('account');
                if ($this->Mitra_model->updateMitra($account, $data)) {
                    redirect('v3/admin/account/index');
                } else {
                    $this->session->set_flashdata('error', 'Invalid username or password');
                }
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
