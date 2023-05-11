<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	 public function __construct() { 
        parent::__construct();
		
		//load user model
		//load user model
         $this->load->helper('url');
		 $this->load->helper('user_helper');

		 $this->load->model('user');
		 $this->load->model('product_model');
		 $this->load->library('form_validation');
		 $this->load->library('session');

        
    }

	public function index()
	{
		$session_id = $this->session->userdata('id');
		
		 $user_detail = $this->user->loginuser($session_id);
		
		 if(!empty($user_detail)){
		$this->load->view('front/header',['user'=>$user_detail]);
		$this->load->view('front/Home',['user'=>$user_detail]);
		$this->load->view('front/footer');
		 }
		 else{
			$this->load->view('front/header');
		$this->load->view('front/Home');
		$this->load->view('front/footer');
		 }
	}

	public function login()
	{
		$this->form_validation->set_rules('phone',' phone','required|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('password',' password','required|min_length[6]');
		$this->form_validation->set_error_delimiters('<span class="validate-has-error">', '</span>');

		if ($this->form_validation->run()){
			$phone = $this->input->post("phone");
			$password =md5($this->input->post("password"));
			if(is_user_exists($phone)){
				$data["email"] = $this->input->post("email");
				$data["password"] = md5($this->input->post("password"));
				  $udata = $this->db->get_where("users", ["phone"=>$phone])->row();
				
				  $otp = $udata->OTP;
				  if($password == $udata->password){
				
					if($udata->otp_verify == 0){

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
						$messages = "You verification otp for PAHADi UNCLE is " . $randCode;
			
						$apiKey = urlencode('oOv9+8ZfoYQ-WClf1g8whULjat1OIPYMh98Xpy0471');
			
						$numbers = array($phone);
						$sender = urlencode('UPAHAD');
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
						return redirect('welcome/otp');
		
				  }
				  $length = 50;
				  $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
				  $count = mb_strlen($chars);
			  
				  for ($i = 0, $result = ''; $i < $length; $i++) {
					  $index = rand(0, $count - 1);
					  $result .= mb_substr($chars, $index, 1);
				  }
				  $data=array(
				  'social_id_token'=>$result
				  );
			  $this->db->where('phone',$udata->phone);
			  $this->db->update('users',$data); 
				  $this->session->set_userdata('id',$udata->user_id);
				return redirect('welcome');
				}
				else{
					$this->session->set_flashdata('Login_failed', 'Password wrong');
				$this->session->set_flashdata('msg_class', 'alert-danger');
	
				$this->load->view('front/header', ['success' => true]);
				$this->load->view('front/login', ['success' => true]);
				$this->load->view('front/footer');
				}
				
			}
			else{
				$this->session->set_flashdata('Login_failed', 'This number is not register');
				$this->session->set_flashdata('msg_class', 'alert-danger');
	
				$this->load->view('front/header', ['success' => true]);
				$this->load->view('front/login', ['success' => true]);
				$this->load->view('front/footer');
			}
		}
		else{
			$this->load->view('front/header');
			$this->load->view('front/login');
			$this->load->view('front/footer');
		}
		
        
		
	}

	public function logout()
  {
      $u_rec_id = $this->session->userdata('id');
      
        $data=array(
                'social_id_token'=>''
                        );
                    $this->db->where('user_id',$u_rec_id);
                    $this->db->update('users',$data); 
       
        
     $id = $this->session->unset_userdata('id');
	 session_destroy();
    
    $this->session->set_flashdata('logut_success','You are succesfully loged out');
    return redirect('welcome');
  }
	public function signup()
	{
		
		
            $this->form_validation->set_rules('email',' email','required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('name',' name','required');
			$this->form_validation->set_rules('phone',' phone','required|min_length[10]|max_length[10]|is_unique[users.phone]');
           $this->form_validation->set_rules('password',' password','required|min_length[6]');
		   $this->form_validation->set_rules('confirmpassword',' confirmpassword','required|matches[password]');
            $this->form_validation->set_error_delimiters('<span class="validate-has-error">', '</span>');
            if ($this->form_validation->run('login') == FALSE)
            {
				$this->load->view('front/header');
				$this->load->view('front/signup');
				$this->load->view('front/footer');
            }
            else
            {

				$name= $this->input->post('name');
				
			   $email =  $this->input->post('email');
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
            $messages = "You verification otp for PAHADi UNCLE is " . $randCode;

            $apiKey = urlencode('oOv9+8ZfoYQ-WClf1g8whULjat1OIPYMh98Xpy0471');

            $numbers = array($phone);
            $sender = urlencode('UPAHAD');
            $message = rawurlencode($messages);

            $numbers = implode(',', $numbers);

            $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

            // Send the POST request with cURL
            $ch = curl_init('https://api.textlocal.in/send/');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            //print_r($response);

            curl_close($ch);

			   $post_data = array('name'=> $name, 'email'=>$email,'password'=> md5($password),'phone'=>$phone, 'OTP'=>$randCode ,'login_type'=>'normal','social_id_token'=>$result);
			   $this->db->insert('users',$post_data);


			   $this->load->view('front/header', ['success' => true]);
			   $this->load->view('front/otp',['phone'=>$phone]);
			   $this->load->view('front/footer');
              // return redirect('welcome/otp',['phone'=>$phone]);
            }
       
	}
	public function forgotpassword()
	{

		$this->form_validation->set_rules('phone',' phone','required|min_length[10]|max_length[10]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run())
		{
			$phone = $this->input->post('phone');
			$udata = $this->db->get_where("users", ["phone"=>$phone])->row();
			if(is_user_exists($phone)){
			$size = 4;
            $alpha_key = '';
            $keys = range('0', '9');
            for ($i = 0; $i < 4; $i++) {
              $alpha_key .= $keys[array_rand($keys)];
            }
            $randCode = $alpha_key;
            $numberss = "91" . $phone; // A single number or a comma-seperated list of numbers
            $messages = "You verification otp for PAHADi UNCLE is " . $randCode;

            $apiKey = urlencode('oOv9+8ZfoYQ-WClf1g8whULjat1OIPYMh98Xpy0471');

            $numbers = array($phone);
            $sender = urlencode('UPAHAD');
            $message = rawurlencode($messages);

            $numbers = implode(',', $numbers);

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
			return redirect('welcome/forgotpasswordotp');
		}else{
			$this->session->set_flashdata('Login_failed', 'This number is not register');
				$this->session->set_flashdata('msg_class', 'alert-danger');
	
				$this->load->view('front/header', ['success' => true]);
				$this->load->view('front/forgotpassword', ['success' => true]);
				$this->load->view('front/footer');
		}

			
		}
		else{
			$this->load->view('front/header');
			$this->load->view('front/forgotpassword');
			$this->load->view('front/footer');
		}
		
	}

	public function resendotp()
	{

		$this->form_validation->set_rules('phone',' phone','required|min_length[10]|max_length[10]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run())
		{
			$phone = $this->input->post('phone');
			$udata = $this->db->get_where("users", ["phone"=>$phone])->row();
			if(is_user_exists($phone)){
			$size = 4;
            $alpha_key = '';
            $keys = range('0', '9');
            for ($i = 0; $i < 4; $i++) {
              $alpha_key .= $keys[array_rand($keys)];
            }
            $randCode = $alpha_key;
            $numberss = "91" . $phone; // A single number or a comma-seperated list of numbers
            $messages = "You verification otp for PAHADi UNCLE is " . $randCode;

            $apiKey = urlencode('oOv9+8ZfoYQ-WClf1g8whULjat1OIPYMh98Xpy0471');

            $numbers = array($phone);
            $sender = urlencode('UPAHAD');
            $message = rawurlencode($messages);

            $numbers = implode(',', $numbers);

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
			return redirect('welcome/forgotpasswordotp');
		}else{
			$this->session->set_flashdata('Login_failed', 'This number is not register');
				$this->session->set_flashdata('msg_class', 'alert-danger');
	
				$this->load->view('front/header', ['success' => true]);
				$this->load->view('front/forgotpassword', ['success' => true]);
				$this->load->view('front/footer');
		}

			
		}
		else{
			$this->load->view('front/header');
			$this->load->view('front/forgotpassword');
			$this->load->view('front/footer');
		}
		
	}

	public function forgotpasswordotp()
	{
		$this->form_validation->set_rules('otp','otp','required');
		$this->form_validation->set_rules('password',' password','required|min_length[6]');
		$this->form_validation->set_rules('confirmpassword',' confirmpassword','required|matches[password]');
		$this->form_validation->set_error_delimiters('<span class="validate-has-error">', '</span>');
		if($this->form_validation->run())
	      {
			$otp =  $this->input->post('otp');
			$password = $this->input->post('password');
			$confirm_password = $this->input->post('confirm_password');
			$login_id=$this->user->validateotp($otp);

			if($login_id)
			{
				
				$this->db->where('phone',$login_id['phone']);
				$data=array(
			   'password'=> md5($password),
			   );
			   $this->db->update('users',$data);
			   return redirect('welcome');
			}
			else
			{
			   $this->session->set_flashdata('OTP_failed','Invalid OTP');
			   $this->session->set_flashdata('msg_class','alert-danger');
			  
			 $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			 $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			 $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			 $this->output->set_header('Pragma: no-cache');
			  $this->load->view('front/header',['success'=>true]);
			$this->load->view('front/changepassword');
			  $this->load->view('front/footer');
			}
		  }
		  else{
			$this->load->view('front/header');
			$this->load->view('front/changepassword');
			$this->load->view('front/footer');
		  }
		
	}

	public function changepassword()
	{

		$session_id = $this->session->userdata('id');
     
       if($session_id)
       {
		//$myproduct = $this->product_model->myproduct($session_id);

		 $user_detail = $this->user->loginuser($session_id);
		$this->form_validation->set_rules('oldpassword','otp','required');
		$this->form_validation->set_rules('password',' password','required|min_length[6]');
		$this->form_validation->set_rules('confirmpassword',' confirmpassword','required|matches[password]');
		$this->form_validation->set_error_delimiters('<span class="validate-has-error">', '</span>');
		if($this->form_validation->run())
	      {
			$oldpass = md5( $this->input->post('oldpassword'));
			$password = $this->input->post('password');
			$confirm_password = $this->input->post('confirm_password');
			$login_id=$this->user->validatepass($oldpass);

			if($login_id)
			{
				
				$this->db->where('phone',$login_id['phone']);
				$data=array(
			   'password'=> md5($password),
			   );
			   $this->db->update('users',$data);
			  
			   $this->session->set_flashdata('password_success','Password change successfully');
			   $this->session->set_flashdata('msg_class','alert-success');
			  
			 $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			 $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			 $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			 $this->output->set_header('Pragma: no-cache');
			  $this->load->view('front/header',['success'=>true,'user' => $user_detail]);
			$this->load->view('front/change_password');
			  $this->load->view('front/footer');
			}
			else
			{
			   $this->session->set_flashdata('password_error','Invalid Password');
			   $this->session->set_flashdata('msg_class','alert-danger');
			  
			 $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			 $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			 $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			 $this->output->set_header('Pragma: no-cache');
			  $this->load->view('front/header',['success'=>true,'user' => $user_detail]);
			$this->load->view('front/change_password');
			  $this->load->view('front/footer');
			}
		  }
		  else{
			$this->load->view('front/header',['success'=>true,'user' => $user_detail]);
			$this->load->view('front/change_password');
			$this->load->view('front/footer');
		  }
		}
		else{
		  $this->load->view('front/header');
		  $this->load->view('front/change_password');
		  $this->load->view('front/footer');
		}
		
	}

	public function otp()
	{

		$this->form_validation->set_rules('otp','otp','required');
	    
	    $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
	 
	  
	      if($this->form_validation->run())
	      {
	      
	       $verify_otp=$this->input->post('otp');

	       $login_id=$this->user->validateotp($verify_otp);
	      

	       if($login_id)
	       {
	           $log = $login_id["user_id"];
			   $this->session->set_userdata('id',$log);
				$this->db->update("users", ["otp_verify"=>1], ["phone"=>$login_id['phone']]);
              return redirect('welcome');
	       }
	       else
	       {
	          $this->session->set_flashdata('OTP_failed','Invalid OTP');
	          $this->session->set_flashdata('msg_class','alert-danger');
	         
            $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
            $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
            $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
            $this->output->set_header('Pragma: no-cache');
	         $this->load->view('front/header',['success'=>true]);
           $this->load->view('front/otp');
			 $this->load->view('front/footer');
	       }
	      }
	      else
	      {
			$this->load->view('front/header');
			$this->load->view('front/otp');
			$this->load->view('front/footer');
	      
        }
		
	}
	public function fillter_product()
	{
		$this->load->view('front/header');
		$this->load->view('front/fillter');
		$this->load->view('front/footer');
	}

	public function shop()
	{
		$session_id = $this->session->userdata('id');
      
       if($session_id)
       {
		//$myproduct = $this->product_model->myproduct($session_id);

		 $user_detail = $this->user->loginuser($session_id);
   
			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
				$this->load->view('front/header',['user'=>$user_detail]);
				$this->load->view('front/shop',['user'=>$user_detail]);
				$this->load->view('front/footer');
			
			}else{
				$this->load->view('front/header');
					$this->load->view('front/login');
					$this->load->view('front/footer');
			}


	}

	public function addshop()
	{
		
		$name=$this->input->post('name');
		$email = $this->input->post('email');
		$user_id = $this->input->post('user_id');
	    $shop_category = $this->input->post('shop_category');
	    $mobile = $this->input->post('mobile');
		$open_close_time = $this->input->post('open_close_time');
		$service_type = $this->input->post('service_type');
        $Address = $this->input->post('Address');
        $GST = $this->input->post('GST');
		$description = $this->input->post('description');

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

		$post_data = array('name'=> $name, 'email'=>$email,'user_id'=> $user_id,'mobile'=>$mobile, 'shop_category_id'=>$shop_category, 'Address'=>$Address ,'GST'=>$GST,'description'=> $description , 'shop_images'=> $filename,'service_type'=>$service_type,'open_close_time' => $open_close_time);
	
		$this->db->insert('shop',$post_data);

		return redirect('welcome/shop');
			}
		}
	}


	public function editshop()
  
	{  
		$name=$this->input->post('name');
		$email = $this->input->post('email');
		$user_id = $this->input->post('user_id');
	    $shop_category = $this->input->post('shop_category');
	    $mobile = $this->input->post('mobile');
        $Address = $this->input->post('Address');
        $GST = $this->input->post('GST');
		$open_close_time = $this->input->post('open_close_time');
		$service_type = $this->input->post('service_type');
		$description = $this->input->post('description');
		$id=$this->input->post('id');
  
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

					$post_data = array('name'=> $name, 'email'=>$email,'user_id'=> $user_id,'mobile'=>$mobile, 'shop_category_id'=>$shop_category, 'Address'=>$Address ,'GST'=>$GST,'description'=> $description, 'shop_images'=> $filename,'service_type'=>$service_type,'open_close_time' => $open_close_time,'admin_approval'=>0);

  
					   $this->db->update("shop", $post_data, "id=$id");
					   
					   return redirect('welcome/shop');
					  }
					}
	}


	public function buyerprofile()
	{
		$session_id = $this->session->userdata('id');
      
       if($session_id)
       {
		              //$myproduct = $this->product_model->myproduct($session_id);

		 $user_detail = $this->user->loginuser($session_id);
   
			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
				$this->load->view('front/header',['user'=>$user_detail]);
				$this->load->view('front/buyerprofile',['user'=>$user_detail]);
				$this->load->view('front/footer');
			
       }else{
        
            return redirect('welcome');
       }


	}

	public function myprofile()
	{
		$session_id = $this->session->userdata('id');
      
       if($session_id)
       {
		//$myproduct = $this->product_model->myproduct($session_id);

		 $user_detail = $this->user->loginuser($session_id);
   
			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
				$this->load->view('front/header',['user'=>$user_detail]);
				$this->load->view('front/sellerprofile',['user'=>$user_detail]);
				$this->load->view('front/footer');
			
			}else{
        
            return redirect('welcome');
       }


	}

		public function updatesellerreg()
	{

			$name=$this->input->post('name');
			$Address=$this->input->post('Address');
			$user_id=$this->input->post('user_id');
			
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$aboutus=$this->input->post('aboutus');
					$seller = check_seller_profile($user_id);


				$userData['name'] = $name;
				$userData['Address'] = $Address;
				//$userData['user_id'] = $user_id;
			
		$userData['phone'] = $phone;
		$userData['aboutus'] = $aboutus;
		$userData['email'] = $email;
			
		$this->user->update($userData,$user_id);

				

		
					$userData['modified'] = date("Y-m-d H:i:s");

		
			$this->session->set_flashdata('regester_success','Seller profile Updated successfully');
			
			return redirect('welcome/myprofile');
	
	}

	public function postproduct()
	{
		$session_id = $this->session->userdata('id');
		if($session_id)
		{
		//$myproduct = $this->product_model->myproduct($session_id);

		$user_detail = $this->user->loginuser($session_id);

			$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
			$this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
			$this->output->set_header('Pragma: no-cache');
		$this->load->view('front/header',['user'=>$user_detail]);
		$this->load->view('front/postproduct',['user'=>$user_detail]);
		$this->load->view('front/footer');
		
		}else{
		
			return redirect('welcome');
		}

	}

  
     public function subcategorydropdown($id)
	 {
			$result = $this->db->where("category",$id)->get("subcategory")->result();
		//$data = $this->admin_model->get_record_where('subcategory',$id);
		
			echo json_encode($result);
     }

   public function uploadprofileimg(){  
      
	$user_id=$this->input->post('user_id');

       if (!empty($_FILES['profile_img']['name'])) {
                    $config['upload_path'] = './uploads/profile/';
                    // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
                    $config['allowed_types'] = '*';
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('profile_img')) {
                       
                    }else{

                        //---- Successfully upload than add member-----
                        $image_data = $this->upload->data();
                        $filename = $image_data['file_name'];

                     $this->db->update("users", ["profile_img"=>$filename], "user_id=$user_id");
                     
                     return redirect('welcome/myprofile');
                    }
                  }
    }


  public function termscondition()
  {

  $session_id = $this->session->userdata('id');
       
       if($session_id)
       {
            $user_detail = $this->user->loginuser($session_id);
		 $termscondition = $this->user->gettermscondition();

    $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
    $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
    $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
    $this->output->set_header('Pragma: no-cache');
             
    $this->load->view('front/header',['user'=>$user_detail]);
    $this->load->view('front/termscondition',['termscondition'=>$termscondition]);
    $this->load->view('front/footer');

       
       }else{
            $termscondition = $this->user->gettermscondition();
             $this->load->view('front/header');
    $this->load->view('front/termscondition',['termscondition'=>$termscondition]);
    $this->load->view('front/footer');
       }

   
   
  }

  public function savecontact(){

	 

	$userData['name'] = $this->input->post('name');
	$userData['user_id'] = $this->input->post('user_id');
	   $userData['description'] = $this->input->post('description');
	   $userData['email'] = $this->input->post('email');
	   $userData['mobile'] = $this->input->post('mobile');
   
	   $insert = $this->user->contactusinsert($userData);
   
   
	   $this->session->set_flashdata('msg','Request Sent Successfully');
	   $this->session->set_flashdata('msg_class','alert-success');
   
   
	  
	  return redirect('welcome');
   
	 
	 }


  public function aboutus()
  {

   $session_id = $this->session->userdata('id');
       
       if($session_id)
       {
            $user_detail = $this->user->loginuser($session_id);

             $aboutus = $this->user->getAboutus();
            
       $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
    $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
    $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
    $this->output->set_header('Pragma: no-cache');         
    $this->load->view('front/header',['user'=>$user_detail]);
    $this->load->view('front/aboutus',['aboutus'=>$aboutus]);
    $this->load->view('front/footer');
       }
       else{
            $aboutus = $this->user->getAboutus();
            $this->load->view('front/header');
    $this->load->view('front/aboutus',['aboutus'=>$aboutus]);
    $this->load->view('front/footer');
       }

   
  }
  public function privacypolicy()
  {

  
$session_id = $this->session->userdata('id');
       
       if($session_id)
       {
            $user_detail = $this->user->loginuser($session_id);
    $privacy = $this->user->getprivacypolicy();
             
    //   $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
    // $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
    // $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
    // $this->output->set_header('Pragma: no-cache');         
    $this->load->view('front/header',['user'=>$user_detail]);
    $this->load->view('front/privacypolicy',['privacy'=>$privacy]);
    $this->load->view('front/footer');
     }else{
    $privacy = $this->user->getprivacypolicy();
     $this->load->view('front/header');
    $this->load->view('front/privacypolicy',['privacy'=>$privacy]);
    $this->load->view('front/footer');
     }
   
  }

  public function productdetail()
  {
	$this->load->view('front/header');
    $this->load->view('front/verifyproductdetails');
    $this->load->view('front/footer');
  }

    public function saveproduct()
    {
   
      $category = $this->input->post('category');
      
       if($category == 1){ 
       $postData = array();
        $postData['title'] = $this->input->post('Title');
        $postData['user_id'] = $this->input->post('user_id');
        $postData['category_id'] = $this->input->post('category');
        $postData['subcategory_id'] = $this->input->post('subcategory');
        $postData['brand'] = $this->input->post('Product_Brand');
		$postData['Select_Type'] = $this->input->post('reusable_parts_Select_Type');
		if($postData['subcategory_id'] == 1 || $postData['subcategory_id'] == 2){
		$postData['type'] = $this->input->post('reusable_parts_product_Type');
		}
		else if($postData['subcategory_id'] == 3){
		$postData['type'] = $this->input->post('reusable_parts_Laptops_product_Type');
		}
	    else if($postData['subcategory_id'] == 4){
		$postData['type'] = $this->input->post('reusable_parts_computer_product_Type');
		}
		else if($postData['subcategory_id'] == 5){
		$postData['type'] = $this->input->post('reusable_parts_Electronics_product_Type');
		}
		else if($postData['subcategory_id'] == 16){
		$postData['type'] = $this->input->post('reusable_parts_Home_Appliances_product_Type');
		}
		else if($postData['subcategory_id'] == 6){
		$postData['type'] = $this->input->post('reusable_parts_Kitchen_Appliances_product_Type');
		}
		else if($postData['subcategory_id'] == 7){
		$postData['type'] = $this->input->post('reusable_parts_Automobiles_product_Type');
		}
		else if($postData['subcategory_id'] == 8){
		$postData['type'] = $this->input->post('reusable_parts_Furniture_product_Type');
		}
		else if($postData['subcategory_id'] == 9){
		$postData['type'] = $this->input->post('reusable_parts_Sports_product_Type');
		}
		else if($postData['subcategory_id'] == 10){
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
	   $table= "category_reusable_parts";
	   }
	


     	else if($category == 2){ 
		$postData = array();
		 $postData['title'] = $this->input->post('Title');
		 $postData['user_id'] = $this->input->post('user_id');
		 $postData['category_id'] = $this->input->post('category');
		 $postData['subcategory_id'] = $this->input->post('subcategory');
		 $postData['Tuitions_loction'] = $this->input->post('Tuitions_loction');
		 $postData['Education_Type'] = $this->input->post('Tuitions_Education_Type');
		 $postData['high_school'] = $this->input->post('school_eduction');
		 $postData['gender'] = $this->input->post('Tuitions_gender');
         $postData['Available_Timings'] = $this->input->post('Tuitions_Available_Timings');
		 $postData['price'] = $this->input->post('Tuitions_person_Fees');
		 if($postData['subcategory_id'] == 12){
			$postData['Years_Experience'] = $this->input->post('Tuitions_Years_Experience');
			$postData['Teachers_Qualifications'] = $this->input->post('Tuitions_Teachers_Qualifications');
			$postData['Positives_Outcomes'] = $this->input->post('Tuitions_Positives_Outcomes');
			$postData['Joining_criteria'] = $this->input->post('Tuitions_Joining_criteria');
		 }
		 else if($postData['subcategory_id'] == 13){
			$postData['Years_Experience'] = $this->input->post('Tuitions_Teachers_Experience');
			$postData['Teachers_Qualifications'] = $this->input->post('Tuitions_Teachers_type');
			$postData['Positives_Outcomes'] = $this->input->post('Tuitions_Requirements_Teachers');
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
		 $table=  "category_tuitions";
		}


		else if($category == 3){ 
			$postData = array();
			 $postData['title'] = $this->input->post('Title');
			 $postData['user_id'] = $this->input->post('user_id');
			 $postData['category_id'] = $this->input->post('category');
			 $postData['subcategory_id'] = $this->input->post('subcategory');
			 $postData['Job_Location'] = $this->input->post('Job_Location');
			 $postData['job_Office_Address	'] = $this->input->post('job_Office_Address');
			 $postData['Job_type'] = $this->input->post('Job_type');
			 if($postData['subcategory_id'] == 14){
				$postData['job_Experience'] = $this->input->post('job_Experience'); 
				$postData['price'] = $this->input->post('job_Experience');
				
			 }
			 else if($postData['subcategory_id'] == 15){
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
			 $table=  "category_job";
			}


		   else if($category == 4){ 
			    	$postData = array();
				 $postData['title'] = $this->input->post('Title');
				 $postData['user_id'] = $this->input->post('user_id');
				 $postData['category_id'] = $this->input->post('category');
				 $postData['subcategory_id'] = $this->input->post('subcategory');
				 $postData['Job_Location'] = $this->input->post('Job_Location');
				 $postData['job_Office_Address	'] = $this->input->post('job_Office_Address');
				 $postData['Job_type'] = $this->input->post('intership_Job_type');
				 if($postData['subcategory_id'] == 17){
					$postData['intership_qustions'] = $this->input->post('intership_qustions'); 	
				 }
				 else if($postData['subcategory_id'] == 18){
					$postData['intership_qustions'] = $this->input->post('intership_Skills_Qualifications');
					$postData['intership_Post_Vacant'] = $this->input->post('intership_Post_Vacant');
				 }
				 $postData['intership_Need_Stipend'] = $this->input->post('intership_Need_Stipend');
				 $postData['Available_Timings'] = $this->input->post('Tuitions_Available_Timings');
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
				 $table=  "category_internships";
				}

				$id = $this->db->insert_id();
				print_r($_FILES['profile_img']);  
					$this->load->library('upload');
					  $dataInfo = array();
				    if (!empty($_FILES['profile_img']['name'])) {
							
					  $filesCount = count($_FILES['profile_img']['name']);
					  for($i = 0; $i < $filesCount; $i++){
						  $_FILES['file']['name']     = $_FILES['profile_img']['name'][$i];
						  $_FILES['file']['type']     = $_FILES['profile_img']['type'][$i];
						  $_FILES['file']['tmp_name'] = $_FILES['profile_img']['tmp_name'][$i];
						  $_FILES['file']['error']     = $_FILES['profile_img']['error'][$i];
						  $_FILES['file']['size']     = $_FILES['profile_img']['size'][$i];
						  
						  
						  $config['upload_path'] = './uploads/product';
						  $config['allowed_types'] = '*';
						  
						  // Load and initialize upload library
						  $this->load->library('upload', $config);
						  $this->upload->initialize($config);
						  /*$id = $this->post('product_id');*/
						  // Upload file to server
						  if($this->upload->do_upload('file')){
							  // Uploaded file data
							  $fileData = $this->upload->data();
							  $uploadData[$i]['file_name'] = $fileData['file_name'];
							  $uploadData[$i]['created'] = date("Y-m-d H:i:s");
								 $pimage=$uploadData[$i]['file_name'];   
							 
							 
							 if($i==0){
							  $img=$pimage;
							  $source="./uploads/product/$img";
							  $destImagePath="./uploads/product/$img";
							  $destImagdePath= $destImagePath;
							  $thumbWidth=300;   
							   $this->db->update($table, ["cover_img"=>$destImagdePath], "id=$id");
							 
							 }
							 
							 else if($i==1){
							  $img=$pimage;
							  $source="./uploads/product/$img";
							  $destImagePath="./uploads/product/$img";
							  $destImagdePath= $destImagePath;
							  $thumbWidth=300;    
						
							$this->db->update($table, ["images_2"=>$destImagdePath], "id=$id");

							 }
							   else if($i==2){
							 $img=$pimage;
							  $source="./uploads/product/$img";
							  $destImagePath="./uploads/product/$img";
							  $destImagdePath= $destImagePath;
							  $thumbWidth=300; 
						
							   $this->db->update($table, ["images_3"=>$destImagdePath], "id=$id");
						
							 }
							else if($i==3){
							   $img=$pimage;
							  $source="./uploads/product/$img";
							  $destImagePath="./uploads/product/$img";
							  $destImagdePath= $destImagePath;
							  $thumbWidth=300; 
							
							 $this->db->update($table, ["images_4"=>$destImagdePath], "id=$id");
						
							 }
							   else if($i==4){
							   $img=$pimage;
							  $source="./uploads/product/$img";
							  $destImagePath="./uploads/product/$img";
							  $destImagdePath= $destImagePath;
							  $thumbWidth=300;
							  $this->db->update($table, ["images_5"=>$destImagdePath], "id=$id");
							 }
							 
						  }
					  }
	
				 }
			  
				 $this->session->set_flashdata('saveproduct','Product Post Succesfully.');
				 $this->session->set_flashdata('msg_class','alert-success');
				  return redirect('welcome/postproduct');
			 
			
	 }
					public function store(){
						$session_id = $this->session->userdata('id');
						
						if($session_id)
						{
							//$myproduct = $this->product_model->myproduct($session_id);

							$user_detail = $this->user->loginuser($session_id);
						$this->load->view('front/header',['user'=>$user_detail]);
						$this->load->view('front/store',['user'=>$user_detail]);
						$this->load->view('front/footer');
						}else{
							$this->load->view('front/header');
						$this->load->view('front/store');
						$this->load->view('front/footer');
						}
					}

					public function shopdetail(){

						$session_id = $this->session->userdata('id');
						
						if($session_id)
						{
							//$myproduct = $this->product_model->myproduct($session_id);

							$user_detail = $this->user->loginuser($session_id);
						$this->load->view('front/header',['user'=>$user_detail]);
						$this->load->view('front/shopdetail',['user'=>$user_detail]);
						$this->load->view('front/footer');
					}
					else{
						$this->load->view('front/header');
						$this->load->view('front/shopdetail');
						$this->load->view('front/footer');
					}
					}
  
}
