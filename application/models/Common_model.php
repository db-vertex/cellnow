<?php
Class Common_model extends CI_Model 
{
	public function __construct() {
  		parent::__construct();
	}

	public function getRecords($table,$field,$where='',$orderBy='',$isSingle=true) {
		$this->db->select($field);
		if (!empty($where)) {
			$this->db->where($where);
		}
		if (!empty($orderBy)) {
			$this->db->order_by($orderBy);
		}
		$sql = $this->db->get($table);
		if($sql->num_rows()>0) {
			if ($isSingle) {
				return $sql->result_array();
			}else{
				return $sql->row_array();
			}
		}else{
			return 0;
		}
	}

	public function addEditRecords($table,$data,$where='') {
		if (!empty($where)) {
		    $this->db->where($where);
		    $sql=$this->db->update($table,$data);
    		return 1; 		    
		}else{
			$query = $this->db->insert($table,$data);
		 	$id=$this->db->insert_id();
			if($id) {
		    	return $id;
		    } else {
	          	return 0;
		    }	
		}
	}

	public function deleteRecord($table,$where) {
		$this->db->where($where);
		$sql=$this->db->delete($table);
		return $sql; 
	}	

	public function defaultEmailSend($from_email,$to_email,$subject,$message) {

		$this->load->library('email');
		//SMTP & mail configuration

		$this->email->set_mailtype("html");
		$this->email->set_newline('\r\n');

		//Email content
		$this->email->to($to_email);
		$this->email->from($from_email, SITE_TITLE);
		$this->email->subject($subject);
		$this->email->message($message);
		$mail = $this->email->send();

	}






}
