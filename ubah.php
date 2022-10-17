<?php
	$id_buku 	    = $_GET['id_buku'];
	$koneksi 		= new mysqli('localhost','root','','perpustakaan1');
	$data 			= $koneksi->query("select * from buku where id_buku ='$id_buku'");
	$tampil 		= $data->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="ub.css">
	<title></title>
</head>
<body>
	<div class="dr">
		<table align="center">
<form method="POST">
<tr>
				<td class="name">id buku </td>
				<td class="name"> :</td>
	<td><input type="text" name="id_buku" placeholder="ID Buku" value="<?=$tampil['id_buku']?>"></td><br>
</tr>
 <tr>
				<td class="name">judul </td>
				<td class="name"> :</td>
	<td><input type="text" name="judul" placeholder="ID Buku" value="<?=$tampil['judul'	]?>"></td><br>
</tr>
<tr>
				<td class="name">diskripsi </td>
				<td class="name"> :</td> 
	<td><input type="text" name="diskripsi" placeholder="ID Buku" value="<?=$tampil['diskripsi']?>"></td><br>
</tr>
<tr>
				<td class="name">penulis </td>
				<td class="name"> :</td>
	<td><input type="text" name="penulis" placeholder="ID Buku" value="<?=$tampil['penulis']?>"></td><br>
</tr>
<tr>
				<td class="name">penerbit </td>
				<td class="name"> :</td>
	<td><input type="text" name="penerbit" placeholder="ID Buku" value="<?=$tampil['penerbit']?>"></td><br>
</tr>
<tr>
				<td class="name">tanggal terbit</td>
				<td class="name"> :</td>
	<td><input type="text" name="tahun_terbit" placeholder="ID Buku" value="<?=$tampil['tahun_terbit']?>"><td><br>
		<td class="name">kategori </td>
				<td class="name"> :</td>
	<td><input type="text" name="kategori" placeholder="ID Buku" value="<?=$tampil['kategori']?>"><td><br>
</tr>
	
	<br>
	
	<td><input type="submit" name="ubah"></td>
</form>
</table>
</div>
</body>
</html>
<?php

if(isset($_POST['ubah'])){
    $id_buku =$_POST['id_buku']);
	$judul = $_POST['judul'];
	$diskripsi = $_POST['diskripsi'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];
	$tahun_terbit = $_POST['tahun_terbit'];
	$kategori = $_POST['kategori'];
	

	$koneksi = new mysqli('localhost','root','','perpustakaan1');
	$sql = "update buku set
			
			id_buku = '$id_buku',
			judul='$judul',
			diskripsi= '$diskripsi',
			penulis = '$penulis',
			penerbit= '$penerbit',
			tahun_terbit= '$tahun_terbit',
			kategori = '$kategori'
			 where id_buku='$id_buku'";
	$koneksi = $koneksi->query($sql);
	//setelah memasukan data redirect ke index/tampil data
	echo "<script>window.location.href='index.php'</script>";	
} ?>