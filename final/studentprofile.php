<!DOCTYPE html>

<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
  define('DB_HOST', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("feedback") or die("Failed to connect to MySQL: " . mysql_error());
$t=$_SESSION['hss'];
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="profilestyle.css" rel="stylesheet" type="text/css" />
  
<script type="text/javascript">
var myFlag=false;
function sub(frm)
{
  var group = document.studentprofile.course1;
if(group.length!==undefined){
        for (var i=0; i<group.length; i++) {

                if (group[i].checked)
                        {
                                frm.action="a.php";
                                
                                frm.submit();myFlag=true;
                        }
                }
}
else{

        if (group.checked)
                        {
                                frm.action="a.php";
                                frm.submit();
                                myFlag=true;
                        }


}



if (i==group.length && myFlag===false)
return alert("Please Select a Course to Go Forward");
}
</script>

  </head>
<body>

<div class="main">
<img  src="iitg.gif" alt="IITG Logo"/>
       <h1>Course Feedback Student Profile</h1>
       <form name="studentprofile"  method="POST" action="a.php">
<!--<table border="0" width="90%" cellpadding="20" align="center"></table>-->
<div style="border: 1px solid black; margin:auto; width:80% height=100px; background-color:black;">
jcndf;rejbp'
brlnk
wnkrynknknrnkbt
</div>
<h2><i><?php
    echo "Welcome" . " " . $_SESSION['name']."!!!";
?><i></h2>

<a href="http://localhost/project/c.php" ><img src="logout.jpg" alt="Log Out"></a>
<table width="80%" border="1" align="center" cellpadding="5" bordercolor="gray">
<tr bgcolor="gray" style="color:#FFFFFF;font-weight:bold;font-size:14px;font-family:Times New Roman", Times, serif;>
<td align="center">&nbsp;Course No&nbsp;</td>
<td align="center">Course Name</td>
<td align="center">Course Instructor Name</td>

<td align="center">&nbsp;Select</td>

</tr>   
<!--
        <input type="hidden" name="rollno" value="130101089" id="rollno">
  <input type="hidden" name="student_id" value="7797" id="student_id">
        
          <input type="hidden" name="year" value="2014" id="year">-->

        <tr bgcolor="#FFF7E2" style="font-weight:bold;font-size:13px;font-family:Times New Roman", Times, serif;>
                <?php

               $t=$_SESSION['c_no'];
               $query = mysql_query("SELECT *  FROM courseinfo where course_no = '$t'") or die(mysql_error());
              $row= mysql_fetch_array($query) or die(mysql_error());
  
  if(!empty($row['course_no']) )
  {
    $_SESSION['course_no'] = $row['course_no'];
    $_SESSION['course_name'] = $row['course_name'];
    $_SESSION['instructor'] = $row['instructor'];
 
}
?>
 <td align="center"><font color="#585858">&nbsp;<?php echo $_SESSION['course_no'];?>&nbsp;</font></td>

 <td align="center"><font color="#585858">&nbsp;<?php echo $_SESSION['course_name'];?>&nbsp;</font></td>
 <td align="center"><font color="#585858">&nbsp;<?php echo $_SESSION['instructor'];?>&nbsp;</font></td>
  <td align='enter'><font color='#850000'><input type='radio' name='course1' value='<?php echo $_SESSION['course_no'];?>'/></td>

 
  
        <tr bgcolor="#F9EBED" style="font-weight:bold;font-size:13px;font-family:Times New Roman", Times, serif;>
                
 <td align="center"><font color="#585858">&nbsp;CS 202&nbsp;</font></td>

 <td align="center"><font color="#585858">&nbsp;Discrete Mathematics&nbsp;</font></td>
 <td align="center"><font color="#585858">&nbsp;Ashish Anand&nbsp;</font></td>
  <td align='enter'><font color='#850000'><input type='radio' name='course1' value='CS 202' /></td>

 

  
  
        <tr bgcolor="#F9EBED" style="font-weight:bold;font-size:13px;font-family:Times New Roman", Times, serif;>
                
 <td align="center"><font color="#585858">&nbsp;CS 221&nbsp;</font></td>

 <td align="center"><font color="#585858">&nbsp;Digital Design&nbsp;</font></td>
 <td align="center"><font color="#585858">&nbsp;Santosh Biswas&nbsp;</font></td>
  <td align='enter'><font color='#850000'><input type='radio' name='course1' value='CS 221' /></td>

 

  
  
        <tr bgcolor="#F9EBED" style="font-weight:bold;font-size:13px;font-family:Times New Roman", Times, serif;>
                
 <td align="center"><font color="#585858">&nbsp;<?php echo $_SESSION['hss'];?>&nbsp;</font></td>

 <td align="center"><font color="#585858">&nbsp;<?php echo $_SESSION['hss_name'];?>&nbsp;</font></td>
 <td align="center"><font color="#585858">&nbsp;<?php echo $_SESSION['inst'];?>&nbsp;</font></td>
 <td align='enter'><font color='#850000'><input type='radio' name='course1' value='<?php echo $_SESSION['hss'];?>'/></td>

 

        <tr bgcolor="#FFF7E2" style="font-weight:bold;font-size:13px;font-family:Times New Roman", Times, serif;>
                
 <td align="center"><font color="#585858">&nbsp;MA 201&nbsp;</font></td>

 <td align="center"><font color="#585858">&nbsp;Mathematics III&nbsp;</font></td>
<td align="center"><font color="#585858">&nbsp;Swaroop Nandan Bora&nbsp;</font></td>
  <td align='enter'><font color='#850000'><input type='radio' name='course1' value='MA 201' /></td>
</table>
<input class="black button" type="button" name="next" value="Next"  onclick="sub(this.form);"/>
<div>
        <h3> USEFUL LINKS</h3>
        <ul>
          <li> <a href="http://shilloi.iitg.ernet.in/~acad/intranet/tt/ctt.htm" ><span style="color:red; text-align:left;">Class Time-Table</span></a></li>
          <li> <a href="http://shilloi.iitg.ernet.in/~acad/intranet/tt/ett.htm" ><span style="color:red; text-align:left;">Exam Time-Table</span></a></li>
          <li> <a href="https://intranet.iitg.ernet.in/moodle/login/index.php" ><span style="color:red;text-align:left;">Moodle<span></a></li>
          <li> <a href="http://www.iitg.ernet.in/acad/acadCal/AcademicCalendar2015.htm" ><span style="color:red;text-align:left;">Academic Calender</span></a></li>
        </ul>
  </div>

</form>
</div>
</body>
</html>
