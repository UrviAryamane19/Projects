<?php
$c_type=$_POST['cardtype'];
$c_number=$_POST['cardnumber'];
$s_code= $_POST['secure'];
$name=$_POST['namecard'];

if($c_number == '' || $s_code == ''||$name == '' || $c_type== '') 
  {
	die("Fields are empty ! Must Enter Payment Details");
  }
    if(!empty($s_code)) // secure number is not empty
{
    if(preg_match('/^\d{3}$/',$s_code)) // secure number is valid
    {
      $secNumber = '0' . $s_code;

      // your other code here
    }
    else // cvv number is not valid
    {
      die( 'CVV number invalid !.3 digit CVV required!');
    }
}
if (strlen($c_number) != '16') {
        $securityErr = "Invalid card number!.Card number should be 16 digit";
		die ("$securityErr");
    }
	
	
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"trmspay");

$sql_verify = "select cardnumber from userpayment where cardnumber = '$c_number' and securitycode = '$s_code' and name = '$name' ";

$res=mysqli_query($con,$sql_verify)or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
{
echo "You have already made the payment.";
echo "<a href = 'samplejobcourse.html' style = 'text-decoration : none'>Continue Further!</a>";
}
else
{
echo "You have completed yor payment procedure!";
echo "<a href = 'samplejobcourse.html' style = 'text-decoration : none'>Continue Further!</a>";
}
?>