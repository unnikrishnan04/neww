<?php

if(isset($_POST['submit'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];

$conn = new mysqli(localhost,admin,admin123,std);
if($conn->connect_error) {
	die("connection failed: ".$conn->connect_error);
}

$sql = "SELECT username,password FROM students WHERE username = '$user'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
 	$a = $row['password'];



 if($a===$pass) {

 	echo "HI WELCOME ".$user;
 }
 else {	
 	echo "string";
 }


}

?>