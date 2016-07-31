<?php
include 'head_user.php';

if(empty($_SESSION['iduser'])){ ?>
  <script>document.location.href = 'login.php';</script>
<?php }else{

$total="";
$kosong_harga="";
$kosong_panen="";


if(isset($_POST['hitung'])){
  global $konek;
  $hasilpanen=mysqli_real_escape_string($konek, $_POST['hasilpanen']);
  $hargapanen=mysqli_real_escape_string($konek, $_POST['hargapanen']);


  if(empty($hargapanen)){
    $kosong_harga="Harga Hasil Panen Belum Di Inputkan";
  }


  if($hasilpanen>=520){

      $total=($hasilpanen*0.05)*$hargapanen;

      }elseif(empty($hasilpanen)){

        $kosong_panen="Jumlah Hasil Panen Belum Di Inputkan";

        }else{

          $g="<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Maaf</strong> Jumlah Yang Anda Inputkan di Bawah Nisob Minimal Yaitu 520 Kg Beras</div>";
        }

}


?>

<style>
  .kosong{
    color: red;
  }
</style>



          <h3>Hitung Zakat Pertanian Makanan Pokok Dengan Pengairan Pribadi</h3>
          <ol>
          <li>Masukan Jumlah emas dalam satuan gram dengan nisob minimal 520 Kg (beras)</li>
          <li>Masukan Harga emas dalam satuan rupiah</li>
          <li>Klik tombol hitung</li>
          </ol>


            <div class="well">
            <form method="post" action="">

              <?php 
                if(empty($g)){

                }else{
                  echo $g;
                }

               ?>
              <div class="form-group" >
                <label>Hasil Panen (Kg)</label>
                <input type="number" class="form-control" placeholder="Minimal 520 Kg" name="hasilpanen" value="<?= $hasilpanen ?>"><p class="kosong"><?= $kosong_panen ?></p>
              </div>

              <div class="form-group" >
                <label>Harga Hasil Panen (Kg)</label>
                <input type="number" class="form-control" name="hargapanen" value="<?= $hargapanen ?>">
                <p class="kosong"><?= $kosong_harga ?></p>
              </div>
              
              <button type="submit" name="hitung" class="btn btn-primary btn-block">Hitung</button>
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