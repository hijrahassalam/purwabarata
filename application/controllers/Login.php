<?php
class Login extends CI_Controller {

		// halaman index untuk kontroller login -> menampilkan view 'login/index'
        public function index()
        {
            $this->load->view('login/index');
        }

        // method untuk proses submit login
        public function submit(){
        	// baca data username dan password dari form login
        	$username = $this->security->xss_clean($_POST['username']);
        	$password = $this->security->xss_clean($_POST['password']);

        	// panggil method getUserProfile() dari user_model untuk membaca data profile user
			$data['user'] = $this->user_model->getUserProfile($username);
			
        	// bandingkan password user dari database dengan yang disubmit via form
        	if ($data['user']['PASSWORD'] == $password){
        		// jika password sama, maka simpan username dan fullname user ke session
				$_SESSION['username'] = $username;
				// save the full name for nav
				$_SESSION['fullname'] = $data['user']['NAMA_PANITIA'];
				// save the id_panitia for edit purpose
				$_SESSION['idpanitia'] = $data['user']['ID_PANITIA'];

        		// arahkan ke kontroller 'dashboard/index'
        		redirect('dashboard');
        	} else {
        		// jika password tidak sama, arahkan ke kontroler 'login/index' lagi
        		redirect('login/index');
        	}
        }
}
