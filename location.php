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
	<?php include('templates/header.php');//Header condiguration	?>
	
	<!--MENU-->
	<?php include('templates/menu.php');//Menu configuration	?>
	<?php
			$query = mysqli_query($sql, "SELECT * FROM location"); //Establish sql query
			
			echo "<table>";//Display retrieved information in a table
			echo "<tr><th>Address</th><th>Lodging</th><th>Site Leader</th><th>Assigned IDs</th><tr>";
			
			while($row = mysqli_fetch_assoc($query))//Fetch from database
			{
			echo "<tr><td>";
			echo $row["address"];
			echo "</td><td>";
			echo $row["lodging"];
			echo "</td><td>";
			echo $row["volunteersiteleader"];
			echo "</td><td>";
			echo $row["assignedstudentids"];
			echo "</td></tr>";
		}
		echo "</table>";
	?>
			<!--FORM-->
	        <form action="locationinsert.php" method="post">
			<br>
            Address: <input type="text" name="address">
            lodging: <input type="text" name="lodging">
			Site Leader: <input type="text" name="volunteersiteleader">
			Assigned IDs: <input type="text" name="assignedstudentids">
            <br><br>
            <input type="submit" value="Insert Into Database"> <!--Submit button-->
        </form>
	<!--FOOTER-->
	<?php include('templates/footer.php');	?>
	</body>
</main>
</html>