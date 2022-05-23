<?php
class Lainnya extends CI_Controller {
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('content/viewLainnya');
        $this->load->view('templates/footer');
    }
}