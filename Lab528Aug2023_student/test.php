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
					<li><a class="stylelink" href="test.php"> Test &ensp;&ensp;</a></li>
					<?php
					session_start();
					if (isset($_SESSION['student_id'])) {
					?>
					<li><a class="stylelink" href="logout.php"> Logout &ensp;&ensp;</a></li>
					<?php
					}
				?>
					
					
				</ul>
			</div>
			
			
			
			<div class="main">
			<?php
				if (isset($_SESSION['user_name'])) {
					$user_name = $_SESSION['user_name'];
					$student_id = $_SESSION['student_id'];
					?>
					<h2 style="padding:1em">Welcome <?=$user_name;?></h2>
					
					<h3>You need to modify this page to commit the following tasks.</h3>
			<ul>
				<li>Extract a list of questions of corresponding subjects.</li> <br>
				<li>Allow a student to answer these questions.</li>
				<li>Create necessary tables to save studnets' scores according to the subjects.</li>
				<li>You can add more pages consequently, if they are necessary. </li>
			</ul>
	
					<?php
					}
				else{
						echo"<h3>Please login to take an online examination.</h3>";
				}
			?>
						
				
			</div>


			<div class="footer">
				<p>&copy; 2023 S1C3 Lab Work 5. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
