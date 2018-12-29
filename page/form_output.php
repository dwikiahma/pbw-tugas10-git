<html>
	<head>
		<title>www.dwikileaks.com</title>
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	</head>
	<body style="background-color:">

		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="../index.html">Home</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="form_daftar.html">Form Beli Barang</a></li>
				</ul>
			</div>
		</nav>

		<div class="col-md-12">

			<center>
				<h3><b>DATA PESANAN ANDA</b></h3>
			</center>

			<div class="col-md-3">
			</div>

			<div class="col-md-6">

				<div class="table-responsive">

					<table class="table table-hover">
						<thead>
							<tr>
								<th width="125px">&nbsp;</th>
								<th width="5px">&nbsp;</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td><?php echo $_GET['nama']; ?></td>
							</tr>
							<tr>
								<td>No. WA</td>
								<td>:</td>
								<td><?php echo $_GET['wa']; ?></td>
							</tr>
							<tr>
								<td>KTP</td>
								<td>:</td>
								<td><?php echo $_GET['ktp']; ?></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td><?php echo $_GET['jenis_kelamin']; ?></td>
							</tr>
							<tr>
								<td>Pesan Barang</td>
								<td>:</td>
								<td><?php echo $_GET['specifikasi']; ?></td>
							</tr>

						</tbody>
					</table>

				</div>

			</div>

		</div>

	</body>
</html>
