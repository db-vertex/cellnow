<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

function get_category($categoryid)
{
	//get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT category FROM category WHERE id=".$categoryid;

  $category_data = $ci->db->query($query);        

  return $category_data->row();	
}

function is_user_exists($phone){
  $CI =& get_instance();
  $result = $CI->db->get_where("users", ["phone"=>$phone])->row();
  return $result?true:false;
}

function get_category_name($id){
    $category=$this->db->get_where("category", "id=$id")->row()->category;
    return $category;
}
function get_all_category()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category order by category";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_district()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM district";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_user_nickname($user_id)
{
	//get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
  $query="SELECT username,email, phone, agentcode FROM users WHERE user_id=".$user_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row();	
}

function get_username($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
$query="SELECT username,phone,email FROM users WHERE user_id=".$user_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_userdetail($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
    //   print_r($user_id);
$query="SELECT * FROM users WHERE user_id=".$user_id;
// echo $user_id;
  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
 }
function get_userdetailss($p_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
$query="SELECT user_id FROM product WHERE id=".$p_id;
  $product_data = $ci->db->query($query);  
  $row = $product_data->row_array();
  
$quer="SELECT * FROM users WHERE user_id=".$row["user_id"];
  $seller_data = $ci->db->query($quer);
  return $seller_data->row(); 
}

function get_customad()
{
  //get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
$query="SELECT * FROM costomad order by id desc";

//echo $query;

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}


function get_user_phone($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
       $query="SELECT username,phone,user_id FROM users WHERE user_id=".$user_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_post_report($post_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
$query="SELECT * FROM report_abuse WHERE post_id=".$post_id;

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}




function check_seller_profile($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
$query="SELECT * FROM seller_profile WHERE user_id=".$user_id;

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_seller_profile($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
$query="SELECT * FROM users WHERE user_id=".$user_id;

  $category_data = $ci->db->query($query);        
  if($category_data-> num_rows()>0)
  return $category_data->row(); 
  else
  return null;
}


function get_users_details($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
$query="SELECT * FROM users WHERE user_id=".$user_id;

  $category_data = $ci->db->query($query);        
  if($category_data-> num_rows()>0)
  return $category_data->row(); 
  else
  return null;
}

function get_seller_profile_by_profile_id($profile_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
$query="SELECT * FROM seller_profile WHERE profile_id=".$profile_id;
// print_r($query);
  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_product_data($product_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product WHERE id=".$product_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_product_image($product_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product_image WHERE product_id=".$product_id;

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_subcategory_byid($category_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM subcategory WHERE category=".$category_id;

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_subcategoryname_byid($sub_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM subcategory WHERE sub_id=".$sub_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_product_video($product_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product_video WHERE product_id=".$product_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}


function get_product_by_category($category_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product INNER JOIN users ON users.user_id = product.user_id WHERE category_id=".$category_id." AND product.active_status=0 and product.status = 0 And product.product_available_status = 0 AND users.status = 0 order by stock asc, featured desc,  product.created LIMIT 9";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_myall_deactive_product($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product WHERE user_id=".$user_id." AND  status != 0";

  $category_data = $ci->db->query($query);        

  return $category_data->result_array(); 
}

function get_myall_active_product($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product WHERE user_id=".$user_id." AND  status = 0 And active_status = 0";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_all_product()
{
$ci =& get_instance();
$ci->load->database();

  $query="SELECT * FROM product INNER JOIN users ON users.user_id = product.user_id WHERE product.status = 0 And product.active_status = 0 And product.product_available_status = 0 And product.featured = 0 AND  users.status = 0 order by featured desc, stock asc, product.created desc LIMIT 0, 20";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_featured_product()
{
$ci =& get_instance();
$ci->load->database();

  $query="SELECT * FROM product INNER JOIN users ON users.user_id = product.user_id WHERE product.status = 0 And product.active_status = 0 And product.product_available_status = 0 And product.featured = 1 AND  users.status = 0 order by product.priority asc, product.created  desc LIMIT 0, 20";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_total_no_featured_product(){
    $ci =& get_instance();
    $ci->load->database();
    $query=$ci->db->query("select count(*) as total from (SELECT count(*) as total FROM product inner join product_image on product.id=product_image.product_id inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where status=0 and active_status=0 and product_available_status=0 and stock=0 and featured=1 GROUP by product_id ORDER BY product.priority asc, product.created desc) as djd");
    return $query->row()->total;
}

function get_product_of_sellerproducts($seller_id=0){
    $ci =& get_instance();
$ci->load->database();

  $query="SELECT * FROM product INNER JOIN users ON users.user_id = product.user_id WHERE product.status = 0 And product.active_status = 0 And product.product_available_status = 0 AND users.status = 0 AND product.user_id=$seller_id order by featured desc, stock asc, product.created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}
function get_all_product_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where product_available_status=0 and featured=0 and status=0 ORDER BY product.created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_all_featured_product_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product inner join product_image on product.id=product_image.product_id inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where status=0 and active_status=0 and product_available_status=0 and stock=0 and featured=1 GROUP by product_id ORDER BY product.priority asc";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function all_featured_product_count(){
    
     $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where product_available_status=0 and featured=1 and status=0 ORDER BY product.created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_all_product_active_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product inner join product_image on product.id=product_image.product_id inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where status=0 and active_status=0 and product.featured=0 GROUP by product_id ORDER BY product.created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_all_product_deactive_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product inner join product_image on product.id=product_image.product_id inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where status=1 and active_status=0 GROUP by product_id ORDER BY product.created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_all_product_admin_deactive_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product inner join product_image on product.id=product_image.product_id inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where  active_status=1 GROUP by product_id ORDER BY product.created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}



function get_all_product_featured_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product inner join product_image on product.id=product_image.product_id inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where status=0 and active_status=0 and product_available_status=0 and stock=0 and featured=1 GROUP by product_id ORDER BY product.created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}


function get_all_agent_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM agent";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_all_seller_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM seller_profile";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_all_seller()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT seller_profile.*, users.agentcode as agentcodes, users.phone as myphone FROM seller_profile inner join users on users.user_id=seller_profile.user_id order by created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_buyer()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM users order by created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}


function get_all_user_agent_code($agent_code)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM users WHERE agentcode= '".$agent_code."'";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_today_register_user_agent_code($agent_code)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
$today = date('Y-m-d h:i:s');
  $query="SELECT * FROM users WHERE agentcode= '".$agent_code."' AND created >= '".$today."'";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_points()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM agent_point";

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}


function get_all_buyer_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM users";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_all_product_by_category_count($category_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product INNER JOIN users ON users.user_id = product.user_id WHERE category_id=".$category_id." AND  product.status = 0 AND product.active_status = 0 AND product.product_available_status = 0 And users.status = 0 ";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_more_product($row,$rowperpage)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
  $total = $rowperpage*4;
  $query='SELECT * FROM product inner join users on users.user_id=product.user_id WHERE product.status = 0 And active_status = 0 And product_available_status = 0 And featured = 0 order by featured desc, stock asc, product.created desc  limit '.$row.', '.$total;

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_more_featured_product($row,$rowperpage)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
  $total = $rowperpage*4;
  $query='SELECT * FROM product INNER JOIN users ON users.user_id = product.user_id WHERE product.status = 0 And product.active_status = 0 And product.product_available_status = 0 And product.featured = 1 AND  users.status = 0 order by product.priority asc, product.created  desc LIMIT '.$row.', '.$total;

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_more_product_cat($row,$rowperpage,$category_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query='SELECT * FROM product  WHERE  category_id='.$category_id.' AND status = 0 And active_status = 0 And product_available_status = 0  limit '.$row.','.$rowperpage;

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}


function get_all_video()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query='SELECT * FROM video';

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_banner()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query='SELECT * FROM banner';

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_product_by_id($product_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product WHERE id=".$product_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function getwishlistproducts($user_id){

  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  //$query="SELECT * FROM intrest WHERE product_id=".$product_id." And user_id=".$user_id;

 /* $query = "SELECT product.*, seller_profile.location
FROM product
INNER JOIN seller_profile
  ON product.user_id = seller_profile.user_id  INNER JOIN users ON users.user_id = product.user_id  WHERE seller_profile.location LIKE '%".$location."%' And product.product_available_status = 0  And users.status = 0 ";*/

  $query = "SELECT product.*
FROM product
 INNER JOIN users ON users.user_id = product.user_id inner join seller_profile on seller_profile.profile_id=product.profile_id WHERE product.district = '".$location."' AND product.status = 0 AND product.active_status = 0 And product.product_available_status = 0  And users.status = 0  order by featured desc, product.created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}
function get_interest($product_id,$user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM intrest WHERE product_id=".$product_id." And user_id=".$user_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}
function get_wishlist($product_id,$user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM wishlist WHERE product_id=".$product_id." And user_id=".$user_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}
function get_notification($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM notification inner join users on notification.user_id=users.user_id WHERE users.user_id=".$user_id;

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_product_by_location($location)
{
  //get main CodeIgniter object 
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  //$query="SELECT * FROM intrest WHERE product_id=".$product_id." And user_id=".$user_id;

 /* $query = "SELECT product.*, seller_profile.location
FROM product
INNER JOIN seller_profile
  ON product.user_id = seller_profile.user_id  INNER JOIN users ON users.user_id = product.user_id  WHERE seller_profile.location LIKE '%".$location."%' And product.product_available_status = 0  And users.status = 0 ";*/

  $query = "SELECT product.*
FROM product
 INNER JOIN users ON users.user_id = product.user_id inner join seller_profile on seller_profile.profile_id=product.profile_id WHERE product.district = '".$location."' AND product.status = 0 AND product.active_status = 0 And product.product_available_status = 0  And users.status = 0  order by featured desc, product.created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}


function get_product_by_anything($anything)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  //$query="SELECT * FROM intrest WHERE product_id=".$product_id." And user_id=".$user_id;



   $query = "SELECT *
FROM product INNER JOIN users ON users.user_id = product.user_id inner join seller_profile on seller_profile.profile_id=product.profile_id WHERE (product.product_name like '%".$anything."%' or product.search_keyword like '%".$anything."%') AND product.status = 0 AND product.active_status = 0 And product_available_status = 0 AND users.status = 0 order by featured desc, product.created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}


function get_product_by_location_anything($location,$anything)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  //$query="SELECT * FROM intrest WHERE product_id=".$product_id." And user_id=".$user_id;

 /* $query = "SELECT product.*, seller_profile.location
FROM product
INNER JOIN seller_profile
  ON product.user_id = seller_profile.user_id  WHERE seller_profile.location = $location AND product.product_name LIKE '%".$anything."%' or product.specification LIKE '%".$anything."%' or  product.description LIKE '%".$anything."%'";
*/

   $query = "SELECT product.*
FROM product
 INNER JOIN users ON users.user_id = product.user_id WHERE product.district = '".$location."' AND (product.product_name like '%".$anything."%' or product.search_keyword like '%".$anything."%') AND product.status = 0 AND product.active_status = 0 And product_available_status = 0 AND users.status = 0 order by featured desc, product.created desc";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_chat($sender_id,$receiver_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  //$query="SELECT * FROM intrest WHERE product_id=".$product_id." And user_id=".$user_id;

 /* $query = "SELECT product.*, seller_profile.location
FROM product
INNER JOIN seller_profile
  ON product.user_id = seller_profile.user_id  WHERE seller_profile.location = $location AND product.product_name LIKE '%".$anything."%' or product.specification LIKE '%".$anything."%' or  product.description LIKE '%".$anything."%'";
*/

   $query = "SELECT * FROM ( SELECT `id`, `sender_id`,`receiver_id`,`created`, `message` FROM `chat` where `sender_id` = '".$sender_id."' and receiver_id = '".$receiver_id."' or `sender_id` = '".$receiver_id."' and receiver_id = '".$sender_id."' ORDER BY `id` DESC) t1 ORDER BY t1.id";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function check_block($sender_id,$receiver_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM block WHERE sender_id=".$sender_id." And receiver_id=".$receiver_id." OR sender_id=".$receiver_id." And receiver_id=".$sender_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function getproductavgrating($product_id){
    $ci =& get_instance();
    return round($ci->db->query("select IFNULL((SELECT AVG(rating) FROM `ratings` where product_id=$product_id), 0) as ratings")->row()->ratings, 1);
}

function getProductRatingBreakdown($product_id){
    $ci =& get_instance();
    $data["rating1"]=$ci->db->query("SELECT COUNT(*) as total FROM `ratings` where product_id=$product_id and rating=1")->row()->total;
    $data["rating2"]=$ci->db->query("SELECT COUNT(*) as total FROM `ratings` where product_id=$product_id and rating=2")->row()->total;
    $data["rating3"]=$ci->db->query("SELECT COUNT(*) as total FROM `ratings` where product_id=$product_id and rating=3")->row()->total;
    $data["rating4"]=$ci->db->query("SELECT COUNT(*) as total FROM `ratings` where product_id=$product_id and rating=4")->row()->total;
    $data["rating5"]=$ci->db->query("SELECT COUNT(*) as total FROM `ratings` where product_id=$product_id and rating=5")->row()->total;
    return JSON_encode($data);
}

function shorttime($datetime, $full = false) {
    date_default_timezone_set('Asia/Kolkata');
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
?>