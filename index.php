<!DOCTYPE html>
<?php
	session_start();
	
	?>
<html>
	<head>
		<title>eLibrary - Index</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="lib/w3.css">
		<link rel="stylesheet" href="lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="style/indexStyle.css">
		
	</head>
	<body>
		<!-- CONTENT -->
		<div class="logo">
			<img src="img/unpar.png" alt="">
			<img src="img/pmunpar.png" alt="">
			<img src="" alt="">
			

		</div>
		<h1>E-Library</h1>
		<div class="button">
			<a href="pages/general/signUp.php">Sign Up</a>
			
			<a href="pages/general/login.php">Log in</a>
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