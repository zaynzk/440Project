<!--php file connecting participant form with mysql-->
<?php
$studentid = filter_input(INPUT_POST, 'studentid');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$name = filter_input(INPUT_POST, 'name');
$campusresidence = filter_input(INPUT_POST, 'campusresidence');
$ecname = filter_input(INPUT_POST, 'ecname');
$ecnumber = filter_input(INPUT_POST, 'ecnumber');

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
$sql = "INSERT INTO participant (studentid, phone, email, name, campusresidence, ecname, ecnumber)
values ('$studentid','$phone','$email','$name','$campusresidence','$ecname','$ecnumber')"; //Insert into participant table
if ($conn->query($sql)){
echo "New participant data successfully inserted.";  //Success message displayed if information is added to table
} 
$conn->close();
}

?>

<html>
<br><br>
<form method="get" action="participant.php">
    <button type="submit">Return to Participant Database</button> <!--Return button for ease of use-->
</form>
</html>