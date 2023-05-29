<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Chat_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
		//load database library
        $this->load->database();
    }

    /*
     * Fetch user datachat_model
     */
    function getRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('chat', array('id' => $id));
            return $query->row_array();
        }
    }
    
     public function getchatsss($sender_id, $receiver_id){
     $this->db->query("update chat set read_status =1 where  receiver_id = $receiver_id");  
    return    $this->db->query("select *from chat where (sender_id = $sender_id AND receiver_id = $receiver_id) or (receiver_id = $sender_id AND sender_id = $receiver_id) order by created asc")->result();
   }

   
    /*
     * Fetch user data
     */
    function chatlist($id = ""){
        if(!empty($id)){
             $query = $this->db->query("select * from chat_list inner join users ON users.user_id=chat_list.sender_id where sender_id=$id or receiver_id=$id order by chat_list.updated desc");
            return $query->result_array();
        }
    }



    function unreadchat($id = ""){
       if(!empty($id)){
           // $query = $this->db->get_where('chat', array('id' => $id));
              //$this->db->distinct('receiver_id'); 
             $this->db->select('*');
             $this->db->from('chat');
             //$this->db->where('sender_id', $id);
             $this->db->where(array('receiver_id'=> $id,'read_status' => 0));
             //$this->db->distinct('receiver_id');
             $this->db->order_by('id', 'desc'); 
             $query = $this->db->get();
             if($query->num_rows()>0)
            return true;
            else
            return false;
        }
    }

  function seenallchat($id){
      $this->db->update('chat', ['read_status'=>'1', 'delivered_status'=>'1'], 'receiver_id='.$id);
  }
  
  function delivereallchat($id){
      $this->db->update('chat', ['delivered_status'=>'1'], 'receiver_id='.$id);
  }
    function unreadnotification($id = ""){
        if(!empty($id)){
           // $query = $this->db->get_where('chat', array('id' => $id));
              //$this->db->distinct('receiver_id'); 
             $this->db->select('*');
             $this->db->from('notification');
             //$this->db->where('sender_id', $id);
             $this->db->where(array('user_id'=> $id,'read_status' => 0));
           
             
             //$this->db->distinct('receiver_id');
             $this->db->order_by('id', 'desc'); 
             $query = $this->db->get();
            return $query->result_array();
        }
    }

    
    /*
     * Insert user data
     */
    public function insert($data = array()) {
        date_default_timezone_set('Asia/Kolkata');
		if(!array_key_exists('created', $data)){
			$data['created'] = date("Y-m-d H:i:s");
           
		}
        $data['chat_created'] = date("Y-m-d H:i:s");
       
        //$this->db->insert('chat_list', $data);
	    $date = date('Y-m-d H:i:s');

        $data['time'] = $date;

        $insert = $this->db->insert('chat', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }


        public function update($data, $id) {
        if(!empty($data) && !empty($id)){
           
            $update = $this->db->update('chat_list', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }


            public function updateunreadmessage($data, $sender_id,$receiver_id){
        /*if(!empty($data)){*/
           
            $update = $this->db->update('chat', $data, array('sender_id'=>$sender_id,'receiver_id'=>$receiver_id));
            return $update?true:false;
       /* }else{
            return false;
        }*/
    }

    
       function lastchat($id = ""){
        if(!empty($id)){
           // $query = $this->db->get_where('chat', array('id' => $id));
              //$this->db->distinct('receiver_id'); 
             $this->db->select('*');
             $this->db->from('chat');
             $this->db->where('sender_id', $id);
             $this->db->or_where('receiver_id', $id);
             $this->db->order_by('id', 'ASC'); 
             $query = $this->db->get();
            return $query->result_array();
        }
    }
    
    /*
     * Delete user data
     */
    public function delete($data){
        $delete = $this->db->delete('chat',array('id'=>$id));
        return $delete?true:false;
    }

}
?>