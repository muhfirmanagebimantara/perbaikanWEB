     <div class="row">
              
              <div class="col-lg-8 mt-4">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><b>TAMBAH DATA MAHASISWA</b></h1>
                  </div>
                  <form class="user" method="POST" action="<?=base_url('Mahasiswa/cek_mhs');?>" >
                    
                    <div class="form-group" id="tampil">
                     <input type="text" class="form-control " readonly="1" name="NIM" value="<?=$nis;?>"  placeholder="NIM..." required="1">
                  </div>
                  <div class="form-group" id="tampil">
                     <input type="text" class="form-control " name="Nama" id="exampleInputEmail"   placeholder="Nama Mahasiswa..." required="1">
                  </div>
                  
                  <div class="form-group" id="tampil" >
                    <select class="form-control" name="Prodi" required="1">
                      <option value="">
                        Pilih Jenis Prodi
                      </option>
                       <?php foreach ($pd as $baris) {
                      echo "<option value ='$baris->nama_prodi'>
                        $baris->nama_prodi
                      </option>"; 
                      }
                      ?>
                    </select>
                  </div>                    
                    <input type="submit" name="submit" value="TAMBAH DATA " class="btn btn-primary btn-block">
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