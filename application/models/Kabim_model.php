<?php

class Kabim_model extends CI_Model {

	// method untuk menampilkan data Kakak Pembimbing
	public function showKabim($id_kabim = false, $number = false, $offset = false){
		// membaca semua data Kakak Pembimbing dari tabel 'tm_kabim'
		if ($id_kabim == false){
			$query = $this->db->get('tm_kabim', $number, $offset);
			return $query->result_array();
		} else {
			// membaca data Kakak Pembimbing berdasarkan ID_KABIM
			$query = $this->db->get_where('tm_kabim', array("ID_KABIM" => $id_kabim));
			return $query->row_array();
		}
	}

	// mencari jumlah baris pada tabel 'tm_kabim'
	public function jumlahdata(){
		return $this->db->get('tm_kabim')->num_rows();
	}

	// method untuk hapus data kabim berdasarkan ID KABIM
	public function delKabim($id_kabim){
		$this->db->delete('tm_kabim', array("ID_KABIM" => $id_kabim));
	}

	// method untuk mencari data kabim berdasarkan key
	public function findKabim($key){
			$query = $this->db->query("SELECT * FROM tm_kabim WHERE ID_KABIM LIKE '%$key%' 
										OR NIM_KABIM LIKE '%$key%' 
										OR NAMA_KABIM LIKE '%$key%'
										OR PRODI_KABIM LIKE '%$key%'
										OR FAKULTAS_KABIM LIKE '%$key%'");
			return $query->result_array();
	}
	

	// method untuk insert data kabim ke tabel 'tm_kabim'
	public function insertKabim($id_kabim, $nim_kabim, $nama_kabim, $prodi_kabim, $fakultas_kabim){
		$data = array(
					"ID_KABIM" => $id_kabim,
					"NIM_KABIM" => $nim_kabim,
					"NAMA_KABIM" => $nama_kabim,
					"PRODI_KABIM" => $prodi_kabim,
					"FAKULTAS_KABIM" => $fakultas_kabim,
					//"imgfile" => $filename
		);
		$query = $this->db->insert('tm_kabim', $data);
	}

	// method untuk edit data kabim ke tabel 'tm_kabim' dengan 'id_kabim' tertentu
	public function editKabim($id_kabim, $nim_kabim, $nama_kabim, $prodi_kabim, $fakultas_kabim){
		$data = array(
			"ID_KABIM" => $id_kabim,
			"NIM_KABIM" => $nim_kabim,
			"PRODI_KABIM" => $nama_kabim,
			"FAKULTAS_KABIM" => $prodi_kabim,
		//	"imgfile" => $filename
		);
		$this->db->where('id_kabim', $id_kabim);
		$query = $this->db->update('tm_kabim', $data);		
	}
}
?>
