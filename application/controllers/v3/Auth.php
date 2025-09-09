<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->defaultLayout = 'v3/layouts/guest';
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }

    public function index()
    {
        // Redirect to login page
        redirect('v3/auth/login');
    }

    public function login()
    {
        $data = [];
        $this->pageScripts = [
            'assets/js/custom/authentication/sign-in/general.js'
        ];
        $this->pageStyles = [];

        $this->loadView('v3/auth/login', 'Login', $data);
        if ($this->session->userdata('user_id')) {
            redirect('v3/admin/dashboard');
        }
    }

    public function login_process()
    {
        $data = [];
        $this->pageScripts = [
            'assets/js/custom/authentication/sign-in/general.js'
        ];
        $this->pageStyles = [];

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->loadView('v3/auth/login', 'Login', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->getUserByEmail($email);
            if ($user && password_verify($password, $user->password)) {
                $this->session->set_userdata('user_id', $user->id);
                $this->session->set_userdata('email', $user->email);
                $this->session->set_userdata('username', $user->username);
                $this->session->set_userdata('role_id', $user->role_id);
                $this->session->set_userdata('logged_in', TRUE);
                $data = [
                    'last_login' => date('Y-m-d H:i:s'),
                    'is_active' => 1
                ];
                $this->User_model->updateUser($user->id, $data);
                redirect('v3/admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect('v3/auth/login');
            }
        }
        if ($this->session->userdata('user_id')) {
            redirect('v3/admin/dashboard');
        }
    }

    public function forgot_password()
    {
        $data = [];
        $this->pageScripts = [
            'assets/js/custom/authentication/sign-in/general.js'
        ];
        $this->pageStyles = [];

        $this->loadView('auth/forgot_password', 'Reset Password', $data);
        if ($this->session->userdata('user_id')) {
            redirect('v3/admin/dashboard');
        }
    }

    public function new_password()
    {
        $data = [];
        $this->pageScripts = [
            'assets/js/custom/authentication/sign-in/general.js'
        ];
        $this->pageStyles = [];

        $this->loadView('auth/new_password', 'New Password', $data);
        if ($this->session->userdata('user_id')) {
            redirect('v3/admin/dashboard');
        }
    }

    public function regist()
    {
        $data = [];
        $this->pageScripts = [
            'assets/js/custom/authentication/sign-in/general.js'
        ];
        $this->pageStyles = [];

        $this->loadView('v3/auth/register', 'Register', $data);
        if ($this->session->userdata('user_id')) {
            redirect('v3/admin/dashboard');
        }
    }

    public function regist_process()
    {
        $data = [];
        $this->pageScripts = [
            'assets/js/custom/authentication/sign-in/general.js'
        ];
        $this->pageStyles = [];

        $this->form_validation->set_rules('username', 'Username', 'required|alpha_dash|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm-password', 'Password Confirmation', 'required|matches[password]');


        if ($this->form_validation->run() == FALSE) {
            $this->loadView('auth/register', 'Register', $data);
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'created_at' => date('Y-m-d H:i:s'),
                'is_active' => 1
            ];
            if ($this->User_model->createUser($data)) {
                $this->session->set_flashdata('success', 'Registration successful');
                redirect('v3/auth/login');
            } else {
                $this->session->set_flashdata('error', 'Registration failed');
                redirect('v3/auth/regist');
            }
        }
        if ($this->session->userdata('user_id')) {
            redirect('v3/admin/dashboard');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('v3/auth/login');
    }
}
