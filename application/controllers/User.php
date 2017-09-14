<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	//protected $access = array("Admin", "User");

	function __construct(){
			parent:: __construct();
		$this->load->library('facebook');
	}
	public function index()
	{
		//FaceBook Login
		$fbuser = $this->facebook->getUser();		
		$data['fbLoginURL'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => 'http://localhost/quiz/', 
                'scope' => array("email") // permissions here
            ));
		if($fbuser){
			$fbUserProfile = $this->facebook->api('/me?fields=id,first_name,last_name,name,email,link,gender,locale,picture,verified,updated_time,age_range,cover,friends');
			$this->session->set_userdata("logged_in", true);
			$profile=array(
				'user_name'=>$fbUserProfile['name'],
				'user_email'=>$fbUserProfile['email'],
				'user_profile'=>$fbUserProfile['picture']['data']['url']
				);
			$this->session->set_userdata($profile);
		}
		//end Fb Login

		if (! $this->session->userdata("logged_in")) {
			$this->load->view("login",$data);
		}else{
			redirect("/quiz");
		}
		
	}
	public function register()
	{
		$this->load->view("register");
	}
	public function reg()
	{
		$this->form_validation->set_rules("email", "email", "trim|required|is_unique[tb_users.user_email]" , array('required'=>'Please Input'));
		$this->form_validation->set_rules("username", "username", "trim|required|is_unique[tb_users.user_name]" , array('required'=>'Please Input'));
		$this->form_validation->set_rules("password", "password", "trim|required|min_length[6]" , array('required'=>'Please Input'));
		if ($this->form_validation->run() == true) 
		{
			$this->load->model('user_model');
			$param=array("user_name" => ($this->input->post('username')),
					"user_password" => ($this->input->post('password')),
					"user_email"=>($this->input->post("email")),
					"user_status"=>'t',
					"user_level"=>"user"
					);
            	
            $this->user_model->register($param);
            $this->session->set_flashdata("msg", "You have registed successfully, please login");
            $this->register();
		}
		else
		{
			$this->register();
		}
	}
	public function login(){

		//$this->load->library('form_validation');
		$this->form_validation->set_rules("username", "username", "trim|required" , array('required'=>'Please Input'));
		$this->form_validation->set_rules("password", "password", "trim|required" , array('required'=>'Please Input'));
		if ($this->form_validation->run() == true) {

			$this->load->model('user_model');
			$username = $this->input->post('username');
            $password = $this->input->post('password');
			// check the username & password of user
			$status = $this->user_model->validate($username,$password);

			if ($status == "ERR_INVALID_USERNAME") {
				//echo $status;
				$this->session->set_flashdata("error", "Username OR Password is invalid");
				$this->index();
			}
			elseif ($status == "ERR_INVALID_PASSWORD") {
				$this->session->set_flashdata("error", "Password OR Password is invalid");
				$this->index();
			}
			else
			{
				// success
				// store the user data to session
				$this->session->set_userdata($this->user_model->get_data());
				$this->session->set_userdata("logged_in", true);
				// redirect to dashboard
				$this->index();
			}
		}else{
			$this->index();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("logged_in");
		$this->session->sess_destroy();


        // Logs off session from website
        $this->facebook->destroySession();

		redirect('/', 'refresh');
	}

}
