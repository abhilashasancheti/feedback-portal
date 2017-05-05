

<?php
if(isset($_POST['submit']))
{
session_start();
$user=$_POST['username'];
$Rollno=$_POST['rollno'];
$pass=$_POST['password'];
$npass=$_POST['npass'];
$npass1=$_POST['npass1'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

define('DB_HOST', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("feedback") or die("Failed to connect to MySQL: " . mysql_error());

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = mysql_query("SELECT *  FROM studentinfo where username = '$user' AND Rollno  = '$Rollno'") or die(mysql_error());

$row = mysql_fetch_array($query) or die(mysql_error());
if($npass==$npass1 && $pass==$row['password'])
{

$sql = mysql_query("UPDATE studentinfo SET password='$npass' WHERE username='$user' AND password='$pass'");
$sql = mysql_query("UPDATE logininfo SET password='$npass' WHERE username='$user'");
}
else if($npass!=$npass1)
{
	echo "Password not mached!!";
}
else if($pass!=$row['password'])
{
	echo "Incorrect password Entered";
}
if ($conn->query($sql) === TRUE) {

    echo "Password Changed";
} /*else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

$conn->close();
}
?> 
