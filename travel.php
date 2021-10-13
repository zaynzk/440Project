<!--HTML associated with travel page-->
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
			$query = mysqli_query($sql, "SELECT * FROM travel"); //Establish sql query
			
			echo "<table>"; //Display retrieved information in a table
			echo "<tr><th>Vehicle ID</th><th>Distance</th><th>Number Seats</th><th>Fuel</th><th>Address</th></tr>";
			
			while($row = mysqli_fetch_assoc($query)) //Fetch from database
			{
			echo "<tr><td>";
			echo $row["vehicleid"];
			echo "</td><td>";
			echo $row["distance"];
			echo "</td><td>";
			echo $row["numberofseats"];
			echo "</td><td>";
			echo $row["fuel"];
			echo "</td><td>";
			echo $row["address"];
			echo "</td></tr>";
		}
		echo "</table>";
	?>
	<!--FORM-->
	        <form action="travelinsert.php" method="post">
			<br>
            Vehicle ID: <input type="text" name="vehicleid">
            Distance: <input type="text" name="distance">
			Number of Seats: <input type="text" name="numberofseats">
			Fuel: <input type="text" name="fuel">
			Address: <input type="text" name="address">
            <br><br>
            <input type="submit" value="Insert Into Database"> <!--Submit button-->
        </form>
	<!--FOOTER-->
	<?php include('templates/footer.php');	?>
	</body>
</main>
</html>