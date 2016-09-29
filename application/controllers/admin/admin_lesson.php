<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin_lesson extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/Admin_lesson_model');
			$this->load->library('pagination');
			$r=$this->Admin_lesson_model->get_lesson();
		
		}
		public function index(){
		$config['base_url'] = 'http://example.com/index.php/test/page/';
		$config['total_rows'] = count($r);
		$config['per_page'] = 5; 
		$arr=array(
			"lesson"=>$r,
		);
		$this->pagination->initialize($config); 
		$this->load->view('admin/index.php',$arr);
	}
	public function view(){
		$id=$this->uri->segment(4);
		$rs=$this->Admin_lesson_model->update_attr($id);
		$arr['lesson']=$rs;
		if($rs){
			$this->load->view('admin/view.php',$arr);	
		}
		else {
			echo "查看失败";
		}
		
	}
	public function update(){
		$id=$this->uri->segment(4);//restful提交
		$rs=$this->Admin_lesson_model->update_attr($id);
		$arr['up']=$rs;
		if($rs){
			$this->load->view('admin/update.php',$arr);
			//$this->index; 
		}else{
			echo "更新失败";
		}
		
		
	}
	public function do_update(){
		$id=$this->input->post('hid');
		$l=$this->input->post('lesson');
		$l_power=$this->input->post('power');
		$l_date=$this->input->post('date');
		$result=$this->Admin_lesson_model->update_id($id,$l,$l_power,$l_date);
	if($result){
		redirect('admin/admin_lesson/index');
	}else{
		echo "更新失败";
	}
	}
	public function del(){
		$id=$this->input->get('id');//普通的get提交
		//$id=$this->uri->segment(3);
		$rs=$this->Admin_lesson_model->del_attr($id);
		if($rs){
			redirect('admin/admin_lesson/index');
			//$this->index; 
		}else{
			echo "删除失败";
		}
		
		
	}
	public function add(){
		$this->load->view('admin/add.php');	
	}
	public function do_add(){
		$l=$this->input->post('lesson');
		$l_power=$this->input->post('power');
		$l_date=$this->input->post('date');
		$rs=$this->Admin_lesson_model->add($l,$l_power,$l_date);
		if ($rs){
			redirect('admin/admin_lesson/index');
		}else{
			echo "string";
			
		}
		
	}
	
	
	
	
	
	}



?>