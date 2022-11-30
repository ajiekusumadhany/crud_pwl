<?php
//Koneksi Database
include "koneksi.php";

//saat tombol beli diklik
if(isset($_POST['dbeli']))
{
    //Data akan disimpan Baru
    $simpan = mysqli_query($koneksi, "INSERT INTO ttransaksi (nama_buku, jumlah_buku, nama, alamat)
                    VALUES ('$_POST[nama_buku]', 
                            '$_POST[jumlah_buku]', 
                            '$_POST[nama]', 
                            '$_POST[alamat]')
                   ");
    if($simpan) //jika simpan sukses
    {
      echo "<script>
          document.location='riwayat-belanja.php';
           </script>";
    }
    else
    {
      echo "<script>
          alert('Simpan data GAGAL!!');
          document.location='form-belanja.php';
           </script>";
    }
  }

   // Css style $heet
    echo "<link rel='stylesheet' type='text/css' href='style.css' />";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Im Store | Belanja</title>
</head>
<body>
  <!--Awal Header-->
  <div class="header">
    <h1>IM STORE</h1>
  </div>
  <!--Awal Navigasi Link-->
    <div class="nav">
        <a href="index.php">Daftar Buku</a>
        <a href="#">Belanja</a>
        <a href="riwayat-belanja.php">Riwayat Belanja</a>
    </div>
  <!--Akhir Navigasi Link-->
  <!--Awal Form Belanja-->
  <div class="form">
    <div class="form_belanja">
    <form action="" method="post">
    <label>Pilih Buku Yang Ingin Anda Beli</label>
    <select name="nama_buku">
    <option value="Nama Buku">Pilih Buku</option>
    <option value="Absolute Justice">Absolute Justice</option>
    <option value="Another">Another</option>
    <option value="Confessions">Confessions</option>
    <option value="Hyouka">Hyouka</option>
    <option value="Penance">Penance</option>
    <option value="Real Face">Real Face</option>
    <option value="The Dead Return">The Dead Return</option>
    <option value="Mind Power">Mind Power</option>
    <option value="Girls In The Dark">Girls In The Dark</option>
    <option value="Memory Of Glass">Memory Of Glass</option>
    </select>
      Jumlah Buku:
      <input type="number" name="jumlah_buku" placeholder="Masukkan Jumlah Buku Pesanan Anda" required /><br />
      Nama Anda:
      <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" required /><br />
      Alamat Lengkap
      <input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap Anda" required /><br />
      <button type="submit" class="beli" name="dbeli" onclick="return alert('Terimakasih Telah Berkunjung, dan membeli buku ditoko kami!');">Beli</button>
	    	<button type="reset" class="kosongkan" name="dkosongkan">Kosongkan</button>
    </form>
</div>
</div>
  <!--Akhir Form Belanja-->

</body>
</html>
