<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH."libraries/vendor/razorpay/razorpay/Razorpay.php");
require_once 'vendor/autoload.php';
// -- Define WebPush namespaces
use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

		//load user model
		//load user model
		$this->load->helper('url');
		$this->load->helper('user_helper');
		$this->load->model('product_filter_model');
		$this->load->model('user');
		$this->load->model('main_model');
		$this->load->model('product_model');
		$this->load->model('chat_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library("pagination");

	}

	public function index()
	{
		$session_id = $this->session->userdata('id');
		$this->session->unset_userdata('location');
		$user_detail = $this->user->loginuser($session_id);

		
		if (!empty($user_detail)) {
	
			$this->load->view('front/header', array('user' => $user_detail));
			$this->load->view('front/Home', array('user' => $user_detail));
			$this->load->view('front/footer');
		} else {
			$this->load->view('front/header');
			$this->load->view('front/Home');
			$this->load->view('front/footer');
		}
	}

	public function getsubcategory($data = " ")
	{

		$category_id = $this->input->post('category_id');
		// echo $this->db->last_query();
		$sub = "";

		$subcategory = get_producttype_byid($category_id);  
		 
	
		foreach ($subcategory as $value) {
			//print_r($subcategory);die();

			$sub .= '
	<div class="va-card va-card_category mt-2 px-0"> <a class=" border-0"   
		<p style="text-align:center;" class="my-auto pouler_Categories " ';
			if ($category_id == 1 || $category_id == 5 || $category_id == 6 || $category_id == 7) {
				$sub .= '	onclick="return getproduct( ' . $value->subcategory_id . ',' . $category_id . ')"';

			} else {
				
				$sub .= '	onclick="return getproduct( ' . $value->id . ',' . $category_id . ')"';
				
			}
			$sub .= '>
		<img width="41" height="41" class="';if ($value->id == 7 || $value->id == 13 || $value->id == 43 || $value->id== 53 || $value->id== 77 || $value->id== 87 || $value->id==90 || $value->id==39 ) { $sub .='select ';} $sub .='btn-change common_selector sub_category '; if($category_id==5 || $category_id==6 || $category_id==7){  $sub.='sub_new'.$value->subcategory_id.'' ;}else{   $sub.='sub_new'.$value->id.'' ; } $sub.='"  data-sub-id=" ' . $value->subcategory_id . '" src="'.base_url("uploads/shopcategory/").'' . $value->icon . '" alt="shopcategory">
		 <center style="color:black; font-size:12px; font-weight:500">' . $value->product_type . '</center>
		</p>
		
		  </div>
		 
		  '
			;


		}
		
		echo $sub;

	}


	public function getproduct($data = " ")
	{
		$row = $this->input->post('row');
		$subcategory_id = $this->input->post('subcategory_id'); 
		$category_id = $this->input->post('category_id');
		$donate = $this->input->post('donate');
	
		// echo $this->db->last_query();
		$sub = "";
		if ($subcategory_id) {
			$product = get_product_by_subid($subcategory_id,$category_id);
			$all_count = get_product_by_subid_count($subcategory_id);
		} 
		
		else {
			$product = get_all_bost($row);
			$all_count =get_all_boost_count();
		}
		if (!empty($product)) {

			foreach ($product as $value) {
				

				$sub .= '<div class="col-lg-3 col-md-4 col-sm-6 mt-4 post" id="post_' . $value->id . '">
				<div class="card">
					<div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
						<a href="' . base_url("welcome/productdetail/") . $value->category_id . '/' . $value->id . '/' . $value->subcategory_id . '">
							<img src="' . base_url($value->cover_img) . '" class="w-100 va-thumbnail" />
							<p style="margin-left: 5px;">';
	
					if ($value->pay_type == 1) {
						$sub .= '<img class="img-fluid image2" src="' . base_url() . 'assets/images/sponsor.png" style="width: 80px;">';
					}
	
					if ($value->verified_product == 1 || $value->verified_admin == "yes") {
						$sub .= '<img class="img-fluid image3" src="' . base_url() . 'assets/images/verified.png" style="width: 80px;">';
					}
	
					$sub .= '</p>
								</a>
						<a href="#!">
							<div class="hover-overlay">
								<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
							</div>
						</a>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<p class="details_price mb-3">';
							if ($value->category_id != 4) {
								$sub .= '<span class="">₹' . $value->price . '</span>';
							}
							if ($value->pay_type == 2) {
								$sub .= '<span class="">Donate</span>';
							}
						$sub .= '</p>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<h6 class="dress-name">';
						$title = $value->title;
	
						if (strlen($title) <= 25) {
							$sub .= ucfirst($title);
						} else {
							$y = substr($title, 0, 25) . '...';
							$sub .= ucfirst($y);
						}
						$sub .= '</h6>
						</div>
						<div class="row">
							<div class="col-2">
							<img  src="'.base_url("assets/images/location .png").'" alt="location">
							</div>
							<div class="col-9 pe-0" style="overflow: hidden; align-self: center; text-align: left;">
								<h6>';
								$title = $value->address;
								$sub .= ucfirst($title);
								$sub .= '</h6>
							</div>';
							
							if (strlen($title) >= 25) {
								$sub .= '<div class="col-1 ps-1 d-none d-sm-block" style="text-align: -webkit-left;">
											<h4>...</h4>
										</div>';
							}
							
						$sub .= '</div>
					</div>
				</div>
			</div>';
	


				
			}
		} else {
			$sub .= '<center><img  src="'.base_url("assets/images/no_product.png").'"></center>';
		}
		 if($all_count >4){
         $sub .='  <center class="rounded-5"> <a style="width:100px; background-color: #10B981; color:white;" href ="'.base_url("welcome/fillter_product/.$getproduct_home_category_id").'" class="btn">See All</a></center>';
            } 
		echo $sub;

	}


    public function getproduct_home($data = " ")
	{
		$row = $this->input->post('row');
		$subcategory_id = $this->input->post('subcategory_id');
		$category_id = $this->input->post('category_id');

		$this->session->set_userdata('getproduct_home_category_id', $category_id);

		// echo $this->db->last_query();
		$sub = "";
		if ($subcategory_id) {
			$product = get_product_by_subid($subcategory_id,$category_id);
			$all_count = get_product_by_subid_count($subcategory_id);


		} else {
			$product = get_all_bost($row);
			$all_count =get_all_boost_count();
		}
		if (!empty($product)) {
            $count = 0;
			foreach ($product as $value) {
				$sub .= '<div class="col-lg-3 col-md-4 col-sm-6 mt-4 post" id="post_' . $value->id . '">
				<div class="card">
					<div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
						<a href="' . base_url("welcome/productdetail/") . $value->category_id . '/' . $value->id . '/' . $value->subcategory_id . '">
							<img src="' . base_url($value->cover_img) . '" class="w-100 va-thumbnail" />
							<p style="margin-left: 5px;">';
	
					if ($value->pay_type == 1) {
						$sub .= '<img class="img-fluid image2" src="' . base_url() . 'assets/images/sponsor.png" style="width: 80px;">';
					}
	
					if ($value->verified_product == 1 || $value->verified_admin == "yes") {
						$sub .= '<img class="img-fluid image3" src="' . base_url() . 'assets/images/verified.png" style="width: 80px;">';
					}
	
					$sub .= '</p>
								</a>
						<a href="#!">
							<div class="hover-overlay">
								<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
							</div>
						</a>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<p class="details_price mb-3">';
							if ($value->category_id != 4) {
								$sub .= '<span class="">₹' . $value->price . '</span>';
							}
							if ($value->pay_type == 2) {
								$sub .= '<span class="">Donate</span>';
							}
						$sub .= '</p>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<h6 class="dress-name">';
						$title = $value->title;
	
						if (strlen($title) <= 25) {
							$sub .= ucfirst($title);
						} else {
							$y = substr($title, 0, 25) . '...';
							$sub .= ucfirst($y);
						}
						$sub .= '</h6>
						</div>
						<div class="row">
							<div class="col-2">
							<img  src="'.base_url("assets/images/location .png").'" alt="location">
							</div>
							<div class="col-9 pe-0" style="overflow: hidden; align-self: center; text-align: left;">
								<h6>';
								$title = $value->address;
								$sub .= ucfirst($title);
								$sub .= '</h6>
							</div>';
							
							if (strlen($title) >= 25) {
								$sub .= '<div class="col-1 ps-1" d-none d-sm-block style="text-align: -webkit-left;">
											<h4>...</h4>
										</div>';
							}
							
						$sub .= '</div>
					</div>
				</div>
			</div>';
	
	

        $count++;

        // Break the loop after 4 iterations
        if ($count >= 4) {
            break;
        }	
			}
		} else {
			$sub .= '<center><img  src="'.base_url("assets/images/no_product.png").'"></center>';
		}
		 if($all_count >4){
			$getproduct_home_category_id  = $this->session->userdata('getproduct_home_category_id');
         $sub .='  <center class="rounded-5 mt-3"> <a style="width:100px; background-color: #10B981; border-radius:20px; color:white;" href ="'.base_url("welcome/fillter_product/$getproduct_home_category_id").'" class="btn">See All</a></center>';
            } 
		echo $sub;

	}

	public function getsearchproduct($data = " ")
	{
		$anything = $this->input->post('anything');
		
		if(empty($location) && !empty($anything)){
			$product =  get_all_search_product($anything); 
			$all_count = get_all_search_product_count($anything);
		
			}
			else if(!empty($location) && empty($anything)){
			$product= get_all_locationsearch_product($location);
			$all_count =get_all_locationsearch_product_count($location);
			
			}

		$sub = "";
		
		if (!empty($product)) {

			foreach ($product as $value) {
				
				$session_login_id = $this->session->userdata("id");
				$product_user_id = $value->user_id;
				if ($session_login_id !== $product_user_id) {


					

					$sub .= '<div class="col-lg-3 col-md-4 col-sm-6 mt-4 post" id="post_' . $value->id . '">
    <div class="card">
        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <a href="'.base_url("welcome/productdetail/").'' .$value->category_id . '/' . $value->id . '/' . $value->subcategory_id .'">
                <img src="'.base_url($value->cover_img) . '" class="w-100 va-thumbnail" />
            </a>
            <a href="#!">
                <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </div>
            </a>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h6 style="color:#10B981" class="mb-3">';
				if($value->category_id!=4){
					$sub.='
                    <strong style="color:#10B981" class="ms-2 ">₹' . $value->price . '</strong>';
				}
				
							$sub.=' </h6>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<h6 class="dress-name">';
				$title = $value->title;

				if (strlen($title) <= 20) {
					$sub .= ucfirst($title);
				} else {
					$y = substr($title, 0, 20) . '...';
					$sub .= ucfirst($y);
				}
				$sub .= '</h6>
				</div>
				<div class="row">
					<div class="col-2">
					<img  src="'.base_url("assets/images/location .png").'" alt="location">
					</div>
					<div class="col-9 pe-0" style="overflow: hidden; align-self: center; text-align: left;">
						<h6>';
						$title = $value->address;
						$sub .= ucfirst($title);
						$sub .= '</h6>
					</div>';
					
					if (strlen($title) >= 25) {
						$sub .= '<div class="col-1 ps-1" d-none d-sm-block style="text-align: -webkit-left;">
									<h4>...</h4>
								</div>';
					}
					
				$sub .= '</div>
			</div>
		</div>
	</div>';


				}
			}
		} else {
			$sub .= '<center><img src="'.base_url("assets/images/no_product.png").'"></center>';
		}
		 if($all_count >4){
			$getproduct_home_category_id  = $this->session->userdata('getproduct_home_category_id');
         $sub .='  <center class="rounded-5"> <a style="width:100px; background-color: #10B981; color:white;" href ="<?php echo base_url();?>welcome/fillter_product/'.$getproduct_home_category_id.'" class="btn">See All</a></center>';
            } 
		echo $sub;

	}

	public function getsearchproductfillter($data = " ")
	{
		$anything = $this->input->post('anything');
		
		if(empty($location) && !empty($anything)){
			$product =  get_all_search_product_fillter($anything); 
			$all_count = get_all_search_product_count($anything);
		
			}
			else if(!empty($location) && empty($anything)){
			$product= get_all_locationsearch_product($location);
			$all_count =get_all_locationsearch_product_count($location);
			
			}

		$sub = "";
		
		if (!empty($product)) {

			foreach ($product as $value) {
				
				$session_login_id = $this->session->userdata("id");
				$product_user_id = $value->user_id;
				if ($session_login_id !== $product_user_id) {

			if($session_login_id){
				 $user = array("user_id" => $session_login_id); 
			}

			if (!empty($user) && isset($user)) {
				$wishlist = get_wishlist($value->id, $value->category_id, $value->user_id);
			
				if (empty($wishlist)) {
					$wishlist = 0;
				} else {
					$wishlist = 1;
				}
			} else {
				$wishlist = 0;
			}
					

				


				$sub .='    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 post">
				<div class="card">
				<a
				href="'.base_url("welcome/productdetail/").''.$value->category_id.'/'. $value->id.'/'.$value->subcategory_id.'">
				<div class="" style="text-align: center;">
				<img  class="w-100 va-thumbnail image1" src="'.base_url($value->cover_img).'" alt="related_ads_card_img">
				</div>
				</a>
					<p>';
					if($value->pay_type ==1){ 
						$sub .='<img class="img-fluid image2"
									 src="'.base_url("assets/images/sponsor.png").'" style="
		 width:80px; ">';
					}
								  if($value->pay_type ==1){ 
									$sub .='<img class="img-fluid image3" src="'.base_url("assets/images/verified.png").'" style="
		 width:80px; ">
							 <p>';
	 
								  }
								  $sub .='</p>
					<div class="card-body ">
					<div class="d-flex justify-content-between align-items-center"> ';
	 
								   
			if (($value->pay_type == 0 || $value->pay_type == 1) && ($value->category_id == 1 || $value->category_id == 2 || $value->category_id == 3|| $value->category_id == 5 || $value->category_id == 6 || $value->category_id == 7)) {
			 $sub .='<p class="details_price">₹<span>';		
				$sub .=$value->price;
			}
			if (( $value->pay_type == 2)) {
			 $sub .='<p class="details_price"><span>Donate';		
			   
			}
			$sub .='</span></p>
			<p>   <a style="padding:0px;font-size:12px;color:#69d3b0; text-align: right;"'.(empty($user) || !isset($user) ? ' href="'.base_url('welcome/login').'"':
			'<i style="padding:0px;font-size:12px;color:#69d3b0; text-align: right;"  data-uid="'.$session_login_id.'"').' class="'.($wishlist == 0 ? 'fa fa-heart-o' : 'fa fa-heart').' dddssaaf dddssaaf'.$value->id.'" data-pid="'.$value->id.'" data-cid="'.$value->category_id.'" data-wishlist="'.$wishlist.'"></i>
		</a></p>
						   
						</div>
						<div class="row mt-1">
							<div class="col-12">
								<small class="card-text">';
			$title = $value->title;
			
			if (strlen($title) <= 25) {
				$sub .=ucfirst($title);
			} else {
				$y = substr($title, 0, 25) .'...';
				$sub .=ucfirst($y);
			}
			$sub .='</small><br>
							</div>
						</div>';
					   
					 $sub .='  <div class="d-flex justify-content-between align-items-center">
					 <div class="row">
					 <div class="col-3 pe-0">
					 <img src="'.base_url("assets/images/location .png").'" alt="location">
					 </div>
					 <div class="col-9 ps-0 mt-2">
						 <p  style="color: #575757;">';
												$title = $value->address;
												if(strlen($title) <= 25)
												{
												$sub .='<span class="ps-3" >'.ucfirst($title);'</span>';
											   
						   
												}
												else
												{
												$y = substr($title, 0, 25) .'...';
												$sub .= ucfirst($y);
												}
												$sub .='</p>
												</div>
							          	</div>
										     
											</div>
										</div>
									</div>
								</div>
					 </div>
					';
	 

				}
			}
		} else {
			$sub .= '<center><img src="'.base_url("assets/images/no_product.png").'"></center>';
		}
		
		echo $sub;

	}


	public function getdonateproduct($data = " ")
	{
		$row = $this->input->post('row');
		$subcategory_id = $this->input->post('subcategory_id');
		// echo $this->db->last_query();
		$sub = "";
		
			$product = get_all_donates($row);

		
		if (!empty($product)) {

			foreach ($product as $value) {
				$session_login_id = $this->session->userdata("id");
				$product_user_id = $value->user_id;
				if ($session_login_id !== $product_user_id) {


					//print_r($subcategory);die();

					$sub .= '<div class="col-lg-3 col-md-4 col-sm-6 mt-4 postdonate" id="postdonate' . $value->id . '">
    <div class="card">
        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <a href="'.base_url("welcome/productdetail/").'' .$value->category_id . '/' . $value->id . '/' . $value->subcategory_id . '">
                <img src="'.base_url($value->cover_img) . '" class="w-100 va-thumbnail" />
            </a>
            <a href="#!">
                <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </div>
            </a>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-3">
                    <strong class="ms-2 ">$' . $value->price . '</strong>
                </h6>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="dress-name">';
$title = $value->title;

if (strlen($title) <= 10) {
    $sub .= ucfirst($title);
} else {
    $y = substr($title, 0, 10) . '...';
    $sub .= ucfirst($y);
}
$sub .= '</h6>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h6>';
$title = $value->address;

if (strlen($title) <= 25) {
    $sub .= ucfirst($title);
} else {
    $y = substr($title, 0, 100) . '...';
    $sub .= ucfirst($y);
}
$sub .= '</h6>
            </div>
        </div>
    </div>
</div>';


				}
			}
		} else {
			$sub .= '<center><img  src="'.base_url("assets/images/no_product.png").'"></center>';
		}
		echo $sub;

	}


	public function getsearchroduct($data = " ")
	{

		$row = $this->input->post('row');
		$subcategory_id = $this->input->post('subcategory_id');
		// echo $this->db->last_query();
		$sub = "";
		
			$product = get_all_search_products($row);

		
		if (!empty($product)) {

			foreach ($product as $value) {
				$session_login_id = $this->session->userdata("id");
				$product_user_id = $value->user_id;
				if ($session_login_id !== $product_user_id) {


					//print_r($subcategory);die();

					$sub .= '<div class="col-lg-3 col-md-4 col-sm-6 mt-4 postdonate" id="postdonate' . $value->id . '">
    <div class="card">
        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <a href="'.base_url("welcome/productdetail/").'' .$value->category_id . '/' . $value->id . '/' . $value->subcategory_id . '">
                <img src="'.base_url($value->cover_img) . '" class="w-100 va-thumbnail" />
            </a>
            <a href="#!">
                <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </div>
            </a>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="dress-name">';
$title = $value->title;

if (strlen($title) <= 10) {
    $sub .= ucfirst($title);
} else {
    $y = substr($title, 0, 10) . '...';
    $sub .= ucfirst($y);
}
$sub .= '</h6>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h6>';
$title = $value->address;

if (strlen($title) <= 25) {
    $sub .= ucfirst($title);
} else {
    $y = substr($title, 0, 100) . '...';
    $sub .= ucfirst($y);
}
$sub .= '</h6>
            </div>
        </div>
    </div>
</div>';


				}
			}
		} else {
			$sub .= '<center><img  src="'.base_url("assets/images/no_product.png").'"></center>';
		}
		echo $sub;

	}

	public function getshop($data = " ")
	{

		$category_id = $this->input->post('category_id');
		// echo $this->db->last_query();
		$sub = "";

		$shop = get_category_all_store($category_id);
		if (!empty($shop)) {
			foreach ($shop as $value) {
				//print_r($subcategory);die();

				$sub .= '
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4" id="post_' . $value->id . '">
					<a href="'.base_url("welcome/shopdetail/").'' . $value->id . '">
					<div class="card">
							<div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
							
									<img class="va-thumbnail" alt="Card image cap" src="'.base_url("uploads/shop/") . $value->shop_images . '">
								
							
							</div>
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<h6 class="dress-name">';
				$sub .= strlen($value->name) <= 20 ? ucfirst($value->name) : ucfirst(substr($value->name, 0, 20) . '...');
				$sub .= '</h6>
								</div>
								<div class="d-flex justify-content-between align-items-center">
									
										<h6><img style="max-width:25px;" src="'.base_url("assets/images/location .png").'" alt="location">';
				$sub .= strlen($value->Address) <= 20 ? ucfirst($value->Address) : ucfirst(substr($value->Address, 0, 20) . '...');
				$sub .= '</h6>
									
								</div>
							</div>
						</div>
						</a>
					</div>
				';



			}
		} else {
			$sub .= '<center><img  src="'.base_url("assets/images/no_product.png").'"></center>';
		}

		echo $sub;

	}


	public function getsearchshop($data = " ")
	{

		$location = $this->input->post('location');
		// echo $this->db->last_query();
		

		$shop = get_all_location_store($location);
	
		$shop_count= get_all_location_store_count($location);
		
		$sub = "";
		if (!empty($shop)) {
			foreach ($shop as $value) {
				$session_login_id = $this->session->userdata("id");
				$product_user_id = $value->user_id;
				if ($session_login_id !== $product_user_id) {

					$sub .= '
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4" id="post_' . $value->id . '">
						<div class="card">
							<div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
								<a href="'.base_url("welcome/shopdetail/").'' . $value->id . '">
									<img class="va-thumbnail" alt="Card image cap" src="'.base_url("uploads/shop/").''. $value->shop_images . '">
								</a>
								<a href="#!">
									<div class="hover-overlay">
										<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
									</div>
								</a>
							</div>
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<h6 class="dress-name">';
				$sub .= strlen($value->name) <= 20 ? ucfirst($value->name) : ucfirst(substr($value->name, 0, 20) . '...');
				$sub .= '</h6>
								</div>
								<div class="d-flex justify-content-between align-items-center">
									<a href="" class="text-reset">
										<h6>';
				$sub .= strlen($value->Address) <= 20 ? ucfirst($value->Address) : ucfirst(substr($value->Address, 0, 20) . '...');
				$sub .= '</h6>
									</a>
								</div>
							</div>
						</div>
					</div>
				';

			}
		}
	} else {
			$sub .= '<center><img  src="'.base_url("assets/images/no_product.png").'"></center>';
		}
		
		echo $sub;

	}
	public function home1()
	{
		$session_id = $this->session->userdata('id');

		$user_detail = $this->user->loginuser($session_id);

		if (!empty($user_detail)) {
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/Home', ['user' => $user_detail]);
			$this->load->view('front/footer');
		} else {
			$this->load->view('front/header');
			$this->load->view('front/home1');
			$this->load->view('front/footer');
		}
	}

	public function home2()
	{
		$session_id = $this->session->userdata('id');

		$user_detail = $this->user->loginuser($session_id);

		if (!empty($user_detail)) {
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/home2', ['user' => $user_detail]);
			$this->load->view('front/footer');
		} else {
			$this->load->view('front/header');
			$this->load->view('front/home2');
			$this->load->view('front/footer');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('phone','mobile','required|min_length[10]|max_length[10]',
			array(
				'required' => 'The %s field is required.',
				'min_length' => 'The %s must be at  least <br> 10  characters long.',
				'max_length' => 'The %s must not exceed <br> 10  characters.',
				
			)
		);
		
		$this->form_validation->set_rules('password','password','required|min_length[6]',
			array(
				'required' => 'The %s field is required.',
				'min_length' => 'The %s must be <br> at least  6 characters long.'
			)
		);

		$this->form_validation->set_error_delimiters('<span class="validate-has-error">', '</span>');

		if ($this->form_validation->run()) {
			$phone = $this->input->post("phone");
			$password = md5($this->input->post("password"));
			if (is_user_exists($phone)) {
				$data["email"] = $this->input->post("email");
				$data["password"] = md5($this->input->post("password"));
				$udata = $this->db->get_where("users", ["phone" => $phone])->row();

				$otp = $udata->OTP;
				if ($password == $udata->password) {

					if ($udata->otp_verify == 0) {

						$size = 4;
						$alpha_key = '';
						$keys = range('0', '9');
						for ($i = 0; $i < 4; $i++) {
							$alpha_key .= $keys[array_rand($keys)];
						}


						$randCode = $alpha_key;
						/*$j=1;
															if($j == 1){*/

						$numberss = "91" . $phone; // A single number or a comma-seperated list of numbers
						$messages =  "Your verification otp for CelNow is $randCode";

						$apiKey = urlencode('NWE1MTUzNGE3NjU4NDczNTMxNzk2ODMwMzQ0ODczNGY=');

						$numbers = array($numberss);
						$sender = urlencode('CELNOW');
						$message = rawurlencode($messages);

						$numbers = implode(',', $numbers);

						// Prepare data for POST request
						$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

						// Send the POST request with cURL
						$ch = curl_init('https://api.textlocal.in/send/');
						curl_setopt($ch, CURLOPT_POST, true);
						curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						$response = curl_exec($ch);
						//print_r($response);

						curl_close($ch);

						$userData['phone'] = $phone;
						$userData['OTP'] = $randCode;

						$update = $this->user->update($userData, $udata->user_id);
						$this->load->view('front/header', ['success' => true]);
						$this->load->view('front/otp', ['phone' => $phone, 'otp' => $randCode]);
						$this->load->view('front/footer');

					} else {

						$length = 50;
						$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
						$count = mb_strlen($chars);

						for ($i = 0, $result = ''; $i < $length; $i++) {
							$index = rand(0, $count - 1);
							$result .= mb_substr($chars, $index, 1);
						}
						$data = array(
							'social_id_token' => $result
						);
						$this->db->where('phone', $udata->phone);
						$this->db->update('users', $data);
						$this->session->set_userdata('id', $udata->user_id);
						return redirect('welcome');
					}
				} else {
					$this->session->set_flashdata('Login_failed', 'Invalid password');
					$this->session->set_flashdata('msg_class', 'alert-danger');

					$this->load->view('front/header', ['success' => true]);
					$this->load->view('front/login', ['success' => true]);
					$this->load->view('front/footer');
				}

			} else {
				$this->session->set_flashdata('Login_failed', 'The phone number is not registered');
				$this->session->set_flashdata('msg_class', 'alert-danger');

				$this->load->view('front/header', ['success' => true]);
				$this->load->view('front/login', ['success' => true]);
				$this->load->view('front/footer');
			}
		} else {
			$this->load->view('front/header');
			$this->load->view('front/login');
			$this->load->view('front/footer');
		}



	}

	public function logout()
	{
		$u_rec_id = $this->session->userdata('id');

		$data = array(
			'social_id_token' => ''
		);
		$this->db->where('user_id', $u_rec_id);
		$this->db->update('users', $data);


		$id = $this->session->unset_userdata('id');
		session_destroy();

		$this->session->set_flashdata('logut_success', 'You are succesfully loged out');
		return redirect('welcome');
	}
	public function signup()
	{


		$this->form_validation->set_rules('email','email','required|valid_email|is_unique[users.email]',
			array(
				'required' => 'The %s field is required.',
				'valid_email' => 'Please enter a valid %s.',
				'is_unique' => 'The %s already exists.'
			)
		);
		
		$this->form_validation->set_rules('name','name','required',
			array(
				'required' => 'The %s field is required.'
			)
		);
		
		$this->form_validation->set_rules('phone','mobile','required|min_length[10]|max_length[10]|is_unique[users.phone]',
			array(
				'required' => 'The %s field is required.',
				'min_length' => 'The %s must be at <br> least  10  characters long.',
				'max_length' => 'The %s must not <br> exceed  10  characters.',
				'is_unique' => 'The %s already exists.'
			)
		);
		
		$this->form_validation->set_rules('password','password','required|min_length[6]',
			array(
				'required' => 'The %s field is required.',
				'min_length' => 'The %s must be <br> at least  6 characters long.'
			)
		);
		
		$this->form_validation->set_rules('confirmpassword','confirm password','required|matches[password]',
			array(
				'required' => 'The %s field <br>  is required.',
				'matches' => 'The %s does <br> not  match the Password.'
			)
		);
		$this->form_validation->set_error_delimiters('<span class="validate-has-error">', '</span>');
		if ($this->form_validation->run('login') == FALSE) {
			$this->load->view('front/header');
			$this->load->view('front/signup');
			$this->load->view('front/footer');
		} else {

			$name = $this->input->post('name');

			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$confirm_password = $this->input->post('confirm_password');
			$phone = $this->input->post('phone');
			$length = 50;
			$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			$count = mb_strlen($chars);

			for ($i = 0, $result = ''; $i < $length; $i++) {
				$index = rand(0, $count - 1);
				$result .= mb_substr($chars, $index, 1);
			}

			$size = 4;
			$alpha_key = '';
			$keys = range('0', '9');
			for ($i = 0; $i < 4; $i++) {
				$alpha_key .= $keys[array_rand($keys)];
			}
			$randCode = $alpha_key;
			$numberss = "91" . $phone; // A single number or a comma-seperated list of numbers
			$messages =  "Your verification otp for CelNow is $randCode";

			$apiKey = urlencode('NWE1MTUzNGE3NjU4NDczNTMxNzk2ODMwMzQ0ODczNGY=');

			$numbers = array($numberss);
			$sender = urlencode('CELNOW');
			$message = rawurlencode($messages);

			$numbers = implode(',', $numbers);

			$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

		
			$ch = curl_init('https://api.textlocal.in/send/');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			//print_r($response);

			curl_close($ch);

			$post_data = array('name' => $name, 'email' => $email, 'password' => md5($password), 'phone' => $phone, 'OTP' => $randCode, 'login_type' => 'normal', 'social_id_token' => $result);
			$this->db->insert('users', $post_data);


			$this->load->view('front/header', ['success' => true]);
			$this->load->view('front/otp', ['phone' => $phone, 'otp' => $randCode]);
			$this->load->view('front/footer');
			// return redirect('welcome/otp',['phone'=>$phone]);
		}

	}
	public function forgotpassword()
	{

		$this->form_validation->set_rules('phone', ' phone', 'required|min_length[10]|max_length[10]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if ($this->form_validation->run()) {
			$phone = $this->input->post('phone');
			$udata = $this->db->get_where("users", ["phone" => $phone])->row();
			if (is_user_exists($phone)) {
				$size = 4;
			$alpha_key = '';
			$keys = range('0', '9');
			for ($i = 0; $i < 4; $i++) {
				$alpha_key .= $keys[array_rand($keys)];
			}
			$randCode = $alpha_key;
			$numberss = "91" . $phone; // A single number or a comma-seperated list of numbers
			$messages =  "Your verification otp for CelNow is $randCode";

			$apiKey = urlencode('NWE1MTUzNGE3NjU4NDczNTMxNzk2ODMwMzQ0ODczNGY=');

			$numbers = array($numberss);
			$sender = urlencode('CELNOW');
			$message = rawurlencode($messages);

			$numbers = implode(',', $numbers);

			$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);


			$ch = curl_init('https://api.textlocal.in/send/');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
		
			curl_close($ch);


				$userData['phone'] = $phone;
				$userData['OTP'] = $randCode;

				$update = $this->user->update($userData, $udata->user_id);
				$this->load->view('front/header', ['success' => true]);
				$this->load->view('front/changepassword', ['success' => true, 'otp' => $randCode]);
				$this->load->view('front/footer');
			} else {
				$this->session->set_flashdata('Login_failed', 'The phone number is not registered');
				$this->session->set_flashdata('msg_class', 'alert-danger');

				$this->load->view('front/header', ['success' => true]);
				$this->load->view('front/forgotpassword', ['success' => true]);
				$this->load->view('front/footer');
			}


		} else {
			$this->load->view('front/header');
			$this->load->view('front/forgotpassword');
			$this->load->view('front/footer');
		}

	}

	public function resendotp()
	{

		$this->form_validation->set_rules('phone', ' phone', 'required|min_length[10]|max_length[10]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if ($this->form_validation->run()) {
			$phone = $this->input->post('phone');
			$udata = $this->db->get_where("users", ["phone" => $phone])->row();
			if (is_user_exists($phone)) {
				$size = 4;
				$alpha_key = '';
				$keys = range('0', '9');
				for ($i = 0; $i < 4; $i++) {
					$alpha_key .= $keys[array_rand($keys)];
				}
				$randCode = $alpha_key;
				$numberss = "91" . $phone; // A single number or a comma-seperated list of numbers
				$messages =  "Your verification otp for CelNow is $randCode";

				$apiKey = urlencode('NWE1MTUzNGE3NjU4NDczNTMxNzk2ODMwMzQ0ODczNGY=');

				$numbers = array($numberss);
				$sender = urlencode('CELNOW');
				$message = rawurlencode($messages);

				$numbers = implode(',', $numbers);

				$numbers = implode(',', $numbers);

				$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);


				$ch = curl_init('https://api.textlocal.in/send/');
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$response = curl_exec($ch);
				//print_r($response);

				curl_close($ch);

				$userData['phone'] = $phone;
				$userData['OTP'] = $randCode;

				$update = $this->user->update($userData, $udata->user_id);
				return redirect('welcome/forgotpasswordotp');
			} else {
				$this->session->set_flashdata('Login_failed', 'The phone number is not registered');
				$this->session->set_flashdata('msg_class', 'alert-danger');

				$this->load->view('front/header', ['success' => true]);
				$this->load->view('front/forgotpassword', ['success' => true]);
				$this->load->view('front/footer');
			}


		} else {
			$this->load->view('front/header');
			$this->load->view('front/forgotpassword');
			$this->load->view('front/footer');
		}

	}

	public function forgotpasswordotp()
	{
		$this->form_validation->set_rules('otp', 'otp', 'required');
		$this->form_validation->set_rules('password', ' password', 'required|min_length[6]');
		$this->form_validation->set_rules('confirmpassword', ' confirm password', 'required|matches[password]');
		$this->form_validation->set_error_delimiters('<span class="validate-has-error">', '</span>');
		if ($this->form_validation->run()) {
			$otp = $this->input->post('otp');
			$password = $this->input->post('password');
			$confirm_password = $this->input->post('confirm_password');
			$login_id = $this->user->validateotp($otp);

			if ($login_id) {

				$this->db->where('phone', $login_id['phone']);
				$data = array(
					'password' => md5($password),
				);
				$this->db->update('users', $data);
				$this->session->set_flashdata('password_success', 'Forgot password successfully');
					$this->session->set_flashdata('msg_class', 'alert-success');

					$this->load->view('front/header', ['success' => true]);
					$this->load->view('front/changepassword');
					$this->load->view('front/footer');
			} else {
				$this->session->set_flashdata('OTP_failed', 'Invalid OTP');
				$this->session->set_flashdata('msg_class', 'alert-danger');

				$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
				$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
				$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
				$this->output->set_header('Pragma: no-cache');
				$this->load->view('front/header', ['success' => true]);
				$this->load->view('front/changepassword');
				$this->load->view('front/footer');
			}
		} else {
			$this->load->view('front/header');
			$this->load->view('front/changepassword');
			$this->load->view('front/footer');
		}

	}

	public function changepassword()
	{

		$session_id = $this->session->userdata('id');

		if ($session_id) {
			//$myproduct = $this->product_model->myproduct($session_id);

			$user_detail = $this->user->loginuser($session_id);
			$this->form_validation->set_rules('oldpassword', 'old password', 'required');
			$this->form_validation->set_rules('password', ' password', 'required|min_length[6]');
			$this->form_validation->set_rules('confirmpassword', ' confirm password', 'required|matches[password]');
			$this->form_validation->set_error_delimiters('<span class="validate-has-error">', '</span>');
			if ($this->form_validation->run()) {
				$oldpass = md5($this->input->post('oldpassword'));
				$password = $this->input->post('password');
				$confirm_password = $this->input->post('confirm_password');
				$login_id = $this->user->validatepass($oldpass);

				if ($login_id) {

					$this->db->where('phone', $login_id['phone']);
					$data = array(
						'password' => md5($password),
					);
					$this->db->update('users', $data);

					$this->session->set_flashdata('password_success', 'Password change successfully');
					$this->session->set_flashdata('msg_class', 'alert-success');

					$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
					$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
					$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
					$this->output->set_header('Pragma: no-cache');
					$this->load->view('front/header', ['success' => true, 'user' => $user_detail]);
					$this->load->view('front/change_password');
					$this->load->view('front/footer');
				} else {
					$this->session->set_flashdata('password_error', 'Invalid Password');
					$this->session->set_flashdata('msg_class', 'alert-danger');

					$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
					$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
					$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
					$this->output->set_header('Pragma: no-cache');
					$this->load->view('front/header', ['success' => true, 'user' => $user_detail]);
					$this->load->view('front/change_password');
					$this->load->view('front/footer');
				}
			} else {
				$this->load->view('front/header', ['success' => true, 'user' => $user_detail]);
				$this->load->view('front/change_password');
				$this->load->view('front/footer');
			}
		} else {
			$this->load->view('front/header');
			$this->load->view('front/change_password');
			$this->load->view('front/footer');
		}

	}

	public function otp()
	{

		$this->form_validation->set_rules('otp', 'otp', 'required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		if ($this->form_validation->run()) {

			$verify_otp = $this->input->post('otp');

			$login_id = $this->user->validateotp($verify_otp);


			if ($login_id) {
				$log = $login_id["user_id"];
				$this->session->set_userdata('id', $log);
				$this->db->update("users", ["otp_verify" => 1], ["phone" => $login_id['phone']]);
				return redirect('welcome');
			} else {
				$this->session->set_flashdata('OTP_failed', 'Invalid OTP');
				$this->session->set_flashdata('msg_class', 'alert-danger');

				$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
				$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
				$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
				$this->output->set_header('Pragma: no-cache');
				$this->load->view('front/header', ['success' => true]);
				$this->load->view('front/otp');
				$this->load->view('front/footer');
			}
		} else {
			$this->load->view('front/header');
			$this->load->view('front/otp');
			$this->load->view('front/footer');

		}

	}

	public function searchproduct()
	{

		$location = $this->input->post('location');

		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');


		$anything = $this->input->post('anything');
		$this->session->unset_userdata('location');
		$this->session->set_userdata('location', $location);
		$session_id = $this->session->userdata('id');

		$user_detail = $this->user->loginuser($session_id);
		if (!empty($user_detail)) {
			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/newhome', ['anything' => $anything, 'location' => $location, 'user' => $user_detail]);
			$this->load->view('front/footer');

			/*  $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			  $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			  $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			  $this->output->set_header('Pragma: no-cache');
		  */
			/*  $pro_id="";

			   $pro_id = $this->uri->segment(3); 

		  $this->load->view('front/header',['location'=>$location,'pro_id'=>$pro_id]);
			 $this->load->view('front/newhome',['anything'=>$anything]);
			 $this->load->view('front/footer');
		 */

			/* $this->load->view('front/header',['location'=>$location,'pro_id'=>$pro_id]);
			 $this->load->view('front/newhome',['anything'=>$anything,'pro_id'=>$pro_id]);
			 $this->load->view('front/footer');*/
		} else {
			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header');
			$this->load->view('front/newhome', ['anything' => $anything, 'location' => $location]);
			$this->load->view('front/footer');
		}

	}


	public function searchshop()
	{

		

		$anything = $this->input->post('anything');

		$session_id = $this->session->userdata('id');

		$user_detail = $this->user->loginuser($session_id);
		if (!empty($user_detail)) {
			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/shopsearch', ['anything' => $anything,  'user' => $user_detail]);
			$this->load->view('front/footer');

			/*  $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			  $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			  $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			  $this->output->set_header('Pragma: no-cache');
		  */
			/*  $pro_id="";

			   $pro_id = $this->uri->segment(3); 

		  $this->load->view('front/header',['location'=>$location,'pro_id'=>$pro_id]);
			 $this->load->view('front/newhome',['anything'=>$anything]);
			 $this->load->view('front/footer');
		 */

			/* $this->load->view('front/header',['location'=>$location,'pro_id'=>$pro_id]);
			 $this->load->view('front/newhome',['anything'=>$anything,'pro_id'=>$pro_id]);
			 $this->load->view('front/footer');*/
		} else {
			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header');
			$this->load->view('front/shopsearch', ['anything' => $anything]);
			$this->load->view('front/footer');
		}

	}

	public function search()
	{

		$term = $this->input->get('term');

		//   $this->db->like('category', $term);

		//   $data = $this->db->get("category")->result();

		$data = get_all_search_product($term);
		// $data    = $this->product_model->get_search($term);	

		echo json_encode($data);

	}
	public function fillter_product()
	{
		$cateory = $this->uri->segment(3);
		$session_id = $this->session->userdata('id');

		
		if ($cateory == 1) {
			//$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['select_Type'] = $this->product_filter_model->fetch_filter_type('Select_Type',$cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('brand', $cateory);

		} else if ($cateory == 2) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			//$data['Brand'] = $this->product_filter_model->fetch_filter_type('Model',$cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('Education_type', $cateory);
		} else if ($cateory == 3) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('Job_type', $cateory);
		} else if ($cateory == 4) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('Job_type', $cateory);
		}
		else if ($cateory == 5) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('filter', $cateory);
		}
		else if ($cateory == 6) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('filter', $cateory);
		}
		else if ($cateory == 7) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('filter', $cateory);
		}
		else if ($cateory == 8) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('brand', $cateory);
		}


		if ($session_id) {
			//$myproduct = $this->product_model->myproduct($session_id);

			$user_detail = $this->user->loginuser($session_id);

			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/fillter', $data, ['user' => $user_detail]);
			$this->load->view('front/footer');

		} else {
			$this->load->view('front/header');
			$this->load->view('front/fillter', $data);
			$this->load->view('front/footer');
		}
	

	}
	public function fetch_data()
	{
		sleep(2);
		$minimum_price = $this->input->post('minimum_price');
		$maximum_price = $this->input->post('maximum_price');
		$brand = $this->input->post('brand');
		$sub_category = $this->input->post('sub_category');
		$rent_filter = $this->input->post('rent_filter');
		$type = $this->input->post('type');
		$select_type = $this->input->post('select_type');
		$search = $this->input->post('search');
		$category = $this->session->userdata('filter_id');
		$donate = $this->input->post('donate');
		$cat_id = $this->input->post('cat_id');

		$config = array();
		$config["base_url"] = "";
		$config["total_rows"] = $this->product_filter_model->count_all($minimum_price, $maximum_price, $brand, $select_type,$sub_category, $category, $type,$rent_filter,$donate,$cat_id);
		$config["per_page"] = 15;
		$config['uri_segment'] = 3;
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_tag_open"] = '<li>';
		$config["first_tag_close"] = '</li>';
		$config["last_tag_open"] = '<li>';
		$config["last_tag_close"] = '</li>';
		$config['next_link'] = '&gt;';
		$config["next_tag_open"] = '<li>';
		$config["next_tag_close"] = '</li>';
		$config["prev_link"] = "&lt;";
		$config["prev_tag_open"] = "<li>";
		$config["prev_tag_close"] = "</li>";
		$config["cur_tag_open"] = "<li class='active'><a  href='#'>";
		$config["cur_tag_close"] = "</a></li>";
		$config["num_tag_open"] = "<li class=hello>";
		$config["num_tag_close"] = "</li>";
		$config["num_links"] = 4;
		$this->pagination->initialize($config);
		$page = $this->uri->segment('3');
		$start = ($page - 1) * $config["per_page"];

		$output = array(
			'Status' => 200,
			'pagination_link' => $this->pagination->create_links(),
			'product_list' => $this->product_filter_model->fetch_data($config["per_page"], $start, $minimum_price, $maximum_price, $brand,  $select_type,$sub_category, $category, $type,$search,$rent_filter,$donate,$cat_id)
		);
		echo json_encode($output);
	}

	public function donatefetch_data()
	{
		sleep(2);
		$minimum_price = $this->input->post('minimum_price');
		$maximum_price = $this->input->post('maximum_price');
		$brand = $this->input->post('brand');
		$sub_category = $this->input->post('sub_category');
		$type = $this->input->post('type');
		$select_type = $this->input->post('select_type');
		$search = $this->input->post('search');
		$category = $this->session->userdata('filter_id');

		$config = array();
		$config["base_url"] = "";
		$config["total_rows"] = $this->product_filter_model->donatecount_all($minimum_price, $maximum_price, $brand, $select_type,$sub_category, $category, $type);
		$config["per_page"] = 15;
		$config['uri_segment'] = 3;
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_tag_open"] = '<li>';
		$config["first_tag_close"] = '</li>';
		$config["last_tag_open"] = '<li>';
		$config["last_tag_close"] = '</li>';
		$config['next_link'] = '&gt;';
		$config["next_tag_open"] = '<li>';
		$config["next_tag_close"] = '</li>';
		$config["prev_link"] = "&lt;";
		$config["prev_tag_open"] = "<li>";
		$config["prev_tag_close"] = "</li>";
		$config["cur_tag_open"] = "<li class='active'><a  href='#'>";
		$config["cur_tag_close"] = "</a></li>";
		$config["num_tag_open"] = "<li class=hello>";
		$config["num_tag_close"] = "</li>";
		$config["num_links"] = 4;
		$this->pagination->initialize($config);
		$page = $this->uri->segment('3');
		$start = ($page - 1) * $config["per_page"];

		$output = array(
			'pagination_link' => $this->pagination->create_links(),
			'product_list' => $this->product_filter_model->donatefetch_data($config["per_page"], $start, $minimum_price, $maximum_price, $brand, $select_type,$sub_category, $category, $type,$search)
		);
		echo json_encode($output);
	}

	public function donatefillter_product()
	{
		$cateory = $this->uri->segment(3);
		$session_id = $this->session->userdata('id');

		
		if ($cateory == 1) {
			//$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['select_Type'] = $this->product_filter_model->fetch_filter_type('Select_Type',$cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('brand', $cateory);

		} else if ($cateory == 2) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			//$data['Brand'] = $this->product_filter_model->fetch_filter_type('Model',$cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('Education_type', $cateory);
		} else if ($cateory == 3) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('Job_type', $cateory);
		} else if ($cateory == 4) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('Job_type', $cateory);
		}
		else if ($cateory == 5) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('filter', $cateory);
		}
		else if ($cateory == 6) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('filter', $cateory);
		}
		else if ($cateory == 7) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('filter', $cateory);
		}
		else if ($cateory == 8) {
			$data['sub_category'] = $this->product_filter_model->fetch_filter_type('subcategory_id', $cateory);
			$data['brand'] = $this->product_filter_model->fetch_filter_type('brand', $cateory);
		}
	 


		if ($session_id) {
			//$myproduct = $this->product_model->myproduct($session_id);

			$user_detail = $this->user->loginuser($session_id);

			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/donatefilter', $data, ['user' => $user_detail]);
			$this->load->view('front/footer');

		} else {
			$this->load->view('front/header');
			$this->load->view('front/donatefilter', $data);
			$this->load->view('front/footer');
		}
	

	}

	public function shop()
	{
		$session_id = $this->session->userdata('id');

		if ($session_id) {
			//$myproduct = $this->product_model->myproduct($session_id);

			$user_detail = $this->user->loginuser($session_id);

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/shop', ['user' => $user_detail]);
			$this->load->view('front/footer');

		} else {
			$this->load->view('front/header');
			$this->load->view('front/login');
			$this->load->view('front/footer');
		}


	}

	public function addshop()
	{

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$user_id = $this->input->post('user_id');
		$shop_category = $this->input->post('shop_category');
		$mobile = $this->input->post('mobile');
		$open_close_time = $this->input->post('open_close_time');
		$service_type = $this->input->post('service_type');
		$Address = $this->input->post('Address');
		$GST = $this->input->post('GST');
		$description = $this->input->post('description');

		

				$post_data = array('name' => $name, 'email' => $email, 'user_id' => $user_id, 'mobile' => $mobile, 'shop_category_id' => $shop_category, 'Address' => $Address, 'GST' => $GST, 'description' => $description, 'service_type' => $service_type, 'open_close_time' => $open_close_time,'created_at'=> date('Y-m-d H:i:s'));

				$this->db->insert('shop', $post_data);
				$id = $this->db->insert_id();

				$this->load->library('upload');

				
				
	
		  if (!empty($_FILES['shop_images']['name'])) { 
	
				$_FILES['file']['name']     = $_FILES['shop_images']['name'];
				$_FILES['file']['type']     = $_FILES['shop_images']['type'];
				$_FILES['file']['tmp_name'] = $_FILES['shop_images']['tmp_name'];
				$_FILES['file']['error']     = $_FILES['shop_images']['error'];
				$_FILES['file']['size']     = $_FILES['shop_images']['size'];
				
				
				$config['upload_path'] = './uploads/shop/';
				$config['allowed_types'] = '*';
				
				// Load and initialize upload library
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('file')){
					$image_data = $this->upload->data();
				$filename = $image_data['file_name'];
			 $userData['document'] = $filename;
			 $this->db->update("shop", ["document"=>$filename], "id=$id");
		}}

		if (!empty($_FILES['shop_banner']['name'])) { 
	
			$_FILES['file']['name']     = $_FILES['shop_banner']['name'];
			$_FILES['file']['type']     = $_FILES['shop_banner']['type'];
			$_FILES['file']['tmp_name'] = $_FILES['shop_banner']['tmp_name'];
			$_FILES['file']['error']     = $_FILES['shop_banner']['error'];
			$_FILES['file']['size']     = $_FILES['shop_banner']['size'];
			
			
			$config['upload_path'] = './uploads/shop/';
			$config['allowed_types'] = '*';
			
			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('file')){
				$image_data = $this->upload->data();
			$filename = $image_data['file_name'];
		 $userData['shop_images'] = $filename;
		 $this->db->update("shop", ["shop_images"=>$filename], "id=$id");
	}}





		

	if (!empty($_FILES['shop_img']['name'])) {
	          
		$filesCount = count($_FILES['shop_img']['name']);
		for($i = 0; $i < $filesCount; $i++){
			$_FILES['file']['name']     = $_FILES['shop_img']['name'][$i];
			$_FILES['file']['type']     = $_FILES['shop_img']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['shop_img']['tmp_name'][$i];
			$_FILES['file']['error']     = $_FILES['shop_img']['error'][$i];
			$_FILES['file']['size']     = $_FILES['shop_img']['size'][$i];
			
			
			$config['upload_path'] = './uploads/shop/';
			$config['allowed_types'] = '*';
			
			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('file')){
				// Uploaded file data
				$fileData = $this->upload->data();
				$uploadData[$i]['file_name'] = $fileData['file_name'];
				$uploadData[$i]['created'] = date("Y-m-d H:i:s");
				$product_image = array("shop_id"=>$id,"shop_image"=>$uploadData[$i]['file_name'] );
					  $this->db->insert('shop_image', $product_image);
					   $pimage=$uploadData[$i]['file_name'];
			}}}

				return redirect('welcome/shop');
		
	}

	public function editshop()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$user_id = $this->input->post('user_id');
		$shop_category = $this->input->post('shop_category');
		$mobile = $this->input->post('mobile');
		$Address = $this->input->post('Address');
		$GST = $this->input->post('GST');
		$open_close_time = $this->input->post('open_close_time');
		$service_type = $this->input->post('service_type');
		$description = $this->input->post('description');
		$id = $this->input->post('id');
		$pid=$this->input->post("pid");
				$post_data = array('name' => $name, 'email' => $email, 'user_id' => $user_id, 'mobile' => $mobile, 'shop_category_id' => $shop_category, 'Address' => $Address, 'GST' => $GST, 'description' => $description, 'service_type' => $service_type, 'open_close_time' => $open_close_time, 'admin_approval' => 0);


				$this->db->update("shop", $post_data, "id=$id");

		

		$this->load->library('upload');
		if (!empty($_FILES['shop_images']['name'])) {
			$config['upload_path'] = './uploads/shop/';
			// $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('shop_images')) {
			   
			}else{

				//---- Successfully upload than add member-----
				$image_data = $this->upload->data();
				$filename = $image_data['file_name'];


			 $userData['document'] = $filename;
			 $this->db->update("shop", ["document"=>$filename], "id=$id");
			}
		  }
		if (!empty($_FILES['backimg']['name'])) {
			$filesCount = count($_FILES['backimg']['name']);
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['file']['name']     = $_FILES['backimg']['name'][$i];
				$_FILES['file']['type']     = $_FILES['backimg']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['backimg']['tmp_name'][$i];
				$_FILES['file']['error']     = $_FILES['backimg']['error'][$i];
				$_FILES['file']['size']     = $_FILES['backimg']['size'][$i];
							  
							  
							  $config['upload_path'] = './uploads/shop/';
							  $config['allowed_types'] = '*';
							  $this->load->library('upload', $config);
							  $this->upload->initialize($config);
							  if($this->upload->do_upload('file')){
								  $fileData = $this->upload->data();
								  $uploadData[$i]['file_name'] = $fileData['file_name'];
								  $uploadData[$i]['created'] = date("Y-m-d H:i:s");
								  $shop_image = array("shop_id"=>$id,"shop_image"=>$uploadData[$i]['file_name'] );
										$this->db->insert('shop_image', $shop_image);
										 $pimage=$uploadData[$i]['file_name'];
							  }
						  }
					  }
	         return redirect('welcome/shop');
	}

		public function editverifiedshop()
		{
				
				$user_id = $this->input->post('user_id');
			
				$description = $this->input->post('description');
				$id = $this->input->post('id');
				$pid=$this->input->post("pid");
						$post_data = array( 'description' => $description);
		
		
						$this->db->update("shop", $post_data, "id=$id");
		
				
		
				$this->load->library('upload');
				
				if (!empty($_FILES['backimg']['name'])) {
					$filesCount = count($_FILES['backimg']['name']);
					for($i = 0; $i < $filesCount; $i++){
						$_FILES['file']['name']     = $_FILES['backimg']['name'][$i];
						$_FILES['file']['type']     = $_FILES['backimg']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['backimg']['tmp_name'][$i];
						$_FILES['file']['error']     = $_FILES['backimg']['error'][$i];
						$_FILES['file']['size']     = $_FILES['backimg']['size'][$i];
									  
									  
									  $config['upload_path'] = './uploads/shop/';
									  $config['allowed_types'] = '*';
									  $this->load->library('upload', $config);
									  $this->upload->initialize($config);
									  if($this->upload->do_upload('file')){
										  $fileData = $this->upload->data();
										  $uploadData[$i]['file_name'] = $fileData['file_name'];
										  $uploadData[$i]['created'] = date("Y-m-d H:i:s");
										  $shop_image = array("shop_id"=>$id,"shop_image"=>$uploadData[$i]['file_name'] );
												$this->db->insert('shop_image', $shop_image);
												 $pimage=$uploadData[$i]['file_name'];
									  }
								  }
							  }
			return redirect('welcome/shop');
		}
	public function buyerprofile()
	{
		$session_id = $this->session->userdata('id');

		if ($session_id) {
			//$myproduct = $this->product_model->myproduct($session_id);

			$user_detail = $this->user->loginuser($session_id);

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/buyerprofile', ['user' => $user_detail]);
			$this->load->view('front/footer');

		} else {

			return redirect('welcome');
		}


	}

	public function myprofile()
	{
		$session_id = $this->session->userdata('id');

		if ($session_id) {
			//$myproduct = $this->product_model->myproduct($session_id);

			$user_detail = $this->user->loginuser($session_id);

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/sellerprofile', ['user' => $user_detail]);
			$this->load->view('front/footer');

		} else {

			$this->load->view('front/header');
			$this->load->view('front/sellerprofile');
			$this->load->view('front/footer');
		}


	}

	public function viewsellerprofile()
	{
		$session_id = $this->session->userdata('id');

		if ($session_id) {
			//$myproduct = $this->product_model->myproduct($session_id);

			$user_detail = $this->user->loginuser($session_id);

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/viewsellerprofile', ['user' => $user_detail]);
			$this->load->view('front/footer');

		} else {

			$this->load->view('front/header');
			$this->load->view('front/login');
			$this->load->view('front/footer');
		}


	}

	public function reportproduct()
	{

		$reportData = array();
		$reportData['product_id'] = $this->input->post('product_id');
	
		$reportData['category_id'] = $this->input->post('category_id');
		$reportData['reported_by'] = $this->input->post('reported_by');
		$reportData['report'] = $this->input->post('report');
		$reportData['name'] = $this->input->post('name');
		$reportData['mobile'] = $this->input->post('mobile');
		$reportData['email'] = $this->input->post('email');

		$insert = $this->user->report($reportData);
		//$userData['modified'] = date("Y-m-d H:i:s");

		//$insert = $this->user->removeintrest($userData);

		$this->session->set_flashdata('msg', 'Report sent to admin successfully');
		$this->session->set_flashdata('msg_class', 'alert-success');
		$cat_id = $this->input->post('category_id');
		$pro_id = $this->input->post('product_id');
		$sub_id = $this->input->post('subcategory_id');
		return redirect('welcome/productdetail/' . $cat_id . '/' . $pro_id.'/'.$sub_id);

	}

	public function setwishlist()
	{

		$data["product_id"] = $this->input->post("product_id");
		$data["category_id"] = $this->input->post("category_id");
		$data["user_id"] = $this->input->post("user_id");

		$this->user->savewishlist($data);
		echo "success";
	}

	public function setshoplist()
	{

		$cat_id = $this->input->post('category_id');
		$subcat_id = $this->input->post('subcategory_id');
		$pro_id = $this->input->post('product_id');
		$user_id = $this->input->post("user_id");
	    $seller_id = $this->input->post("seller_id");
	    $shop_id = $this->input->post("shop_id");

        $redirectUrl = 'welcome/verified_pay/' .$pro_id.'/'.$cat_id.'/'.$subcat_id.'/'.$user_id.'/'.$seller_id.'/'.$shop_id;
		return redirect($redirectUrl);
		return redirect('welcome/productdetail/' . $cat_id . '/' . $pro_id . '/' . $subcat_id);
	}

	public function fav_list()
	{
		$session_id = $this->session->userdata('id');
        
		$user_detail = $this->user->loginuser($session_id);
		if (!empty($user_detail)) {
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/myfavorites', ['user' => $user_detail]);
			$this->load->view('front/footer');
		} else {
			$this->load->view('front/header');
			$this->load->view('front/myfavorites');
			$this->load->view('front/footer');
		}
	}

	public function updatesellerreg()
	{

		$name = $this->input->post('name');
		$Address = $this->input->post('Address');
		$user_id = $this->input->post('user_id');

		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$aboutus = $this->input->post('aboutus');
		$seller = check_seller_profile($user_id);


		$userData['name'] = $name;
		$userData['Address'] = $Address;
		//$userData['user_id'] = $user_id;

		$userData['phone'] = $phone;
		$userData['aboutus'] = $aboutus;
		$userData['email'] = $email;

		$this->user->update($userData, $user_id);

		$userData['modified'] = date("Y-m-d H:i:s");


		$this->session->set_flashdata('regester_success', 'Seller profile Updated successfully');

		return redirect('welcome/buyerprofile');

	}

	public function postproduct()
	{
		$session_id = $this->session->userdata('id');
		if ($session_id) {
			//$myproduct = $this->product_model->myproduct($session_id);

			$user_detail = $this->user->loginuser($session_id);

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/postproduct', ['user' => $user_detail]);
			$this->load->view('front/footer');

		} else {

			$this->load->view('front/header');
			$this->load->view('front/login');
			$this->load->view('front/footer');
		}

	}


	public function editproduct_view($category_id, $product_id)
	{
		$session_id = $this->session->userdata('id');
		if ($session_id) {
			//$myproduct = $this->product_model->myproduct($session_id);

			$user_detail = $this->user->loginuser($session_id);

			$data_get = $this->product_model->edit_product_get($category_id, $product_id);

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/editproduct', ['user' => $user_detail, "product_data" => $data_get]);
			$this->load->view('front/footer');

		} else {

			return redirect('welcome');
		}

	}



	public function subcategorydropdown($id)
	{
		$result = $this->db->where("category", $id)->get("subcategory")->result();
		//$data = $this->admin_model->get_record_where('subcategory',$id);

		echo json_encode($result);
	}

	public function subproduct_typedropdown($id)
	{
		$result = $this->db->where("category_id", $id)->get("product_type")->result();
		//$data = $this->admin_model->get_record_where('subcategory',$id);

		echo json_encode($result);
	}

	public function uploadprofileimg()
	{

		$user_id = $this->input->post('user_id');

		if (!empty($_FILES['profile_img']['name'])) {
			$config['upload_path'] = './uploads/profile/';
			// $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('profile_img')) {

			} else {

				//---- Successfully upload than add member-----
				$image_data = $this->upload->data();
				$filename = $image_data['file_name'];

				$this->db->update("users", ["profile_img" => $filename], "user_id=$user_id");

				return redirect('welcome/buyerprofile');
			}
		}
	}

	public function uploadshopbanner()
{
    $user_id = $this->input->post('user_id');
  
    
    if (!empty($_FILES['profile_img']['name'])) {
        $config['upload_path'] = './uploads/shop/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('profile_img')) {
            // Handle upload error if needed
        } else {
            // Successfully upload new image
            $image_data = $this->upload->data();
            $filename = $image_data['file_name'];

			$shop = get_id_by_shop($user_id);
                $old_image_path = './uploads/shop/' . $shop->shop_images;
                if (file_exists($old_image_path)) {
                    unlink($old_image_path);
                } 
            $this->db->update("shop", ["shop_images" => $filename], "user_id=$user_id");
            return redirect('welcome/shop');
        }
    }
}



	public function termscondition()
	{

		$session_id = $this->session->userdata('id');

		if ($session_id) {
			$user_detail = $this->user->loginuser($session_id);
			$termscondition = $this->user->gettermscondition();

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');

			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/termscondition', ['termscondition' => $termscondition]);
			$this->load->view('front/footer');


		} else {
			$termscondition = $this->user->gettermscondition();
			$this->load->view('front/header');
			$this->load->view('front/termscondition', ['termscondition' => $termscondition]);
			$this->load->view('front/footer');
		}
	}


	public function help_support() 
	{

		$session_id = $this->session->userdata('id');

		if ($session_id) {
			$user_detail = $this->user->loginuser($session_id);
			$gethelp_support = $this->user->gethelp_support();

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');

			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/help_support', ['help_support' => $gethelp_support]);
			$this->load->view('front/footer');


		} else {
			$gethelp_support = $this->user->gethelp_support();
			$this->load->view('front/header');
			$this->load->view('front/help_support', ['help_support' => $gethelp_support]);
			$this->load->view('front/footer');
		}
	}

	public function FAQs() 
	{

		$session_id = $this->session->userdata('id');

		if ($session_id) {
			$user_detail = $this->user->loginuser($session_id);
			$FAQs = $this->user->getFAQs();

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');

			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/FAQs', ['FAQs' => $FAQs]);
			$this->load->view('front/footer');


		} else {
			$FAQs = $this->user->getFAQs();
			$this->load->view('front/header');
			$this->load->view('front/FAQs', ['FAQs' => $FAQs]);
			$this->load->view('front/footer');
		}
	}

	public function savecontact()
	{



		$userData['name'] = $this->input->post('name');
		$userData['user_id'] = $this->input->post('user_id');
		$userData['description'] = $this->input->post('description');
		$userData['email'] = $this->input->post('email');
		$userData['mobile'] = $this->input->post('mobile');

		$insert = $this->user->contactusinsert($userData);


		$this->session->set_flashdata('msg', 'Request Sent Successfully');
		$this->session->set_flashdata('msg_class', 'alert-success');

		return redirect('welcome');

	}

	public function aboutus()
	{

		$session_id = $this->session->userdata('id');

		if ($session_id) {
			$user_detail = $this->user->loginuser($session_id);

			$aboutus = $this->user->getAboutus();

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/aboutus', ['aboutus' => $aboutus]);
			$this->load->view('front/footer');
		} else {
			$aboutus = $this->user->getAboutus();
			$this->load->view('front/header');
			$this->load->view('front/aboutus', ['aboutus' => $aboutus]);
			$this->load->view('front/footer');
		}


	}

	public function verify_content()
	{

		$session_id = $this->session->userdata('id');

		if ($session_id) {
			$user_detail = $this->user->loginuser($session_id);

			

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/verify_content');
			$this->load->view('front/footer');
		} else {
			
			$this->load->view('front/header');
			$this->load->view('front/verify_content');
			$this->load->view('front/footer');
		}


	}
	public function privacypolicy()
	{


		$session_id = $this->session->userdata('id');

		if ($session_id) {
			$user_detail = $this->user->loginuser($session_id);
			$privacy = $this->user->getprivacypolicy();

			//   $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			// $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			// $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			// $this->output->set_header('Pragma: no-cache');         
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/privacypolicy', ['privacy' => $privacy]);
			$this->load->view('front/footer');
		} else {
			$privacy = $this->user->getprivacypolicy();
			$this->load->view('front/header');
			$this->load->view('front/privacypolicy', ['privacy' => $privacy]);
			$this->load->view('front/footer');
		}

	}

	public function productdetail()
	{

		$id = $this->uri->segment(4);
		$cateory = $this->uri->segment(3);
		$subcategory_id = $this->uri->segment(5);

		if ($cateory == 1) {
			$Categories_all_product = get_all_category_reusable_parts($id);
			$Category_product = $this->db->query("SELECT * FROM category_reusable_parts  WHERE pay_type!=3 And subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();


		} else if ($cateory == 2) {
			$Categories_all_product = get_all_category_tuitions($id);
			$Category_product = $this->db->query("SELECT * FROM category_tuitions  WHERE pay_type!=3 And subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();


		} else if ($cateory == 3) {
			$Categories_all_product = get_all_category_job($id);
			$Category_product = $this->db->query("SELECT * FROM category_job  WHERE pay_type!=3 And subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();


		} else if ($cateory == 4) {
			$Categories_all_product = get_all_category_internships($id);
			$Category_product = $this->db->query("SELECT * FROM category_internships  WHERE pay_type!=3 And subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();


		}
	 else if ($cateory == 5) {
		$Categories_all_product = get_all_category_commericial($id);
		$Category_product = $this->db->query("SELECT * FROM category_commericial_places  WHERE pay_type!=3 And subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();


	}
    else if ($cateory == 6) {
	$Categories_all_product = get_all_category_residensial($id);
	$Category_product = $this->db->query("SELECT * FROM category_residential_places  WHERE pay_type!=3 And subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();


    } else if ($cateory == 7) {
	$Categories_all_product = get_all_category_land_plot($id);
	$Category_product = $this->db->query("SELECT * FROM category_land_plot  WHERE pay_type!=3 And subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();
    }


		//$product = $this->product_model->getproductall($id);


		$session_id = $this->session->userdata('id');

		if ($session_id) {
			//echo $this->db->last_query();
			$user_detail = $this->user->loginuser($session_id);
			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/verifyproductdetails', ['user' => $user_detail, 'categories_data' => $Categories_all_product, 'category_data' => $Category_product]);
			$this->load->view('front/footer');

		} else {

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header');
			$this->load->view('front/verifyproductdetails', ['categories_data' => $Categories_all_product, 'category_data' => $Category_product]);
			$this->load->view('front/footer');
		}
	}

	public function deleteshopimage($image_id=0, $product_id=0){
		if($image_id!=0){
		   $image=$this->db->get_where("shop_image", "id=$image_id")->row()->shop_image;
		   unlink("/uploads/shop/".$image);
		   $this->db->delete("shop_image", "id=$image_id");
		 
		}
	}
	public function myproductdetail()
	{

		$id = $this->uri->segment(4);
		$cateory = $this->uri->segment(3);
		$subcategory_id = $this->uri->segment(5);

		if ($cateory == 1) {
			$Categories_all_product = get_all_category_reusable_parts($id);
			$Category_product = $this->db->query("SELECT * FROM category_reusable_parts  WHERE subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();


		} else if ($cateory == 2) {
			$Categories_all_product = get_all_category_tuitions($id);
			$Category_product = $this->db->query("SELECT * FROM category_tuitions  WHERE subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();


		} else if ($cateory == 3) {
			$Categories_all_product = get_all_category_job($id);
			$Category_product = $this->db->query("SELECT * FROM category_job  WHERE subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();


		} else if ($cateory == 4) {
			$Categories_all_product = get_all_category_internships($id);
			$Category_product = $this->db->query("SELECT * FROM category_internships  WHERE subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();


		}
		else if ($cateory == 5) {
			$Categories_all_product = get_all_category_commericial($id);
			$Category_product = $this->db->query("SELECT * FROM category_commericial_places  WHERE pay_type!=3 And subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();
	
	
		}
		else if ($cateory == 6) {
		$Categories_all_product = get_all_category_residensial($id);
		$Category_product = $this->db->query("SELECT * FROM category_residential_places  WHERE pay_type!=3 And subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();
	
	
		} else if ($cateory == 7) {
		$Categories_all_product = get_all_category_land_plot($id);
		$Category_product = $this->db->query("SELECT * FROM category_land_plot  WHERE pay_type!=3 And subcategory_id = $subcategory_id And id!= $id ORDER BY id DESC")->result();
		}

		//$product = $this->product_model->getproductall($id);


		$session_id = $this->session->userdata('id');

		if ($session_id) {
			//echo $this->db->last_query();
			$user_detail = $this->user->loginuser($session_id);
			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/myproductdetail', ['user' => $user_detail, 'categories_data' => $Categories_all_product, 'category_data' => $Category_product]);
			$this->load->view('front/footer');

		} else {

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
			$this->load->view('front/header');
			$this->load->view('front/myproductdetail', ['categories_data' => $Categories_all_product, 'category_data' => $Category_product]);
			$this->load->view('front/footer');
		}
	}
	public function fetch()
	{

		$category_id = $_POST["category_id"];
		$subcategory_id = $_POST["subcategory_id"];

		if (isset($_POST["limit"], $_POST["start"])) {
			if ($category_id == 1) {
				$related = $this->db->query("SELECT * FROM get_all_category_reusable_parts  WHERE subcategory_id = $subcategory_id  ORDER BY id DESC LIMIT " . $_POST["start"] . ", " . $_POST["limit"] . "")->result();
			} else if ($category_id == 2) {
				$related = $this->db->query("SELECT * FROM get_all_category_Electronic  WHERE subcategory_id = $subcategory_id ORDER BY id DESC LIMIT " . $_POST["start"] . ", " . $_POST["limit"] . "")->result();
			} else if ($category_id == 3) {
				$related = $this->db->query("SELECT * FROM category_Furniture WHERE subcategory_id = $subcategory_id  ORDER BY id DESC LIMIT " . $_POST["start"] . ", " . $_POST["limit"] . "")->result();
			} else if ($category_id == 4) {
				$related = $this->db->query("SELECT * FROM category_Fashion WHERE subcategory_id = $subcategory_id ORDER BY id DESC LIMIT " . $_POST["start"] . ", " . $_POST["limit"] . "")->result();
			}

			$pro = "";
			foreach ($related as $product) {
				print_r($product);
				$wishlist = 0;
				if (!empty($_SESSION['id']) && isset($_SESSION['id'])) {

					$wishlit = get_wishlist($product->id, $product->category_id, $_SESSION['id']);

					if (empty($wishlit)) {

						$wishlist = 0;


					} else {

						$wishlist = 1;

					}
				} else {
					$wishlist = 0;
				}

				$session_id = $this->session->userdata("id");
				if ($session_id) {
					if ($_SESSION["id"] !== $product->user_id) {

						$pro .= '<div class="row justify-content-center">
	<div class="col-md-12  col-xl-10">
	  <div class="card shadow-0 border rounded-3">
		<div class="card-body">
		  <div class="row">
						 <i style="color:#F15927; text-align: right;" ' . (empty($_SESSION['id']) || !isset($_SESSION['id']) ? 'data-toggle="modal" data-target=""' : 'data-uid="' . $_SESSION['id'] . '"') . ' class="' . ($wishlist == 0 ? 'fa fa-heart-o' : 'fa fa-heart') . ' dddssaaf dddssaaf" data-pid="' . $product->id . '" data-cid="' . $product->category_id . '" data-wishlist="' . $wishlist . '" ></i>

			<div class="col-md-12 col-lg-5 col-xl-5 mb-4 mb-lg-0">
			  <div class="bg-image hover-zoom ripple rounded ripple-surface">';

						$pro .= '  <a href="' . base_url("welcome/verifyproductdetails/" . $product->category_id . '/' . $product->id . '/' . $product->subcategory_id) . '"><img class="btn-change " height=250 width=250 src="' . base_url($product->thumbnails) . '"></a>
				<a href="#!">
				  <div class="hover-overlay">
					<div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
				  </div>
				</a>
			  </div>
			</div>
			<div class="col-md-6 col-lg-4 col-xl-4 mt-3 ">';

						$description = $product->Description;
						$pro .= '  <h5>' . ucfirst($product->title) . '</h5>
		   <p class="text-muted">';
						if (strlen($description) <= 65) {
							$pro .= ucfirst($description);
						} else {
							$y = substr($description, 0, 70) . '...';
							$pro .= ucfirst($y);
						}
						$pro .= '
				</p>
				';
						$pro .= '   <div class="row">
				 <div class="col-sm-4" style=" ">
		  <p class="text-muted">Condition</p>
			  
			 ';
						$pro .= '  <img src="' . base_url("assets/images/location.png") . '"> 
				  </div>
				  <div class="col-sm-8" >';
						$pro .= ' <p class="text-muted"> ' . $product->Condition_product . '</p> ';

						$location = $product->Location;
						$pro .= '  <p class="text-muted">';
						if (strlen($location) <= 50) {
							$pro .= ucfirst($location);
						} else {
							$y = substr($location, 0, 50) . '...';
							$pro .= ucfirst($y);
						}
						$pro .= '
				</p>
				
					  <p class="text-muted d-none" >' . $product->subcategory_id . '</p>
				  </div>
							  </div>
		   
			 
			</div>
			<div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none mt-4">
			  <div class="d-flex flex-row align-items-center mb-1">';
						$pro .= ' <h3 style="color:#46760A;" class="mb-1 me-1">$' . (isset($product->Price) ? $product->Price : (isset($product->Salary) ? $product->Salary : '')) . '</h3>
				
			  </div>
			  
			  <div class="d-flex flex-column mt-4">';
						$pro .= ($product->pay_type == 0) ? '' : (($product->pay_type == 1) ? '<img style="position: absolute;  width:112px;" src="' . base_url("assets/images/sponser.png") . '">' : '<img style=" position: absolute; width:112px;" src="' . base_url("assets/images/urgent.png") . '">');

						$pro .= '   <a href="' . base_url("welcome/verifyproductdetails/" . $product->category_id . '/' . $product->id . '/' . $product->subcategory_id) . '"><img style="margin-top: 40%;" height=50 width=140 src="' . base_url("assets/images/details.png") . '"></a>
				
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	 </div>';

					}
				} else {
					$pro .= '<div class="row justify-content-center">
	<div class="col-md-12  col-xl-10">
	  <div class="card shadow-0 border rounded-3">
		<div class="card-body">
		  <div class="row">
						 <i style="color:#F15927; text-align: right;" ' . (empty($_SESSION['id']) || !isset($_SESSION['id']) ? 'data-toggle="modal" data-target=""' : 'data-uid="' . $_SESSION['id'] . '"') . ' class="' . ($wishlist == 0 ? 'fa fa-heart-o' : 'fa fa-heart') . ' dddssaaf dddssaaf" data-pid="' . $product->id . '" data-cid="' . $product->category_id . '" data-wishlist="' . $wishlist . '" ></i>

			<div class="col-md-12 col-lg-5 col-xl-5 mb-4 mb-lg-0">
			  <div class="bg-image hover-zoom ripple rounded ripple-surface">';

					$pro .= '  <a href="' . base_url("welcome/productdetail/" . $product->category_id . '/' . $product->id . '/' . $product->subcategory_id) . '"><img class="btn-change " height=250 width=250 src="' . base_url($product->thumbnails) . '"></a>
				<a href="#!">
				  <div class="hover-overlay">
					<div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
				  </div>
				</a>
			  </div>
			</div>
			<div class="col-md-6 col-lg-4 col-xl-4 mt-3 ">';

					$description = $product->Description;
					$pro .= '  <h5>' . ucfirst($product->title) . '</h5>
		   <p class="text-muted">';
					if (strlen($description) <= 75) {
						$pro .= ucfirst($description);
					} else {
						$y = substr($description, 0, 80) . '...';
						$pro .= ucfirst($y);
					}
					$pro .= '
				</p>
				';
					$pro .= '   <div class="row">
				 <div class="col-sm-4" style=" ">
		  <p class="text-muted">Fresness</p>
			  
			 ';
					$pro .= '  <img src="' . base_url("assets/images/location.png") . '"> 
				  </div>
				  <div class="col-sm-8" >';
					$pro .= ' <p class="text-muted"> ' . $product->Condition_product . '</p> ';

					$pro .= '   <p class="text-muted">' . $product->Location . '</p>
					  <p class="text-muted d-none" >' . $product->subcategory_id . '</p>
				  </div>
							  </div>
		   
			 
			</div>
			<div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none mt-4">
			  <div class="d-flex flex-row align-items-center mb-1">';
					$pro .= ' <h3 style="color:#46760A;" class="mb-1 me-1">$' . (isset($product->Price) ? $product->Price : (isset($product->Salary) ? $product->Salary : '')) . '</h3>
				
			  </div>
			  
			  <div class="d-flex flex-column mt-4">';
					$pro .= ($product->pay_type == 0) ? '' : (($product->pay_type == 1) ? '<img style="position: absolute;  width:112px;" src="' . base_url("assets/images/sponser.png") . '">' : '<img style=" position: absolute; width:112px;" src="' . base_url("assets/images/urgent.png") . '">');

					$pro .= '   <a href="' . base_url("welcome/productdetail/" . $product->category_id . '/' . $product->id . '/' . $product->subcategory_id) . '"><img style="margin-top: 40%;" height=50 width=140 src="' . base_url("assets/images/details.png") . '"></a>
				
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	 </div>';
				}



			}

			echo $pro;

		}
	}

	public function saveproduct()
	{
  
		$category = $this->input->post('category');

		if ($category == 1) {
			$postData = array();
			$postData['title'] = $this->input->post('Title');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['brand'] = $this->input->post('Product_Brand');
			$postData['Select_Type'] = $this->input->post('reusable_parts_Select_Type');
			if ($postData['subcategory_id'] == 1 || $postData['subcategory_id'] == 2) {
				$postData['type'] = $this->input->post('reusable_parts_product_Type');
			} else if ($postData['subcategory_id'] == 3) {
				$postData['type'] = $this->input->post('reusable_parts_Laptops_product_Type');
			} else if ($postData['subcategory_id'] == 4) {
				$postData['type'] = $this->input->post('reusable_parts_computer_product_Type');
			} else if ($postData['subcategory_id'] == 5) {
				$postData['type'] = $this->input->post('reusable_parts_Electronics_product_Type');
			} else if ($postData['subcategory_id'] == 16) {
				$postData['type'] = $this->input->post('reusable_parts_Home_Appliances_product_Type');
			} else if ($postData['subcategory_id'] == 6) {
				$postData['type'] = $this->input->post('reusable_parts_Kitchen_Appliances_product_Type');
			} else if ($postData['subcategory_id'] == 7) {
				$postData['type'] = $this->input->post('reusable_parts_Automobiles_product_Type');
			} else if ($postData['subcategory_id'] == 8) {
				$postData['type'] = $this->input->post('reusable_parts_Furniture_product_Type');
			} else if ($postData['subcategory_id'] == 9) {
				$postData['type'] = $this->input->post('reusable_parts_Sports_product_Type');
			} else if ($postData['subcategory_id'] == 10) {
				$postData['type'] = $this->input->post('reusable_parts_Musical_product_Type');
			}
			$postData['book_publisher'] = $this->input->post('reusable_parts_Publisher');
			$postData['book_publisher_type'] = $this->input->post('reusable_parts_Publisher_type');
			$postData['use_year'] = $this->input->post('use_years');
			$postData['bill'] = $this->input->post('Have_Bill');
			$postData['address'] = $this->input->post('Address');
			$postData['Description'] = $this->input->post('Description');
			$postData['Warrenty'] = $this->input->post('Warrenty');
			$postData['price'] = $this->input->post('Price');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$sponser = $this->input->post('Sponsor');

			$insert = $this->product_model->category_reusable_parts($postData);
			$id = $this->db->insert_id();
			
			
			$table = "category_reusable_parts";
		} else if ($category == 2) {
			
			$postData = array();
			$postData['title'] = $this->input->post('Title');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['Tuitions_loction'] = $this->input->post('Tuitions_loction');
			$postData['Education_Type'] = $this->input->post('Tuitions_Education_Type');
			$postData['high_school'] = $this->input->post('school_eduction');
			$postData['gender'] = $this->input->post('Tuitions_gender');
			$postData['price'] = $this->input->post('Tuitions_person_Fees');
			if ($postData['subcategory_id'] == 13) {
				$postData['Years_Experience'] = $this->input->post('Tuitions_Years_Experience');
				$postData['Teachers_Qualifications'] = $this->input->post('Tuitions_Teachers_Qualifications');
				$postData['Positives_Outcomes'] = $this->input->post('Tuitions_Positives_Outcomes');
				$postData['Joining_criteria'] = $this->input->post('Tuitions_Joining_criteria');
				$postData['Available_Timings'] = $this->input->post('Tuitions_Available_Timings');
			} else if ($postData['subcategory_id'] == 14) {
				$postData['Years_Experience'] = $this->input->post('Tuitions_Teachers_Experience');
				$postData['Teachers_Qualifications'] = $this->input->post('Tuitions_Teachers_type');
				$postData['Positives_Outcomes'] = $this->input->post('Tuitions_Requirements_Teachers');
				$postData['Available_Timings'] = $this->input->post('Tuitions_Available_Timings_post');
			}

			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$postData['Description'] = $this->input->post('Description');
			$postData['address'] = $this->input->post('Address');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$sponser = $this->input->post('Sponsor');


			$insert = $this->product_model->category_tuitions($postData);
			$id = $this->db->insert_id();
		
			$table = "category_tuitions";
		} else if ($category == 3) {
			$postData = array();
			$postData['title'] = $this->input->post('Title');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['Job_Location'] = $this->input->post('Job_Location');
			$postData['job_Office_Address	'] = $this->input->post('job_Office_Address');
			$postData['Job_type'] = $this->input->post('Job_type');
			if ($postData['subcategory_id'] == 15) {
				$postData['job_Experience'] = $this->input->post('job_Experience');
				$postData['price'] = $this->input->post('job_Experience');

			} else if ($postData['subcategory_id'] == 16) {
				$postData['job_Experience'] = $this->input->post('Job_Pitching_Experience');
				$postData['price'] = $this->input->post('job_amount');
			}

			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$postData['Description'] = $this->input->post('Description');
			$postData['address'] = $this->input->post('Address');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$sponser = $this->input->post('Sponsor');


			$insert = $this->product_model->category_job($postData);
			$id = $this->db->insert_id();
			$table = "category_job";
		} else if ($category == 4) {
			$postData = array();
			$postData['title'] = $this->input->post('Title');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['Job_Location'] = $this->input->post('Job_Location');
			$postData['job_Office_Address	'] = $this->input->post('job_Office_Address');
			$postData['Job_type'] = $this->input->post('intership_Job_type');
			if ($postData['subcategory_id'] == 17) {
				$postData['intership_qustions'] = $this->input->post('intership_qustions');
			} else if ($postData['subcategory_id'] == 18) {
				$postData['intership_qustions'] = $this->input->post('intership_Skills_Qualifications');
				$postData['intership_Post_Vacant'] = $this->input->post('intership_Post_Vacant');
			}
			$postData['intership_Need_Stipend'] = $this->input->post('intership_Need_Stipend');
			$postData['Available_Timings'] = $this->input->post('Tuitions_Available_Timings_intership');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$postData['Description'] = $this->input->post('Description');
			$postData['address'] = $this->input->post('Address');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$sponser = $this->input->post('Sponsor');
			$insert = $this->product_model->category_internships($postData);
			$id = $this->db->insert_id();
			$table = "category_internships";
		}
		if ($category == 5) {
			$postData = array();
			$postData['title'] = $this->input->post('Title');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['filter'] = $this->input->post('Rent_sale');
			$postData['furniture_type'] = $this->input->post('Furniture');
			$postData['floor'] = $this->input->post('Floor');
			$postData['parking'] = $this->input->post('Parking');
			$postData['facing'] = $this->input->post('Facing');
			$postData['area'] = $this->input->post('Area');
			$postData['address'] = $this->input->post('Address');
			$postData['Description'] = $this->input->post('Description');
			
			$postData['price'] = $this->input->post('Sale_Price');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$sponser = $this->input->post('Sponsor');

			$insert = $this->product_model->category_commericial_places($postData);
			$id = $this->db->insert_id();
			
			
			$table = "category_commericial_places";
		}

		if ($category == 6) {
			$postData = array();
			$postData['title'] = $this->input->post('Title');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['filter'] = $this->input->post('Rent_sale');
			$postData['room'] = $this->input->post('Room');
			$postData['food'] = $this->input->post('Food');
			$postData['type'] = $this->input->post('Type');
			$postData['furniture_type'] = $this->input->post('Furniture');
			$postData['floor'] = $this->input->post('Floor');
			$postData['parking'] = $this->input->post('Parking');
			$postData['facing'] = $this->input->post('Facing');
			$postData['bathroom'] = $this->input->post('Bathroom');
			$postData['preferred_tenant'] = $this->input->post('Preferred');
			$postData['area'] = $this->input->post('Area');
			$postData['address'] = $this->input->post('Address');
			$postData['Description'] = $this->input->post('Description');
			
			$postData['price'] = $this->input->post('Sale_Price');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$sponser = $this->input->post('Sponsor');

			$insert = $this->product_model->category_residential_places($postData);
			$id = $this->db->insert_id();
			
			
			$table = "category_residential_places";
		}

		if ($category == 7) {
			$postData = array();
			$postData['title'] = $this->input->post('Title');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['filter'] = $this->input->post('Rent_sale');
			
			$postData['facing'] = $this->input->post('Facing');
			
			
			$postData['area'] = $this->input->post('Area');
			$postData['address'] = $this->input->post('Address');
			$postData['Description'] = $this->input->post('Description');
			
			$postData['price'] = $this->input->post('Sale_Price');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$sponser = $this->input->post('Sponsor');

			$insert = $this->product_model->category_land_plot($postData);
			$id = $this->db->insert_id();
			
			
			$table = "category_land_plot";
		}


		$id = $this->db->insert_id();
	
		$this->load->library('upload');
		$dataInfo = array();
		if (!empty($_FILES['profile_img']['name'])) {

			$filesCount = count($_FILES['profile_img']['name']);
			for ($i = 0; $i < $filesCount; $i++) {
				$_FILES['file']['name'] = $_FILES['profile_img']['name'][$i];
				$_FILES['file']['type'] = $_FILES['profile_img']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['profile_img']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['profile_img']['error'][$i];
				$_FILES['file']['size'] = $_FILES['profile_img']['size'][$i];


				$config['upload_path'] = './uploads/product';
				$config['allowed_types'] = '*';

				// Load and initialize upload library
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				/*$id = $this->post('product_id');*/
				// Upload file to server
				if ($this->upload->do_upload('file')) {
					// Uploaded file data
					$fileData = $this->upload->data();
					$uploadData[$i]['file_name'] = $fileData['file_name'];
					$uploadData[$i]['created'] = date("Y-m-d H:i:s");
					$pimage = $uploadData[$i]['file_name'];



					$this->load->library('image_lib');
					$this->image_lib->clear();
					$this->image_lib->initialize([
						'image_library' => 'gd2',
						'source_image' => "./uploads/product/$pimage",
						'create_thumb' => false,
						'maintain_ratio' => true,
						'width' => 300,
						'quality' => 50,  // Adjust the quality as needed
					]);
			
					if (!$this->image_lib->resize()) {
					}
			
					// Check and resize until the image size is around 50 KB
					while (filesize("./uploads/product/$pimage") > 50000) {
						$this->image_lib->clear();
						$this->image_lib->initialize([
							'image_library' => 'gd2',
							'source_image' => "./uploads/product/$pimage",
							'create_thumb' => false,
							'maintain_ratio' => true,
							'quality' => 50,  // Adjust the quality as needed
						]);
			
						if (!$this->image_lib->resize()) {

							break;
						}
					}

					if ($i == 0) {
						$img = $pimage;
						$source = "./uploads/product/$img";
						$destImagePath = "./uploads/product/$img";
						$destImagdePath = $destImagePath;
						$thumbWidth = 300;
						$this->db->update($table, ["cover_img" => $destImagdePath], "id=$id");

					} else if ($i == 1) {
						$img = $pimage;
						$source = "./uploads/product/$img";
						$destImagePath = "./uploads/product/$img";
						$destImagdePath = $destImagePath;
						$thumbWidth = 300;

						$this->db->update($table, ["images_2" => $destImagdePath], "id=$id");

					} else if ($i == 2) {
						$img = $pimage;
						$source = "./uploads/product/$img";
						$destImagePath = "./uploads/product/$img";
						$destImagdePath = $destImagePath;
						$thumbWidth = 300;

						$this->db->update($table, ["images_3" => $destImagdePath], "id=$id");

					} else if ($i == 3) {
						$img = $pimage;
						$source = "./uploads/product/$img";
						$destImagePath = "./uploads/product/$img";
						$destImagdePath = $destImagePath;
						$thumbWidth = 300;

						$this->db->update($table, ["images_4" => $destImagdePath], "id=$id");

					} else if ($i == 4) {
						$img = $pimage;
						$source = "./uploads/product/$img";
						$destImagePath = "./uploads/product/$img";
						$destImagdePath = $destImagePath;
						$thumbWidth = 300;
						$this->db->update($table, ["images_5" => $destImagdePath], "id=$id");
					}

				}
			}

		}

		$postData['verified_admin'] = $this->input->post('verified_admin');

		if (empty($postData['verified_admin'])) {
			$postData['verified_admin'] = null;
		}

		if($sponser==3 || $postData['verified_admin'] == "yes"){
			$redirectUrl = 'welcome/pay/' .$id.'/'.$category;
			return redirect($redirectUrl);
		}

		
		$this->session->set_flashdata('saveproduct', 'Product Post Succesfully.');
		$this->session->set_flashdata('msg_class', 'alert-success');
		
		return redirect('welcome/postproduct');


	}
	public function pay($id,$category)
	{
		$_SESSION['product_id'] = $id;
		$_SESSION['category_id'] = $category;
		
		if($_SESSION['category_id']==1){
			$result = $this->db->where('id', $id)->get('category_reusable_parts')->result();

		}
		if($_SESSION['category_id']==2){
			$result = $this->db->where('id', $id)->get('category_tuitions')->result();

		}
		if($_SESSION['category_id']==3){
			$result = $this->db->where('id', $id)->get('category_job')->result();

		}
		if($_SESSION['category_id']==4){
			$result = $this->db->where('id', $id)->get('category_internships')->result();

		}
		if($_SESSION['category_id']==5){
			$result = $this->db->where('id', $id)->get('category_commericial_places')->result();

		}
		if($_SESSION['category_id']==6){
			$result = $this->db->where('id', $id)->get('category_residential_places')->result();

		}
		if($_SESSION['category_id']==7){
			$result = $this->db->where('id', $id)->get('category_land_plot')->result();

		}
		
		foreach($result as $dataji)
		if($dataji->verified_admin=='yes' && $dataji->pay_type == 3){
			$_SESSION['amount'] ='135';
			$_SESSION['normal_bost_donot'] ='bost';
		}
		elseif($dataji->pay_type== 0 || $dataji->pay_type== 2){
			$_SESSION['amount'] ='10';
			$_SESSION['normal_bost_donot'] ='Normal_Donate';
		}
	
        else{
	       $_SESSION['amount'] ='125';
		   $_SESSION['normal_bost_donot'] ='bost';
        }
		
		$RAZOR_KEY_ID = $this->config->item('RAZOR_KEY_ID');                                                                                                                
		$RAZOR_KEY_SECRET = $this->config->item('RAZOR_KEY_SECRET');
	  $api = new Api("rzp_test_dfwGYguqxcme16", "d9WQOxajFVqojtWZzVPKgsRE");
	  /**
	   * You can calculate payment amount as per your logic
	   * Always set the amount from backend for security reasons
	   */
	  $razorpayOrder = $api->order->create(array(
		'receipt'         => rand(),
		'amount'          => $_SESSION['amount'] * 100, // 2000 rupees in paise
		'currency'        => 'INR',
		'payment_capture' => 1 // auto capture
	  ));
	  $amount = $razorpayOrder['amount'];
	  $razorpayOrderId = $razorpayOrder['id'];
	  $_SESSION['amount'] = isset($_SESSION['amount']);
	  $_SESSION['razorpay_order_id'] = $razorpayOrderId;
	  $data = $this->prepareData($amount,$razorpayOrderId);
	  $this->load->view('front/rezorpay',array('data' => $data));
	}

	public function verified_pay($id,$cat_id,$sub_id,$user_id,$seller_id,$shop_id)
	{
		
		$_SESSION['product_id'] = $id;
		$_SESSION['category_id'] = $cat_id;
		$_SESSION['subcategory_id'] = $sub_id;
		$_SESSION['user_id'] = $user_id;
		$_SESSION['seller_id'] = $seller_id;
		$_SESSION['shop_id'] = $shop_id;
		$result = $this->db->where('id', $id)->get('category_reusable_parts')->result();
		foreach($result as $dataji)
		$_SESSION['amount'] ='50';
		$RAZOR_KEY_ID = $this->config->item('RAZOR_KEY_ID');
		$RAZOR_KEY_SECRET = $this->config->item('RAZOR_KEY_SECRET');
	  $api = new Api("rzp_test_dfwGYguqxcme16", "d9WQOxajFVqojtWZzVPKgsRE");
	  /**
	   * You can calculate payment amount as per your logic
	   * Always set the amount from backend for security reasons
	   */
	  $razorpayOrder = $api->order->create(array(
		'receipt'         => rand(),
		'amount'          => $_SESSION['amount'] * 100, // 2000 rupees in paise
		'currency'        => 'INR',
		'payment_capture' => 1 // auto capture
	  ));
	  $amount = $razorpayOrder['amount'];
	  $razorpayOrderId = $razorpayOrder['id'];
	  $_SESSION['amount'] = isset($_SESSION['amount']);
	  $_SESSION['razorpay_order_id'] = $razorpayOrderId;
	  $data = $this->prepareData($amount,$razorpayOrderId);
	  $this->load->view('front/verify_razrpay',array('data' => $data));
	}

	public function verify_rezarpay()
	{
		$RAZOR_KEY_ID = $this->config->item('RAZOR_KEY_ID');
		$RAZOR_KEY_SECRET = $this->config->item('RAZOR_KEY_SECRET');
	  $success = true;
	  $error = "payment_failed";
	  if (empty($_POST['razorpay_payment_id']) === false) {
		$api = new Api("rzp_test_dfwGYguqxcme16", "d9WQOxajFVqojtWZzVPKgsRE");
	  try {
		  $attributes = array(
			'razorpay_order_id' => $_SESSION['razorpay_order_id'],
			'razorpay_payment_id' => $_POST['razorpay_payment_id'],
			'razorpay_signature' => $_POST['razorpay_signature'],
			'amount' => $_SESSION['amount'],
			'product_id' => $_SESSION['product_id'],
			'user_id' => $this->session->userdata('id')
		  );
		  $api->utility->verifyPaymentSignature($attributes);
		  $data["product_id"] = $_SESSION['product_id'];
		$data["category_id"] = $_SESSION['category_id'];
		$data["sub_id"] = $_SESSION['subcategory_id'];
		$data["shop_owner_user_id"] = $_SESSION['user_id'];
		$data["seller_user_id"] = $_SESSION['seller_id'];
		$data["shop_id"] = $_SESSION['shop_id'];

		$this->user->saveshoplist($data);
		  $insert = $this->user->payment($attributes);
		} catch(SignatureVerificationError $e) {
		  $success = false;
		  $error = 'Razorpay_Error : ' . $e->getMessage();
		}
	  }
	  if ($success === true) {
		/**
		 * Call this function from where ever you want
		 * to save save data before of after the payment
		 */
		unset($_SESSION['premium_amount']); 
		unset($_SESSION['razorpay_order_id']);
		unset($_SESSION['amount']);
		$this->setRegistrationData();
		redirect(base_url().'welcome/productdetail/'. $_SESSION['category_id'].'/'. $_SESSION['product_id'].'/'. $_SESSION['subcategory_id']);
		
	  }
	  else {
		redirect(base_url().'welcome/productdetail/'. $_SESSION['category_id'].'/'. $_SESSION['product_id'].'/'. $_SESSION['subcategory_id']);
	  }
	}
	public function verify()
	{
		$RAZOR_KEY_ID = $this->config->item('RAZOR_KEY_ID');
		$RAZOR_KEY_SECRET = $this->config->item('RAZOR_KEY_SECRET');
	    $success = true;
	 
	   $error = "payment_failed";
	  if (empty($_POST['razorpay_payment_id']) === false) {
		$api = new Api("rzp_test_dfwGYguqxcme16", "d9WQOxajFVqojtWZzVPKgsRE");
	  try {
		  $attributes = array(
			'razorpay_order_id' => $_SESSION['razorpay_order_id'],
			'razorpay_payment_id' => $_POST['razorpay_payment_id'],
			'razorpay_signature' => $_POST['razorpay_signature'],
			'amount' => $_SESSION['amount'],
			'product_id' => $_SESSION['product_id'],
			'user_id' => $this->session->userdata('id')
		  );
		  $api->utility->verifyPaymentSignature($attributes);
		  if($_SESSION['category_id']==1){
			if($_SESSION['normal_bost_donot'] == 'bost'){
			$this->db->where('id', $_SESSION['product_id'])->update('category_reusable_parts', ['pay_type' => 1]);
			}else{
				$this->db->where('id', $_SESSION['product_id'])->update('category_reusable_parts', ['verified_admin' => "yes"]);
			}
			$result = $this->db->where('id', $_SESSION['product_id'])->get('category_reusable_parts')->result();

					// Iterate through the results
					foreach ($result as $dataji) {
						// Retrieve the values from the current row and assign them to variables
						$id = $dataji->id;
						$cat_id = $dataji->category_id;
						$sub_id = $dataji->subcategory_id;
						$user_id = $dataji->user_id; // Assuming 'user_id' should be used here, as '0' doesn't seem appropriate.

						// Insert data into the 'verify_product' table with the mapped columns
						$this->db->insert('verify_product', array(
							'product_id' => $id,
							'category_id' => $cat_id,
							'sub_id' => $sub_id,
							'shop_id' => 0, // Assuming you have a variable named '$shop_id' with the correct value.
							'shop_owner_user_id' => 0,
							'seller_user_id' => $user_id,
						));
					}

		  }
		  else if($_SESSION['category_id']==2){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_tuitions', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_tuitions', ['verified_admin' => "yes"]);
				}	


		  }
		  else if($_SESSION['category_id']==3){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_job', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_job', ['verified_admin' => "yes"]);
				}
		  }
		  else if($_SESSION['category_id']==4){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_internships', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_internships', ['verified_admin' => "yes"]);
				}
		
	
		  }
		  else if($_SESSION['category_id']==5){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_commericial_places', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_commericial_places', ['verified_admin' => "yes"]);
				}
			
		  }
		  else if($_SESSION['category_id']==6){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_residential_places', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_residential_places', ['verified_admin' => "yes"]);
				}
				
		  }
		  else if($_SESSION['category_id']==7){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_land_plot', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_land_plot', ['verified_admin' => "yes"]);
				}
				
			
		  }
		  
		  $insert = $this->user->payment($attributes);
		} catch(SignatureVerificationError $e) {
			if($_SESSION['category_id']==1){
				$this->db->query("delete from category_reusable_parts where category_id=".$_SESSION['category_id']." and id=".$_SESSION['product_id']);
			}
		  $success = false;
		  $error = 'Razorpay_Error : ' . $e->getMessage();
		}
	  }
	  if ($success === true) {
		/**
		 * Call this function from where ever you want
		 * to save save data before of after the payment
		 */
		unset($_SESSION['premium_amount']); 
		unset($_SESSION['razorpay_order_id']);
		unset($_SESSION['amount']);
		$this->setRegistrationData();
		redirect(base_url().'welcome/postproduct');
		
	  }
	  else {
		redirect(base_url().'welcome/postproduct/');
	  }
	}

	public function editverify()
	{
		$RAZOR_KEY_ID = $this->config->item('RAZOR_KEY_ID');
		$RAZOR_KEY_SECRET = $this->config->item('RAZOR_KEY_SECRET');
	    $success = true;
	 
	   $error = "payment_failed";
	  if (empty($_POST['razorpay_payment_id']) === false) {
		$api = new Api("rzp_test_dfwGYguqxcme16", "d9WQOxajFVqojtWZzVPKgsRE");
	  try {
		  $attributes = array(
			'razorpay_order_id' => $_SESSION['razorpay_order_id'],
			'razorpay_payment_id' => $_POST['razorpay_payment_id'],
			'razorpay_signature' => $_POST['razorpay_signature'],
			'amount' => $_SESSION['amount'],
			'product_id' => $_SESSION['product_id'],
			'user_id' => $this->session->userdata('id')
		  );
		  $api->utility->verifyPaymentSignature($attributes);
		  if($_SESSION['category_id']==1){
			if($_SESSION['normal_bost_donot'] == 'bost'){
			$this->db->where('id', $_SESSION['product_id'])->update('category_reusable_parts', ['pay_type' => 1]);
			}else{
				$this->db->where('id', $_SESSION['product_id'])->update('category_reusable_parts', ['verified_admin' => "yes"]);
			}

		  }
		  else if($_SESSION['category_id']==2){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_tuitions', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_tuitions', ['verified_admin' => "yes"]);
				}	

		  }
		  else if($_SESSION['category_id']==3){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_job', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_job', ['verified_admin' => "yes"]);
				}
		  }

		  else if($_SESSION['category_id']==4){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_internships', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_internships', ['verified_admin' => "yes"]);
				}
				
		  }
		  else if($_SESSION['category_id']==5){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_commericial_places', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_commericial_places', ['verified_admin' => "yes"]);
				}
			
		  }
		  else if($_SESSION['category_id']==6){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_residential_places', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_residential_places', ['verified_admin' => "yes"]);
				}		

		  }
		  else if($_SESSION['category_id']==7){
			if($_SESSION['normal_bost_donot'] == 'bost'){
				$this->db->where('id', $_SESSION['product_id'])->update('category_land_plot', ['pay_type' => 1]);
				}else{
					$this->db->where('id', $_SESSION['product_id'])->update('category_land_plot', ['verified_admin' => "yes"]);
				}
			
			
		  }
		  $insert = $this->user->payment($attributes);
		} catch(SignatureVerificationError $e) {
			if($_SESSION['category_id']==1){
				$this->db->query("delete from category_reusable_parts where category_id=".$_SESSION['category_id']." and id=".$_SESSION['product_id']);
			}
		  $success = false;
		  $error = 'Razorpay_Error : ' . $e->getMessage();
		}
	  }
	  if ($success === true) {
		/**
		 * Call this function from where ever you want
		 * to save save data before of after the payment
		 */
		unset($_SESSION['premium_amount']); 
		unset($_SESSION['razorpay_order_id']);
		unset($_SESSION['amount']);
		$this->setRegistrationData();
		redirect(base_url().'welcome/editproduct_view/'. $_SESSION['category_id'].'/'. $_SESSION['product_id']);
		
	  }
	  else {
		redirect(base_url().'welcome/editproduct_view/'. $_SESSION['category_id'].'/'. $_SESSION['product_id']);
	  }
	}

	public function setRegistrationData(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$contact = $this->input->post('contact');
		$amount = $_SESSION['payable_amount'];
		$registrationData = array(
		  'order_id' => $_SESSION['razorpay_order_id'],
		  'name' => $name,
		  'email' => $email,
		  'contact' => $contact,
		  'amount' => $amount,
		);
		// save this to database
	  }

	  public function paymentFailed(){
		$this->load->view('error');
	  } 

	public function prepareData($amount,$razorpayOrderId){
		$RAZOR_KEY_ID = $this->config->item('RAZOR_KEY_ID');
		$RAZOR_KEY_SECRET = $this->config->item('RAZOR_KEY_SECRET');
	  $data = array(
		"key" => "rzp_test_dfwGYguqxcme16",
		"amount" => $amount,
		"name" => "CelNow",
		"description" => "Learn To Code",
		"image" => base_url() . "assets/images/CelNow 5 1.png",
		"prefill" => array(
		  "name"  => $this->input->post('name'),
		  "email"  => $this->input->post('email'),
		  "contact" => $this->input->post('contact'),
		),
		"notes"  => array(
		  "address"  => "Payment Policy",
		  "merchant_order_id" => rand(),
		),
		"theme"  => array(
		  "color"  => "#10B981"
		),
		"order_id" => $razorpayOrderId,
	  );
	  return $data;
	}
	public function editproduct()
	{

		$category = $this->input->post('category');

		if ($category == 1) {
			$postData = array();
			$postData['id'] = $this->input->post('product_id');
			$postData['title'] = $this->input->post('Title');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['address'] = $this->input->post('Address');
			$postData['Description'] = $this->input->post('Description');
			$postData['price'] = $this->input->post('Price');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$sponser= $this->input->post('Sponsor');
			$insert = $this->product_model->edit_category_reusable_parts($postData);
			$id = $this->input->post('product_id');
			$table = "category_reusable_parts";
		} else if ($category == 2) {
			$postData = array();
			$postData['id'] = $this->input->post('product_id');
			$postData['title'] = $this->input->post('Title');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['address'] = $this->input->post('Address');
			$postData['Description'] = $this->input->post('Description');
			$postData['price'] = $this->input->post('Price');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$sponser= $this->input->post('Sponsor');
			$insert = $this->product_model->edit_category_tuitions($postData);
			$id = $this->input->post('product_id');
			$table = "category_tuitions";
		} else if ($category == 3) {
			$postData = array();
			$postData['id'] = $this->input->post('product_id');
			$postData['title'] = $this->input->post('Title');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['address'] = $this->input->post('Address');
			$postData['Description'] = $this->input->post('Description');
			$postData['price'] = $this->input->post('Price');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$insert = $this->product_model->edit_category_job($postData);
			$id = $this->input->post('product_id');
			$table = "category_job";
		} else if ($category == 4) {
			$postData = array();
			$postData['id'] = $this->input->post('product_id');
			$postData['title'] = $this->input->post('Title');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['address'] = $this->input->post('Address');
			$postData['Description'] = $this->input->post('Description');
			$postData['price'] = $this->input->post('Price');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$sponser= $this->input->post('Sponsor');
			$insert = $this->product_model->edit_category_internships($postData);
			$id = $this->input->post('product_id');
			$table = "category_internships";
		}else if ($category == 5) {
			$postData = array();
			$postData['id'] = $this->input->post('product_id');
			$postData['title'] = $this->input->post('Title');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['address'] = $this->input->post('Address');
			$postData['Description'] = $this->input->post('Description');
			$postData['price'] = $this->input->post('Price');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$sponser= $this->input->post('Sponsor');
			$insert = $this->product_model->edit_category_commericial_places($postData);
			$id = $this->input->post('product_id');
			$table = "category_commericial_places";
		}
		else if ($category == 6) {
			$postData = array();
			$postData['id'] = $this->input->post('product_id');
			$postData['title'] = $this->input->post('Title');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['address'] = $this->input->post('Address');
			$postData['Description'] = $this->input->post('Description');
			$postData['price'] = $this->input->post('Price');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$sponser= $this->input->post('Sponsor');
			$insert = $this->product_model->edit_category_residential_places($postData);
			$id = $this->input->post('product_id');
			$table = "category_residential_places";
		}
		else if ($category == 7) {
			$postData = array();
			$postData['id'] = $this->input->post('product_id');
			$postData['title'] = $this->input->post('Title');
			$postData['user_id'] = $this->input->post('user_id');
			$postData['category_id'] = $this->input->post('category');
			$postData['subcategory_id'] = $this->input->post('subcategory');
			$postData['pay_type'] = $this->input->post('Sponsor');
			$postData['verified_admin'] = $this->input->post('verified_admin');
			$postData['address'] = $this->input->post('Address');
			$postData['Description'] = $this->input->post('Description');
			$postData['price'] = $this->input->post('Price');
			$postData['postal_code'] = $this->input->post('Postal_code');
			$postData['town'] = $this->input->post('Town');
			$postData['lat'] = $this->input->post('latitude');
			$postData['long'] = $this->input->post('longitude');
			$sponser= $this->input->post('Sponsor');
			$insert = $this->product_model->edit_category_land_plot($postData);
			$id = $this->input->post('product_id');
			$table = "category_land_plot";
		}



		$this->load->library('upload');
		$dataInfo = array();
		 
		if (!empty($_FILES['profile_img']['name'])) {

			$filesCount = count($_FILES['profile_img']['name']);
			for ($i = 0; $i < $filesCount; $i++) {
				$_FILES['file']['name'] = $_FILES['profile_img']['name'][$i];
				$_FILES['file']['type'] = $_FILES['profile_img']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['profile_img']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['profile_img']['error'][$i];
				$_FILES['file']['size'] = $_FILES['profile_img']['size'][$i];


				$config['upload_path'] = './uploads/product';
				$config['allowed_types'] = '*';

				// Load and initialize upload library
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				/*$id = $this->post('product_id');*/
				// Upload file to server
				if ($this->upload->do_upload('file')) {
					// Uploaded file data
					$fileData = $this->upload->data();
					$uploadData[$i]['file_name'] = $fileData['file_name'];
					$uploadData[$i]['created'] = date("Y-m-d H:i:s");
					$pimage = $uploadData[$i]['file_name'];

					$this->load->library('image_lib');
					$this->image_lib->clear();
					$this->image_lib->initialize([
						'image_library' => 'gd2',
						'source_image' => "./uploads/product/$pimage",
						'create_thumb' => false,
						'maintain_ratio' => true,
						'width' => 300,
						'quality' => 50,  // Adjust the quality as needed
					]);
			
					if (!$this->image_lib->resize()) {
					}
			
					// Check and resize until the image size is around 50 KB
					while (filesize("./uploads/product/$pimage") > 50000) {
						$this->image_lib->clear();
						$this->image_lib->initialize([
							'image_library' => 'gd2',
							'source_image' => "./uploads/product/$pimage",
							'create_thumb' => false,
							'maintain_ratio' => true,
							'quality' => 50,  // Adjust the quality as needed
						]);
			
						if (!$this->image_lib->resize()) {

							break;
						}
					}



					if ($i == 0) {
						$img = $pimage;
						$source = "./uploads/product/$img";
						$destImagePath = "./uploads/product/$img";
						$destImagdePath = $destImagePath;
						$thumbWidth = 300;
						$this->db->update($table, ["cover_img" => $destImagdePath], "id=$id");

					} else if ($i == 1) {
						$img = $pimage;
						$source = "./uploads/product/$img";
						$destImagePath = "./uploads/product/$img";
						$destImagdePath = $destImagePath;
						$thumbWidth = 300;

						$this->db->update($table, ["images_2" => $destImagdePath], "id=$id");

					} else if ($i == 2) {
						$img = $pimage;
						$source = "./uploads/product/$img";
						$destImagePath = "./uploads/product/$img";
						$destImagdePath = $destImagePath;
						$thumbWidth = 300;

						$this->db->update($table, ["images_3" => $destImagdePath], "id=$id");

					} else if ($i == 3) {
						$img = $pimage;
						$source = "./uploads/product/$img";
						$destImagePath = "./uploads/product/$img";
						$destImagdePath = $destImagePath;
						$thumbWidth = 300;

						$this->db->update($table, ["images_4" => $destImagdePath], "id=$id");

					} else if ($i == 4) {
						$img = $pimage;
						$source = "./uploads/product/$img";
						$destImagePath = "./uploads/product/$img";
						$destImagdePath = $destImagePath;
						$thumbWidth = 300;
						$this->db->update($table, ["images_5" => $destImagdePath], "id=$id");
					}

				}
			}

		}

		$postData['verified_admin'] = $this->input->post('verified_admin');

		if (empty($postData['verified_admin'])) {
			$postData['verified_admin'] = null;
		}

	
		if($sponser==3 || $postData['verified_admin'] == "yes"){
			$redirectUrl = 'welcome/editpay/' .$id.'/'.$category;
			return redirect($redirectUrl);
		}
		$this->session->set_flashdata('Editproduct', 'Product Edit Succesfully.');
		$this->session->set_flashdata('msg_class', 'alert-success');
		return redirect('welcome/myprofile');
	}

	public function editpay($id,$category)
	{
		$_SESSION['product_id'] = $id;
		$_SESSION['category_id'] = $category;
		
		if($_SESSION['category_id']==1){
			$result = $this->db->where('id', $id)->get('category_reusable_parts')->result();

		}
		if($_SESSION['category_id']==2){
			$result = $this->db->where('id', $id)->get('category_tuitions')->result();

		}
		if($_SESSION['category_id']==3){
			$result = $this->db->where('id', $id)->get('category_job')->result();

		}
		if($_SESSION['category_id']==4){
			$result = $this->db->where('id', $id)->get('category_internships')->result();

		}
		if($_SESSION['category_id']==5){
			$result = $this->db->where('id', $id)->get('category_commericial_places')->result();

		}
		if($_SESSION['category_id']==6){
			$result = $this->db->where('id', $id)->get('category_residential_places')->result();

		}
		if($_SESSION['category_id']==7){
			$result = $this->db->where('id', $id)->get('category_land_plot')->result();

		}
		foreach($result as $dataji)
		if($dataji->verified_admin=='yes' && $dataji->pay_type == 3){
			$_SESSION['amount'] ='135';
		}
		elseif($dataji->pay_type== 0 || $dataji->pay_type== 2){
			$_SESSION['amount'] ='10';
		}
	
        else{
	       $_SESSION['amount'] ='125';
        }

		
		$RAZOR_KEY_ID = $this->config->item('RAZOR_KEY_ID');                                                                                                                
		$RAZOR_KEY_SECRET = $this->config->item('RAZOR_KEY_SECRET');
	  $api = new Api("rzp_test_dfwGYguqxcme16", "d9WQOxajFVqojtWZzVPKgsRE");
	  /**
	   * You can calculate payment amount as per your logic
	   * Always set the amount from backend for security reasons
	   */
	  $razorpayOrder = $api->order->create(array(
		'receipt'         => rand(),
		'amount'          => $_SESSION['amount'] * 100, // 2000 rupees in paise
		'currency'        => 'INR',
		'payment_capture' => 1 // auto capture
	  ));
	  $amount = $razorpayOrder['amount'];
	  $razorpayOrderId = $razorpayOrder['id'];
	  $_SESSION['amount'] = isset($_SESSION['amount']);
	  $_SESSION['razorpay_order_id'] = $razorpayOrderId;
	  $data = $this->prepareData($amount,$razorpayOrderId);
	  $this->load->view('front/editrezorpay',array('data' => $data));
	}
	public function deleteimage()
	{
		$thumbnails = $this->input->post('thumbnails');
		$product_id = $this->input->post('product_id');
		$category_id = $this->input->post('category');
		$this->product_model->delete_img_comman_query($category_id, $product_id, $thumbnails);
	}

	public function deleteproduct()
	{
		$product_id = $this->input->post('pid');
		$category_id = $this->input->post('cid');

		$this->product_model->delete_product($category_id, $product_id);


	}

	public function store()
	{
		$session_id = $this->session->userdata('id');

		if ($session_id) {
			//$myproduct = $this->product_model->myproduct($session_id);

			$user_detail = $this->user->loginuser($session_id);
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/store', ['user' => $user_detail]);
			$this->load->view('front/footer');
		} else {
			$this->load->view('front/header');
			$this->load->view('front/store');
			$this->load->view('front/footer');
		}
	}

	public function shopdetail()
	{

		$session_id = $this->session->userdata('id');

		if ($session_id) {
			//$myproduct = $this->product_model->myproduct($session_id);

			$user_detail = $this->user->loginuser($session_id);
			$this->load->view('front/header', ['user' => $user_detail]);
			$this->load->view('front/shopdetail', ['user' => $user_detail]);
			$this->load->view('front/footer');
		} else {
			$this->load->view('front/header');
			$this->load->view('front/shopdetail');
			$this->load->view('front/footer');
		}
	}
	public function chat($data = " ")
	{
		$this->session->unset_userdata('chat_list_color_user_id');
			$this->session->unset_userdata('chat_list_color_product_id');
		$session_id = $this->session->userdata('id');
		if ($session_id) {
			$message = "";
			$user_detail = $this->user->loginuser($session_id);
		
			if (!empty($this->input->post('sender_id')) && !empty($this->input->post('product_id')) && !empty($this->input->post('category_id')) && $this->input->post('receiver_id')) {
				$sender_id = $this->input->post('sender_id');
				$receiver_id = $this->input->post('receiver_id');
				$product_id = $this->input->post('product_id');
				$category_id = $this->input->post('category_id');
				$message = $this->input->post('message');

				
                
			
			} else {
				$sender_id = $session_id;
				$receiver_id = $session_id;
				$product_id = 0;
				$category_id = 0;
			}
			$chat_list = $this->chat_model->chatlist($session_id);
			if (!empty($this->input->post('sender_id')) && $this->input->post('receiver_id')) {
				$chat_exist = $this->user->checkchatlist($sender_id, $receiver_id, $product_id, $category_id);
				if (empty($chat_exist)) {
					$chat_list = array('sender_id' => $sender_id, 'receiver_id' => $receiver_id, 'product_id' => $product_id, 'category_id' => $category_id, 'updated' => date("Y-m-d H:i:s"));
					$this->db->insert('chat_list', $chat_list);
				
				} 
			}
			if (!empty($message)) {
				$chat = array('sender_id' => $sender_id, 'receiver_id' => $receiver_id, 'product_id' => $product_id, 'category_id' => $category_id, 'message' => $message);

				$this->chat_model->insert($chat);
			}
			$chat_list = $this->chat_model->chatlist($session_id);
			if (!empty($this->input->post('sender_id')) && $this->input->post('receiver_id')) {

				$chat = $this->user->getuserallchat($sender_id, $receiver_id, $product_id, $category_id);

			} else {
				$chat = null;
			}
			$this->load->view('front/header', ['user' => $user_detail, 'receiver_id' => $receiver_id, 'sender_id' => $sender_id, 'chat_list' => $chat_list, 'chat' => $chat]);
			$this->load->view('front/chat_list', ['user' => $user_detail, 'sender_id' => $sender_id, 'receiver_id' => $receiver_id, 'product_id' => $product_id, 'category_id' => $category_id, 'chat_list' => $chat_list, 'chat' => $chat]);
			$this->load->view('front/footer');
		} else {
			return redirect('welcome/newhome');
		}
	}

	public function chatdata($data = " ")
	{
		$session_id = $this->session->userdata('id');
		if ($session_id) {
			$sender_id = $this->input->post('sender_id');
			$receiver_id = $this->input->post('receiver_id');
			$product_id = $this->input->post('product_id');
			$category_id = $this->input->post('category_id');
			$pro_images = "";

			$this->session->set_userdata('chat_list_color_user_id', $receiver_id);
			$this->session->set_userdata('chat_list_color_product_id', $product_id);

			if ($chat_list = $this->chat_model->chatlist($session_id)) {
				$chat = $this->user->getuserallchat($sender_id, $receiver_id, $product_id, $category_id);
				$pro = "";
				if (!empty($chat)) {
				
					$pro .= '<a href="javascript:location.reload()" style="text-decoration: none;">
					<p class="me-3 mt-2" id="cross_icon" style="font-size: 29px; text-align: right;">
					  <i class="fas fa-times"></i>
					</p>
				  </a>';
					foreach ($chat as $key => $chatmessages) {
						if ($category_id == 1) {
							$profile = get_mobile_data($chatmessages["product_id"]);
						} else if ($category_id == 2) {
							$profile = get_tution_data($chatmessages["product_id"]);
						} else if ($category_id == 3) {
							$profile = get_job_data($chatmessages["product_id"]);
						} else if ($category_id == 4) {
							$profile = get_internship_data($chatmessages["product_id"]);
						} else if ($category_id == 5) {
							$profile = get_commericial_data($chatmessages["product_id"]);
						} else if ($category_id == 6) {
							$profile = get_residential_data($chatmessages["product_id"]);
						} else if ($category_id == 7) {
							$profile = get_land_plot_data($chatmessages["product_id"]);
						}
						if ($chatmessages['sender_id'] != $_SESSION['id']) {

							$profile_pic1 = get_userdetail($chatmessages['sender_id'])->profile_img;

							$data = array('read_status' => 1);

							$read_update = array(
								'read' => 1
							);
							
							$this->db->where('sender_id', $sender_id)->where('receiver_id', $receiver_id)->where('product_id', $product_id)->update('chat_list', $read_update);


							$updated = $this->chat_model->updateunreadmessage($data, $chatmessages['sender_id'], $_SESSION['id']);

							$pro .= '<li class="left">
                                            
                                            <span class="avatar available tooltips" data-toggle="tooltip " data-placement="right" data-original-title="Yanique Robinson">';

							$pro .= ' <img src="'.base_url("uploads/profile/").'' . $profile_pic1 . '" alt="avatar" class="img-circle">';

							$pro .= ' </span>
                                            <div class="body">   
                                                <div class="message well well-sm">
                                                    ' . $chatmessages['message'] . '
                                                </div>
                                                <div class="timestamp-sender">' . $chatmessages["created"] . '</div>
                                            </div>
                                        </li>';

						} else {

							$profile_pic2 = get_userdetail($chatmessages['sender_id'])->profile_img;

							$pro .= '<li class="right">                                  
                                            <span class="avatar tooltips" data-toggle="tooltip " data-placement="left" data-original-title="Kevin Mckoy">';
							$pro .= '<img src="'.base_url("uploads/profile/").'' . $profile_pic2 . '" alt="avatar" class="img-circle">';

							$pro .= '</span>
                                            <div class="body chatbodys">   
                                                <div class="message well well-sm">
                                                    ' . $chatmessages['message'] . '
                                               
                                                </div>
                                               
                                              <div class="timestamp">' . $chatmessages["created"] . '</div><div style="' . (($chatmessages["read_status"] == 1) ? "color:#32CD32;" : "") . '"  class="checkmark-sent-delivered">✓</div>' . (($chatmessages["delivered_status"] == 1) ? '<div style="' . (($chatmessages["read_status"] == 1) ? "color:#32CD32;" : "") . '" class="checkmark-read heckmark-read">✓</div>
                                            ' : '') . '</div>
                                        </li> ';

						}

					}
				} else {
					$pro .= '<a href="javascript:location.reload()" style="text-decoration: none;">
					<p class="me-3 mt-2" id="cross_icon" style="font-size: 29px; text-align: right;">
					  <i class="fas fa-times"></i>
					</p>
				  </a>';
					$pro .= '<li id="default-page" style="text-align: center;padding-top:15%;">                      
                                            <img src="' . base_url('assets/images/CelNow 5 1.png') . '" style="opacity:0.2;">
                                            <h2 style="color: black; opacity:0.2;">Welcome to CelNow</h2>
                                          </li>';
				}
				
				echo $pro;
			}
			else{
				$pro_images .= '<a href="javascript:location.reload()" style="text-decoration: none;">
					<p class="me-3 mt-2" id="cross_icon" style="font-size: 29px; text-align: right;">
					  <i class="fas fa-times"></i>
					</p>
				  </a>';
					$pro_images .= '<li id="default-page" style="text-align: center;padding-top:20%;">                      
                                            <img src="' . base_url('assets/images/CelNow 5 1.png') . '" style="opacity:0.2;">
                                            <h2 style="color: black; opacity:0.2;">Welcome to CelNow</h2>
                                          </li>';
			  echo $pro_images;
			}
		
		} else {
			return redirect('welcome/newhome');
		}
	}

	public function getallchat()
	{

		$session_id = $this->session->userdata('id');
		if ($session_id) {

			$sender_id = $this->input->post('sender_id');
			$receiver_id = $this->input->post('receiver_id');

			$chat = get_all_chat($sender_id, $receiver_id);

			//echo $this->db->last_query();

			$allchat = count($chat);

			echo $allchat;

		}

	}
	public function savechat()
	{

		//$id = $this->uri->segment(3);
		$session_id = $this->session->userdata('id');
		if ($session_id) {

			// $product = $this->product_model->getproduct($id);
			//echo $this->db->last_query();
			$user_detail = $this->user->loginuser($session_id);
			$sender_id = $this->input->post('sender_id');
			$receiver_id = $this->input->post('receiver_id');
			$product_id = $this->input->post('product_id');
			$category_id = $this->input->post('category_id');
			
			$checkchat = $this->user->checkchat($sender_id, $receiver_id, $product_id, $category_id);
		
			if(empty($checkchat)){
				$pay_type = get_pay_type($product_id,$category_id);
	
				if($pay_type->pay_type==1){
				$userphone = get_user_phone_id($receiver_id);
	
				$phone = $userphone->phone;
				$size = 4;
				$alpha_key = '';
				$keys = range('0', '9');
				for ($i = 0; $i < 4; $i++) {
					$alpha_key .= $keys[array_rand($keys)];
				}
				$randCode = $alpha_key;
				$numberss = "91" . $phone; // A single number or a comma-seperated list of numbers
	
				$messages =  "Your verification otp for CelNow is $randCode";

				$apiKey = urlencode('NWE1MTUzNGE3NjU4NDczNTMxNzk2ODMwMzQ0ODczNGY=');

				$numbers = array($numberss);
				$sender = urlencode('CELNOW');
				$message = rawurlencode($messages);

		    	$numbers = implode(',', $numbers);
	
	
				$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
	
				// Send the POST request with cURL
				// $ch = curl_init('https://api.textlocal.in/send/');
				// curl_setopt($ch, CURLOPT_POST, true);
				// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				// $response = curl_exec($ch);
				// //print_r($response);
	
				// curl_close($ch);
			}
			}

			$message = $this->input->post('message');
		
			$chat_exist = $this->user->checkchatlist($sender_id, $receiver_id, $product_id, $category_id);
			if (!empty($chat_exist)) {

				$chat_list = array('message' => $message);
				$this->chat_model->update($chat_list, $sender_id, $receiver_id);
				$chat_list = array('message'=>$message, 'read'=>0,  "updated"=>date("Y-m-d H:i:s"));
				$chat_lisst1 = array('sender_id' => $sender_id,'receiver_id' => $receiver_id, 'product_id'=>$product_id);
				$chat_lisst2 = array('sender_id' => $receiver_id,'receiver_id' => $sender_id, 'product_id'=>$product_id);
				$this->db->update('chat_list', $chat_list, $chat_lisst1);
				$this->db->update('chat_list', $chat_list, $chat_lisst2);    
				
			} else {
				
				$chat_list = array('sender_id' => $sender_id, 'receiver_id' => $receiver_id, 'product_id' => $product_id, 'category_id' => $category_id, 'message' => $message);
				$this->db->insert('chat_list', $chat_list);
			
				//echo "here";
			}
			$user_id = get_subscribersdetail($receiver_id);

			if((!empty($user_id))){
				$this->website_notification($sender_id, $receiver_id, $product_id, $category_id,$message);
			}
			

			$chat = array('sender_id' => $sender_id, 'receiver_id' => $receiver_id, 'product_id' => $product_id, 'category_id' => $category_id, 'message' => $message);
			$inser_id = $this->chat_model->insert($chat);

	
			$this->db->update('chat', array('status' => 1), array('id' => $inser_id));

			

			$chat_list = $this->chat_model->chatlist($session_id);

			$chat = $this->user->getuserallchat($sender_id, $receiver_id);


			$pro = "";

			foreach ($chat as $key => $chatmessages) {


				if ($chatmessages['sender_id'] != $_SESSION['id']) {

					/*$data = array('read_status'=>1);

							   $updated =  $this->chat_model->updateunreadmessage($data,$chatmessages['sender_id'],$_SESSION['id']);*/

					//$pro .= $updated;

					$pro .= '<li class="left">
                                            
                                            <span class="avatar available tooltips" data-toggle="tooltip " data-placement="right" data-original-title="Yanique Robinson">
                                                <img src="'.base_url("assets/images/Asset_1@2x-8.png").'" alt="avatar" class="img-circle ">
                                            </span>
                                            <div class="body">   
                                                <div class="message well well-sm">
                                                    ' . $chatmessages['message'] . '
                                                </div>
                                            </div>
                                        </li>';




				} else {



					$pro .= '<li class="right">
                                          
                                            <span class="avatar tooltips" data-toggle="tooltip " data-placement="left" data-original-title="Kevin Mckoy">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar" class="img-circle rounded-5">
                                            </span>
                                            <div class="body">   
                                                <div class="message well well-sm">
                                                    ' . $chatmessages['message'] . '

                                                </div>
                                               
                                                
                                            </div>
                                        </li>';



				}





			}

			echo $pro;

			/*return redirect('welcome/chat');*/

			/*$this->load->view('front/header',['user'=>$user_detail,'sender_id'=>$sender_id,'receiver_id'=>$receiver_id,'chat_list'=>$chat_list,'chat'=>$chat]);
						   $this->load->view('front/chat_list',['user'=>$user_detail,'sender_id'=>$sender_id,'receiver_id'=>$receiver_id,'chat_list'=>$chat_list,'chat'=>$chat]);
						   $this->load->view('front/footer');*/

		} else {

			return redirect('welcome');
		}
	}

	public function loadchat()
	{

		$id = $this->uri->segment(3);
		$session_id = $this->session->userdata('id');
		if ($session_id) {

			// $product = $this->product_model->getproduct($id);
			//echo $this->db->last_query();
			$user_detail = $this->user->loginuser($session_id);
			$sender_id = $this->input->post('sender_id');
			$receiver_id = $this->input->post('receiver_id');
			$product_id = $this->input->post('product_id');
			$load_cound = $this->input->post('load_cound');





			if ($category_id == 1) {
				$profile = get_mobile_data($product_id);
			} else if ($category_id == 2) {
				$profile = get_tution_data($product_id);
			} else if ($category_id == 3) {
				$profile = get_job_data($product_id);
			} else if ($category_id == 4) {
				$profile = get_internship_data($product_id);
			}else if ($category_id == 5) {
				$profile = get_commericial_data($product_id);
			}else if ($category_id == 6) {
				$profile = get_residential_data($product_id);
			}else if ($category_id == 7) {
				$profile = get_land_plot_data($product_id);
			}



			$chat = $this->user->loadchat($sender_id, $receiver_id, $load_cound, $product_id, $category_id);

			$pro = "";

			foreach ($chat as $key => $chatmessages) {

				//print_r($chatmessages);
				if ($chatmessages['sender_id'] != $_SESSION['id']) {


					$data = array('read_status' => 1);

					$updated = $this->chat_model->updateunreadmessage($data, $chatmessages['sender_id'], $_SESSION['id']);


					//echo $this->db->last_query();

					//$pro .= $updated;


					$pro .= '<li class="left">
                                            
                                            <span class="avatar available tooltips" data-toggle="tooltip" data-placement="right" data-original-title="Yanique Robinson">
                                                <img width=30 height=30 src="' . ($profile->thumbnails) . '" alt="avatar" class="img-circle rounded-5">
                                            </span>
                                            <div class="body">   
                                                <div class="message well well-sm">
                                                    ' . $chatmessages['message'] . '
                                                </div>
                                            </div>
                                        </li>';




				} else {



					$pro .= '<li class="right">
                                          
                                            <span class="avatar tooltips" data-toggle="tooltip " data-placement="left" data-original-title="Kevin Mckoy">
                                                <img width=30 height=30 src="' . ($profile->thumbnails) . '" alt="avatar" class="img-circle rounded-5">
                                            </span>
                                            <div class="body">   
                                                <div class="message well well-sm">
                                                    ' . $chatmessages['message'] . '

                                                </div>
                                                <div class="clearfix"></div>
                                                
                                            </div>
                                        </li>';



				}



			}

			echo $pro;



		} else {

			return redirect('welcome');
		}
	}


	public function subscribe(){

		$this->form_validation->set_rules('email_newsletter', 'email', 'required|valid_email');
		$this->form_validation->set_error_delimiters('<span class="validate-has-error">', '</span>');

		if ($this->form_validation->run()) {
			$email =  $this->input->post('email_newsletter');
				 $post_data = array( 'email_newsletter'=>$email);
			 $sent=   $this->db->insert('newsletter',$post_data);
			 
			$this->load->view('front/header');
			$this->load->view('front/Home');
			$this->load->view('front/footer');
		} else {	
			 $this->load->view('front/header');
			$this->load->view('front/Home');
			$this->load->view('front/footer');
	   }
   		  
    }

   public function notification_chat($category_id,$receiver_id,$product_id,$sender_id)
	{
		$session_id = $this->session->userdata('id');
		if ($session_id) {
			$message = "";
			$user_detail = $this->user->loginuser($session_id);
		
		
			$chat_list = $this->chat_model->chatlist($session_id);
			if (!empty($this->input->post('sender_id')) && $this->input->post('receiver_id')) {
				$chat_exist = $this->user->checkchatlist($sender_id, $receiver_id, $product_id, $category_id);
				if (empty($chat_exist)) {
					$chat_list = array('sender_id' => $sender_id, 'receiver_id' => $receiver_id, 'product_id' => $product_id, 'category_id' => $category_id, 'updated' => date("Y-m-d H:i:s"));
					$this->db->insert('chat_list', $chat_list);
				
				} 
			}
			if (!empty($message)) {
				$chat = array('sender_id' => $sender_id, 'receiver_id' => $receiver_id, 'product_id' => $product_id, 'category_id' => $category_id, 'message' => $message);
				$this->chat_model->insert($chat);
			}
			$chat_list = $this->chat_model->chatlist($session_id);
			if (!empty($this->input->post('sender_id')) && $this->input->post('receiver_id')) {

				$chat = $this->user->getuserallchat($sender_id, $receiver_id, $product_id, $category_id);

			} else {
				$chat = null;
			}
			$this->load->view('front/header', ['user' => $user_detail, 'receiver_id' => $receiver_id, 'sender_id' => $sender_id, 'chat_list' => $chat_list, 'chat' => $chat]);
			$this->load->view('front/chat_list', ['user' => $user_detail, 'sender_id' => $sender_id, 'receiver_id' => $receiver_id, 'product_id' => $product_id, 'category_id' => $category_id, 'chat_list' => $chat_list, 'chat' => $chat]);
			$this->load->view('front/footer');
		} else {
			return redirect('welcome/newhome');
		}
	}

	protected function sendMessage($keys_auth, $notification_data, $title, $image, $url) {
	// here I'll get the subscription endpoint in the POST parameters
	// but in reality, you'll get this information in your database
	// because you already stored it (cf. push_subscription.php)
	// $subscription = Subscription::create(json_decode(file_get_contents('php://input'), true));
	$subscription = Subscription::create($keys_auth);
	$auth = array(
		'VAPID' => array(
		'subject' => 'Some Subjet here',
		'publicKey' => file_get_contents(APPPATH . './../keys/public_key.txt'), // don't forget that your public key also lives in app.js
		'privateKey' => file_get_contents(APPPATH . './../keys/private_key.txt'), // in the real world, this would be in a secret file
		),
	);
	$webPush = new WebPush($auth);
	$options = array(
		'title' => "$title",
		'body' => "$notification_data",
		'icon' => base_url().'/uploads/profile/notifitions_icon.png',
		'badge' => base_url().'assets/images/CelNow 5 1.png',
		'image' => $image,
		'url' =>  $url,
	);
	$report = $webPush->sendOneNotification(
		$subscription,
		json_encode($options)
	);
	// handle eventual errors here, and remove the subscription from your server if it is expired
	$endpoint = $report->getRequest()->getUri()->__toString();
	if ($report->isSuccess()) {
		return "[v] Message sent successfully for subscription {$endpoint}.";
	} else {
		return "[x] Message failed to sent for subscription {$endpoint}: {$report->getReason()}";
	}
	}
	public function website_notification($sender_id, $receiver_id, $product_id, $category_id,$message){
		if($category_id == 1){
		$pro = get_mobile_data($product_id);
		$product_name = $pro->title;
		}else if($category_id == 2){
		$pro = get_tution_data($product_id);
		$product_name = $pro->title;
		}else if($category_id == 3){
		$pro = get_job_data($product_id);
		$product_name = $pro->title;
		}else if($category_id == 4){
		$pro = get_internship_data($product_id);
		$product_name = $pro->title;
		}else if($category_id == 5){
		$pro =get_residential_data($product_id);
		$product_name = $pro->title;
		}else if($category_id == 6){
		$pro =get_commericial_data($product_id);
		$product_name = $pro->title;
		}else if($category_id == 7){
		$pro =get_land_plot_data($product_id);
		$product_name = $pro->title;
		}
		
		$user_name = get_userdetail($sender_id);
		
	
			$messages = array();
			$notification_data = "Product Name: " . $product_name. "\n";
			$notification_data .= "Message: " . $message;
			$title = $user_name->name ;
			$image = base_url().'assets/images/CelNow 5 1.png';
			$query = $this->main_model->get_data_user('subscribers',$receiver_id)->result();
          
			foreach($query as $row) {
			$keys_auth = array(
				"contentEncoding" => "aesgcm",
				"endpoint" => $row->endpoint,
				"keys" => array(
					"auth" => $row->auth,
					"p256dh" => $row->p256dh
				)
			);
			$url = base_url().'welcome/chat/'.$category_id;

			echo '<form id="chatForm" action="' . $url . '" method="post">';
			echo '  <input type="text" name="sender_id" value="' . $sender_id . '">';
			echo '  <input type="hidden" name="receiver_id" value="' . $receiver_id . '">';
			echo '  <input type="hidden" name="product_id" value="' . $product_id . '">';
			echo '  <input type="hidden" name="category_id" value="' . $category_id . '">';
			echo '</form>';
			echo '<script>';
			echo '  var urlElement = document.createElement("a");';
			echo '  urlElement.href = "' . $url . '";';
			echo '  urlElement.textContent = "Click to open chat";';
			echo '  urlElement.style.display = "none";';
			echo '  urlElement.onclick = function() {';
			echo '    document.getElementById("chatForm").submit();';
			echo '  };';
			echo '  document.body.appendChild(urlElement);';
			echo '</script>';

			$msg = $this->sendMessage($keys_auth, $notification_data, $title, $image, $url);
			$messages['msg'] = $msg;
			}
	} 
      /* ------------------------------------------ Web Push Notifications ---------------------------------------------------- */
	                        
	public function push_subscription() {
        $subscription = json_decode(file_get_contents('php://input'), true); // for PHP 7
        $_POST = $subscription;
        if (!isset($subscription['endpoint'])) {
          echo 'Error: not a subscription';
          return;
        }
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
          case 'POST':
            // create a new subscription entry in your database (endpoint is unique)
            //filter out bad data
            $myQuery = $this->db->query("SELECT * FROM subscribers WHERE endpoint = '".$this->input->post('endpoint')."'");
			
            try{
              $result = $myQuery->result();
              if(empty($result)) {
                $insert_data = array(
                  'endpoint' => $this->input->post('endpoint'),
                  'auth' => $this->input->post('authToken'),
                  'p256dh' => $this->input->post('publicKey'),
				  'user_id' => $this->session->userdata('id'),
                );

				$session_id = $this->session->userdata('id');
				$user_id = get_subscribersdetail($session_id);
				if((empty($user_id))){
					$this->main_model->insert('subscribers', $insert_data);
				}
				else{
					$this->main_model->update_token($session_id, $insert_data);
				}
              }
            }
            catch(Exception $error) {
              echo 'Sorry there has been an error processing your request!';
            }
            break;
    
          case 'DELETE':
            // delete the subscription corresponding to the endpoint
            $myQuery = $this->db->query("SELECT * FROM subscribers WHERE endpoint = '".$this->input->post('endpoint')."'");
            try{
              $result = $myQuery->result();
              if(!empty($result[0]->id)) {
                if ($this->main_model->delete_record('subscribers', $result[0]->id)) {
                  echo 'Unsubscribtion successful.';
                } else {
                  echo 'Sorry there is some problem.';
                }
              }
            }
            catch(Exception $error) {
              echo 'Sorry there has been an error processing your request!';
            }
            break;
          default:
            echo "Error: method not handled";
            return;
        }
     }
	public function send_push_notification() {
	// here I'll get the subscription endpoint in the POST parameters
	// but in reality, you'll get this information in your database
	// because you already stored it (cf. push_subscription.php)
	$query = $this->main_model->get_data('subscribers')->result();
	
	foreach($query as $row) {
		$notification_data = array(
		"contentEncoding" => "aesgcm",
		"endpoint" => $row->endpoint,
		"keys" => array(
			"auth" => $row->auth,
			"p256dh" => $row->p256dh
			)
		);
		// $subscription = Subscription::create(json_decode(file_get_contents('php://input'), true));
		$subscription = Subscription::create($notification_data);
		$auth = array(
		'VAPID' => array(
			'subject' => 'PHP Codeigniter Web Push Notification',
			'publicKey' => file_get_contents(APPPATH . './../keys/public_key.txt'), // don't forget that your public key also lives in app.js
			'privateKey' => file_get_contents(APPPATH . './../keys/private_key.txt'), // in the real world, this would be in a secret file
		),
		);
		$webPush = new WebPush($auth);
		$options = [
		'title' => 'کمپلهای ترکی اصلی',
		'body' => 'DEM Online Shopping',
		'icon' => 'assets/img/dem_logo.png',
		'badge' => 'assets/img/dem_logo.png',
		'url' => 'https://localhost/dem.af/shop'
		];
		$report = $webPush->sendOneNotification(
		$subscription,
		json_encode($options)
		);
		// handle eventual errors here, and remove the subscription from your server if it is expired
		$endpoint = $report->getRequest()->getUri()->__toString();
		if ($report->isSuccess()) {
		echo "[v] Message sent successfully for subscription {$endpoint}.";
		} else {
		echo "[x] Message failed to sent for subscription {$endpoint}: {$report->getReason()}";
		}
	}
	}

	  public function getlodechatlist() {
		$session_id = $this->session->userdata('id');
		$sender_id = $session_id; 
		$receiver_id = $session_id;
		echo '<div>';
		echo '<div class="slimScrollDiv" id="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 550px;">';
		echo '<div class="chat-list-wrapper" style="overflow-y: auto; width: auto; height: 550px;">';
		echo '<ul class="chat-list" id="chat_list">';
		$chat_list = get_all_chat_list($sender_id);
		if (!empty($chat_list)) {
			foreach ($chat_list as $key => $chat_per) {

				$get_last_chat_row = get_last_chat_row($chat_per->category_id,$chat_per->product_id,$chat_per->sender_id,$chat_per->receiver_id,);
               
				if ($chat_per->category_id == 1) {
					$profile = get_mobile_data($chat_per->product_id);
				} else if ($chat_per->category_id == 2) {
					$profile = get_tution_data($chat_per->product_id);
				} else if ($chat_per->category_id == 3) {
					$profile = get_job_data($chat_per->product_id);
				} else if ($chat_per->category_id == 4) {
					$profile = get_internship_data($chat_per->product_id);
				} else if ($chat_per->category_id == 5) {
					$profile = get_commericial_data($chat_per->product_id);
				} else if ($chat_per->category_id == 6) {
					$profile = get_residential_data($chat_per->product_id);
				} else if ($chat_per->category_id == 7) {
					$profile = get_land_plot_data($chat_per->product_id);
				}
	
				if ($chat_per->sender_id != $_SESSION['id']) {
					$username = get_user_phone($chat_per->sender_id);
				} elseif ($chat_per->receiver_id != $_SESSION['id']) {
					$username = get_user_phone($chat_per->receiver_id);
				}
	
				echo '<li  class="new' . ($username->user_id) . ($profile->id) . '"';
				$chat_list_color_product_id = $this->session->userdata('chat_list_color_product_id');
				$chat_list_color_user_id = $this->session->userdata('chat_list_color_user_id');
				if ("new" . $chat_list_color_user_id . $chat_list_color_product_id == "new" . ($username->user_id) . ($profile->id)) {
					echo '';
				}
				echo ' onclick="redirectDiv(); getchat(' . $username->user_id . ', ' . $_SESSION['id'] . ', ' . $profile->id . ', ' . $profile->category_id . ');">';
				echo '<span class="avatar available">';
				echo '<img src="' . base_url() . $profile->cover_img . '" class="img-circle rounded-5">';
				echo '</span>';
				echo '<div class="body">';
				echo '<div class="header">';
				echo '<div class="row">';
				echo '<div class="col-9"';
				if ($get_last_chat_row !== null) {
					$read_status = $get_last_chat_row->read_status;
					$sender_id = $get_last_chat_row->sender_id;
				} else {
					$read_status = 1;
					$sender_id = 0;
				}
				
				if ($read_status == 0 && $sender_id !== $session_id) {
					echo 'style="color: #000;"';
				} else {
					echo 'style="color: #000000c2;"';    
				}
				echo '>';
				echo '<span class="username">';
				$description = $profile->title;
				if (strlen($description) <= 13) {
					echo ucfirst($description);
				} else {
					$y = substr($description, 0, 13) . '...';
					echo ucfirst($y);
				} 
				echo '</span><br>';
				echo '<span class="username">';
				if (!empty($username->name)) {
					echo ucfirst($username->name);
				} else {
					echo ucfirst($username->phone);
				}
				echo '</span>';
				echo '</div>';
				echo '<div class="col-3">';
				if ($get_last_chat_row !== null) {
					$read_status = $get_last_chat_row->read_status;
					$sender_id = $get_last_chat_row->sender_id;
				} else {
					$read_status = 1;
					$sender_id = 0;
				}
				
				if ($read_status == 0 && $sender_id !== $session_id) {
				echo '<span class="fs-3">&#x2022;</span>';
		     	}
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</li>';
			}
		} else if (!empty($chat)) {
			$username = get_user_phone($receiver_id);
	
				echo '<li class="new' . ($username->user_id) . ($profile->id) . '"';
			
			echo ' onclick="return getchat(' . $username->user_id . ', ' . $_SESSION['id'] . ');"';
			echo ' style="padding: 45px 20px;">';
			echo '<span class="avatar available">';
			// echo '<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar" class="img-circle">';
			echo '</span>';
			echo '<div class="body">';
			echo '<div class="header" style="color: #000000c2;">';
			echo '<span class="username">';
		      	$description = $user->username;
					$spacePosition = strpos($description, ' ');
					if ($spacePosition === false) {
						echo ucfirst($description);
					} else {
						$y = substr($description, 0, $spacePosition);
						echo ucfirst($y);
					}
			echo '</span>';
			echo '</div>';
		
			echo '</div>';
			echo '</li>';
		} else {
			echo "<h4 style='padding-top:30px;text-align: center;' >No Chat Found</h4>";
		}
	
		echo '</ul>';
		echo '</div>';
		echo '<div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 478.639px; background: rgb(0, 0, 0);"></div>';
		echo '<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	
}