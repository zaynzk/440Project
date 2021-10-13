<!--HTML associated with drivers page-->
<?php include('include/config.php');	//Connection to database?>
<html>
<main>
	<head>
	<title>REACH Alternative Breaks</title>
	<link href="project.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--HEADER-->
	<?php include('templates/header.php'); //header configuration	?>
	
	<!--MENU-->
	<?php include('templates/menu.php');	//menu configuration?>
	<?php
			$query = mysqli_query($sql, "SELECT * FROM drivers"); //establish query
			
			echo "<table>"; //display retrieved information in a table
			echo "<tr><th>Driver Name</th><th>Vehicle ID</th></tr>";
			
			while($row = mysqli_fetch_assoc($query)) //fetch from database
			{
			echo "<tr><td>";
			echo $row["drivername"];
			echo "</td><td>";
			echo $row["vehicleid"];
			echo "</td></tr>";
		}
		echo "</table>";
	?>
		<!--FORM-->
	        <form action="driversinsert.php" method="post">
			<br>
            Driver Name: <input type="text" name="drivername">
            Vehicle ID: <input type="text" name="vehicleid">
            <br><br>
            <input type="submit" value="Insert Into Database"> <!--Submit button-->
        </form>
	<!--FOOTER-->
	<?php include('templates/footer.php');	?>
	</body>
</main>
</html>