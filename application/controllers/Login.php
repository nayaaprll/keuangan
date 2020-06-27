<?php 
class Login extends CI_Controller{ 
	function __construct(){ 
		parent::__construct(); 
		$this->load->model('model_login'); 
	}

	function index(){ 
		$this->load->view('login_view'); 
	
	}

	function auth(){ 
	$user_username = $this->input->post('user_username',TRUE); 
	$user_password = md5($this->input->post('user_password',TRUE)); 
	$validate = $this->model_login->validate($user_username,$user_password); 
	if($validate->num_rows() > 0){ 
	$data  = $validate->row_array(); 
	$name  = $data['nama_user']; 
	$user_username = $data['username']; 
	$level = $data['id_level']; 
	$sesdata = array( 
	'name'  => $name, 
	'user_username'=> $user_username, 
	'level'   => $level, 
	'logged_in' => TRUE ); 
	$this->session->set_userdata($sesdata); 
	// access login for admin 
	if($level == '1'){ 
	$this->session->set_userdata('akses','1'); 
	redirect('dashboard'); 

		} 
	} 
	else{ 
	echo $this->session->set_flashdata('msg','Username or Password is Wrong'); 
	redirect('Login');
	 	}   
	}

	function logout(){ 
		$this->session->sess_destroy(); 
		$url=base_url(''); 
		redirect($url); 
	}
}