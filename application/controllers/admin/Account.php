    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Account extends MY_Controller
    {

        public function __construct()
        {
            parent::__construct();

            $this->defaultLayout = 'layouts/app';
        }

        public function index()
        {
            $data = [];
            $this->config->load('assets/account');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('admin/account/index', 'My Account', $data);
        }
    }
