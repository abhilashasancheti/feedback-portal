<?php 
//include('session_chk.php');
error_reporting(E_ERROR | E_PARSE);
 $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';//password

  $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

  $dbname = 'feedback';
  mysql_select_db($dbname) or die("database not available");
  error_reporting(E_ALL);


//include("includes/config_db.php");
?> 	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style1.css" />
<link rel="shortcut icon" type="image/x-icon" href="logo-iitg.gif">
<title>Add Student</title>

</head>

<body>
<table width="64%" align="center" border="0" cellpadding="0" cellspacing="1">
<tr>
<td height="60" colspan="2" align="center"> 
<img src="logo-iitg.gif" alt="IITG LOGO"><p align="center" style="margin-top:-80px; margin-bottom:50px;"><b><font size="5">Admin Panel</font></b></p>
</td>
</tr><!--<?php //include('admin_panel_heading.php'); ?>-->
<tr>
<td width="22%" valign="top">
<?php include('left_side.php');?>
</td>

<td width="78%" align="center" valign="top" >
<?php
if(isset($_POST['submit']))
  {//begin of if($submit).
      // Set global variables to easier names
      $Rollno = $_POST['Rollno'];
	  $Name = $_POST['Name'];
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  $hss = $_POST['hss'];
    $dept = $_POST['dept'];
    $login="Student";
    $course_no = $_POST['c_no'];
    if($hss="HS 214")
     {
	  $instruct = "Liza Das";     
      $hss_name = "Cultural Studies";      
  }
  if($hss="HS 236")
     {
    $instruct = "Priyankoo Sarmah";     
      $hss_name = "Introduction To Phonetics";      
  }
  if($hss="HS 221")
     {
    $instruct = "Bidisha Som";     
      $hss_name = "Language, Culture and Cognition";      
  }
  if($dept=="CSE")
  {
    $c_no="CS 201";
  }
   if($dept=="MNC")
  {
    $c_no="MA 225";
  }
  
  //check duplication
	$dup="select * from studentinfo  where username='".$username."' ";
	$dup_res=mysql_query($dup) or die(mysql_error());
	if(mysql_num_rows($dup_res)==1)
	{
		echo "Student name is already available in database.";
		
	}
	else
	{
     
	     //run the query which adds the data gathered from the form into the database
         $result = mysql_query("INSERT INTO studentinfo (Rollno,Name,username,password,hss,instruct,hss_name,dept,c_no) VALUES ('$Rollno','$Name','$username','$password','$hss','$instruct','$hss_name','$dept','$c_no')");
       $result = mysql_query("INSERT INTO logininfo (username,password,login,dept) VALUES ('$username','$password','$login','$dept')");
        
          //print success message.
       
         echo "<b>Studentinfo is added Successfully!</b><br>You'll be redirected after (1) Seconds";
          echo "<meta http-equiv=Refresh content=1;url=studentinfo.php>";
         }// echo "<!--<meta http-equiv=Refresh content=4;url=index.php>-->";
	
  }//end of if($submit).


  // If the form has not been submitted, display it!
else
  {//begin of else

      ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="add_stud" onsubmit="return chkForm();">
<div style="border: solid 1px navy; margin-right:10px;">
  <table width="283" border="0" cellpadding="3" cellspacing="1">
<tr><td colspan="2" align="center" style="font-size:20px">Add Student</td></tr>
  <tr>
    <td width="92"><div align="left">Rollno</div></td>
    <td width="163"><label>
      
        <div align="left">
          <input type="text" name="Rollno"/>
        </div>
    </label></td>
  </tr>
  <tr>
    <td width="92"><div align="left">Name</div></td>
    <td width="163"><label>
      
        <div align="left">
          <input type="text" name="Name" />
        </div>
    </label></td>
  </tr>
 <tr>
    <td width="92"><div align="left">Username</div></td>
    <td width="163"><label>
      
        <div align="left">
          <input type="text" name="username" />
        </div>
    </label></td>
  </tr><tr>
    <td width="92"><div align="left">Password</div></td>
    <td width="163"><label>
      
        <div align="left">
          <input type="password" name="password" />
        </div>
    </label></td>
  </tr><tr>
    <td width="92"><div align="left">HSS</div></td>
    <td width="163"><label>
      
        <div align="left">
          <input type="text" name="hss"/>
        </div>
    </label></td>
  </tr><tr>
    <td width="92"><div align="left">Department(CSE/MNC)</div></td>
    <td width="163"><label>
      
        <div align="left">
          <input type="text" name="dept"/>
        </div>
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="left">
      <table border="0" width="100%">
        <tr><td> <input type="submit" class="button3 black" name="submit" value="Add" onclick="return confirm('Are you sure you want to add?');"/></td><td align="right"><input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)" class="button3 black" /></td></tr>
      </table>
    </div></td>
  </tr>
</table>
</div>
</form>

 <?php
  }//end of else
?>
<p>&nbsp;</p></td>
</tr>
</table>
</body>
</html>
<script language="javascript" type="text/javascript">


function chkForm(form)
{
  var RefForm = document.add_stud;
		
		if (RefForm.Rollno.value.length < 1 )
		{
			alert("Enter Rollno");			
			RefForm.Rollno.focus();
			return false;
		}
		
		if (RefForm.Name.value == 0 )
		{
			alert("Enter Name");			
			return false;
		}
    if (RefForm.username.value == 0 )
    {
      alert("Enter Username");      
      return false;
    }
    if (RefForm.password.value == 0 )
    {
      alert("Enter password");      
      return false;
    }
    if (RefForm.hss.value == 0 )
    {
      alert("Enter hss");      
      return false;
    }
      if (RefForm.instruct.value == 0 )
    {
      alert("Enter Instructor");      
      return false;
    }
     if (RefForm.dept.value == 0 )
    {
      alert("Enter Department");

      return false;
    }
     if (RefForm.c_no.value == 0 )
    {
      alert("Enter c_no");      
      return false;
    }

}

</script>