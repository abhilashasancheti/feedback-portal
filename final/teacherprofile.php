<!DOCTYPE html>

<?php
session_start();
/*$_SESSION['tname']='Saswata';
$_SESSION['coursename']='CS-201';
$_SESSION['homepage']='http://shilloi.iitg.ernet.in/~saswata.sh/data_structures_2012.html';
*/?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="styles/profstyle.css" />
	<title>Teacher Profile</title>
  <link rel="shortcut icon" href="image/logo-iitg.gif" type="image/x-icon"/>
<script type="text/javascript">
/*var myFlag=false;
function sub(frm)
{
  var group = document.studentprofile.course;
if(group.length!==undefined){
        for (var i=0; i<group.length; i++) {

                if (group[i].checked)
                        {
                                frm.action="r.php";
                                frm.submit();myFlag=true;
                        }
                }
}
else{

        if (group.checked)
                        {
                                frm.action="r.php";
                                frm.submit();
                                myFlag=true;
                        }


}


if (i==group.length && myFlag===false)
return alert("Please Select a Course to Go Forward");
*/}
</script>

	</head>
<body>

<div class="main">
<img  src="image/iitg.gif" alt="IITG Logo"/>
       <h1>Instructor's Profile</h1>
       <form name="teacherprofile"  method="POST" action="a.php">
<!--<table border="0" width="90%" cellpadding="20" align="center"></table>-->
<div style="border: 1px solid black; margin:auto; width:80% height=100px; background-color:black;">
jcndf;rejbp'
brlnk
wnkrynknknrnkbt
</div>

<a href="http://localhost/final/index.php" ><img src="image/logout.jpg" alt="Log Out"></a>
<p>Instructor Name : <i><?php
    echo " " . $_SESSION['tname'];
?></i></p>
<p>Ongoing Courses :
  <i><a href="response3.php" style="float:center;"><?php echo  " " . $_SESSION['coursename'];?></a>
  </i>
 
</p>
<p>Department: <?php
    echo   " " . $_SESSION['Dept'];
?></i></p>

<p>Personal Homepage: <a href="$_SESSION['homepage']" style="margin-left:10px;"><?php echo $_SESSION['homepage']?></a>
</p>




</table>
<!--<input class="black button" type="button" name="next" value="Go"  onclick="sub(this.form);"/>-->
</form>
</div>
</body>
</html>
