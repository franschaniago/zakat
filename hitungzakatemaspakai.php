
<?php
include 'head_user.php';

if(empty($_SESSION['iduser'])){ ?>
  <script>document.location.href = 'login.php';</script>
<?php }else{
$total="";
$kosong_emas="";
$kosong_jumlah="";
$kosong_emas_pakai="";


if(isset($_POST['hitung'])){
  global $konek;
  $jumlahemas=mysqli_real_escape_string($konek, $_POST['jumlahemas']);
  $jumlahemaspakai=mysqli_real_escape_string($konek, $_POST['jumlahemaspakai']);
  $hargaemas=mysqli_real_escape_string($konek, $_POST['hargaemas']);


  if(empty($hargaemas)){
    $kosong_emas="Harga Emas Belum di Inputkan";
  }

  if(empty($jumlahemaspakai)){
    $kosong_emas_pakai="Jumlah Emas Yang di Pakai Belum Di Inputkan";
  }


  if($jumlahemas>=85){

      $total=($jumlahemas-$jumlahemaspakai)*$hargaemas*0.025;

      }elseif(empty($jumlahemas)){

        $kosong_jumlah="Jumlah Emas Belum Di Inputkan";

        }else{

          $g="<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Maaf</strong> Jumlah Gram Emas Yang Anda Inputkan di Bawah Nisob Minimal Yaitu 85 Gram</div>";
        }

}


?>

<style>
  .kosong{
    color: red;
  }
    .well {
    background: #eee;
    border-radius: 0px;
}
</style>




<center><h2>Hitung zakat Emas yang diPakai</h2></center>
<hr>
   
          <ol>
          <li>Masukan Jumlah emas (gram) dengan nisob minimal 85 Gram</li>
          <li>Masukan Jumlah emas (gram) yang anda pakai dari total emas anda</li>
          <li>Masukan Harga emas (rupiah)</li>
          <li>Klik tombol hitung</li>
          </ol>
    
              <center><h3>Penjelasan</h3></center>
              <p>Adapun nisab emas sebesar emas 85 gram dikurangi jumlah (gram emas) yang di pakai, dengan haul selama satu tahun dan kadar zakatnya 2,5%. Artinya bila seorang muslim memiliki emas sebesar setidaknya 85 gram yang disimpan selama satu tahun dan ia memakainya sebagai perhiasan sebanyak 10 gram maka ia wajib membayar zakat sebesar 85-10=75 Gram dikali 2,5% dari jumlah emasnya tersebut</p>
  

          <div class="well">
            <form method="post" action="">

              <?php 
                if(empty($g)){

                }else{
                  echo $g;
                }

               ?>
              <div class="form-group" >
                <label>Jumlah Emas (Gram)</label>
                <input type="number" class="form-control" placeholder="Minimal 85 Gram" name="jumlahemas" value="<?= $jumlahemas ?>"><p class="kosong"><?= $kosong_jumlah ?></p>
              </div>


              <div class="form-group" >
                <label>Jumlah emas yang dipakai (Gram)</label>
                <input type="number" class="form-control" name="jumlahemaspakai" value="<?= $jumlahemaspakai ?>">
                <p class="kosong"><?= $kosong_emas_pakai ?></p>
              </div>

              <div class="form-group" >
                <label>Harga Emas (Rupiah)</label>
                <input type="number" class="form-control" name="hargaemas" value="<?= $hargaemas ?>">
                <p class="kosong"><?= $kosong_emas ?></p>
              </div>

              
              <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
            </form>
            
            <?php if(empty($total)){
              echo " ";
            }else{?>
            <div class="form-group">
                            <br>
                            <p>Total Zakat yang harus anda bayarkan adalah<br></p>
                            <h3><?php echo "Rp. ". rupiah($_SESSION['a']=$total)?></h3>
                            <br>
                            <a class="btn btn-block btn-lg btn-success" href="bayarzakat.php">Bayar Zakat</a>
                        </div>
            <?php } ?>
            </div>
<?php include 'sidebar.php'; ?>

        </div>
      </div>

  


<?php } include 'foot_user.php'; ?>