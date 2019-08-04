<?php
class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){
			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
	}

	// method hapus daata user dari tabel 'tm_panitia'
	public function delete($id_user){
		$this->user_model->delUser($id_user);
		// arahkan ke method 'user' di kontroller 'dashboard'
		redirect('dashboard/user');
	}

	// method untuk tambah data user
	public function insert(){
		// baca data dari form insert user
		$username = $this->security->xss_clean($_POST['nim_user']);
		$nama_user = $this->security->xss_clean($_POST['nama_user']);
		$prodi_user = $this->security->xss_clean($_POST['prodi_user']);
		$fakultas_user = $this->security->xss_clean($_POST['fakultas_user']);
		$password_user = $this->security->xss_clean($_POST['password_user']);

		// panggil method insertuser() di model 'user_model' untuk menjalankan query insert
		$this->user_model->insertUser($username, $nama_user, $prodi_user, $fakultas_user, $password_user);

		// arahkan ke method 'user' di kontroller 'dashboard'
		redirect('dashboard/user');
	}

	// method untuk edit (show the data) data user berdasarkan id_user
	public function edit($id_user){
		// get the data
		$data['user'] = $this->user_model->showUser($id_user);
		// get the user that edit from session
		$data['fullname'] = $_SESSION['fullname'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/edituser', $data);
        $this->load->view('dashboard/footer');		
	}

	// method untuk update data user berdasarkan id_user
	public function update(){
		// baca data dari form insert user
		$id_user = $this->security->xss_clean($_POST['id_user']);
		$username = $this->security->xss_clean($_POST['nim_user']);
		$nama_user = $this->security->xss_clean($_POST['nama_user']);
		$prodi_user = $this->security->xss_clean($_POST['prodi_user']);
		$fakultas_user = $this->security->xss_clean($_POST['fakultas_user']);
		$password_user = $this->security->xss_clean($_POST['password_user']);

		// panggil method edituser() di model 'user_model' untuk menjalankan query update
		$this->user_model->editUser($id_user, $username,  $nama_user, $prodi_user, $fakultas_user, $password_user);

		// arahkan ke method 'user' di kontroller 'dashboard'
		redirect('dashboard/user');		
	}

	// view mirip seperti edit > get the data first
	public function view($id_user){
		// get the data
		$data['user'] = $this->user_model->showUser($id_user);
		// get the user that edit from session
		$data['fullname'] = $_SESSION['fullname'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/viewuser', $data);
        $this->load->view('dashboard/footer');	
	}

	// method untuk mencari data buku berdasarkan 'key'
	public function findUser(){
		
		// baca key dari form cari data
		$key = $this->security->xss_clean($_POST['key']);

		// ambil session fullname untuk ditampilkan ke header
		$data['fullname'] = $_SESSION['fullname'];

		// panggil method findBook() dari model user_model untuk menjalankan query cari data
		$data['user'] = $this->user_model->findUser($key);

		// tampilkan hasil pencarian di view 'dashboard/books'
		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/user', $data);
        $this->load->view('dashboard/footer');
	}

}
?>
