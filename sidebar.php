</div>



<?php 
$result=totalpemasukan_zakat();
$result_penyaluran=totalpenyaluran_zakat(); 

?>
<style>
  .panel-default>.panel-heading{
    background-color: #00afd1;
    color: white;
  }
</style>
<div class="col-md-3">
<!--
  <div class="well">
    <form role="search">
          <input type="search" class="form-control" placeholder="Cari Muzakki">
      </form>
  </div>-->



  <div class="panel panel-default">
    <div class="panel-heading">Pemasukan Zakat</div>
    <div class="panel-body">    <?php while ($a=mysqli_fetch_assoc($result)) { ?>
        <h3><?php echo "Rp. ".rupiah($pemasukan=$a['totalpemasukan'])?></h3>
        <?php } ?>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">Penyaluran Zakat</div>
        <div class="panel-body">    <?php while ($b=mysqli_fetch_assoc($result_penyaluran)) { ?>
          <h3><?php echo "Rp. ".rupiah($pengeluaran=$b['jumlah'])?></h3>
          <?php } ?>
        </div>
    </div>

  <div class="panel panel-default">
    <div class="panel-heading">Total Kas Zakat</div>
        <div class="panel-body">    <h3><?php $total=($pemasukan-$pengeluaran); 
        echo "Rp. ".rupiah($total)?></h3>
        </div>
  </div>

        <a href="penyaluran_zakat.php" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-edit"></span> Klik dan Periksa <br>Rincian Penyaluran Zakat</a>
        <br>

        <img width="99%" src="img/banner/Banner-Senyum-Zakat.png" alt="">


  </div>

  <div class="col-md-1">
  </div>
</div>