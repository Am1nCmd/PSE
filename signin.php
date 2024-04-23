<?php
    session_start();
    include 'cn.php'; 
    if(isset($_SESSION["fullname"]))
    {
        header("Location:form_pendaftaran");
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <title>PSE - Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
		<h1 class="mt-3">Sign In</h1>
		<?php
			if(isset($_GET["status"])){
				if($_GET["status"] == "gagal"){ ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Gagal!</strong> Email atau password salah.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php } else if($_GET["status"] == "sukses"){ ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> Akun berhasil di daftarkan.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php }
			}
		?>
		<form action="signin-proses" method="post" autocomplete="off">
			<!-- Updated action attribute -->
			<div class="mb-3">
				<label for="email" class="form-label">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required/>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Password:</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required/>
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
		<p>Belum punya akun? Daftar <a href="signup">disini</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
