<?php 
error_reporting(E_ERROR | E_PARSE);
$dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';//password

  $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

  $dbname = 'feedback';
  mysql_select_db($dbname) or die("database not available");
	 // include("includes/config_db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Courseinfo</title>
<link rel="shortcut icon" type="image/x-icon" href="logo-iitg.gif">
<link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body>
<table width="64%" align="center"  border="0" cellpadding="0" cellspacing="1" >
<tr>
<td height="60" colspan="2" align="center"> 
<img src="logo-iitg.gif" alt="IITG LOGO"><p align="center" style="margin-top:-10%; margin-bottom:3%;"><b><font size="5">Admin Panel</font></b></p>
</td>
</tr><!--<?php //include('admin_panel_heading.php'); ?>-->
<tr>
<td width="17%" >
<?php  include('left_side.php');?>
</td>

<td width="83%" align="center" valign="top" bgcolor="#FFFFFF">
<!--<p>
<table width="480px" align="center"><tr><td colspan="3" align="right"><a href='add_course.php' class="button">Add Faculty</a></td></tr></table>
</p>-->
<table id="rounded-corner" border="0" align="center" cellpadding="0" cellspacing="0" >
<?php
		
		$group_by=mysql_query("SELECT distinct(course_id) FROM courseinfo");
		 echo '<tr>';
				   echo "<td align=center>"."S.No"."</td>";
				   echo "<td align=center>"."Course_no"."</td>";
				   echo "<td align=center>"."Instructor"."</td>";
				   echo "<td align=center>"."Instructor_webmail"."</td>";
				  
				  echo '</tr>';
			
		while($group_b_id = mysql_fetch_array($group_by))
		{
		
			
			$result = mysql_query("SELECT * FROM courseinfo where course_id='".$group_b_id['course_id']."' ORDER BY course_id");
	//lets make a loop and get all news from the database
			//$i=1;
			
			if(mysql_num_rows($result)>0)
			{
				 while($myrow = mysql_fetch_array($result))
				 {//begin of loop
									  
				   echo '<tr>';
				   echo "<td align=center>".$myrow['course_id']."</td>";
				  // $i=$i+1;
				   echo "<td align=center>".$myrow['course_no'].'&nbsp;'.$myrow['course_name']."</td>";
				   echo "<td align=center>".$myrow['instructor']."</td>";
				   echo "<td align=center>".$myrow['instructor_webmail']."</td>";
				  
				  echo '</tr>';  
				  
				 }//end of loop
			}
			else
			{
				echo '<tr><td colspan=4 align=center>No record found!</td></tr>';
			}
		} 
		
?>
<input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)" class="button black" /></td></tr>
      </table>
</table>
</td>
</tr>

</table>

</body>
</html>
