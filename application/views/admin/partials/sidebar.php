<!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="<?php echo base_url('assets/img/hoho.jpg')?>"><h4>Keuangan</h4>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo site_url('Dashboard')?>">
                <i class="ni ni-mobile-button text-dark"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/Uang_masuk')?>">
                <i class="ni ni-cloud-download-95 text-dark"></i>
                <span class="nav-link-text">Uang Masuk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/Uang_keluar')?>">
                <i class="ni ni-cloud-upload-96 text-dark"></i>
                <span class="nav-link-text">Uang Keluar</span>
              </a>
            </li>
            
          </ul>

          </ul>
        </div>
      </div>
    </div>
  </nav>