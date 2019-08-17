<?php
session_start();
$con = mysqli_connect('localhost','root','1234');
mysqli_select_db($con,'quizdbase');
$name = $_POST['name'];
$pass = $_POST['password'];
$pass= md5($pass);


$s = "select * from signin where name ='$name'";
$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);
if($num==1)
echo "User Already Exists!";
else
{
	$reg="insert into signin(name,password) values ('$name','$pass')" ;
	mysqli_query($con,$reg);
	header('location:login.php');
}

?>