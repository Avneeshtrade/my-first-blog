<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$connect=mysqli_connect("172.18.2.2","0537cs161008","sistec","0537cs161008") or die("could not connect");
$query="select user_name,password from user_admin where user_name='$username' and password='$password'";
$result=mysqli_query($connect,$query);
	if($row=mysqli_fetch_array($result))
	{
	print_r("<h1>$row[0]</h1>");
	session_start();
	$_SESSION['username']=$username;
	header("location:dashboard.php");
   }
	else
	{
	echo"<h1>Icorrect username or password entered.............</h1>";
	}
?>