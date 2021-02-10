<?php
$name=$_POST['username'];
$pwd=$_POST['password'];
$email= $_POST['email'];
$mobileno=$_POST['mobileno'];
$pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
  if($name == '' || $pwd == '' || $email == ''||$mobileno == '') 
  {
	die("Fields are empty");
  }
  if(!empty($mobileno)) // phone number is not empty
{
    if(preg_match('/^\d{10}$/',$mobileno)) // phone number is valid
    {
      $phoneNumber = '0' . $mobileno;

      // your other code here
    }
    else // phone number is not valid
    {
      die( 'Mobile number invalid !');
    }
}
 if (strlen($pwd) <= '8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
		die ("$passwordErr");
    }
    elseif(!preg_match("#[0-9]+#",$pwd)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
		die ("$passwordErr");
    }
    elseif(!preg_match("#[A-Z]+#",$pwd)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
		die ("$passwordErr");
    }
    elseif(!preg_match("#[a-z]+#",$pwd)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
		die ("$passwordErr");
	}
	elseif(!preg_match($pattern,$pwd)) {
		$passwordErr = "Your Password Must Contain At Least 1 special character!";
		die("$passwordErr");
		
	}



$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"trmsnew");

$sql="select uname from trmsuser WHERE uname='$name'";

$res=mysqli_query($con,$sql)or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
{
die ("Username already exist. please choose another.");
}
else
{
echo "congrats on registering with us ";
}

?>