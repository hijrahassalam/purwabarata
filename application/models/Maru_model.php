<?php

class Maru_model extends CI_Model {

	// method untuk menampilkan data Mahasiswa Baru
	public function showMaru($id_maru = false, $number = false, $offset = false){
		// membaca semua data Mahasiswa Baru dari tabel 'tm_peserta'
		if ($id_maru == false){
			$query = $this->db->get('tm_peserta', $number, $offset);
			return $query->result_array();
		} else {
			// membaca data Mahasiswa Baru berdasarkan ID_Peserta
			$query = $this->db->get_where('tm_peserta', array("ID_PESERTA" => $id_maru));
			return $query->row_array();
		}
	}

	// mencari jumlah baris pada tabel 'tm_peserta'
	public function jumlahdata($key = null){
		if($key == null){
			return $this->db->get('tm_peserta')->num_rows();
		}else{
			return $this->db->get_where('tm_peserta',$key)->num_rows();
		}
		
	}

	// method untuk hapus data Maru berdasarkan ID Peserta
	public function delMaru($id_maru){
		$this->db->delete('tm_peserta', array("idbuku" => $id_maru));
	}

		// method untuk mencari data Maru berdasarkan key
		public function findMaru($key){

			$query = $this->db->query("SELECT * FROM tm_peserta WHERE ID_PESERTA LIKE '%$key%' 
										OR NIM_PESERTA LIKE '%$key%' 
										OR NAMA_PESERTA LIKE '%$key%'
										OR PRODI_PESERTA LIKE '%$key%'
										OR FAKULTAS_PESERTA LIKE '%$key%'");
			return $query->result_array();
		}
	

	// method untuk insert data Maru ke tabel 'tm_peserta'
	public function insertMaru($id_maru, $nim_maru, $nama_maru, $prodi_maru, $fakultas_maru){
		$data = array(
					"ID_PESERTA" => $id_maru,
					"NIM_PESERTA" => $nim_maru,
					"NAMA_PESERTA" => $nama_maru,
					"PRODI_PESERTA" => $prodi_maru,
					"FAKULTAS_PESERTA" => $fakultas_maru,
					//"imgfile" => $filename
		);
		$query = $this->db->insert('tm_peserta', $data);
	}

	// method untuk edit data Maru ke tabel 'tm_peserta' dengan 'id_maru' tertentu
	public function editMaru($id_maru, $nim_maru, $nama_maru, $prodi_maru, $fakultas_maru){
		$data = array(
			"ID_PESERTA" => $id_maru,
			"NIM_PESERTA" => $nim_maru,
			"NAMA_PESERTA" => $nama_maru,
			"PRODI_PESERTA" => $prodi_maru,
			"FAKULTAS_PESERTA" => $fakultas_maru
		//	"imgfile" => $filename
		);
		$this->db->where('ID_PESERTA', $id_maru);
		$query = $this->db->update('tm_peserta', $data);		
	}

}
?>
