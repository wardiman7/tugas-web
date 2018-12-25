<!DOCTYPE html>
<html>
<head>
	<title>Pengumuman</title>
	<link rel="stylesheet"  href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">
</head>
<body>

	<div class="container">
		<h1>Pengumuman Wisuda</h1>
		<h2>Tanggal : <?php echo $tanggal; ?></h2>
		<h2>Ketua : <?php echo $ketua; ?></h2>


		<a href="<?php echo site_url('pengumuman/detail'); ?>" class="btn btn-outline-success">Detail</a>
	</div>



</body>
</html>