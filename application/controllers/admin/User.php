    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class User extends MY_Controller
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
            $this->config->load('assets/user');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];

            $this->loadView('admin/user/index', 'User List', $data);
        }

        public function create()
        {
            $data = [];
            $this->pageScripts = [
                "assets/js/custom/apps/contacts/edit-contact.js",
                "assets/js/widgets.bundle.js",
                "assets/js/custom/widgets.js",
                "assets/js/custom/apps/chat/chat.js",
                "assets/js/custom/utilities/modals/upgrade-plan.js",
                "assets/js/custom/utilities/modals/create-app.js",
                "assets/js/custom/utilities/modals/users-search.js",
            ];
            $this->pageStyles = [
                'assets/plugins/custom/datatables/datatables.bundle.css',
            ];

            $this->loadView('admin/user/create', 'Create User', $data);
        }

        public function edit()
        {
            $data = [];
            $this->pageScripts = [
                "assets/js/custom/apps/contacts/edit-contact.js",
                "assets/js/widgets.bundle.js",
                "assets/js/custom/widgets.js",
                "assets/js/custom/apps/chat/chat.js",
                "assets/js/custom/utilities/modals/upgrade-plan.js",
                "assets/js/custom/utilities/modals/create-app.js",
                "assets/js/custom/utilities/modals/users-search.js",
            ];
            $this->pageStyles = [
                'assets/plugins/custom/datatables/datatables.bundle.css',
            ];

            $this->loadView('admin/user/edit', 'Update User', $data);
        }
    }
