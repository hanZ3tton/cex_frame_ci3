    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Dashboard extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this->defaultLayout = 'v3/layouts/app';
            if (!$this->session->userdata('logged_in')) {
                redirect('auth');
            }
        }

        public function index()
        {
            $data = [];
            load_page__assets($this, 'dashboard/page');

            $this->loadView('v3/admin/dashboard/index', 'Dashboard', $data);
        }
    }
