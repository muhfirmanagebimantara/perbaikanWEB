<?php

class Mahasiswa extends CI_Controller {
  
  function __construct(){
    parent:: __construct();
    $this->load->model('Mahasiswa_model');
    $this->load->library('template');
  }

  public function login (){
    if (!$this->session->userdata('username')) {
    $this->load->view('projek/login');
    }else{
      redirect('Mahasiswa');
    }
  }
  
  public function cek_log(){
    $level = $this->input->post('level');
    $NIM = $this->input->post('NIM');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    

    if ($level == "MAHASISWA") {

        $cek = $this->db->get_where('mahasiswa',['NIM'=>$NIM])->row_array();
    
    if ($cek) {

        
      $data = [
        'level' => $cek['level'],
        'username' => $cek['Nama_mahasiswa']
      ];

      $this->session->set_userdata($data);
      redirect('Mahasiswa');

    
   
    }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Login Gagal ! NIM Tidak Terdaftar</div>');
      redirect('Mahasiswa/login');
    }


    }else if ($level == "ADMIN") {
   
    $cek = $this->db->get_where('admin',['username'=>$username])->row_array();
    
    if ($cek) {

      if ($password == $cek['password']) {

       
      $data = [
        'level' => $cek['level'],
        'username' => $cek['username']
      ];

      $this->session->set_userdata($data);
      redirect('Mahasiswa');

    }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Login Gagal ! Email atau Password Salah</div>');
      redirect('Mahasiswa/login');
    }
    }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Login Gagal ! User Belum Terdaftar</div>');
      redirect('Mahasiswa/login');
    }

  }else{
    $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Login Gagal ! Data Tidak Valid</div>');
      redirect('Mahasiswa/login'); 
  }
  
  }

    public function cek_mhs(){
    
    $Nama = $this->input->post('Nama');
    $NIM = $this->input->post('NIM');
    $Prodi = $this->input->post('Prodi');
    

    $cek = $this->db->get_where('mahasiswa',['Nama_mahasiswa'=>$Nama])->row_array();
    
    if ($cek == FALSE ) {
        
      $data = [
        'NIM' => $NIM,
        'Nama_mahasiswa' => $Nama,
        'prodi' => $Prodi,
        'level' => 2
      ];

      $this->Mahasiswa_model->input_data($data,'mahasiswa');
      $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px" role="alert">Tambah Data Mahasiswa Sukses</div>');
      redirect('Mahasiswa/datmhs');
    }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Tambah Data Mahasiswa Gagal</div>');
      redirect('Mahasiswa/datmhs');
    }
  
  }

  public function cek_prodi(){
    
    $prodi = $this->input->post('prodi');

    $cek = $this->db->get_where('prodi',['nama_prodi'=>$prodi])->row_array();
    
    if ($cek == FALSE ) {
        
      $data = [
      
        'nama_prodi' => $prodi
      ];

      $this->Mahasiswa_model->input_data($data,'prodi');

      $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px" role="alert">Tambah Data Prodi Sukses</div>');

      redirect('Mahasiswa/datprodi');
    }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Tambah Data Prodi Gagal</div>');
      redirect('Mahasiswa/datpro');
    }
  
  }

  public function cek_edit(){
    
    $Nama = $this->input->post('Nama');
    $NIM = $this->input->post('NIM');
    $Prodi = $this->input->post('Prodi');
    

    $cek = $this->db->get_where('mahasiswa',['NIM'=>$NIM])->row_array();
    
    if ($cek) {
        
      $data = [
        'NIM' => $NIM,
        'Nama_mahasiswa' => $Nama,
        'prodi' => $Prodi,
        'level' => 2
      ];
        
         $where = [
        'NIM'=>$NIM];

      $edit = $this->Mahasiswa_model->update_data($where,$data,'mahasiswa');
      
      $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px" role="alert">Edit Data Mahasiswa Sukses</div>');
      redirect('Mahasiswa/datmhs');
     
    }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Edit Data Mahasiswa Gagal ! Nama Mahasiswa Telah Terdaftar</div>');
      redirect('Mahasiswa/datmhs');
    }
  
  }

  public function cek_editprod(){
    
    $id_prodi = $this->input->post('id_prodi');
    $nama_prodi = $this->input->post('nama_prodi');
   

    $cek = $this->db->get_where('prodi',['nama_prodi'=>$nama_prodi])->row_array();
    
    if ($cek == FALSE ) {
        
      $data = [
        'nama_prodi' => $nama_prodi
        ];

       $where = [
        'id_prodi'=>$id_prodi];

      $this->Mahasiswa_model->update_data($where,$data,'prodi');
      
      $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px" role="alert">Edit Data Prodi Sukses</div>');
      redirect('Mahasiswa/datprodi');
     
    }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Edit Data Prodi Gagal ! Prodi telah Ada</div>');
      redirect('Mahasiswa/datprodi');
    }
  
  }

  public function index (){
     if (!$this->session->userdata('username')) {
    $this->load->view('projek/login');
  }else{
    $data['mhs'] = $this->Mahasiswa_model->getMhs()->num_rows();
    $data['prod'] = $this->Mahasiswa_model->getProdi()->num_rows();
    $this->template->views('projek/home_mahasiswa',$data);
  }
     
  }

   public function datmhs (){
     if (!$this->session->userdata('username')) {
    $this->load->view('projek/login');
  }else{
    $data['mhs'] = $this->Mahasiswa_model->getMhs()->result(); 
    $this->template->views('projek/datmhs',$data);
  }
     
  }

   public function tambahmhs (){
     if (!$this->session->userdata('username')) {
    $this->load->view('projek/login');
  }else{
    $data['nis'] = $this->Mahasiswa_model->nis();
    $data['pd'] = $this->Mahasiswa_model->Prodi()->result();
    $this->template->views('projek/tmbahmhs',$data);
  }
     
  }

   public function tambahprodi (){
     if (!$this->session->userdata('username')) {
    $this->load->view('projek/login');
  }else{
   
    $this->template->views('projek/tambahprodi');
  }
     
  }

  public function edit ($NIM){
     if (!$this->session->userdata('username')) {
    $this->load->view('projek/login');
  }else{
    $data['pd'] = $this->Mahasiswa_model->editProdi()->result();
    $data['mhs'] = $this->Mahasiswa_model->geteditMhs($NIM)->result(); 
    $this->template->views('projek/editmhs',$data);
  }
     
  }

   public function editprod ($id_prodi){
     if (!$this->session->userdata('username')) {
    $this->load->view('projek/login');
  }else{
    $data['pd'] = $this->Mahasiswa_model->geteditProd($id_prodi)->result();
    $this->template->views('projek/edit_prodi',$data);
  }
     
  }

  public function hapus ($NIM){
     if (!$this->session->userdata('username')) {
    $this->load->view('projek/login');
  }else{
     $where = [
        'NIM'=>$NIM];
    $this->Mahasiswa_model->hapus_data($where,'mahasiswa'); 
     $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px" role="alert">Hapus Data Mahasiswa Sukses</div>');
    redirect('Mahasiswa/datmhs');
  }
     
  }

  public function hapusprod ($id_prodi){
     if (!$this->session->userdata('username')) {
    $this->load->view('projek/login');
  }else{
      $where = [
        'id_prodi'=>$id_prodi];
    $this->Mahasiswa_model->hapus_data($where,'prodi'); 
     $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px" role="alert">Hapus Data Prodi Sukses</div>');
    redirect('Mahasiswa/datprodi');
  }
     
  }

   public function datprodi (){
     if (!$this->session->userdata('username')) {
    $this->load->view('projek/login');
  }else{
    $data['mhs'] = $this->Mahasiswa_model->getProdi()->result(); 
    $this->template->views('projek/datprodi',$data);
  }
     
  }
   public function logout (){
        if (!$this->session->userdata('username')) {
    $this->load->view('projek/login');
  }else{
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px;" role="alert">Anda berhasil Logout</div>');
        
    $this->load->view('projek/login');
     }
     
  }


}
?>