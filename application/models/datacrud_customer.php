<?php 
 	class Datacrud_customer extends CI_Model {
 	
 		function tampil_datacustomer(){
  			return $this->db->get('tb_customer');
 		}
 
 		function input_datacustomer($data,$table){
  			$this->db->insert($table,$data);
 		} 

 		function cek_login($table,$where){
			return $this->db->get_where($table, $where);
		}

		function hapus_datacustomer($where,$table){
 			$this->db->where($where);
 			$this->db->delete($table);
		}

		function edit_datacustomer($where,$table){  
 			return $this->db->get_where($table,$where);
		}

		function update_datacustomer($where,$data,$table){
  			$this->db->where($where);
  			$this->db->update($table,$data);
 		} 
 	} 
?>