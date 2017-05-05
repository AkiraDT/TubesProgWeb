<HTML>
	<head>
		<title> Quis1 </title>
	</head>
	<body>
		<form action = " " method = "POST">
			Masukan Nama 	: <input type = "text" name = "nama"/><br><br>
			Masukan Nim 	: <input type = "text" name = "nim"/><br><br>
			
			Kelas 	: <select name = "Kelas">
			<option value = ""> ~pilih~ </option>
			<option value = "D3IF-39-01"> D3IF-39-01 </option>
			<option value = "D3IF-39-02"> D3IF-39-02 </option>
			<option value = "D3IF-39-03"> D3IF-39-03 </option>
			<option value = "D3IF-39-04"> D3IF-39-04 </option>
			<option value = "D3IF-39-05"> D3IF-39-05 </option>
			</select><br><br>
			
			<input type = "submit" name = "submit" value = "submit">
		</form>
		<?php
			if(isset($_POST['nama']) AND isset($_POST['nim'])){
				
				$nama = $_POST['nama'];
				$nim = $_POST['nim'];
				$kelas = $_POST['Kelas'];
				
				echo "Nama ";
				echo $nama;
				
				echo "<br>";
				echo "NIM : ";
				echo $nim;
				
				echo "<br>";
				echo "Kelas : ";
				echo $kelas;
			} else {
				echo "<script language = 'javascript'>
				window.alert('maaf, anda harus mengisi form di atas dengan lengkap');
				</script>";
			}
		?>
	</body>
</HTML>