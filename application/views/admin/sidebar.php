<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>admin">
        <div class="sidebar-brand-icon">
            <i class="fas fa-dice-d6"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIMICE PANEL</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        User
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin">
            <i class="fas fa-fw fa-user"></i>
            <span>Member</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/atur_produk">
            <i class="fas fa-fw fa-edit"></i>
            <span>Atur Produk</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/riwayat">
            <i class="fas fa-fw fa-history"></i>
            <span>Riwayat Transaksi</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->