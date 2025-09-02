<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->defaultLayout = 'layouts/guest';
        $this->load->library('form_validation');
    }

    public function index()
    {
        // Redirect to login page
        redirect('auth/login');
    }

    public function login()
    {
        $data = [];
        $this->pageScripts =  [
            'assets/plugins/global/plugins.bundle.js',
            'assets/js/scripts.bundle.js',
            'assets/js/custom/authentication/sign-in/general.js'
        ];
        $this->pageStyles =  [
            'assets/plugins/global/plugins.bundle.css',
            'assets/css/style.bundle.css'
        ];

        $this->loadView('auth/login', 'Login', $data);
    }

    public function forgot_password()
    {
        $data = [];
        $this->pageScripts =  [
            'assets/plugins/global/plugins.bundle.js',
            'assets/js/scripts.bundle.js',
            'assets/js/custom/authentication/sign-in/general.js'
        ];
        $this->pageStyles =  [
            'assets/plugins/global/plugins.bundle.css',
            'assets/css/style.bundle.css'
        ];

        $this->loadView('auth/forgot_password', 'Reset Password', $data);
    }

    public function new_password()
    {
        $data = [];
        $this->pageScripts =  [
            'assets/plugins/global/plugins.bundle.js',
            'assets/js/scripts.bundle.js',
            'assets/js/custom/authentication/sign-in/general.js'
        ];
        $this->pageStyles =  [
            'assets/plugins/global/plugins.bundle.css',
            'assets/css/style.bundle.css'
        ];

        $this->loadView('auth/new_password', 'New Password', $data);
    }

    public function regist()
    {
        $data = [];
        $this->pageScripts =  [
            'assets/plugins/global/plugins.bundle.js',
            'assets/js/scripts.bundle.js',
            'assets/js/custom/authentication/sign-in/general.js'
        ];
        $this->pageStyles =  [
            'assets/plugins/global/plugins.bundle.css',
            'assets/css/style.bundle.css'
        ];

        $this->loadView('auth/register', 'Register', $data);
    }
}
