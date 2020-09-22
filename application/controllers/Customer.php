<?php
class Customer extends CI_controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Customer_model');
    }
    //ลงทะเบียนเปิดใช้งานบัญชี
    public function Signup(){
        $data = array(
			"customer_id"=> time(),
            "customer_name"=> $this->input->post('customer_name'),
            "customer_email"=> $this->input->post('customer_email'),
            "customer_phone"=> $this->input->post('customer_phone')
		);
		$this->Customer_model->insert($data);		
		redirect(base_url('app/success'));
    }
     //ตรวจสอบข้อมูลการเข้าใช้งานระบบ พร้อมทั้ง สร้าง Session สำหรับ ผู้ดูแลคลินิก
    public function SignIn(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $query = $this->db->query("SELECT * FROM tbcustomer WHERE customer_email='$username' AND customer_phone='$password'");
        $row = $query->row();
        if ($query->num_rows() > 0) {
            $this->session->set_userdata('username', $row->customer_email);
            redirect(base_url('app'));
        } else {
            redirect(base_url('app'));
        }
    }
       //ออกจากระบบ เคลียร์ session ทิ้งให้หมด
       public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}