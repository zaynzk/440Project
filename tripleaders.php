<!--Tripleaders html file-->
<?php include('include/config.php'); //Database connection file	?>
<html>
<main>
	<head>
	<title>REACH Alternative Breaks</title>
	<link href="project.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--HEADER-->
	<?php include('templates/header.php');	//Header configuration file?>
	
	<!--MENU-->
	<?php include('templates/menu.php');	//menu configuration file?>
	<?php
			$query = mysqli_query($sql, "SELECT * FROM tripleader"); //Establish sql query
			
			echo "<table>"; //Displays retrieved information in a table
			echo "<tr><th>Tripleader Id</th><th>Phone</th><th>E-mail</th><th>Name</th><th>Residence Hall</th><th>Chosen Address</th><th>Emergency Contact Name</th><th>Emergency Contact Number</th><th>Learning Partner</th></tr>";
			
			while($row = mysqli_fetch_assoc($query)) //Fetch each item from database
			{
			echo "<tr><td>";
			echo $row["tripleaderid"];
			echo "</td><td>";
			echo $row["phone"];
			echo "</td><td>";
			echo $row["email"];
			echo "</td><td>";
			echo $row["name"];
			echo "</td><td>";
			echo $row["campusresidence"];
			echo "</td><td>";
			echo $row["chosenaddress"];
			echo "</td><td>";
			echo $row["ecname"];
			echo "</td><td>";
			echo $row["ecnumber"];
			echo "</td><td>";
			echo $row["learningpartner"];
			echo "</td></tr>";
		}
		echo "</table>";
	?>
	<!--FORM-->
	        <form action="tripleadersinsert.php" method="post">
			<br>
            Tripleader ID: <input type="text" name="tripleaderid">
            Phone: <input type="text" name="phone">
			E-mail: <input type="text" name="email">
			Name: <input type="text" name="name">
			Residence Hall: <input type="text" name="campusresidence">
			<br>
			Chosen Address: <input type="text" name="chosenaddress">
			Emergency Contact Name: <input type="text" name="ecname">
			Emergency Contact Number: <input type="text" name="ecnumber">
			Learning Partner: <input type="text" name="learningpartner">
            <br><br>
            <input type="submit" value="Insert Into Database"> <!--Submit button-->
        </form>
	<!--FOOTER-->
	<?php include('templates/footer.php');	?>
	</body>
</main>
</html>