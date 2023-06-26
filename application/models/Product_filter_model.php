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
        $sql = "All";  
    }
	if($category==5){
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

	function make_query($minimum_price, $maximum_price, $brand, $sub_category, $categorys, $type)
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
		else if (($sub_category_filter >= 13 && $sub_category_filter <= 20) || $sub_category_filter == 69) {
			
			$sql = "category_tuitions";
		}
		else if(($sub_category_filter >= 23 && $sub_category_filter <= 46) || $sub_category_filter == 21){
			$sql = "category_job";
		}
		else if(($sub_category_filter >= 47 && $sub_category_filter <= 68) || $sub_category_filter == 22){

			$sql = "category_internships";
		 }

	}


    $session_id = $this->session->userdata("id");
    if ($session_id) {
        if (isset($_SESSION["id"]) !== '') {
			if($categorys=='All'){
				$query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = '1' AND user_id != {$_SESSION['id']}  UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = '1' AND user_id != {$_SESSION['id']}   UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = '1' AND user_id != {$_SESSION['id']}   UNION 
			   
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = '1' AND user_id != {$_SESSION['id']} ";
			}else{
				$query = "SELECT * FROM $sql WHERE pay_type != '3' AND user_id != {$_SESSION['id']}";

			}
        }
    } else {
		if($categorys=='All'){
			$query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = '1' UNION
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = '1'  UNION
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = '1'  UNION 
		   
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = '1' ";
		}else{
        $query = "SELECT * FROM $sql WHERE pay_type != '3'";
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


function donatemake_query($minimum_price, $maximum_price, $brand, $sub_category, $categorys, $type)
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
		else if (($sub_category_filter >= 13 && $sub_category_filter <= 20) || $sub_category_filter == 69) {
			
			$sql = "category_tuitions";
		}
		else if(($sub_category_filter >= 23 && $sub_category_filter <= 46) || $sub_category_filter == 21){
			$sql = "category_job";
		}
		else if(($sub_category_filter >= 47 && $sub_category_filter <= 68) || $sub_category_filter == 22){

			$sql = "category_internships";
		 }

	}


    $session_id = $this->session->userdata("id");
    if ($session_id) {
        if (isset($_SESSION["id"]) !== '') {
			if($categorys=='All'){
				$query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = '2' AND user_id != {$_SESSION['id']} UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job WHERE pay_type = '2' AND user_id != {$_SESSION['id']}   UNION
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = '2' AND user_id != {$_SESSION['id']}  UNION 
			   
				SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = '2' AND user_id != {$_SESSION['id']}";
			}else{
				$query = "SELECT * FROM $sql WHERE pay_type != '3' AND user_id != {$_SESSION['id']}";

			}
        }
    } else {
		if($categorys=='All'){
			$query="SELECT id, user_id,title,category_id,subcategory_id,verified_product,brand,postal_code,bill,Warrenty,type,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_reusable_parts  WHERE pay_type = '2' UNION
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type  FROM category_job  WHERE pay_type = '2'  UNION
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Job_type,NULL,address,Description,NULL,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_internships  WHERE pay_type = '2'  UNION 
		   
			SELECT id, user_id,title,category_id,subcategory_id,verified_product,NULL,postal_code,NULL,Education_Type,NULL,address,Description,price,cover_img,images_2,images_3,images_4,images_5 ,pay_type FROM category_tuitions WHERE pay_type = '2' ";
		}else{
        $query = "SELECT * FROM $sql WHERE pay_type != '3'";
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

function fetch_data($limit, $start, $minimum_price, $maximum_price, $brand, $sub_category, $category, $type,$search)
{
	
    $query = $this->make_query($minimum_price, $maximum_price, $brand, $sub_category, $category, $type);

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
			   <img  class="w-100 va-thumbnail image1" src="'.base_url($row["cover_img"]).'" alt="related_ads_card_img">
			   <p>';
			   if($row['pay_type'] ==1){ 
				 $pro.='<img class="img-fluid image2"
                                src="https://dbvertex.com/celnow/assets/images/sponsor.png" style="
    width:80px; ">';
			   }
                             if($row['verified_product'] ==1){ 
                            $pro .='<img class="img-fluid image3" src="https://dbvertex.com/celnow/assets/images/verified.png" style="
    width:80px; ">
                        <p>';

                             }
                        $pro .='</p>
			   <div class="card-body ">
			   <div class="d-flex justify-content-between align-items-center"><p>';
	   $title = $row['title'];
	   
	   if (strlen($title) <= 10) {
		   $pro .= ucfirst($title);
	   } else {
		   $y = substr($title, 0, 10) .'...';
		   $pro .= ucfirst($y);
	   }
	   $pro .= '</p>
					   
						   <p>   
							   <i style="padding:0px;font-size:12px;color:#69d3b0; text-align: right;" '.(empty($user) || !isset($user) ? 'data-toggle="modal" data-target="#login"' : 'data-uid="'.$session_id.'"').' class="'.($wishlist == 0 ? 'fa fa-heart-o' : 'fa fa-heart').' dddssaaf dddssaaf'.$row["id"].'" data-pid="'.$row["id"].'" data-cid="'.$row["category_id"].'" data-wishlist="'.$wishlist.'"></i>
						   </p>
					  ';

			 	   		  
	   if (($row['pay_type'] == 0 || $row['pay_type'] == 1) && ($row['category_id'] == 1 || $row['category_id'] == 2 || $row['category_id'] == 3)) {
		$pro .= '<p class="details_price">₹<span>';		
		   $pro .= $row['price'];
	   }
	   $pro .= '</span></p>
					  
				   </div>
				   <div class="row mt-1">
					   <div class="col-12">
						   <small class="card-text" style="color: #575757;">';
	   $title = $row['Description'];
	   
	   if (strlen($title) <= 25) {
		   $pro .= ucfirst($title);
	   } else {
		   $y = substr($title, 0, 25) .'...';
		   $pro .= ucfirst($y);
	   }
	   $pro .= '</small><br>
					   </div>
				   </div>';
				   if ($row['category_id']==1) {
				  $pro.=' <div class="row">
				   <div class=col-4>
					   <p style="color: #575757;">Brand</p>
				   </div>
				   <div class=col-8>
					   <p style="color: #575757;">'.$row['brand'].'</p>
				   </div>
			   </div>';
			    }
				 
				$pro .= '  <div class="d-flex justify-content-between align-items-center">
				<div class="row">
				<div class="col-3">
				<img src="https://dbvertex.com/celnow/assets/images/location .png">
				</div>
				<div class="col-9 mt-1">
					<p tyle="color: #575757;">';
										   $title = $row['address'];
					   
										   if(strlen($title) <= 12)
										   {
										   $pro .= ucfirst($title);
										  
					  
										   }
										   else
										   {
										   $y = substr($title, 0, 12) .'...';
										   $pro .= ucfirst($y);
										   }
										   $pro.='</p>
										   </div>
										   </div>
									  
										   <a
											   href="https://dbvertex.com/celnow/welcome/productdetail/'.$row['category_id'].'/'. $row['id'].'/'.$row['subcategory_id'].'">
											   <p class="related_ads_details_button ">
												   <spam class="related_ads_details_button_text">Product Detail</spam>
											   </p>
										   </a>
									   </div>
								   </div>
							   </div>
						   </div>
		   </div>
			   ';


        }
    } else {
        $pro .= '<center style="margin-top:200px;"><img src="'.base_url("assets/images/no_product .png").'"></center>';
    }
    return $pro;
}

function donatefetch_data($limit, $start, $minimum_price, $maximum_price, $brand, $sub_category, $category, $type,$search)
{
	
    $query = $this->donatemake_query($minimum_price, $maximum_price, $brand, $sub_category, $category, $type);

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
			   <img  class="w-100 va-thumbnail image1" src="'.base_url($row["cover_img"]).'" alt="related_ads_card_img">
			   <p style="margin-left:10px;">';
			   if($row['pay_type'] ==1){ 
				 $pro.='<img class="img-fluid image2"
                                src="https://dbvertex.com/celnow/assets/images/sponsor.png" style="
   margin-top: -25%; width:80px; ">';
			   }
                             if($row['verified_product'] ==1){ 
                            $pro .='<img class="img-fluid image3" src="https://dbvertex.com/celnow/assets/images/verified.png" style="
   margin-top: -25%; width:80px; ">
                        <p>';

                             }
                        $pro .='</p>
			   <div class="card-body ">
			   <div class="d-flex justify-content-between align-items-center"><p>';
	   $title = $row['title'];
	   
	   if (strlen($title) <= 10) {
		   $pro .= ucfirst($title);
	   } else {
		   $y = substr($title, 0, 10) .'...';
		   $pro .= ucfirst($y);
	   }
	   $pro .= '</p>
					   
						   <p>   
							   <i style="padding:0px;font-size:12px;color:#69d3b0; text-align: right;" '.(empty($user) || !isset($user) ? 'data-toggle="modal" data-target="#login"' : 'data-uid="'.$session_id.'"').' class="'.($wishlist == 0 ? 'fa fa-heart-o' : 'fa fa-heart').' dddssaaf dddssaaf'.$row["id"].'" data-pid="'.$row["id"].'" data-cid="'.$row["category_id"].'" data-wishlist="'.$wishlist.'"></i>
						   </p>
					  ';

			 	   		  
	   if (($row['pay_type'] == 0 || $row['pay_type'] == 1) && ($row['category_id'] == 1 || $row['category_id'] == 2 || $row['category_id'] == 3)) {
		$pro .= '<p class="details_price">₹<span>';		
		   $pro .= $row['price'];
	   }
	   $pro .= '</span></p>
					  
				   </div>
				   <div class="row mt-1">
					   <div class="col-12">
						   <small class="card-text" style="color: #575757;">';
	   $title = $row['Description'];
	   
	   if (strlen($title) <= 25) {
		   $pro .= ucfirst($title);
	   } else {
		   $y = substr($title, 0, 25) .'...';
		   $pro .= ucfirst($y);
	   }
	   $pro .= '</small><br>
					   </div>
				   </div>';
				   if ($row['category_id']==1) {
				  $pro.=' <div class="row">
				   <div class=col-4>
					   <p style="color: #575757;">Brand</p>
				   </div>
				   <div class=col-8>
					   <p style="color: #575757;">'.$row['brand'].'</p>
				   </div>
			   </div>';
			    }
				 
				$pro .= '  <div class="d-flex justify-content-between align-items-center">
				<div class="row">
				<div class="col-3">
				<img src="https://dbvertex.com/celnow/assets/images/location .png">
				</div>
				<div class="col-9 mt-1">
					<p tyle="color: #575757;">';
										   $title = $row['address'];
					   
										   if(strlen($title) <= 12)
										   {
										   $pro .= ucfirst($title);
										  
					  
										   }
										   else
										   {
										   $y = substr($title, 0, 12) .'...';
										   $pro .= ucfirst($y);
										   }
										   $pro.='</p>
										   </div>
										   </div>
									  
										   <a
											   href="https://dbvertex.com/celnow/welcome/productdetail/'.$row['category_id'].'/'. $row['id'].'/'.$row['subcategory_id'].'">
											   <p class="related_ads_details_button ">
												   <spam class="related_ads_details_button_text">Product Detail</spam>
											   </p>
										   </a>
									   </div>
								   </div>
							   </div>
						   </div>
		   </div>
			   ';


        }
    } else {
        $pro .= '<center style="margin-top:200px;"><img src="'.base_url("assets/images/no_product .png").'"></center>';
    }
    return $pro;
}

function count_all($minimum_price, $maximum_price, $brand, $sub_category, $category, $type)
{
    $query = $this->make_query($minimum_price, $maximum_price, $brand, $sub_category, $category, $type);
    $data = $this->db->query($query);

    return $data->num_rows();
}
function donatecount_all($minimum_price, $maximum_price, $brand, $sub_category, $category, $type)
{
    $query = $this->donatemake_query($minimum_price, $maximum_price, $brand, $sub_category, $category, $type);
    $data = $this->db->query($query);

    return $data->num_rows();
}

}

?>