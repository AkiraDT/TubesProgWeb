	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kebun Binatang</title>
</head>
<body>
<?php
						$as = $_POST['kode_admin'];
					    $bs = $_POST['no_telepon'];
						$cs = $_POST['email_admin'];
						$ds = $_POST['no_rekening'];
						
		$db = mysql_connect('localhost', 'root', '') or
		die ('Unable to connect. Check your connection parameters.');
		mysql_select_db('kebun_binatang', $db) or die(mysql_error($db)); 
		
	 			$query = 'UPDATE tb_admin set
				    no_telepon ="'.$bs.'",email_admin ="'.$cs.'",no_rekening="'.$ds.'"
					WHERE kode_admin ="'.$as.'"';
					$result = mysql_query($query, $db) or die(mysql_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "Habitat.php";
		</script>
 </body>
</html>