<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


public function __construct()
  {
    parent::__construct();
    date_default_timezone_set("Asia/Kolkata");
     $this->load->library(array('email'));

  }

public function isvalidate($email,$password)
  {
      
      $q = $this->db->get_where('admin',array('email'=>$email,'password'=>$password));

           if($q->num_rows())     
           {
           return $q->row()->id;
           }   
           else
           {
            return false;
           }
   
  }


public function get_admin_data($id)
  {

       $q=$this->db->select('*')
          ->from('admin')
          ->where(['id'=>$id])
          ->get();
         return $q->row();
  }

  public function get_product_data($id)
  {

       $q=$this->db->select('*')
          ->from('product')
          ->where(['id'=>$id])
          ->get();
         return $q->row();
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
   else if($data['category_id']==2){
    $this->db->update('category_tuitions', $datas, "id = ".$data['product_id']);
   }
   else if($data['category_id']==3){
    $this->db->update('category_job', $datas, "id = ".$data['product_id']);
   }
   else if($data['category_id']==4){
    $this->db->update('category_internships', $datas, "id = ".$data['product_id']);
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

     
public function update_password($id,$pwd)
  {

        return $this->db->where('id',$id)->update('admin',array('password'=>$pwd));

  }
    
 

public function update_admin($admin_id, $admin_data)
  {
    
   return $this->db->where('id',$admin_id)
                   ->update('admin',$admin_data);

  }

public function updateproductkeyword($table,$data,$where='')
  {
    
    $this->db->where($where);
        $sql=$this->db->update($table,$data);
        return 1; 


  }

  public function update_product_status($id,$arr)
  {
    if($this->db->where('id',$id)
             ->update('post',$arr)){
       return true;
      } 
      else{
       return false;
      } 
  }
 

public function addEditRecords($table,$data,$where='') 
  {
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

  

    
   

public function all_users()
  {
        $this->db->select("*");
      $this->db->from("users");
      $this->db->order_by('user_id',"DESC");
      $query = $this->db->get();
      $result=$query->result();
      return $result;
  }
  
  
public function all_sellers()
  {
      $query = $this->db->query("SELECT t1.* FROM users t1 LEFT JOIN seller_profile t2 ON t1.user_id = t2.user_id WHERE t2.user_id IS NOT NULL");
      $result=$query->result();
      return $result;
  }

public function all_buyers()
  {
      $query = $this->db->query("SELECT t1.* FROM users t1 LEFT JOIN seller_profile t2 ON t1.user_id = t2.user_id WHERE t2.user_id IS NULL");
      $result=$query->result();
      return $result;
  }
public function all_category()
  {
        $this->db->select("*");
      $this->db->from("category");
      $this->db->order_by('id',"DESC");
      $query = $this->db->get();
      $result=$query->result();
      return $result;
  }

  public function all_shopcategory()
  {
        $this->db->select("*");
      $this->db->from("shop_category");
      $this->db->order_by('id',"DESC");
      $query = $this->db->get();
      $result=$query->result();
      return $result;
  }

  public function all_shop()
  {
        $this->db->select("*");
      $this->db->from("shop");
      $this->db->order_by('id',"ASC");
      $query = $this->db->get();
      $result=$query->result();
      return $result;
  }

  public function update_reusable_status($id,$arr)
  {
    if($this->db->where('id',$id)
             ->update('category_reusable_parts',$arr)){
       return true;
      } 
      else{
       return false;
      } 
  }

  public function update_internship_status($id,$arr)
  {
    if($this->db->where('id',$id)
             ->update('category_internships',$arr)){
       return true;
      } 
      else{
       return false;
      } 
  }

  public function update_category_commericial_places($id,$arr)
  {
    if($this->db->where('id',$id)
             ->update('category_commericial_places',$arr)){
       return true;
      } 
      else{
       return false;
      } 
  }

  public function update_category_residential_places($id,$arr)
  {
    if($this->db->where('id',$id)
             ->update('category_residential_places',$arr)){
       return true;
      } 
      else{
       return false;
      } 
  }

  public function update_category_land_plot($id,$arr)
  {
    if($this->db->where('id',$id)
             ->update('category_land_plot',$arr)){
       return true;
      } 
      else{
       return false;
      } 
  }


  public function update_tuition_status($id,$arr)
  {
    if($this->db->where('id',$id)
             ->update('category_tuitions',$arr)){
       return true;
      } 
      else{
       return false;
      } 
  }



  public function update_job_status($id,$arr)
  {
    if($this->db->where('id',$id)
             ->update('category_job',$arr)){
       return true;
      } 
      else{
       return false;
      } 
  }


  public function all_subcategory()
  {
        $this->db->select("*");
      $this->db->from("subcategory");
      $this->db->order_by('sub_id',"DESC");
      $query = $this->db->get();
      $result=$query->result();
      return $result;
  }


  public function all_agent()
  {
        $this->db->select("*");
      $this->db->from("agent");
      $this->db->order_by('created',"DESC");
      $query = $this->db->get();
      $result=$query->result();
      return $result;
  }

  public function all_video()
  {
        $this->db->select("*");
      $this->db->from("video");
      $this->db->order_by('id',"DESC");
      $query = $this->db->get();
      $result=$query->result();
      return $result;
  }


  public function all_banner()
  {
        $this->db->select("*");
      $this->db->from("banner");
      $this->db->order_by('id',"DESC");
      $query = $this->db->get();
      $result=$query->result();
      return $result;
  }

  public function all_customad()
  {
        $this->db->select("*");
      $this->db->from("costomad");
      $this->db->order_by('id',"DESC");
      $query = $this->db->get();
      $result=$query->result();
      return $result;
  }



public function all_contactus()
  {
        $this->db->select("*");
      $this->db->from("contact_us");
      $this->db->order_by('id',"DESC");
      $query = $this->db->get();
      $result=$query->result();
      return $result;
  }

 public function add_category($p)
   {
      $q=$this->db->insert('category',$p);
      return $q;
   }

  public function add_subcategory($p)
   {
      $q=$this->db->insert('subcategory',$p);
      return $q;
   }  

 public function add_video($p)
   {
      $q=$this->db->insert('video',$p);
      return $q;
   }   


    public function add_banner($p)
   {
      $q=$this->db->insert('banner',$p);
      return $q;
   }   

  public function add_customad($p)
   {
      $q=$this->db->insert('costomad',$p);
      return $q;
   }   

  public function add_agent($p)
   {
      $q=$this->db->insert('agent',$p);
      return $this->db->insert_id();;
   }


public function delete_category($id)
  {
    return $this->db->delete('category',['id'=>$id]);
  }

public function delete_subcategory($id)
  {
    return $this->db->delete('subcategory',['sub_id'=>$id]);
  }

public function delete_agent($id)
  {
    return $this->db->delete('agent',['id'=>$id]);
  }

  public function delete_video($id)
  {
    return $this->db->delete('video',['id'=>$id]);
  }

  public function delete_banner($id)
  {
    return $this->db->delete('banner',['id'=>$id]);
  }

    public function delete_customad($id)
  {
    return $this->db->delete('costomad',['id'=>$id]);
  }

  public function delete_contact($id)
  {
    return $this->db->delete('contact_us',['id'=>$id]);
  }


public function find_category($testid)
  {
  $q=$this->db->select('*')
              ->where('id',$testid)
              ->get('category');
              return $q->row();
  }

  public function find_shopcategory($testid)
  {
  $q=$this->db->select('*')
              ->where('id',$testid)
              ->get('shop_category');
              return $q->row();
  }

  public function find_subcategory($testid)
  {
  $q=$this->db->select('*')
              ->where('sub_id',$testid)
              ->get('subcategory');
              return $q->row();
  }

public function find_agent($testid)
  {
      $q=$this->db->select('*')
              ->where('id',$testid)
              ->get('agent');
              return $q->row();
  }

public function find_video($testid)
  {
      $q=$this->db->select('*')
              ->where('id',$testid)
              ->get('video');
              return $q->row();
  }  

 public function find_banner($testid)
  {
      $q=$this->db->select('*')
              ->where('id',$testid)
              ->get('banner');
              return $q->row();
  } 

public function update_category($testid,$arr)
   {
     if($this->db->where('id',$testid)
              ->update('category',$arr)){
        return true;
       } 
       else{
        return false;
       } 
   }

   public function update_shopcategory($testid,$arr)
   {
     if($this->db->where('id',$testid)
              ->update('shop_category',$arr)){
        return true;
       } 
       else{
        return false;
       } 
   }

public function update_subcategory($testid,$arr)
   {
     if($this->db->where('sub_id',$testid)
              ->update('subcategory',$arr)){
        return true;
       } 
       else{
        return false;
       } 
   }


   public function update_video($testid,$arr)
   {
     if($this->db->where('id',$testid)
              ->update('video',$arr)){
        return true;
       } 
       else{
        return false;
       } 
   }

  public function update_banner($testid,$arr)
   {
     if($this->db->where('id',$testid)
              ->update('banner',$arr)){
        return true;
       } 
       else{
        return false;
       } 
   }

public function update_agent($testid,$arr)
   {
     if($this->db->where('id',$testid)
              ->update('agent',$arr)){
        return true;
       } 
       else{
        return false;
       } 
   }


public function exist_category($category)
  {
    
      $this->db->select('*'); 
      $this->db->from('category');
      $this->db->where('category', $category);
      $query = $this->db->get();
      $result = $query->result_array();
      return $result;


  }


public function find_categorydata()
  {
    $query=$this->db->select('*')
              
              ->from('category')
              ->get();
   return  $query->result();
  }


  
public function get_about_us_data()
  {
            
           $q=$this->db->select('*')
              ->from('about_us')
              ->get();
             
             return $q->row();
  }

  public function get_verified_content_data()
  {
            
           $q=$this->db->select('*')
              ->from('verified_content')
              ->get();
             
             return $q->row();
  }

  public function get_meta_data()
  {
            
           $q=$this->db->select('*')
              ->from('meta')
              ->get();
             
             return $q->row();
  }


public function get_privacy_policy_data()
  {
            
           $q=$this->db->select('*')
              ->from('privacy_policy')
              ->get();
             
             return $q->row();
  }

public function get_terms_condition_data()
  {
            
           $q=$this->db->select('*')
              ->from('terms_condition')
              ->get();
             
             return $q->row();
  }

  public function get_help_support()
  {
            
           $q=$this->db->select('*')
              ->from('help_support')
              ->get();
             
             return $q->row();
  }

  public function get_FAQs()
  {
            
           $q=$this->db->select('*')
              ->from('faqs')
              ->get();
             
             return $q->row();
  }


public function update_shop_status($id,$arr)
   {
     if($this->db->where('id',$id)
              ->update('shop',$arr)){
        return true;
       } 
       else{
        return false;
       } 
   }


public function update_subcategory_status($id,$arr)
   {
     if($this->db->where('sub_id',$id)
              ->update('subcategory',$arr)){
        return true;
       } 
       else{
        return false;
       } 
   }

public function update_featured_status($id,$arr)
   {
     if($this->db->where('id',$id)
              ->update('product',$arr)){
        return true;
       } 
       else{
        return false;
       } 
   }


   


public function delete_user($id)
  {
     
    return $this->db->delete('users',['user_id'=>$id]);
  }

public function all_posts()
  {
      $this->db->select("*");
      $this->db->from("product");
      $this->db->order_by('id',"DESC");
      $query = $this->db->get();
      $result=$query->result();
      return $result;
  }

public function delete_post($id)
  {
    $data=$this->db->get_where("product_image", "product_id=$id")->result();
    foreach($data as $value){
        unlink("/uploads/product/".($value->product_image));
    }
    $this->db->delete('product_image',['product_id'=>$id]);
    $this->db->delete('chat_list',['product_id'=>$id]);
    $this->db->delete('chat',['product_id'=>$id]);
    return $this->db->delete('product',['id'=>$id]);
  }


  public function all_comments($post_id)
  {
    
      $this->db->select('*'); 
      $this->db->from('comment');
      $this->db->where('post_id', $post_id);
      $this->db->order_by('comment_id',"DESC");
      $query = $this->db->get();
      $result = $query->result();
      return $result;


  }
  
public function delete_comment($id)
  {
    return $this->db->delete('comment',['comment_id'=>$id]);
  }

  public function reportedposts()
{
    $this->db->select('report_abuse.*');
    $this->db->from('report_abuse');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
}

public function delete_report($id)

  {
    return $this->db->delete('report_abuse',['report_id'=>$id]);

  }


  public function update_deactive_status_report($product_id, $active_status)
{
    // Check if the $product_id is an array or single value
    if (is_array($product_id)) {
        // If it's an array, update multiple rows with the corresponding product IDs
        $this->db->where_in('product_id', $product_id);
    } else {
        // If it's a single value, update only the row with the specific product_id
        $this->db->where('product_id', $product_id);
    }

    // Update the 'active_status' column in the 'report_abuse' table
    $data = array('active_status' => $active_status);
    $this->db->update('report_abuse', $data);

    return $this->db->affected_rows() > 0;
}

}