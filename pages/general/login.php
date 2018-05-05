<?php  ?>
<!DOCTYPE html>
<html>
	<head>
		<title>eLibrary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="../../lib/w3.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="../../style/LoginStyle.css">
	</head>
	<body>
		<!-- CONTENT -->
		<div class="HeaderLogin">
			<h1>eLIBRARY</h1>
		</div>
		<div class="LoginBox">
		<form action="../../model/loginVer.php" method='post'>
			<p>USERNAME</p>
			<input type="text" name="username" id="">
			<br>
			<p>PASSWORD</p>
			<input type="password" name="password" id="">
			<input type="submit" value="LOGIN">
			<a href="../../index.php">CANCEL</a>	
		</form>
		</div>
		<?php
			if(isset($_GET['statusSalah'])){
				if($_GET['statusSalah'] == 1){
					echo "<h1> PASSWORD SALAH </h1>";
				}else{
					echo "<h1> USERNAME SALAH</h1>";
				}
			}


		?>
	</body>
</html>