    <?php
    defined('BASEPATH') or exit('no direct script access allowed');

    class shipment extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this->defaultLayout = 'layouts/app';
        }

        public function index()
        {
            $data = [];

            $this->config->load('assets/shipment');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('admin/shipment/index', 'Shipment List', $data);
        }

        public function create()
        {
            $data = [];

            $this->config->load('assets/add');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('admin/shipment/add', 'Create Shipment', $data);
        }
    }
