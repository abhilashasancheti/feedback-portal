<?php

session_start();
if(empty($_SESSION['6_letters_code'] ) ||
    strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
  {
      //Note: the captcha code is compared case insensitively.
      //if you want case sensitive match, update the check above to
  {

$username = $_POST['username'];
      // strcmp()
    $errors .= "The captcha code does not match!";
  }
 if(empty($errors))
$password = $_POST['password'];
if ($username&&$password)
{
	$connect = mysql_connect("localhost","root","") or die("couldn't connect to database");
	mysql_select_db("feedback") or die("couldn't find database");

	$query = mysql_query("SELECT * FROM `table 1` WHERE username='$username'");

	$numrows = mysql_num_rows($query);
	if ($numrows!==0)
	{
		while($rows = mysql_fetch_assoc($query))
		{
			 $dbusername = $rows['username'];
			 $dbpassword = $rows['password'];
		
		if($username==$dbusername&&$password==$dbpassword)
          {
          	 echo "You are logged in!";
          	 @$_SESSION['username']= $username;
          }
          else
          	  echo "Your password is incorrect!";
        }
	}
	 else
	 	 die("That user doesn't exists!");
}
else
    die("Please enter a username and password!");
}
?>