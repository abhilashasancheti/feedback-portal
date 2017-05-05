<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
define('DB_HOST', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("feedback") or die("Failed to connect to MySQL: " . mysql_error());
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$course="";

if($_POST["course1"]) {          
        $course = $_POST["course1"]; 
       // echo $course;
  }  
$query = mysql_query("SELECT *  FROM courseinfo where course_no = '$course' ") or die(mysql_error());
$row = mysql_fetch_array($query) or die(mysql_error());
$instructor=$row['instructor'];




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
<form id="form" method="post" action="a2.php">
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

<div class="null"></div>
</div>
<div id="page1" class="formpage" style="display:block;">
<div class="formrow f1 f2">
<div id="p1f1" class="field textField n1">
<div class="caption capabove alignleft">
<label class="fieldlabel" for="p1f1c"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="font-weight:bold;color:#716D5D" xml:space="preserve">Course Name </span></span></span></label>
<div class="null"></div>
</div>
<div class="control capabove">
<div>
<input type="text" id="p1f1c" name="p1f1" value=" <?php echo $course; ?>" class="fieldcontent">
<div class="fielderror"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div id="p1f2" class="field textField n2">
<div class="caption capabove alignleft">
<label class="fieldlabel" for="p1f2c"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="font-weight:bold;color:#716D5D" xml:space="preserve">Instructor</span></span></span></label>
<div class="null"></div>
</div>
<div class="control capabove">
<div>
<input type="text" id="p1f2c" name="p1f2" value="<?php echo $instructor; ?>"class="fieldcontent">
<div class="fielderror"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="formrow f1">
<div id="p1f3" class="field imageElement n1">
<div class="staticcontrol">
<div>
<img class="image pngfix" alt="Form Image Element" src="line.png" width="620" height="10" style="max-width:620px;"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="formrow f1">
<div id="p1f4" class="field textElement n1">
<div class="staticcontrol"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:center;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">Please choose the best answer for each of the following.</span></span></span></div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="formrow f1">
<div id="p1f5" class="field likertField n1">
<div class="caption capabove alignleft">
<label class="fieldlabel" for="p1f5c"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="font-weight:bold;color:#716D5D" xml:space="preserve">Course</span></span></span></label>
<div class="null"></div>
</div>
<div class="control capabove">
<table id="p1f5c" class="cttable">
<thead>
<tr>
<th>&nbsp;</th><td>
<div>Strongly Disagree</div>
</td><td>
<div>Disagree</div>
</td><td>
<div>Neutral</div>
</td><td>
<div>Agree</div>
</td><td>
<div>Strongly Agree</div>
</td>
</tr>
</thead>
<tbody>
<tr class="ctqrow altrow" id="p1f5q1">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The course description accurately described the course content.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p1f5q1" id="p1f5q1_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p1f5q1" id="p1f5q1_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral"  checked="checked" name="p1f5q1" id="p1f5q1_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p1f5q1" id="p1f5q1_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p1f5q1" id="p1f5q1_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p1f5q2">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">I was academically prepared for this course.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p1f5q2" id="p1f5q2_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p1f5q2" id="p1f5q2_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked" name="p1f5q2" id="p1f5q2_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p1f5q2" id="p1f5q2_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p1f5q2" id="p1f5q2_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow altrow" id="p1f5q3">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The class size was appropriate.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p1f5q3" id="p1f5q3_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p1f5q3" id="p1f5q3_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked" name="p1f5q3" id="p1f5q3_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p1f5q3" id="p1f5q3_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p1f5q3" id="p1f5q3_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p1f5q4">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">The classes started and ended on time.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p1f5q4" id="p1f5q4_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p1f5q4" id="p1f5q4_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked" name="p1f5q4" id="p1f5q4_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p1f5q4" id="p1f5q4_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p1f5q4" id="p1f5q4_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow altrow" id="p1f5q5">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The course increased my knowledge of the subject matter.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p1f5q5" id="p1f5q5_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p1f5q5" id="p1f5q5_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked" name="p1f5q5" id="p1f5q5_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p1f5q5" id="p1f5q5_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p1f5q5" id="p1f5q5_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p1f5q6">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">The course increased my interest in the subject matter.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p1f5q6" id="p1f5q6_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p1f5q6" id="p1f5q6_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked" name="p1f5q6" id="p1f5q6_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p1f5q6" id="p1f5q6_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p1f5q6" id="p1f5q6_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow altrow" id="p1f5q7">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The overall quality of this course was excellent.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p1f5q7" id="p1f5q7_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p1f5q7" id="p1f5q7_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked" name="p1f5q7" id="p1f5q7_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p1f5q7" id="p1f5q7_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p1f5q7" id="p1f5q7_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p1f5q8">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">I would recommend this course to other students.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p1f5q8" id="p1f5q8_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p1f5q8" id="p1f5q8_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked" name="p1f5q8" id="p1f5q8_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p1f5q8" id="p1f5q8_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p1f5q8" id="p1f5q8_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
</tbody>
</table>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="formrow f1">
<div id="p1f6" class="field imageElement n1">
<div class="staticcontrol">
<div>
<img class="image pngfix" alt="Form Image Element" src="line.png" width="620" height="10" style="max-width:620px;"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="formrow f1">
<div id="p1f7" class="field likertField n1">
<div class="caption capabove alignleft">
<label class="fieldlabel" for="p1f7c"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="font-weight:bold;color:#716D5D" xml:space="preserve">Materials</span></span></span></label>
<div class="null"></div>
</div>
<div class="control capabove">
<table id="p1f7c" class="cttable">
<thead>
<tr>
<th>&nbsp;</th><td>
<div>Strongly Disagree</div>
</td><td>
<div>Disagree</div>
</td><td>
<div>Neutral</div>
</td><td>
<div>Agree</div>
</td><td>
<div>Strongly Agree</div>
</td>
</tr>
</thead>
<tbody>
<tr class="ctqrow altrow" id="p1f7q1">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The objectives and requirements for the course were clearly stated.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p1f7q1" id="p1f7q1_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p1f7q1" id="p1f7q1_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked" name="p1f7q1" id="p1f7q1_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p1f7q1" id="p1f7q1_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p1f7q1" id="p1f7q1_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p1f7q2">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">The textbooks and learning materials were relevant and useful.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p1f7q2" id="p1f7q2_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p1f7q2" id="p1f7q2_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked" name="p1f7q2" id="p1f7q2_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p1f7q2" id="p1f7q2_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p1f7q2" id="p1f7q2_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow altrow" id="p1f7q3">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">Tests and assignments were based on material covered in class.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p1f7q3" id="p1f7q3_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p1f7q3" id="p1f7q3_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked"  name="p1f7q3" id="p1f7q3_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p1f7q3" id="p1f7q3_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p1f7q3" id="p1f7q3_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
</tbody>
</table>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<input id="nextbutton" type="button" class="navbtn" value="Next" onclick="sub(this.form);"/><span id="pagecountspan">Page 1 of 2</span>
</div>
<div id="progressbarblock">
<span id="progressbartext" class="progressbartext">0% Complete</span>
<div id="progressbar" class="progressbar progressbarcorner">
<div id="progressbarvalue" class="progressbarvalue progressbarcorner"></div>
</div>
</div>

</form>
<div class="jqmWindow" id="pleasewait"></div>
<div class="jqmWindowSmall" id="saveformprogress"></div>

<div id="saveformdialog"></div>

</body>
</html>
