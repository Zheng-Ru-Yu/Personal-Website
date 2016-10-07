<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Pl extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//$this->load->database();如果不配全局数据库这样加载
			$this->load->model('Pl_model');
			$this->load->model('Lesson_model');
	}
	public function index(){
		$rs=$this->Pl_model->get_pl();
		$r=$this->Lesson_model->get_lesson();
		
		$r1=array();
		$r2=array();
		for ($i=0; $i < count($r); $i++) {
			if($i%2==0) {
				array_push($r1,$r[$i]);
			}else{
				array_push($r2,$r[$i]);
			}
			
			
		}
		$arr=array(
			"pl"=>$rs,
			"lesson1"=>$r1,
			"lesson2"=>$r2,
		);
		$this->load->view('index.php',$arr);
	}
	
	public function comment(){
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$content=$this->input->post('content');
		$result=$this->Pl_model->save_comment($name,$email,$content);
	if($result){
		echo"success";

	}else{
		echo "fail";
 	}
	}
	

	}
?>
