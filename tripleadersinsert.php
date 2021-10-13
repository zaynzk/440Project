<!--php file connecting tripleader form with mysql-->
<?php
$tripleaderid = filter_input(INPUT_POST, 'tripleaderid');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$name = filter_input(INPUT_POST, 'name');
$campusresidence = filter_input(INPUT_POST, 'campusresidence');
$chosenaddress = filter_input(INPUT_POST, 'chosenaddress');
$ecname = filter_input(INPUT_POST, 'ecname');
$ecnumber = filter_input(INPUT_POST, 'ecnumber');
$learningpartner = filter_input(INPUT_POST, 'learningpartner');

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
$sql = "INSERT INTO tripleader (tripleaderid, phone, email, name, campusresidence, chosenaddress, ecname, ecnumber, learningpartner)
values ('$tripleaderid','$phone','$email','$name','$campusresidence','$chosenaddress','$ecname','$ecnumber','$learningpartner')"; //Insert into tripleader table
if ($conn->query($sql)){
echo "New trip leader data successfully inserted."; //Success message displayed if information is added to table
}
$conn->close();
}

?>

<html>
<br><br>
<form method="get" action="tripleaders.php">
    <button type="submit">Return to Trip Leader Database</button> <!--Return button for ease of use-->
</form>
</html>