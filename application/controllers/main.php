<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'DASHBOARD |';
        $this->load->view('master/header', $data);
        $this->load->view('master/sidebar');
        $this->load->view('index');
        $this->load->view('master/footer');
    }
}
