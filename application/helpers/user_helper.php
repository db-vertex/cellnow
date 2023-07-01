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


function get_mobile_data($product_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_reusable_parts WHERE id=".$product_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_tution_data($product_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_tuitions WHERE id=".$product_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_job_data($product_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_job WHERE id=".$product_id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}


function get_internship_data($product_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_internships WHERE id=".$product_id;

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

function get_wishlist_count($product_id,$category_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query='SELECT * from wishlist where category_id ='.$category_id.' AND product_id ='.$product_id.'';

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_shopall_category_reusable_parts($id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
       if ($session_id) {
  $query="SELECT * FROM category_reusable_parts WHERE id=".$id." And user_id!=".$session_id;
       }
       else{
        $query="SELECT * FROM category_reusable_parts WHERE id=".$id;
       }

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_shopall_category_tuitions($id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
       if ($session_id) {
  $query="SELECT * FROM category_tuitions WHERE id=".$id." And user_id!=".$session_id;
       }
       else{
        $query="SELECT * FROM category_tuitions WHERE id=".$id;
       }

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_shopall_category_job($id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
       if ($session_id) {
  $query="SELECT * FROM category_job WHERE id=".$id." And user_id!=".$session_id;
       }
       else{
        $query="SELECT * FROM category_job WHERE id=".$id;
       }

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_shopall_category_internships($id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
       if ($session_id) {
  $query="SELECT * FROM category_internships WHERE id=".$id." And user_id!=".$session_id;
       }
       else{
        $query="SELECT * FROM category_internships WHERE id=".$id;
       }

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
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

function get_all_category_tuitions($id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_tuitions WHERE id=".$id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_all_category_job($id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_job WHERE id=".$id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_all_category_internships($id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_internships WHERE id=".$id;

  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}


function get_category_reusable_parts_by_category()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_reusable_parts";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_category_tuitions_category()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_tuitions";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_category_job_category()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_job";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_category_internships_category()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_internships";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}



function get_all_search_product($term)
{ 
   
    //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
     if ($session_id) {
    $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,price,cover_img ,verified_product,address from category_reusable_parts WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_internships WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id , price, cover_img ,verified_product ,address from category_job WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_tuitions WHERE user_id !='.$session_id.'
    ) as  custam  WHERE title like "%'.$term.'%" LIMIT 0,4';
     }
     else{
      $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_reusable_parts 
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_internships 
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_job
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_tuitions
      ) as  custam  WHERE title like "%'.$term.'%" LIMIT 0,4 ';
     }
    
       $category_data = $ci->db->query($query);  
             
  return $category_data->result(); 
   
}


function get_all_search_shop($term)
{ 
   
    //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
     
    $query= 'SELECT * from  shop  WHERE Address like "%'.$term.'%"';
    
    
    
       $category_data = $ci->db->query($query);  
             
  return $category_data->result(); 
   
}


function get_all_search_products($row)
{ 
   
    //get main CodeIgniter object
       $ci =& get_instance();
       $rowperpage=4;
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
     if ($session_id) {
    $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product,address from category_reusable_parts WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE user_id !='.$session_id.'
    ) s LIMIT '.$row.','.$rowperpage.'';
     }
     else{
      $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_reusable_parts 
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships 
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions
      ) s LIMIT '.$row.','.$rowperpage.'';
     }
    
       $category_data = $ci->db->query($query);  
             
  return $category_data->result(); 
   
}


function get_user_product_count($user_id)
{ 
   
    //get main CodeIgniter object
       $ci =& get_instance();
     
       //load databse library
       $ci->load->database();
      
    $query= 'SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product,address from category_reusable_parts WHERE user_id ='.$user_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE user_id ='.$user_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE user_id ='.$user_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE user_id ='.$user_id.'';
   
     $category_data = $ci->db->query($query);  
             
  return $category_data->num_rows(); 
   
}

function get_user_active_product_count($user_id)
{ 
   
    //get main CodeIgniter object
       $ci =& get_instance();
     
       //load databse library
       $ci->load->database();
      
    $query= 'SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product,address from category_reusable_parts WHERE active_status = 0 And user_id ='.$user_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE active_status = 0 And user_id ='.$user_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE active_status = 0 And user_id ='.$user_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE active_status = 0 And user_id ='.$user_id.'';
   
     $category_data = $ci->db->query($query);  
             
  return $category_data->num_rows(); 
   
}


function get_all_search_product_count($term)
{ 
   
    //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
     if ($session_id) {
    $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product,address from category_reusable_parts WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE user_id !='.$session_id.'
    ) as  custam  WHERE title like "%'.$term.'%" ';
     }
     else{
      $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_reusable_parts 
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships 
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions
      ) as  custam  WHERE title like "%'.$term.'%"  ';
     }
    
       $category_data = $ci->db->query($query);  
             
  return $category_data->num_rows(); 
   
}

function get_all_locationsearch_product($location)
{ 
   
    //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
     if ($session_id) {
    $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product,address from category_reusable_parts WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE user_id !='.$session_id.'
    ) as  custam  WHERE address like "%'.$location.'%"';
     }
     else{
      $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_reusable_parts 
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships 
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions
      ) as  custam  WHERE address like "%'.$location.'%"  ';
     }
    
       $category_data = $ci->db->query($query);  
             
  return $category_data->result(); 
   
}


function get_all_locationsearch_product_count($location)
{ 
   
    //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
     if ($session_id) {
    $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product,address from category_reusable_parts WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE user_id !='.$session_id.'
    UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE user_id !='.$session_id.'
    ) as  custam  WHERE address like "%'.$location.'%"';
     }
     else{
      $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_reusable_parts 
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships 
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job
      UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions
      ) as  custam  WHERE address like "%'.$location.'%"  ';
     }
    
       $category_data = $ci->db->query($query);  
             
  return $category_data->num_rows(); 
   
}

function get_seller_product($id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE user_id = $id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,Job_Location,NULL,Job_type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE user_id = $id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,Job_Location,NULL,Job_type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE user_id = $id  UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,Tuitions_loction,NULL,Education_Type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE user_id = $id ";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_products()
{ 
  
    //get main CodeIgniter object
         $ci =& get_instance();
         
         //load databse library
         $ci->load->database();
  
  $session_id = $ci->session->userdata("id");
  if($session_id){
    $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE user_id != $session_id UNION
    SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE  user_id != $session_id UNION
    SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE  user_id != $session_id UNION 
   
    SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE user_id != $session_id";
  }
  else{
    $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts   UNION
    SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job    UNION
    SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships    UNION 
   
    SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions ";
   }
    $category_data = $ci->db->query($query);        
  
    return $category_data->result(); 
  
   
}

function is_user_exists($phone){
  $CI =& get_instance();
  $result = $CI->db->get_where("users", ["phone"=>$phone])->row();
  return $result?true:false;
}

function get_category_name($id){
  $CI =& get_instance();
    $category=$CI->db->get_where("category", "id=$id")->row()->category;
    return $category;
}

function get_product_type_name($id){
  $CI =& get_instance();
    $category=$CI->db->get_where("product_type", "id=$id")->row()->product_type;
    return $category;
}


function get_shop_name($id){
  $CI =& get_instance();
  $category=$CI->db->get_where("shop", "id=$id")->row()->name;
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

  $query="SELECT * FROM category order by orders";

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

function get_all_product_type()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product_type WHERE category_id=1";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_reusable()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM category_reusable_parts";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_boost()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
$rowperpage=4;
$session_id = $ci->session->userdata("id");
if($session_id){
  $query="select * from (SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 1 AND user_id != $session_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 1 AND user_id != $session_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 1 AND user_id != $session_id UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 1 AND user_id != $session_id)s LIMIT 0,4";
}
else{
  $query="select * from (SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 1 UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 1 UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 1  UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 1 )s LIMIT 0,4";
 }
  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_boost_admin()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 1  UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 1  UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 1 UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 1 ";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_normal()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();



  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 0 UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 0 UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 0  UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 0";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_bost($row)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
$rowperpage=4;
  $query="select * from (SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job   UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions )s LIMIT $row , $rowperpage";
  
  
  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}


function get_pay_type($id,$category_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE category_id =$category_id AND id = $id  UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE category_id = $category_id AND id = $id   UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE category_id = $category_id AND id = $id  UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions  WHERE category_id = $category_id AND id = $id ";
  
  
  $category_data = $ci->db->query($query);        

  return $category_data->row(); 
}

function get_product_by_subid($subcategory_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

       $session_id = $ci->session->userdata("id");
       if($session_id){
  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE   subcategory_id = $subcategory_id AND user_id != $session_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE  Job_type	 = $subcategory_id AND user_id != $session_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE  Job_type	 = $subcategory_id AND user_id != $session_id UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE  Education_type = $subcategory_id AND user_id != $session_id";
       }
       else{
        $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE   subcategory_id = $subcategory_id UNION
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE  Job_type	 = $subcategory_id UNION
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE  Job_type	 = $subcategory_id UNION 
       
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE  Education_type = $subcategory_id";
       }
  
  
  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_product_by_subid_count($subcategory_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE   subcategory_id = $subcategory_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE  Job_type	 = $subcategory_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE  Job_type	 = $subcategory_id UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE  Education_type = $subcategory_id";
  
  
  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}




function get_all_boost_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
       if($session_id){
  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 1 AND user_id != $session_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 1  AND user_id	!= $session_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 1  AND user_id	 != $session_id UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 1  AND user_id != $session_id";
       }
       else{
        $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 1  UNION
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 1    UNION
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 1   UNION 
       
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 1 ";
       }
  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}


function get_all_donate_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
       if($session_id){
  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 2 AND user_id != $session_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 2  AND user_id	!= $session_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 2  AND user_id	 != $session_id UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 2  AND user_id != $session_id";
       }
       else{
        $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 2  UNION
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 2    UNION
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 2   UNION 
       
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 2 ";
       }
  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}




function get_all_donates($row)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
$rowperpage=4;
  $query="select * from (SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 2 UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 2 UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 2  UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 2 )s LIMIT $row , $rowperpage";
  
  
  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}


function get_all_donate()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $rowperpage=4;
       $session_id = $ci->session->userdata("id");
       if($session_id){
  $query="select * from (SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 2 AND user_id != $session_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 2  AND user_id	!= $session_id UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 2  AND user_id	 != $session_id UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 2  AND user_id != $session_id )s LIMIT 0,4";
       }
       else{
        $query="select * from (SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 2  UNION
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 2    UNION
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 2   UNION 
       
        SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 2 )s LIMIT 0,4" ;
       }
  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_donate_admin()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
      
  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE pay_type = 2  UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 2   UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE pay_type = 2  UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 2";
     
  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}


function get_all_active_Product()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
      
  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE active_status = 0  UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE active_status = 0    UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE active_status = 0   UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE active_status = 0 ";
     
  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_count_active_Product()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
      
  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE active_status = 0  UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE active_status = 0    UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE active_status = 0   UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE active_status = 0 ";
     
  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}


function get_all_deactive_Product()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
      
  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE active_status = 1  UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE active_status = 1    UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE active_status = 1   UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE active_status = 1 ";
     
  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_count_deactive_Product()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
      
  $query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts WHERE active_status = 1  UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE active_status = 1    UNION
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships WHERE active_status = 1   UNION 
 
  SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE active_status = 1 ";
     
  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
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

function get_all_location_store($location)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM shop WHERE Address  like '%$location%' ";

  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}


function get_all_location_donate($location)
{
   //get main CodeIgniter object
   $ci =& get_instance();
       
   //load databse library
   $ci->load->database();
   $session_id = $ci->session->userdata("id");
 if ($session_id) {
$query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product,address from category_reusable_parts WHERE pay_type=2 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE pay_type=2 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE pay_type=2 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE pay_type=2 And user_id !='.$session_id.'
) as  custam  WHERE address like "%'.$location.'%"';
 }
 else{
  $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_reusable_parts WHERE pay_type=2
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE pay_type=2
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE pay_type=2
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE pay_type=2
  ) as  custam  WHERE address like "%'.$location.'%"  ';
 }


  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_location__count_donate($location)
{
   //get main CodeIgniter object
   $ci =& get_instance();
       
   //load databse library
   $ci->load->database();
   $session_id = $ci->session->userdata("id");
 if ($session_id) {
$query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product,address from category_reusable_parts WHERE pay_type=2 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE pay_type=2 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE pay_type=2 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE pay_type=2 And user_id !='.$session_id.'
) as  custam  WHERE address like "%'.$location.'%"';
 }
 else{
  $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_reusable_parts WHERE pay_type=2
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE pay_type=2
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE pay_type=2
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE pay_type=2
  ) as  custam  WHERE address like "%'.$location.'%"  ';
 }


  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}


function get_all_location_boost($location)
{
   //get main CodeIgniter object
   $ci =& get_instance();
       
   //load databse library
   $ci->load->database();
   $session_id = $ci->session->userdata("id");
 if ($session_id) {
$query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,price,cover_img ,verified_product,address from category_reusable_parts WHERE pay_type=1 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,price,cover_img ,verified_product ,address from category_internships WHERE pay_type=1 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_job WHERE pay_type=1 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_tuitions WHERE pay_type=1 And user_id !='.$session_id.'
) as  custam  WHERE address like "%'.$location.'%"';
 }
 else{
  $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_reusable_parts WHERE pay_type=1
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_internships WHERE pay_type=1
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_job WHERE pay_type=1
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,price ,cover_img ,verified_product ,address from category_tuitions WHERE pay_type=1
  ) as  custam  WHERE address like "%'.$location.'%"  ';
 }


  $category_data = $ci->db->query($query);        

  return $category_data->result(); 
}

function get_all_location_count_boost($location)
{
   //get main CodeIgniter object
   $ci =& get_instance();
       
   //load databse library
   $ci->load->database();
   $session_id = $ci->session->userdata("id");
 if ($session_id) {
$query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product,address from category_reusable_parts WHERE pay_type=2 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE pay_type=2 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE pay_type=2 And user_id !='.$session_id.'
UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE pay_type=2 And user_id !='.$session_id.'
) as  custam  WHERE address like "%'.$location.'%"';
 }
 else{
  $query= 'SELECT * from (SELECT title,id,category_id,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_reusable_parts WHERE pay_type=2
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_internships WHERE pay_type=2
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_job WHERE pay_type=2
  UNION SELECT title,id,category_id ,subcategory_id ,user_id ,cover_img ,verified_product ,address from category_tuitions WHERE pay_type=2
  ) as  custam  WHERE address like "%'.$location.'%"  ';
 }


  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}



function get_all_location_store_count($location)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM shop WHERE Address  like '%$location%' ";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_all_store_count()
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM shop order by name";

  $category_data = $ci->db->query($query);        

  return $category_data->num_rows(); 
}

function get_category_all_store($id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       $session_id = $ci->session->userdata("id");
       if ($session_id) {
  $query="SELECT * FROM shop WHERE user_id=".$id." And user_id!=".$session_id;
       }else{
        $query="SELECT * FROM shop WHERE user_id=".$id;
       }
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


function get_productid_by_shop($shop_id)
{
	//get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
  $query="SELECT category_id, product_id FROM verify_product WHERE shop_id=".$shop_id;

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



function get_user_phone_id($user_id)
{
	//get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
  $query="SELECT  phone FROM users WHERE user_id=".$user_id;

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
       $query="SELECT name,phone,user_id FROM users WHERE user_id=".$user_id;

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

function getmeta($id = ""){
  $ci =& get_instance();
       
  //load databse library
  $ci->load->database();
  if(!empty($id)){
      $query = $ci->db->get_where('meta', array('id' => $id));
      return $query->row_array();
  }else{
      $query = $ci->db->get('meta');
      return $query->row();
  }
}
function get_producttype_byid($category_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM product_type WHERE category_id=".$category_id ." order by product_type asc";

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
function get_wishlist($product_id,$category_id,$user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM wishlist WHERE product_id=".$product_id." And category_id=".$category_id." And user_id=".$user_id;

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


function check_shoplist_by_productid($product_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

  $query="SELECT * FROM verify_product WHERE  product_id=".$product_id;

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

function update_count_comman_query($category_id, $count,$product_id){
    
  $ci =& get_instance();
   
   //load databse library
   $ci->load->database();

if($category_id == 1){
  $sql = "category_reusable_parts";
}
else if($category_id == 2){
    $sql = "category_tuitions";  
}
else if($category_id == 3){
     $sql = "category_job"; 
}
else if($category_id == 4){
    $sql = "category_internships";  
}

// $update = 'update '.$sql.' set Count ='.$count.' where id = '.$product_id.'';
$update = $ci->db->where(array('id'=>$product_id,))->update($sql, ['Count'=>$count]);
$erorr =  $ci->db->error();
}
?>