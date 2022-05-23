<?php
class Profil extends CI_Controller {
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('content/viewProfil');
        $this->load->view('templates/footer');
    }
}