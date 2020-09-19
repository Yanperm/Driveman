<?php
class Customer extends CI_controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Customer_model');
    }
    public function Signup(){
        $data = array(
			"customer_id"=> time(),
            "customer_name"=> $this->input->post('customer_name'),
            "customer_email"=> $this->input->post('customer_email'),
            "customer_phone"=> $this->input->post('customer_phone')
		);
		$this->Customer_model->insert($data);		
		redirect(base_url('welcome/success'));
    }
}