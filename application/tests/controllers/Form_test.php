<?php

class Form_test extends TestCase{
    
    public function test_method_404()
	{
		$this->request('GET', 'Login_con/halo');
		$this->assertResponseCode(404);
	}
    public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
//        public function test_index_login(){
//            $output = $this->request('GET', 'Login_con/index');
//            $this->assertContains('<title>Login Dashboard</title>', $output);
//        }
        //test untuk 
        public function test_index(){
            $output = $this->request('GET', 'Form/index'); //(('GET', 'controller/method'))
            $this->assertContains('<title>Register</title>', $output);   
        }
        public function test_submitFailed(){
            $output = $this->request('POST', 'Form/submit',
                    [
                        'name' => '',
                        'username' => '',
                        'password' => '',
                        'address' => '',
                        'country' => '',
                        'city' => '',
                        'phone_number' => ''
                    ]); //(('GET', 'controller/method'))
            $this->assertContains('<title>Register</title>', $output);
        }
        
        public function test_submitSuccess(){
            $output = $this->request('POST', 'Form/submit',
                    [
                        'name' => 'ijul',
                        'username' => 'ijul',
                        'password' => '1234',
                        'address' => 'sby',
                        'country' => 'indo',
                        'city' => 'sby',
                        'phone_number' => '09753578'
                    ]); //(('GET', 'controller/method'))
            $this->assertRedirect('index.php/MyController/indexAfter');
            
        }
        public function test_UsernameUnik(){
            $output = $this->request('POST', 'Form/submit',
                    [
                        'name' => 'hipzul',
                        'username' => 'ijul',
                        'password' => '1234',
                        'address' => 'sbyaa',
                        'country' => 'indonesia',
                        'city' => 'sbya',
                        'phone_number' => '09753578'
                    ]); //(('GET', 'controller/method'))
            $this->assertRedirect('index.php/Form/index');
            
        }
        public function test_PhoneNumberUnik(){
            $output = $this->request('POST', 'Form/submit',
                    [
                        'name' => 'hipzul',
                        'username' => 'weqk',
                        'password' => '1234',
                        'address' => 'sbyaa',
                        'country' => 'indonesia',
                        'city' => 'sbya',
                        'phone_number' => 'aaaaa'
                    ]); //(('GET', 'controller/method'))
            $actual = $this->request('GET', 'Form/submit');
            $this->assertContains('<title>Register</title>', $actual);
            
        }
}