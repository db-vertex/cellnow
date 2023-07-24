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

    public function category_land_plot($data = array()) {
        $insert = $this->db->insert(' category_land_plot', $data);
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

    public function edit_category_commericial_places($data = array()) {
        $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_commericial_places', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function edit_category_residential_places($data = array()) {
        $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_residential_places', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function edit_category_land_plot($data = array()) {
        $this->db->where('id', $data['id']);   
        $insert = $this->db->update('category_land_plot', $data);
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
    else if($category_id == 5){
        $sql = "category_commericial_places";  
          $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    else if($category_id == 6){
        $sql = "category_residential_places";  
          $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    else if($category_id == 7){
        $sql = "category_land_plot";  
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
    else if($category_id == 5){
        $sql = "category_commericial_places";  
          $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    else if($category_id == 6){
        $sql = "category_residential_places";  
          $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    else if($category_id == 7){
        $sql = "category_land_plot";  
          $query = $this->db->get_where($sql, array('id' => $product_id));
    }
    
         $pro = $query->result();
         return  $pro;
    
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
