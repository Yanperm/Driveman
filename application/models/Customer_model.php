<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
Class Customer_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    /* Create customer */
    public function insert($data){
        $this->db->insert('tbcustomer',$data);        
    }
    /* Update customer */
    public function update($data){
        $this->db->where('customer_id', $this->input->post('customer_id'));
		$this->db->update('tbcustomer',$data);
    }
    /* Delete customer */
    public function delete($id){
        $this->db->where('customer_id', $id);
        $this->db->delete('tbcustomer');
        redirect(base_url('welcome/success'));	
    }
}