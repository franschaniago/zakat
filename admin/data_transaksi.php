<?php include 'head_admin.php';
 include 'config/config.php'; 

$result=tampildatatransaksi();
$result2=tampiljumlahtransaksiperid();
?>
<link rel="stylesheet" type="text/css" href="media/css/dataTables.bootstrap.css">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
   <section class="content">

			<h3>Tabel data transaksi</h3>
			<?php while ($d = mysqli_fetch_assoc($result2)) { ?>
			<h3>Total Pemasukan Zakat Rp. <?= rupiah($d['jumlah']);?></h3>
			<?php } ?>
				<div class="well">	
					<table id="muzakki" class="table table-bordered">
		                <thead>
		                    <tr>
		                        <th>Nomor</th>
		                        <th>Nomor Transaksi</th>
		                        <th>Nama Muzakki</th>
		                        <th>Jenis Transaksi Zakat</th>
		                        <th>Jumlah Pembayaran</th>
		                        <th>Status</th>
		                        <th>Cek Pembayaran</th>

		                    </tr>
		                </thead>
		                
		                 <tbody>
			                <?php

			                $no = 1;
			                while ($a = mysqli_fetch_assoc($result)) {
			                
			                ?>
		 
		                <tr>
		                    <td><?php echo  $no;?></td>
		                    <td><?php echo  $a['no_transaksi']; ?></td>		                   
		                    <td><?php echo  $a['nama']; ?></td>
		                    <td><?php echo  $a['jenis_transaksi']; ?></td>
		                    <td>Rp. <?php echo  rupiah($a['jumlah_bayar']); ?></td>
		                    <td><?php if($a['status']=="1"){
		                    	echo "<p class='btn btn-warning'>Menunggu Konfirmasi</p>";
		                    }elseif($a['status']=="2"){
		                    	echo "<p class='btn btn-success'>Lunas</a>";
		                    }else{
		                    	echo "<p class='btn btn-danger'>Di Tolak</a>";
		                    } ?>	
		                    </td>

		                    <td><a href="cek_transaksi.php?id=<?= $a['id'];?>" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-edit"></span> Periksa</a></td>
		                </tr>
		                    <?php
		                    $no++;
		                    }
		                    ?>

		                </tbody>
		            </table>  
				</div>


   </section>


</div>

        <script src="media/js/jquery.dataTables.min.js"></script>
        <script src="media/js/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready( function () {
    			$('#muzakki').DataTable({
    				responsive:true
    			});
			} );
        </script> 


<?php include 'foot_admin.php'; ?>