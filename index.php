<!DOCTYPE HTML>
<html lang = "en_US">
<head>

	<meta charset = "UTF-8">
	<title>Student Management System</title>
</head>
<body>

	<h1 align = "center">Welcome to Student Management System</h1>
	<h3 align = "right" style = "margin-right:20px;"><a href = "login.php">Admin Login</a></h3>

	<form method = "post" action = "index.php">
	<table style = "width : 50%;"  align = "center" border = "1">

		<tr>
			<td colspan = "2" align = "center">Student Information</td>

		</tr>

		<tr>
			<td align = "right">Choose Standard</td>

			<td>
				<select name = "std">
					<option values = "1">1st</option>
					<option values = "2">2nd</option>
					<option values = "3">3rd</option>
					<option values = "4">4rth</option>
					<option values = "5">5th</option>
					<option values = "6">6th</option>

				</select>
			</td>
		</tr>

		<tr>

			<td align = "right">Enter Rollno</td>

			<td>
				 <input type = "text" name = "rollno" required>
			</td>
		</tr>	

		<tr>

			<td colspan = "2" align = "center"><input type = "submit" name = "submit" value = "Show Info"></td>
		</tr>	
	</table>

</form>

</body>

</html>

<?php

	

	if(isset($_POST['submit'])){

		$standerd = $_POST['std'];
		$rollno = $_POST['rollno'];

		//echo $standerd;
		//echo $rollno;

		include('dbcon.php');
		include('function.php');

		showdetails($standerd, $rollno);
	}

?>