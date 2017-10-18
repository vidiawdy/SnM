<?php

class Login_User extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Login');


	}

	function index(){
		$this->load->view('Loginuser');
	}

	function loginuser()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => sha1($password)
			);
		$cek = $this->Model_Login->user_login("user",$where)->num_rows();
                //var_dump($cek);die();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login_user"
				);

			$this->session->set_userdata($data_session);

			redirect("index.php/MyController/IndexAfter");
			//$this->load->view('index');

		}else{$this->session->set_flashdata('message', 'Username or password salah');
			redirect('index.php/Login_User');}}
			//echo "Username dan password salah !";		
	
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/MyController'));}
}
//	function logout(){
//		$this->session->destroy();
//		redirect(base_url('Login_User'));
//	}
//}
