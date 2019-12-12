<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index(){
		  $data ["title"] ="Login";
          $this->load_login_page('index', $data, "login_footer");
	}

	public function register(){
		  $data ["title"] ="Register";
           $this->load_login_page('index', $data, "login_footer");

	}

	public function process_register(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$email = $this->input->post("email");
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required');
		if($this->form_validation->run() == false){
			$this->load_login_page('register');
		}else{

		}
	}

}
