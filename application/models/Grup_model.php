<?php
/**
* 
*/
class Grup_model extends CI_Model
{
	/*fungsi get all untuk memanggil tabel
	tm_grup setelah itu mengquerynya*/
	function getAll(){
		$this->db->select('*');
		$this->db->from('tm_grup');
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
}
?>