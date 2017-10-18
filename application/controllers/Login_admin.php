<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('Model_Admin');
    }

    public function index(){
		$this->load->view('Sbadmin');
	}
    
    
    public function login()
    {
        if(isset($_POST['submit']))
        {
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil      =   $this->Model_Admin->login($username,$password);
            if($hasil==TRUE)
            {
                $this->session->set_userdata('admin',TRUE);
                //bawah ini yg ak tambahin index.php
                redirect ('index.php/admin/Dashboard');
            } else
            {
                echo '<script language="javascript">';
                echo 'alert("Login Gagal. Perhatikan username password");';
                echo '</script>';
                $this->load->view('Loginadmin');
            }
        }
    }
    
    public function logout()
    {
            $this->session->sess_destroy();
            redirect('index.php/Welcome');
    }
}