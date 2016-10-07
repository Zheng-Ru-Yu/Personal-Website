<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Pl_model extends CI_Model{
	public function save_comment($name,$email,$content){
				$data=array(
					'name'=>$name,
					'email'=>$email,
					'message'=>$content,

				);
			$this->db->insert('pl',$data);
            return $this -> db ->affected_rows();
			
		}
		public function get_pl(){
            $this->db->order_by("date", "desc");
			$query=$this->db->get('pl');
			return $query->result();
		}
	
	
	}
?>