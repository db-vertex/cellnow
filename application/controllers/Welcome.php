<<<<<<< HEAD
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
	 * 
	 * 
	 * 
	 */
	function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }


	public function index()
	{
		$this->load->view('front/home1');
	}

	public function login()
	{
		$this->load->view('front/login');
	}
	public function signup()
	{
		$this->load->view('front/signup');
	}
	public function forgotpassword()
	{
		$this->load->view('front/forgotpassword');
	}
	
	
	
}
=======
>>>>>>> da186973aa5ca75b059849b65d3ed64016fa3048
