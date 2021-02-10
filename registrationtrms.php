<html>
<head>
<link href = "exp6_4_PHPLogin.css" type = "text/css" rel = "stylesheet">
<body>
</form>
<form action = "exp6_4_PHPRegister.php" method  = "POST">
<h2 align  ="center">Registration form</h2>
<table cellspacing ="5" cellpadding = "5" align = "center">
<tr>
<td>Username</td>
<td><input type = "text" name = "username" size = "25" maxlength = "15" id = "t1" method = "post">
</tr>
<tr>
<td>Password</td>
<td><input type = "password" name = "password" size = "25" maxlength = "12"></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type = "text" name = "confirmpassword" size = "25" maxlength = "12"></td></tr>
<tr>
<td>Email_Id</td>
<td><input type = "text" name = "email" id = "email" size = "40" maxlength = "40" id = "t8"></td>
</tr>
<tr>
<td colspan = "2">Gender :-
<td><input type = "radio" name = "gender1" value  ="Male" id = "t2">
Male
<input type = "radio" name = "gender2" value  ="Female" id = "t3">
Female</td>
</tr>
<tr>
<td>DOB: <br>(dd/mm/yy)</td>
<td><input type = "text" name = "DOB" value  ="DOB" id = "t9" size = "10" maxlength = "10"></tr>
<tr>
<td colspan = "2">Hobbies :-
<input type = "checkbox" name = "cricket" value  ="Cricket" id = "t4">
Cricket
<input type = "checkbox" name = "badminton" value  ="Badminton" id = "t5">
Badminton
</td>
</tr>
<tr>
<td colspan = "2">Select Field :-
<select name = "select" size = "1" id  ="t6">
<option value  = "IT">IT</option>
<option value  = "EC">EC</option>
<option value  = "CE">CE</option>
</select></td>
</tr>
<tr>
<td>Mobile No : </td>
<td><input type = "text" name = "mobileno"  id = "t10" size = "10" maxlength = "10"></td>
</tr>
<tr>
</table>
<p><input type="submit" value="Sign Up"><p>
</form>
</body>
</head>
</html>