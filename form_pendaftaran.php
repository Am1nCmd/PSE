<?php
	include 'auth.php';

	// date time
	$timezone = "Asia/Jakarta";
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$addOn=date('Y-m-d H:i:s');

	// random code
	function generateRandomString($length = 10) {
		$characters = '1234567890';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	$initial 	= 'WR';
    $kode 		= generateRandomString();
	
	if (isset($_POST['uploadImageBtn'])) {
		$uploadFolder = 'doc/';
		foreach ($_FILES['nama_gambar']['tmp_name'] as $key => $image) {
			$imageTmpName 	= $_FILES['nama_gambar']['tmp_name'][$key];
			$imageName 		= $_FILES['nama_gambar']['name'][$key];
			
			$id 					= strval(ceil(microtime(true)));
			$nama_perusahaan 		= $_POST['nama_perusahaan'];
			$id_perusahaan			= $initial.'-'.$kode;
			$no_tlp 				= $_POST['no_tlp'];
			$email					= $_POST['email'];
			$domain_website			= $_POST['domain_website'];
			$sektor_perusahaan		= $_POST['sektor_perusahaan'];
            $addBy                  = $_POST['addBy'];


			$result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);

			$query = "INSERT INTO web_registration 
												SET id='$id', 
												nama_perusahaan='$nama_perusahaan', 
												id_perusahaan='$id_perusahaan', 
												no_tlp='$no_tlp', 
												email='$email',
												domain_website='$domain_website',
												dokumen_perizinan='$imageName',
												sektor_perusahaan='$sektor_perusahaan',
												addBy='$addBy', 
												addOn='$addOn' " ;
			$run = $cn->query($query) or die("Error in saving image".$cn->error);

		}
		if ($result) {
			header("location:form_pendaftaran?status=sukses");
			#echo '<script>window.location.href="index.php";</script>';
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <title>PSE - Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    
	<?php include 'header.php'; ?>
    
	<div class="container">
		
		<h1 class="mt-3">Form Pendaftaran Perusahaan</h1>
		
		<?php
			if(isset($_GET["status"])){
				if($_GET["status"] == "sukses"){ ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> Perusahaan anda berhasil di daftarkan.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php }
			}
		?>
		
		<form method="post" enctype="multipart/form-data" autocomplete="">
			<input type="hidden" value="<?php echo $fullname ?>" name="addBy">
			<div class="mb-3">
				<label for="nama_perusahaan" class="form-label">Nama Perusahaan:</label>
				<input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan" required/>
			</div>
			<div class="mb-3">
				<label for="no_tlp" class="form-label">No Tlp:</label>
				  <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="No Tlp" required/>
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
			</div>
			<div class="mb-3">
				<label for="domain_website" class="form-label">Domain Website:</label>
				<input type="text" class="form-control" id="domain_website" name="domain_website" placeholder="Domain Website" required/>
			</div>
			<div class="mb-3">
				<label for="dokumen_perizinan" class="form-label">Dokumen Perizinan:</label>
				<input type="file" class="form-control" id="dokumen_perizinan" name="nama_gambar[]" required/>
			</div>
			<div class="mb-3">
				<label for="sektor_perusahaan" class="form-label">Sektor Perusahaan:</label>
				<select class="form-select" id="sektor_perusahaan" name="sektor_perusahaan" required>
					<option value="TIK">Teknologi Informasi dan Komunikasi</option>
					<option value="Perdagangan">Perdagangan</option>
					<option value="Kesehatan">Kesehatan</option>
					<option value="Transportasi">Transportasi</option>
					<option value="Lain-lain">Lain-lain</option>
				</select>
			</div>
			<button type="submit" type="submit" name="uploadImageBtn" id="uploadImageBtn" class="btn btn-primary">Submit</button>
		</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
