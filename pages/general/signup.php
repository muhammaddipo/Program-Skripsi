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
		<link rel="stylesheet" href="../../style/signUpStyle.css">
		<script type="text/javascript" src="../../js/signUpScript.js"></script>
	</head>
	<body>
		<!-- CONTENT -->
		<?php
			if(isset($_GET['status_SignUp'])){
				if($_GET['status_SignUp']== 3){
					echo"
					<div id='myModal' class='modal'>
						<div class='modal-content'>
							<span class='close'>&times;</span>
							<p>You have successfully registered  as ".$_SESSION['user']->getName()." </p>
							<a href='../user/usr.php'>
								log In
							</a>
						</div>
					</div>";
				}
			}

		?>
		<div class="judul">
				<h1>Sign Up</h1>

		</div>
		<div class="quote1">
			<br><br>
			<q>READING IS DREAMING WITH OPEN EYES</q>
		</div>
		<br>
		<div class="form">
	
				<form action="../../model/signUpUser.php" method='post'>
					<label for="">Username</label><br>
					<input type="text" name="username" id="" required>
					<br>

					<label for="">Password</label><br>
					<input type="password" name="password" id="" required>
					<br>

					<label for="">Confirm Password</label><br>
					<input type="password" name="confirm_Password" id="" required>
					<br>

					<label for="">Email</label><br>
					<input type="text" name="email" id="" required>
					<br>

					<label for="">Name</label><br>
					<input type="text" name="name" id="" required>
					<br>

					<label for="">Phone</label><br>
					<input type="text" name="phone" id="" required>
					<br>
					<label for="">Address</label><br>
					<input type="text" name="address" id="" required>
					<br>
					<br>
					<input type="submit" name='submit'value="REGISTER">
					<a href="../../">CANCEL</a>
				</form>				
		
			
		</div>
		<!-- <button id="myBtn">my Button</button> -->
		<?php
		  /*
			di bawa dari sign up user 
			kalo 1 artinya password dengan confirm password tidak sama 
		  */
			if(isset($_GET['status_SignUp'])){
				if($_GET['status_SignUp'] == 1){
					echo " <br><br><h1 style='color : maroon;'> password not same ! </h1>";
				}else if($_GET['status_SignUp'] == 2){
					echo " <br><br><h1 style='color : maroon;'> username already used ! </h1>";
				}
			}

		?>
		
	</body>
</html>