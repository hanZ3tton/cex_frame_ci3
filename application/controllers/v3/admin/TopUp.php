    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Topup extends MY_Controller
    {

        public function __construct()
        {
            parent::__construct();

            $this->defaultLayout = 'v3/layouts/app';
        }

        public function index()
        {
            $data = [];

            $this->config->load('assets/topup');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/TopUp/index', 'TopUp', $data);
        }
        public function deposit()
        {
            $data = [];

            $this->config->load('assets/topup');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/TopUp/deposit', 'Deposit', $data);
        }
    }
