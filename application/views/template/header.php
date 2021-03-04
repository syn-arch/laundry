<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $judul ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('vendor/adminlte/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('vendor/adminlte/') ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Laundry APP</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block"><?php echo $this->session->userdata('nama') . ' - ' . $this->session->userdata('role'); ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?php echo base_url('dashboard') ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <?php if ($this->session->userdata('role') != 'kasir'): ?>
              <?php if ($this->session->userdata('role') != 'owner'): ?>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-box"></i>
                    <p>
                      Data Master
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url('outlet') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Outlet</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url('paket') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Paket</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url('member') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Member</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url('user') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data User</p>
                      </a>
                    </li>
                  </ul>
                </li>
              <?php endif ?>
            <?php endif ?>

            <?php if ($this->session->userdata('role') != 'owner'): ?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-dollar-sign"></i>
                  <p>
                    Transaksi 
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url('transaksi/tambah') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Transaksi baru</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url('transaksi') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Riwayat Transaksi</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php endif ?>

            <?php if ($this->session->userdata('role') != 'kasir'): ?>
              <li class="nav-item">
                <a href="<?php echo base_url('laporan') ?>" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p>
                    Laporan
                  </p>
                </a>
              </li>
            <?php endif ?>

            <li class="nav-item">
              <a href="<?php echo base_url('auth/logout') ?>" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <?php if ($judul != 'Tambah Transaksi'): ?>  
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"><?php echo $judul ?></h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
      <?php endif ?>


      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

