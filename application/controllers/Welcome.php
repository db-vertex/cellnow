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
         $this->load->helper('url');

        
    }

	public function index()
	{
		$this->load->view('front/header');
		$this->load->view('front/homepage');
		$this->load->view('front/footer');
	}

	public function login()
	{
       
		$this->load->view('front/header');
        $this->load->view('front/login');
		$this->load->view('front/footer');
        
		
	}
	public function signup()
	{
		
		
            $this->form_validation->set_rules('email',' email','required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('name',' name','required');
			$this->form_validation->set_rules('phone',' phone','required');
           $this->form_validation->set_rules('password',' password','required|min_length[6]');
		   $this->form_validation->set_rules('confirmpassword',' confirmpassword','required|min_length[6]matches[password]');
            $this->form_validation->set_error_delimiters('<span class="validate-has-error">', '</span>');
            if ($this->form_validation->run('login') == FALSE)
            {
				$this->load->view('front/header');
				$this->load->view('front/signup');
				$this->load->view('front/footer');
            }
            else
            {
                $user_table = 'tbl_admin';
                $where = array('email'=>  $this->input->post('user_email'),'password'=>  md5($this->input->post('user_password')));
                $admin_details = $this->Login_model->get_record_where($user_table,$where);

               // print_r($admin_details); die;
                if($admin_details == FALSE){
                    $data['error'] = 'Invalid Email or Password';
                    $this->load->view('admin/login_view',$data);
                } else {
                    $this->session->set_userdata(array('user_id'=>$admin_details[0]->id,'user_email'=>$admin_details[0]->email)); 
                    redirect('admin');
                }
            }
       
	}
	public function forgotpassword()
	{
		$this->load->view('front/header');
		$this->load->view('front/forgotpassword');
	}

	public function otp()
	{
		$this->load->view('front/header');
		$this->load->view('front/changepassword');
		$this->load->view('front/footer');
	}
	public function fillter_product()
	{
		$this->load->view('front/fillter');
	}
}
