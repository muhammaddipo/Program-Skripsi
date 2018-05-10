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
		<script type=text/javascript src="../../js/profile.js"></script>
	</head>
	<body>
		<div class='judul'>
			<h1>E-Library</h1>
		</div>
		<div class='navBar'>
			<p>You are login as <?php echo $_SESSION['user']->getUsername() ; ?></p>
			<ul>
				<li>
					<?php
						if($_SESSION['user']->getRole() == 'user'){
					?>
							<a href='../user/usr.php'>
								<i class='fa fa-home'>

								</i>
							</a>
					<?php
						}else{
					?>
							<a href='../admin/adm.php'>
								<i class='fa fa-home'>

								</i>
							</a>
					<?php
						}
					?>
				</li>
				<li>
					<a href='../general/news.php'>
						<i class='fa fa-newspaper-o'>
						
						</i>
					</a>
				</li>
				<li>
					<?php
						if($_SESSION['user']->getRole()=='user'){
					?>
							<a href='mailto:someone@example.com?Subject=Hello%20again' target='_top'>
									<i class='fa fa-envelope'>
								
									</i>
							</a>
					<?php
						}else{
					?>
							<a href=''>
								<i class='fa fa-bell'>
								
								</i>
							</a>
					<?php
						}
					?>
				</li>
				<li id='active'>
					<a href='profile.php'>
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
					<?php
						if($_SESSION['user']->getRole()=='user'){
					?>
							<li><a href='../user/book.php'>Book List</a></li>
							<li><a href='../user/borrow.php'>Borrowing History</a></li>
							<li><a href='journals.php'>Download Journals</a></li>
					<?php
						}else{
					?>
							<li><a href='../admin/books.php'>Book List</a></li>
							<li><a href='../admin/member.php'>Member List</a></li>
							<li><a href='../admin/admList.php'>Administrator List</a></li>
							<li><a href='journals.php'>Download Journals</a></li>
					<?php
						}	
					?>
				</ul>
			</div>
			<div class='midBar'>
				<div class='midHeader'>
				<h1>Profile</h1>
			</div>
				<div class='midContent'>		
					<div class="profileImg">
						<img src='../../img/profile.jpg' alt=''>
						<button id='myBtn'>UPDATE USER INFO</button>			
					</div>
					<!-- BAGIAN STATUS UPDATE -->
					<?php
						if(isset($_GET['statusUpdate'])){
							if($_GET['statusUpdate']== 1){
					?>
								<p id='statusUpdate' style='color:maroon;'>password and confirm password invalid!</p>
					<?php
							}else if($_GET['statusUpdate']== 2){
					?>
								<p id='statusUpdate' style='color:maroon;'>please insert both password and confirm password !</p>
					<?php
							}else if($_GET['statusUpdate']==3){
					?>
								<p id='statusUpdate' style='color:forestgreen;'>profile Updated !</p>
					<?php
							}else if($_GET['statusUpdate']==4){
					?>
								<p id='statusUpdate'style='color:forestgreen;'>profile Updated ! , Please use your new password for the next login</p>
					<?php
							}
						}

					?>
					<!-- /////////////////////////////////////\\\\\\\ -->
					<div id='myModal' class='modal'>
						<!-- Modal content -->
						<div class='modal-content'>
							<span class='close'>&times;</span>
							<h3>Update User Info</h3>
							<form action='../../model/updateUser.php' method='post'>
								<input type='password' name='password' id='' placeholder='Password'><br>
								<input type='password' name='confirm_Password' id='' placeholder='Confirm Password'><br>
								<input type='number' name='phone' id='' placeholder='Phone'><br>
								<input type='text' name='address' id='' placeholder='Address'><br>
								<input type="submit" name="submit" value="Update">
							</form>
						</div>
					</div>	
				</div>

				<div class='midFooter'>
					<p>&copy; 2018 Boundless-Learners,Hippow - eLibrary for Web Based Programming</p>
				</div>
			</div>
		</div>
		
	</body>
</html>