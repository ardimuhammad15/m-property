<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="{{ asset('img/home.jpg') }}" alt="Koperasi Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Property</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/profile-icon.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        {{-- <a href="#" class="d-block"><h5>{{ auth()->user()->name }}</h5></a> --}}
        <a href="#" class="d-block"><h5>Nama</h5></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Admin</li>
        <li class="nav-item">
          <a href="/dashboard/kelola-kriteria" class="nav-link {{ Request::is('dashboard/kelola-kriteria*')? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-list-check"></i>
            <p>
              POST
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/kelola-anggota" class="nav-link {{ Request::is('dashboard/kelola-anggota*')? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-people-group"></i>
            <p>
              Kelola User
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>