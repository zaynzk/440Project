<!--HTML associated with ID assignment page-->
<?php include('include/config.php');	//Database Connection?>
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
	<?php include('templates/menu.php');	//menu configuration?>
	<?php
			$query = mysqli_query($sql, "SELECT * FROM assignesto"); //Establish sql query
			
			echo "<table>"; //Display retrieved info in a table
			echo "<tr><th>Student ID</th><th>Tripleader ID</th></tr>";
			
			while($row = mysqli_fetch_assoc($query)) //Fetch from database
			{
			echo "<tr><td>";
			echo $row["studentid"];
			echo "</td><td>";
			echo $row["tripleaderid"];
			echo "</td></tr>";
		}
		echo "</table>";
	?>
		<!--FORM-->
	        <form action="assignedtoinsert.php" method="post">
			<br>
            Student ID: <input type="text" name="studentid">
            Trip Leader ID: <input type="text" name="tripleaderid">
            <br><br>
            <input type="submit" value="Insert Into Database"> <!--Submit button-->
        </form>
	<!--FOOTER-->
	<?php include('templates/footer.php');	?>
	</body>
</main>
</html>