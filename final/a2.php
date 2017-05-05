<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
 
//let's start the session
session_start();
 error_reporting(E_ERROR | E_PARSE);
$_SESSION['p1f2'] = $_POST['p1f2'];
$_SESSION['p1f1'] = $_POST['p1f1'];
$_SESSION['p1f5q1'] = $_POST['p1f5q1'];
$_SESSION['p1f5q2'] = $_POST['p1f5q2'];
$_SESSION['p1f5q3'] = $_POST['p1f5q3'];
$_SESSION['p1f5q4'] = $_POST['p1f5q4'];
$_SESSION['p1f5q5'] = $_POST['p1f5q5'];
$_SESSION['p1f5q6'] = $_POST['p1f5q6'];
$_SESSION['p1f5q7'] = $_POST['p1f5q7'];
$_SESSION['p1f5q8'] = $_POST['p1f5q8'];
$_SESSION['p1f7q1'] = $_POST['p1f7q1'];
$_SESSION['p1f7q2'] = $_POST['p1f7q2'];
$_SESSION['p1f7q3'] = $_POST['p1f7q3'];
 
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
	frm.action="a.php";
	frm.submit();
}
function sub1(frm)
{
	frm.action="a3.php";
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
<form id="form" method="post" action="a.php">
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

<div class="formrow f1">
<div id="p2f1" class="field likertField n1">
<div class="caption capabove alignleft">
<label class="fieldlabel" for="p2f1c"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="font-weight:bold;color:#716D5D" xml:space="preserve">Instructor</span></span></span></label>
<div class="null"></div>
</div>
<div class="control capabove">
<table id="p2f1c" class="cttable">
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
<tr class="ctqrow altrow" id="p2f1q1">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The instructor was qualified to teach this course.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p2f1q1" id="p2f1q1_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p2f1q1" id="p2f1q1_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked" name="p2f1q1" id="p2f1q1_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p2f1q1" id="p2f1q1_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p2f1q1" id="p2f1q1_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p2f1q2">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">The instructor demonstrated enthusiasm for the subject matter.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p2f1q2" id="p2f1q2_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p2f1q2" id="p2f1q2_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" checked="checked" name="p2f1q2" id="p2f1q2_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p2f1q2" id="p2f1q2_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p2f1q2" id="p2f1q2_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow altrow" id="p2f1q3">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The instructor was available and helpful to students outside of class.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p2f1q3" id="p2f1q3_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p2f1q3" id="p2f1q3_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" name="p2f1q3" checked="checked" id="p2f1q3_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p2f1q3" id="p2f1q3_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p2f1q3" id="p2f1q3_5"></td>
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
<!--</div>-->
<div class="formrow f1">
<div id="p2f2" class="field textField n1">
<div class="caption capabove alignleft">
<label class="fieldlabel" for="p2f2c"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="font-weight:bold;color:#716D5D" xml:space="preserve">Additional comments</span></span></span></label>
<div class="null"></div>
</div>
<div class="control capabove">
<div>
<textarea cols="20" rows="2" id="p2f2c" name="p2f2" class="fieldcontent"></textarea>
<div class="fielderror"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
</div>
</div>
<div id="footer" class="footermargins" style="background-color:#FFFFFF">
<div class="navbtncontainer">
<!--<input id="prevbutton" type="button" class="navbtn" value="Prev">--><input id="nextbutton" type="button" class="navbtn" value="Prev" onclick="sub(this.form);"/ >
<input id="nextbutton" type="button" class="navbtn" value="Submit" onclick="sub1(this.form);" ><span id="pagecountspan">Page 2 of 2</span>
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
