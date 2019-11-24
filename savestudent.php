<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$state=$_POST['state'];
$hobbies=$_POST['hobbies'];
//echo "<pre>";
//$hobbies_string = $_POST['hobbies'][0].','.$_POST['hobbies'][1].','.$_POST['hobbies'][2];
$hobbies_string = implode(",",$_POST['hobbies']);
//echo $hobbies_string;
//print_r($hobbies);
//echo "</pre>";
//exit;
//database connection
$conn=new mysqli('localhost','nikhil','kamalakar02','nikhildb');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    $sql = "insert into savestudent(firstname,lastname,email,age,gender,phone,address,state,hobbies) values ('$firstname','$lastname','$email','$age','$gender','$phone','$address','$state','$hobbies_string')";
    //echo $sql;
    //exit;
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
   // $stmt=$conn->prepare("insert into savestudent(firstname,lastname,email,age,gender,phone,address,state,hobbies)
    //values(?,?,?,?,?,?,?,?,?)");
    //$stmt->bind_param("sssisisss ",$firstname,$lastname,$email,$age,$gender,$phone,$address,$state,$hobbies);
    //$stmt->execute();
    //echo "registration success ";
    //$stmt->close();
    //$conn->close();
}
?>