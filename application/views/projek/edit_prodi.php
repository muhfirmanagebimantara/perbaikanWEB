     <div class="row">
              
              <div class="col-lg-8 mt-5">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><b>EDIT DATA PRODI</b></h1>
                  </div>
                  <form class="user" method="POST" action="<?=base_url('Mahasiswa/cek_editprod');?>" >
                  
                    <?php  
                    foreach ($pd as $baris) {
                    ?>
                  
                  <div class="form-group" id="tampil">
                     <input type="text" class="form-control " name="id_prodi" hidden="1" id="exampleInputEmail" value="<?=$baris->id_prodi;?>"  placeholder="Nama PRODI..." required="1">
                  </div>

                  <div class="form-group" id="tampil">
                     <input type="text" class="form-control " name="nama_prodi" id="exampleInputEmail" value="<?=$baris->nama_prodi;?>"  placeholder="Nama PRODI..." required="1">
                  </div>
                  <?php
                  }
                  ?>
                   <input type="submit" name="submit" value="EDIT DATA " class="btn btn-primary btn-block">
                    <hr>
                   
                  </form>
                
                </div>
              </div>
              <div class="col-lg-4" style="text-align: center;">
                 <div class="p-5" >
                <img style="display: inline-block;padding-top:30px;width:250px" src="<?=base_url('assets/img/logo.png');?>"> 
              </div>
              </div>
            </div>