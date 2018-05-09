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
					<?php
						if($_SESSION['user']->getRole() == 'user'){
										echo "	<a href='../user/usr.php'>
										<i class='fa fa-home' >
										</i>
									</a>";
								}else{
									echo "	<a href='../admin/adm.php'>
										<i class='fa fa-home' >
										</i>
									</a>";
								}
					?>
				</li>
				<li>
					<a href="../general/news.php">
						<i class="fa fa-newspaper-o">
						
						</i>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-bell">
						
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
					<!-- <li><a href="book.php">Book List</a></li>
					<li><a href="">Member List</a></li>
					<li><a href="">Administrator List</a></li>
					<li id="active"><a href="journals.php">Download Journals</a></li> -->
					<?php
						if($_SESSION['user']->getRole() == 'user'){
							echo "<li><a href='../user/book.php'>Book List</a></li>
							<li><a href='../user/borrow.php'>Borrowing History</a></li>
							<li id='active'><a href='journals.php'>Download Journals</a></li> ";
						}else{
							echo "<li><a href='../admin/books.php'>Book List</a></li>
							<li><a href=''>Member List</a></li>
							<li><a href=''>Administrator List</a></li>
							<li id='active'><a href='journals.php'>Download Journals</a></li> ";
						}

					?>
				</ul>
			</div>
			<div class="midBar">
				<div class="midHeader">
					<h1>Welcome to eLibrary!</h1>

				</div>
				<div class="midContent">
					<div class="journal" >
                        <a href="../../files/JOURNAL1.pdf" target='_blank'>
                            <h2>Journal 1</h2>
                            <h3>Writer 1</h3>
                            <p>
                                eLibrary is a simple library web where people can download journals for free and search the books they need. 
                                Let's give the best service to our members. Like all the members, you can download journals and see what's on today's news. 
                                if there is new administrators, please help them to register(administrators can't do self-register), 
                                Don't forget to  check our e-mail (click the bell icon) to help our members.
                            </p>
                        </a>   
                    </div>
					<div class="journal" >
                        <a href="../../files/JOURNAL2.pdf" target='_blank'>
                            <h2>Journal 2</h2>
                            <h3>Writer 2</h3>
                            <p>
                                eLibrary is a simple library web where people can download journals for free and search the books they need. 
                                Let's give the best service to our members. Like all the members, you can download journals and see what's on today's news. 
                                if there is new administrators, please help them to register(administrators can't do self-register), 
                                Don't forget to  check our e-mail (click the bell icon) to help our members.
                            </p>
                        </a>   
                    </div>
					<div class="journal" >
                        <a href="../../files/JOURNAL3.pdf" target='_blank'>
                            <h2>Journal 3</h2>
                            <h3>Writer 3</h3>
                            <p>
                                eLibrary is a simple library web where people can download journals for free and search the books they need. 
                                Let's give the best service to our members. Like all the members, you can download journals and see what's on today's news. 
                                if there is new administrators, please help them to register(administrators can't do self-register), 
                                Don't forget to  check our e-mail (click the bell icon) to help our members.
                            </p>
                        </a>   
                    </div>
					
				</div>

				<div class="midFooter">
					
					<p>&copy; 2018 Boundless-Learners,Hippow - eLibrary for Web Based Programming</p>
				</div>
			</div>
		</div>
		
	</body>
</html>