<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/favicon.png<?php //echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Administrator<?php //echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="<?php //echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Daring</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MENU UTAMA</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'dashboard') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('admin/Dashboard'); ?>">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <li <?php if ($page == 'peserta') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('admin/Peserta'); ?>">
          <i class="fa fa-user"></i>
          <span>Data Peserta</span>
        </a>
      </li>

      <li <?php //if ($page == 'pegawai') {echo 'class="active"';} ?>>
        <a href="<?php //echo base_url('Pegawai'); ?>">
          <i class="fa fa-archive"></i>
          <span>Arsip</span>
        </a>
      </li>

      <li class="header">MENU ADMIN</li>

      <li <?php //if ($page == 'pegawai') {echo 'class="active"';} ?>>
        <a href="<?php //echo base_url('Pegawai'); ?>">
          <i class="fa fa-cog"></i>
          <span>Pengaturan</span>
        </a>
      </li>

    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>