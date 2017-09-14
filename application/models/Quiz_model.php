<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Quiz_model extends CI_Model{
        private $tb_quiz="tb_quizes";
        private $tb_answers="tb_answers an";
        public function __construct(){
            parent:: __construct();
        }

        public function insert($param)
        {
        	date_default_timezone_set('Asia/Phnom_Penh'); 
            $create_date = date("Y-m-d H:i:s");
            $field=array(
            	'quiz_question'=>$param['quiz_q'],
            	'quiz_mark'=>$param['quiz_mark'],
            	'user_id'=>$param['user_id'],
            	'quiz_created'=>$create_date
            );

            $this->db->insert($this->tb_quiz,$field);
            return $this->db->insert_id();
        }
        public function delete($param)
        {
            $field=array(
                'user_id'=>$param['user_id'],
                'quiz_id'=>$param['quiz_id']
            );
            return $this->db->delete($this->tb_quiz, $field);
        }

        public function count()
        {
            return $this->db->count_all_results($this->tb_quiz);
        }
        public function getToPlay($u_id)
        {
            $arrList=array();
            $query=$this->db->get($this->tb_quiz);
            foreach($query->result() as $item){
                $ar=[];
                $this->db->select("ans_id,answer,ans_corrected");
                $query_ans=$this->db->get_where($this->tb_answers,array('quiz_id'=>$item->quiz_id));
                $ans_arr=$query_ans->result();
                shuffle($ans_arr);
                $ar['quiz']=$item->quiz_question;
                $ar['quiz_mark']=(float)$item->quiz_mark;
                $ar['answer']=$ans_arr;
                $arrList[]=$ar;
            }
            shuffle($arrList);  
            return $arrList;
        }
        public function getQuizes($u_id)
        {
            $this->db->order_by("quiz_created", "DESC"); 
            $query=$this->db->get_where($this->tb_quiz,array('user_id'=>$u_id));

            return $query->result();
        }
       
    }