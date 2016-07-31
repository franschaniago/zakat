<?php 

function lihatlaporanpertgl($tglawal,$tglakhir){
	global $konek;
	$sql="SELECT * FROM muzakki WHERE tgl_daftar BETWEEN '$tglawal' AND '$tglakhir'";
	$query=mysqli_query($konek,$sql);
	$cek=mysqli_fetch_array($query);

	if(mysqli_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}

function editdataamil($nama,$email,$level,$id){
	$query="UPDATE amil SET username='$nama', email='$email', level='$level' WHERE id=$id";
	return run($query);
}

function editpassword($passwordnew,$id){
	$query="UPDATE amil SET password='$passwordnew' WHERE id=$id";
	return run($query);	
}

function simpandataamil($nama,$email,$password,$level){
	global $konek;

	$query="INSERT INTO amil(username,password,email,level) VALUES ('$nama','$password','$email','$level')";
	if (mysqli_query($konek, $query)) {
    	return true;
	} else {
    	return false;
	}	
}

function simpanartikel($judul,$lokasi,$artikel,$namaamil,$namamustahiq){
	global $konek;

	$query = "INSERT INTO artikel (judul_artikel,gambar,isi_artikel,nama_mustahiq,nama_penginput) VALUES ('$judul','$lokasi','$artikel','$namamustahiq','$namaamil')";
	if (mysqli_query($konek, $query)) {
    	return true;
	} else {
    	return false;
	}
} 

function simpanbanner($link,$ket,$lokasi){
	global $konek;

	$query = "INSERT INTO banner(link,keterangan,banner) VALUES ('$link','$ket','$lokasi')";
	if (mysqli_query($konek, $query)) {
    	return true;
	} else {
    	return false;
	}
}

function simpandatamustahiq($namapenerima,$namayayasan,$alamat,$jumlah,$tgl,$amil){
	global $konek;

	$query="INSERT INTO mustahiq(nama_penerima, nama_yayasan, alamat, jumlah_zakat, tgl_penyaluran, nama_amil) VALUES ('$namapenerima','$namayayasan','$alamat','$jumlah','$tgl','$amil')";
	if (mysqli_query($konek, $query)) {
    	return true;
	} else {
    	return false;
	}	
}

function tampilbanner(){
	global $konek;
	$sql="SELECT * FROM banner";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;	
}

function tampilartikel(){
	global $konek;
	$sql="SELECT * FROM artikel";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilartikellperid($id){
	global $konek;
	$sql="SELECT * FROM artikel WHERE id_artikel='$id'";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilmuzakki(){
	global $konek;
	$sql="SELECT * FROM muzakki";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilamilperid($id){
	global $konek;
	$sql="SELECT * FROM amil WHERE id='$id'";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilmustahiqperid($id){
	global $konek;
	$sql="SELECT * FROM mustahiq WHERE id='$id'";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;	
}

function tampilamil(){
	global $konek;
	$sql="SELECT * FROM amil";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilmustahiq(){
	global $konek;
	$sql="SELECT * FROM mustahiq";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampildatatransaksi(){
	global $konek;
	$sql="SELECT * FROM transaksi WHERE status IN(1,2,3)";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampiltransaksiperid($id){

	global $konek;
	$sql="SELECT * FROM transaksi WHERE id='$id'";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;	
}

function tampiljumlahtransaksiperid(){

	global $konek;
	$sql="SELECT SUM(jumlah_bayar) AS jumlah FROM transaksi";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilpesan(){
	global $konek;
	$sql="SELECT * FROM pesan";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilpesanperid($id){
	global $konek;
	$sql="SELECT * FROM pesan WHERE id='$id'";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function hapus_datamuzakki($id){
	global $konek;
	$query="DELETE FROM muzakki WHERE id_user=$id";
	if(mysqli_query($konek,$query)) return true;
	else return false;
}


function hapus_banner($id){
	global $konek;
	$query="DELETE FROM banner WHERE idbanner=$id";
	if(mysqli_query($konek,$query)) return true;
	else return false;
}

function hapus_artikel($id){
	global $konek;
	$query="DELETE FROM artikel WHERE id_artikel=$id";
	if(mysqli_query($konek,$query)) return true;
	else return false;
}

function hapus_mustahiq($id){
	global $konek;
	$query="DELETE FROM mustahiq WHERE id=$id";
	if(mysqli_query($konek,$query)) return true;
	else return false;
}

function hapus_dataamil($id){
	global $konek;
	$query="DELETE FROM amil WHERE id=$id";
	if(mysqli_query($konek,$query)) return true;
	else return false;
}

function cekloginadmin($email,$password){
	global $konek;

	$sql="SELECT * FROM amil WHERE email ='$email' AND password='$password'";
	$query=mysqli_query($konek,$sql);
	
	$cek=mysqli_fetch_array($query);
	$_SESSION['iduser']=$cek['id'];
	$_SESSION['username']=$cek['username'];

	if(mysqli_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}



function updatepesan($id,$id_user,$balasan,$status){
	global $konek;

	$query="UPDATE pesan SET balasan_admin='$balasan',status='$status',id_user='$id_user' WHERE id='$id'";
	return run($query);	
}

function updateartikel($judul,$lokasi,$artikel,$namaamil,$namamustahiq, $id){
	global $konek;

	$query="UPDATE artikel SET judul_artikel='$judul', isi_artikel='$artikel', gambar='$lokasi',nama_mustahiq='$namamustahiq',nama_penginput='$namaamil' WHERE id_artikel='$id'";
	return run($query);	
}

function editdatamustahiq($namapenerima,$namayayasan,$alamat,$jumlah,$tgl,$amil,$id){
	global $konek;

	$query="UPDATE mustahiq SET nama_penerima='$namapenerima',nama_yayasan='$namayayasan',alamat='$alamat',jumlah_zakat='$jumlah',tgl_penyaluran='$tgl',nama_amil='$amil' WHERE id='$id'";
	return run($query);	
}

function updatetransaksi($status,$id){
	global $konek;

	$query="UPDATE transaksi SET status='$status' WHERE id='$id'";
	return run($query);
}

function rupiah($angka){
$jadi =number_format($angka,0,',','.');
return $jadi;
}

function run($query){
	global $konek;

	if(mysqli_query($konek,$query)) return true;
	else return false;
}
 ?>

