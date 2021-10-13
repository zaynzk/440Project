<!--php file connecting location form with mysql-->
<?php
$address = filter_input(INPUT_POST, 'address');
$lodging = filter_input(INPUT_POST, 'lodging');
$volunteersiteleader = filter_input(INPUT_POST, 'volunteersiteleader');
$assignedstudentids = filter_input(INPUT_POST, 'assignedstudentids');

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
$sql = "INSERT INTO location (address, lodging, volunteersiteleader, assignedstudentids)
values ('$address','$lodging','$volunteersiteleader','$assignedstudentids')"; //Insert into location table
if ($conn->query($sql)){
echo "New location data successfully inserted."; //Success message displayed if information is added to table
}
$conn->close();
}

?>

<html>
<br><br>
<form method="get" action="location.php">
    <button type="submit">Return to Location Database</button> <!--Return button for ease of use-->
</form>
</html>