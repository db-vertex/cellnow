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


function get_all_favroite($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM wishlist WHERE user_id=".$user_id;;

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_category_reusable_parts($id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_reusable_parts WHERE id=".$id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_all_products()
{ 
    //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

    $query= 'SELECT id, user_id,title,category_id,subcategory_id,For_sale_by,Brand,Make,Model,kilometers,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 0 UNION
                SELECT id, user_id,title,category_id,subcategory_id,NULL,NULL,NULL,NULL,Type,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 ,pay_type  FROM category_tuitions  WHERE pay_type = 0 UNION
              
                SELECT id, user_id,title,category_id,subcategory_id,Availability,NULL,NULL,NULL,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 ,pay_type FROM category_Services WHERE pay_type = 0 ';
        $category_data = $ci->db->query($query);  
    
  return $category_data->result(); 
   
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

function get_user_name($id){
  $CI =& get_instance();
  $category = $CI->db->get_where("users", "user_id=$id")->row()->name;
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

function get_all_shopcategory()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM shop_category order by shop_category";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_subcategory()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM subcategory order by sub_category";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_boost()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_reusable_parts WHERE pay_type=1";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_donate()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_reusable_parts WHERE pay_type=2";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_store()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM shop order by name";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_id_by_shop($id)
{
   $ci =& get_instance();
       
  //load databse library
  $ci->load->database();

$query="SELECT * FROM shop WHERE user_id=".$id;

$category_data = $ci->db->query($query);        

return $category_data->row();	
}

function get_id_by_shopdetail($id)
{
   $ci =& get_instance();
       
  //load databse library
  $ci->load->database();

$query="SELECT * FROM shop WHERE id=".$id;

$category_data = $ci->db->query($query);        

return $category_data->row();	
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
$query="SELECT * FROM users WHERE user_id=".$user_id;

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


function get_all_boost_product()
{ 
    //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

      $query=' SELECT *
FROM category_reusable_parts
 INNER JOIN category_job inner join category_tuitions';

   
        $category_data = $ci->db->query($query);  
    
  return $category_data->result(); 
   
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



function get_all_shop_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM shop";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
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


function get_shoplist($product_id,$category_id,$shop_id,$seller_id,$user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM verify_product WHERE product_id=".$product_id." And category_id=".$category_id." And shop_id=".$shop_id." And seller_user_id=".$seller_id." And shop_owner_user_id=".$user_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function check_shoplist($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM shop WHERE  user_id=".$user_id;

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