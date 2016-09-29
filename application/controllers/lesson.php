<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Lesson extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//$this->load->database();如果不配全局数据库这样加载
			$this->load->model('Lesson_model');
	}
	public function index(){
		$rs=$this->Lesson_model->get_Lesson();
		$arr['pl']=$rs;
		$this->load->view('index.php',$arr);
	}
	
	// // public function comment(){
		// // $name=$this->input->post('name');
		// // $email=$this->input->post('email');
		// // $content=$this->input->post('content');
		// // $result=$this->Pl_model->comment($name,$email,$content);
	// // if($result){
		// // //render('index.php');
		// // redirect('pl/index');
	// // }else{
		// // echo "添加失败";
 	// // }
	// // }
// 	
// 
	 }
?>
