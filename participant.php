<!--HTML associated with location page-->
<?php include('include/config.php');	//Connection to database?>
<html>
<main>
	<head>
	<title>REACH Alternative Breaks</title>
	<link href="project.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--HEADER-->
	<?php include('templates/header.php');	//Header configuration?>
	
	<!--MENU-->
	<?php include('templates/menu.php');	//Menu configuration?>
	<?php
			$query = mysqli_query($sql, "SELECT * FROM participant"); //Establish sql query
			
			echo "<table>"; //Display retrieved information in a table
			echo "<tr><th>Student ID</th><th>Phone</th><th>E-mail</th><th>Name</th><th>Residence Hall</th><th>Emergency Contact Name</th><th>Emergency Contact Number</th></tr>";
			
			while($row = mysqli_fetch_assoc($query)) //Fetch from database
			{
			echo "<tr><td>";
			echo $row["studentid"];
			echo "</td><td>";
			echo $row["phone"];
			echo "</td><td>";
			echo $row["email"];
			echo "</td><td>";
			echo $row["name"];
			echo "</td><td>";
			echo $row["campusresidence"];
			echo "</td><td>";
			echo $row["ecname"];
			echo "</td><td>";
			echo $row["ecnumber"];
			echo "</td></tr>";
		}
		echo "</table>";
	?>
	<!--FORM-->
	        <form action="participantinsert.php" method="post">
			<br>
            Student ID: <input type="text" name="studentid">
            Phone: <input type="text" name="phone">
			E-mail: <input type="text" name="email">
			Name: <input type="text" name="name">
			Residence Hall: <input type="text" name="campusresidence">
			<br>
			Emergency Contact Name: <input type="text" name="ecname">
			Emergency Contact Number: <input type="text" name="ecnumber">
            <br><br>
            <input type="submit" value="Insert Into Database"> <!--Submit button-->
        </form>
	<!--FOOTER-->
	<?php include('templates/footer.php');	?>
	</body>
</main>
</html>