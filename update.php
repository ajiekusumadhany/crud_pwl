<?php
include"koneksi.php"; // masukan konekasi DB
// ambil variable data 
$nama_buku=$_POST['nama_buku'];
$jumlah_buku=$_POST['jumlah_buku'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$id= $_GET['id']; // ambil data ID di URL
//Proses query update
$update=mysqli_query($koneksi,"update ttransaksi set nama_buku='$nama_buku', jumlah_buku='$jumlah_buku', nama='$nama', alamat='$alamat' where id_buku='$id'");
if($update){
header("location:riwayat-belanja.php"); // kembali ke halaman tampil
}else{
echo "Gagal update data!";
}
?>