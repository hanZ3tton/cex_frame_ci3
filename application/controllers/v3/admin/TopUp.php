    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Topup extends MY_Controller
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

            $this->config->load('assets/topup');
            $page_assets = $this->config->item('assets');

            $this->config->load('assets/_partials/dataTables');
            $datatables_assets = $this->config->item('assets');

            $this->pageScripts = array_merge($datatables_assets['js'], $page_assets['js']);
            $this->pageStyles = array_merge($datatables_assets['css'], $page_assets['css']);

            $this->loadView('v3/admin/Topup/index', 'TopUp', $data);
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
