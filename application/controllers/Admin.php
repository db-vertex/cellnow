<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  /**
   * Index Page for this controller.
   *--
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */

  function __construct()
    {
      //test
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('user_helper');
        $this->load->helper('url');
        $this->load->helper('form');
        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');
        $this->load->library('email');
        /* $this->load->library('csvimport');*/
        $this->load->helper('file');
        /* $this->load->helper('pdf2text');*/
        
                // Load database
        $this->load->model('admin_model');
        $this->load->model('Common_model');
       

        $this->load->model('user');
    }
  

  public function index()
  {
    $this->load->view('login');
  }


  public function login()
  {

    $this->form_validation->set_rules('email','Email','required|valid_email');
    $this->form_validation->set_rules('pass','Password','required');
    $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
 
    /* print_r($this->input->post('email'));exit;*/
  
      if($this->form_validation->run())
      {
        
       $email = $this->input->post('email');
       $pass  = $this->input->post('pass');

       $this->load->model('Admin_model');
       $login_id=$this->Admin_model->isvalidate($email,$pass);

       
       if($login_id)
       {
           $this->session->set_userdata('admin_id',$login_id);
           return redirect('admin/dashboard');
       }
       else
       {
          $this->session->set_flashdata('Login_failed','Invalid Username/Password');
          $this->session->set_flashdata('msg_class','alert-danger');
          return redirect('admin');
       }

      }
      else
      {
       $this->load->view('login');
      }
  

  }


  public function dashboard()
  {

       $session_id = $this->session->userdata('admin_id');
      
        if($session_id)
       {
             $admin_detail = $this->admin_model->get_admin_data($session_id);
           
             $this->load->view('dashboard',['admin_detail'=>$admin_detail]);
    
       }else{
        
            return redirect('admin');
       }
  }


  public function profile_detail()
  {

     $session_id = $this->session->userdata('admin_id');
      if($session_id)
       {
          $admin_detail = $this->admin_model->get_admin_data($session_id);
          $this->load->view('profile',['admin_detail'=>$admin_detail]);
       }else{
         /*  $this->session->set_flashdata('Login_failed','Please login!');
          $this->session->set_flashdata('msg_class','alert-danger');*/
            return redirect('admin');
       }
  
  }


 
  public function change_password()
  {

     $session_id = $this->session->userdata('admin_id');
       if($session_id)
       {
         $admin_detail = $this->admin_model->get_admin_data($session_id);
         $this->load->view('changepassword',['admin_detail'=>$admin_detail]);
       }else{
       
            return redirect('admin');
       }
     
  }

  public function new_password()
  {
    $this->form_validation->set_rules('password','New Password','required');
    $this->form_validation->set_rules('cpassword','Confirm Password', 'required|matches[password]');
    $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

     
      if($this->form_validation->run())
      {
               
        $pass=$this->input->post('password');
        $session_id = $this->session->userdata('admin_id');
            $admin_detail = $this->admin_model->update_password($session_id,$pass);
            
            
        $this->session->set_flashdata('password_changed','Password changed successfully!');
        $this->session->set_flashdata('msg_class','alert-success');
          return redirect('admin');

      }else{

            
        $session_id = $this->session->userdata('admin_id');
             $admin_detail = $this->admin_model->get_admin_data($session_id);
        $this->load->view('changepassword',['admin_detail'=>$admin_detail]);
              

      }
     
        
  }
  
  public function edit_admin($id)
    {

     $admin_detail = $this->admin_model->get_admin_data($id);
     $this->load->view('edit_admin',['admin_detail'=>$admin_detail]);
  
    }
    
    
    public function updateadmin($admin_id)
      {
              
              
    $this->form_validation->set_rules('first_name','First Name','required');
    $this->form_validation->set_rules('last_name','Last Name', 'required');
    
     $this->form_validation->set_rules('mobile','Phone','required|min_length[10]|max_length[12]');
    $this->form_validation->set_rules('email','Email', 'required|valid_email');

    $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

              
              
              
        if($this->form_validation->run())
          {
              $post=$this->input->post(); 
              //$articleid=$post['article_id'];
              //unset($articleid);
            
              if($this->admin_model->update_admin($admin_id,$post))
              {
                 $this->session->set_flashdata('msg','Admin Update successfully');
                  $this->session->set_flashdata('msg_class','alert-success');
              }
              else
              {
                 $this->session->set_flashdata('msg','Admin not update Please try again!!');
                 $this->session->set_flashdata('msg_class','alert-danger');
              }
              return redirect('admin/profile_detail');
             }
          else
          {
            $this->edit_admin($admin_id);
          }

 }

  
   
public function logout()
  {
    $this->session->unset_userdata('admin_id');
    $this->session->set_flashdata('logut_success','You are succesfully loged out');
    return redirect('admin');
  }



  public function about_us()
  {

     $session_id = $this->session->userdata('admin_id');
     
       if($session_id)
       {
     
     
     $admin_detail = $this->admin_model->get_admin_data($session_id);
     $about_us =    $this->admin_model->get_about_us_data();
     $this->load->view('about_us',['admin_detail'=>$admin_detail,'about_us'=>$about_us]);
     
       }else{
           
             return redirect('admin');
           
       }
           
  }

  public function verified_content()
  {

     $session_id = $this->session->userdata('admin_id');
     
       if($session_id)
       {
     
     
     $admin_detail = $this->admin_model->get_admin_data($session_id);
     $verified_content =    $this->admin_model->get_verified_content_data();
     $this->load->view('verified_content',['admin_detail'=>$admin_detail,'verified_content'=>$verified_content]);
     
       }else{
           
             return redirect('admin');
           
       }
           
  }


  public function meta()
  {

     $session_id = $this->session->userdata('admin_id');
     
       if($session_id)
       {
     
     
     $admin_detail = $this->admin_model->get_admin_data($session_id);
     $meta =    $this->admin_model->get_meta_data();
     $this->load->view('meta',['admin_detail'=>$admin_detail,'meta'=>$meta]);
     
       }else{
           
             return redirect('admin');
           
       }
           
  }

 
  public function add_about_us()
  {

     $session_id = $this->session->userdata('admin_id');
     
  //$this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('about_us_text','About us', 'required');
    
    $about_us_text =  $this->input->post('about_us_text');
       // $title =   $this->input->post('title');
        
     if($this->form_validation->run())
      {
       $about_us = $this->admin_model->get_about_us_data();
       
      if(!empty($about_us)){
           
            $where = array('id' => $about_us->id);
            //print_r($where);die;
            $data = array("about_us"=>$about_us_text);
                $admin_detail = $this->admin_model->addEditRecords('about_us',$data,$where);
                $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');

       }else{
           
            $data = array("about_us"=>$about_us_text);
            //$session_id = $this->session->userdata('admin_id');
                $admin_detail = $this->admin_model->addEditRecords('about_us',$data);
           
            $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');
      
       }
          return redirect('admin/about_us');

      }else{
                      $session_id = $this->session->userdata('admin_id');
             $admin_detail = $this->admin_model->get_admin_data($session_id);
                   $this->load->view('about_us',['admin_detail'=>$admin_detail]);
      }

  }

  public function add_verified_content()
  {
    
     $session_id = $this->session->userdata('admin_id');
     
  //$this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('verified_content','About us', 'required');
    
    $verified_content =  $this->input->post('verified_content');
       // $title =   $this->input->post('title');
    
     if($this->form_validation->run())
      {
       $content = $this->admin_model->get_verified_content_data();
      
      if(!empty($content)){
           
            $where = array('id' => $verified_content->id);
            //print_r($where);die;
            $data = array("verified_content"=>$verified_content);
                $admin_detail = $this->admin_model->addEditRecords('verified_content',$data,$where);
                $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');

       }else{
           
            $data = array("verified_content"=>$verified_content);
          
            //$session_id = $this->session->userdata('admin_id');
            $admin_detail = $this->admin_model->addEditRecords('verified_content',$data);
           
            $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');
      
       }
          return redirect('admin/verified_content');

      }else{
                      $session_id = $this->session->userdata('admin_id');
             $admin_detail = $this->admin_model->get_admin_data($session_id);
                   $this->load->view('verified_content',['admin_detail'=>$admin_detail]);
      }

  }


  public function add_meta()
  {

     $session_id = $this->session->userdata('admin_id');
     
  //$this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('meta_text','About us', 'required');
    
    $about_us_text =  $this->input->post('meta_text');
       // $title =   $this->input->post('title');
        
     if($this->form_validation->run())
      {
       $meta = $this->admin_model->get_meta_data();
       
      if(!empty($meta)){
           
            $where = array('id' => $meta->id);
            //print_r($where);die;
            $data = array("meta"=>$about_us_text);
                $admin_detail = $this->admin_model->addEditRecords('meta',$data,$where);
                $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');

       }else{
           
            $data = array("meta"=>$about_us_text);
            //$session_id = $this->session->userdata('admin_id');
                $admin_detail = $this->admin_model->addEditRecords('meta',$data);
           
            $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');
      
       }
          return redirect('admin/meta');

      }else{
                      $session_id = $this->session->userdata('admin_id');
             $admin_detail = $this->admin_model->get_admin_data($session_id);
                   $this->load->view('meta',['admin_detail'=>$admin_detail]);
      }

  }

  
  public function updateproductactivestatus()
  {
   
      
     $userid= $this->input->post('product_id');
     $category_id= $this->input->post('category_id');
 
      $status=$this->input->post('active_status');
     if($category_id==1){
      $arr=array('active_status'=>$status,'created_at'=>date("Y-m-d H:i:s"));
       $res=$this->admin_model->update_reusable_status($userid,$arr);
     }
     else if($category_id==2){
         $arr=array('active_status'=>$status,'created_at'=>date("Y-m-d H:i:s"));
       $res=$this->admin_model->update_tuition_status($userid,$arr);
     }
      else if($category_id==3){
         $arr=array('active_status'=>$status,'created_at'=>date("Y-m-d H:i:s"));
       $res=$this->admin_model->update_job_status($userid,$arr);
     }
      else if($category_id==4){
         $arr=array('active_status'=>$status,'created_at'=>date("Y-m-d H:i:s"));
       $res=$this->admin_model->update_internship_status($userid,$arr);
     }
      else if($category_id==5){
      $arr=array('active_status'=>$status,'created_at'=>date("Y-m-d H:i:s"));
    $res=$this->admin_model->update_category_commericial_places($userid,$arr);
  }
  else if($category_id==6){
    $arr=array('active_status'=>$status,'created_at'=>date("Y-m-d H:i:s"));
  $res=$this->admin_model->update_category_residential_places($userid,$arr);
  }
  else if($category_id==7){
  $arr=array('active_status'=>$status,'created_at'=>date("Y-m-d H:i:s"));
  $res=$this->admin_model->update_category_land_plot($userid,$arr);
  }
      

    
        if($res==1)
            {
              $this->session->set_flashdata('msg','Update successfully!!');
              $this->session->set_flashdata('msg_class','alert-success');
            }
            else
            {
              $this->session->set_flashdata('msg','Update Not Successfully!!');
              $this->session->set_flashdata('msg_class','alert-danger');
            }
  
        //    return redirect('admin/products');
     }


     public function update_product_deactive_report()
     {
      $product_id = $this->input->post('product_id');
      $status = $this->input->post('active_status');
      $res = $this->admin_model->update_deactive_status_report($product_id, $status);
    
     }
     


  public function privacy_policy()
  {
     $session_id = $this->session->userdata('admin_id');
       if($session_id)
       {
        $admin_detail = $this->admin_model->get_admin_data($session_id);
        $privacy =    $this->admin_model->get_privacy_policy_data();
        $this->load->view('privacy_policy',['admin_detail'=>$admin_detail,'privacy'=>$privacy]);  
       }else{    
             return redirect('admin');    
       }         
  }


  public function add_privacy()
  {
     $session_id = $this->session->userdata('admin_id');
    $this->form_validation->set_rules('privacy_text','Privacy', 'required');
    $privacy_text =  $this->input->post('privacy_text');  
     if($this->form_validation->run())
      {
       $privacy = $this->admin_model->get_privacy_policy_data();
      if(!empty($privacy)){
            $where = array('id' => $privacy->id);
            $data = array("privacy_policy"=>$privacy_text);
                $admin_detail = $this->admin_model->addEditRecords('privacy_policy',$data,$where);
                $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');

       }else{
           
            $data = array("privacy_policy"=>$privacy_text);

                $admin_detail = $this->admin_model->addEditRecords('privacy_policy',$data);
           
            $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');
      
       }
          return redirect('admin/privacy_policy');

      }else{
                      $session_id = $this->session->userdata('admin_id');
             $admin_detail = $this->admin_model->get_admin_data($session_id);
                   $this->load->view('privacy_policy',['admin_detail'=>$admin_detail]);
      }

  }


 public function terms_condition()
  {

     $session_id = $this->session->userdata('admin_id');
     
       if($session_id)
       {
     
     
     $admin_detail = $this->admin_model->get_admin_data($session_id);
     $terms =    $this->admin_model->get_terms_condition_data();
     $this->load->view('terms_condition',['admin_detail'=>$admin_detail,'terms'=>$terms]);
     
       }else{
           
             return redirect('admin');
           
       }
           
  }


  public function help_support()
  {

     $session_id = $this->session->userdata('admin_id');
     
       if($session_id)
       {
     
     
     $admin_detail = $this->admin_model->get_admin_data($session_id);
     $terms =    $this->admin_model->get_help_support();
     $this->load->view('help_support',['admin_detail'=>$admin_detail,'terms'=>$terms]);
     
       }else{
           
             return redirect('admin');
           
       }
           
  }

  public function FAQs()
  {

     $session_id = $this->session->userdata('admin_id');
     
       if($session_id)
       {
     
     
     $admin_detail = $this->admin_model->get_admin_data($session_id);
     $terms =    $this->admin_model->get_FAQs();
     $this->load->view('FAQs',['admin_detail'=>$admin_detail,'terms'=>$terms]);
     
       }else{
           
             return redirect('admin');
           
       }
           
  }

  public function add_FAQs()
  {

     $session_id = $this->session->userdata('admin_id');
     
    $this->form_validation->set_rules('terms_condition_text','Privacy', 'required');
    
    $terms_condition_text =  $this->input->post('terms_condition_text');


        
     if($this->form_validation->run())
      {
       $terms = $this->admin_model->get_FAQs();
       
      if(!empty($terms)){
           
            $where = array('id' => $terms->id);
          
            $data = array("FAQs"=>$terms_condition_text);
                $admin_detail = $this->admin_model->addEditRecords('faqs',$data,$where);
                $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');

       }else{
           
            $data = array("FAQs"=>$terms_condition_text);
           
                $admin_detail = $this->admin_model->addEditRecords('faqs',$data);
           
            $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');
      
       }
          return redirect('admin/FAQs');

      }else{
                      $session_id = $this->session->userdata('admin_id');
             $admin_detail = $this->admin_model->get_admin_data($session_id);
                   $this->load->view('FAQs',['admin_detail'=>$admin_detail]);
      }

  }




  public function add_help_support()
  {

     $session_id = $this->session->userdata('admin_id');
     
    $this->form_validation->set_rules('terms_condition_text','Privacy', 'required');
    
    $terms_condition_text =  $this->input->post('terms_condition_text');


        
     if($this->form_validation->run())
      {
       $terms = $this->admin_model->get_help_support();
       
      if(!empty($terms)){
           
            $where = array('id' => $terms->id);
          
            $data = array("help_support"=>$terms_condition_text);
                $admin_detail = $this->admin_model->addEditRecords('help_support',$data,$where);
                $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');

       }else{
           
            $data = array("help_support"=>$terms_condition_text);
           
                $admin_detail = $this->admin_model->addEditRecords('help_support',$data);
           
            $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');
      
       }
          return redirect('admin/help_support');

      }else{
                      $session_id = $this->session->userdata('admin_id');
             $admin_detail = $this->admin_model->get_admin_data($session_id);
                   $this->load->view('help_support',['admin_detail'=>$admin_detail]);
      }

  }




  public function add_terms()
  {

     $session_id = $this->session->userdata('admin_id');
     
    $this->form_validation->set_rules('terms_condition_text','Privacy', 'required');
    
    $terms_condition_text =  $this->input->post('terms_condition_text');
   
        
     if($this->form_validation->run())
      {
       $terms = $this->admin_model->get_terms_condition_data();
       
      if(!empty($terms)){
           
            $where = array('id' => $terms->id);
          
            $data = array("terms_condition"=>$terms_condition_text);
                $admin_detail = $this->admin_model->addEditRecords('terms_condition',$data,$where);
                $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');

       }else{
           
            $data = array("terms_condition"=>$terms_condition_text);
           
                $admin_detail = $this->admin_model->addEditRecords('terms_condition',$data);
           
            $this->session->set_flashdata('msg','Added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');
      
       }
          return redirect('admin/terms_condition');

      }else{
                      $session_id = $this->session->userdata('admin_id');
             $admin_detail = $this->admin_model->get_admin_data($session_id);
                   $this->load->view('terms_condition',['admin_detail'=>$admin_detail]);
      }

  }






public function Contact_us()
{
   $session_id = $this->session->userdata('admin_id');
    if($session_id)
    {
         
    $admin_detail = $this->admin_model->get_admin_data($session_id);
    $category=$this->admin_model->all_contactus();   // for foreach loop
    $this->load->view('contact_us',['admin_detail'=>$admin_detail,'contactus'=>$category]);
   
    }
    else
    {
      return redirect('admin');
    }

}



public function shopCategory()
{
  $session_id = $this->session->userdata('admin_id');
    if($session_id)
    {
         
    $admin_detail = $this->admin_model->get_admin_data($session_id);
    $category=$this->admin_model->all_shopcategory();   // for foreach loop
    $this->load->view('shopcategory_list',['admin_detail'=>$admin_detail,'category'=>$category]);
   
    }
    else
    {
      return redirect('admin');
    }

}

public function Category()
{
  $session_id = $this->session->userdata('admin_id');
    if($session_id)
    {
         
    $admin_detail = $this->admin_model->get_admin_data($session_id);
    $category=$this->admin_model->all_category();   // for foreach loop
    $this->load->view('category_list',['admin_detail'=>$admin_detail,'category'=>$category]);
   
    }
    else
    {
      return redirect('admin');
    }

}


public function banner()
{
  $session_id = $this->session->userdata('admin_id');
    if($session_id)
    {
         
    $admin_detail = $this->admin_model->get_admin_data($session_id);
 
    $category=$this->admin_model->all_banner();   // for foreach loop
    $this->load->view('banner_list',['admin_detail'=>$admin_detail,'banner'=>$category]);
   
    }
    else
    {
      return redirect('admin');
    }

}

public function shop()
{
  $session_id = $this->session->userdata('admin_id');
    if($session_id)
    {
         
    $admin_detail = $this->admin_model->get_admin_data($session_id);
    $shop=$this->admin_model->all_shop();   // for foreach loop
    $this->load->view('shop_list',['admin_detail'=>$admin_detail,'shop'=>$shop]);
   
    }
    else
    {
      return redirect('admin');
    }

}


function adminapproved(){
 
  $id=$this->input->post("id");
    $admin_approval=$this->input->post("admin_approval");
    $this->db->update("shop", ["admin_approval"=>$admin_approval], "id=$id");
    echo "success";
//$this->admin_model->update_shop_status($id,$arr);

//$delete = $this->admin_model->delete_record('review_product', $id);




}  


public function setshoplist()
	{

		 $data["category_id"] = $this->input->post('category_id');
    $data["sub_id"] = $this->input->post('subcategory_id');
    $data["product_id"] = $this->input->post('product_id');
    $data["seller_user_id"] = $this->input->post("seller_id");
    $data["shop_owner_user_id"] = $this->input->post("shop_owner_user_id");
    $data["shop_id"]= $this->input->post("shop_id");
    
    $this->admin_model->saveshoplist($data);
      
		return redirect('admin/products');
	}



public function Users()
{
  $session_id = $this->session->userdata('admin_id');
    if($session_id)
    {
         
    $admin_detail = $this->admin_model->get_admin_data($session_id);
    $users=$this->admin_model->all_users();   // for foreach loop
    $this->load->view('user_list',['admin_detail'=>$admin_detail,'users'=>$users]);
   
    }
    else
    {
      return redirect('admin');
    }

}


public function deleteusers()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if($this->admin_model->delete_user($id))
      {
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/Users');
  

}

public function add_category()
{
       $session_id = $this->session->userdata('admin_id');
        if($session_id)
       {
            
        $admin_detail = $this->admin_model->get_admin_data($session_id);
        $this->load->view('add_category',['admin_detail'=>$admin_detail]);
    
       }else{

            return redirect('admin');
       }

}

public function add_subcategory()
{
       $session_id = $this->session->userdata('admin_id');
        if($session_id)
       {
            
        $admin_detail = $this->admin_model->get_admin_data($session_id);
        $this->load->view('add_subcategory',['admin_detail'=>$admin_detail]);
    
       }else{

            return redirect('admin');
       }

}



public function add_video()
{
       $session_id = $this->session->userdata('admin_id');
        if($session_id)
       {
            
        $admin_detail = $this->admin_model->get_admin_data($session_id);
        $this->load->view('add_video',['admin_detail'=>$admin_detail]);
    
       }else{

            return redirect('admin');
       }

}



public function add_banner()
{
       $session_id = $this->session->userdata('admin_id');
        if($session_id)
       {
            
        $admin_detail = $this->admin_model->get_admin_data($session_id);
        $this->load->view('add_banner',['admin_detail'=>$admin_detail]);
    
       }else{

            return redirect('admin');
       }

}

public function add_customad()
{
       $session_id = $this->session->userdata('admin_id');
        if($session_id)
       {
            
        $admin_detail = $this->admin_model->get_admin_data($session_id);
        $this->load->view('add_customad',['admin_detail'=>$admin_detail]);
    
       }else{

            return redirect('admin');
       }

}

public function save_category()
{
 
 $category=$this->input->post('Category');
 $icon = "";
//print_r($_FILES);
       if (!empty($_FILES['icon']['name'])) {
                $config['upload_path'] = './uploads/category/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('icon')) {
                    //---- upload failed than show error-----
                    //$this->session->set_flashdata('error', $this->upload->display_errors());
                     $this->response(['status' => FALSE,
        'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);
                } else {
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();
                    $icon = $image_data['file_name'];
                }
            }

              $arr=array('category'=>$category,'icon'=> $icon,'created'=>date('Y-m-d H:i:s'));
          if($this->admin_model->add_category($arr))
          {
            $this->session->set_flashdata('msg','Category Added Successful!');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Category Added Unsuccessful!!!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }
          return redirect('admin/Category');
        
}


public function save_subcategory()
{
 
 $category=$this->input->post('category');
 $subcategory=$this->input->post('sub_category');


 
 $icon = "";
//print_r($_FILES);
/*       if (!empty($_FILES['icon']['name'])) {
                $config['upload_path'] = './uploads/category/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('icon')) {
                    //---- upload failed than show error-----
                    //$this->session->set_flashdata('error', $this->upload->display_errors());
                     $this->response(['status' => FALSE,
        'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);
                } else {
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();
                    $icon = $image_data['file_name'];
                }
            }*/

             /* $arr=array('category'=>$category,'icon'=> $icon,'created'=>date('Y-m-d H:i:s'));*/
              $arr=array('category'=>$category,'sub_category'=>$subcategory,'created'=>date('Y-m-d H:i:s'));
          if($this->admin_model->add_subcategory($arr))
          {
            $this->session->set_flashdata('msg','Category Added Successful!');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Category Added Unsuccessful!!!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }
          return redirect('admin/subcategory');
        
}


public function save_video()
{
 
 $title=$this->input->post('title');
 $videolink=$this->input->post('videolink');
 //$category=$this->input->post('Category');
 $icon = "";
//print_r($_FILES);
       if (!empty($_FILES['video_thumbnail']['name'])) {
                $config['upload_path'] = './uploads/video/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('video_thumbnail')) {
                    //---- upload failed than show error-----
                    //$this->session->set_flashdata('error', $this->upload->display_errors());
                    // $this->response(['status' => FALSE,'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);
                } else {
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();
                    $icon = $image_data['file_name'];
                }
            }

              $arr=array('title'=>$title,'videolink'=> $videolink,'video_thumbnail'=> $icon,'created'=>date('Y-m-d H:i:s'));
          if($this->admin_model->add_video($arr))
          {
            $this->session->set_flashdata('msg','Video Added Successful!');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Video Added Unsuccessful!!!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }
          return redirect('admin/videos');
        
}


public function save_banner()
{

	//echo "here";
 
 $url=$this->input->post('url');




       if (!empty($_FILES['banner_image']['name'])) {
                $config['upload_path'] = './uploads/banner/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('banner_image')) {
                    //---- upload failed than show error-----
                    //$this->session->set_flashdata('error', $this->upload->display_errors());
                    // $this->response(['status' => FALSE,'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);
                } else {
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();
                    $icon = $image_data['file_name'];
                }
            }

              $arr=array('banner_image'=> $icon,'url'=> $url,'created'=>date('Y-m-d H:i:s'));
          if($this->admin_model->add_banner($arr))
          {
            $this->session->set_flashdata('msg','Banner Added Successful!');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Banner Added Unsuccessful!!!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }
          return redirect('admin/banner');
        
}

public function save_customad()
{

  //echo "here";
 

 print_r($_FILES);

       if (!empty($_FILES['customad_image']['name'])) {
                $config['upload_path'] = './uploads/costomad/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('customad_image')) {
                    //---- upload failed than show error-----
                    //$this->session->set_flashdata('error', $this->upload->display_errors());
                    // $this->response(['status' => FALSE,'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);

                  //echo $this->upload->display_errors;
                }else{
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();
                    $icon = $image_data['file_name'];

                    print_r($_FILES);

                     //echo "21313";
                }
          

              $arr=array('customad_image'=> $icon,'created'=>date('Y-m-d H:i:s'));
          if($this->admin_model->add_customad($arr))
          {
            $this->session->set_flashdata('msg','Customad Added Successful!');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Customad Added Unsuccessful!!!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }

           }else{

             $this->session->set_flashdata('msg','Customad Added Unsuccessful!!');
            $this->session->set_flashdata('msg_class','alert-danger');


           }

          return redirect('admin/customad');
        
}



public function save_agent()
{
 
 $agent_name=$this->input->post('agent_name');
 $agent_mobile=$this->input->post('agent_mobile');
 $email=$this->input->post('email');
 $password=$this->input->post('password');
 $address=$this->input->post('address');

 $pass = base64_encode($password);
$this->form_validation->set_rules('agent_mobile', 'Mobile Number', 'required|is_unique[agent.agent_mobile]', ["is_unique"=>"Mobile Number Already Exists."]);
if ($this->form_validation->run())
{

 $icon = "";

        if (!empty($_FILES['agent_file']['name'])) {
                $config['upload_path'] = './uploads/agent/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('agent_file')) {
                    //---- upload failed than show error-----
                    //$this->session->set_flashdata('error', $this->upload->display_errors());
                    // $this->response(['status' => FALSE,'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);
                } else {
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();
                    $icon = $image_data['file_name'];
                }

                 $arr=array('agent_name'=>$agent_name,'agent_mobile'=> $agent_mobile,'agent_file'=> $icon,'email'=> $email,'password'=> $pass,'address'=> $address,'created'=>date('Y-m-d H:i:s'));
            }else{

              $arr=array('agent_name'=>$agent_name,'agent_mobile'=> $agent_mobile,'email'=> $email,'password'=> $pass,'address'=> $address,'created'=>date('Y-m-d H:i:s'));

            }


              
              $agentid = $this->admin_model->add_agent($arr);
          
          if(!empty($agentid))
          {
             $agentcode = 'P'.str_pad($agentid, 3, '0', STR_PAD_LEFT);;

             $upd = array('agent_code'=>$agentcode);

             $agentid = $this->admin_model->update_agent($agentid,$upd);

             $this->session->set_flashdata('msg','Agent Added Successful!');
             $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Agent Not Added!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }
          return redirect('admin/agent');
}
else{
    $this->load->view('add_agent',['admin_detail'=>$admin_detail]);
    
}
        
}


public function deletecategory()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if($this->admin_model->delete_category($id))
      {
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/Category');
  

}

public function deletesubcategory()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if($this->admin_model->delete_subcategory($id))
      {
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/subcategory');
  

}

public function deleteagent()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if($this->admin_model->delete_agent($id))
      {
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/Category');
  

}

public function deletevideo()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if($this->admin_model->delete_video($id))
      {
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/videos');
  

}

public function deletebanner()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if($this->admin_model->delete_banner($id))
      {
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/banner');
  

}

public function deletecustomad()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if($this->admin_model->delete_customad($id))
      {
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/customad');
  

}



public function deletecontactus()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if($this->admin_model->delete_contact($id))
      {
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/Category');
  

}

public function editcategory()
{
$session_id = $this->session->userdata('admin_id');

$id = $this->uri->segment(3);
if($session_id)
       {
      $res=$this->admin_model->find_category($id);
    
      
      $admin_detail = $this->admin_model->get_admin_data($session_id);
     /* echo "<pre>";
      print_r($admin_detail);exit;*/
      $this->load->view('edit_category',['admin_detail'=>$admin_detail,'test'=>$res]);
    
       }
       else{
        return redirect('admin');
       }
} 

public function editshopcategory()
{
$session_id = $this->session->userdata('admin_id');

$id = $this->uri->segment(3);
if($session_id)
       {
      $res=$this->admin_model->find_shopcategory($id);
    
      
      $admin_detail = $this->admin_model->get_admin_data($session_id);
     /* echo "<pre>";
      print_r($admin_detail);exit;*/
      $this->load->view('edit_shopcategory',['admin_detail'=>$admin_detail,'test'=>$res]);
    
       }
       else{
        return redirect('admin');
       }
} 

public function editsubcategory()
{
$session_id = $this->session->userdata('admin_id');

$id = $this->uri->segment(3);
if($session_id)
       {
      $res=$this->admin_model->find_subcategory($id);
      
      
      $admin_detail = $this->admin_model->get_admin_data($session_id);
      
      $this->load->view('edit_subcategory',['admin_detail'=>$admin_detail,'test'=>$res]);
    
       }else{
        
        return redirect('admin');
       
       }
} 


public function editagent()
{
$session_id = $this->session->userdata('admin_id');

$id = $this->uri->segment(3);
     if($session_id)
       {
      $res=$this->admin_model->find_agent($id);
      
      $admin_detail = $this->admin_model->get_admin_data($session_id);

      $this->load->view('edit_agent',['admin_detail'=>$admin_detail,'agent'=>$res]);
    
       }
       else{
        return redirect('admin');
       }
} 


public function viewagent()
{
$session_id = $this->session->userdata('admin_id');

$id = $this->uri->segment(3);
     if($session_id)
       {
      $res=$this->admin_model->find_agent($id);
      
      $admin_detail = $this->admin_model->get_admin_data($session_id);

      $this->load->view('view_agent',['admin_detail'=>$admin_detail,'agentidds'=>$res]);
    
       }
       else{
        return redirect('admin');
       }
} 
public function viewagentusers()
{
$session_id = $this->session->userdata('admin_id');

$id = $this->uri->segment(3);
     if($session_id)
       {
      $res=$this->admin_model->find_agent($id);
      
      $admin_detail = $this->admin_model->get_admin_data($session_id);

      $this->load->view('view_agent_users',['admin_detail'=>$admin_detail,'agentidds'=>$res]);
    
       }
       else{
        return redirect('admin');
       }
} 


public function editvideo()
{
$session_id = $this->session->userdata('admin_id');

$id = $this->uri->segment(3);
     if($session_id)
       {
      $res=$this->admin_model->find_video($id);
      
      $admin_detail = $this->admin_model->get_admin_data($session_id);

      $this->load->view('edit_video',['admin_detail'=>$admin_detail,'video'=>$res]);
    
       }else{
        return redirect('admin');
       }
} 

public function editbanner()
{
$session_id = $this->session->userdata('admin_id');

$id = $this->uri->segment(3);
     if($session_id)
       {
      $res=$this->admin_model->find_banner($id);
      
      $admin_detail = $this->admin_model->get_admin_data($session_id);

      $this->load->view('edit_banner',['admin_detail'=>$admin_detail,'banner'=>$res]);
    
       }else{

        return redirect('admin');
       
       }
} 


public function updatecategory()
{
 
     $testid= $this->input->post('did');

           if (!empty($_FILES['icon']['name'])) {
                $config['upload_path'] = './uploads/category/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('icon')) {
                    //---- upload failed than show error-----
                    //$this->session->set_flashdata('error', $this->upload->display_errors());
                     $this->response(['status' => FALSE,
        'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);
                } else {
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();
                    $icon = $image_data['file_name'];
                }
            }
     $cat=$this->input->post('category');


     if(!empty($icon)){
           $arr=array('category'=>$cat,'icon'=>$icon);

     }else{
      $arr=array('category'=>$cat);
     }
     
      $res=$this->admin_model->update_category($testid,$arr);
  
      if($res==1)
          {
            $this->session->set_flashdata('msg','Update successfully!!');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Update Not Successfully!!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }

          return redirect('admin/Category');
   } 

   public function updateshopcategory()
{
 
     $testid= $this->input->post('did');

           if (!empty($_FILES['icon']['name'])) {
                $config['upload_path'] = './uploads/shopcategory/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('icon')) {
                    //---- upload failed than show error-----
                    //$this->session->set_flashdata('error', $this->upload->display_errors());
                     $this->response(['status' => FALSE,
        'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);
                } else {
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();
                    $icon = $image_data['file_name'];
                }
            }
     $cat=$this->input->post('shop_category');


     if(!empty($icon)){
           $arr=array('shop_category'=>$cat,'icon'=>$icon);

     }else{
      $arr=array('shop_category'=>$cat);
     }
     
      $res=$this->admin_model->update_shopcategory($testid,$arr);
  
      if($res==1)
          {
            $this->session->set_flashdata('msg','Update successfully!!');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Update Not Successfully!!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }

          return redirect('admin/shopCategory');
   } 


public function updatesubcategory()
{
 
     $testid= $this->input->post('did');

/*           if (!empty($_FILES['icon']['name'])) {
                $config['upload_path'] = './uploads/category/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('icon')) {
                    //---- upload failed than show error-----
                    //$this->session->set_flashdata('error', $this->upload->display_errors());
                     $this->response(['status' => FALSE,
        'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);
                } else {
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();
                    $icon = $image_data['file_name'];
                }
            }
     $cat=$this->input->post('Category');


     if(!empty($icon)){
           $arr=array('category'=>$cat,'icon'=>$icon);

     }else{
      $arr=array('category'=>$cat);
     }*/
      
      $cat=$this->input->post('category');
      $sub_category=$this->input->post('sub_category');

     $arr=array('category'=>$cat,'sub_category'=>$sub_category);
     
      $res=$this->admin_model->update_subcategory($testid,$arr);
  
      if($res==1)
          {
            $this->session->set_flashdata('msg','Update successfully!!');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Update Not Successfully!!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }

          return redirect('admin/subcategory');
   } 


   
public function updateagent()
{
 
      $testid= $this->input->post('did');

      $agent_name=$this->input->post('agent_name');
      $agent_code=$this->input->post('agent_code');
      $agent_mobile=$this->input->post('agent_mobile');
       $email=$this->input->post('email');
       $password=$this->input->post('password');
       $address=$this->input->post('address');

 $pass = base64_encode($password);

 

 $icon = "";
        if (!empty($_FILES['agent_file']['name'])) {
                $config['upload_path'] = './uploads/agent/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('agent_file')) {
                    //---- upload failed than show error-----
                    //$this->session->set_flashdata('error', $this->upload->display_errors());
                    // $this->response(['status' => FALSE,'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);
                } else {
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();
                    $icon = $image_data['file_name'];
                }

                 $arr=array('agent_name'=>$agent_name,'agent_code'=>$agent_code, 'agent_mobile'=> $agent_mobile,'agent_file'=> $icon,'email'=> $email,'password'=> $pass,'address'=> $address);
            }else{

              $arr=array('agent_name'=>$agent_name,'agent_code'=>$agent_code, 'agent_mobile'=> $agent_mobile,'email'=> $email,'password'=> $pass,'address'=> $address);

            }

             /* $arr=array('agent_name'=>$agent_name,'agent_mobile'=> $agent_mobile,'email'=> $email,'password'=> $pass,'address'=> $address);*/

   /*   $arr=array('agent_name'=>$agent_name,'agent_mobile'=> $agent_mobile)*/;


     
      $res=$this->admin_model->update_agent($testid,$arr);

      //echo $this->db->last_query();
   //print_r($arr);exit;
         if($res==1)
          {
            $this->session->set_flashdata('msg','Update successfully!!');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Update Not Successfully!!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }

          return redirect('admin/agent');
   } 

public function updatevideo()
{
 
  $testid= $this->input->post('did');
  $title=$this->input->post('title');
  $videolink=$this->input->post('videolink');
  //$category=$this->input->post('Category');
  $icon = "";
//print_r($_FILES);
       if (!empty($_FILES['video_thumbnail']['name'])) {
                $config['upload_path'] = './uploads/video/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('video_thumbnail')) {
                    //---- upload failed than show error-----
                    //$this->session->set_flashdata('error', $this->upload->display_errors());
                    // $this->response(['status' => FALSE,'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);
                } else {
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();
                    $icon = $image_data['file_name'];
                }

                $arr=array('title'=>$title,'videolink'=> $videolink,'video_thumbnail'=> $icon,'created'=>date('Y-m-d H:i:s'));
            }else{

              $arr=array('title'=>$title,'videolink'=> $videolink,'created'=>date('Y-m-d H:i:s'));

            }

              
          if($this->admin_model->update_video($testid,$arr))
          {
            $this->session->set_flashdata('msg','Video Added Successful!');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Video Added Unsuccessful!!!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }
          return redirect('admin/videos');
        
}


public function updatebanner()
{
 
  $testid= $this->input->post('did');
 /* $title=$this->input->post('title');
  $videolink=$this->input->post('videolink');*/
  //$category=$this->input->post('Category');
  $icon = "";
//print_r($_FILES);exit;
       if (!empty($_FILES['banner_image']['name'])) {
                $config['upload_path'] = './uploads/banner/';
                // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('banner_image')) {
                    //---- upload failed than show error-----
                    $this->session->set_flashdata('msg', $this->upload->display_errors());
                    // $this->response(['status' => FALSE,'message' =>$this->upload->display_errors()], REST_Controller::HTTP_BAD_REQUEST);
                } else {
                    //---- Successfully upload than add member-----
                    $image_data = $this->upload->data();

                    //print_r($image_data);
                    $icon = $image_data['file_name'];
                }

                $arr=array('banner_image'=> $icon,'created'=>date('Y-m-d H:i:s'));
                $this->admin_model->update_banner($testid,$arr);

                $this->session->set_flashdata('msg','Banner updated Successful!');
                $this->session->set_flashdata('msg_class','alert-success');

                
            }

              
 /*         if($this->admin_model->update_video($testid,$arr))
          {
            $this->session->set_flashdata('msg','Video Added Successful!');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else
          {
            $this->session->set_flashdata('msg','Video Added Unsuccessful!!!');
            $this->session->set_flashdata('msg_class','alert-danger');
          }*/
          return redirect('admin/banner');
        
}




public function products()
    {
      $session_id = $this->session->userdata('admin_id');
        if($session_id)
        {
             
      $admin_detail = $this->admin_model->get_admin_data($session_id);

   
      $this->load->view('post_list',['admin_detail'=>$admin_detail]);
       
        }
        else
        {
          return redirect('admin');
        }

    }

public function user()
    {
      $session_id = $this->session->userdata('admin_id');
        if($session_id)
        {
             
      $admin_detail = $this->admin_model->get_admin_data($session_id);

   
      $buyer = get_all_buyer(); 
      $shop=$this->admin_model->all_shop(); 
      //$featuredposts = $this->Product_model->getfeaturedpro();

      // for foreach loop
      $this->load->view('user_list',['admin_detail'=>$admin_detail,'buyer'=>$buyer,'shop'=>$shop]);
       
        }
        else
        {
          return redirect('admin');
        }

    }



public function deletepost()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if($this->admin_model->delete_post($id))
      {
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/Category');
  

}

public function deletebuyer()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if(!empty($id))
      {
          if($this->db->get_where('seller_profile', ['user_id'=>$id])->num_rows()>0){
    
     $this->db->delete('seller_profile',['user_id'=>$id]);
     $this->db->delete('product',['user_id'=>$id]);
     $this->db->delete('chat_list',['sender_id'=>$id]);
     $this->db->delete('chat_list',['receiver_id'=>$id]);
     }
     $this->db->delete('users',['user_id'=>$id]);
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/Category');
  

}


public function deleteseller()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if(!empty($id))
      {
     $this->db->delete('seller_profile',['user_id'=>$id]);
     $this->db->delete('product',['user_id'=>$id]);
     $this->db->delete('chat_list',['sender_id'=>$id]);
     $this->db->delete('chat_list',['receiver_id'=>$id]);
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/Category');
  

}


public function post_comments()
    {
      $session_id = $this->session->userdata('admin_id');
        if($session_id)
        {
        $post_id = $this->uri->segment(3);
        $admin_detail = $this->admin_model->get_admin_data($session_id);
        $comments=$this->admin_model->all_comments($post_id);   // for foreach loop
        $this->load->view('comment_list',['admin_detail'=>$admin_detail,'comments'=>$comments]);
       
        }
        else
        {
          return redirect('admin');
        }

    }

public function deletecomment()
{
  //$id=$this->input->post('id');
  $id = $this->uri->segment(3);
  $this->load->model('admin_model');

      if($this->admin_model->delete_comment($id))
      {
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/Category');
  

}


public function productdetail()
	{

		$id = $this->uri->segment(4);
		$cateory = $this->uri->segment(3);
		$subcategory_id = $this->uri->segment(5);

		if ($cateory == 1) {
			$Categories_all_product = get_all_category_reusable_parts($id);


		} else if ($cateory == 2) {
			$Categories_all_product = get_all_category_tuitions($id);


		} else if ($cateory == 3) {
			$Categories_all_product = get_all_category_job($id);


		} else if ($cateory == 4) {
			$Categories_all_product = get_all_category_internships($id);


		}


		//$product = $this->product_model->getproductall($id);


    $session_id = $this->session->userdata('admin_id');

    if($session_id)

    {

         

    $admin_detail = $this->admin_model->get_admin_data($session_id);


		
		
			$this->load->view('productdetail', ['admin_detail' => $admin_detail, 'categories_data' => $Categories_all_product]);
		

	
		}
	}

public function reportedposts()
{

  $session_id = $this->session->userdata('admin_id');

    if($session_id)

    {

         

    $admin_detail = $this->admin_model->get_admin_data($session_id);

    $reportedposts=$this->admin_model->reportedposts();   // for foreach loop
    
    //echo $this->db->last_query();

    $this->load->view('report_list',['admin_detail'=>$admin_detail,'reportedposts'=>$reportedposts]);

   

    }

    else

    {

      return redirect('admin');

    }



}


public function deletereport()
{

  //$id=$this->input->post('id');

  $id = $this->uri->segment(3);

  $this->load->model('admin_model');



      if($this->admin_model->delete_report($id))

      {

          $this->session->set_flashdata('msg','Delete Successfully');

          $this->session->set_flashdata('msg_class','alert-success');

      }

      else

      {

         $this->session->set_flashdata('msg','Please try again..not delete');

         $this->session->set_flashdata('msg_class','alert-danger');

      }

      return redirect('admin/Category');


}

public function notification()
{

  $session_id = $this->session->userdata('admin_id');

    if($session_id)
    {

         

    $admin_detail = $this->admin_model->get_admin_data($session_id);

    $userList=$this->admin_model->all_users(); 
    $buyerList=$this->admin_model->all_buyers();
    $sellerList=$this->admin_model->all_sellers();
    $agentList=$this->admin_model->all_agent();// for foreach loop

    $this->load->view('push-notification',['admin_detail'=>$admin_detail,'userList'=>$userList,'buyerList'=>$buyerList,'sellerList'=>$sellerList,'agentList'=>$agentList]);

   

    }
    else
    {

      return redirect('admin');

    }

}


    public function postNotification()
    {
       /* $request = $this->request->validate([
            ['field' => 'user_id[]', 'label' => 'User Id', 'rules' => 'required'],
            ['field' => 'message', 'label' => 'Message', 'rules' => 'required']
        ]);*/

        if (isset($_POST['selectAll'])) {
            $status = 'All';
        }else{
            $status = 'Selected';
        }

        $user_ids = $_POST['user_id'];
        // $values = array();
        if (!empty($user_ids)) {
            foreach ($user_ids as $userid) {

                            $notedata['user_id'] = $userid;
                            $notedata['message'] = $_POST['message'];
                            date_default_timezone_set('Asia/Kolkata');
            $notedata['created'] = date("Y-m-d H:i:s");
                            $this->db->insert('notification', $notedata);
                

                $userDeviceData = $this->db->select('user_id,device_id,device_type')->get_where('users', ['user_id' => $userid])->result_array();
                if (!empty($userDeviceData)) {
                     $user_apk_notification = '';
                    $sendPushIos = '';
                    foreach ($userDeviceData as $row) {
                        if ($row['device_type']=='android') {

                         // print_r($row['device_id']);
                            $user_apk_notification = $this->user->push_notification_android($row['device_id'], $_POST['message']);
                           //print_r($user_apk_notification);


                        }/*else{
                            $sendPushIos = sendPushIos(@$row['device_id'], $user_ios_message_apk);
                        }*/
                    }

                }
            }

          /*  $insertData = [
                'receiver_ids' => implode(',', $user_ids),
                'message' => $request['message'],
                'status' => $status
            ];*/
           /* $this->Admin_Model->insert_getId('admin_notifications', $insertData);  */        
            // log_activity($response, 'NOTIFICATION_RESPONSE_40');

              $this->session->set_flashdata('msg','Notification Sent Successfully');
              $this->session->set_flashdata('msg_class','alert-success');
            
            //$this->response->success('Successfully Send');  
             return redirect('admin/notification');                
        }

    }

    public function postAgentNotification()
    {
       /* $request = $this->request->validate([
            ['field' => 'user_id[]', 'label' => 'User Id', 'rules' => 'required'],
            ['field' => 'message', 'label' => 'Message', 'rules' => 'required']
        ]);*/

        if (isset($_POST['selectAll'])) {
            $status = 'All';
        }else{
            $status = 'Selected';
        }

        $user_ids = $_POST['user_id'];
        // $values = array();
        if (!empty($user_ids)) {
            foreach ($user_ids as $userid) {

                            $notedata['user_id'] = $userid;
                            $notedata['message'] = $_POST['message'];
                            $notedata['user_type'] = "agent";
                            date_default_timezone_set('Asia/Kolkata');
                             $notedata['created'] = date("Y-m-d H:i:s");
                            $this->db->insert('notification', $notedata);
                

                $userDeviceData = $this->db->select('id,device_id')->get_where('agent', ['id' => $userid])->result_array();
                if (!empty($userDeviceData)) {
                    $user_apk_notification = '';
                    $sendPushIos = '';
                    foreach ($userDeviceData as $row) {
                            $user_apk_notification = $this->user->push_notification_android($row['device_id'], $_POST['message']);
                    }

                }
            }
        $this->session->set_flashdata('msg','Notification Sent Successfully');
         $this->session->set_flashdata('msg_class','alert-success');
          return redirect('admin/notification');                
        }

    }
public function getsubcategorybycatid()
{

  //$session_id = $this->session->userdata('admin_id');

  $category_id= $this->input->post('category_id');


    $subcategory =  get_subcategory_byid($category_id);
$sub .="<option value='0' >Select Subcategory</option>";
    if(!empty($subcategory)){

      foreach ($subcategory as $key => $subcat) {

        $sub .="<option value=".$subcat->sub_id.">".$subcat->sub_category."</option>";
     
      }

    }
         echo $sub;

    //$admin_detail = $this->admin_model->get_admin_data($session_id);

    //$userList=$this->admin_model->all_users();   // for foreach loop

    //$this->load->view('push-notification',['admin_detail'=>$admin_detail,'userList'=>$userList]);

   


}

public function updateagentcode($user_id, $agentcode){
    if($agentcode=="x")
    $agentcode="";
    $this->db->update("users", ["agentcode"=>$agentcode], ["user_id"=>$user_id]);
    echo "Successs";
}
 
public function chats($chatlist=0){
    $session_id = $this->session->userdata('admin_id');

    if($session_id)
    {
    $admin_detail = $this->admin_model->get_admin_data($session_id);

    $this->load->view('admin_chats',['admin_detail'=>$admin_detail, 'chatlist_id'=>$chatlist]);

   

    }
    else
    {

      return redirect('admin');

    }
}

public function updateproductfeaturestatus()
   {
 
     $userid= $this->input->post('product_id');
    $category_id= $this->input->post('category_id');

     $status=$this->input->post('pay_type');
    if($category_id==1){
     $arr=array('pay_type'=>$status,'created_at'=>date("Y-m-d H:i:s"));
      $res=$this->admin_model->update_reusable_status($userid,$arr);
    }
    else if($category_id==2){
        $arr=array('pay_type'=>$status,'created_at'=>date("Y-m-d H:i:s"));
      $res=$this->admin_model->update_tuition_status($userid,$arr);
    }
     else if($category_id==3){
        $arr=array('pay_type'=>$status,'created_at'=>date("Y-m-d H:i:s"));
      $res=$this->admin_model->update_job_status($userid,$arr);
    }
     else if($category_id==4){
        $arr=array('pay_type'=>$status,'created_at'=>date("Y-m-d H:i:s"));
      $res=$this->admin_model->update_internship_status($userid,$arr);
    }
    
    //   if($res==1)
    //       {
    //         $this->session->set_flashdata('msg','Update successfully!!');
    //         $this->session->set_flashdata('msg_class','alert-success');
    //       }
    //       else
    //       {
    //         $this->session->set_flashdata('msg','Update Not Successfully!!');
    //         $this->session->set_flashdata('msg_class','alert-danger');
    //       }

         // return redirect('admin/products');
   } 

public function updateproduct(){
    $pid=$this->input->post("pid");
    $data=$this->input->post();
    unset($data["pid"]);
    unset($data["product_id"]);
     if (!empty($_FILES['backimg']['name'])) {
		  $filesCount = count($_FILES['backimg']['name']);
		  for($i = 0; $i < $filesCount; $i++){
		      $_FILES['file']['name']     = $_FILES['backimg']['name'][$i];
		      $_FILES['file']['type']     = $_FILES['backimg']['type'][$i];
		      $_FILES['file']['tmp_name'] = $_FILES['backimg']['tmp_name'][$i];
		      $_FILES['file']['error']     = $_FILES['backimg']['error'][$i];
		      $_FILES['file']['size']     = $_FILES['backimg']['size'][$i];
		                    
		                    
		                    $config['upload_path'] = './uploads/product/';
		                    $config['allowed_types'] = '*';
		                    $this->load->library('upload', $config);
		                    $this->upload->initialize($config);
		                    if($this->upload->do_upload('file')){
		                        $fileData = $this->upload->data();
		                        $uploadData[$i]['file_name'] = $fileData['file_name'];
		                        $uploadData[$i]['created'] = date("Y-m-d H:i:s");
		                        $product_image = array("product_id"=>$pid,"product_image"=>$uploadData[$i]['file_name'] );
		                              $this->db->insert('product_image', $product_image);
		                               $pimage=$uploadData[$i]['file_name'];
		                    }
		                }
		            }
    if($this->db->update("product", $data, "id=$pid")){
        $img=$this->db->query("SELECT product.*, product_image.product_image, product_image.product_id FROM product inner JOIN `product_image` on product.id=product_image.product_id where product_id=$pid order by product_image.id desc limit 1")->row()->product_image;
        $source="./uploads/product/$img";
      $destImagePath="./uploads/product/thumbnails/$img";
      $destImagdePath="http://localhost:8000/uploads/product/thumbnails/$img";
      $thumbWidth=300;                        
	   $dd = $this->Product_model->generateThumbnail($source, $destImagePath, $thumbWidth);
      $this->db->update("product", ["thumb_image"=>$destImagdePath], "id=$pid");
         return redirect('/admin/productdetail/'.$pid);
    }
}


public function deleteproductimage($image_id=0, $product_id=0){
    if($image_id!=0){
       $image=$this->db->get_where("product_image", "id=$image_id")->row()->product_image;
       unlink("/uploads/product/".$image);
       $this->db->delete("product_image", "id=$image_id");
       $img=$this->db->query("SELECT product.*, product_image.product_image, product_image.product_id FROM product inner JOIN `product_image` on product.id=product_image.product_id where product_id=$product_id ORDER BY `product_image`.`product_id` asc limit 1")->row()->product_image;
      $source="./uploads/product/$img";
      $destImagePath="./uploads/product/thumbnails/$img";
      $destImagdePath="http://localhost:8000/uploads/product/thumbnails/$img";
      $thumbWidth=300;                        
	   $dd = $this->Product_model->generateThumbnail($source, $destImagePath, $thumbWidth);
      $this->db->update("product", ["thumb_image"=>$destImagdePath], "id=$product_id");
       echo "$destImagePath";
    }
}
public function outofstock(){
    $productid=$this->input->post("productid");
    $stock=$this->input->post("stock");
    $this->db->update("product", ["stock"=>$stock], "id=$productid");
    echo "success";
}
public function updateproductsquence(){
$arrdata = $this->input->post("arrdata");    
for($i=0; $i<count($arrdata); $i++){
    $product_id=explode(",", $arrdata[$i])[0];
    $priority=explode(",", $arrdata[$i])[1];
    $this->db->update("product", ["priority"=>$priority], "id=$product_id");
}  
echo "Success";
}

public function updateproductpriority(){
$priority = $this->input->post("priority"); 
$product_id = $this->input->post("product_id");
$this->db->update("product", ["priority"=>$priority], "id=$product_id");
echo "Success";
}

public function getratingblock($product_id){
			$reviews_data = $this->db->select("ratings.*, users.username, users.profile_img")->join("users", "ratings.user_id=users.user_id")->get_where("ratings", "product_id=$product_id")->result();
		$output="";
			foreach($reviews_data as $value){ 
		
	$output .='<div class="row"><div class="col-sm-3">
							<img src="http://localhost:8000/uploads/profile/'.$value->profile_img.'" style="height:50px; width:50px" class="img-rounded">
							<div class="review-block-name"><a href="#">'.$value->username.'</a></div>
							<div class="review-block-date">'.date("M d, Y", strtotime($value->created)).'<br/>'.shorttime($value->created).'</div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<button type="button" class="btn '.((($value->rating)>=1)?"btn-warning":"btn-default btn-grey").' btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn '.((($value->rating)>=2)?"btn-warning":"btn-default btn-grey").' btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn '.((($value->rating)>=3)?"btn-warning":"btn-default btn-grey").' btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn '.((($value->rating)>=4)?"btn-warning":"btn-default btn-grey").' btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn '.((($value->rating)>=5)?"btn-warning":"btn-default btn-grey").' btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							</div>
		
							<div class="review-block-description">'.$value->review.'</div>
						</div>
					</div>
					<hr/>';
			}	
			echo $output;
}
public function testimage($image, $quality=10){
    $imagePath="./uploads/product/".urldecode($image);
header('Content-Type: image/jpeg');
$w=300;
$h=300;
$crop=TRUE;
list($width, $height) = getimagesize($imagePath);
    $r = $width / $height;
    if ($crop) {
        if ($width > $height) {
            $width = ceil($width-($width*abs($r-$w/$h)));
        } else {
            $height = ceil($height-($height*abs($r-$w/$h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
            $newwidth = $w;
        }
    }
    $img = imagecreatefromjpeg($imagePath);
    $exif = exif_read_data($imagePath);
    if ($exif && isset($exif['Orientation'])) {
        $orientation = $exif['Orientation'];
        if ($orientation != 1) {
           
            $deg = 0;
            switch ($orientation) {
                case 3:
                    $deg = 180;
                    break;
                case 6:
                    $deg = 270;
                    break;
                case 8:
                    $deg = 90;
                    break;
            }
            if ($deg) {
                $img = imagerotate($img, $deg, 0);
            }
        }
    }
    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Output
imagejpeg($dst);
}





}


