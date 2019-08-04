<?php
class Agenda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){
			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
	}

	// method hapus data Agenda dari tabel 'tr_agenda'
	public function delete($id_agenda){
		$this->agenda_model->delAgenda($id_agenda);
		// arahkan ke method 'Agenda' di kontroller 'dashboard'
		redirect('dashboard/agenda');
	}

	// method untuk tambah data agenda
	public function insert(){

		// baca data dari form insert agenda
		$id_panitia = $_POST['id_panitia'];
		$judul_agenda = $_POST['judul_agenda'];
		$tanggal_agenda = $_POST['tanggal_agenda'];
		$subtitle = $_POST['subtitle'];
		$keterangan = $_POST['keterangan'];
		$status_agenda = $_POST['status_agenda'];

		// panggil method insertAgenda() di model 'Agenda_model' untuk menjalankan query insert
		$this->agenda_model->insertAgenda($id_panitia, $judul_agenda, $tanggal_agenda, $subtitle, $keterangan, $status_agenda);

		// arahkan ke method 'agenda' di kontroller 'dashboard'
		redirect('dashboard/agenda');
	}

	// method untuk edit (show the data) data agenda berdasarkan $id_agenda
	public function edit($id_agenda){
		// get the data
		$data['agenda'] = $this->agenda_model->showAgenda($id_agenda);
		// get the user that edit from session
		$data['fullname'] = $_SESSION['fullname'];
		// SAVE
		$data['idpanitia'] = $_SESSION['idpanitia'];
		// get the user ID 
		$data['username'] = $_SESSION['username'];
		//print_r($data['agenda']);

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/editagenda', $data);
        $this->load->view('dashboard/footer');		
	}

	// method untuk update data agenda berdasarkan $id_agenda
	public function update(){
		// get data
		$id_agenda = $_POST['id_agenda'];
		$id_panitia = $_POST['id_panitia'];
		$judul_agenda = $_POST['judul_agenda'];
		$tanggal_agenda = $_POST['tanggal_agenda'];
		$subtitle = $_POST['subtitle'];
		$keterangan = $_POST['keterangan'];
		$status_agenda = $_POST['status_agenda'];

		// panggil method editagenda() di model 'agenda_model' untuk menjalankan query update
		$this->agenda_model->editAgenda($id_agenda, $id_panitia, $judul_agenda, $tanggal_agenda, $subtitle, $keterangan, $status_agenda);

		// arahkan ke method 'agenda' di kontroller 'dashboard'
		redirect('dashboard/agenda');		
	}

	// view mirip seperti edit > get the data first
	public function view($id_agenda){
		// get data and place it to form
		// $data['kategori'] = $this->agenda_model->getKategori();
		// get the data
		$data['agenda'] = $this->agenda_model->showAgenda($id_agenda);
		// get the user that edit from session
		$data['fullname'] = $_SESSION['fullname'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/viewAgenda', $data);
        $this->load->view('dashboard/footer');	
	}

	// method untuk mencari data buku berdasarkan 'key'
	public function findAgenda(){
		
		// baca key dari form cari data
		$key = $_POST['key'];

		// ambil session fullname untuk ditampilkan ke header
		$data['fullname'] = $_SESSION['fullname'];

		// panggil method findBook() dari model agenda_model untuk menjalankan query cari data
		$data['agenda'] = $this->agenda_model->findAgenda($key);

		// tampilkan hasil pencarian di view 'dashboard/books'
		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/agenda', $data);
        $this->load->view('dashboard/footer');
	}

}
?>
