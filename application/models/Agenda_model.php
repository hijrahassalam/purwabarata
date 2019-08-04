<?php

class Agenda_model extends CI_Model {

	// method untuk menampilkan data Agenda
	public function showAgenda($id_agenda = false, $number = false, $offset = false){
		// membaca semua data Agenda dari tabel 'tr_agenda'
		if ($id_agenda == false){
			$query = $this->db->get('tr_agenda', $number, $offset);
			return $query->result_array();
		} else {
			// membaca data Agenda berdasarkan ID_Peserta
			$query = $this->db->get_where('tr_agenda', array("ID_AGENDA" => $id_agenda));
			return $query->row_array();
		}
	}

	// mencari jumlah baris pada tabel 'tr_agenda'
	public function jumlahdata(){
		return $this->db->get('tr_agenda')->num_rows();
	}

	// method untuk hapus data Agenda berdasarkan ID Peserta
	public function delAgenda($id_agenda){
		$this->db->delete('tr_agenda', array("ID_AGENDA" => $id_agenda));
	}

		// method untuk mencari data Agenda berdasarkan key
	public function findAgenda($key){
			$query = $this->db->query("SELECT * FROM tr_agenda WHERE ID_AGENDA LIKE '%$key%' 
										OR ID_PANITIA LIKE '%$key%' 
										OR JUDUL_AGENDA LIKE '%$key%'
										OR TANGGAL_AGENDA LIKE '%$key%'
										OR SUBTITLE LIKE '%$key%'
										OR KETERANGAN LIKE '%$key%'
										OR STATUS_AGENDA LIKE '%$key%'");
			return $query->result_array();
		}
	

	// method untuk insert data Agenda ke tabel 'tr_agenda'
	// $id_agenda == AUTOINCREMENT , tidak di input 
	public function insertAgenda($id_panitia, $judul_agenda, $tanggal_agenda, $subtitle, $keterangan, $status_agenda){
		$data = array(
					"ID_PANITIA" => $id_panitia,
					"JUDUL_AGENDA" => $judul_agenda,
					"TANGGAL_AGENDA" => $tanggal_agenda,
					"SUBTITLE" => $subtitle,
					"KETERANGAN" => $keterangan,
					"STATUS_AGENDA" => $status_agenda
					//"imgfile" => $filename
		);
		$query = $this->db->insert('tr_agenda', $data);
	}

	// method untuk edit data Agenda ke tabel 'tr_agenda' dengan 'id_agenda' tertentu
	// $id_agenda == HARUS TERTENTU, maka input
	public function editAgenda($id_agenda, $id_panitia, $judul_agenda, $tanggal_agenda, $subtitle, $keterangan, $status_agenda){
		$data = array(
			"ID_AGENDA" => $id_agenda,
			"ID_PANITIA" => $id_panitia,
			"JUDUL_AGENDA" => $judul_agenda,
			"TANGGAL_AGENDA" => $tanggal_agenda,
			"SUBTITLE" => $subtitle,
			"KETERANGAN" => $keterangan,
			"STATUS_AGENDA" => $status_agenda
		//	"imgfile" => $filename
		);
		$this->db->where('ID_AGENDA', $id_agenda);
		$query = $this->db->update('tr_agenda', $data);		
	}


}
?>
