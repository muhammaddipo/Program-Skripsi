<?php
	include '../../model/userClass.php';
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>eLibrary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="../../lib/w3.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="../../lib/font-awesome.min.css">
		<link rel="stylesheet" href="../../lib/font-awesome.css">
		<link rel="stylesheet" href="../../style/usrStyle.css">
	</head>
	<body>
		<div class="judul">
			<h1>E-Library</h1>
		</div>
		<div class="navBar">
			<p>You are login as <?php echo $_SESSION['user']->getUsername() ; ?></p>
			
			<ul>
				<li><i class="fa fa-home"></i></li>
				<li><i class="fa fa-newspaper-o"></i></li>
				<li><i class="fa fa-envelope-o"></i></li>
				<li><i class="fa fa-user"></i></li>
			</ul>
		</div>

		<div class="mid">
			<div class="leftBar">
				<p>Menu</p>
				<ul>
					<li>Book List</li>
					<li>BorrowingHistory</li>
					<li>Download Journals</li>
				</ul>
			</div>
			<div class="midBar">
				<h1>Welcome to eLibrary!</h1>
				<div class="midContent">
					<h1>About Us</h1>

					<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					 when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
					 It has survived not only five centuries, 
					 but also the leap into electronic typesetting, remaining essentially unchanged. 
					 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
					  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
					<br>
					<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					 when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
					 It has survived not only five centuries, 
					 but also the leap into electronic typesetting, remaining essentially unchanged. 
					 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
					  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
					<br>
					<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					 when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
					 It has survived not only five centuries, 
					 but also the leap into electronic typesetting, remaining essentially unchanged. 
					 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
					  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
					<br>
					<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					 when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
					 It has survived not only five centuries, 
					 but also the leap into electronic typesetting, remaining essentially unchanged. 
					 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
					  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
				</div>

				<div class="midFooter">
					<p>&copy; Boundless-Learners,Hippow - eLibrary for Web Based Programming</p>
				</div>
			</div>
		</div>
		
	</body>
</html>