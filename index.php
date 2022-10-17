	<?php
session_start();
$level = $_SESSION['level'];
$tiket = $_SESSION['login'];
if($tiket!='OKE'){
	echo '<script>window.alert("Silahkan login terlebih dahulu!")</script>';
	echo '<script>window.location.href="login.php"</script>';
}
include 'koneksi.php';
$koneksi    = new mysqli($hostname,$user,$pass,$database);
$tampil = $koneksi->query("select * from user");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="wr">
	<h1>buku perpustakaan</h1>
</div>
<?php

include 'koneksi.php';
$koneksi    = new mysqli($hostname,$user,$pass,$database);
$tampil 	= $koneksi->query("select * from buku");

?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php if($level=='admin'){ ?>
<button><a href="tambah.php">Tambah</a></button>
<?php } ?>
<button><a href="logout.php">logout</a></button>
<table border="1" align="center">
		<tr>
			<th><a onclick="togglePlay()">ID BUKU</a></th>
			<audio id="Audio" src="musik.mp3"></audio>
	<script type="text/javascript">
		var myAudio = document.getElementById("Audio");
		var isPlaying = false;
		function togglePlay(){
			myAudio.play();
			terakhir = document.querySelector('#box');
			terakhir.classList.add('hide');
		};
	</script>
			<th>JUDUL</th>
			<th>DESKRIPSI</th>
			<th>PENULIS</th>
			<th>PENERBIT</th>
			<th>TAHUN TERBIT</th>
			<th>KATEGORI</th>
			<?php if($level=='admin'){ ?>
			<th>DELETE</th>
			<?php } ?>
			<?php if($level=='admin'){ ?>
			<th>Ubah</th>
			<?php } ?>
		</tr>
<?php foreach($tampil as $baris){ ?>		
		<tr class="isi">
	        <td><?=$baris['id_buku']?></td>
			<td class="bd"><?=$baris['judul']?></td>
			<td class="bd"><?=$baris['diskripsi']?></td>
			<td class="bd"><?=$baris['penulis']?></td>
			<td class="bd"><?=$baris['penerbit']?></td>
			<td class="bd"><?=$baris['tahun_terbit']?></td>
			<td class="bd"><?=$baris['kategori']?></td>
			<?php if($level=='admin'){ ?>
			<td><button><a href="hapus.php?id_buku=<?=$baris['id_buku']?>">Delete</a></button></td>
			<?php } ?>
			<?php if($level=='admin'){ ?>
			<td><button><a href="ubah.php?id_buku=<?=$baris['id_buku']?>">EDIT</a></button></td>
			<?php } ?>
		</tr>
<?php } ?>
	</table>
	</body>
</html>