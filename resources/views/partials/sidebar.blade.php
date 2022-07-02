<aside id="sidebar-wrapper">
  <div class="sidebar-brand mt-3 mb-2">
            <a href="{{ url('/home') }}">
                <span class="brand-title">
                    <img src="{{ asset('assets/icons/L5.png') }}" width="130" alt="">
                </span>
            </a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/home') }}">
                <span class="brand-title">
                    <img src="{{ asset('assets/icons/L4.png') }}" width="30" alt="">
                </span>
            </a>
          </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="{{ request()->is('/home') ? 'active' : '' }}">
      <a class="nav-link" href="{{ url('/home') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a>
    </li>
    
    <li class="menu-header">Master Data Pengguna</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-check"></i> <span>Kelola Pengguna</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="#"><i class="fa fa-user-clock"></i>Data Admin</a></li>
        <li><a class="nav-link" href="#"><i class="fa fa-user-graduate"></i>Data Dosen</a></li>
        <li><a class="nav-link" href="#"><i class="fa fa-user"></i>Data Mahasiswa</a></li>
        </ul>
    </li>

    <li class="menu-header">Master Data Rekapitulasi</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list"></i> <span>Master Rekapitulasi</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="/Fakultas"><i class="fa fa-file"></i>Fakultas</a></li>
        <li><a class="nav-link" href="/Program-studi"><i class="fa fa-file"></i>Program Studi</a></li>
        <li><a class="nav-link" href="/Jenis-publikasi"><i class="fa fa-file"></i>Jenis Publikasi</a></li>
        <li><a class="nav-link" href="/Kategori-jurnal"><i class="fa fa-file"></i>Kategori Jurnal</a></li>
        <li><a class="nav-link" href="/Peneliti"><i class="fa fa-file"></i>Peneliti</a></li>
        </ul>
    </li>

    <li class="menu-header">Daftar Penelitian</li>
    <li class="{{ request()->is('/') ? 'active' : '' }}">
      <a class="nav-link" href="{{ url('/Daftar-penelitian') }}"><i class="fas fa-search"></i> <span>Daftar Penelitian</span></a>
    </li>
    <li class="{{ request()->is('/') ? 'active' : '' }}">
      <a class="nav-link" href="{{ url('/Rekapitulasi-penelitian') }}"><i class="fas fa-book"></i> <span>Rekapitulasi Penelitian</span></a>
    </li>

    <li class="menu-header">Daftar Pengabdian Masyarakat</li>
    <li class="{{ request()->is('/') ? 'active' : '' }}">
      <a class="nav-link" href="{{ url('/Pengabdian-masyarakat') }}"><i class="fas fa-users"></i> <span>Pengabdian Masyarakat</span></a>
    </li>
    <li class="{{ request()->is('/') ? 'active' : '' }}">
      <a class="nav-link" href="{{ url('/Rekapitulasi-pengabdian-masyarakat') }}"><i class="fas fa-book"></i> <span>Rekapitulasi PPM</span></a>
    </li>

  </ul>
</aside>
