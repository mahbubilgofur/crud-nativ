<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="tmh.css">
	<title></title>
</head>
<body>
	<div class="ats">
<table align="center">
	<form method="POST">
		<div class="pt">
			<h1>tambah input data</h1>
		<tr>
				<td class="name">id buku </td>
				<td class="name"> :</td>
				<td ><input  type="text"  name="id_buku" ></td>
			</tr>
			<tr>
				<td class="name">judul</td>
				<td class="name">:</td>
				<td><input type="text" name="judul" ></td>
			</tr>
			<tr>
				<td class="name">diskripsi</td>
				<td class="name">:</td>
				<td><input type="text" name="diskripsi" ></td>
			</tr>
			<tr>
				<td class="name">penulis</td>
				<td class="name">:</td>
				<td><input type="text" name="penulis" ></td>
			</tr>
			<tr>
				<td class="name">penerbit</td>
				<td class="name">:</td>
				<td ><input type="text" name="penerbit" ></td>
			</tr>
			<tr>
				<td class="name">tahun_terbit</td>
				<td class="name">:</td>
				<td><input type="text" name="tahun_terbit" ></td>
			</tr>
			<td class="name">kategori</td>
				<td class="name">:</td>
				<td><input type="text" name="kategori" ></td>
			</tr>
			
			<tr>
				<td><input type="submit" name="menyimpan"></td>
			</tr>
			<tr>
				<td><input type="button" name="kembali" value="cancel" onClick="document.location.href='index.php';"></td>
			</tr>
		</div>
		
</form>
</table>
</div>
</body>
</html>

<?php
if(isset($_POST['menyimpan'])){
	$id_buku = $_POST['id_buku'];
	$judul = $_POST['judul'];
	$diskripsi = $_POST['diskripsi'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];
	$tahun_terbit = $_POST['tahun_terbit'];
	$kategori = $_POST['kategori'];
	

	include 'koneksi.php';
	$koneksi    = new mysqli($hostname,$user,$pass,$database);

		$tambah 	= $koneksi->query("insert into buku values ('$id_buku','$judul','$diskripsi','$penulis','$penerbit','$tahun_terbit','$kategori')");
		
	echo "<script>window.location.href='index.php'</script>";
	

}