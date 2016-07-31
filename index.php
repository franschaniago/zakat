<?php 
include 'head_user.php'; 
$result=tampilbanner()
?>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active">
      <img width="100%" src="img/banner/giveff.jpg">

    </div>
    
    <?php while ($row=mysqli_fetch_assoc($result)) { ?>
    <div class="item">
      <img width="100%" src="<?= $row['banner'] ?>">
    </div>
    <?php } ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<?php 

$batas =3;
$halaman = $_GET['halaman'];
if(empty($halaman)){
  $posisi = 0;
  $halaman = 1;
}else{
  $posisi = ($halaman - 1) * $batas;
}
global $konek;

$result=tampilartikellimit($posisi,$batas); 
while ($row=mysqli_fetch_assoc($result)) {
?>

<div class="media">
  <div class="media-left">
    <a href="#">
      <img width="64px" height="64px" class="media-object" src=admin/<?php echo $row['gambar']?> alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?php echo $row['judul_artikel'] ?></h4>
    <?= excerpt($row['isi_artikel']);?>
    <br><a href="singleartikel.php?id=<?= $row['id_artikel'];?>">Baca Selengkapnya</a>
  </div>
</div>
<?php } 
$result2=tampilartikelfull();
$paging2 = $result2;
$jmldata = mysqli_num_rows($paging2);
$jmlhalaman = ceil($jmldata/$batas);

echo"<br \> Halaman : ";
for($i=1; $i<=$jmlhalaman; $i++){
    if($i != $halaman){
        echo"<a class='pagination' href=\"index.php?halaman=$i\">$i</a> ";
    }else{
        echo"<b>$i</b> ";
    }
}
 
?>


<?php include 'sidebar.php'; ?>

<?php include 'tagline.php'; ?>
<?php include 'foot_user.php'; ?>
