<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('welcome_model');
	}
	/* Load index page */

	public function welcome(){
		
	}
	public function index()
	{
		$data['data'] = $query = $this->db->get('tbcustomer')->result();
		$this->load->view('template/header');
		$this->load->view('welcome_message',$data);
		$this->load->view('template/footer');
	}
	/* Show customer */
	public function show(){
		$data['data'] = $query = $this->db->get('tbcustomer')->result();		
		$this->load->view('welcome_message',$data);
	}
	/* Delete customer */
	public function delete($id){
		$this->Welcome_model->delete($id);			
	}
	/* Create customer */
	public function insert(){
		$data = array(
			"customer_id"=> $this->input->post('customer_id'),
			"customer_name"=> $this->input->post('customer_name')
		);
		$this->Welcome_model->insert($data);		
		redirect(base_url('welcome'));
	}
	/* Update customer */
	public function update(){
		$data = array(
			"customer_id"=> $this->input->post('customer_id'),
			"customer_name"=> $this->input->post('customer_name')
		);
		$this->Welcome_model->update($data);
		redirect(base_url('welcome/show'));
	}
	/* Send Data customer to edit */
	public function edit($id){
		$data['id'] = $id;
		$this->load->view('edit',$data);
	}

}
