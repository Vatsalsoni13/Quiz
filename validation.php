<?php
session_start();
$con = mysqli_connect('localhost','root','1234');
mysqli_select_db($con,'quizdbase');
$name = $_POST['name'];
$pass = $_POST['password'];
$pass = md5($pass);


$s = "select * from signin where name ='$name' && password='$pass'";
$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);
if(mysqli_num_rows($result) == 1)
{
	header('location:home.php');
	$_SESSION['name']=$name;
}
else
header('location:login.php');
?>