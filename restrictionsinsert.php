<!--php file connecting restrictions form with mysql-->
<?php
$studentid = filter_input(INPUT_POST, 'studentid');
$restrictions = filter_input(INPUT_POST, 'restrictions');

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
$sql = "INSERT INTO sturestrictions (studentid, restrictions)
values ('$studentid','$restrictions')"; //Insert into restrictions table
if ($conn->query($sql)){
echo "New restriction data successfully inserted."; //Success message displayed if information is added to table
}
$conn->close();
}

?>

<html>
<br><br>
<form method="get" action="sturestrictions.php">
    <button type="submit">Return to Student Restrictions Database</button> <!--Return button for ease of use-->
</form>
</html>