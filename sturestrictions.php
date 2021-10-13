<!--HTML associated with restrictions page-->
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
			$query = mysqli_query($sql, "SELECT * FROM sturestrictions"); //Establish sql query
			
			echo "<table>"; //Display retrieved information in a table
			echo "<tr><th>Student ID</th><th>Restrictions</th></tr>";
			
			while($row = mysqli_fetch_assoc($query)) //Fetch from database
			{
			echo "<tr><td>";
			echo $row["studentid"];
			echo "</td><td>";
			echo $row["restrictions"];
			echo "</td></tr>";
		}
		echo "</table>";
	?>
		<!--FORM-->
	        <form action="restrictionsinsert.php" method="post">
			<br>
            Student ID: <input type="text" name="studentid">
            Restrictions: <input type="text" name="restrictions">
            <br><br>
            <input type="submit" value="Insert Into Database"> <!--Submit button-->
        </form>
	<!--FOOTER-->
	<?php include('templates/footer.php');	?>
	</body>
</main>
</html>