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
		<link rel="stylesheet" href="../../style/signUpStyle1.css">
		<script type="text/javascript" src="../../js/signUpScript.js"></script>
		<style>
			@font-face {
    		font-family: fonts;
    		src: url(../fonts/CollegiateInsideFLF.ttf);
		}
		</style>
	</head>
	<body>
		<!-- CONTENT -->
		<?php
			if(isset($_GET['status_SignUp'])){
				if($_GET['status_SignUp']== 3){
		?>
					
					<div id='myModal' class='modal'>
						<div class='modal-content'>
							<span class='close'>&times;</span>
							<p>You have successfully registered  as <?php echo $_SESSION['user']->getName();?> </p>
							<a href='../user/usr.php'>
								log In
							</a>
						</div>
					</div>
		<?php
				}
			}

		?>
		<div class='judul'>
			<h1>Sign Up</h1>
		</div>
		<div class='quote1'>
			<br><br>
			<q>READING IS DREAMING WITH OPEN EYES</q>
		<?php
		  /*
			di bawa dari sign up user melalui GET
			kalo 1 artinya password dengan confirm password tidak sama 
		  */
			if(isset($_GET['status_SignUp'])){
				if($_GET['status_SignUp'] == 1){
		?>
					<br><br>
					<h1 style='color : white; font-family: fonts;
					text-shadow:-3px -3px 2px rgb(27, 15, 15);background:rgba(255, 0, 0, 0.5);
					padding: 1px; border:1px solid transparent; box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
					border-radius: 10px;'> password not match !</h1>
		<?php
				}else if($_GET['status_SignUp'] == 2){
		?>
					<br><br>
					<h1 style='color : white; font-family: fonts;
					text-shadow:-3px -3px 2px rgb(27, 15, 15);background:rgba(255, 0, 0, 0.5);
					padding: 1px; border:1px solid transparent; box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
					border-radius: 10px;'> username already used !
					</h1>
		<?php
				}
			}
		?>
		</div>

		<br>

		<div class='form'>
			<form action='../../model/signUpUser.php' method='post'>
				<label for=''>Username</label><br>
				<input type='text' name='username' id='' required>
				<br>

				<label for=''>Password</label><br>
				<input type='password' name='password' id='' required>
				<br>

				<label for=''>Confirm Password</label><br>
				<input type='password' name='confirm_Password' id='' required>
				<br>

				<label for=''>Email</label><br>
				<input type='text' name='email' id='' required>
				<br>

				<label for=''>Name</label><br>
				<input type='text' name='name' id='' required>
				<br>

				<label for=''>Phone</label><br>
				<input type='text' name='phone' id='' required>
				<br>
				<label for=''>Address</label><br>
				<input type='text' name='address' id='' required>
				<br>
				<br>
				<input type='submit' name='submit'value='REGISTER'>
				<a href='../../'>CANCEL</a>
			</form>						
		</div>
		
	</body>
</html>