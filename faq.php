<?php
include 'head_user.php';
/*
if(empty($_SESSION['iduser'])){ ?>
  <script>document.location.href = 'index.php';</script>
<?php }else{
*/
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


<div class=container>


        <div class="col-md-9">
          <div class="well" style="background-color:white">


          <link rel="stylesheet" href="css/jquery-ui.css">
          <script src="js/jquery-ui.js"></script>

          <script>
          $(function() {
            $( "#accordion" ).accordion();
          });
          </script>
 
<div id="accordion">
  <h3>Apa itu E-Zakat ?</h3>
  <div>
    <p>
    E-zakat adalah sebuah situs pembayaran dan perhitungan zakat secara online
    </p>
  </div>
  <h3>Kenapa Menggunakan E-Zakat ?</h3>
  <div>
    <p>
    E-zakat merupakan website yang di rancang untuk kemudahan membayar zakat, masyarakat tidak perlu repot lagi menghitung atau pergi kebadan amil zakat atau mencari mustahiq (orang yang berhak menerima zakat), semuanya sudah di atur dengan sangat praktis oleh e-zakat, mulai dari sistme perhiungan zakat, sistem transaksi, laporan transaksi, serta laporan penyaluran kepada mustahiq
    </p>
  </div>
  <h3>Apa tujuan E-zakat ?</h3>
  <div>
    <p>
    Dengan segala kemudahannya e-zakat memiliki tujuan agar masyarak muslim tidak lupa atau bingung lagi dalam membayar atau menghitung zakatnya
    </p>
  </div>
  <h3>Apakah setiap transaksi zakat kena biaya lebih ?</h3>
  <div>
    <p>
    Tentu saja tidak, kalaupun anda mentransfer pembayaran zakat anda lebih dari yang seharusnya anda transfer kami kan tetap salurkan dana tersebut ke mustahiq yang membutuhkan
    </p>
  </div>
   <h3>Saya masih ada pertanyaan lain?</h3>
  <div>
    <p>
    Jika masih ada pertanyaan lain silahkan hubungi kami di tanyazakat@ezakat.com
    </p>
  </div>
</div>
 

        </div>
      </div>
    </div>

<?php 
include 'sidebar.php'; ?>
</div>
</div>
</div>
<?php
include 'foot_user.php'; ?>