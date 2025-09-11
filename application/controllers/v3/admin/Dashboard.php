    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Dashboard extends MY_Controller
    {

        public function __construct()
        {
            parent::__construct();

            $this->defaultLayout = 'v3/layouts/app';
            if (!$this->session->userdata('logged_in')) {
                redirect('v3/auth');
            }
        }

        public function index()
        {
            $data = [];

            $this->config->load('assets/dashboard');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/dashboard/index', 'Dashboard', $data);
        }
    }
