<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//$this->load->database();如果不配全局数据库这样加载
			$this->load->model('admin/User_model');
		}
		public function login(){
			$this->load->view('admin/login.php');
		}
		public function do_login(){
			$name=$this->input->post('username');
			$pass=$this->input->post('pass');
			$result=$this->User_model->get_name_by_pass($name,$pass);
			
			if($result){
				redirect('admin/admin_lesson/index');//调到blog控制器
					}else{
						echo "false";
						
					}
					
		}
	
	}



?>