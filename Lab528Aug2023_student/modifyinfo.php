<!DOCTYPE html>
<html>
<head>
    <title>Web Database System</title>
    <link rel="stylesheet" type="text/css" href="webstyle.css">
</head>
<body>
	<?php require_once('connect.php'); ?>
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
					<li><a class="stylelink" href="#"> Questions&ensp;&ensp;</a></li>
					<li><a class="stylelink" href="#"> Scores&ensp;&ensp;</a></li>
					<li><a class="stylelink" href="Logout.php"> Logout&ensp;</a></li>
				</ul>
			</div>
			
			<div class="main">

			<div id="div_content" class="form">
			<form action="updateinfo.php" method="post">
			<?php 
				// Procedure 10
					//get student information to be updated
				?>
				 
				 
				<table class="profile">
				<tr><td>
					<h2>User Profile</h2>			
					<label>Student ID:</label>
					<!--assign student information into corresponding field-->
					<input type="text" name="student_id" value="" readonly>	
					
					<label>First name</label>
					<input type="text" name="firstname" value=""> 
						
					<label>Last name</label>
					<input type="text" name="lastname" value=""> 

					<label>Gender</label>
					<?php
						//show gender option
					?>
					<br>
					
					<label>Date of birth</label>
					<input type="date" name="dob"> 
					
					
				</td>	
				
				<td class="information">
					<h2> University Information</h2>
					<div class='uniInfo'>
					<label>Department</label>
					<select name="department">
						<?php
								//same as Procedure 4.6.1
								
						?>
					</select>	
						
					<label>Grade</label>
						<select name="grade">
							<?php
								//same as Procedure 4.6.2
								
						?>
						</select>
					
					<label>Year</label>
						<select name="year">
							<option value="2023">2023</option>
							<option value="2022">2022</option>
							<option value="2021">2021</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
						</select>
						
					<h2> Contact Information</h2>
					<label>Mobile number</label>
					<input type="text" name="mobile" value=<?=$mobile;?>> 
					
					<label>Email</label>
					<input type="text" name="email" value=<?=$email;?>> 
					
					</div>
					</div>
					<!-- 
					
					-->
					 </td></tr>
					 </table>
					<div class="center">
						<input type="submit" name="sub" value="Submit">			
					</div>
				</form>
		</div> <!-- end div_content -->
			</div>

			<div class="footer">
				<p>&copy; 2023 S1C3 Lab Work 5. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
