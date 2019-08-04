<?php

class Group_model extends CI_Model {

	// method untuk menampilkan data Group Mahasiswa Baru
	public function showGroup($id_group = false, $number = false, $offset = false){
		// membaca semua data Mahasiswa Baru dari tabel 'tm_group'
		if ($id_group == false){
			$query = $this->db->get('tm_group', $number, $offset);
			return $query->result_array();
		} else {
			// membaca data Mahasiswa Baru berdasarkan ID_GROUP
			$query = $this->db->get_where('tm_group', array("ID_GROUP" => $id_group));
			return $query->row_array();
		}
	}

	// mencari jumlah baris pada tabel 'tm_group'
	public function jumlahdata(){
		return $this->db->get('tm_group')->num_rows();
	}

	// method untuk hapus data Group berdasarkan ID Peserta
	public function delGroup($id_group){
		$this->db->delete('tm_group', array("ID_GROUP" => $id_group));
	}

	// method untuk mencari data Group berdasarkan key
	public function findGroup($key){

			$query = $this->db->query("SELECT * FROM tm_group WHERE ID_GROUP LIKE '%$key%' 
										OR NAMA_GROUP LIKE '%$key%'
										OR DESC_GROUP LIKE '%$key%'");
			return $query->result_array();
		}
	

	// method untuk insert data Group ke tabel 'tm_group'
	public function insertGroup($nama_group, $desc_group){
		$data = array(
					"NAMA_GROUP" => $nama_group,
					"DESC_GROUP" => $desc_group,
		);
		$query = $this->db->insert('tm_group', $data);
	}

	// method untuk edit data Group ke tabel 'tm_group' dengan 'id_Group' tertentu
	public function editGroup($id_group, $nama_group, $desc_group){
		$data = array(
			"ID_GROUP" => $id_group,
			"NAMA_GROUP" => $nama_group,
			"DESC_GROUP" => $desc_group,
		);
		$this->db->where('ID_GROUP', $id_group);
		$query = $this->db->update('tm_group', $data);		
	}
}
?>
