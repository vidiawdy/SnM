<?php

class MyController_test extends TestCase{
    
    public function test_method_404()
	{
		$this->request('GET', 'MyControler/method_404');
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
        
        //test untuk 
        public function test_index(){
            $output = $this->request('GET', 'MyController/index'); //(('GET', 'controller/method'))
            $this->assertContains('<title>index</title>', $output);
            
        }
        public function test_indexAfter(){
            $output = $this->request('GET', 'MyController/indexAfter'); //(('GET', 'controller/method'))
            $this->assertContains('<title>indexAfter</title>', $output);
            
        }
        public function test_makanan(){
            $output = $this->request('GET', 'MyController/makanan'); //(('GET', 'controller/method'))
            $this->assertContains('<title>Sponsorship</title>', $output);
        }
        public function test_minuman(){
            $output = $this->request('GET', 'MyController/minuman'); //(('GET', 'controller/method'))
            $this->assertContains('<title>Mediapartner</title>', $output);
        }
        //masi error minuman
        public function test_signup(){
            $output = $this->request('GET', 'MyController/signup'); //(('GET', 'controller/method'))
            $this->assertContains('<title>Register</title>', $output);
        }
        
}