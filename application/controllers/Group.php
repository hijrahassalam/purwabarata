<?php
class Group extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){
			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
	}

	// method hapus data Group dari tabel 'tr_Group'
	public function delete($id_group){
		$this->group_model->delGroup($id_group);
		// arahkan ke method 'Group' di kontroller 'dashboard'
		redirect('dashboard/group');
	}

	// method untuk tambah data group
	public function insert(){
		// baca data dari form insert group
		$nama_group = $this->security->xss_clean($_POST['nama_group']);
		$desc_group = $this->security->xss_clean($_POST['desc_group']);

		// panggil method insertgroup() di model 'group_model' untuk menjalankan query insert
		$this->group_model->insertGroup($nama_group, $desc_group);

		// arahkan ke method 'Group' di kontroller 'dashboard'
		redirect('dashboard/group');
	}

	// method untuk edit (show the data) data group berdasarkan $id_group
	public function edit($id_group){
		// get the data
		$data['group'] = $this->group_model->showGroup($id_group);

		// get the user that edit from session
		$data['fullname'] = $_SESSION['fullname'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/editgroup', $data);
        $this->load->view('dashboard/footer');		
	}

	// method untuk update data group berdasarkan $id_group
	public function update(){
		// baca data dari form insert group
		$id_group = $this->security->xss_clean($_POST['id_group']);
		$nama_group = $this->security->xss_clean($_POST['nama_group']);
		$desc_group = $this->security->xss_clean($_POST['desc_group']);

		// panggil method editgroup() di model 'group_model' untuk menjalankan query update
		$this->group_model->editGroup($id_group, $nama_group, $desc_group);

		// arahkan ke method 'Group' di kontroller 'dashboard'
		redirect('dashboard/group');		
	}

	// view mirip seperti edit > get the data first
	public function view($id_group){
		// get the data
		$data['group'] = $this->group_model->showGroup($id_group);

		// get the user that edit from session
		$data['fullname'] = $_SESSION['fullname'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/viewgroup', $data);
        $this->load->view('dashboard/footer');	
	}

	// method untuk mencari data buku berdasarkan 'key'
	public function findGroup(){
		
		// baca key dari form cari data
		$key = $this->security->xss_clean($_POST['key']);

		// ambil session fullname untuk ditampilkan ke header
		$data['fullname'] = $_SESSION['fullname'];

		// panggil method findBook() dari model group_model untuk menjalankan query cari data
		$data['group'] = $this->group_model->findGroup($key);

		// tampilkan hasil pencarian di view 'dashboard/books'
		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/group', $data);
        $this->load->view('dashboard/footer');
	}

}
?>
