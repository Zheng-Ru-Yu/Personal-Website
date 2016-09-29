<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin_lesson_model extends CI_Model{
	
		public function get_lesson(){
			$query=$this->db->get('lesson');
			return $query->result();
		}
		public function update_attr($id){	
			$query=$this->db->get_where('lesson',array('lesson_id'=>$id));
			return $query->row();
			
		}
		public function update_id($id,$l,$l_power,$l_date){
				$data=array(
					'lesson_id'=>$id,
					'lesson'=>$l,
					'lesson_date'=>$l_date,
					'lesson_power'=>$l_power
					
				);
			$this->db->where('lesson_id',$id);
			$query=$this->db->update('lesson',$data);
			return $query;
			//$query=$this->db->delete('blog',array('blogid'=>$id));
			//return $query;
		}
		public function del_attr($id){
			$query=$this->db->delete('lesson',array('lesson_id'=>$id));
			return $query;		
		}
		public function add($l,$l_power,$l_date){
			$data=array(
					'lesson'=>$l,
					'lesson_date'=>$l_date,
					'lesson_power'=>$l_power
				);
			return $query=$this->db->insert('lesson',$data);
		}
	
	
	}
?>