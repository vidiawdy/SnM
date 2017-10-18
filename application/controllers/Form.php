<?php  

class Form extends CI_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
                $this->load->model('Model_Regis');
	}
        function index(){
		$this->load->view('Register');
	}
	

	function submit()
	{
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('country', 'country', 'required');
		$this->form_validation->set_rules('city', 'city', 'required');
		$this->form_validation->set_rules('phone_number', 'phone_number', 'required|integer');

		if($this->form_validation->run() != FALSE)
		{
			$this->session->set_flashdata('message', 'Registrasi berhasil dan sudah terdaftar');
                        $name 		= $this->input->post('name');
			$username	= $this->input->post('username');
			$password	= $this->input->post('password');
			$address	= $this->input->post('address');
			$country	= $this->input->post('country');
			$city		= $this->input->post('city');
			$phone_number	= $this->input->post('phone_number');

			$data=array(
				'name' => $name,
				'username' => $username,
				'password' => sha1($password),
				'address' => $address,
				'country' => $country,
				'city' => $city,
				'phone_number' => $phone_number
				);
                        
                        $data_session = array(
				'nama' => $username,
				'status' => "Regis_user"
				);		
			$result=$this->Model_Regis->input_data($data);
            if($result==true){
                $this->session->set_userdata($data_session);
                redirect('index.php/MyController/indexAfter');   }
            else{
                redirect('index.php/Form/index');}}
    else 
            $this->load->view('Register');
	}        
}