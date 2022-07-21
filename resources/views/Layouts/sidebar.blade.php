<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Aplikasi Bukutamu</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Menu Utama</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Daftar Menu</h6>
                    <a class="collapse-item" href="#">Customer</a>
                    <a class="collapse-item" href="{{route('education.index')}}">Pendidikan</a>
                    <a class="collapse-item" href="{{route('job.index')}}">Pekerjaan</a>
                    <a class="collapse-item" href="{{route('media.index')}}">Media Pelayanan</a>
                    <a class="collapse-item" href="{{route('service.index')}}">Jenis Pelayanan</a>
                    {{-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"> --}}
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Kebutuhan Data</h6>
                            <a class="collapse-item" href="{{route('socpul.index')}}">Sosial & Kependudukan</a>
                            <a class="collapse-item" href="{{route('ecotra.index')}}">Ekonomi & Perdagangan</a>
                            <a class="collapse-item" href="#">Pertanian & Pertambangan</a>
                        </div>
                    {{-- </div> --}}
                </div>
            </div>
        </li>

        <li class="nav-item">
             <a class="nav-link" href="#">
                <i class="fas fa-sync-alt"></i>
                <span>Menu Transaksi</span></a>
        </li>
</ul>
