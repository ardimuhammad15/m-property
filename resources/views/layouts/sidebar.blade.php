<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Koperasi UPNVJ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/profile-icon.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><h5>{{ auth()->user()->name }}</h5></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard')? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="dropdown-divider"></li>
          <li class="nav-header">Admin</li>

          <li class="nav-item">
            <a href="/dashboard/kelola-kriteria" class="nav-link {{ Request::is('dashboard/kelola-kriteria')? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kelola Kriteria
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/kelola-anggota" class="nav-link {{ Request::is('dashboard/kelola-anggota')? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Kelola Anggota
              </p>
            </a>
            
          </li>

          <li class="dropdown-divider"></li>
          <li class="nav-header">Data Master</li>

          <li class="nav-item">
            <a href="/dashboard/simpanan" class="nav-link {{ Request::is('dashboard/simpanan')? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Simpanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/pinjaman" class="nav-link {{ Request::is('dashboard/pinjaman')? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Pinjaman
              </p>
            </a>
          </li>

          <li class="dropdown-divider"></li>
          <li class="nav-header">Analisis SPK</li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Matriks Awal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Normalisasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Hasil Perhitungan
              </p>
            </a>
          </li>

          <li class="dropdown-divider"></li>
          <li class="nav-header">Laporan</li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Hasil Perangkingan
              </p>
            </a>
          </li>

          <li class="dropdown-divider"></li>
            <li class="nav-item">
              <form action="/logout" method="post">
              @csrf
              <button class="nav-link bg-danger" type="submit">Logout</button>
              </form>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>