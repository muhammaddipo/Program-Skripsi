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
				<li >
					<a href="usr.php">
						<i class="fa fa-home" >

						</i>
					</a>
				</li>
				<li>
					<a href="../general/news.php">
						<i class="fa fa-newspaper-o">
						
						</i>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-envelope">
						
						</i>
					</a>
				</li>
				<li>
					<a href="../general/profile.php">
						<i class="fa fa-user">
						
						</i>
					</a>
				</li>
				<li>
				<a href="../../?statusLogin=1">
						<i class="fa fa-car">
						
						</i>
					</a>
				</li>
				
			</ul>
		</div>

		<div class="mid">
			<div class="leftBar">
				<p>Menu</p>
				<ul>
					<li><a href="book.php">Book List</a></li>
					<li id="active"><a href="borrow.php">Borrowing History</a></li>
					<li><a href="">Download Journals</a></li>
				</ul>
			</div>
			<div class="midBar">
				<div class="midHeader">
					<h1>Borrowing History</h1>
				</div>
				<div class="midContent">
					<table>
						<tr>
							<th>Book Code</th>
							<th>Book Title</th>
							<th>Author</th>
							<th>Borrow Date</th>
							<th>Return Date </th>
							<th>Overdue </th>
							<th>Fine </th>
						</tr>
						<tr>
							<td>H896</td>
							<td>LaskarPelangi</td>
							<td>andrea</td>
							<td>2015-12-13</td>
							<td>2015-12-18</td>
							<td>0</td>
							<td>0</td>
						</tr>
					</table>
				</div>

				<div class="midFooter">
					<p>&copy; 2018 Boundless-Learners,Hippow - eLibrary for Web Based Programming</p>
				</div>
			</div>
		</div>
		
	</body>
</html>