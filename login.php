<?php
include 'koneksi.php';
	session_start();
	$koneksi    = new mysqli($hostname,$user,$pass,$database);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login</title>
	<link rel="shortcut icon" type="image" href="ultraman.png">
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
	<div class="input">
	<div class="container">
    <div class="row">
  	<div class="col-sm-6">
		
			<div class="card">
				<div class="card-header">
				<h1>Halaman Login</h1>
				</div>
				<div class="card-body" style="text-align: center;">
					<table align="center">
				<form method="POST">
					<tr>
					<div class="form-group">
						<td><input class="form-control" type="text" name="user_name" placeholder="Username"></td>
						<br>
					</div>
				</tr>
				<tr>
					<div class="form-group">
						<td><input class="form-control" type="password" name="password" placeholder="Password"></td>
						<br>                                            
					</div>
				</tr>
				<tr>
					<div class="form-group">
						<td><input class="btn btn-primary" type="submit" name="login" value="Login"></td>
					</div>
				</tr>
				</form>
			</table>
				</div>
			</div>
			
	</div>
	</div>
	</div>
</div>
</body>
</html>
<?php
//jika tombol login diklik
if(isset($_POST['login'])){
	$user_name = $_POST['user_name']; 
	$password = $_POST['password'];
	$cek = $koneksi->query("select * from user where user_name='$user_name' and password='$password'")->num_rows;
	$ambil_level = $koneksi->query("select * from user where user_name='$user_name' and password='$password'")->fetch_assoc();
	$level = $ambil_level['level'];

	//exit($level);
	//jika cek lebih dari 0 maka arahkan ke index
	//jika cek = 0 munculkan pesan data yg anda masukkan salah
	if($cek>0){
		$_SESSION['login']='OKE';
		$_SESSION['level']=$level;
		//exit($_SESSION['login']);
		echo '<script>window.location.href="index.php"</script>';
	}else{
		echo '<script>window.alert("Data yg anda masukkan salah!")</script>';
	}
}