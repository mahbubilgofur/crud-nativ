 	
<?php
// include database connection file
include("koneksi.php");
$koneksi    = new mysqli($hostname,$user,$pass,$database);
 
// Get id from URL to delete that user

$id_buku = $_GET['id_buku'];
 
// Delete user row from table based on given id
$hapus     = $koneksi->query("delete from buku where id_buku='$id_buku'");
echo '<script>window.alert("yakin mau hapus data ini")</script>';
 echo "<script>window.location.href='index.php'</script>";

?>