<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

		$db = mysql_connect('localhost', 'root', '') or
		die ('Unable to connect. Check your connection parameters.');
		mysql_select_db('kebun_binatang', $db) or die(mysql_error($db));

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'people':
					$query = "DELETE FROM tb_sektor
							WHERE
							kd_ = '".$_GET['id']."'";
						$result = mysql_query($query, $db) or die(mysql_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "Makanan.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>