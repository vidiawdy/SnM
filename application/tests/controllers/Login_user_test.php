<?php

class Login_user_test extends TestCase{
    
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
            $output = $this->request('GET', 'Login_User/index'); //(('GET', 'controller/method'))
            $this->assertContains('<title>Login Form</title>', $output);
            
        }
        //test untuk mengecek apakah uname dan password sesuai
        public function test_LoginSuccess(){
            $this->request('POST', 'Login_User/loginuser',
                [
                    'username'=>'vidiawdy',
                    'password'=>'1234',
                ]
                    );
            $actual = $_SESSION['nama'];
            $this->assertEquals('vidiawdy', $actual);
        }
        public function test_LoginFailed(){
            $this->request('POST', 'Login_User/loginuser',
                [
                    'username'=>'bejo',
                    'password'=>'1239',
                ]
                    );
            $this->assertRedirect('index.php/Login_User');
        }
        public function test_LoginEmptyField(){
            $this->request('POST', 'Login_User/loginuser',
                [
                    'username'=>'vidiawdy',
                    'password'=>'',
                ]
                    );
            $this->assertRedirect('index.php/Login_User');
        }
        public function test_logout(){
            $this->request('GET', 'Login_User/logout');
            $this->assertNull($_SESSION['nama']);
        }
}