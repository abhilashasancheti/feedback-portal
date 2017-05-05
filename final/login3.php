<?php
define('DB_HOST', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("feedback") or die("Failed to connect to MySQL: " . mysql_error());

/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
   //starting the session for user profile page
if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM studentinfo where username = '$_POST[username]' AND password = '$_POST[password]'  ") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	$k=$_POST['login'];
	if(!empty($row['username']) AND !empty($row['password']))
	{
		if($k=="Student")
	{
		$_SESSION['name'] = $row['Name'];
		$_SESSION['hss'] = $row['hss'];
		$_SESSION['instruct'] = $row['instruct'];
		$_SESSION['hss_name'] = $row['hss_name'];
		$_SESSION['status'] = $row['status'];
		header("Location: ". "sub.php");	
	}
	else if($k=="Faculty")
	{
	echo "HI";

	}
	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}

if(isset($_POST['submit']))
{

	

	session_start();
	if(empty($_POST['username'])||empty($_POST['login'])||empty($_POST['password']))
	{
		echo "\n Name and password are required fields. ";	
	}
	if(empty($_SESSION['6_letters_code']) ||  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	
	echo  "\n The captcha code does not match!";
	
	}

	else
	{
	SignIn();
	}
}

?>


