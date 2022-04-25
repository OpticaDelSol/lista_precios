<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-teal">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url("dashboard/listado_cat"); ?>" class="nav-link">Inicio</a>
      </li>
      <!--li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contacto</a>
      </li-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline" action="<?php echo site_url("dashboard/listado_cat"); ?>">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" name="filtro" type="search" placeholder="Filtro" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>&nbsp;Buscar
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!--li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li-->
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo site_url("inicio/logout") ?>" role="button">
          <i class="fas fa-door-open"></i>Salir
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->