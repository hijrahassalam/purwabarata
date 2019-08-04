<?php
class Kabim extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){
			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
	}

	// method hapus daata Kabim dari tabel 'tm_kabim'
	public function delete($id_kabim){
		$this->kabim_model->delKabim($id_kabim);
		// arahkan ke method 'Kabim' di kontroller 'dashboard'
		redirect('dashboard/kabim');
	}

	// method untuk tambah data Kabim
	public function insert(){

		// baca data dari form insert Kabim
		$id_kabim = $this->security->xss_clean($_POST['id_kabim']);
		$nim_kabim = $this->security->xss_clean($_POST['nim_kabim']);
		$nama_kabim = $this->security->xss_clean($_POST['nama_kabim']);
		$prodi_kabim = $this->security->xss_clean($_POST['prodi_kabim']);
		$fakultas_kabim = $this->security->xss_clean($_POST['fakultas_kabim']);

		// panggil method insertKabim() di model 'Kabim_model' untuk menjalankan query insert
		$this->kabim_model->insertKabim($id_kabim, $nim_kabim, $nama_kabim, $prodi_kabim, $fakultas_kabim);

		// arahkan ke method 'Kabim' di kontroller 'dashboard'
		redirect('dashboard/kabim');
	}

	// method untuk edit (show the data) data Kabim berdasarkan id_Kabim
	public function edit($id_kabim){
		// get the data
		$data['kabim'] = $this->kabim_model->showKabim($id_kabim);
		// get the user that edit from session
		$data['fullname'] = $_SESSION['fullname'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/editkabim', $data);
        $this->load->view('dashboard/footer');		
	}

	// method untuk update data Kabim berdasarkan id_Kabim
	public function update(){
		// baca data dari form insert Kabim
		$id_kabim = $this->security->xss_clean($_POST['id_kabim']);
		$nim_kabim = $this->security->xss_clean($_POST['nim_kabim']);
		$nama_kabim = $this->security->xss_clean($_POST['nama_kabim']);
		$prodi_kabim = $this->security->xss_clean($_POST['prodi_kabim']);
		$fakultas_kabim = $this->security->xss_clean($_POST['fakultas_kabim']);

		// panggil method editKabim() di model 'Kabim_model' untuk menjalankan query update
		$this->kabim_model->editKabim($id_kabim, $nim_kabim, $nama_kabim, $prodi_kabim, $fakultas_kabim);

		// arahkan ke method 'Kabim' di kontroller 'dashboard'
		redirect('dashboard/kabim');		
	}

	// view mirip seperti edit > get the data first
	public function view($id_kabim){
		// get the data
		$data['kabim'] = $this->kabim_model->showKabim($id_kabim);
		// get the user that edit from session
		$data['fullname'] = $_SESSION['fullname'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/view', $data);
        $this->load->view('dashboard/footer');	
	}

	// method untuk mencari data buku berdasarkan 'key'
	public function findKabim(){
		
		// baca key dari form cari data
		$key = $this->security->xss_clean($_POST['key']);

		// ambil session fullname untuk ditampilkan ke header
		$data['fullname'] = $_SESSION['fullname'];

		// count the rows
		$data['jumlahdata'] = $this->kabim_model->jumlahdata();

		// panggil method findBook() dari model Kabim_model untuk menjalankan query cari data
		$data['kabim'] = $this->kabim_model->findKabim($key);

		// tampilkan hasil pencarian di view 'dashboard/books'
		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/kabim', $data);
        $this->load->view('dashboard/footer');
	}

}
?>
