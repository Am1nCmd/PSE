<?php
	
	session_start();
	include 'cn.php';

	$email 		= $_POST["email"];
	$password 	= mysqli_real_escape_string($cn, $_POST["password"]);

	$hasilpass = md5($password);
	
	$sql = "select * from web_registration_userlist where email='".$email."' and password='".$hasilpass."' limit 1";
	$hasil = mysqli_query ($cn,$sql);
	$jumlah = mysqli_num_rows($hasil);
	
	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["email"]=$row["email"];
		$_SESSION["fullname"]=$row["fullname"];
		$_SESSION["type_user"]=$row["type_user"];

		#echo "<script>history.go(-2);</script>";
		header("Location:form_pendaftaran");
		
	} else {
		header("location:signin?status=gagal");
	}

?>