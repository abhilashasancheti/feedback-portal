<!DOCTYPE html>

<?php
session_start();
  
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="profilestyle.css" rel="stylesheet" type="text/css" />


  </head>
<body>
<!--
<div class="main">
<img  src="iitg.gif" alt="IITG Logo"/>
       <h1>Course Feedback Student Profile</h1>
       <form name="studentprofile"  method="POST" action="a.php">
<table border="0" width="90%" cellpadding="20" align="center"></table>
<div style="border: 1px solid black; margin:auto; width:80% height=100px; background-color:black;">
jcndf;rejbp'
brlnk
wnkrynknknrnkbt
</div>

<h2><i><?php
  //  echo "Welcome" . " " . $_SESSION['name']."!!!";
?><i></h2>

<a href="http://localhost/project/c.php" ><img src="logout.jpg" alt="Log Out"></a>
-->
<table width="80%" border="1" align="center" cellpadding="5" bordercolor="gray">
<tr bgcolor="gray" style="color:#FFFFFF;font-weight:bold;font-size:14px;font-family:Times New Roman", Times, serif;>
<td align="center">&nbsp;Course No&nbsp;</td>
<td align="center">Course Name</td>
<td align="center">Course Instructor Name</td>
<td align="center">&nbsp;Status</td>
<td align="center">&nbsp;Select</td>

</tr>   
<!--
        <input type="hidden" name="rollno" value="130101089" id="rollno">
  <input type="hidden" name="student_id" value="7797" id="student_id">
        
          <input type="hidden" name="year" value="2014" id="year">-->

        <tr bgcolor="#FFF7E2" style="font-weight:bold;font-size:13px;font-family:Times New Roman", Times, serif;>
                
 <td align="center"><font color="#585858">&nbsp;CS 201&nbsp;</font></td>

 <td align="center"><font color="#585858">&nbsp;Data Structures&nbsp;</font></td>
 <td align="center"><font color="#585858">&nbsp;Saswata Shannigrahi&nbsp;</font></td>
  <td align='enter'><font color='#850000'><blink><?php echo $_SESSION['status'];?></blink></font></td><td align='center'><input type='radio' name='course' value='CS 201'/></td>

 
  
        <tr bgcolor="#F9EBED" style="font-weight:bold;font-size:13px;font-family:Times New Roman", Times, serif;>
                
 <td align="center"><font color="#585858">&nbsp;CS 202&nbsp;</font></td>

 <td align="center"><font color="#585858">&nbsp;Discrete Mathematics&nbsp;</font></td>
 <td align="center"><font color="#585858">&nbsp;Ashish Anand&nbsp;</font></td>
  <td align='enter'><font color='#850000'><blink><?php echo $_SESSION['status'];?></blink></font></td><td align='center'><input type='radio' name='course' value='CS 202' /></td>

 

  
  
        <tr bgcolor="#F9EBED" style="font-weight:bold;font-size:13px;font-family:Times New Roman", Times, serif;>
                
 <td align="center"><font color="#585858">&nbsp;CS 221&nbsp;</font></td>

 <td align="center"><font color="#585858">&nbsp;Digital Design&nbsp;</font></td>
 <td align="center"><font color="#585858">&nbsp;Santosh Biswas&nbsp;</font></td>
  <td align='enter'><font color='#850000'><blink><?php echo $_SESSION['status'];?></blink></font></td><td align='center'><input type='radio' name='course' value='CS 221' /></td>

 

  
  
        <tr bgcolor="#F9EBED" style="font-weight:bold;font-size:13px;font-family:Times New Roman", Times, serif;>
                
 <td align="center"><font color="#585858">&nbsp;<?php echo $_SESSION['hss'];?>&nbsp;</font></td>

 <td align="center"><font color="#585858">&nbsp;<?php echo $_SESSION['hss_name'];?>&nbsp;</font></td>
 <td align="center"><font color="#585858">&nbsp;<?php echo $_SESSION['instruct'];?>&nbsp;</font></td>
 <td align='enter'><font color='#850000'><blink><?php echo $_SESSION['status'];?></blink></font></td><td align='center'><input type='radio' name='course' value='HS 214'/></td>

 

        <tr bgcolor="#FFF7E2" style="font-weight:bold;font-size:13px;font-family:Times New Roman", Times, serif;>
                
 <td align="center"><font color="#585858">&nbsp;MA 201&nbsp;</font></td>

 <td align="center"><font color="#585858">&nbsp;Mathematics III&nbsp;</font></td>
<td align="center"><font color="#585858">&nbsp;Swaroop Nandan Bora&nbsp;</font></td>
  <td align='enter'><font color='#850000'><blink><?php echo $_SESSION['status'];?></blink></font></td><td align='center'><input type='radio' name='course' value='MA 201' /></td>
</table>
<input class="black button" type="button" name="next" value="Next"  onclick="sub(this.form);"/>
<p id="demo"></p>
</form>
</div>
</body>
</html>
