<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
		
		//load database library
        $this->load->database();
    }

    /*
     * Fetch user data
     */
    function getRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('users', array('user_id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('users');
            $data =$query->result_array();
            for($i=0; $i<count($data); $i++)
            $data[$i]["profile_img"]= "http://localhost:8000/uploads/profile/".$data[$i]["profile_img"];
            return $data;
        }
    }


     /*
     * Fetch user data
     */
    function agentuser($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('users', array('agentcode' => $id));
            return $query->result_array();
        }
    }

        function loginuser($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('users', array('user_id' => $id));
            return $query->row_array();
        }
    }



        function sellerdetail($id = ""){
        if(!empty($id)){
            $query = $this->db->select("seller_profile.*, users.phone")->join("users", "users.user_id=seller_profile.user_id")->get_where('seller_profile', array('seller_profile.user_id' => $id));
            return $query->row_array();
        }/*else{
            $query = $this->db->get('users');
            return $query->result_array();
        }*/
    }

     /*
     * Fetch user data
     */
    function checkuserexist($phone,$uniq_id){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('phone', $phone);
         $this->db->or_where('uniq_id', $uniq_id);
      
        $query = $this->db->get();
         return $query->row_array();
      
    }


    /*
     * Fetch user data
     */
    function checkphoneexist($phone){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('phone', $phone);
        $query = $this->db->get();
        $data =$query->row_array();
        
        return $data;
      
    }


    /*
     * Fetch user data
    */
    function checkdeviceexist($phone,$uniq_id){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('phone' => $phone ));
        $query = $this->db->get();
        $str=$query->row()->uniq_id;
        $flag="0";
    	$strr=$uniq_id;
    	$mob=explode(",",$str);
     	foreach ($mob as $key => $value) {
		if($value==$strr)
		$flag="1";
	}
	if($flag=="1")
	return $query->row_array();

      
    }
    function check_user_wishlist($uid, $pid){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where(array('id' => $pid ));
        $query = $this->db->get();
        if($query->row()){
        $str=$query->row()->wishlist_by;
        $flag="0";
    	$strr=$uniq_id;
    	$mob=explode(",",$str);
     	foreach ($mob as $key => $value) {
		if($value==$strr)
		$flag="1";
     	
	}
	if($flag=="1")
	return $query->row_array();
        }
    }
    function isdeviceregistered($uniq_id){
        // $this->db->select('*');
        // $this->db->from('users');
        $flag="0";
        $query = $this->db->get('users');
        $arr=$query->result_array();
        foreach ($arr as $key => $vae){
          $str=$arr[$key]['uniq_id'];
          $mob=explode(",",$str);  
         foreach ($mob as $ke => $value) {
	   	 if($value==$uniq_id)
		 $flag="1";
         }
        }
        return $flag;
    }
    
    function updateuniqid($uid, $phone){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('phone' => $phone ));
        $query = $this->db->get();
        $str=$query->row()->uniq_id;
        $strr=$str.','.$uid;
        $data = array(
               'uniq_id' => $strr
            );
        $this->db->update('users', $data, "phone = ".$phone);
        
    }
    function add_user_wishlist($uid, $pid){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where(array('id' => $pid ));
        $query = $this->db->get();
        if(!empty($query->row()->wishlist_by)){
        $str=$query->row()->wishlist_by;
        $strr=$str.','.$uid;
        $data = array(
               'wishlist_by' => $strr
            );
        }
        else{
        $strr=$uid;
        $data = array(
               'wishlist_by' => $strr
            );
        }
        if($this->db->update('product', $data, "id = ".$pid))
        return true;
        
    }
    function validateotp($verify_otp){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('OTP' => $verify_otp ));
        $query = $this->db->get();
        return $query->row_array();
      
    }

    function validatepass($password){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('password' => $password ));
        $query = $this->db->get();
        return $query->row_array();
      
    }



    function checkonlydeviceexist($uniq_id){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('uniq_id' => $uniq_id));
        $query = $this->db->get();
        return $query->row_array();
      
    }


function checkchatlist($sender_id,$reciever_id, $product_id){
$SQL="SELECT Distinct * FROM `chat_list` Where (sender_id = $sender_id AND receiver_id = $reciever_id AND product_id=$product_id) or (receiver_id = $sender_id AND sender_id = $reciever_id AND product_id=$product_id) order by id desc limit 1";    
    $query = $this->db->query($SQL);
    return $query->row_array();
 }

  function getuserallchat($sender_id,$reciever_id, $product_id=0){

   
        $SQL="SELECT * FROM (
  SELECT `id`, `sender_id`,`receiver_id`,`created`, `message`, `read_status`, `delivered_status`,`product_id` FROM `chat` where (sender_id = $sender_id AND receiver_id = $reciever_id AND product_id=$product_id) or (receiver_id = $sender_id AND sender_id = $reciever_id AND product_id=$product_id)  ORDER BY `id` DESC LIMIT 4
) t1 ORDER BY t1.id";
       
    $query = $this->db->query($SQL);
    return $query->result_array();
    
      
    }

  function loadchat($sender_id,$reciever_id,$load_cound, $product_id){

   
       /* $SQL="SELECT * FROM (
  SELECT `id`, `sender_id`,`receiver_id`,`created`, `message` FROM `chat` where `sender_id` = $sender_id and receiver_id = $reciever_id or `sender_id` = $reciever_id and receiver_id = $sender_id ORDER BY `id` DESC LIMIT $load_cound,4
) t1 ORDER BY t1.id";*/


  $SQL="SELECT `id`, `sender_id`,`receiver_id`, chat.created, `message`, `read_status`, `delivered_status`, users.profile_img FROM `chat` inner join users on users.user_id=chat.sender_id where (sender_id = $sender_id AND receiver_id = $reciever_id AND product_id=$product_id) or (receiver_id = $sender_id AND sender_id = $reciever_id AND product_id=$product_id) ORDER BY `id` DESC LIMIT $load_cound,4";

       
    $query = $this->db->query($SQL);
    $data=$query->result_array();
    for($i=0; $i<count($data); $i++){
        $data[$i]["profile_img"]=empty($data[$i]["profile_img"])?"http://localhost:8000/assets/images/profiledefault.png":"http://localhost:8000/uploads/profile/".$data[$i]["profile_img"];
    }
    return $data;
    
      
    }



    function getAboutus($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('about_us', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('about_us');
            return $query->result_array();
        }
    }



    /*
     * Fetch Category data
     */
    function getcategory($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('category', array('id' => $id));
            return $query->row_array();
        }else{
            $this->db->order_by("category", "Asc"); 
            $query = $this->db->get('category');
            return $query->result_array();
        }
    }



        function getdistrict($id = ""){
      
            $this->db->order_by("id", "Desc"); 
            $query = $this->db->get('district');
            return $query->result_array();
       
    }


        /*
     * Fetch Notification data
     */
    function getnotification($id = ""){
        if(!empty($id)){
            $query = $this->db->order_by("created", "desc")->get_where('notification', array('user_id' => $id, 'user_type'=>'user'));
            return $query->result_array();
        }else{
            $this->db->order_by("id", "Desc"); 
            $query = $this->db->get('notification', array('user_type'=>'user'));
            return $query->result_array();
        }
    }

 function getagentnotification($id = ""){
        if(!empty($id)){
            $query = $this->db->order_by("created", "desc")->get_where('notification', array('user_id' => $id, 'user_type'=>'agent'));
            return $query->result_array();
        }else{
            $this->db->order_by("id", "Desc"); 
            $query = $this->db->get('notification', array('user_type'=>'agent'));
            return $query->result_array();
        }
    }
        function getbanner(){
     
            $this->db->order_by("id", "Desc"); 
            $query = $this->db->get('banner');
            return $query->result_array();
      
    }

        /*
     * Fetch Privacy data
     */
    function getprivacypolicy($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('privacy_policy', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('privacy_policy');
            return $query->result_array();
        }
    }

    function gettermscondition($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('terms_condition', array('id' => $id));
            return $query->row_array();
        }else{
            $this->db->limit(1,0);
            $this->db->order_by("id", "ASC"); 
            $query = $this->db->get('terms_condition');
            return $query->result_array();
        }
    }


    function gethelp_support($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('help_support', array('id' => $id));
            return $query->row_array();
        }else{
            $this->db->limit(1,0);
            $this->db->order_by("id", "ASC"); 
            $query = $this->db->get('help_support');
            return $query->result_array();
        }
    }


    
        /*
     * Fetch user name data
     */
    function getnickname($name = ""){
        if(!empty($name)){
            $query = $this->db->get_where('users', array('nickname' => $name));
            return $query->row_array();
        }/*else{
            $query = $this->db->get('users');
            return $query->result_array();
        }*/
    }

    function getusername($name = ""){

        if(!empty($name)){
            $query = $this->db->get_where('users', array('nickname' => $name));
            return $query->row_array();
        }

    }
    
    
    /*
     * Insert user data
     */
    public function insert($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['created'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('users', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    /*
     * Insert user data
     */
    public function buyerinsert($data = array()) {
        if(!array_key_exists('created', $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists('modified', $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        $insert = $this->db->insert('buyer_profile', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function sellerinsert($data = array()) {
        if(!array_key_exists('created', $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists('modified', $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        $insert = $this->db->insert('seller_profile', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

  public function isuserexistsinseller($uid){
       $this->db->select('*');
        $this->db->from('seller_profile');
        $query=$this->db->where('user_id', $uid);
      
        if($query->num_row()>0)
         return true;
         else
         return false;
  }
    public function saveintrest($data = array()) {
        if(!array_key_exists('created', $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        
        $insert = $this->db->insert('intrest', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
    public function savewishlist($data = array()) {
        if(!array_key_exists('created', $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
 
        if(!get_wishlist($data['product_id'], $data['category_id'],$data['user_id']))
        $insert = $this->db->insert('wishlist', $data);
        else{
        $delete = $this->db->query("delete from wishlist where user_id=".$data['user_id']." and product_id=".$data['product_id']);
        }
        if($insert){
            return true;
        }else{
            return false;
        }
    }

    public function saveshoplist($data = array()) {
        if(!array_key_exists('created_at', $data)){
            $data['created_at'] = date("Y-m-d H:i:s");
        }
 
        if(!get_shoplist($data['product_id'],$data['category_id'],$data['shop_id'],$data['seller_user_id'], $data['shop_owner_user_id']))
        $insert = $this->db->insert('verify_product', $data);
        $datas['verified_product'] = '1';
       if($data['category_id']==1){
        $this->db->update('category_reusable_parts', $datas, "id = ".$data['product_id']);
       }
        else{
        $delete = $this->db->query("delete from wishlist where user_id=".$data['user_id']." and product_id=".$data['product_id']);
        }
        if($insert){
            return true;
        }else{
            return false;
        }
    }
    
    
    /*
     * Update user data
     */
    public function update($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modified', $data)){
				$data['modified'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('users', $data, array('user_id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }



        /*
     * Update user data
     */
    public function sellerupdate($data, $id) {
        if(!empty($data) && !empty($id)){
            if(!array_key_exists('modified', $data)){
                $data['modified'] = date("Y-m-d H:i:s");
            }
            $update = $this->db->update('seller_profile', $data, array('user_id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
    
        public function sellerupdateapi($data, $id) {
        if(!empty($data) && !empty($id)){
            if(!array_key_exists('modified', $data)){
                $data['modified'] = date("Y-m-d H:i:s");
            }
            $update = $this->db->update('seller_profile', $data, array('profile_id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }

        public function usernameupdate($data, $id) {
        if(!empty($data) && !empty($id)){
            if(!array_key_exists('modified', $data)){
                $data['modified'] = date("Y-m-d H:i:s");
            }
            $update = $this->db->update('users', $data, array('phone'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }

    public function updatenoti($data, $id) 
       {
            if(!empty($data) && !empty($id)){
                /*if(!array_key_exists('modified', $data)){
                    $data['modified'] = date("Y-m-d H:i:s");
                }*/
                $update = $this->db->update('notification', $data, array('user_id'=>$id));
                return $update?true:false;
            }else{
                return false;
            }
       }
 

    /*
     * Delete user data
     */
    public function delete($id){
        $delete = $this->db->delete('users',array('user_id'=>$id));
        return $delete?true:false;
    }


    public function removeintrest($id){
        $delete = $this->db->delete('intrest',$id);
        return $delete?true:false;
    }



      /*
     * Insert Contact data
     */
    public function contactusinsert($data = array()) {
        if(!array_key_exists('created', $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
       
        $insert = $this->db->insert('contact_us', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

        /*
     * Insert report data
     */
    public function report($data = array()) {
        if(!array_key_exists('created', $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
       
        $insert = $this->db->insert('report_abuse', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

        public function block($data = array()) {
        if(!array_key_exists('created', $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
       
        $insert = $this->db->insert('block', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

       public function sendnotification($token,$message){

         
                    $this->load->library('fcm');
                    $this->fcm->setTitle('Test FCM Notification');
                    $this->fcm->setMessage($message);

                    /**
                     * set to true if the notificaton is used to invoke a function
                     * in the background
                     */

                    $this->fcm->setIsBackground(false);

                    /**
                     * payload is userd to send additional data in the notification
                     * This is purticularly useful for invoking functions in background
                     * -----------------------------------------------------------------
                     * set payload as null if no custom data is passing in the notification
                     */
                    $payload = array('notification' => 'dsfsdfds');
                    $this->fcm->setPayload($payload);

                    /**
                     * Send images in the notification
                     */
                    $this->fcm->setImage('https://firebase.google.com/_static/9f55fd91be/images/firebase/lockup.png');

                    /**
                     * Get the compiled notification data as an array
                     */
                    $json = $this->fcm->getPush();

                    $p = $this->fcm->send($token, $json);

                   //print_r($p);

     }

function push_notification_android($device_id,$message, $type="other"){


       $url = "https://fcm.googleapis.com/fcm/send";
    $token = $device_id;
    $serverKey = 'AAAAZK3TFjM:APA91bFMqAfMveWDzP8hHyEz4-1So3rdkLMn3XloLcO_I04GSJyifenYrv6VH1A_4ax7O2JwAhGquIgVY-POGKQE12P5PNkbW-NF9w7x8sXfivf-sXwDBp9_XRXyXYXeUqOgCEboqhS5';
    $title = "Notification title";
    $body = "Hello I am from Your php server";
    $notification = array('title' =>$title , 'body' => $message, 'sound' => 'default', 'badge' => '1');
    $arrayToSend = array('to' => $token, 'notification' => $notification,'priority'=>'high');
  
    $json = json_encode($arrayToSend);
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: key='. $serverKey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    //Send the request
    $response = curl_exec($ch);
    //Close request
    if ($response === FALSE) {
    die('FCM Send Error: ' . curl_error($ch));
    }
    curl_close($ch);
    return $response;

    //API URL of FCM
    $url = 'https://fcm.googleapis.com/fcm/send';

       $api_key = 'AAAAZK3TFjM:APA91bFMqAfMveWDzP8hHyEz4-1So3rdkLMn3XloLcO_I04GSJyifenYrv6VH1A_4ax7O2JwAhGquIgVY-POGKQE12P5PNkbW-NF9w7x8sXfivf-sXwDBp9_XRXyXYXeUqOgCEboqhS5';
                
    $fields = array (
        'registration_ids' => array (
                $device_id
        ),
        'data' => array (
                "message" => $message,
                "type" => $type,

        )
    );

    //print_r($fields);

    //header includes Content type and api key
    $headers = array(
        'Content-Type:application/json',
        'Authorization:key='.$api_key
    );
                
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);

    //print_r($result);
    if ($result === FALSE) {
        die('FCM Send Error: ' . curl_error($ch));
    }
    curl_close($ch);


    return $result;
}
 


          public function sendToMultiple()
            {
                $token = array('Registratin_id1', 'Registratin_id2'); // array of push tokens
                $message = "Test notification message";

                $this->load->library('fcm');
                $this->fcm->setTitle('Test FCM Notification');
                $this->fcm->setMessage($message);
                $this->fcm->setIsBackground(false);
                // set payload as null
                $payload = array('notification' => '');
                $this->fcm->setPayload($payload);
                $this->fcm->setImage('https://firebase.google.com/_static/9f55fd91be/images/firebase/lockup.png');
                $json = $this->fcm->getPush();

                /** 
                 * Send to multiple
                 * 
                 * @param array  $token     array of firebase registration ids (push tokens)
                 * @param array  $json      return data from getPush() method
                 */
                $result = $this->fcm->sendMultiple($token, $json);
            }


public function updatedevice($device_id, $phone){
     $this->db->update("users", array("device_id"=>$device_id), "phone=".$phone);
}



public function checkuserstatus($user_id){
        if($this->db->get_where("users", array("user_id="=>$user_id))->num_rows()>0)
        return true;
        else
        return false;
}
}
?>