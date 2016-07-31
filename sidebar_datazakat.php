
    <div class="col-md-4">

      <div class="well">
        <div class="row">
          <div class="col-lg-6">
            <p>Pemasukan Zakat</p>
            <p>Tanggal <?php echo date("d-m-Y"); ?></p>
            <h2>Rp.<?php echo rupiah($row['total']); $a=$row['total']; ?></h2>
          </div>
            <?php } ?>
        </div>
      </div>

      <div class="well">
        <div class="row">
          <div class="col-lg-6">
            <p>Penyaluran Zakat</p>
            <?php while ($row=mysqli_fetch_assoc($result_penyaluran)){?>
            <h2>Rp.<?php echo rupiah($row['jumlah']); $b=$row['jumlah']; ?></h2>
            <?php } ?>
            <a href="#" class="btn btn-info">Detail Rincian</a>
          </div>
        </div>
      </div>

      <div class="well">
        <div class="row">
          <div class="col-lg-6">
            <p>Total</p>
            <p><?php echo date("d-m-Y");?></p>
            <h2>Rp.<?php $c=$a-$b; echo rupiah($c); ?></h2>
          </div>
        </div>
      </div>

    </div>