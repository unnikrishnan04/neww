<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
</head>
<?php

   $rand=rand();
   $_SESSION['rand']=$rand;

$id = $_POST['id'];
$name = $_POST['name'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$conn = new mysqli(localhost,admin,admin123,std);
if($conn->connect_error) {
	die("connection failed: ".$conn->connect_error);
}
$sql = "INSERT INTO students (id,name,username,password) VALUES ($id,'$name','$user','$pass')";
$conn->query($sql) 
echo (": ".$sql->error);

?>
<body>
	<form method="post">
		Id  :<input type="number" name="id" ><br><br>
		Name  :<input type="text" name="name" ><br><br>
		Username  :<input type="text" name="user" ><br><br>
		Password  :<input type="password" name="pass" ><br><br>
		<input type="submit" name="" value="Submit">
	</form>

</body>
</html>