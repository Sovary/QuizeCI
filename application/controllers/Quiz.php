<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends MY_Controller {
	protected $access = "user";
	
	function __construct(){
		parent:: __construct();
		$this->load->model(array("quiz_model","ans_model","user_model"));
	}
	public function index()
	{
		$data['totalQuizes']=$this->quiz_model->count();
		$data['totalUsers']=$this->user_model->count();
		$data['user_name']=$this->session->userdata("user_name");
		$data['user_level']=$this->session->userdata("user_level");
		$this->load->view("users/index",$data);
	}
	public function manage_q()
	{	
		$id=$this->session->userdata("user_id");
		$data['quizes']=$this->quiz_model->getQuizes($id);
		$this->load->view("users/questions",$data);
	}
	public function insert()
	{
		$param['quiz_q']=$this->input->post("question");
		$param['quiz_mark']=$this->input->post("mark");
		$param['user_id']=$this->session->user_id;
		$json_ans=(array) json_decode($this->input->post("ans"));
		
		$this->form_validation->set_rules("question","question",'trim|required|min_length[5]');
		$this->form_validation->set_rules("mark","mark","trim|required|decimal|regex_match[/^[0-9]/]");
		if($this->form_validation->run() != false)
		{
			date_default_timezone_set('Asia/Phnom_Penh'); 
            $create_date = date("Y-m-d H:i:s");
			$param_ans=array();
			$check_atleast_ans=false;
			foreach($json_ans['ans'] as $v)
			{	$arr=array();
				$arr['answer']=$v->txt;
				$arr['ans_corrected']=$v->ans;
				$arr['ans_created']=$create_date;
				if(empty($arr["answer"]))continue;
				$param_ans[]=$arr;
				//check if not check an answer
				if($arr['ans_corrected']==true) {$check_atleast_ans=true;}
			}
			if(!empty($param_ans) && $check_atleast_ans){
				
					$id=$this->quiz_model->insert($param);
					foreach ($param_ans as $key => $value) 
					{
						$param_ans[$key]['quiz_id']=$id;
					}
					$this->ans_model->insert($param_ans);
					echo json_encode(array("STATUS"=>true));
			}
			else
			{
				echo json_encode(array("STATUS"=>false,"MSG"=>"At least one answer is checked"));	
			}
		}
		else
		{
			$errors=validation_errors();
			echo json_encode(array("STATUS"=>false,"MSG"=>$errors));
		}
	}
	public function destroy(){
		$msg=false;
		
		$param['user_id']=$this->session->userdata("user_id");
		$param['quiz_id']=preg_replace('#[^0-9]#', '', $this->input->post('quiz_id'));
		$msg=$this->quiz_model->delete($param);
		echo json_encode(array("msg"=>$msg));
	}
	public function play()
	{
		$id=$this->session->userdata("user_id");
		$data['rs']=$this->quiz_model->getToPlay($id);
		if($data['rs'])
		{
			$this->load->view("users/test",$data);	
		}
		else
		{
			redirect("quiz/manage_q");
		}
		
	}
}
