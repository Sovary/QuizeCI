<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Ans_model extends CI_Model{
        private $tb_answers="tb_answers";

        public function __construct(){
            parent:: __construct();
        }

        public function insert($param)
        {

            $this->db->insert_batch($this->tb_answers,$param);
        }
        
    }