<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
		//load database library
        $this->load->database();
    }

    public function category_reusable_parts($data = array()) {
        $insert = $this->db->insert(' category_reusable_parts', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function category_tuitions($data = array()) {
        $insert = $this->db->insert(' category_tuitions', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function category_job($data = array()) {
        $insert = $this->db->insert(' category_job', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function category_internships($data = array()) {
        $insert = $this->db->insert(' category_internships', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }



}