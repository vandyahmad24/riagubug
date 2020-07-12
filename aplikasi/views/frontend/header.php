

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ria Gubug</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= BASE_URL ?>/frontend/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= BASE_URL ?>/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>/frontend/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>/frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>/frontend/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>/frontend/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>/frontend/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= BASE_URL ?>/frontend/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
<div class="container d-flex align-items-center">

  <div class="logo mr-auto">
    <a href="<?= BASE_URL ?>"><img src="<?= BASE_URL ?>/frontend/logo.png" class=""></a>
    
  </div>

  <nav class="nav-menu d-none d-lg-block">
    <ul>
      <li class="active"><a href="<?= BASE_URL ?>">Home</a></li>
      <li><a href="#about">Tentang Kami</a></li>
      <li><a href="#services">Layanan Kami</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#pricing">Daftar Harga</a></li>
        <?php
        
        if(isset($_SESSION["data_user"]) ){
         echo '
         <li><a href="'.BASE_URL.'/home/profil_user/'.$_SESSION['data_user']['id'].'" class="text-success">Profil</a></li>
          <li><a href="'.BASE_URL.'/home/logout" onclick="return confirm(`Anda Yakin Keluar?`);" class="text-danger">Keluar</a></li>
         <li class="get-started"><a href="#pricing">Silahkan, Order Sekarang</a></li>';
        }else{
          echo '<li class="get-started"><a href="'.BASE_URL.'/home/login" onclick="return confirm(`Anda Harus Login Dulu`);">Order Sekarang</a></li>';
        }
        ?>
     
    </ul>
  </nav><!-- .nav-menu -->

</div>
</header><!-- End Header -->
