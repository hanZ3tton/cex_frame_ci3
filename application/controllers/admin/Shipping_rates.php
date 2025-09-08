    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Shipping_rates extends MY_Controller
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
            $data = [];

            $this->config->load('assets/shipping_rates');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('admin/shipping_rates/index', 'Shipping Rates', $data);
        }
    }
