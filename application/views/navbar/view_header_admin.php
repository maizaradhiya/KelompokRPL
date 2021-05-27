<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Admin Page - WeCan</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="<?php echo base_url() ?>/assets/assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo base_url() ?>/assets/assets1/css/shop-homepage.css" rel="stylesheet">

  <!-- css -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css'; ?>" /> -->

  <!-- ======================================================================================================= -->

  <!-- navbar -->
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container mr-auto ml-5">
    <a href="<?= base_url('web/viewhome_donatur') ?>">
      <img src="<?= base_url() ?>assets/img/wclogo2.png" width="200" height="50" />
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto mr-auto">
          <li class="nav-item mr-5">
            <a class="nav-link" href="<?php echo base_url('web/viewhome_donatur') ?>">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item mr-5">
            <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">Pengaturan Event</a>
          </li>
          <li class="nav-item mr-5">
            <a class="nav-link" href="<?php echo base_url('web/viewabout') ?>">About</a>
          </li>
            <li class="nav-item mr-5">
            	<a class="nav-link" href="<?php echo base_url('Auth/logout') ?>"><span class="btn btn-sm btn-danger">Logout</span></a>
          </li>
        </ul>
      </div>
    <!-- </div> -->
  </nav>


<!-- ======================================================================================================= -->
