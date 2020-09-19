<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('');
	}

	public function index()
	{
		$this->load->view('Welcome_message');
	}
	public function success(){
		$this->load->view('success');
	}
	public function SingUp(){
		$this->load->view('');
		$this->load->view('');
		$this->load->view('');
	}


}
