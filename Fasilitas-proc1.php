	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fasilitas</title>
</head>
<body>
<?php
						$as = $_POST['kd_fasilitas'];
					   // $bs = $_POST['kd_sektor'];
						$cs = $_POST['nama_fasilitas'];
						
						
		$db = mysql_connect('localhost', 'root', '') or
		die ('Unable to connect. Check your connection parameters.');
		mysql_select_db('kebun_binatang', $db) or die(mysql_error($db)); 
		
	 			$query = 'UPDATE fasilitas set
				    nama_fasilitas ="'.$cs.'"
					WHERE kd_fasilitas ="'.$as.'"';
					$result = mysql_query($query, $db) or die(mysql_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "Fasilitas.php";
		</script>
 </body>
</html>