<?php


function cekloginuser($email,$password){
	global $konek;

	$sql="SELECT * FROM muzakki WHERE email ='$email' AND password='$password'";
	$query=mysqli_query($konek,$sql);
	
	$cek=mysqli_fetch_array($query);
	$_SESSION['iduser']=$cek['id_user'];
	$_SESSION['namalengkap']=$cek['namalengkap'];

	if(mysqli_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}

function rupiah($angka){
$jadi =number_format($angka,0,',','.');
return $jadi;
}


function simpankonfirmasi($id,$nama,$confirm,$status){
	global $konek;

	$query="INSERT INTO pesan(id_user,nama_user,pesan,status) VALUES ('$id','$nama','$confirm','$status')";
	if (mysqli_query($konek, $query)) {
    	return true;
	} else {
    	return false;
	}
}

function simpankomentar($komentar,$idartikel,$namauser){
	global $konek;

	$query = "INSERT INTO komentar_artikel (id_artikel,nama_muzakki,isi_komentar) VALUES ('$idartikel','$namauser','$komentar')";
	if (mysqli_query($konek, $query)) {
    	return true;
	} else {
    	return false;
	}	
}


function simpanpendaftaranuser($nama,$email,$password,$tgl_daftar){
	global $konek;

	$query = "INSERT INTO muzakki (namalengkap, email, password, tgl_daftar) VALUES ('$nama', '$email', '$password','$tgl_daftar')";
	if (mysqli_query($konek, $query)) {
    	return true;
	} else {
    	return false;
	}
}

function simpantransaksi($id_user,$notransaksi,$nama_user,$jeniszakat,$jumlahbayar,$status){

	global $konek;

	$query = "INSERT INTO transaksi (id_user, no_transaksi, nama, jenis_transaksi, jumlah_bayar, status) VALUES ('$id_user','$notransaksi','$nama_user','$jeniszakat','$jumlahbayar','$status')";
	
	if (mysqli_query($konek, $query)) {
    	return true;
	} else {
    	return false;
	}
}

function totalpenyaluran_zakat(){
	global $konek;
	$sql="SELECT SUM(jumlah_zakat) as jumlah FROM mustahiq";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilkomentarperid($idartikel){
	global $konek;
	$sql="SELECT * FROM komentar_artikel WHERE id_artikel='$idartikel' ORDER BY isi_komentar ASC";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilkonfirmasi($id){

	global $konek;
	$sql="SELECT * FROM pesan WHERE id_user='$id' AND status=1";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampiljumlahbayarperid($id){

	global $konek;
	$sql="SELECT SUM(jumlah_bayar) AS jumlah FROM transaksi WHERE id_user= '$id' AND status='2'";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampiltransaksiperid($id){

	global $konek;
	$sql="SELECT * FROM transaksi WHERE id_user= '$id' AND status=2";
	//$sql="SELECT *FROM transaksi WHERE id_user= '$id' AND status IN(1,2)";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampiltransaksikonfirmasi($id){
	global $konek;
	$sql="SELECT * FROM transaksi WHERE id_user= '$id' AND status=0";
	//$sql="SELECT *FROM transaksi WHERE id_user= '$id' AND status IN(1,2)";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilpernotransaksi($no){
	global $konek;
	$sql="SELECT * FROM transaksi WHERE no_transaksi= '$no'";
	//$sql="SELECT *FROM transaksi WHERE id_user= '$id' AND status IN(1,2)";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampiltransaksigagal($id){
	global $konek;
	$sql="SELECT * FROM transaksi WHERE id_user= '$id' AND status=3";
	//$sql="SELECT *FROM transaksi WHERE id_user= '$id' AND status IN(1,2)";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilbanner(){
	global $konek;
	$sql="SELECT * FROM banner";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;	
}


function tampiltransaksiperstatus($id){

	global $konek;
	$sql="SELECT * FROM transaksi WHERE id_user= '$id' AND status=0";
	//$sql="SELECT *FROM transaksi WHERE id_user= '$id' AND status IN(1,2)";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampiltransaksi_moderasi(){

	global $konek;
	$sql="SELECT * FROM transaksi";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

/*
function tampilpenyaluran(){

	global $konek;
	$sql="SELECT * FROM penyaluran";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}
*/

function tampilprofil($id){
	global $konek;
	$query="SELECT * FROM muzakki WHERE id_user= '$id'";
	$result=mysqli_query($konek,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilartikelfull(){

	global $konek;
	$sql="SELECT * FROM artikel";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilartikellimit($posisi,$batas){
	global $konek;
	$query="SELECT * FROM artikel LIMIT $posisi,$batas";
	$result=mysqli_query($konek,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilgambar(){
	global $konek;
	$query="SELECT * FROM artikel";
	$result=mysqli_query($konek,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilartikelperid($id){
	global $konek;
	$query="SELECT * FROM artikel WHERE id_artikel='$id'";
	$result=mysqli_query($konek,$query) or die('gagal menampilkan data');
	return $result;
}
/*
function tampilkonfirmadmin($id){
	global $konek;
	$query="SELECT * FROM konfirmasi_admin WHERE id_user='$id'";
	$result=mysqli_query($konek,$query) or die('gagal menampilkan data');
	return $result;
}
*/

function tampilmuzakki(){
	global $konek;
	$sql="SELECT * FROM muzakki";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilmustahiq(){
	global $konek;
	$sql="SELECT * FROM mustahiq";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}


function editprofil_image($lokasi,$id){
	$query="UPDATE muzakki SET foto_profil='$lokasi' WHERE id_user='$id'";
	return run($query);
}

function editprofil($namalengkap,$email,$alamat,$notlp,$id,$status){

	$query="UPDATE muzakki SET namalengkap='$namalengkap', email='$email', alamat='$alamat', no_tlp='$notlp' WHERE id_user='$id'";
	return run($query);

	//UPDATE muzakki SET id_user=[value-1],foto_profil=[value-2],namalengkap=[value-3],email=[value-4],password=[value-5],alamat=[value-6],no_tlp=[value-7] WHERE 1
}

function updatetransaksi($no_transaksi,$namabank,$norekuser,$atasnama,$rek_tujuan,$jumlahbayar_user,$tgl_bayar,$lokasi,$ket){
	$query="UPDATE transaksi SET nama_bank='$namabank',no_rekening='$norekuser',atas_nama='$atasnama',rekening_bank_tujuan='$rek_tujuan',jumlah_bayar_konfirmasi='$jumlahbayar_user',tgl_bayar='$tgl_bayar',bukti_transfer='$lokasi',keterangan='$ket', status=1 WHERE no_transaksi='$no_transaksi'";
	return run($query);
}

function totalpemasukan_zakat(){
	global $konek;
	$sql = "SELECT SUM(jumlah_bayar) AS totalpemasukan FROM transaksi";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function inputkonfirmasi($id_user,$nama,$isi_pesan,$lokasi){
	global $konek;

	$query = "INSERT INTO pesan (id_user,nama_user,pesan,file_upload) VALUES ('$id_user','$nama','$isi_pesan','$lokasi')";
	if (mysqli_query($konek, $query)) {
    	return true;
	} else {
    	return false;
	}
}

function run($query){
	global $konek;

	if(mysqli_query($konek,$query)) return true;
	else return false;
}

function excerpt($string){
	$string=substr($string,0,200);
	return $string;
}

?>