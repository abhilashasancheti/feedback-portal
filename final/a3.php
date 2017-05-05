<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
 
//let's start the session
session_start();
 error_reporting(E_ERROR | E_PARSE);
//now, let's register our session variables
//session_register('name');
//session_register('email_address');
 
//finally, let's store our posted values in the session variables
$_SESSION['p2f2'] = $_POST['p2f2'];
//$_SESSION['p1f1'] = $_POST['p1f1'];
$_SESSION['p2f1q1'] = $_POST['p2f1q1'];
$_SESSION['p2f1q2'] = $_POST['p2f1q2'];
$_SESSION['p2f1q3'] = $_POST['p2f1q3'];
/*$insert_query = "INSERT into formval (
                q1,
                q2,
                q3,
                q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15
                        ) values (
                " . $_SESSION['p1f5q1'] . ",
                " . $_SESSION['p1f5q2'] . ",
                " . $_SESSION['p1f5q3'] . ",
                " . $_SESSION['p1f5q4'] . ",
                " . $_SESSION['p1f5q5'] . ",
                " . $_SESSION['p1f5q6'] . ",
                " . $_SESSION['p1f5q7'] . ",
                " . $_SESSION['p1f7q1'] . ",
                " . $_SESSION['p1f7q2'] . ",
                " . $_SESSION['p1f7q3'] . ",                
                " . $_SESSION['p2f1q1'] . ",
                " . $_SESSION['p2f1q2'] . ",
                " . $_SESSION['p2f1q3'] . ",
                " . $_SESSION['p2f2'] . "
                        );";
 
//let's run the query
mysql_query($insert_query);*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT into formval (
                Name,course,instructor,
                q1,
                q2,
                q3,
                q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15
                        ) values (
                        ' $_SESSION[name]',
                ' $_SESSION[course_no]', 
                ' $_SESSION[instructor]',         
                ' $_SESSION[p1f5q1]',
                ' $_SESSION[p1f5q2] ',
                ' $_SESSION[p1f5q3] ',
                ' $_SESSION[p1f5q4] ',
                ' $_SESSION[p1f5q5] ',
                ' $_SESSION[p1f5q6] ',
                ' $_SESSION[p1f5q7] ',
                ' $_SESSION[p1f5q8] ',
                ' $_SESSION[p1f7q1] ',
                ' $_SESSION[p1f7q2] ',
                ' $_SESSION[p1f7q3] ',                
                ' $_SESSION[p2f1q1] ',
                ' $_SESSION[p2f1q2] ',
                ' $_SESSION[p2f1q3] ',
                ' $_SESSION[p2f2] '
                        );";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

/*$_SESSION['p1f5q4'] = $_POST['p1f5q4'];
$_SESSION['p1f5q5'] = $_POST['p1f5q5'];
$_SESSION['p1f5q6'] = $_POST['p1f5q6'];
$_SESSION['p1f5q7'] = $_POST['p1f5q7'];
$_SESSION['p1f5q8'] = $_POST['p1f5q8'];
$_SESSION['p1f7q1'] = $_POST['p1f7q1'];
$_SESSION['p1f7q2'] = $_POST['p1f7q2'];
$_SESSION['p1f7q3'] = $_POST['p1f7q3'];
 */
?>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>&bull; Course Evaluation &bull;</title>
<link rel="shortcut icon" type="image/x-icon" href="logo-iitg.gif">
<link rel="stylesheet" type="text/css" href="a1.css">
<link rel="stylesheet" type="text/css" href="a2.css">
<link rel="stylesheet" type="text/css" href="a3.css">
<script>
function sub(frm)
{
	frm.action="a2.php";
	frm.submit();
}
</script>
</head>
<body>
<noscript>
<p style="font-size:16px;text-align:center;">
<span style="font-size:20px;"><b>Javascript is not enabled in your browser.</b></span><span>
<br>This form will not function properly without Javascript enabled.<br>Please enable Javascript and reload the form.</span>
</p>
</noscript>
<form id="form" method="post" >
<div id="formcontent">
<div id="sizedcontent">
<div id="infoheader" class="headerclass pagemargins">
<table width="100%">
<col width="100%">
<tr>
<td><span id="infoheadertext" class="completeheadertext"><span class="wordwrap"><span class="pspan arial" style="text-align:center;font-size:20px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">@msg@</span></span></span></span></td>
</tr>
</table>
</div>
<div id="header" class="headerclass pagemargins" style="background-color:#FFFFFF;">
<table width="100%" cellpadding="0px" cellspacing="0px" border="0px">
<col width="100%">
<tr align="center">
<td><img class="headerimg pngfix" alt="Header Image" src="a+.png" width="363" height="109" style="padding-bottom:10px;max-width:363px;"></td>
</tr>
<tr>
<td>
<div style="width:620px;"><span class="wordwrap"><span class="pspan arial" style="text-align:center;font-size:20px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">• </span><span class="ispan" style="font-size:24px;color:#716D5D" xml:space="preserve"> </span><span class="timesnewroman" style="font-size:24px;color:#716D5D" xml:space="preserve">Course Evaluation</span><span class="ispan" style="font-size:24px;color:#716D5D" xml:space="preserve">  </span><span class="ispan" style="color:#716D5D" xml:space="preserve">•</span></span></span></div>
</td>
</tr>
</table>
</div>
<div id="pages" class="pagemargins">
<div id="complete" class="formpage">
<div id="confirmmsg"></div>
<!--<a class="upsellbanner" target="_blank" href="https://formscentral.acrobat.com/redir/fc_html_submitpage_signup?lang=en-US"><span class="upsellmsg"><img class="upselllogo pngfix" src="https://d2bc7ecwdl7k8f.cloudfront.net/Clients/742617/FormsCentral/htmlClient/images/promo_brandmark.png" alt="FormsCentral Logo Image"><span style="display:block;clear:both;"><span class="promocaption" style="width:510px;">This form was easily created for FREE with FormsCentral. See how simple it is to create your own form with a FREE subscription today.</span><span class="tryforfree">Try for free</span></span><span style="display:block;clear:both;font-size:0;"></span></span></a>-->
<div class="null"></div>
</div>
<div id="page1" class="formpage" style="display:block;">
<div class="formrow f1 f2">
<div id="p1f1" class="field textField n1">

<span class="wordwrap"><span class=" timesnewroman" style="text-align:left;font-size:20px; width=100%"><span class="ispan" style="font-weight:medium;color:#716D5D" xml:space="preserve">Thank you for completing the feedback!!! </span></span></span>
<div class="null"></div>

<div class="control capabove">
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
</table>
</form>
</body>
</html>