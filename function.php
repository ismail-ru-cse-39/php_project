<?php

function showdetails($standerd, $rollno){

	include('dbcon.php');

	$sql = "SELECT * FROM `student` WHERE `rollno` = '$rollno' AND `standerd` = '$standerd'";
	$run = mysqli_query($con, $sql);

	if(mysqli_num_rows($run) > 0){
		$data = mysqli_fetch_assoc($run);

		?>

		<table border = "1" style="width:80%; margin-top:20px" align="center">

			<tr>
				<th colspan = "3">Student Details</th>
			</tr>

			<tr>
				<td rowspan = "5"><img src = "dataimg/<?php echo $data['image']; ?>" style="max-height:200px; max-width:170px; padding-left:30px;" /> </td>
				<th>Roll No</th>
				<td><?php echo $data['rollno']; ?> </td>
			</tr>

			<tr>
				<th>Name</th>
				<td><?php echo $data['name']; ?></td>
			</tr>

			<tr>
				<th>City</th>
				<td><?php echo $data['city']; ?></td>
			</tr>

			<tr>
				<th>Parent Contact</th>
				<td><?php echo $data['parent_contact']; ?></td>
			</tr>

			<tr>
				<th>Standard</th>
				<td><?php echo $data['standerd']; ?></td>
			</tr>


		</table>


		<?php
	}

	else{

		echo "<script>alert('No Data Found')</script>";
	}
}

?>