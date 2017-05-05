<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kebun Binatang</title>
	<link type="text/css" href="<?php echo base_url('files/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('files/bootstrap/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('files/css/theme.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('files/images/icons/css/font-awesome.css') ?>" rel="stylesheet">
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="<?php echo base_url('index.php/Pages') ?>"> Kebun Binatang </a>

			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="<?php echo base_url('index.php/Pages/view_mhs') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Hewan
								</a>
							</li>
							<!--<li>
								<a href="<?php echo base_url('index.php/Pages/view_mhs') ?>">
									<i class="menu-icon icon-table"></i>
									Data Hewan
								</a>
							</li>-->
							<!--<li>
								<a href="<?php echo base_url('index.php/Pages/tamb_sek') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Tambah Sektor
								</a>
							</li>-->
							<li>
								<a href="<?php echo base_url('index.php/Pages/view_sek') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Sektor
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/Pages/view_stok') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Stok Makanan
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/Pages/view_lokasi') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Lokasi
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/Pages/view_kand') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Kandang
								</a>
							</li>
							<li>
								<a href="../prgwb/logout.php">
									<i class="menu-icon icon-table"></i>
									Logout
								</a>
							</li>
						</ul><!--/.widget-nav-->
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">
					
						<div class="module">
							<div class="module-head">
								<h3>Tambahkan Data Hewan</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									<div class="media-body">
										<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Pages/validation_check'; ?>">
											<?php echo validation_errors(); ?>
											<div class="group-input">
												<label>Kode Hewan</label>
												<input class="form-control" type="text" name="khewan" />
											</div>
											<br>
											<div class="group-input">
												<label>Nama Hewan</label>
												<input class="form-control" type="text" name="namhewan" />
											</div>
											<br>
											<div class="group-input">
												<label>Spesies Hewan</label>
												<input class="form-control" type="text" name="speshewan" />
											</div>
											<br>
											<div class="group-input">
												<label>Jenis Kelamin Hewan</label>
												<input class="form-control" type="text" name="kelhewan" />
											</div>
											<br>
											<div class="group-input">
												<label>Umur Hewan</label>
												<input class="form-control" type="text" name="umhewan" />
											</div>
											<br>
											<div class="group-input">
												<label>Kode Habitat</label>
												<input class="form-control" type="text" name="kodhabitat" />
											</div>
											<br>
											<div class="group-input">
												<input class="btn btn-primary" type="submit" name="submit" value="Simpan Data"/>
											</div>
										</form>					
									</div>
								</div>
								
                            </div><!--/.module-body-->
						</div><!--/.module-->
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			
		</div>
	</div>
</body>
</html>