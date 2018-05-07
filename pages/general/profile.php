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
		<script type=text/javascript src="../../js/profile.js"></script>
	</head>
	<body>
		<div class="judul">
			<h1>E-Library</h1>
		</div>
		<div class="navBar">
			<p>You are login as <?php echo $_SESSION['user']->getUsername() ; ?></p>
			
			<ul>
				<li >
					<a href="../user/usr.php">
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
				<li id="active">
					<a href="">
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
				<li><a href="../user/book.php">Book List</a></li>
					<li><a href="">Borrowing History</a></li>
					<li><a href="">Download Journals</a></li>
				</ul>
			</div>
			<div class="midBar">
				<h1>Profile</h1>
				<div class="midContent">
			
					
					<div class="profileImg">
						<img src="../../img/profile.jpg" alt="">
						<button id="myBtn">UPDATE USER INFO</button>
						
					</div>
					<!-- BAGIAN STATUS UPDATE -->
					<?php
							if(isset($_GET['statusUpdate'])){
								if($_GET['statusUpdate']== 1){
									echo "<p id='statusUpdate' style='color:maroon;'>password and confirm password invalid!</p>";
								}else if($_GET['statusUpdate']== 2){
									echo "<p id='statusUpdate' style='color:maroon;'>please insert both password and confirm password</p>";
								}else if($_GET['statusUpdate']==3){
									echo "<p id='statusUpdate' style='color:mediumseagreen;'>profile Updated !</p>";
								}else if($_GET['statusUpdate']==4){
									echo "<p id='statusUpdate'style='color:mediumseagreen;'>profile Updated ! , Please use your new password for the next login</p>";

								}
							}

					?>
					<!-- /////////////////////////////////////\\\\\\\ -->
					<div id="myModal" class="modal">
						<!-- Modal content -->
						<div class="modal-content">
						<span class="close">&times;</span>
							<h3>Update User Info</h3>
							<form action="../../model/updateUser.php" method="post">
								<input type="password" name="password" id="" placeholder="Password"><br>
								<input type="password" name="confirm_Password" id="" placeholder="Confirm Password"><br>
								<input type="number" name="phone" id="" placeholder="Phone"><br>
								<input type="text" name="address" id="" placeholder="Address"><br>

								<input type="submit" name="submit" value="Update">
							</form>
						</div>
					</div>
				
				</div>

				<div class="midFooter">
					<p>&copy; 2018 Boundless-Learners,Hippow - eLibrary for Web Based Programming</p>
				</div>
			</div>
		</div>
		
	</body>
</html>