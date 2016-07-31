<?php 


include 'config/config.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Izakat</title>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
  body{
    background-color: rgba(195, 191, 191, 0.09);
  }

  .navbar-default .navbar-toggle .icon-bar {
    background-color: #fffcfc;
}

.navbar-default .navbar-toggle:hover {
    background-color: #00afd1;
}

  .navbar-default .navbar-brand {
    color: #f5f5f5;
}
    .garis{
      border: 0.5px solid #00afd1;
    }

    .garis_foot{
      border: 0.5px solid white;
    }

    .navbar-default {
    background-color: #00afd1;
    border-color: #00afd1;
    border-radius: 0px;
    }

    .navbar-default .navbar-nav>li>a{
      color: white;
    }
    
    .btn-success{
      border-radius: 0px;
    }

    .navbar-default .navbar-nav>li>a:hover {
    color: #fff;
    background-color: #a4c5e2;
    }

    .well{
      background-color: white;
    }
    
    .carousel-caption{
      background-color:black; 
      opacity:0.5;
    }

    footer.footer {
    border: 0px solid black;
    height: 100%;
    margin-top: 1%;
    background-color: #00afd1;
    color: white;
    }
  </style>
  <body>

    <nav class="navbar navbar-default">
  <div class="container-fluid menu">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Izakat</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <?php if(empty($_SESSION['iduser'])){ ?> 
        <li><a href="login.php">Masuk</a></li>
        <li><a href="register.php">Daftar</a></li> 
        <?php }else {?>
          <li></li>
        <?php } ?>
        <?php if(empty($_SESSION['iduser'])){ ?> 
        <li></li>
        <?php }else{ ?>
        <li><a href="logout.php">Keluar</a></li> 
        <?php }?>
      </ul>
      <ul class="nav navbar-nav navbar-left">
       <?php if(empty($_SESSION['iduser'])){ ?> 
        <li></li>
        <?php }else{ ?>
      <li><a href="profil.php">Profil</a></li> 
      <?php }?>
        <li><a href="bayarzakat.php">Bayar Zakat</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hitung Zakat<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="hitungzakatemas.php">Zakat Emas</a></li>
            <li><a href="hitungzakatemaspakai.php">Zakat Emas Yang di pakai</a></li>
            <li><a href="hitungzakatperak.php">Zakat Perak</a></li>
            <li><a href="hitungzakatpertanian.php">Zakat Pertanian</a></li>
            <li><a href="hitungzakattani_biaya.php"">Zakat Pertanian Dengan Pengairan</a></li>
            <li><a href="hitungzakatperdagangan.php">Zakat Perdagangan</a></li>
            <li><a href="zakathewanternak.php">Zakat Hewan Ternak</a></li>
          </ul>
        </li>
        <?php if(empty($_SESSION['iduser'])){ ?> 
        <li></li>
        <?php }else{ ?>
        <li><a href="pesan.php">Pesan</a></li> 
        <?php } ?>
        <li><a href="faq.php">FAQ</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
<div class="row">
  
  <div class="col-md-9">

<!--
  <div class="jumbotron">
  <div class="banner">
  <center>
        <h1>Selamat Datang di E-zakat</h1>
        <p class="lead">Rasakan kemudahan membayar dan menghitung zakat dengan E-zakat</p>
        
        <p><a class="btn btn-lg" id="pelajari" href="faq.php" role="button">Pelajari E-zakat</a></p>
        </center><br>

    <div class="row">
    <div class="col-md-4">
    <center>
    <?php while ($row=mysqli_fetch_assoc($result_pemasukan)) { ?>
    <p>Pemasukan Zakat</p>
    <h2>Rp.<?php echo rupiah($row['total']); $a=$row['total']; ?></h2>
    <?php } ?>
    </center>
    </div>
    <div class="col-md-4">
    <center>
    <p>Penyaluran Zakat</p>
    <?php while ($row=mysqli_fetch_assoc($result_penyaluran)){?>
    <h2>Rp.<?php echo rupiah($row['jumlah']); $b=$row['jumlah']; ?></h2>
    <?php } ?>
    </center>
    </div>
    <div class="col-md-4">
    <center>
    <p>Total</p>
    <h2>Rp.<?php $c=$a-$b; echo rupiah($c); ?></h2>
    </center>
    </div>
  </div>
  </div>
</div> -->