<?php
class Mahasiswa_model extends CI_Model{
	public function get_data(){
		$data_mahasiswa =[
			["nama"=>"Kim Jefry","prodi"=>"MIF"],
			["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
			["nama"=>"Budi Sudarsono","prodi"=>"TIF"]
		];
		return $data_mahasiswa;
	}
	function getALL(){
		$this -> db -> select('*'); 
		$this -> db -> from('tm_user'); //untuk memanggil data dari tabel tm_user pada database
		$this -> db -> join('tm_grup','tm_user.grup = tm_grup.id_grup');
		//dimana digabung dengan tabel tm_grup berdasarkan atribut grup pada tm_user
		//sama dengan id_grup pada tm grup 
		$query = $this -> db -> get();
		//untuk mengeksekusi query sama seperti mysqli_query
		return $query;
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
		//menggunakan function insert yang pada library db
		//untuk menambahkan data dengan parameter (nama tabel dan data inputan)
	}
}
?>
