<!--php file connecting drivers form with mysql-->
<?php
$drivername = filter_input(INPUT_POST, 'drivername');
$vehicleid = filter_input(INPUT_POST, 'vehicleid');

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
$sql = "INSERT INTO drivers (drivername, vehicleid)
values ('$drivername','$vehicleid')";//Insert into assignedto table
if ($conn->query($sql)){
echo "New location data successfully inserted.";//Success message displayed if information is added to table
}
$conn->close();
}

?>

<html>
<br><br>
<form method="get" action="drivers.php">
    <button type="submit">Return to Drivers Database</button><!--Return button for ease of use-->
</form>
</html>