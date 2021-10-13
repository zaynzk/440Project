<!--php file connecting services form with mysql-->
<?php
$address = filter_input(INPUT_POST, 'address');
$servicestobeperformed = filter_input(INPUT_POST, 'servicestobeperformed');

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
$sql = "INSERT INTO services (address, servicestobeperformed)
values ('$address','$servicestobeperformed')"; //Insert into services table
if ($conn->query($sql)){
echo "New service data successfully inserted."; //Success message displayed if information is added to table
}
$conn->close();
}

?>

<html>
<br><br>
<form method="get" action="services.php">
    <button type="submit">Return to Services Database</button> <!--Return button for ease of use-->
</form>
</html>