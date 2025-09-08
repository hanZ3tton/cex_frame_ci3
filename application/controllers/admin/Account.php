    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Account extends MY_Controller
    {

        public function __construct()
        {
            parent::__construct();

            $this->defaultLayout = 'layouts/app';
            if ($this->session->userdata('user_id') == null) {
                redirect('auth');
            }
        }

        public function index()
        {
            $tab = $this->input->get('tab', TRUE) ?: 'overview';

            $data = [
                'active_tab' => $tab,
                'tab_view'   => "admin/account/tab/{$tab}",
                'tab_url'    => site_url('admin/account/index'),
            ];
            $this->config->load('assets/account');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('admin/account/index', 'My Account', $data);
        }

        public function settings()
        {
            $data = [];
            $this->config->load('assets/account');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('admin/account/settings', 'Settings Account', $data);
        }
    }
