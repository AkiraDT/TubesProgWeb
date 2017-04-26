<!DOCTYPE html>
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
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php
        $db = mysql_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysql_select_db('kebun_binatang', $db) or die(mysql_error($db));
        ?>  
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
                <a class="navbar-brand" href="Hewan.php">Kebun Binatang</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="Sektor.php"><i class="fa fa-fw fa-male"></i> Sektor</a></li>
                    <li>
                    	<a href=".php"><i class="fa fa-fw fa-book"></i> </a></li>
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
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <small>Kebun Binatang</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
<?php 	
			$query = "SELECT * FROM tb_admin
              WHERE
              kode_admin ='".$_GET['id']."'";
            $result = mysql_query($query, $db) or die(mysql_error($db));

              while($row = mysql_fetch_array($result))
              {   
				$a = $row['kode_admin'];
				$b = $row['no_telepon'];
				$c = $row['email_admin'];
				$d = $row['no_rekening'];
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Hewan</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="Hewan-proc1.php">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="ID Habitat" name="id_habitat" id="id_habitat">
                            </div>                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Nama Habitat" name="nama_habitat" id="nama_habitat">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Kode Kandang" name="kd_kandang" id="kd_kandang">
                            </div>
                            <button type="submit" class="btn btn-default">Update Record</button>
                         


                      </form>  
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

