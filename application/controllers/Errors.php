<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Errors extends MY_Controller
{

    public function page_not_found()
    {
        $this->output->set_status_header('404');

        $data = [
            'heading' => 'error',
            'message' => 'haha'
        ];
        $this->load->view('errors/html/error_404', $data);
    }
}
