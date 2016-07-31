<?php

include 'config/config.php';

if(isset($_GET['id'])){
	if(hapus_datamuzakki($_GET['id'])){
		echo "<script>document.location.href = 'data_muzakki.php';</script>";
	}else echo "gagal menghapus data";
}

?>