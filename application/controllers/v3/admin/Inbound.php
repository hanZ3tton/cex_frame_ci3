    <?php
    defined('BASEPATH') or exit('no direct script access allowed');

    class Inbound extends MY_Controller
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

            $this->config->load('assets/inbound');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/inbound/index', 'Inbound List', $data);
        }

        public function create()
        {
            $data = [];

            $this->config->load('assets/_partials/form');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/inbound/create', 'Create Inbound', $data);
        }
        public function np()
        {
            $data = [];

            $this->config->load('assets/inbound');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/inbound/not_proccess/index', 'Not Process', $data);
        }

        public function notc()
        {
            $data = [];

            $this->config->load('assets/inbound');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/inbound/not_complete/index', 'Not Complete', $data);
        }
    }
