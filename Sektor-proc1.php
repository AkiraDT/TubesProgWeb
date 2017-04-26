	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kebun Binatang</title>
</head>
<body>
<?php
						$as = $_POST['kd_sektor'];
					    $bs = $_POST['nama_sektor'];
						$cs = $_POST['koordinatx_sektor'];
						$ds = $_POST['koordinaty_sektor'];
						
		$db = mysql_connect('localhost', 'root', '') or
		die ('Unable to connect. Check your connection parameters.');
		mysql_select_db('kebun_binatang', $db) or die(mysql_error($db)); 
		
	 			$query = 'UPDATE sektor set
				    nama_sektor ="'.$bs.'",koordinatx_sektor ="'.$cs.'",koordinaty_sektor="'.$ds.'"
					WHERE kd_sektor ="'.$as.'"';
					$result = mysql_query($query, $db) or die(mysql_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "Sektor.php";
		</script>
 </body>
</html>