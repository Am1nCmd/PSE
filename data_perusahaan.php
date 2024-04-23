<?php
	include 'auth.php';
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
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Perusahaan</th>
					<th scope="col">Tlp</th>
					<th scope="col">Email</th>
					<th scope="col">Domain</th>
					<th scope="col">Dokumen</th>
					<th scope="col">Sektor Perusahaan</th>
					<th scope="col">Add On</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i=1;
					$tp=mysqli_query($cn, "SELECT * FROM web_registration");
					while($r=mysqli_fetch_array($tp)){
				?>
				<tr>
					<th scope="row"><?php echo $i ?></th>
					<td><?php echo $r['id_perusahaan'] ?> - <?php echo $r['nama_perusahaan'] ?></td>
					<td><?php echo $r['no_tlp'] ?></td>
					<td><?php echo $r['email'] ?></td>
					<td><?php echo $r['domain_website'] ?></td>
					<td><?php echo $r['dokumen_perizinan'] ?></td>
					<td><?php echo $r['sektor_perusahaan'] ?></td>
					<td><?php echo $r['addOn'] ?></td>
				</tr>
				<?php $i=$i+1;?>
				<?php } ?>
			</tbody>
		</table>
		
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
