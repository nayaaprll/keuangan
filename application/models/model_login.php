<?php 
class Model_Login extends CI_Model{ 
	function validate($user_username,$user_password){ 
		$this->db->where('username',$user_username); 
		$this->db->where('password',$user_password); 
		$result = $this->db->get('user',1); 
		return $result; } }