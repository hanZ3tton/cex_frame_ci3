    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class User extends MY_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->defaultLayout = 'v3/layouts/app';
            $this->load->model('User_model');
            $this->load->library('form_validation');
            if (!$this->session->userdata('logged_in')) {
                redirect('auth');
            }
        }

        public function index()
        {
            $data = [
                'users' => $this->User_model->getAllUser()
            ];
            $this->config->load('assets/user');
            $page_assets = $this->config->item('assets');
            $this->pageScripts =  $page_assets['js'];
            $this->pageStyles =  $page_assets['css'];
            $this->loadView('v3/admin/user/index', 'User List', $data);
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

            $this->loadView('v3/admin/user/create', 'Create User', $data);
        }

        public function store()
        {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
            if ($this->form_validation->run() == FALSE) {
                $this->create();
            } else {
                // generate new username
                $account = $this->session->userdata('account');
                $user_role = $this->input->post('user_role');

                $prefix = $account . $user_role;

                $this->db->like('username', $prefix, 'after');
                $this->db->order_by('username', 'desc');
                $this->db->limit(1);
                $query = $this->db->get('tb_user_agent');

                $number = 1;

                if ($query->num_rows() > 0) {
                    $last_username = $query->row()->username;
                    $last_number = (int)substr($last_username, strlen($prefix));
                    $number = $last_number + 1;
                }
                $username = $prefix . $number;
                $password = $this->input->post('password');

                // insert data to database
                $data = [
                    'username' => $username,
                    'nama' => $this->input->post('name'),
                    'password' => hash('sha256', $password),
                    'grup' => $user_role,
                    'account' => $account,
                    'status' => $this->input->post('is_active')

                ];

                if ($this->User_model->createUser($data)) {
                    redirect('v3/admin/user');
                    $this->session->set_flashdata('success', 'New user has been added');
                } else {
                    $this->session->set_flashdata('error', 'Failed to create user. Try again later');
                    redirect('v3/admin/user');
                }
            }
        }

        public function edit($code)
        {
            $data = [
                'user' => $this->User_model->getUserByCode($code)
            ];
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

            $this->loadView('v3/admin/user/edit', 'Update User', $data);
        }

        public function update($code)
        {
            $this->form_validation->set_rules('name', 'Name', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->edit($code);
            } else {
                $usernameAdmin = $this->session->userdata('username');
                $data = [
                    'nama' => $this->input->post('name'),
                    'grup' => $this->input->post('user_role'),
                    'status' => $this->input->post('is_active'),
                    'updatedby' => $usernameAdmin,
                    'updatedon' => date('Y-m-d H:i:s')
                ];

                if ($this->User_model->updateUser($code, $data)) {
                    $this->session->set_flashdata('success', 'Changes saved! The user data has been updated');
                    redirect('v3/admin/user');
                } else {
                    $this->session->set_flashdata('error', 'Failed to update user. Try again later');
                    redirect('v3/admin/user');
                }
            }
        }

        public function change_password($code)
        {
            $data = [
                'user' => $this->User_model->getUserByCode($code)
            ];
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
            $this->loadView('v3/admin/user/change_password', 'Change Password', $data);
        }

        public function update_password($code)
        {
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('confirm_password', 'Password', 'required|matches[password]');
            if ($this->form_validation->run() == false) {
                $this->change_password($code);
            } else {
                $password = $this->input->post('password');
                $data = [
                    'password' => hash('sha256', $password)
                ];
                if ($this->User_model->updateUser($code, $data)) {
                    $this->session->set_flashdata('success', 'Password successfully updated! You can now log in with your new password. ');
                    redirect('v3/admin/user');
                } else {
                    $this->session->set_flashdata('error', 'Failed to change password. Try again later');
                    redirect('v3/admin/user');
                }
            }
        }

        public function delete($code)
        {
            if ($this->User_model->deleteUser($code)) {
                $this->session->set_flashdata('success', 'The user has been removed');

                redirect('v3/admin/user');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete data. Try again later');
                redirect('v3/admin/user');
            }
        }
    }
