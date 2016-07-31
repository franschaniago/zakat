<?php 
include 'head_admin.php';
include 'config/config.php'; 


if(empty($_SESSION['iduser'])){
  echo "<script>document.location.href='login.php'</script>";
  //echo "<script>alert('kosong')</script>";
}
$result=tampilpesan();

?>
<link rel="stylesheet" type="text/css" href="media/css/dataTables.bootstrap.css">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
   <section class="content">

			<h3>Tabel Pesan Muzakki</h3>
	
					<table id="muzakki" class="table table-bordered">
		                <thead>
		                    <tr>
		                        <th>Nomor</th>		                       
		                        <th>Nama Muzakki</th>
		                        <th>Pesan</th>
		                        <th>Status</th>
		                    </tr>
		                </thead>
		                
		                 <tbody>
			                <?php
			                
			                $no = 1;
			                
			                while ($a = mysqli_fetch_assoc($result)) {
			                
			                ?>
		 
		                <tr>

		                    <td><?php echo  $no;?></td>  
		                    <td><?php echo  $a['nama_user']; ?></td>
		                    <td><?php echo  $a['pesan']; ?></td>

		                    <td><!-- id pesan --><a href="balaskonfirm.php?ids=<?php echo $a['id']."and=".$a['id_user']; ?>" class="btn btn-primary">Balas Pesan</a></td>
		                </tr>
		                    <?php
		                    $no++;
		                    }
		                    ?>

		                </tbody>
		            </table>  

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