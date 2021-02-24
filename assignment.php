<?php

 
if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['username']) || isset($_POST['password']) || isset($_POST['confirmpassword']) || isset($_POST['gender']) || isset($_POST['date']) || isset($_POST['month']) || isset($_POST['year']) || isset($_POST['gender']))

 
{ 
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password']; 
$confirmpassword = $_POST['confirmpassword'];
$gender = $_POST['gender'];
$date = $_POST['date']; 
$month = $_POST['month'];
$year = $_POST['year'];
$gender = $_POST['gender'];

        for($i=0;$i<strlen($name);$i++)
{
	if(!((ord($name[$i]) >= 97 && ord($name[$i]) <= 122)) && !((ord($name[$i]) >= 65 && ord($name[$i]) <= 90)) && !(ord($name[$i]) == 32))
{    
       echo 'Name can only be alphabetical';break;
	   }
}
$atSymbol=false;
$atSymbolLocation = 0;
$period=false;
$periodLocation = 0;
     for($i=0;$i<strlen($email);$i++) 
{
     if($email[$i] == '@')
	 { 
$atSymbol = true;
$atSymbolLocation = $i; 
}
    if($email[$i] == '.')
{
$period = true;
$periodLocation = $i; 
} 
}
     if(!($atSymbol == true && $period == true && $atSymbolLocation < $periodLocation))
		 
{
      echo "Email must contain a '@' and '.'";
} 
for($i=0;$i<strlen($username);$i++)
{
if(!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90)) && !((ord($username[$i]) >= 48 && ord($username[$i]) <= 57)))
{
     echo 'Username can be only alphanumeric';break;
}
}
      if($password != $confirmpassword)
{
        echo 'Passwords do not match!';
}
      if(strlen($password) < 8)
{
      echo 'Password must be atleast 8 characters!'; 
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<title>Registration</title>
</head>
<body>
<fieldset>
<legend>
<h1>Club Member Registration</h1>
</legend>
<form action='#' method='POST'>
<table> 
<tr>
<td> 
Name:
</td>
<td> 
<input type="text" name='name'>
</td>
</tr>
<tr>
<td>
Username:
</td>
                        <td>
<input type="username" name='username'>
                       </td>
</tr>
<tr>
                       <td>
Password:
                        </td>
                        <td>
<input type="password" name='password'>
</td>
</tr>
<tr>
                      <td>
Confirm Password:
                        </td>
                       <td>
<input type="password" name='confirmpassword'>
                       </td>
</tr
<tr> 
<td> 
Email:
</td>
<td> 
<input type="email" name='email'>
</td>
</tr> 
<tr> 
<td> 
phone:
</td>
<td> 
<input type="number_format " name='phone'>
</td>
</tr> 
<tr>
                       <td>
					 
						 <legend>
					     <b>Gender</b>
						  </legend>
					     <input type='radio' name='gender' value='male'>Male
                         <input type='radio' name='gender' value='female'>Female
                        
						  </td>
<tr>
						<td>DOB</td>
						<td>:
							<select>
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select>
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<select>
								<option>Year</option>
								
								<?php
									for($i=1996;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
						</td>
						<tr>
						<td><span>Bio </span></td>
						<td>:<textarea name="bio"></textarea></td>
					</tr
					</tr>
<tr>
						<td align="center" colspan="2"><input type="submit" name="register" value="register"></td>
					</tr>
</table>
</form>
</fieldset>
</body>
</html>