<?php 
error_reporting(E_ERROR | E_PARSE);

	 // include("includes/config_db.php");

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';//password

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'feedback';
mysql_select_db($dbname) or die("database not available");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CourseInfo</title>
<link rel="shortcut icon" type="image/x-icon" href="logo-iitg.gif">
<link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body>
<table width="57%" align="center"  border="0" cellpadding="0" cellspacing="1" >
<tr>
<td height="60" colspan="2" align="center"> 
<img src="logo-iitg.gif" alt="IITG LOGO" style="margin-left:-850px;" ><p align="center" style="margin-top:-80px; margin-bottom:50px;"><b><font size="5">Admin Panel</font></b></p>
</td>
</tr><!--<?php //include('admin_panel_heading.php'); ?>-->
<tr>
<td width="17%" >
<?php include('left_side.php');?>
</td>

<td width="83%" align="center" valign="top" bgcolor="#FFFFFF">

<table id="rounded-corner" border="0" align="center" cellpadding="0" cellspacing="0" >
<?php
		
		$group_by=mysql_query("SELECT distinct(id) FROM formval");
		 echo '<tr>';
				   echo "<td align=center>"."S.No"."</td>";
				   echo "<td align=center>"."Name"."</td>";
				   echo "<td align=center>"."Course"."</td>";
				   echo "<td align=center>"."Instructor"."</td>";
				  
				   echo "<td align=center>"."The course description accurately described the course content."."</td>";
				   echo "<td align=center>"."I was academically prepared for this course."."</td>";
				   echo "<td align=center>"."The class size was appropriate."."</td>";
				   echo "<td align=center>"."The classes started and ended on time."."</td>";
				   echo "<td align=center>"."The course increased my knowledge of the subject matter."."</td>";
				   echo "<td align=center>"."The course increased my interest of the subject matter."."</td>";
				   echo "<td align=center>"."The overall quality of this course was excellent."."</td>";
				   echo "<td align=center>"."I would recommend this course to other students."."</td>";
				   echo '</tr>';
			
		while($group_b_id = mysql_fetch_array($group_by))
		{
		
			
			$result = mysql_query("SELECT * FROM formval where id='".$group_b_id['id']."' ORDER BY id");
	//lets make a loop and get all news from the database
			$i=1;
			
			
			if(mysql_num_rows($result)>0)
			{
				 while($myrow = mysql_fetch_array($result))
				 {//begin of loop
					$id=$myrow['id'];				  
				   echo '<tr>';
				   echo "<td align=center>".$i."</td>";
				   $i++;
				   echo "<td align=center>".$myrow['Name']."</td>";
				   echo "<td align=center>".$myrow['course']."</td>";
				   echo "<td align=center>".$myrow['instructor']."</td>";
				   echo "<td align=center>".$myrow['q1']."</td>";
				   echo "<td align=center>".$myrow['q2']."</td>";
				   echo "<td align=center>".$myrow['q3']."</td>";
				   echo "<td align=center>".$myrow['q4']."</td>";
				   echo "<td align=center>".$myrow['q5']."</td>";
				   echo "<td align=center>".$myrow['q6']."</td>";
				   echo "<td align=center>".$myrow['q7']."</td>";
				   echo "<td align=center>".$myrow['q7']."</td>";
				

				  
				  echo '</tr>';  
				  
				 }//end of loop
			}
			else
			{
				echo '<tr><td colspan=4 align=center>No record found!</td></tr>';
			}
		} 
		
?>
	


</table>
<table>
<tr><td><input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)" class=" button3 black" /></td></tr></table>
</td>
</tr>


</table>
<!--<table>
	<tr><td>
<input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)" class="button black" /></td></tr>
      </table>-->
</body>
</html>
