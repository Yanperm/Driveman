
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Driveman Management</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/starter-template/">

    

    <!-- Bootstrap core CSS -->
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<!-- JavaScript and dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200&display=swap" rel="stylesheet">
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


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
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">Driveman System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto mb-2 mb-md-0">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="<?php echo base_url(); ?>" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Dropdown</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="<?php echo base_url(); ?>">Action</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url(); ?>">Another action</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url(); ?>">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex"action="<?php echo base_url('welcome/insert'); ?>" method="post">
          <input class="form-control mr-2" type="search" name="customer_id" placeholder="รหัสลูกค้า" aria-label="Search">
          <input class="form-control mr-2" type="search" name="customer_name" placeholder="ขื่อนามสกุล" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">
          Save</button>
        </form>
    </div>
  </div>
</nav>
