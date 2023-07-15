<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <img src="<?php echo base_url('assets/dist')?>/img/logo.jpg" height='60 px' alt="Aisyah Adreena Furniture" class="brand-image img-circle elevation-1">
        <div class="info">
          <a href="#" class="d-block">Aisyah Adreena Furniture</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="<?php echo $menu_dashboard ?>">
            <a href="<?php echo site_url('Admin') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="<?php echo $menu_penjualan ?>">
            <a href="<?php echo site_url('Penjualan') ?>" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo site_url('Login/logout') ?>" class="nav-link">
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>        
      <!-- #Menu -->
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

