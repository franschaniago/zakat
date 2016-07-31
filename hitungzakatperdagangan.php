
<?php
include 'head_user.php';

if(empty($_SESSION['iduser'])){ ?>
  <script>document.location.href = 'login.php';</script>
<?php }else{

$total="";
$kosong_modal="";
$kosong_laba="";


if(isset($_POST['hitung'])){
  global $konek;
  $modal=mysqli_real_escape_string($konek, $_POST['modal']);
  $keuntungan=mysqli_real_escape_string($konek, $_POST['keuntungan']);


  $jumlah=$modal+$keuntungan;

  if($jumlah>=43000000){
    
      $total=$jumlah*0.025;

      }else{

        $g="<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Maaf</strong> Hasil Perhitungan (Jumlah Modal + Keuntungan), Hasilnya di Bawah Nisob Minimal Yaitu 85 Gram Emas = Rp. 43.000.000, Maka Anda Belum Wajib Zakat</div>";         
      }

}


?>

<style>
  .kosong{
    color: red;
  }
</style>


          <h2>Hitung Zakat Perdagangan</h2>
          <ol>
          <li>Masukan Jumlah Modal (Rupiah)</li>
          <li>Masukan Jumlah Keuntungan Dagang (Rupiah)</li>
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
                <label>Modal Dagang (Rupiah)</label>
                <input type="number" class="form-control" required name="modal" value="<?= $modal ?>"><p class="kosong"><?= $kosong_modal ?></p>
              </div>

              <div class="form-group" >
                <label>Keuntungan Dagang (Rupiah)</label>
                <input type="number" class="form-control" required name="keuntungan" value="<?= $keuntungan ?>">
                <p class="kosong"><?= $kosong_laba ?></p>
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
              <a class="btn btn-block btn-lg btn-success" href="bayarzakat.php">Bayar Zakat</a>
            </div>
            <?php } ?>
            </div>

<?php include 'sidebar.php'; ?>
</div>
</div>  

<?php } include 'foot_user.php'; ?>