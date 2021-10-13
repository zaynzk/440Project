<!--HTML associated with ID finances page-->
<?php include('include/config.php');	?>
<html>
<main>
	<head>
	<title>REACH Alternative Breaks</title>
	<link href="project.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--HEADER-->
	<?php include('templates/header.php');//Header configuration	?>
	
	<!--MENU-->
	<?php include('templates/menu.php');//Menu configuration	?>
	<?php
			$query = mysqli_query($sql, "SELECT * FROM finances"); //Establish sql query
			
			echo "<table>"; //Display retrieved information in a table
			echo "<tr><th>Student ID</th><th>Total Cost</th><th>Food</th><th>Supplies</th><th>T-shirt</th><tr>";
			
			while($row = mysqli_fetch_assoc($query)) //Fetch from database
			{
			echo "<tr><td>";
			echo $row["studentid"];
			echo "</td><td>";
			echo $row["totalcostperid"];
			echo "</td><td>";
			echo $row["food"];
			echo "</td><td>";
			echo $row["worksupplies"];
			echo "</td><td>";
			echo $row["tshirt"];
			echo "</td></tr>";
		}
		echo "</table>";
	?>
		<!--FORM-->
	        <form action="financeinsert.php" method="post">
			<br>
            Student ID: <input type="text" name="studentid">
            Total Cost: <input type="text" name="totalcostperid">
			Food: <input type="text" name="food">
			Supplies: <input type="text" name="worksupplies">
			T-shirt: <input type="text" name="tshirt">
            <br><br>
            <input type="submit" value="Insert Into Database"> <!--Submit button-->
        </form>
	<!--FOOTER-->
	<?php include('templates/footer.php');	?>
	</body>
</main>
</html>