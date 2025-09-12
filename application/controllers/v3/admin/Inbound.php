    <?php
    defined('BASEPATH') or exit('no direct script access allowed');

    class Inbound extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this->defaultLayout = 'v3/layouts/app';
            $this->load->model('Inbound_model');
            if (!$this->session->userdata('logged_in')) {
                redirect('v3/auth');
            }
        }

        public function index()
        {
            $data = [
                'inbounds' => $this->Inbound_model->getAll()
            ];

            $this->config->load('assets/inbound');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/inbound/index', 'Inbound List', $data);
        }

        public function not_proccess()
        {
            $data = [
                'inbounds' => $this->Inbound_model->get_inbound_by_status()
            ];
            $this->config->load('assets/inbound');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/inbound/not_proccess', 'Not Process', $data);
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

        public function outbond()
        {
            $data = [];

            $this->config->load('assets/inbound');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/shipment/outbond/index', 'Create Inbound', $data);
        }
    }
