<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hewan</title>
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

			  	<a class="brand" href="<?php echo base_url('index.php/login/utama') ?>"> Kebun Binatang </a>

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
								<a href="<?php echo base_url('index.php/sektor/view') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Sektor
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/Pages/view_mhs') ?>">
									<i class="menu-icon icon-table"></i>
									Data hewan
								</a>
							</li>
						</ul><!--/.widget-nav-->
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Data Hewan</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									<div class="media-body">
										<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/hewan/utama';?>">
											<div class="group-input">
												<input class="btn btn-primary" type="submit" name="submit" value="Tambah Data"/>
											</div>
											<br>
										<table class="table">
											<tr>
												<th>NO</th>
												<th>Nama Makanan</th>
												<th>Jenis Makanan</th>
												<th>Sisa Stok</th>
											</tr>
											<?php 
												$no = 1;
												foreach($makan as $mkn){
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $mkn->nama_makanan?></td>
												<td><?php echo $mkn->tipe_makanan ?></td>
												<td><?php echo $mkn->jumlah_makanan ?></td>
												<td align="center">
													<a href="<?php echo base_url('index.php/stok/delete_stok/'.$mkn->kd_makanan)?>" class="btn btn-danger">Delete</a>
													<a href="<?php echo base_url('index.php/stok/edit_stok/'.$mkn->kd_makanan)?>" class="btn btn-primary">Edit</a>
												</td>
											</tr>
											<?php $no++; } ?>
										</table>
										
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