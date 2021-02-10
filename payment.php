<?php
include("validate_payment.php");
$c_type=$_POST['cardtype'];
$c_number=$_POST['cardnumber'];
$s_code= $_POST['secure'];
$name=$_POST['namecard'];
$con=mysqli_connect('localhost','root','');
if($con)
{
echo"Thank You For Payment<br />";
}

//$sql = "create database trmspay";
mysqli_query($con,"create database trmspay");


mysqli_select_db($con,"trmspay");


//$sql1 = "create table userpayment(uname varchar(20),password varchar(20))";
mysqli_query($con,"create table userpayment(cardnumber bigint primary key,securitycode int,name varchar(20))");


//$sql3 = "insert into userpayment values('$name','$pwd')";
mysqli_query($con,"insert into userpayment values('$c_number','$s_code','$name')");

//echo "<a href = 'samplejobcourse.html' style = 'text-decoration : none'>Continue Further!</a>";

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


