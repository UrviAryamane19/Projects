<?php
include('validate.php');
$name=$_POST['username'];
$pwd=$_POST['password'];
$email= $_POST['email'];
$mobileno=$_POST['mobileno'];
$con=mysqli_connect('localhost','root','');
if($con)
{
echo"Thank You For Registering<br />";
}

//$sql = "create database registertrms";
mysqli_query($con,"create database trmsnew");


mysqli_select_db($con,"trmsnew");


//$sql1 = "create table trmsuser(uname varchar(20),password varchar(20))";
mysqli_query($con,"create table trmsuser(uname varchar(20),password varchar(20),email varchar(20),mobileno bigint)");


//$sql3 = "insert into trmsuser values('$name','$pwd')";
mysqli_query($con,"insert into trmsuser values('$name','$pwd','$email','$mobileno')");

echo "<a href = 'main_content.html' style = 'text-decoration : none'>Move to your Account</a>";

//$sql2 = "select * from trmsuser";
/*$result=mysqli_query($con,"select * from trmsuser");
echo"<table border='2' style='border-color:red;'>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>$row[0]</td><td>$row[1]</td>";
	echo"</tr>";
}
echo"</table>";*/


?>


