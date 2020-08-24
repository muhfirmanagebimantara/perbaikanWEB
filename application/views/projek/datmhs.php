 <div class="container-fluid">

          <!-- Page Heading -->
          <h3 class="h3 mb-2 text-gray-800">Data Mahasiswa</h3>
          <?= $this->session->flashdata('message');?>
          <br>
          <?php
          if ($this->session->userdata('level') == "1") {
          ?>
           <a href="<?=base_url('Mahasiswa/tambahmhs');?>">
           <button class="btn btn-primary btn-user ">Tambah Data</button> 
          </a>
          <br>
          <?php
          }else{
          }
          ?>
          
          <br>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Mahasiswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                      <th>PRODI</th>
                       <?php
                      if ($this->session->userdata('level') == "1") {
                      ?>
                    <th>AKSI</th>
                       <?php
                      }else{}
                      ?>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                   <th>NO</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                      <th>PRODI</th>
                       <?php
                      if ($this->session->userdata('level') == "1") {
                      ?>
                    <th>AKSI</th>
                       <?php
                      }else{}
                      ?>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php 
                    $no = 1;
                    foreach ($mhs as $brs): 
                    ?>
                    
                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$brs->NIM;?></td>
                      <td><?=$brs->Nama_mahasiswa;?></td>
                      <td><?=$brs->prodi;?></td>
                       <?php
                      if ($this->session->userdata('level') == "1") {
                      ?>
                      <td>
                        <a href="<?=base_url('Mahasiswa/edit/'.$brs->NIM);?>">Edit</a> |
                        <a href="<?=base_url('Mahasiswa/hapus/'.$brs->NIM);?>">Hapus</a>
                      </td>
                       <?php
                      }else{}
                      ?>

                    </tr>
                    
                    <?php endforeach ?>
                    
                    </tbody> 
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
