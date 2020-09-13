<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
Class Telcome_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    /* Create model */
    public function insert($data){
        $this->db->insert('tbcustomer',$data);        
    }
    /* Update model */
    public function update($data){
        $this->db->where('customer_id', $this->input->post('customer_id'));
		$this->db->update('tbcustomer',$data);
    }
    /* Delete model */
    public function delete($id){
        $this->db->where('customer_id', $id);
        $this->db->delete('tbcustomer');
        redirect(base_url('welcome/show'));	
    }
}