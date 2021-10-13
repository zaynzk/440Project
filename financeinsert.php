<!--php file connecting finances form with mysql-->
<?php
$studentid = filter_input(INPUT_POST, 'studentid');
$totalcostperid = filter_input(INPUT_POST, 'totalcostperid');
$food = filter_input(INPUT_POST, 'food');
$worksupplies = filter_input(INPUT_POST, 'worksupplies');
$tshirt = filter_input(INPUT_POST, 'tshirt');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "reach";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO finances (studentid, totalcostperid, food, worksupplies, tshirt)
values ('$studentid','$totalcostperid','$food','$worksupplies','$tshirt')"; //Insert into finances table
if ($conn->query($sql)){
echo "New financial data successfully inserted."; //Success message displayed if information is added to table
}
$conn->close();
}

?>

<html>
<br><br>
<form method="get" action="finances.php">
    <button type="submit">Return to Finances Database</button> <!--Return button for ease of use-->
</form>
</html>