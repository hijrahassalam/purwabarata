<?php

class User_model extends CI_Model {

	// method untuk membaca data profile user berdasar username
	public function getUserProfile($username){
		$query = $this->db->get_where('tm_panitia', array('NIM_PANITIA' => $username));
		return $query->row_array();
	}

// method untuk menampilkan data Panitia
public function showUser($id_user = false, $number = false, $offset = false){
	// membaca semua data Panitia dari tabel 'tm_panitia'
	if ($id_user == false){
		$query = $this->db->get('tm_panitia', $number, $offset);
		return $query->result_array();
	} else {
		// membaca data Panitia berdasarkan NIM_PANITIA
		$query = $this->db->get_where('tm_panitia', array("ID_PANITIA" => $id_user));
		return $query->row_array();
	}
}

// mencari jumlah baris pada tabel 'tm_panitia'
public function jumlahdata(){
	return $this->db->get('tm_group')->num_rows();
}

// method untuk hapus data User berdasarkan ID Panitia
public function delUser($id_user){
	$this->db->delete('tm_panitia', array("ID_PANITIA" => $id_user));
}

// method untuk mencari data User berdasarkan key
public function findUser($key){

		$query = $this->db->query("SELECT * FROM tm_panitia WHERE ID_PANITIA LIKE '%$key%' 
									OR NIM_PANITIA LIKE '%$key%' 
									OR NAMA_PANITIA LIKE '%$key%'
									OR PRODI_PANITIA LIKE '%$key%'
									OR FAKULTAS_PANITIA LIKE '%$key%'");
		return $query->result_array();
}


// method untuk insert data User ke tabel 'tm_panitia'
// PRIMARY KEY : id_user
// Login dengan NIM_PANITIA => username
public function insertUser($username, $nama_user, $prodi_user, $fakultas_user, $password_user){
	$data = array(
				"NIM_PANITIA" => $username,
				"NAMA_PANITIA" => $nama_user,
				"PRODI_PANITIA" => $prodi_user,
				"FAKULTAS_Panitia" => $fakultas_user,
				"PASSWORD" => $password_user
				//"imgfile" => $filename
	);
	$query = $this->db->insert('tm_panitia', $data);
}

// method untuk edit data User ke tabel 'tm_panitia' dengan 'username' tertentu
public function editUser($id_user, $username,  $nama_user, $prodi_user, $fakultas_user, $password_user){
	$data = array(
		"NIM_PANITIA" => $username,
		"NAMA_PANITIA" => $nama_user,
		"PRODI_PANITIA" => $prodi_user,
		"FAKULTAS_Panitia" => $fakultas_user,
		"PASSWORD" => $password_user
	//	"imgfile" => $filename
	);
	$this->db->where('ID_PANITIA', $id_user);
	$query = $this->db->update('tm_panitia', $data);		
}
}

?>
