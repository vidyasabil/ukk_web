<?php 
class Data_crud extends CI_Model {

	function tampil_datarute(){
		return $this->db->get('tb_rute');
	}

	function input_datarute($data,$table){
		$this->db->insert($table,$data);
	} 

	function cek_login($table,$where){
		return $this->db->get_where($table, $where);
	}

	function hapus_datarute($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_datarute($where,$table){  
		return $this->db->get_where($table,$where);
	}

	function update_datarute($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
  			//reservation//

		function tampil_datareservation(){
			return $this->db->get('tb_reservation');
		}

		function input_datareservation($data,$table){
			$this->db->insert($table,$data);
		} 
		function hapus_datareservation($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		function edit_datareservation($where,$table){  
			return $this->db->get_where($table,$where);
		}

		function update_datareservation($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

 		//done//

			function tampil_datatransportation(){
				return $this->db->get('transportation');
			}


			function tampil_maskapai($table,$where){
				return $this->db->get_where($table, $where);
			}

			function join_rutemaskapai(){
				$this->db->select("rute.id,rute.depart_at,rute.rute_from,rute.rute_to,rute.price,transportation.description");
				$this->db->from('rute');
				$this->db->join('transportation', 'transportation.id = rute.transportationid');
				$query = $this->db->get();
				return $query->result();
			}

			function input_datatransport($data,$table){
				$this->db->insert($table,$data);
			}


			function hapus_datatransportation($where,$table){
				$this->db->where($where);
				$this->db->delete($table);
			}

			function edit_datatransportation($where,$table){  
				return $this->db->get_where($table,$where);
			}

			function update_datatransportation($where,$data,$table){
				$this->db->where($where);
				$this->db->update($table,$data);
			}
//maskapai//
			function tampil_datamaskapai(){
				return $this->db->get('tb_maskapai');

			function input_datamaskapai($data,$table){
			$this->db->insert($table,$data);
			} 

			function cek_login($table,$where){
			return $this->db->get_where($table, $where);
			}

			function hapus_datamaskapai($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
			}

			function edit_datamaskapai($where,$table){  
			return $this->db->get_where($table,$where);
			}

			function update_datamaskapai($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
//done//

//customer//

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
//done//
//bandara//


			function tampil_databandara(){
			return $this->db->get('tb_rute');
			}

			function input_databandara($data,$table){
			$this->db->insert($table,$data);
			} 

			function cek_login($table,$where){
			return $this->db->get_where($table, $where);
			}
		
			function hapus_databandara($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
			}

			function edit_databandara($where,$table){  
			return $this->db->get_where($table,$where);
			}

			function update_databandara($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
			}
//done/

	}
			}
		}

