<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Web Database System</title>
    <link rel="stylesheet" type="text/css" href="webstyle.css">
</head>
<body>
	<div class="bkdimage">
		<div class="centercontent">
			<div class="header">
				<h1>Welcome to 2023S1C3/1&3 Lab Work 5</h1>
			</div>

			<div class="navigation">
				<ul>
					<li><a class="stylelink" href="index.html"> Home &ensp;&ensp;</a></li> 
					<li><a class="stylelink" href="login.php"> Login &ensp;&ensp;</a></li>
					<li><a class="stylelink" href="signup.php">Sign Up &ensp;&ensp;</a></li>
					<li><a class="stylelink" href="check_student.php"> Students' List &ensp;&ensp;</a></li>
					<li><a class="stylelink" href="questioninfo.php"> Questions&ensp;&ensp;</a></li>
					<li><a class="stylelink" href="scoreinfo.php"> Scores&ensp;&ensp;</a></li>
					<li><a class="stylelink" href="Logout.php"> Logout&ensp;</a></li>
				</ul>
			</div>
			
			
			
			<div class="main">
			
			<?php
			// Start or resume the session
				session_start();
			// Access the session variable
				if (isset($_SESSION['admin'])) {
					$admin = $_SESSION['admin'];
					?>
					<h2 style="padding:1em; text-align: center">Welcome <?=$admin;?></h2>
					<?php
					}
				?>
			<h3>You need to modify this page to commit the following tasks.</h3>
			<ul>
				<li>Create necessary tables to save questions and subjects.</li>
				<li>Insert questions for their respective subjects into tables.</li>
				<li>Admin can add, edit, delete the questions and subjects.</li> <br>
				<li>You can add more pages consequently, if they are necessary. </li>
			</ul>
			</div>
			<div class="footer">
				<p>&copy; 2023 S1C3 Lab Work 5. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
