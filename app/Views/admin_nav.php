  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <base href="<?= base_url("assets") ?>/">
    <div class="brand-link">
  <img src="dist/img/LogoRaskin.jpeg" alt="Apps Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">RASKIN</span>
</div>


    
    
    <!-- Sidebar -->  
    <div class="sidebar">
      <!-- Sidebar user (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
          <li class="nav-item">
            <a href="<?php echo base_url('/viewmebel'); ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('Home/callviewdatawarga');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Warga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Home/callviewdatakriteria');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Home/callviewdataskala');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Skala</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewmatrixkeputusan');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Matrix Keputusan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewnormalisasi');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Normalisasi Terbobot
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewhitung');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hasil WP Pangkat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewdatavektors');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hasil Vektor S
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewranking');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hasil & Perangkingan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewkeputusan');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hasil Keputusan
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>