<!DOCTYPE html>
<html>
<head>
    <style>
        table,th,td{
            border: 1px solid black;
        }
        </style>
</head>
<body>
<?php

$servername = "localhost";
$username = "nikhil";
$password = "kamalakar02";
$dbname = "nikhildb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname, lastname, email, age, gender, phone, address, state, hobbies FROM savestudent";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Age</th><th>Gender</th><th>Phone</th><th>Address</th><th>State</th><th>Hobbies</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        
        echo "<tr><td> " . $row["id"]. " </td><td> " . $row["firstname"]. "</td><td>" . $row["lastname"]. " </td><td> " . $row["email"]." </td><td> " . $row["age"]." </td><td> " . $row["gender"]."</td><td> " . $row["phone"]." </td><td> " . $row["address"]."</td><td> " . $row["state"]." </td><td> " . $row["hobbies"]."</td></tr>";
    

    }
} else {
    
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
