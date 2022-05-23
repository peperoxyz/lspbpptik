<?php

class User_model extends CI_Model
{
    private $_table = "users";

    public function doLogin(){
		$post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["email"])
                ->or_where('username', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);
            // periksa role-nya

            // jika password benar
            if($isPasswordTrue){ 
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->user_id);
                return true;
            }
        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }

    public function doRegister()
    {
        $data = [
            "full_name" => $this->input->post('full_name'),
            "email" => $this->input->post('email', true),
            "username" => $this->input->post('username', true),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];
        $this->db->insert('users', $data);
        redirect('admin/login');
    }
   public function getUserById($user_id)
    {
        return $this->db->get_where('users', ['user_id' => $user_id])->row_array();
    }
    
    public function getUserByBioId($biodata_id)
    {
        return $this->db->get_where('biodata', ['biodata_id' => $biodata_id])->row_array();
    }

}