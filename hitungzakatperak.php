<?php
include 'head_user.php';

if(empty($_SESSION['iduser'])){ ?>
  <script>document.location.href = 'login.php';</script>
<?php }else{

$total="";
$kosong_perak="";
$kosong_jumlah="";


if(isset($_POST['hitung'])){
  global $konek;
  $jumlahperak=mysqli_real_escape_string($konek, $_POST['jumlahperak']);
  $hargaperak=mysqli_real_escape_string($konek, $_POST['hargaperak']);


  if(empty($hargaperak)){
    $kosong_perak="Harga perak Belum Di Inputkan";
  }


  if($jumlahperak>=672){

      $total=($jumlahperak*$hargaperak)*0.025;

      }elseif(empty($jumlahperak)){

        $kosong_jumlah="Jumlah perak Belum Di Inputkan";

        }else{

          $g="<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Maaf</strong> Jumlah Gram perak Yang Anda Inputkan di Bawah Nisob Minimal Yaitu 672 Gram</div>";
        }

}


?>

<style>
  .kosong{
    color: red;
  }
</style>




          <h2>Hitung zakat perak</h2>
          <ol>
          <li>Masukan Jumlah perak dalam satuan gram dengan nisob minimal 672 Gram</li>
          <li>Masukan Harga perak dalam satuan rupiah</li>
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
                <label>Jumlah perak (Gram)</label>
                <input type="number" class="form-control" placeholder="Minimal 672 Gram" name="jumlahperak" value="<?= $jumlahperak ?>"><p class="kosong"><?= $kosong_jumlah ?></p>
              </div>

              <div class="form-group" >
                <label>Harga perak (Rupiah)</label>
                <input type="number" class="form-control" name="hargaperak" value="<?= $hargaperak ?>">
                <p class="kosong"><?= $kosong_perak ?></p>
              </div>
              
              <button type="submit" name="hitung" class="btn btn-block btn-primary">Hitung</button>
            </form>
            
            <?php if(empty($total)){
              echo " ";
            }else{?>
            <div class="form-group">
                            <br>
                            <p>Total Zakat yang harus anda bayarkan adalah<br></p>
                            <h3><?php echo "Rp. ". rupiah($_SESSION['a']=$total)?></h3>
                            <br>
                            <a class="btn btn-block btn-success" href="bayarzakat.php">Bayar Zakat</a>
            </div>
            <?php } ?>

            </div>
<?php include 'sidebar.php'; ?>
</div>
</div>

<?php } include 'foot_user.php'; ?>