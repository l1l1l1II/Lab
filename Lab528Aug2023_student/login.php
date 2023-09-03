<?php
// Start or resume the session
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();
?>

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
				</ul>
			</div>
			
			<div class="main">
			<div style="text-align: center; padding: 100px;">
			<h2> Login Here </h2>
				 <form action="processlogin.php" method="post">
					<label>Student ID:</label>
					<input type="text" name="student_id"> <br>

					<label>Password:</label>
					<input style="margin: 2px 2px 10px 28px;" type="password" name="password"> <br>

					<input type="submit" value="Submit" name="sub">
					<h4> Don't have an account? <a class="unstyled" href="signup.php">Sign Up</a> &ensp;here.</h4>
				</form>
			</div>
			</div>


			<div class="footer">
				<p>&copy; 2023 S1C3 Lab Work 5. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
