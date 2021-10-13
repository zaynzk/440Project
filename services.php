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
	<?php include('templates/menu.php');	//menu configuration?>
	<?php
			$query = mysqli_query($sql, "SELECT * FROM services"); //Establish query
			
			echo "<table>";//Display retrieved information in a table
			echo "<tr><th>Address</th><th>Services To-Be-Performed</th></tr>";
			
			while($row = mysqli_fetch_assoc($query)) //Fetch from database
			{
			echo "<tr><td>";
			echo $row["address"];
			echo "</td><td>";
			echo $row["servicestobeperformed"];
			echo "</td></tr>";
		}
		echo "</table>";
	?>
	<!--FORM-->
	    <form action="servicesinsert.php" method="post">
		<br>
			Address: <input type="text" name="address">
            Services: <input type="text" name="servicestobeperformed">
            <br><br>
            <input type="submit" value="Insert Into Database"> <!--Submit button-->
        </form>
	<!--FOOTER-->
	<?php include('templates/footer.php');	?>
	</body>
</main>
</html>