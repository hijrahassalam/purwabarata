<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.3/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>PURWABARATA v1.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">
		<!-- ICON JATHAYU FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/favicon.ico" />

		<!-- CHART -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

		<!-- CHART LAMA -->
		<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>

    <!-- Bootstrap core CSS -->
    <!-- arahkan url ke direktori 'assets' -->
<link href="<?php echo base_url();?>assets/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <!-- arahkan url ke direktori 'assets' -->
		<link href="<?php echo base_url();?>assets/dashboard.css" rel="stylesheet">
		
</head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://getbootstrap.com/docs/4.3/examples/dashboard/#">PURWABARATA MGMT</a>

  <!-- tampilkan fullname dari user yang sedang login -->
  <div class="w-100" style="margin-left: 25px; color: white;">Welcome, <?php echo $fullname; ?></div>

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <!-- arahkan link ke kontroller 'dashboard/logout' -->
      <a class="nav-link" href="<?php echo site_url('dashboard/logout');?>">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
				<li class="nav-item">
            <!-- arahkan link ke kontroller 'dashboard/index' -->
            <a class="nav-link" href="<?php echo site_url('dashboard/index'); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Dashboard
            </a>
          </li>
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
							<span>MASTER DATA</span>
					</h6>

          <li class="nav-item">
<!-- arahkan link ke kontroller 'dashboard/books' -->
            <a class="nav-link" href="<?php echo site_url('dashboard/maru'); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
							Mahasiswa Baru
            </a>
					</li>
<!-- arahkan link ke kontroller 'dashboard/kategori' -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('dashboard/kabim'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              Manggala
            </a>
          </li>
          <?php // if ( $_SESSION['role']=='Administrator'):  ?>

					<!-- arahkan link ke kontroller 'dashboard/user' -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('dashboard/group') ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
              Group
            </a>
          </li>         
											
				<li class="nav-item">
         <!-- arahkan link ke kontroller 'dashboard/add' -->
          <a class="nav-link" href="<?php echo site_url('dashboard/addmaru'); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Add Mahasiswa Baru
            </a>
					</li>

          <li class="nav-item">
            <!-- arahkan link ke kontroller 'dashboard/add' -->
            <a class="nav-link" href="<?php echo site_url('dashboard/addkabim'); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Add Manggala
            </a>
          </li>

					<li class="nav-item">
            <!-- arahkan link ke kontroller 'dashboard/add' -->
            <a class="nav-link" href="<?php echo site_url('dashboard/addgroup'); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Add Group
            </a>
					</li>
					
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
							<span>AGENDA</span>
					</h6>
					<!-- arahkan link ke kontroller 'dashboard/kategori' -->
					<li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('dashboard/agenda'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
              Agenda
            </a>
					</li>

          <li class="nav-item">
            <!-- arahkan link ke kontroller 'dashboard/add' -->
            <a class="nav-link" href="<?php echo site_url('dashboard/addagenda'); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Add Agenda
            </a>
					</li>


					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
							<span>USER</span>
					</h6>
					
          <!-- arahkan link ke kontroller 'dashboard/user' -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('dashboard/user') ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              User
            </a>
          </li>  

          <li class="nav-item">
            <!-- arahkan link ke kontroller 'dashboard/add' -->
            <a class="nav-link" href="<?php echo site_url('dashboard/adduser'); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Add User
            </a>
					</li>
					
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
							<span>TRANSAKSI</span>
					</h6>
				
          <li class="nav-item">
            <!-- arahkan link ke kontroller 'dashboard/add' -->
            <a class="nav-link" href="<?php echo site_url('dashboard/laporan'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              Laporan Presensi
            </a>
          </li>
          <?php  
         // else:
          //endif; ?>

        </ul>

      </div>
    </nav>
