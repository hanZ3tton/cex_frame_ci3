    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class TopUp extends MY_Controller
    {

        public function __construct()
        {
            parent::__construct();

            $this->defaultLayout = 'layouts/app';
        }

        public function index()
        {
            $data = [];

            $this->config->load('assets/topup');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('admin/TopUp/index', 'TopUp', $data);
        }
        public function deposit()
        {
            $data = [];

            $this->config->load('assets/deposittopup');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('admin/TopUp/deposit', 'Deposit', $data);
        }
    }
