<?php

class Register extends CI_Controller
{
    public function Register()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        
        if($this->input->post()){
            if($this->User_model->doRegister()) 
            redirect(site_url('admin/login'));
        }

        // tampilkan halaman register
        $this->load->view("admin/Register_page.php");
    }

    //controller tambah user
    public function doRegister()
    {
        $data['judul'] = "Form Registrasi";
        $this->form_validation->set_rules('email', 'Email','required|valid_email');
        $this->form_validation->set_rules('username', 'Username','required');
        $this->form_validation->set_rules('password', 'Password','required');

        if( $this->form_validation->run() == FALSE ){
            $this->load->view('templates/header', $data);
            $this->load->view('admin/Register_page');
            $this->load->view('templates/footer');

        } else {
            $this->User_model->doRegister();
            // $this->session->set_flashdata('message', 'ditambahkan.');
            redirect('admin/login');
        }
    }
}