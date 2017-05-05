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
	$k=$_POST['login'];
	$query1 = mysql_query("SELECT *  FROM logininfo where username = '$_POST[username]' AND password = '$_POST[password]' AND login = '$k' ") or die(mysql_error());
	$row1 = mysql_fetch_array($query1) or die(mysql_error());
	
	if(!empty($row1['username']) AND !empty($row1['password']))
	{
		if($k=="Student")
	{
		$query2 = mysql_query("SELECT *  FROM studentinfo where username = '$_POST[username]'") or die(mysql_error());
		$row2 = mysql_fetch_array($query2) or die(mysql_error());
		$_SESSION['name'] = $row2['Name'];
		$_SESSION['hss'] = $row2['hss'];
		$_SESSION['inst'] = $row2['instruct'];
		$_SESSION['hss_name'] = $row2['hss_name'];
		$_SESSION['c_no'] = $row2['c_no'];
		header("Location: ". "studentprofile.php");	
	}
	else if($k=="Faculty")
	{
		$query3 = mysql_query("SELECT *  FROM facultyinfo where username = '$_POST[username]'") or die(mysql_error());
		$row3 = mysql_fetch_array($query3) or die(mysql_error());
		$_SESSION['tname']=$row3['instructor'];
		$_SESSION['coursename']=$row3['course_name'];
		$_SESSION['Dept']=$row3['Dept'];
		$_SESSION['homepage']=$row3['per_homepage'];
		header("Location: ". "teacherprofile.php");

	}
	else if($k=="Admin")
		header("Location: ". "admin/adminprofile.php");
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


