  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >
      <div style="text-align: center;">
      <img  style="width:100px;height:100px;display:inline-block;margin-top:20px;padding:5px" src="<?= base_url('assets/img/logo.png');?>">
    </div>
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Mahasiswa');?>">
        
        <div class="sidebar-brand-text mx-3">Manajemen Informatika</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Mahasiswa');?>">
          <span >Home</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Master</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Mahasiswa :</h6>
            <a class="collapse-item" href="<?= base_url('Mahasiswa/datmhs');?>">Master Mahasiswa</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Prodi : </h6>
            <a class="collapse-item" href="<?= base_url('Mahasiswa/datprodi');?>">Master Prodi</a>
            </div>
        </div>
      </li>   

      <!-- Divider -->
      <hr class="sidebar-divider">

       <div class="sidebar-heading active">
        Other : 
      </div>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Mahasiswa/logout');?>">
          <span >Logout</span></a>
      </li>

      <!-- Heading -->
    
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline" style="margin-top:20px">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->