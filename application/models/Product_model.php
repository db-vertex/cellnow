<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
		//load database library
        $this->load->database();
    }

    /*
     * Fetch user data
     */
    public function category_reusable_parts($data = array()) {
        $insert = $this->db->insert(' category_reusable_parts', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function category_commericial_places($data = array()) {
        $insert = $this->db->insert(' category_commericial_places', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function category_residential_places($data = array()) {
        $insert = $this->db->insert(' category_residential_places', $data);
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

    public function edit_category_reusable_parts($data = array()) {
        $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_reusable_parts', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function edit_category_tuitions($data = array()) {
        $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_tuitions', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }


    public function edit_category_job($data = array()) {
        $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_job', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }


    public function edit_category_internships($data = array()) {
        $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_internships', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }



    
     function get_all_products()
{ 
    //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();

    $query= 'SELECT id, user_id,title,category_id,subcategory_id,For_sale_by,Brand,Make,Model,kilometers,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Bikes  UNION
                SELECT id, user_id,title,category_id,subcategory_id,NULL,NULL,NULL,NULL,Type,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Books  UNION
                SELECT id, user_id,title,category_id,subcategory_id,NULL,NULL,NULL,NULL,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Business  UNION 
                SELECT id, user_id,title,category_id,subcategory_id,For_sale_by,Brand,Make,Model,kilometers,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Cars  UNION
                SELECT id, user_id,title,category_id,subcategory_id,Kitchen_appliances,type,NULL,Model,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Electronic  UNION
                SELECT id, user_id,title,category_id,subcategory_id,NULL,fashion_type,type,NULL,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Fashion  UNION
                SELECT id, user_id,title,category_id,subcategory_id,NULL,type,NULL,NULL,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Furniture UNION
                SELECT id, user_id,title,category_id,subcategory_id,Qualification,type,NULL,Responsibilties,NULL,Location,Address,Description,Condition_product,Salary,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Jobs  UNION
                SELECT id, user_id,title,category_id,subcategory_id,NULL,NULL,NULL,NULL,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Kids  UNION
                SELECT id, user_id,title,category_id,subcategory_id,NULL,type,NULL,Model,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Mobile  UNION
                SELECT id, user_id,title,category_id,subcategory_id,NULL,NULL,NULL,NULL,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Other  UNION
                SELECT id, user_id,title,category_id,subcategory_id,NULL,NULL,NULL,NULL,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Pets  UNION
                 SELECT id, user_id,title,category_id,subcategory_id,For_sale_by,Available,NULL,size,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Properties_rent  UNION
                SELECT id, user_id,title,category_id,subcategory_id,For_sale_by,NULL,NULL,size,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Properties_sale UNION
                SELECT id, user_id,title,category_id,subcategory_id,Availability,NULL,NULL,NULL,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Services  ';
        $category_data = $ci->db->query($query);  
    
  return $category_data->result(); 
   
}

function visit_products($counts){
  $category =  $counts['category_id'];
  $product_id =  $counts['product_id'];
  
  $where_product  = $this->db->get_where('visit_product',array('category_id'=>$category, 'product_id'=>$product_id,))->result();
 if(!$where_product){
     $this->db->insert('visit_product',$counts);
      return $this->db->insert_id();
      
 }
 else{
    foreach($where_product as $count)
    $i = $count->count;
    $data = $i++;
    $pro =  $this->db->where(array('category_id'=>$category, 'product_id'=>$product_id,))->update('visit_product', ['count'=>$i++]);
    
 }

}

     
 function Sponsored_product($id = ''){
 if(empty($id)){
        
$query = $this->db->query('SELECT id, user_id,title,category_id,subcategory_id,For_sale_by,Brand,Make,Model,kilometers,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Bikes WHERE pay_type = 1 UNION
            SELECT id, user_id,title,category_id,subcategory_id,NULL,NULL,NULL,NULL,Type,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Books WHERE pay_type = 1 UNION
             SELECT id, user_id,title,category_id,subcategory_id,NULL,NULL,NULL,NULL,Type,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Books WHERE pay_type = 1 UNION
             SELECT id, user_id,title,category_id,subcategory_id,NULL,NULL,NULL,NULL,NULL,Location,Address,Description,Condition_product,Price,Show_My_number,thumbnails,images_1,images_2,images_3,images_4,images_5 FROM category_Books WHERE pay_type = 1 UNION
             ');
         

     //  return  $query->result();
        
    }else{
          $query=$this->db->query("SELECT *, product.created as pcreated FROM product inner join product_image on product.id=product_image.product_id inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where status=0 and active_status=0 and product_available_status=0 and stock=0 and featured=1 GROUP by product_id ORDER BY product.priority asc, product.created desc");
          return $query->result();
    }
           
     }
        
function getRows($id = ""){
    if(!empty($id)){
         $this->db->select('product.*, product_image.product_image, product.id as id');    
        $this->db->from('product');
        $this->db->join('product_image', 'product.id = product_image.product_id', 'inner');
        $this->db->where(array('product.id' => $id, 'product.status'=> 0,'active_status'=> 0));
        $this->db->order_by("product.featured", "DESC"); 
        $this->db->order_by("product.created", "DESC");
        $query = $this->db->get();
        $data = $query->row_array();
        $product_id = $data["id"];
        $data["ratings"]=round($this->db->query("select IFNULL((SELECT AVG(rating) FROM `ratings` where product_id=$product_id), 0) as ratings")->row()->ratings, 1);
        $data["total_ratings"]=$this->db->select("count(*) as total")->get_where("ratings", "product_id=$product_id")->row()->total;
        return $data;   
    }else{
        $this->db->select('*');    
        $this->db->from('product');
        $this->db->join('product_image', 'product.id = product_image.product_id', 'inner');
        $this->db->where(array('product.status'=> 0,'active_status'=> 0));
        $this->db->order_by("product.featured", "DESC");
        $this->db->order_by("product.created", "DESC");
        $query = $this->db->get();
        $data = $query->row_array();
       
        for($i=0; $i<count($data); $i++){
         $product_id = $data[$i]["id"];    
        $data[$i]["ratings"]=round($this->db->query("select IFNULL((SELECT AVG(rating) FROM `ratings` where product_id=$product_id), 0) as ratings")->row()->ratings, 1);
        $data[$i]["total_ratings"]=$this->db->select("count(*) as total")->get_where("ratings", "product_id=$product_id")->row()->total;
        }
        return $data; 
    }
}

function getsellerproduct($seller_id=0){
     $this->db->select('*');    
            $this->db->from('product');
            $this->db->where(array('product.user_id'=>$seller_id, 'product.status'=> 0,'active_status'=> 0));
            $this->db->order_by("product.featured", "DESC");
            $this->db->order_by("product.created", "DESC");
            $query = $this->db->get();
            $data = $query->result_array();
            for($i=0; $i<count($data); $i++){
           $data[$i]["product_image"]=str_replace("http://localhost:8000/uploads/product/thumbnails/","",$data[$i]["thumb_image"]);
           $product_id = $data[$i]["id"];
            $data[$i]["ratings"]=round($this->db->query("select IFNULL((SELECT AVG(rating) FROM `ratings` where product_id=$product_id), 0) as ratings")->row()->ratings, 1);
            $data[$i]["total_ratings"]=$this->db->select("count(*) as total")->get_where("ratings", "product_id=$product_id")->row()->total;
            }
            return $data;
}

public function get_search($term) 
{
$this->db->select('*');
$this->db->from('category_Bikes,category_Cars');
$this->db->like('category_Bikes.title',$term);
$this->db->like('category_Cars.title',$term);
$query = $this->db->get();

return $query->result();
}


function get_all_visit_count_product(){
    
       
       $this->db->select('visit_product.*,category_Bikes.*,category_Cars.*');
        $this->db->from('visit_product');
          $this->db->join('category_Bikes', 'visit_product.product_id = category_Bikes.id AND visit_product.category_id = category_Bikes.category_id')
             ->join('category_Cars', 'visit_product.product_id = category_Cars.id');
        $query = $this->db->get();
        return $query->result();
}

function delete_product($category_id,$product_id){
    
 
  
    if($category_id == 1){
      $sql = "category_reusable_parts";
        $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    else if($category_id == 2){
        $sql = "category_tuitions";  
          $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    else if($category_id == 3){
         $sql = "category_job"; 
           $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    else if($category_id == 4){
        $sql = "category_internships";  
          $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    
         $pro = $query->result();
        foreach($pro as $images){
         $cover_img =  $images->cover_img;
         $images_2 =  $images->images_2;  
        $images_3 =  $images->images_3;  
        $images_4 =  $images->images_4;  
         $images_5 =  $images->images_5;  
           unlink($cover_img);
             unlink($images_2);
              unlink($images_3);
               unlink($images_4);
                unlink($images_5);
        }
        
    $this->db->delete($sql, array('id' => $product_id)); 
    $this->db->delete('wishlist', array('product_id' => $product_id, 'category_id' => $category_id, ));
    $this->db->delete('block', array('product_id' => $product_id, 'category_id' => $category_id, ));
    $this->db->delete('chat', array('product_id' => $product_id, 'category_id' => $category_id, ));
    $this->db->delete('chat_list', array('product_id' => $product_id, 'category_id' => $category_id, ));
    $this->db->delete('report_abuse', array('product_id' => $product_id, 'category_id' => $category_id, ));
    $this->db->delete('visit_product', array('product_id' => $product_id, 'category_id' => $category_id, ));

 
    
}



function edit_product_get($category_id,$product_id){
    
 
  
    if($category_id == 1){
      $sql = "category_reusable_parts";
        $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    else if($category_id == 2){
        $sql = "category_tuitions";  
          $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    else if($category_id == 3){
         $sql = "category_job"; 
           $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    else if($category_id == 4){
        $sql = "category_internships";  
          $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    
         $pro = $query->result();
         return  $pro;
    
}



function getproduct($id = ""){

            $this->db->select('*');    
            $this->db->from('product');
            //$this->db->join('product_image', 'product.id = product_image.id', 'inner');
            $this->db->where(array('id' => $id,'status'=> 0,'active_status'=> 0));
             $query = $this->db->get();
           // $query = $this->db->get_where('product', array('id' => $id));
            return $query->row_array();

}

function getproductall($id = ""){

            $this->db->select('*');    
            $this->db->from('product');
            //$this->db->join('product_image', 'product.id = product_image.id', 'inner');
            $this->db->where(array('id' => $id));
             $query = $this->db->get();
           // $query = $this->db->get_where('product', array('id' => $id));
            return $query->row_array();

}

function getdeactproduct($id = ""){

            $this->db->select('*');    
            $this->db->from('product');
            //$this->db->join('product_image', 'product.id = product_image.id', 'inner');
            $this->db->where(array('id' => $id));
             $query = $this->db->get();
           // $query = $this->db->get_where('product', array('id' => $id));
            return $query->row_array();

}


        function getactivepro($id = ""){
        if(!empty($id)){
              $this->db->select('*');    
            $this->db->from('product');
            $this->db->join('product_image', 'product.id = product_image.id', 'inner');
             $this->db->where(array('product.id' => $id,'product.status'=> 0,'product.active_status'=> 0 ,'product.featured'=> 0 ));
            //  $this->db->order_by("product.featured", "DESC");
             $this->db->order_by("product.created", "DESC");
             $query = $this->db->get();
           // $query = $this->db->get_where('product', array('id' => $id));
            return $query->row_array();
        }else{
            $query=$this->db->query("SELECT *, product.created as pcreated FROM product inner join product_image on product.id=product_image.product_id inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where status=0 and active_status=0  and product.featured=0  GROUP by product_id ORDER BY product.created desc");
         
            return $query->result();
        }
    }


  

    function getdeactivepro($id = ""){
        if(!empty($id)){
              $this->db->select('*');    
              $this->db->from('product');
              $this->db->join('product_image', 'product.id = product_image.id', 'inner');
              $this->db->where(array('product.status'=> 1,'product.active_status'=> 0));
              $query = $this->db->get();
           // $query = $this->db->get_where('product', array('id' => $id));
            return $query->row_array();
        }else{
              $query=$this->db->query("SELECT *, product.created as pcreated FROM product inner join product_image on product.id=product_image.product_id inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where status=1 and active_status=0 GROUP by product_id ORDER BY product.created desc");
              return $query->result();
        }
    }


        function getadmindeactivepro($id = ""){
        if(!empty($id)){
              $this->db->select('*');    
              $this->db->from('product');
              $this->db->join('product_image', 'product.id = product_image.id', 'inner');
              $this->db->where(array('product.active_status'=> 1));
              $query = $this->db->get();
           // $query = $this->db->get_where('product', array('id' => $id));
            return $query->row_array();
        }else{
              $query=$this->db->query("SELECT *, product.created as pcreated FROM product inner join product_image on product.id=product_image.product_id inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where  active_status=1 GROUP by product_id ORDER BY product.created desc");
              return $query->result();
        }
    }

    
    function getfeaturedpro($id = ""){
        if(!empty($id)){
              $this->db->select('*');    
              $this->db->from('product');
              $this->db->join('product_image', 'product.id = product_image.id', 'inner');
              $this->db->where(array('product.status'=> 0,'active_status'=> 0));
              $query = $this->db->get();
           // $query = $this->db->get_where('product', array('id' => $id));
            return $query->row_array();
        }else{
              $query=$this->db->query("SELECT *, product.created as pcreated FROM product inner join product_image on product.id=product_image.product_id inner join seller_profile on product.profile_id=seller_profile.profile_id and product.user_id=seller_profile.user_id where status=0 and active_status=0 and product_available_status=0 and stock=0 and featured=1 GROUP by product_id ORDER BY product.priority asc, product.created desc");
              return $query->result();
        }
    }
 


        function getproductimage($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('product', array('product_id' => $id));
            return $query->row_array();
        }else{
            $this->db->order_by("id", "DESC"); 
            $query = $this->db->get('product');
            $data =  $query->result_array();
                for($i=0; $i<count($data); $i++){
                     $product_id=$data[$i]["id"];
                     $data[$i]["ratings"]=round($this->db->query("select IFNULL((SELECT AVG(rating) FROM `ratings` where product_id=$product_id), 0) as ratings")->row()->ratings, 1);
                     $data[$i]["total_ratings"]=$this->db->select("count(*) as total")->get_where("ratings", "product_id=$product_id")->row()->total;
                 }
                 return $data;
        }
    }
  

      function getimage($id = ""){
        if(!empty($id)){
            $query = $this->db->order_by("id", "desc")->get_where('product_image', array('product_id' => $id));
            return $query->result_array();
        }
    }

    function getvideo($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('product_video', array('product_id' => $id));
            return $query->result_array();
        }
    }

     function myproduct($id = ""){
        if(!empty($id)){

         /* $this->db->select('product.id,product.product_name,product.price,product.category_id,product.specification,product.description,product.user_id,product.profile_id,product.  status,product.featured,product.stock,product.created,product.  modified,product_image.id as image_id,product_image.product_image as product_image');    
                  $this->db->from('product');
                  $this->db->join('product_image', 'product.id = product_image.product_id', 'left');
                   $this->db->where(array('user_id' => $id,'status'=> 0));
                $this->db->limit($limit, $start);
                $this->db->order_by("product.featured", "DESC"); 
                $query = $this->db->get();
                return $query->result_array();
*/

            $this->db->order_by("id", "DESC"); 
            /*$this->db->join('product_image', 'product.id = product_image.id', 'inner');*/
            $query = $this->db->get_where('product', array('user_id' => $id,'status' => 0,'active_status'=> 0));
            return $query->result_array();
        }
    }

     function myproductwaiting($id = ""){
        if(!empty($id)){

      /*    $this->db->select('product.id,product.product_name,product.price,product.category_id,product.specification,product.description,product.user_id,product.profile_id,product.  status,product.featured,product.stock,product.created,product.  modified,product_image.id as image_id,product_image.product_image as product_image');    
                  $this->db->from('product');
                  $this->db->join('product_image', 'product.id = product_image.product_id', 'left');
                   $this->db->where(array('user_id' => $id,'status'=> ));
                $this->db->limit($limit, $start);
                $this->db->order_by("product.featured", "DESC"); 
                $query = $this->db->get();
*/
            $this->db->order_by("id", "DESC"); 
            $query = $this->db->get_where('product', array('user_id' => $id,'status' => 1,'active_status'=> 0));
            $data =  $query->result_array();
                for($i=0; $i<count($data); $i++){
                     $product_id=$data[$i]["id"];
                     $data[$i]["ratings"]=round($this->db->query("select IFNULL((SELECT AVG(rating) FROM `ratings` where product_id=$product_id), 0) as ratings")->row()->ratings, 1);
                     $data[$i]["total_ratings"]=$this->db->select("count(*) as total")->get_where("ratings", "product_id=$product_id")->row()->total;
                 }
                 return $data;
        }
    }

    
    function delete_img_comman_query($category_id,$product_id,$thumbnails){
    
      $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
    if($category_id == 1){
      $sql = "category_reusable_parts";
       $this->db->select($thumbnails);
               $this->db->from($sql);
             $this->db->where('id',$product_id);
      $query = $this->db->get()->result();
   
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails =>  NULL]);
    }
    else if($category_id == 2){
        $sql = "category_tuitions"; 
          $this->db->select($thumbnails);
               $this->db->from($sql);
             $this->db->where('id',$product_id);
      $query = $this->db->get()->result();
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails =>  NULL]);
    }
    else if($category_id == 3){
         $sql = "category_job"; 
        $this->db->select($thumbnails);
               $this->db->from($sql);
             $this->db->where('id',$product_id);
      $query = $this->db->get()->result();
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails =>  NULL]);
    }
    else if($category_id == 4){
        $sql = "category_internships"; 
      $this->db->select($thumbnails);
               $this->db->from($sql);
             $this->db->where('id',$product_id);
      $query = $this->db->get()->result();
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails => NULL]);
    }
      foreach($query as $images)
     $thumbnails =  $images->$thumbnails;
     unlink($thumbnails);
   $erorr =  $ci->db->error();
}



function paytype_update_comman_query($category_id,$product_id,$pay_type){
    
      $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       
       $thumbnails = 'pay_type';
  
    if($category_id == 1){
      $sql = "category_Mobile";
    
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails =>  $pay_type]);
    }
    else if($category_id == 2){
        $sql = "category_Electronic"; 
        
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails =>  $pay_type]);
    }
    else if($category_id == 3){
         $sql = "category_Furniture"; 
      
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails =>  $pay_type]);
    }
    else if($category_id == 4){
        $sql = "category_Fashion"; 
     
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails => $pay_type]);
    }
    else if($category_id == 5){
         $sql = "category_Bikes";
         
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails =>  $pay_type]);
    }
    else if($category_id == 6){
       $sql = "category_Cars"; 
      
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails =>  $pay_type]);
    }
    else if($category_id == 7){
       $sql = "category_Books";
      
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails =>  $pay_type]);
    }
    else if($category_id == 8){
       $sql = "category_Jobs";  
   
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails =>  $pay_type]);
    }
    else if($category_id == 9){
       $sql = "category_Services";
 
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails => $pay_type]);
    }
    else if($category_id == 10){
        $sql = "category_Pets"; 
        
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails => $pay_type]);
    }
    else if($category_id == 11){
         $sql = "category_Properties_sale"; 
        
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails => $pay_type]);
    }
    else if($category_id == 12){
        $sql = "category_Properties_rent"; 
    
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails => $pay_type]);
    }
    else if($category_id == 13){
        $sql = "category_Kids";  
      
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails => $pay_type]);
    }
    else if($category_id == 14){
         $sql = "category_Business"; 
   
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails => $pay_type]);
       
    }
    else if($category_id == 15){
         $sql = "category_Other"; 
      
       $update = $ci->db->where(array('id'=>$product_id,))->update($sql, [$thumbnails => $pay_type]);
    } 
    
   if($update){
            return true;
        }else{
            return false;
        }
   
}
    
    /*
     * Insert user data
     */
      public function category_Mobile($data = array()) {
        $insert = $this->db->insert('category_Mobile', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
        public function category_Electronic($data = array()) {
        $insert = $this->db->insert('category_Electronic', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
       }
    
    
        public function category_Furniture($data = array()) {
        $insert = $this->db->insert('category_Furniture', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
       }
    
      
        public function category_Fashion($data = array()) {
        $insert = $this->db->insert('category_Fashion', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
       }
       
       
    public function category_Bikes($data = array()) {
        $insert = $this->db->insert('category_Bikes', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
    public function category_Cars($data = array()) {
        $insert = $this->db->insert('category_Cars', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
      public function category_Books($data = array()) {
        $insert = $this->db->insert('category_Books', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
     public function category_Jobs($data = array()) {
        $insert = $this->db->insert('category_Jobs', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
      public function category_Services($data = array()) {
        $insert = $this->db->insert('category_Services', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
       public function category_Pets($data = array()) {
        $insert = $this->db->insert('category_Pets', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }  
    }
    
        public function category_Properties_sale($data = array()) {
        $insert = $this->db->insert('category_Properties_sale', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
       public function category_Properties_rent($data = array()) {
        $insert = $this->db->insert('category_Properties_rent', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
     public function category_Kids($data  = array()) {
       
        $insert = $this->db->insert('category_Kids', $data);
       $this->db->error(); 
      
        if($insert){
            return $this->db->insert_id();
        }else{
            
            return false;
        }
    }
     
     public function category_Business($data = array()) {
        $insert = $this->db->insert('category_Business', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
      public function category_Other($data = array()) {
        $insert = $this->db->insert('category_Other', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
    
        public function edit_category_Mobile($data = array()) {
        $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Mobile', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
        public function  edit_category_Electronic($data = array()) {
            $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Electronic', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
       }
    
    
        public function  edit_category_Furniture($data = array()) {
            $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Furniture', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
       }
    
      
        public function  edit_category_Fashion($data = array()) {
            
           $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Fashion', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
       }
       
       
    public function  edit_category_Bikes($data = array()) {
        
        $this->db->where('id', $data['id']);
        $insert = $this->db->update('category_Bikes', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
    public function  edit_category_Cars($data = array()) {
        $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Cars', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
      public function  edit_category_Books($data = array()) {
          $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Books', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
     public function  edit_category_Jobs($data = array()) {
         $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Jobs', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
      public function  edit_category_Services($data = array()) {
          $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Services', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
       public function  edit_category_Pets($data = array()) {
           $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Pets', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }  
    }
    
        public function  edit_category_Properties_sale($data = array()) {
            $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Properties_sale', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
       public function  edit_category_Properties_rent($data = array()) {
           $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Properties_rent', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
     public function  edit_category_Kids($data  = array()) {
         $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Kids', $data);
       $this->db->error(); 
      
        if($insert){
            return $this->db->insert_id();
        }else{
            
            return false;
        }
    }
     
     
     public function  edit_category_Business($data = array()) {
         $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Business', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
      public function  edit_category_Other($data = array()) {
          $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_Other', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
    
    
    
    
     public function insert($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['created'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('product', $data);
        if($insert){
            return $this->db->insert_id();
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
            $update = $this->db->update('product', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
    
    /*
     * Delete user data
     */
    public function deleteproduct($id){
        $delete = $this->db->delete('product',array('id'=>$id));
        $delete = $this->db->delete('product_image',array('product_id'=>$id));
        return $delete?true:false;
    }

    public function deleteproductimage($image_id){
        $image=$this->db->get_where("product_image", "id=$image_id")->row()->product_image;
        $product_id = $this->db->get_where("product_image", "id=$image_id")->row()->product_id;
        unlink("/uploads/product/".$image);
        $delete = $this->db->delete("product_image", "id=$image_id");
        $img=$this->db->query("SELECT product.*, product_image.product_image, product_image.product_id FROM product inner JOIN `product_image` on product.id=product_image.product_id where product_id=$product_id ORDER BY `product_image`.`product_id` asc limit 1")->row()->product_image;
        $source="./uploads/product/$img";
        $destImagePath="./uploads/product/thumbnails/$img";
        $destImagdePath="http://localhost:8000/uploads/product/thumbnails/$img";
        $thumbWidth=300;                        
	    $dd = $this->Product_model->generateThumbnail($source, $destImagePath, $thumbWidth);
        $this->db->update("product", ["thumb_image"=>$destImagdePath], "id=$product_id");
        
        return $delete?true:false;
    }

     public function deleteproductvideo($id){
    
        $delete = $this->db->delete('product_video',array('id'=>$id));
        return $delete?true:false;
    }



       public function delete($id){
        $delete = $this->db->delete('product',array('id'=>$id));
        return $delete?true:false;
    }

      public function generateThumbnail($source, $destImagePath, $thumbWidth){
 
    switch(mime_content_type($source)){
        case "image/png":{
            $sourceImage = imagecreatefrompng($source);
        break;
            
        }
        case "image/jpeg":{
            $sourceImage = imagecreatefromjpeg($source);   
            break;
        }
        case "image/webp":{
            $sourceImage = imagecreatefromwebp($source);   
            break;
        }
    }
        // $sourceImage = imagecreatefromfile($source);
        $orgWidth = imagesx($sourceImage);
        $orgHeight = imagesy($sourceImage);
        $thumbHeight = $thumbWidth;
        $destImage = imagecreatetruecolor($thumbWidth, $thumbHeight);
        imagecopyresampled($destImage, $sourceImage, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $orgWidth, $orgHeight);
        imagejpeg($destImage, $destImagePath);
}

      public function generateThumbnailProduct($product_id=0){

 
}


}
?>
