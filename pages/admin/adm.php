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
		<link rel="stylesheet" href="../../style/usrStyle1.css">
	</head>
	<body>
		<div class='judul'>
			<h1>E-Library</h1>
		</div>
		<div class='navBar'>
			<p>You are login as <?php echo $_SESSION['user']->getUsername() ; ?></p>
			<ul>
				<li id='active'>
					<a href='adm.php'>
						<i class='fa fa-home'>

						</i>
					</a>
				</li>
				<li>
					<a href='../general/news.php'>
						<i class='fa fa-newspaper-o'>
						
						</i>
					</a>
				</li>
				<li>
					<a href=''>
						<i class='fa fa-bell'>
						
						</i>
					</a>
				</li>
				<li>
					<a href='../general/profile.php'>
						<i class='fa fa-user'>
						
						</i>
					</a>
				</li>
				<li>
				<a href='../../?statusLogin=1'>
						<i class='fa fa-close'>
						
						</i>
					</a>
				</li>
				
			</ul>
		</div>

		<div class='mid'>
			<div class='leftBar'>
				<p>Menu</p>
				<ul>
					<li><a href='books.php'>Book List</a></li>
					<li><a href='member.php'>Member List</a></li>
					<li><a href='admList.php'>Administrator List</a></li>
					<li><a href='../general/journals.php'>Download Journals</a></li>
				</ul>
			</div>
			<div class='midBar'>
				<div class='midHeader'>
					<h1>Welcome to eLibrary!</h1>
				</div>
				<div class='midContent'>
					<h2>About Us</h2>
					<p>
						eLibrary is a simple library web where people
						can download journals for free and search the books they need. 
						Let's give the best service to our members. Like all the 
						members, you can download journals and see what's on today's news. if there is new 
						administrators, please help them to register(administrators can't do self-register),
						Don't forget to check our e-mail (click the bell icon) to help our members.
					</p>				
				</div>
				<div class='midFooter'>
					<p>&copy; 2018 Boundless-Learners,Hippow - eLibrary for Web Based Programming</p>
				</div>
			</div>
		</div>		
	</body>
</html>