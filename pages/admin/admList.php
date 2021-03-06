<?php
	include '../../model/userClass.php';
	include '../../model/db.php';
	session_start();
	// query untuk memunculkan kumpulin list of admin 
	$sql = "SELECT * FROM anggota WHERE role='admin' ";
	
	// jika button search ditriggered , maka sql akan ditambahkan dengan syarat tambahan untuk mencari sesuai 
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
			<p>You are login as <?php echo $_SESSION['user']->getUsername();?></p>
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
					<li><a href='member.php'>Member List</a></li>
					<li id='active'><a href='admList.php'>Administrator List</a></li>
					<li><a href='../general/journals.php'>Download Journals</a></li>
				</ul>
			</div>
			<div class='midBar'>
				<div class='midHeader'>
					<h2>Administrator List</h2>
					<form action='admList.php' method='post'>
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
					<button id='myBtn'>ADD ADMIN</button>	
				</div>

				<div class='midContent'>
					<!-- pop up messages when books added FROM addbook.php -->
					<?php
						if(isset($_GET['status_Add'])){		
						if($_GET['status_Add'] == 2){
					?>
							 	<p style='color:red'> Username not available,please try again </p>
					<?php								
							}
						}
					?>
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
									echo "<tr>
											<td> $row[id_Anggota]</td>
											<td> $row[name]</td>
											<td> $row[phone]</td>
											<td> $row[address]</td>
										  </tr>";									
								}
							}
						?>
					</table>
				</div>

				<div id='myModal' class='modal'>
						<!-- Modal content -->
						<div class='modal-content'>
						<span class='close'>&times;</span>
							<h3>New Administrator</h3>
							<form action='../../model/addAdmin.php' method='post'>
								<input type='text' name='username' id='' placeholder='Username' required><br>	
								<input type='password' name='password' id='' placeholder='Password' required><br>							
								<input type='text' name='name' id='' placeholder='Name' required><br>
								<input type='text' name='email' id='' placeholder='Email' required><br>
								<input type='number' name='phone' id='' placeholder='Phone Number' required><br>
								<input type='text' name='address' id='' placeholder='Address' required><br>							
								<br>
								<input type="submit" name="add" value="Register">
							</form>
						</div>
					</div>
				<div class="midFooter">
					<p>&copy; 2018 Boundless-Learners,Hippow - eLibrary for Web Based Programming</p>
				</div>
			</div>
		</div>	
	</body>
</html>