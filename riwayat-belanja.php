<?php
//Koneksi Database
include "koneksi.php";

   // Css style $heet
    echo "<link rel='stylesheet' type='text/css' href='style.css' />";
    //update dan delete
	if(isset($_GET['hal']))
	{
    if ($_GET['hal'] == "hapus")
		{
			$hapus = mysqli_query($koneksi, "DELETE FROM ttransaksi WHERE id_buku = '$_GET[id_buku]' ");
			if($hapus){
				echo "<script>
						alert('Buku Telah di Hapus dari Keranjang!!');
						document.location='riwayat-belanja.php';
				     </script>";
			}
		}
	}

   
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Im Store | Riwayat Belanja</title>
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
    <h2>Daftar Pesanan</h2>
    <!-- Awal Tabel -->
	    
	    <table>
	    	<tr>
	    		<th>No.</th>
	    		<th>Buku</th>
				<th>Jumlah Buku</th>
				<th>Nama</th>
				<th>Alamat</th>
                <th colspan="2">Update & Delete</th>
	    	</tr>
	    	<?php
	    		$no = 1;
	    		$tampil = mysqli_query($koneksi, "SELECT * from ttransaksi order by id_buku desc");
	    		while($data = mysqli_fetch_array($tampil)) :

	    	?>
	    	<tr>
	    		<td><?=$no++;?></td>
	    		<td><?=$data['nama_buku']?></td>
	    		<td><?=$data['jumlah_buku']?></td>
				<td><?=$data['nama']?></td>
	    		<td><?=$data['alamat']?></td>
	    		<td>
	    			<a href="edit.php?hal=edit&id=<?=$data['id_buku']?>" class="edit">Edit </a>
                </td>
                <td>
	    			<a href="riwayat-belanja.php?hal=hapus&id_buku=<?=$data['id_buku']?>" 
	    			   onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')" class="hapus">Hapus </a>
	    		</td>
	    	</tr>
	    <?php endwhile; //penutup perulangan while ?>
	    </table>
    <div class="bayarubah">
	<a href="index.php"><input type="button" class="daftarbuku" value="Daftar Buku"/></a>
    <a href="form-belanja.php"><input type="button" class="belilagi" value="Beli Lagi"/></a>
    </div>
    </form>
    
</body>
</html>
