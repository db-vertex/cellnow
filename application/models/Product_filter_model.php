<?php
class Product_filter_model extends CI_Model
{

	public function __construct() {
        parent::__construct();
		
		//load database library
        $this->load->database();
    }

	
	function fetch_filter_type($type,$category)
	{
		$sql = "";
	   if($category == 1){
      $sql = "category_reusable_parts";
    }
    else if($category == 2){
        $sql = "category_tuitions";  
    }
    else if($category == 3){
         $sql = "category_job"; 
    }
    else if($category == 4){
        $sql = "category_internships";  
    }
	else if($category == 5){
        $sql = "category_commericial_places";  
    }
	else if($category == 6){
        $sql = "category_residential_places";  
    }
	else if($category == 7){
        $sql = "category_land_plot";  
    }
	else if($category == 8){
        $sql = "All";  
    }
	if($category==8){
		$this->session->set_userdata('filter_id' , $sql);
		
		
	}else{
	$this->session->set_userdata('filter_id' , $sql);
	    
		$this->db->distinct();
		$this->db->where($type .'!=',"");
		$this->db->select($type);
		$this->db->from($sql);
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}
}

	function make_query($minimum_price, $maximum_price, $brand,  $select_type,$sub_category, $categorys, $type,$rent_filter,$donate){
	
	$sql = "";
	
	if ($sub_category  == '') {
		$sql = $categorys;
		if($categorys == "category_reusable_parts"){
			$sub_cat = 7;
			$colume_name = "subcategory_id";
		}
		else if($categorys == "category_tuitions"){
			$sub_cat = 13;
			$colume_name = "Education_Type";	
		}
		else if($categorys == "category_job"){
			$sub_cat = 39;
			$colume_name = "Job_type";
		}
		else if($categorys == "category_internships"){
			$sub_cat = 53;
			$colume_name = "subcategory_id";
		}
		else if($categorys == "category_commericial_places"){
			$sub_cat = 21;
			$colume_name = "subcategory_id";
		}
		else if($categorys == "category_residential_places"){
			$sub_cat = 31;
			$colume_name = "subcategory_id";
		}
		else if($categorys == "category_land_plot"){
			$sub_cat = 34;
			$colume_name = "subcategory_id";
		}
		$defult = "defult";
	
	}
	else{
		$sub_category_filter = implode("','", $sub_category);
		if($sub_category_filter <= 12){
			$sql = "category_reusable_parts";
		}
		else if (($sub_category_filter >= 13 && $sub_category_filter <= 22) ) {
			
			$sql = "category_tuitions";
			
		}
		else if(($sub_category_filter >= 23 && $sub_category_filter <= 46)){
			$sql = "category_job";
			
		}
		else if(($sub_category_filter >= 47 && $sub_category_filter <= 74)){

			$sql = "category_internships";
			
		 }
		 else if(($sub_category_filter >= 75 && $sub_category_filter <= 81)){

			$sql = "category_commericial_places";
			
		 }
		 else if(($sub_category_filter >= 82 && $sub_category_filter <= 88) ){

			$sql = "category_residential_places";
			
		 }
		 else if(($sub_category_filter >= 89 && $sub_category_filter <= 91)){

			$sql = "category_land_plot";
			
		 }
		

	}


    $session_id = $this->session->userdata("id");
	$location = $this->session->userdata("location");

	

	if($location){
		if ($session_id) {
			if (isset($_SESSION["id"]) !== '') {
				if($categorys=='All'){
					$query='SELECT * from (SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = 1 AND user_id != '.$_SESSION['id'].'  UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 1 AND user_id != '.$_SESSION['id'].'   UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = 1 AND user_id != '.$_SESSION['id'].'  UNION 
				   
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 1 AND user_id != '.$_SESSION['id'].' UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_commericial_places WHERE pay_type = 1 AND user_id != '.$_SESSION['id'].' UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_residential_places WHERE pay_type = 1 AND user_id != '.$_SESSION['id'].' UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_land_plot WHERE pay_type = 1 AND user_id != '.$_SESSION['id'].') as  custam  WHERE address like "%'.$location.'%" ';
				}else{
					$query = 'SELECT * FROM ' . $sql . ' WHERE pay_type != "3" AND user_id != '.$_SESSION['id'].' AND address LIKE "%' . $location . '%"';

				}
			}
		} else {
			if($categorys=='All'){
				$query='SELECT * from (SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = 1 UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 1   UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = 1 UNION 
			   
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 1 UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_commericial_places WHERE pay_type = 1 UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_residential_places WHERE pay_type = 1 UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_land_plot WHERE pay_type = 1 ) as  custam  WHERE address like "%'.$location.'%" ';
			}else{
				$query = 'SELECT * FROM ' . $sql . ' WHERE pay_type != "3" AND address LIKE "%' . $location . '%"';
			
			}
		}
	}
	else{
	if($donate =="donate_fillter"){
		if ($session_id) {
			if (isset($_SESSION["id"]) !== '') {
				if($categorys=='All'){
					$query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = '1' AND user_id != {$_SESSION['id']}  UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = '1' AND user_id != {$_SESSION['id']}   UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = '1' AND user_id != {$_SESSION['id']}   UNION 
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = '1' AND user_id != {$_SESSION['id']} UNION
					 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_commericial_places WHERE pay_type = '1' AND user_id != {$_SESSION['id']} UNION
					 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_residential_places WHERE pay_type = '1' AND user_id != {$_SESSION['id']} UNION
					 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_land_plot WHERE pay_type = '1' AND user_id != {$_SESSION['id']} ";
				}else{
						$query = "SELECT * FROM $sql WHERE pay_type = '2' AND user_id != {$_SESSION['id']}";
				}
			}
		} else {
			if($categorys=='All'){
				$query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = '1' UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = '1'   UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = '1'   UNION 
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = '1' UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,filter,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_commericial_places WHERE pay_type = '1' UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_residential_places WHERE pay_type = '1' UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_land_plot WHERE pay_type = '1' ";
			}else{
				$query = "SELECT * FROM $sql WHERE pay_type = '2'";
			
			}
		}
	}
	else{
    if ($session_id) {
        if (isset($_SESSION["id"]) !== '') {
			
			if($categorys=='All'){
				$query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = '1' AND user_id != {$_SESSION['id']}  UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = '1' AND user_id != {$_SESSION['id']}   UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = '1' AND user_id != {$_SESSION['id']}   UNION 
			    SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = '1' AND user_id != {$_SESSION['id']} UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_commericial_places WHERE pay_type = '1' AND user_id != {$_SESSION['id']} UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_residential_places WHERE pay_type = '1' AND user_id != {$_SESSION['id']} UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_land_plot WHERE pay_type = '1' AND user_id != {$_SESSION['id']} ";
			}else{

	           if(isset($defult) == "defult"){
				$query = "SELECT * FROM $sql WHERE pay_type != '3' AND user_id != {$_SESSION['id']} AND $colume_name = $sub_cat";
			   }
			   else{
				$query = "SELECT * FROM $sql WHERE pay_type != '3' AND user_id != {$_SESSION['id']}";
			   }
				

			}
        }
    } else {
		if($categorys=='All'){
			$query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = '1' UNION
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = '1'   UNION
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = '1'   UNION 
		   
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = '1' UNION
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,filter,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_commericial_places WHERE pay_type = '1' UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_residential_places WHERE pay_type = '1' UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,filter,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_land_plot WHERE pay_type = '1' ";
		}else{
			if(isset($defult) == "defult"){
				$query = "SELECT * FROM $sql WHERE pay_type != '3'  AND $colume_name = $sub_cat";
			   }
			   else{
				$query = "SELECT * FROM $sql WHERE pay_type != '3'";
			   }
		
		}
    }
   }
     }
	if($categorys!='category_internships'){
    if (isset($minimum_price, $maximum_price) && !empty($minimum_price) && !empty($maximum_price)) {
        $query .= " AND price BETWEEN $minimum_price AND $maximum_price";
    }}
	if (isset($search)) {
       
        $query .= " AND title like '%".$search."%'";
    }
    if (isset($brand)) {
        $brand_filter = implode("','", $brand);
        $query .= " AND brand IN('$brand_filter')";
    }
	if (isset($rent_filter)) {
        $rent_filter = implode("','", $rent_filter);
        $query .= " AND filter IN('$rent_filter')";
    }
    if (isset($type)) {
        $type_filter = implode("','", $type);
        $query .= " AND subcategory_id IN('$type_filter')";
    }
	if($categorys=='category_reusable_parts'){
	if (isset($select_type)) {
        $selct_type_filter = implode("','", $select_type);
        $query .= " AND Select_Type IN('$selct_type_filter')";
    }}
    if (isset($sub_category)) {
        $sub_category_filter = implode("','", $sub_category);
		
	     if($sub_category_filter <= 12 || $sub_category_filter >= 75){
			$query .= " AND subcategory_id IN('$sub_category_filter')";
			
		 }
		 else if (($sub_category_filter >= 13 && $sub_category_filter <= 22)) {
			$query .= " AND Education_Type IN('$sub_category_filter')";
		 }
		 else if($sub_category_filter >= 23 && $sub_category_filter <= 74){
			$query .= " AND Job_type IN('$sub_category_filter')";
		 }
		
       

       
    }

    return $query;
}


function donatemake_query($minimum_price, $maximum_price, $brand, $select_type,$sub_category, $categorys, $type)
    {
	
	$sql = "";
	if ($sub_category  == '') {
		$sql = $categorys;
	}
	else{
		$sub_category_filter = implode("','", $sub_category);
		if($sub_category_filter <= 12){
			
			$sql = "category_reusable_parts";
		}
		else if (($sub_category_filter >= 13 && $sub_category_filter <= 22) ) {
			
			$sql = "category_tuitions";
		}
		else if(($sub_category_filter >= 23 && $sub_category_filter <= 46)){
			$sql = "category_job";
		}
		else if(($sub_category_filter >= 47 && $sub_category_filter <= 68)){

			$sql = "category_internships";
		 }
		 else if(($sub_category_filter >= 75 && $sub_category_filter <= 81)){

			$sql = "category_commericial_places";
		 }
		 else if(($sub_category_filter >= 82 && $sub_category_filter <= 87) ){

			$sql = "category_residential_places";
		 }
		 else if(($sub_category_filter >= 47 && $sub_category_filter <= 68) ){

			$sql = "category_land_plot";
		 }

	}


    $session_id = $this->session->userdata("id");
	$location = $this->session->userdata("location");
	if($location){
		if ($session_id) {
		
			if (isset($_SESSION["id"]) !== '') {
				if($categorys=='All'){
					$query='SELECT * from (SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = 2 AND user_id != '.$_SESSION['id'].' UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job WHERE pay_type = 2 AND user_id != '.$_SESSION['id'].'   UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = 2 AND user_id != '.$_SESSION['id'].'  UNION 
				   
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 2 AND user_id != '.$_SESSION['id'].' UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_commericial_places WHERE pay_type = 2 AND user_id != '.$_SESSION['id'].' UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_residential_places WHERE pay_type = 2 AND user_id != '.$_SESSION['id'].' UNION
					SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_land_plot WHERE pay_type = 2 AND user_id != '.$_SESSION['id'].'
					 ) as  custam  WHERE address like "%'.$location.'%" ';
				}else{
					$query = 'SELECT * FROM ' . $sql . ' WHERE pay_type != "3" AND user_id != '.$_SESSION['id'].' AND address LIKE "%' . $location . '%"';
	
				}
			}
		} else {
			if($categorys=='All'){
				$query='SELECT * from (SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = 2 UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = 2 UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = 2  UNION 
			   
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = 2 UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_commericial_places WHERE pay_type = 2 UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_residential_places WHERE pay_type = 2 UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_land_plot WHERE pay_type = 2) as  custam  WHERE address like "%'.$location.'%" ';
			}else{
			$query = 'SELECT * FROM ' . $sql . ' WHERE pay_type != "3" AND address LIKE "%' . $location . '%"';
			}
		}
	}
	else{

	
    if ($session_id) {
		
        if (isset($_SESSION["id"]) !== '') {
			if($categorys=='All'){
				$query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = '2' AND user_id != {$_SESSION['id']} UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job WHERE pay_type = '2' AND user_id != {$_SESSION['id']}   UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = '2' AND user_id != {$_SESSION['id']}  UNION 
			   
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = '2' AND user_id != {$_SESSION['id']} UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_commericial_places WHERE pay_type = '2' AND user_id != {$_SESSION['id']} UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_residential_places WHERE pay_type = '2' AND user_id != {$_SESSION['id']} UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_land_plot WHERE pay_type = '2' AND user_id != {$_SESSION['id']} ";
			}else{
				$query = "SELECT * FROM $sql WHERE pay_type != '3' AND user_id != {$_SESSION['id']}";

			}
        }
    } else {
		if($categorys=='All'){
			$query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = '2' UNION
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = '2'  UNION
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = '2'   UNION 
		   
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = '2' UNION
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_commericial_places WHERE pay_type = '2' UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_residential_places WHERE pay_type = '2' UNION
				 SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,NULL,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_land_plot WHERE pay_type = '2' ";
		}else{
        $query = "SELECT * FROM $sql WHERE pay_type != '3'";
		}
    }
}
	if($categorys!='category_internships'){
    if (isset($minimum_price, $maximum_price) && !empty($minimum_price) && !empty($maximum_price)) {
        $query .= " AND price BETWEEN $minimum_price AND $maximum_price";
    }}
	if (isset($search)) {
       
        $query .= " AND title like '%".$search."%'";
    }
    if (isset($brand)) {
        $brand_filter = implode("','", $brand);
        $query .= " AND brand IN('$brand_filter')";
    }
    if (isset($type)) {
        $type_filter = implode("','", $type);
        $query .= " AND subcategory_id IN('$type_filter')";
    }

	if($categorys=='category_reusable_parts'){
		if (isset($select_type)) {
			$selct_type_filter = implode("','", $select_type);
			$query .= " AND Select_Type IN('$selct_type_filter')";
		}}
    if (isset($sub_category)) {
        $sub_category_filter = implode("','", $sub_category);
	     if($sub_category_filter <= 12){
			$query .= " AND subcategory_id IN('$sub_category_filter')";
		 }
		 else if (($sub_category_filter >= 13 && $sub_category_filter <= 20) || $sub_category_filter == 69 ) {
			$query .= " AND Education_Type IN('$sub_category_filter')";
		 }
		 else if($sub_category_filter >= 21 && $sub_category_filter <= 68){
			$query .= " AND Job_type IN('$sub_category_filter')";
		 }
       

       
    }

    return $query;
}

function fetch_data($limit, $start, $minimum_price, $maximum_price, $brand, $select_type, $sub_category,$category, $type,$search,$rent_filter,$donate)
{
	
    $query = $this->make_query($minimum_price, $maximum_price, $brand,  $select_type,$sub_category, $category, $type,$rent_filter,$donate);

    $query .= ' LIMIT '.$start.', '.$limit;
    $data = $this->db->query($query);

    $pro = '';
    if ($data->num_rows() > 0) {
        foreach ($data->result_array() as $row) {
			$session_id = $this->session->userdata("id");
			if($session_id){
				 $user = array("user_id" => $session_id); 
			}
			 
		   
		   if (!empty($user) && isset($user)) {
			   $wishlist = get_wishlist($row["id"], $row["category_id"], $user["user_id"]);
		   
			   if (empty($wishlist)) {
				   $wishlist = 0;
			   } else {
				   $wishlist = 1;
			   }
		   } else {
			   $wishlist = 0;
		   }
		   
		   $pro .= '    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 post">
		   <div class="card">
		   <a
		   href="'.base_url("welcome/productdetail/").''.$row['category_id'].'/'. $row['id'].'/'.$row['subcategory_id'].'">
			   <img  class="w-100 va-thumbnail image1" src="'.base_url($row["cover_img"]).'" alt="related_ads_card_img">
			   </a>
			   <p>';
			   if($row['pay_type'] ==1){ 
				 $pro.='<img class="img-fluid image2"
                                src="'.base_url("assets/images/sponsor.png").'" style="
    width:80px; ">';
			   }
                             if($row['verified_product'] ==1){ 
                            $pro .='<img class="img-fluid image3" src="'.base_url("assets/images/verified.png").'" style="
    width:80px; ">
                        <p>';

                             }
                        $pro .='</p>
			   <div class="card-body ">
			   <div class="d-flex justify-content-between align-items-center"> ';

			 	   		  
	   if (($row['pay_type'] == 0 || $row['pay_type'] == 1) && ($row['category_id'] == 1 || $row['category_id'] == 2 || $row['category_id'] == 3|| $row['category_id'] == 5 || $row['category_id'] == 6 || $row['category_id'] == 7)) {
		$pro .= '<p class="details_price">₹<span>';		
		   $pro .= $row['price'];
	   }
	   if (( $row['pay_type'] == 2)) {
		$pro .= '<p class="details_price"><span>Donate';		
		  
	   }
	   $pro .= '</span></p>
	   <p>   <a style="padding:0px;font-size:12px;color:#69d3b0; text-align: right;"'.(empty($user) || !isset($user) ? ' href="'.base_url('welcome/login').'"':
	   '<i style="padding:0px;font-size:12px;color:#69d3b0; text-align: right;"  data-uid="'.$session_id.'"').' class="'.($wishlist == 0 ? 'fa fa-heart-o' : 'fa fa-heart').' dddssaaf dddssaaf'.$row["id"].'" data-pid="'.$row["id"].'" data-cid="'.$row["category_id"].'" data-wishlist="'.$wishlist.'"></i>
   </a></p>
					  
				   </div>
				   <div class="row mt-1">
					   <div class="col-12">
						   <small class="card-text">';
	   $title = $row['title'];
	   
	   if (strlen($title) <= 25) {
		   $pro .= ucfirst($title);
	   } else {
		   $y = substr($title, 0, 25) .'...';
		   $pro .= ucfirst($y);
	   }
	   $pro .= '</small><br>
					   </div>
				   </div>';
				  
				$pro .= '  <div class="d-flex justify-content-between align-items-center">
				<div class="row">
				<div class="col-3 pe-0">
				<img src="'.base_url("assets/images/location .png").'">
				</div>
				<div class="col-9 ps-0 mt-2">
					<p  style="color: #575757;">';
										   $title = $row['address'];
										   if(strlen($title) <= 25)
										   {
										   $pro .= '<span class="ps-3" >'.ucfirst($title);'</span>';
										  
					  
										   }
										   else
										   {
										   $y = substr($title, 0, 25) .'...';
										   $pro .= ucfirst($y);
										   }
										   $pro.='</p>
										   </div>
										   </div>
									  
										 
									   </div>
								   </div>
							   </div>
						   </div>
		        </div>
			   ';


        }
    } else {
        $pro .= '<center style="margin-top:200px;"><img src="'.base_url("assets/images/no_product.png").'"></center>';
    }
    return $pro;
}

function donatefetch_data($limit, $start, $minimum_price, $maximum_price, $brand, $select_type,$sub_category, $category, $type,$search,$donate)
{
	
    $query = $this->donatemake_query($minimum_price, $maximum_price, $brand,$select_type, $sub_category, $category, $type);

    $query .= ' LIMIT '.$start.', '.$limit;
    $data = $this->db->query($query);

    $pro = '';
    if ($data->num_rows() > 0) {
        foreach ($data->result_array() as $row) {
			$session_id = $this->session->userdata("id");
			if($session_id){
				 $user = array("user_id" => $session_id); 
			}
			 
		   
		   if (!empty($user) && isset($user)) {
			   $wishlist = get_wishlist($row["id"], $row["category_id"], $user["user_id"]);
		   
			   if (empty($wishlist)) {
				   $wishlist = 0;
			   } else {
				   $wishlist = 1;
			   }
		   } else {
			   $wishlist = 0;
		   }
		   
		   $pro .= '<div class="col-lg-4 col-md-6 col-sm-6 mb-4 post">
		   <div class="card">
		   <a
		   href="'.base_url("welcome/productdetail/").''.$row['category_id'].'/'. $row['id'].'/'.$row['subcategory_id'].'">
		   <img  class="w-100 va-thumbnail image1" src="'.base_url($row["cover_img"]).'" alt="related_ads_card_img">
			  </a> <p style="margin-left:10px;">';
			   if($row['pay_type'] ==1){ 
				 $pro.='<img class="img-fluid image2"
                                src="'.base_url("assets/images/sponsor.png").'" style="
    width:80px; ">';
			   }
                             if($row['verified_product'] ==1){ 
                            $pro .='<img class="img-fluid image3" src="'.base_url("assets/images/verified.png").'" style="
   width:80px; ">
                        <p>';

                             }
                        $pro .='</p>
			   <div class="card-body ">
			   <div class="d-flex justify-content-between align-items-center"> ';

			 	   		  
	   if (($row['pay_type'] == 0 || $row['pay_type'] == 1) && ($row['category_id'] == 1 || $row['category_id'] == 2 || $row['category_id'] == 3)) {
		$pro .= '<p class="details_price">₹<span>';		
		   $pro .= $row['price'];
	   }
	   if (( $row['pay_type'] == 2)) {
		$pro .= '<p class="details_price"><span>Donate';		
		  
	   }
	   $pro .= '</span></p>
	   <p>  <a style="padding:0px;font-size:12px;color:#69d3b0; text-align: right;"'.(empty($user) || !isset($user) ? ' href="'.base_url('welcome/login').'"':
	   '<i style="padding:0px;font-size:12px;color:#69d3b0; text-align: right;"  data-uid="'.$session_id.'"').' class="'.($wishlist == 0 ? 'fa fa-heart-o' : 'fa fa-heart').' dddssaaf dddssaaf'.$row["id"].'" data-pid="'.$row["id"].'" data-cid="'.$row["category_id"].'" data-wishlist="'.$wishlist.'"></i>
   </a>
						   </p>
					  
				   </div>
				   <div class="row mt-1">
					   <div class="col-12">
						   <small class="card-text" style="color: #575757;">';
	   $title = $row['title'];
	   
	   if (strlen($title) <= 25) {
		   $pro .= ucfirst($title);
	   } else {
		   $y = substr($title, 0, 25) .'...';
		   $pro .= ucfirst($y);
	   }
	   $pro .= '</small><br>
					   </div>
				   </div>
				
				    <div class="row">
				       <div class="col-2">
				         <img src="'.base_url("assets/images/location .png").'">
				       </div>
				       <div class="col-9 mt-1">
					     <p style="color: #575757;">';
										   $title = $row['address'];
					   
										   if(strlen($title) <= 25)
										   {
											$pro .= '<span class="ps-3" >'.ucfirst($title);'</span>';
										  
					  
										   }
										   else
										   {
										   $y = substr($title, 0, 25) .'...';
										   $pro .= ucfirst($y);
										   }
										   $pro.='</p>
						</div>
					</div>
									  
										  
			
								   </div>
							   </div>
						   </div>
		   </div>
			   ';


        }
    } else {
        $pro .= '<center style="margin-top:200px;"><img src="'.base_url("assets/images/no_product.png").'"></center>';
    }
    return $pro;
}

function count_all($minimum_price, $maximum_price, $brand, $select_type,$sub_category, $category, $type,$rent_filter,$donate)
{
    $query = $this->make_query($minimum_price, $maximum_price, $brand,$select_type, $sub_category, $category, $type,$rent_filter,$donate);
    $data = $this->db->query($query);

    return $data->num_rows();
}
function donatecount_all($minimum_price, $maximum_price, $brand, $select_type,$sub_category, $category, $type)
{
    $query = $this->donatemake_query($minimum_price, $maximum_price, $brand, $select_type, $sub_category, $category, $type);
    $data = $this->db->query($query);

    return $data->num_rows();
}

}

?>