<?php
	include 'cn.php';
	if (isset($_POST['fullname'])) {

		//get tanggal jam
		$timezone = "Asia/Jakarta";
		if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
		$addOn=date('Y-m-d H:i:s');
		
		$id 			= strval(ceil(microtime(true)));
		$fullname		= $_POST['fullname'];
		$email      	= $_POST['email'];
		$password 		= mysqli_real_escape_string($cn, $_POST["password"]);
		
		$hasilpass = md5($password);

		$query = "INSERT INTO web_registration_userlist (id, fullname, email, password, addOn, type_user) VALUES ('$id', '$fullname', '$email','$hasilpass', '$addOn', 'Standart')";
		$result = mysqli_query($cn, $query);
		
		if(!$result){
			die ("Query gagal dijalankan: ".mysqli_errno($cn).
				" - ".mysqli_error($cn));
		} else {
			#echo "<script>window.location.href='mail/daftar';</script>";
			echo "<script>window.location.href='signin?status=sukses';</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <title>PSE - Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
		<h1 class="mt-3">Sign Up</h1>
		<form method="post">
			<!-- Updated action attribute -->
			<div class="mb-3">
				<label for="email" class="form-label">Nama Lengkap:</label>
				<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter fullname"/>
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email"/>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Password:</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter password"/>
			</div>
			<button type="submit" class="btn btn-primary">Daftar</button>
		</form>
		<p>Sudah punya akun? Sign In <a href="signin">disini</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
