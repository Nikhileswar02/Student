<?php
$loginid=$_POST['loginid'];
$password=$_POST['password'];

//database connection
$conn=new mysqli('localhost','nikhil','kamalakar02','nikhildb');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{

        $sql = "insert into application(loginid,password)values('$loginid', '$password')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();


    // $stmt = $conn->prepare("insert into savestudent(loginid,password)values($loginid, $password)");
    // // $stmt->bind_param("ss",);
    // $stmt->execute();
    // echo "registration success ";
    // $stmt->close();
    // $conn->close();
}
?>