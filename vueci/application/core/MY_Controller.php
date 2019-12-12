<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	public function load_page($page,$data = array(), $footer =""){
		$this->load->view('includes/head',$data);
		$this->load->view('includes/admin/header',$data);
		$this->load->view('includes/admin/sidebar',$data);
		$this->load->view($page, $data);
		$this->load->view($footer, $data);
	}
	public function load_login_page($page,$data = array(), $footer=""){
		$this->load->view('includes/Login/head',$data);
		$this->load->view($page,$data);
		$this->load->view($footer,$data);
	}
}
