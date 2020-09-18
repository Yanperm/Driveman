<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('');
	}

	public function index()
	{
		$this->load->view('Welcome_message');
	}
	public function SingIn(){
		$this->load->view('');
		$this->load->view('');
		$this->load->view('');
	}
	public function SingUp(){
		$this->load->view('');
		$this->load->view('');
		$this->load->view('');
	}


}
