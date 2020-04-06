<!DOCTYPE html>
<html>
	<head>
		<title>eLibrary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="../../lib/w3.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="../../style/LoginStyle1.css">
	</head>
	<body>
		<!-- CONTENT -->
		<div class='HeaderLogin'>
			<h1>eLIBRARY</h1>
		</div>
		<div class='LoginBox'>
		<form action='../../model/loginVer.php' method='post'>
			<p>USERNAME</p>
			<input type='text' name='username' id=''>
			<br>
			<p>PASSWORD</p>
			<input type='password' name='password' id=''>
			<input type='submit' name='login' value='LOGIN'>
			<a href='../../index.php'>CANCEL</a>	
		</form>
		</div>
		<?php
			if(isset($_GET['statusSalah'])){
				if($_GET['statusSalah'] == 1){
		?>
					<br><br>
					<h1 style='color : white; text-shadow:-3px -3px 2px rgb(27, 15, 15)
					background:rgba(255, 0, 0, 0.5); float: left; margin-left: 15px;
					padding: 10px; border:1px solid transparent; box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
					border-radius: 10px;'>PASSWORD SALAH !</h1>
		<?php
				}else{
		?>
					<br><br>
					<h1 style='color : white; float: left; margin-left: 15px;
					text-shadow:-3px -3px 2px rgb(27, 15, 15);background:rgba(255, 0, 0, 0.5);
					padding: 10px; border:1px solid transparent; box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
					border-radius: 10px;'> USERNAME SALAH !</h1>
		<?php
				}
			}
		?>
	</body>
</html>