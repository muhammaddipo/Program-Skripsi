<?php  ?>
<!DOCTYPE html>
<html>
	<head>
		<title>eLibrary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="../../lib/w3.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="../../style/style.css">
	</head>
	<body>
		<!-- CONTENT -->
		<form action="../../model/loginVer.php" method='post'>
			<input type="text" name="username" id="">
			<br>
			<input type="password" name="password" id="">
			<input type="submit" value="login">
		</form>
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