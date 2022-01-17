<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Welcome Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
                DETAIL
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('barang.index') }}">
                    <i class="fas fa-fw fa-cubes"></i>
                    <span>Barang - Barang</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PENGELOLA
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('barangmasuk.index') }}">
                    <i class="fas fa-fw fa-download"></i>
                    <span>Barang Masuk</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('barangkeluar.index') }}">
                    <i class="fas fa-fw fa-paper-plane"></i>
                    <span>Barang Keluar</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PINJAM
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="admin/buku">
                    <i class="fas fa-fw fa-history"></i>
                    <span>Peminjaman</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                INFO !!!
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="admin/buku">
                    <i class="fas fa-fw fa-hourglass"></i>
                    <span>Pengembalian</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="admin/buku">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan</span></a>
            </li>

            

        </ul>