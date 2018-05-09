<?php
	include '../../model/userClass.php';
	include '../../model/db.php';
	session_start();

	$sql = "SELECT * FROM booklist ";
	
	if(isset($_POST['search'])){
		if($_POST['type']){
			$sql.= "WHERE $_POST[field] LIKE '%$_POST[type]%'";
		}
	}

	
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
					<li id="active"> 
						<a href="">	
							Book List 
						</a>
				
					</li>
					<li><a href="">Borrowing History</a></li>
					<li><a href="../general/journals.php">Download Journals</a></li>
				</ul>
			</div>
			<div class="midBar">
				<div class="midHeader">
					<h2>Book List</h2>
					<form action="book.php" method='post'>
						<input type="text" name="type" >
						<label for="">by</label>
						<select name="field" >
							<option value="title">Title</option>
							<option value="author">Author</option>
							<option value="publication_Year">Year</option>
							<option value="publisher">Publisher</option>
						</select>
						<input type="submit" name="search" value="Search">
					</form>
					
				</div>
				<div class="midContent">
					<table>
						<tr>
							<th>Code</th>
							<th>Title</th>
							<th>Author</th>
							<th>Publication Year</th>
							<th>Publisher</th>
							<th>Category</th>
						</tr>
						<?php
							$result = $mysqli->query($sql);
							if($result && $result->num_rows > 0){
								
								while($row = $result->fetch_array()){
									echo "<tr>";
									echo "<td> $row[code]</td>";
									echo "<td> $row[title]</td>";
									echo "<td> $row[author]</td>";
									echo "<td> $row[publication_Year]</td>";
									echo "<td> $row[publisher]</td>";
									echo "<td> $row[category_Name]</td>";
									echo "</tr>";									
								}
							}
						?>
					</table>
				
				</div>

				<div class="midFooter">
					<p>&copy; 2018 Boundless-Learners,Hippow - eLibrary for Web Based Programming</p>
				</div>
			</div>
		</div>
		
	</body>
</html>