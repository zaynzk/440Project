<!--php file connecting ID assignment form with mysql-->
<?php
$studentid = filter_input(INPUT_POST, 'studentid');
$tripleaderid = filter_input(INPUT_POST, 'tripleaderid');

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
$sql = "INSERT INTO assignesto (studentid, tripleaderid) 
values ('$studentid','$tripleaderid')";//Insert into assignedto table
if ($conn->query($sql)){
echo "New Assignment data successfully inserted."; //Success message displayed if information is added to table
}
$conn->close();
}

?>

<html>
<br><br>
<form method="get" action="assignedto.php">
    <button type="submit">Return to ID Assignment Database</button> <!--Return button for ease of use-->
</form>
</html>