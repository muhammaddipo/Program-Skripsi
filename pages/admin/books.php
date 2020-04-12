<?php
	include '../../model/userClass.php';
	include '../../model/libraries.php';

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
		<link rel="stylesheet" href="../../style/usrStyle1.css">
		<script type=text/javascript src="../../js/booksScript.js"></script>		
	</head>
	<body>
		<div class='judul'>
			<h1>E-Library</h1>
		</div>
		<div class='navBar'>
			<p>You are login as <?php echo $_SESSION['user']->getUsername();?></p>
			<ul>
				<li>
					<a href="adm.php">
						<i class="fa fa-home">

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
					<li id='active'><a href='books.php'>Book List</a></li>
					<li><a href='member.php'>Member List</a></li>
					<li><a href='admList.php'>Administrator List</a></li>
					<li><a href='../general/journals.php'>Download Journals</a></li>
				</ul>
			</div>
			<div class='midBar'>
				<div class='midHeader'>
					<h2>Book List</h2>
					<form action='books.php' method='post'>
						<input type='text' name='type' >
						<label for=''>by</label>
						<select name="field">
							<option value='title'>Title</option>
							<option value='author'>Author</option>
							<option value='publication_Year'>Year</option>
							<option value='publisher'>Publisher</option>
						</select>
						<input type='submit' name='search' value='SEARCH'>
					</form>
					<button id='myBtn'>ADD BOOK</button>
				</div>
				<div class="midContent">
					<!-- pop up messages when books added FROM addbook.php -->
					<?php
						if(isset($_GET['status_Add'])){
							if($_GET['status_Add'] == 1){
					?>
								<p style='color:mediumseagreen;background-color:green;width:10vw;text-align:center'> Books Added</p>
					<?php
							}
						}

					?>
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
									echo "<tr>
											<td> $row[code]</td>
											<td> $row[title]</td>
											<td> $row[author]</td>
											<td> $row[publication_Year]</td>
											<td> $row[publisher]</td>
											<td> $row[category_Name]</td>
										</tr>";									
								}
							}
						?>
					</table>
				</div>

				<div id="myModal" class="modal">
						<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<h3>Book Data</h3>
						<form action="../../model/addBook.php" method='post'>
							<input type='text' name='code' id='' placeholder='Code'><br>								
							<input type='text' name='title' id='' placeholder='Title'><br>
							<input type='text' name='author' id='' placeholder='Author'><br>
							<input type='text' name='publication_Year' id="" placeholder="Publication Year"><br>
							<input type='text' name='publisher' id='' placeholder='Publisher'><br>
							<select name='theme'>
								<?php
									$allCategory ="SELECT * FROM category";
									$resultC = $mysqli->query($allCategory);
									if($resultC && $resultC->num_rows > 0){
										while($baris = $resultC->fetch_array()){
											echo "<option value='$baris[category_Name]'> $baris[category_Name] </option>";
										}
									}
								?>		
							<br>
							<input type="submit" name="add" value="ADD">
						</form>
					</div>
				</div>

				<div class='midFooter'>
					<p>&copy; 2018 Boundless-Learners,Hippow - eLibrary for Web Based Programming</p>
				</div>
			</div>
		</div>
		
	</body>
</html>