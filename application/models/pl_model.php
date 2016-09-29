<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Pl_model extends CI_Model{
	public function comment($name,$email,$content){
				$d=date('Y').'-'.date('m').'-'.date('d');
				$data=array(
					'name'=>$name,
					'email'=>$email,
					'message'=>$content,
					'date'=>$d
					
				);
			$query=$this->db->insert('pl',$data);
			return $query;
			
		}
		public function get_pl(){
			$query=$this->db->get('pl');
			return $query->result();
		}
	
	
	}
?>