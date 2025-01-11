<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:;" class="brand-link" style="text-align: center;">
      <span class="brand-text font-weight-light" style="font-weight: bold !important; font-size:20px;">Agenda Cultural</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>
        <div class="info">
          <!--<a href="#" class="d-block">Alexander Pierce</a>-->
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{url('admin/dashboard') }}" class="nav-link  @if(Request::segment(2) =='dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard {{ Request::segment(1) }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/categorias') }}" class="nav-link @if(Request::segment(2) =='categorias') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
                Categorias
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/eventos') }}" class="nav-link @if(Request::segment(2) =='eventos') active @endif">
              <i class="nav-icon fas fa-map-marker-alt mr-1"></i>
              <p>
                Eventos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('logout') }}" class="nav-link">
               <i class="nav-icon fas fa-lg fa-sign-out-alt" aria-hidden="true"></i>
              <p>
                Sair
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
