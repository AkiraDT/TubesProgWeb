<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
			
			<?php 
			include('dbConfig.php');
			
			if(isset ($_POST['loginAwal'])){
				$inputUser = $_POST ['user'];
				$passmd5= $_POST ['pass'];
				$inputPass = md5($passmd5);
				if(empty($inputUser) || empty($inputPass)){
					echo "<script>window.alert('Isi Username dan Password');</script>";
					echo "<script>window.location.href = 'index.php';</script>";
				}else{
					$query = "SELECT * from login_admin WHERE username = '$inputUser' AND passuser = '$inputPass'";
					$data = mysqli_query($koneksi,$query);
						//contoh insert
					
					if(mysqli_num_rows($data)>0){
						//echo "<script>window.location.href = '../web/dashboard.php';</script>";
						echo "<script>window.location.href = '../mod10/';</script>";
						session_start();
						$_SESSION['loginAwal'] = $inputUser;
					} else{
						echo "<script>window.alert('username atau password salah');</script>";
						echo "<script>window.location.href = 'index.php';</script>";
						
					}
				}
				
			} else{ ?>

			
			<form method = "POST">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input name="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name = "loginAwal" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</form>
			<?php } ?>
				
			</div>
			<div class="sign-up-htm">
			
			<?php // ISI DISINI 
			include('dbConfig.php');
			
			if(isset ($_POST['tambahUser'])){
				$inputUser = $_POST ['username'];
				$inputPass = $_POST ['npass'];
				$inputPass2 = $_POST ['repass'];
				$passmd5 = md5($inputPass);
				
				if($inputPass!=$inputPass2){
					echo "<script>window.alert('password tidak sama');</script>";
				} else {
					$query = "insert into login_admin(username,passuser) values ('$inputUser', '$passmd5')";
					$data = mysqli_query($koneksi,$query);
					echo "<script>window.alert('berhasil di insert');</script>";					
					echo "<script>window.location.href = 'index.php';</script>";
				}
			}
			
			
			?>
			
			<form action = "" method = "post">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="npass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input name="repass" type="password" class="input" data-type="password">
				</div>
				
				<div class="group">
					<input type="submit" name = "tambahUser" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
  
  
</body>
</html>
