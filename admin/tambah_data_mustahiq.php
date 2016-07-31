<?php 

include 'head_admin.php';
include 'config/config.php'; 


$result=tampilmustahiq();

if(isset($_POST['simpan'])){
	$namapenerima=$_POST['nama'];
	$namayayasan=$_POST['yayasan'];
	$alamat=$_POST['alamat'];
	$jumlah=$_POST['jumlah'];
	$tgl=$_POST['tgl'];	
	$amil=$_POST['namaamil'];

	if(simpandatamustahiq($namapenerima,$namayayasan,$alamat,$jumlah,$tgl,$amil)){
		echo "<script>alert('Berhasil')</script>";
	}else{
		echo "<script>alert('Gagal')</script>";
	}

}

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

<form action="" method="post">

<div class="container">
<div class="row">
	<div class="col-md-5">
		<div class="header">
			<h1>Tambah Data Mustahiq</h1>
			<hr>
		</div>
		  <div class="form-group">
		    <label >Nama Penerima</label>
		    <input type="text" name="nama" class="form-control">
		  </div>
		  <div class="form-group">
		    <label >Nama Yayasan</label>
		    <input type="text" name="yayasan" class="form-control">
		  </div>

		  <div class="form-group">
		    <label >Alamat Penerima</label>
		    <textarea name="alamat" id="" class="form-control" cols="10" rows="3"></textarea>
		  </div>

		  <div class="form-group">
		    <label >Jumlah Penyaluran Zakat</label>
		    <input type="number" name="jumlah" class="form-control">
		  </div>

		  <div class="form-group">
		    <label >Tanggal Penyaluran</label>
		    <input type="date" name="tgl" class="form-control">
		  </div>

		  <div class="form-group">
		    <label >Nama Amil</label>
		    <input type="text" name="namaamil" value="<?= $_SESSION['username'];?>" readonly class="form-control">
		  </div>
		  <input type="submit" name="simpan" class="btn btn-success" value="Simpan Data">
		  <a href="data_mustahiq.php" class="btn btn-primary">Kembali</a>
	</div>
</div>
</form>
</div>

  <section class="content">
  </section>
</div>

<?php include 'foot_admin.php'; ?>