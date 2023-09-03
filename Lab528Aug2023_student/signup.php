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
					<li><a class="stylelink" href="test.php"> Test &ensp;&ensp;</a></li>
				</ul>
			</div>
			
			<div class="main">

			<div id="div_content" class="form">
			<form action="processsignup.php" method="post">
				<table class="profile">
				<tr><td>
					<h2>User Profile</h2>			
					<label>Student ID:</label>
					<input type="text" name="student_id">	
					
					<label>First name</label>
					<input type="text" name="firstname"> 
						
					<label>Last name</label>
					<input type="text" name="lastname"> 

					<label>Gender</label>
					<?php
						$q='select gender_id, gender_name from gender;';
						if($result=$mysqli->query($q)){
							while($row=$result->fetch_array()){
								echo '<input type="radio" name="gender" value="'.$row[0].'">'.$row[1];
							}
						}else{
							echo 'Query error: '.$mysqli->error;
						}
					?>
					<br>
					
					<label>Date of birth</label>
					<input type="date" name="dob"> 
					
					
					
					
					<h2> Account Profile</h2>
					<label>Username</label>
					<input type="text" name="username"> 
					
					<label>Password</label>
					<input type="password" name="passwd"> 
					
					<label>Confirmed password</label>
					<input type="password" name="cpasswd">
					
				</td>	
				
				<td class="information">
					<h2> University Information</h2>
					<div class='uniInfo'>
					<label>Department</label>
					<select name="department">
						<option value="Computer">Computer</option>
						<option value="Mechatronic">Mechatronic</option>
						<option value="Electrical">Electrical</option>
						<label>Department</label>
					<?php
					$departmentQuery = "SELECT department_name FROM department";
					if ($result = $mysqli->query($departmentQuery)) {
						while ($row = $result->fetch_assoc()) {
							echo '<option value="' . $row['department_name'] . '">' . $row['department_name'] . '</option>';
						}
						$result->free();
					} else {
						echo 'Query error: ' . $mysqli->error;
					}
					?>
					</select>	
						
					<label>Grade</label>
						<select name="grade">
							<option value="1">First</option>
							<option value="2">Second</option>
							<option value="3">Third</option>
							<option value="4">Forth</option>
							<option value="5">Fifth</option>
							<label>Grade</label>
					<?php
					$gradeQuery = "SELECT grade_name FROM grade";
					if ($result = $mysqli->query($gradeQuery)) {
						while ($row = $result->fetch_assoc()) {
							echo '<option value="' . $row['grade_name'] . '">' . $row['grade_name'] . '</option>';
						}
						$result->free();
					} else {
						echo 'Query error: ' . $mysqli->error;
					}
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
					<input type="text" name="mobile"> 
					
					<label>Email</label>
					<input type="text" name="email"> 
					
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
