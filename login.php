<?php
$a1 = $_POST['uname'];
$b1 = $_POST['psw'];
$con = mysqli_connect("localhost","root","");
if($con)
{
	//echo "connection successful<br>";
}
mysqli_select_db($con,"trmsnew");
//echo "database selected<br>";
//$sql2 = "select * from trmsuser";
$result = mysqli_query($con,"select * from trmsuser");
$flag  = 0;
while($row = mysqli_fetch_array($result))
{
	if($row[0] == $a1 && $row[1] == $b1)
	{
		$flag = 1;
	}
	else
		$flag = 0;
}
if($flag == 1)
{
	echo "Valid user";
	echo "<br><a href = 'main_content.html' style = 'text-decoration : none'>Move to your Account</a>";
}
else
{
	echo "Invalid User";
	echo "<br>You need to Register!";
	echo "<br><a href = 'registrationtrms.html' style = 'text-decoration : none'>Click Here To Register</a>";
}
?>