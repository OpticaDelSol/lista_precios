<?php 

$CI=& get_instance();

if(!$CI->session->userdata('user_name'))
{
    redirect('inicio/index');
}

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url("dashboard/listado_cat"); ?>" class="brand-link">
      <img src="<?php echo site_url('resources/img/_optica_del_sol.png');?>" alt=Sol" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">&Oacute;ptica Del Sol</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo site_url('resources/img/_optica_del_sol.png');?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $CI->session->userdata('user_name'); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!--div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div0 >-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo site_url("dashboard/listado_cat"); ?>" class="nav-link">
              <i class="far fa-star nav-icon"></i>
              <p>Lista de Precios</p>
            </a>
          </li>
        </ul>
      </nav>
      <!--ADMIN-->
      <?php 

      if( trim($CI->session->userdata('permisos')) == trim("admin")){?>
        <div class="info">
            <a href="#" class="d-block">Admin</a>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?php echo site_url("categoria/list"); ?>" class="nav-link">
                <i class="far fa-star nav-icon"></i>
                <p>Categor&iacute;as</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?php echo site_url("subCategoria/list"); ?>" class="nav-link">
                <i class="far fa-star nav-icon"></i>
                <p>Sub-Categor&iacute;a</p>
              </a>
            </li>
          </ul>
        </nav>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?php echo site_url("producto/list"); ?>" class="nav-link">
                <i class="far fa-star nav-icon"></i>
                <p>Productos</p>
              </a>
            </li>
          </ul>
        </nav>
        <?php }?>
    </div>
    <!-- /.sidebar -->
  </aside>
