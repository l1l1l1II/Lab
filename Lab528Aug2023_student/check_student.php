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
					<h2 style="padding:1em">Welcome <?=$admin;?></h2>
					<?php
					}
				?>
			<div style="text-align:center;">
			<h2>Students' List</h2> 
			</div>
			<div>
			
			<table border=1 style="border-collapse: collapse; border-spacing: 0;">
                <col width="15%">
                <col width="30%">
                <col width="30%">
                <col width="20%">
                <col width="5%">

                <tr>
                    <th>ID</th>
					<th>F_Name</th> 
                    <th>L_Name</th>
                    <th>Gender</th>
                    <th>Dob</th>
					<th>Department</th>
                    <th>Grade</th>
					<th>Year</th>
                    <th>Mobile</th>
					<th>Email</th>
					<th>Edit</th>
                    <th>Del</th>
                </tr>
				<tr>
				
				<?php 
						//Procedure 4.9
							// Write php codes to show list of students.
                ?>

		
			</tr>
            </table>
			</div>
				
			</div>

			<div class="footer">
				<p>&copy; 2023 S1C3 Lab Work 5. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
