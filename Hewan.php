<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<?php
	
	session_start();
    if(isset($_SESSION["loginAwal"])){
        $db = mysql_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysql_select_db('kebun_binatang', $db) or die(mysql_error($db));
    } else{
		
		echo "<script>window.location.href = '../prgwb/index.php';</script>";
	}
?> 


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kebun Binatang</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-sektor.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	
 
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Dashboard.php">Kebun Binatang</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li>
                        <a href="Sektor.php"><i class="fa fa-fw fa-male"></i> Sektor</a></li>
                    <li>
                    	<a href="Kandang.php"><i class="fa fa-fw fa-book"></i> Kandang</a></li>
                    <li>
                    	<a href="Habitat.php"><i class="fa fa-fw fa-book"></i> Habitat</a></li>
                    <li class="active">
                    	<a href="Hewan.php"><i class="fa fa-fw fa-book"></i> Hewan</a></li>
                    <li>
                    	<a href="Makanan.php"><i class="fa fa-fw fa-book"></i> Makanan</a></li>
                    <li>
                    	<a href="Stok Makanan.php"><i class="fa fa-fw fa-book"></i> Stok Makanan</a></li>
                    <li>
                        <a href="Data Pengunjung.php"><i class="fa fa-fw fa-book"></i> Data Pengunjung</a></li>
                    <li>
                        <a href="PC Form.php"><i class="fa fa-fw fa-book"></i> PC Form</a></li>
					<li>
                    	<a href="Fasilitas.php"><i class="fa fa-fw fa-book"></i>Fasilitas</a></li>
						<li>
                    	<a href="logout.php"><i class="fa fa-fw fa-book"></i>Log Out </a></li>
				</ul>
                <p>&nbsp;</p>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row"></div>
                <!-- /.row -->


             <div class="col-lg-12">
                        <h2>Hewan</h2> <a href="Hewan-add.php?action=add" type="button" class="btn btn-xs btn-info">Tambah Data Baru</a>
                                
                        <div class="table-responsive">
                            <table width="94%" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                    	<th width="10%">ID Hewan</th>
                                        <th width="10%">Nama Hewan</th>
                                        <th width="10%">Tanggal Lahir</th>
                                        <th width="10%">Jenis Kelamin</th>
                                        <th width="10%">Umur Hewan</th>
                                        <th width="10%">Spesies Hewan</th>
                                        <th width="10%">Tipe Makanan</th>
                                        <th width="10%">Nama Induk</th>
                                        <th width="10%">Jenis Hewan</th>
                                        <th width="10%">Nama Kandang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = "select distinct hewan.id_hewan, nama_hewan, tanggal_lahir, jk_hewan, umur_hewan,
				spesies_hewan, tipe_makanan, nama_induk, jenis_hewan, nama_kandang
				from HEWAN, STOK_MAKANAN, MAKANAN, KANDANG , HABITAT where HEWAN.id_hewan like 'si%' and MAKANAN.kd_makanan in (
				select distinct kd_makanan from MAKANAN where id_hewan like 'si%') and KANDANG.kd_kandang in(
				select distinct kd_kandang from HABITAT where id_habitat in(
				select distinct id_habitat from HEWAN where id_hewan like 'si%'))
				and MAKANAN.id_hewan like 'si%' and STOK_MAKANAN.kd_makanan in (
				select kd_makanan from MAKANAN where id_hewan like 'si%');";
                    $result = mysql_query($query, $db) or die (mysql_error($db));
                  
                        while ($row = mysql_fetch_assoc($result)) {
                                             
                            echo '<tr>';
							echo '<td>'. $row['id_hewan'].'</td>';
                            echo '<td>'. $row['nama_hewan'].'</td>';
                            echo '<td>'. $row['tanggal_lahir'].'</td>';
                            echo '<td>'. $row['jk_hewan'].'</td>';
							echo '<td>'. $row['umur_hewan'].'</td>';
							echo '<td>'. $row['spesies_hewan'].'</td>';
							echo '<td>'. $row['tipe_makanan'].'</td>';
							echo '<td>'. $row['nama_induk'].'</td>';
							echo '<td>'. $row['jenis_hewan'].'</td>';
							echo '<td>'. $row['nama_kandang'].'</td>';
                        
                            echo '<td> <a  type="button" class="btn btn-xs btn-warning" href="Hewan-edit1.php?action=edit & id='.$row['id_hewan'].'"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="Hewan-delete.php?type=people&delete & id=' . $row['id_hewan'] . '">DELETE </a> </td>';
                            echo '</tr> ';
							
                }
				
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

