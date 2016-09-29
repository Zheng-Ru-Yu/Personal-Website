<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Lesson_model extends CI_Model{
	
		public function get_lesson(){
			$query=$this->db->get('lesson');
			return $query->result();
		}
		public function update_attr($id){	
			$query=$this->db->get_where('lesson',array('lesson_id'=>$id));
			return $query->row();
			
		}
	
	
	}
?>