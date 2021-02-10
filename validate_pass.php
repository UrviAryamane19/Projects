<?php

$m=@$_REQUEST['username'];
$n=@$_REQUEST['password'];
$o=@$_REQUEST['email'];
$p=@$_REQUEST['mobileno'];

  if($m == '' || $n == '' || $o == ''||$p == '') 
  {
	die("Fields are empty");
  }

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"trmsnew");

$sql="select uname from trmsuser WHERE uname='$m'";

$res=mysqli_query($con,$sql)or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
{
die("MobileNumber already exist. please choose another.");
}
else
{
echo "congrats on registering with us ";


}
?>
