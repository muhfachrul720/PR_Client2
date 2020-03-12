<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$this->load->view('parts/public/header');
		$this->load->view('landing');
	}
	
	public function role()
	{
		$this->load->view('parts/public/header');
		$this->load->view('public/role_selected');
	}
}
