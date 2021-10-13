<!--php file connecting travel form with mysql-->
<?php
$vehicleid = filter_input(INPUT_POST, 'vehicleid');
$distance = filter_input(INPUT_POST, 'distance');
$numberofseats = filter_input(INPUT_POST, 'numberofseats');
$fuel = filter_input(INPUT_POST, 'fuel');
$address = filter_input(INPUT_POST, 'address');

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
$sql = "INSERT INTO travel (vehicleid, distance, numberofseats, fuel, address)
values ('$vehicleid','$distance','$numberofseats','$fuel','$address')"; //Insert into travel table
if ($conn->query($sql)){
echo "New location data successfully inserted."; //Success message displayed if information is added to table
}
$conn->close();
}

?>

<html>
<br><br>
<form method="get" action="travel.php">
    <button type="submit">Return to Travel Database</button> <!--Return button for ease of use-->
</form>
</html>