<?php
	defined('BASEPATH')OR exit('No direct script access allowed');
	class Mahasiswa extends CI_Controller{
		function __construct(){
		//function construct yaitu function awal untuk mempersiapkan object
			parent::__construct();
			$this -> load -> model('Mahasiswa_model');
			//untuk memanggil file Mahasiswa_model.php dari folder model
		}

		public function index(){
			$data['user'] = $this->Mahasiswa_model->getAll()->result();
			//mengambil data array dari database melalui folder model(Mahasiswa_model)
			$this->template->views('crud/home_mahasiswa',$data);
			//menggunakan template untuk menampilkan isi content berupa file view (home_mahasiswa)
		}
		
		public function tambah(){
			$this->template->views('crud/tambah_mahasiswa');
		}

		public function input(){
			$username = $this->input->post('username');
			//membuat deklarasi $username untuk menampung data dari inputan yang memiliki name username
			$password = $this->input->post('pass');
			//membuat deklarasi $username untuk menampung data dari inputan yang memiliki name pass
			$grup = $this->input->post('grup');
			//membuat deklarasi $username untuk menampung data dari inputan yang memiliki nama grup

			$data = array(
				'username' => $username,
				'password' => $password,
				'grup' => $grup,
				);
			// mengatur atribut yang sesuai dengan pada tabel yang akan ditambahkan nilainya,
			// dengan nilai masing-masing atribut telah disimpan dalam variable sebelumnya

			$this->Mahasiswa_model->input_data($data,'tm_user');
			//input data dengan nilai data pada $data dan tabelnya pada tm_user
			redirect('Mahasiswa/index');
			//jika sudah maka akan menuju function index pada controller Mahasiswa
		}
	}
	
?>
