<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


	
	protected $access = "*";

	public function __construct()
	{
		parent::__construct();
		$this->login_check();
	}

	public function login_check()
	{
		if ($this->access != "*"){
			// here we check the role of the user
			/*if (! $this->permission_check()) {
				redirect("/");
			} */

			// if user try to access logged in page
			// check does he/she has logged in
			// if not, redirect to login page
			if (! $this->session->userdata("logged_in")) {
				redirect("/");
			}
		}
	}

	public function permission_check()
	{
		if ($this->access == "@") {
			return true;
		}
		else
		{
			$access = is_array($this->access) ? $this->access : explode(",", $this->access);
			if (in_array($this->session->userdata("user_level"), array_map("trim", $access)) ) {
				return true;
			}

			return false;
		}
	}

}