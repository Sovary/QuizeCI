<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class User_model extends CI_Model{
        private $tb_users="tb_users";
        private $_data = array();

        public function __construct(){
            parent:: __construct();

        }
        /////log in
        public function validate($username,$password){
            

            $this->db->where("user_name", $username);
            $query = $this->db->get($this->tb_users);

            if ($query->num_rows()) 
            {
                // found row by username    
                $row = $query->row_array();
                
                // now check for the password
                if ($row['user_password'] == $password) 
                {
                    // we not need password to store in session
                    unset($row['user_password']);
                    $this->_data = $row;
                    return "ERR_NONE";
                }

                // password not match
                return "ERR_INVALID_PASSWORD";
            }
            else {
                // not found
                return "ERR_INVALID_USERNAME";
            }
        }
        public function register($param)
        {
            $this->db->set('user_created', 'NOW()',FALSE);
            $this->db->insert($this->tb_users,$param);
        }
        public function get_data(){
            return $this->_data;
        }
        public function count()
        {
            return $this->db->count_all_results($this->tb_users);
        }

    }