<?php
class Maru extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){
			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
	}


	// method hapus daata maru dari tabel 'tm_peserta'
	public function delete($id_maru){
		$this->maru_model->delMaru($id_maru);
		// arahkan ke method 'maru' di kontroller 'dashboard'
		redirect('dashboard/maru');
	}

	// method untuk tambah data maru
	public function insert(){

		// target direktori fileupload
		$target_dir = "c:/xampp/htdocs/books/assets/images/";
		
		// baca nama file upload
		$filename = $_FILES["imgcover"]["name"];

		// menggabungkan target dir dengan nama file
		$target_file = $target_dir . basename($filename);

		// proses upload
		move_uploaded_file($_FILES["imgcover"]["tmp_name"], $target_file);

		// baca data dari form insert maru
		$id_maru = $this->security->xss_clean($_POST['id_maru']);
		$nim_maru = $this->security->xss_clean($_POST['nim_maru']);
		$nama_maru = $this->security->xss_clean($_POST['nama_maru']);
		$prodi_maru = $this->security->xss_clean($_POST['prodi_maru']);
		$fakultas_maru = $this->security->xss_clean($_POST['fakultas_maru']);

		// panggil method insertMaru() di model 'maru_model' untuk menjalankan query insert
		$this->maru_model->insertMaru($id_maru, $nim_maru, $nama_maru, $prodi_maru, $fakultas_maru);

		// arahkan ke method 'maru' di kontroller 'dashboard'
		redirect('dashboard/maru');
	}

	// method untuk edit (show the data) data maru berdasarkan id_maru
	public function edit($id_maru){
		// get the data
		$data['maru'] = $this->maru_model->showMaru($id_maru);
		// get the user that edit from session
		$data['fullname'] = $_SESSION['fullname'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/editmaru', $data);
        $this->load->view('dashboard/footer');		
	}

	// method untuk update data MARU berdasarkan id_maru
	public function update(){

		// target direktori fileupload
		$target_dir = "c:/xampp/htdocs/books/assets/images/";
		
		// baca nama file upload
		$filename = $_FILES["imgcover"]["name"];

		// menggabungkan target dir dengan nama file
		$target_file = $target_dir . basename($filename);

		// proses upload
		move_uploaded_file($_FILES["imgcover"]["tmp_name"], $target_file);

		// baca data dari form insert MARU
		$id_maru = $this->security->xss_clean($_POST['id_maru']);
		$nim_maru = $this->security->xss_clean($_POST['nim_maru']);
		$nama_maru = $this->security->xss_clean($_POST['nama_maru']);
		$prodi_maru = $this->security->xss_clean($_POST['prodi_maru']);
		$fakultas_maru = $this->security->xss_clean($_POST['fakultas_maru']);

		// panggil method editMaru() di model 'maru_model' untuk menjalankan query update
		$this->maru_model->editMaru($id_maru, $nim_maru, $nama_maru, $prodi_maru, $fakultas_maru);

		// arahkan ke method 'maru' di kontroller 'dashboard'
		redirect('dashboard/maru');		
	}

	// view mirip seperti edit > get the data first
	public function view($id_maru){
		// get the data
		$data['maru'] = $this->maru_model->showMaru($id_maru);
		// get the user that edit from session
		$data['fullname'] = $_SESSION['fullname'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/viewmaru', $data);
        $this->load->view('dashboard/footer');	
	}

	// method untuk mencari data buku berdasarkan 'key'
	public function findmaru(){
		
		// baca key dari form cari data
		$key = $this->security->xss_clean($_POST['key']);

		$data['jumlahdata'] = $this->maru_model->jumlahdata($key);

		// ambil session fullname untuk ditampilkan ke header
		$data['fullname'] = $_SESSION['fullname'];

		// panggil method findBook() dari model maru_model untuk menjalankan query cari data
		$data['maru'] = $this->maru_model->findMaru($key);

		// tampilkan hasil pencarian di view 'dashboard/books'
		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/maru', $data);
        $this->load->view('dashboard/footer');
	}

}
?>
