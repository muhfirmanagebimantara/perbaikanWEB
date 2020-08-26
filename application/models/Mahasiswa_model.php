<?php
/**
* 
*/
class Mahasiswa_model extends CI_Model
{
	/*fungsi get all untuk memanggil database dan menjoin kan tabel
	tm_grup dengan tm_user setelah itu mengquerynya*/
	function getMhs(){
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$query=$this->db->get();

		return $query;
	}

	function geteditMhs($NIM){
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('NIM',$NIM);
		$query=$this->db->get();

		return $query;
	}

	function geteditProd($id_prodi){
		$this->db->select('*');
		$this->db->from('prodi');
		$this->db->where('id_prodi',$id_prodi);
		$query=$this->db->get();

		return $query;
	}

	function Kelamin(){
		$this->db->select('Jenis_Kelamin');
		$this->db->from('mahasiswa');
		$query=$this->db->get();

		return $query;
	}

	function Prodi(){
		$this->db->select('nama_prodi');
		$this->db->from('prodi');
		$query=$this->db->get();

		return $query;
	}

	function editProdi(){
		$this->db->select('*');
		$this->db->from('prodi');
		$query=$this->db->get();

		return $query;
	}

	public function nis(){
		  $this->db->select('RIGHT(mahasiswa.NIM,1) as NIM', FALSE);
		  $this->db->order_by('NIM','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('mahasiswa');  //cek dulu apakah ada sudah ada kode di tabel.    
		  
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->NIM) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			 $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			 $kodetampil = "31181".$batas;  //format kode
			 return $kodetampil;
		 }

	function getProdi(){
		$this->db->select('*');
		$this->db->from('prodi');
		$query=$this->db->get();

		return $query;
	}
	//fungsi untuk input data ke database
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	//fungsi untuk menampilkan data berdasar value var "where" dari tabel berdasar var "table"
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	//fungsi untuk mengupdate data beradasar value var "where" dari tabel berdasar var "table"
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	//fungsi untuk menghapus data beradasar value var "where" dari tabel berdasar var "table"
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	/*fungsi untuk login, tabel tm_user akan ter select jika user dan 
	password yang diinputkan sesuai dengan data yang ada di tabel */
	function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query=$this->db->get();
		return $query;
	}
}
?>