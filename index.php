<!DOCTYPE html>
<?php
	session_start();
	
	?>
<html>
	<head>
		<title>eLibrary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="lib/w3.css">
		<link rel="stylesheet" href="lib/w3-theme-riverside.css">
		<link rel="stylesheet" type="text/css" href="style/indexStyle.css">
	</head>
	<body>
		<!-- CONTENT -->
		<div class="Header">
			<h3>WELCOME TO :</h3>
			<h1>eLIBRARY</h1>
		</div>
		<div class="Isi">
			<ul>
				<li>
					<a href="pages/general/login.php">LOGIN</a>
				</li>
				<li>
					<a href="pages/general/signup.php">SIGN UP</a>
				</li>
			</ul>
		</div>
			<?php
				if(isset($_GET['statusLogin'])){
					session_unset();
					session_destroy();
					echo "<p style='color:mediumseagreen;text-align:center'>successfully Log out</p>";	
				}
			?>
	</body>
</html>