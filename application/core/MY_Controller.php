<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public $defaultLayout = 'layouts/guest';
    public $pageScripts = [];
    public $pageStyles = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Inbound_model');
        $this->data = [
            'count_all'          => $this->Inbound_model->count_all_inbound(),
            'count_not_process'  => $this->Inbound_model->count_by_status(15),
            'count_not_completed' => $this->Inbound_model->count_by_status(3),
            'count_completed'    => $this->Inbound_model->count_by_status(7),
            'count_outbound'     => $this->Inbound_model->count_by_status('OUTBOUND'),
        ];
    }

    public function loadView($view, $title, $data = [])
    {
        // merge counter data juga
        $data = array_merge($this->data, $data);

        // Set Data Title
        $data['title'] = $title;

        $this->layout->set_title($title);
        $this->layout->set_layout($this->defaultLayout);
        $this->layout->set_view($view, $data);

        if (isset($data['scripts'])) {
            $this->layout->set_scripts($data['scripts']);
        } else {
            $this->layout->set_scripts($this->pageScripts);
        }

        if (isset($data['styles'])) {
            $this->layout->set_styles($data['styles']);
        } else {
            $this->layout->set_styles($this->pageStyles);
        }

        $this->load->view($this->defaultLayout, $this->layout->data);
    }
}
