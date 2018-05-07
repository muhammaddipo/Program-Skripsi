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
					<a href="../user/usr.php">
						<i class="fa fa-home" >

						</i>
					</a>
				</li>
				<li id="active">
					<a href="news.php" >
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
					<li><a href="../user/book.php">Book List</a></li>
					<li><a href="">Borrowing History</a></li>
					<li><a href="">Download Journals</a></li>
				</ul>
			</div>
			<div class="midBar">
				<h1>Today's News</h1>
				<div class="midContent">
				<h2>Trump election: Priebus and Bannon given key roles</h2>
					<p>
						US President-elect Donald Trump has awarded key roles in his incoming team to a top Republican party official and a right-wing media chief.
						Reince Priebus, chairman of the Republican National Committee (RNC), will be his chief of staff.
						In this role, he will set the tone for the new White House and act as a conduit to Congress and the government.
						Stephen Bannon, from the Breitbart News Network, will serve as Mr Trump's chief strategist.
						Mr Bannon stepped aside as executive chairman of Breitbart - a combative conservative site with an
						anti-establishment agenda - to act as Mr Trump's campaign chief.
						Meanwhile, in the president-elect's first interview, with US broadcaster CBS, Mr Trump said:
						<ul>
							<li>He would deport or jail up to three million illegal migrants with criminal links</li>
							<li>Future Supreme Court nominees would be "pro-life" - meaning they oppose abortion - and defend the 
							constitutional right to bear arms</li>
							<li>He will not seek to overturn the legalisation of same-sex marriage</li>
							<li>He will forgo the president's $400,000 salary, taking $1 a year instead</li>
							</ul>
					</p>
					<p>
						In a statement released by his campaign, Mr Trump described Mr Priebus and Mr Bannon as "highly qualified 
						leaders who worked well together on our campaign and led us to a historic victory".
						Mr Priebus, 44, acted as a bridge between Mr Trump and the Republican party establishment during the campaign. 
						He is close to House Speaker Paul Ryan, a fellow Wisconsinite who could be instrumental in steering the new 
						administration's legislative agenda.
					</p>
				
				</div>

				<div class="midFooter">
					<p>&copy; 2018 Boundless-Learners,Hippow - eLibrary for Web Based Programming</p>
				</div>
			</div>
		</div>
		
	</body>
</html>