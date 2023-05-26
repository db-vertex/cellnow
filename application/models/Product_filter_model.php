<?php
class Product_filter_model extends CI_Model
{
	function fetch_filter_type($type,$category)
	{
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
  
	    
	    
		$this->db->distinct();
		$this->db->where($type .'!=',"");
		$this->db->select($type);
		$this->db->from($sql);
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}

	function make_query($minimum_price, $maximum_price,  $brand, $sub_category, $category,$type)
	{
	  
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
    
	  $session_id = $this->session->userdata("id");
     if ($session_id) {
	  if(isset($_SESSION["id"]) !== ''){
		$query = "
		SELECT * FROM $sql WHERE pay_type != '3' AND user_id != {$_SESSION['id']}";
	  }
     }
	  else{
	      	$query = "SELECT * FROM $sql WHERE pay_type != '3' ";
	  }
		
		
		if(isset($minimum_price, $maximum_price) && !empty($minimum_price) && !empty($maximum_price))
		{
		   if($category == 1){
			$query .= "
           AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
         ";
		   }
		     else{
			$query .= "
           AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
         ";
		   }
		
			
		}

		if(isset($brand))
		{
			$brand_filter = implode("','", $brand);
			$query .= "
			 AND Brand IN('".$brand_filter."')
			";
		}
		if(isset($type))
		{
		  $type_filter = implode("','", $type);
			$query .= "
			 AND type IN('".$type_filter."')
			";
		}
		// if(isset($Model))
		// {
		// 	$Model_filter = implode("','", $Model);
		// 	$query .= "
		// 	 AND Model IN('".$Model_filter."')
		// 	";
		// }
		
	   if(isset($sub_category))
		{
			$sub_category_filter = implode("','", $sub_category);
			$query .= "
			 AND subcategory_id IN('".$sub_category_filter."')
			";
		}
	 
		return $query;
		
	}

	function fetch_data($limit, $start, $minimum_price, $maximum_price,  $brand, $sub_category, $category,$type)
	{
		$query = $this->make_query($minimum_price, $maximum_price,  $brand, $sub_category, $category,$type);

		$query .= ' LIMIT '.$start.', ' . $limit;

		$data = $this->db->query($query);

		$pro = '';
		if($data->num_rows() > 0)
		{
			foreach($data->result_array() as $row)
			{
           
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
            
            $pro .= '    <div class="col-lg-6 col-sm-6 col-6 offset-sm-0 offset-1 p-5">
            <div class="card"
                                style="border-radius: 37px 37px 37px 37px; box-shadow:rgba(0, 0, 0, 0.10) 0px 5px 15px;">
                                <img class="related_ads_card_img  img-fluid"
                                    src="'.base_url($row["cover_img"]).'"
                                    alt="related_ads_card_img">
                                <div class="card-body related_ads_card">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="related_ads_card_title">';
                                            $title = $row['title'];
						
						if(strlen($title) <= 10)
						{
						$pro .= ucfirst($title);
					   
   
						}
						else
						{
						$y = substr($title, 0, 10) .'...';
						$pro .= ucfirst($y);
						}
						$pro.='</p>
                                        </div>
                                        <div class="col-2">
                                            <b>   
                                              <i style="font-size:18px;color:#F15927; text-align: right;" ' . (empty($user) || !isset($user) ? 'data-toggle="modal" data-target="#login"' : 'data-uid="'.$session_id.'"') . ' class="'.($wishlist == 0 ? 'fa fa-heart-o' : 'fa fa-heart').' dddssaaf dddssaaf'.$row["id"].'" data-pid="'.$row["id"].'" data-cid="'.$row["category_id"].'" data-wishlist="'.$wishlist.'" ></i>
                                            </b>
                                        </div>
                                        <div class="col-4">
                                            <p class="details_price">$<span>'.$row['price'].'</span></p>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-12">
                                            <small class="card-text"
                                                style="color: #575757;">';
                                                $title = $row['Description'];
						
						if(strlen($title) <= 25)
						{
						$pro .= ucfirst($title);
					   
   
						}
						else
						{
						$y = substr($title, 0, 25) .'...';
						$pro .= ucfirst($y);
						}
						$pro.='</small><br>
                                        </div>
                                    </div>
                                   
                                    <div class="row mt-1">
                                        <div class="col-3">
                                            <p style="color: #575757;">Model</p>
                                        </div>
                                        <div class="col-5">
                                            <p style="color: #575757;">2015</p>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-3">
                                            <i class="bi bi-geo-alt-fill" aria-hidden="true"
                                                style="font-size:18px; color:#69d3b0"></i>
                                        </div>
                                        <div class="col-5">
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
                                        <div class="col-3 pe-2">
                                            <a
                                                href="<?php echo base_url(); ?>welcome/productdetail/<?php echo $relatedproduct->category_id; ?>/<?php echo $relatedproduct->id; ?>/<?php echo $relatedproduct->subcategory_id; ?>">
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
		}
		else
		{
			$pro .= '
              <center style="margin-top:200px;"><img  src="'.base_url("/assets/images/no_product .png").'"></center> 
       </div>';
		}
		return $pro;
	}

	function count_all($minimum_price, $maximum_price,  $brand, $sub_category, $category,$type)
	{
		$query = $this->make_query($minimum_price, $maximum_price, $brand, $sub_category, $category,$type);
		$data = $this->db->query($query);
	 
	    return $data->num_rows();
	    
	  
	     
	  
	}

}

?>
