<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('content/viewHome');
        $this->load->view('templates/footer');
    }
}