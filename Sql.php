<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "test";
$Firstname=$_POST["firstname"];
$Email=$_POST["email"];
$Phoneno=$_POST["phoneno"];
$Address=$_POST["address"];
$Country=$_POST["country"];
$DOB=$_POST["DOB"];
$PAN=$_POST["PAN"];
$Gender=$_POST["Gender"];
$Amount=$_POST["Amount"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO doner (firstname,email,phoneno,address,country,DOB,PAN,Gender,Amount)
VALUES ('$Firstname', '$Email','$Phoneno','$Address','$Country','$DOB','$PAN','$Gender','$Amount')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>