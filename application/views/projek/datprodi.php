 <div class="container-fluid">

          <h3 class="h3 mb-2 text-gray-800">Data Prodi</h3>
             <?= $this->session->flashdata('message');?>
          <br>
          <?php
          if ($this->session->userdata('level') == "1") {
          ?>
           <a href="<?=base_url('Mahasiswa/tambahprodi');?>">
           <button class="btn btn-primary btn-user ">Tambah Data</button> 
          </a>
          <br>
          <?php
          }else{
          }
          ?>
          <!-- DataTales Example -->
          
          <br>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Prodi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID PRODI</th>
                      <th>NAMA PRODI</th>
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
                      <th>ID PRODI</th>
                      <th>NAMA PRODI</th>
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
                    foreach ($mhs as $brs): 
                    
                      ?>
                    
                    <tr>
                      <td><?=$brs->id_prodi;?></td>
                      <td><?=$brs->nama_prodi;?></td>
                       <?php
                      if ($this->session->userdata('level') == "1") {
                      ?>
                      <td>
                        <a href="<?=base_url('Mahasiswa/editprod/'.$brs->id_prodi);?>">Edit</a> |
                        <a href="<?=base_url('Mahasiswa/hapusprod/'.$brs->id_prodi);?>">Hapus</a>
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
