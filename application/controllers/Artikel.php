<?php
class Artikel extends CI_Controller {
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('content/viewArtikel');
        $this->load->view('templates/footer');
    }
}