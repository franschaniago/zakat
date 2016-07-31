<?php 
include 'head_admin.php';
include 'config/config.php'; 


$result=tampilamil();

?>
<link rel="stylesheet" type="text/css" href="media/css/dataTables.bootstrap.css">

<div class="content-wrapper">

   <section class="content">
   <a href="tambah_data_amil.php" name="simpan" class="btn btn-success">Tambah Data</a>
			<h3>Tabel Data Amil</h3>
				<div class="well">	
					<table id="muzakki" class="table table-bordered">
		                <thead>
		                    <tr>
		                        <th>Nomor</th>
		                        <th>Nama</th>
		                        <th>Email</th>
		                        <th>Level</th>
		                        <th>Edit</th>
		                        <th>Ubah Password</th>
		                        <th>Hapus</th>
		                    </tr>
		                </thead>
		                
		                 <tbody>
			                <?php

			                $no = 1;
			                while ($a = mysqli_fetch_assoc($result)) {
			                
			                ?>
		 
		                <tr>
		                    <td><?php echo  $no;?></td>
		                    <td><?php echo  $a['username']; ?></td>		                   
		                    <td><?php echo  $a['email']; ?></td>
		                    <td><?php echo  $a['level']; ?></td>
		                    <td><a href="edit_amil.php?id=<?= $a['id'];?>" name="simpan" class="btn btn-primary">Edit</td>
		                    <td><a href="ubahpassword_amil.php?id=<?= $a['id'];?>" name="simpan" class="btn btn-warning">Ubah Password</td>
		                    <td><a href="hapus_amil.php?id=<?= $a['id'];?>" onclick="return confirm('Data akan dihapus ?')" name="simpan" class="btn btn-danger">Hapus</td>
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


