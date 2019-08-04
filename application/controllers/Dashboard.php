<?php
class Dashboard extends CI_Controller {

		public function __construct(){
			parent::__construct();

			// cek keberadaan session 'username'	
            
			if (!isset($_SESSION['username'])){
				// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
				redirect('login');
			}
			
		}

		// halaman index dari dashboard -> menampilkan grafik statistik jumlah data buku berdasarkan kategori

        public function index(){

        	// // panggil method countByCat() di model book_model untuk menghitung jumlah data buku per kategori untuk ditampilkan di view
        	// $data['countBukuTeks'] = $this->book_model->countByCat(1);
        	// $data['countMajalah'] = $this->book_model->countByCat('2');
        	// $data['countSkripsi'] = $this->book_model->countByCat('3');
        	// $data['countThesis'] = $this->book_model->countByCat('4');
        	// $data['countDisertasi'] = $this->book_model->countByCat('5');
        	// $data['countNovel'] = $this->book_model->countByCat('6');

        	// baca data session 'fullname' untuk ditampilkan di view
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/index'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/index');
            $this->load->view('dashboard/footer', $data);
		}
		
        // method untuk menambah data maru
		public function laporan(){
        	// baca data session 'fullname' untuk ditampilkan di view
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/add'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/laporan', $data);
            $this->load->view('dashboard/footer', $data);
		}

        // method untuk menambah data maru
		public function addmaru(){
        	// baca data session 'fullname' untuk ditampilkan di view
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/add'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addmaru', $data);
            $this->load->view('dashboard/footer', $data);
		}
		
        // method untuk menambah data kabim
		public function addkabim(){
        	// baca data session 'fullname' untuk ditampilkan di view
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/add'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addkabim', $data);
            $this->load->view('dashboard/footer', $data);
		}
		
        // method untuk menambah data kabim
		public function addagenda(){
        	// baca data session 'fullname' untuk ditampilkan di view
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/add'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addagenda', $data);
            $this->load->view('dashboard/footer', $data);
		}
		
        // method untuk menambah data kabim
		public function adduser(){
        	// baca data session 'fullname' untuk ditampilkan di view
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/add'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/adduser', $data);
            $this->load->view('dashboard/footer', $data);
		}
		
        // method untuk menambah data kabim
		public function addgroup(){
        	// baca data session 'fullname' untuk ditampilkan di view
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/add'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addgroup', $data);
            $this->load->view('dashboard/footer', $data);
        }


        // method untuk menampilkan seluruh data buku
        public function maru(){
        	// baca data session 'fullname' untuk ditampilkan di view
			$data['fullname'] = $_SESSION['fullname'];
			
			// paginasi
			$config['base_url'] = base_url().'/index.php/dashboard/maru';
			$config['total_rows'] = $this->maru_model->jumlahdata();
			$config['per_page'] = 5;

			// costumize
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';

			$from = $this->uri->segment(3);
			
			// panggil method showBook() dari book_model untuk membaca seluruh data buku
			$data['maru'] = $this->maru_model->showMaru($id_maru = false, $config['per_page'], $from);

			$this->pagination->initialize($config);


			$data['jumlahdata'] = $this->maru_model->jumlahdata();

        	// tampilkan view 'dashboard/books'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/maru', $data);
            $this->load->view('dashboard/footer', $data);
		}        
		
		// method untuk menampilkan seluruh data kakak pendamping
        public function kabim(){
        	// baca data session 'fullname' untuk ditampilkan di view
			$data['fullname'] = $_SESSION['fullname'];
			
			// paginasi
			$config['base_url'] = base_url().'/index.php/dashboard/kabim';
			$config['total_rows'] = $this->maru_model->jumlahdata();
			$config['per_page'] = 5;

			// costumize
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';

			$from = $this->uri->segment(3);
			
			// panggil method showKabim() dari kabim_model untuk membaca seluruh data kabim
			$data['kabim'] = $this->kabim_model->showKabim($id_maru = false, $config['per_page'], $from);
			
			// initialize pagination
			$this->pagination->initialize($config);
			
			// show total rows of kabim
			$data['jumlahdata'] = $this->kabim_model->jumlahdata();

        	// tampilkan view 'dashboard/books'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/kabim', $data);
            $this->load->view('dashboard/footer', $data);
		}

		// method untuk menampilkan seluruh data kakak pendamping
        public function agenda(){
        	// baca data session 'fullname' untuk ditampilkan di view
			$data['fullname'] = $_SESSION['fullname'];
			
			// paginasi
			$config['base_url'] = base_url().'/index.php/dashboard/agenda';
			$config['total_rows'] = $this->agenda_model->jumlahdata();
			$config['per_page'] = 5;

			// costumize
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';

			$from = $this->uri->segment(3);
			
			// panggil method showKabim() dari kabim_model untuk membaca seluruh data kabim
			$data['agenda'] = $this->agenda_model->showAgenda($id_agenda = false, $config['per_page'], $from);
			
			// initialize pagination
			$this->pagination->initialize($config);
			
			// show total rows of kabim
			$data['jumlahdata'] = $this->agenda_model->jumlahdata();

        	// tampilkan view 'dashboard/books'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/agenda', $data);
            $this->load->view('dashboard/footer', $data);
		}

		// method untuk menampilkan seluruh data kakak pendamping
        public function user(){
        	// baca data session 'fullname' untuk ditampilkan di view
			$data['fullname'] = $_SESSION['fullname'];
			
			// paginasi
			$config['base_url'] = base_url().'/index.php/dashboard/user';
			$config['total_rows'] = $this->agenda_model->jumlahdata();
			$config['per_page'] = 5;

			// costumize
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';

			$from = $this->uri->segment(3);
			
			// panggil method showKabim() dari kabim_model untuk membaca seluruh data kabim
			$data['user'] = $this->user_model->showUser($id_user = false, $config['per_page'], $from);
			
			// initialize pagination
			$this->pagination->initialize($config);
			
			// show total rows of kabim
			$data['jumlahdata'] = $this->user_model->jumlahdata();

        	// tampilkan view 'dashboard/user'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/user', $data);
            $this->load->view('dashboard/footer', $data);
		}

		// method untuk menampilkan seluruh data kakak pendamping
        public function group(){
        	// baca data session 'fullname' untuk ditampilkan di view
			$data['fullname'] = $_SESSION['fullname'];
			
			// paginasi
			$config['base_url'] = base_url().'/index.php/dashboard/group';
			$config['total_rows'] = $this->agenda_model->jumlahdata();
			$config['per_page'] = 5;

			// costumize
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';

			$from = $this->uri->segment(3);
			
			// panggil method showKabim() dari kabim_model untuk membaca seluruh data kabim
			$data['group'] = $this->group_model->showGroup($id_user = false, $config['per_page'], $from);
			
			// initialize pagination
			$this->pagination->initialize($config);
			
			// show total rows of kabim
			$data['jumlahdata'] = $this->user_model->jumlahdata();

        	// tampilkan view 'dashboard/user'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/group', $data);
            $this->load->view('dashboard/footer', $data);
		}


        // method untuk proses logout
        public function logout(){
        	// hapus seluruh data session
        	session_destroy();
        	// redirect ke kontroller 'login'
        	redirect('login');
        }
}
