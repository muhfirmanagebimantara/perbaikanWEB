     <div class="row">
              
              <div class="col-lg-8 mt-4">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><b>EDIT DATA MAHASISWA</b></h1>
                  </div>
                  <form class="user" method="POST" action="<?=base_url('Mahasiswa/cek_edit');?>" >
                    <?php foreach ($mhs as $key) {
                      } ?>
                    <div class="form-group" id="tampil">
                     <input type="text" class="form-control " name="NIM" readonly="1" value="<?=$key->NIM;?>" id="exampleInputEmail"   placeholder="NIM..." required="1">
                  </div>
                  <div class="form-group" id="tampil">
                     <input type="text" class="form-control " name="Nama" value="<?=$key->Nama_mahasiswa;?>" id="exampleInputEmail"   placeholder="Nama Mahasiswa..." required="1">
                  </div>
                
                  <div class="form-group" id="tampil">
                    <select class="form-control" name="Prodi">
                     <?php foreach ($pd as $baris) {?>
                       <option value="<?=$baris->nama_prodi;?>" <?php if ($key->prodi == $baris->nama_prodi) { echo "SELECTED";} ;?> >
                      <?=$baris->nama_prodi;?>
                      </option>
                     <?php
                      }
                    ?>
                    </select>
                  </div>                    
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