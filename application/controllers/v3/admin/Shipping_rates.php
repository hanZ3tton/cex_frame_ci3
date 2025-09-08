    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Shipping_rates extends MY_Controller
    {

        public function __construct()
        {
            parent::__construct();

            $this->defaultLayout = 'v3/layouts/app';
            if ($this->session->userdata('user_id') == null) {
                redirect('v3/auth');
            }
        }

        public function index()
        {
            $data = [];

            $this->config->load('assets/shipping_rates');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('v3/admin/shipping_rates/index', 'Shipping Rates', $data);
        }
    }
