<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
		//load database library
        $this->load->database();
    }

    public function reusable_parts($data = array()) {
        $insert = $this->db->insert('reusable_parts', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }


}