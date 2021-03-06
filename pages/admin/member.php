<?php
	include '../../model/userClass.php';
	include '../../model/db.php';
	session_start();

	$sql = "SELECT * FROM anggota WHERE role='user' ";
	
	if(isset($_POST['search'])){
		if($_POST['type']){
			$sql.= "AND $_POST[field] LIKE '%$_POST[type]%'";
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
			<p>You are login as <?php echo $_SESSION['user']->getUsername() ; ?></p>
			<ul>
				<li>
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
					<li id='active'><a href='member.php'>Member List</a></li>
					<li><a href='admList.php'>Administrator List</a></li>
					<li><a href='../general/journals.php'>Download Journals</a></li>
				</ul>
			</div>
			<div class='midBar'>
				<div class='midHeader'>
					<h2>Member List</h2>
					<form action='member.php' method='post'>
						<input type='text' name='type' >
						<label for=''>by</label>
						<select name='field'>
							<option value='id_Anggota'>ID</option>
							<option value='name'>Name</option>
							<option value='phone'>Phone</option>
							<option value='address'>Address</option>
						</select>
						<input type='submit' name='search' value='Search'>
					</form>
				</div>

				<div class="midContent">
					<table>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Address</th>
						</tr>
						<?php
							$result = $mysqli->query($sql);
							if($result && $result->num_rows > 0){
								while($row = $result->fetch_array()){
									echo "<tr>";
									echo "<td> $row[id_Anggota]</td>";
									echo "<td> $row[name]</td>";
									echo "<td> $row[phone]</td>";
									echo "<td> $row[address]</td>";
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