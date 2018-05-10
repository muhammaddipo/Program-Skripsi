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
	</head>
	<body>
		<div class='judul'>
			<h1>E-Library</h1>
		</div>
		<div class='navBar'>
			<p>You are login as <?php echo $_SESSION['user']->getUsername();?></p>	
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
					if($_SESSION['user']->getRole() == 'user'){
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
					<?php
						if($_SESSION['user']->getRole() == 'user'){
					?>
							<li><a href='../user/book.php'>Book List</a></li>
							<li><a href='../user/borrow.php'>Borrowing History</a></li>
							<li id='active'><a href='journals.php'>Download Journals</a></li> 
					<?php
						}else{
					?>	
							<li><a href='../admin/books.php'>Book List</a></li>
							<li><a href='../admin/member.php'>Member List</a></li>
							<li><a href='../admin/admList.php'>Administrator List</a></li>
							<li id='active'><a href='journals.php'>Download Journals</a></li>
					<?php 
						}
					?>
				</ul>
			</div>
			<div class='midBar'>
				<div class='midHeader'>
					<h1>Welcome to eLibrary!</h1>
				</div>
				<div class='midContent'>
					<div class='journal'>
                        <a href='../../files/JOURNAL1.pdf' target='_blank'>
                            <h2>Journal 1</h2>
                            <h3>Writer 1</h3>
                            <p>
									The standard Lorem Ipsum passage, used since the 1500s
								"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
								magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            </p>
                        </a>   
                    </div>

					<div class='journal'>
                        <a href='../../files/JOURNAL2.pdf' target='_blank'>
                            <h2>Journal 2</h2>
                            <h3>Writer 2</h3>
                            <p>
								"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
								eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
								Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                            </p>
                        </a>   
                    </div>

					<div class='journal'>
                        <a href='../../files/JOURNAL3.pdf' target='_blank'>
                            <h2>Journal 3</h2>
                            <h3>Writer 3</h3>
                            <p>
								"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, 
								and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. 
								No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, 
								but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
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