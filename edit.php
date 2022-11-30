<?php
//Koneksi Database
include "koneksi.php";
   // Css style $heet
    echo "<link rel='stylesheet' type='text/css' href='style.css' />";

    $id = $_GET['id']; // ambil data ID dari URL
    $tampil = mysqli_query($koneksi,"select * from ttransaksi where id_buku='$id'");
    $data = mysqli_fetch_array($tampil);?>
  
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
        <a href="form-belanja.php">Belanja</a>
        <a href="riwayat-belanja.php">Riwayat Belanja</a>

    </div>
  <!--Akhir Navigasi Link-->
  <!--Awal Form Belanja-->
  <div class="form">
    <div class="form_belanja">
    <form action="update.php?id=<?=$data['id_buku']?>" method="post">
    <label>Ubah Buku Yang Anda Inginkan</label>
    <select name="nama_buku">
    <option value="<?=$data['nama_buku']?>"><?=$data['nama_buku']?></option>
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
      <input type="number" name="jumlah_buku" value="<?=$data['jumlah_buku']?>" required /><br />
      Nama Anda:
      <input type="text" name="nama" value="<?=$data['nama']?>" required /><br />
      Alamat Lengkap
      <input type="text" name="alamat" value="<?=$data['alamat']?>" required /><br />
      <button type="submit" class="beli" name="dbeli">Simpan</button>
	  <button type="reset" class="kosongkan" name="dkosongkan">Reset</button>
    </form>
</div>
</div>
  <!--Akhir Form Belanja-->

</body>
</html>
