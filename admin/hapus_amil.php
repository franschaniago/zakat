<?php

include 'config/config.php';

if(isset($_GET['id'])){
	if(hapus_dataamil($_GET['id'])){
		echo "<script>document.location.href='data_amil.php';</script>";
	}else echo "gagal menghapus data";
}

?>
