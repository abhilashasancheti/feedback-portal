<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<?php

session_start();
error_reporting(E_ERROR | E_PARSE);
//$course=$_POST["course"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";
//$a2_1=0;
//$a2_2=0;
//$a2_3=0;
//$a2_4=0;
//$a2_5=0;

// Create connection
$conn = mysql_connect($servername, $username, $password);
$db =mysql_select_db($dbname,$conn);
// Check connection

$sql1 = "SELECT q12,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q12";
$res1=mysql_query($sql1);
/*$numrows = mysql_num_rows($res);
$r1="Strongly Disagree";
$r2="Disagree";
$r3="Neutral";
$r4="Agree";
$r0="";
$r5="Strongly Agree";
echo strlen($r1) .'<br>';
echo strlen($r2).'<br>';
echo strlen($r3).'<br>';
echo strlen($r4).'<br>';
echo strlen($r5).'<br>';
*/$a1_2=0;
$a1_5=0;
$a1_1=0;
$a1_3=0;
$a1_4=0;
		while($rows = mysql_fetch_assoc($res1))
		{/*
		             $a=strlen($rows['q12']); $b=$rows['count(*)']; 
		                if($a == 19)
		                 $a1_1=$b;
		                if($a==10)
		                 $a1_2=$b;
		                if($a==9)
		               	$a1_3=$b;
		                if($a==7)
		               	$a1_4=$b;
		                if($a==16)
		                $a1_5=$b;*/
		                    $a=$rows['q12']; $b=$rows['count(*)']; 
		                if($a== "Strongly Disagree")
		                  $a1_1=$b;
		                 		                if($a== "Disagree")
		                {	
		                   $a1_2=$b;
		                 }
		                if($a=="Neutral")
		                	{
		               	$a1_3=$b;
		            }
		                if($a=="Agree")
		               	{   	  	$a1_4=$b;
		               	}
		                if($a=="Strongly Agree")
		                  { // echo $a;
		                  	$a1_5=$b;
		                  }
		                  		}			
		//echo $a2_3;
		//echo $a2_4;
 
$sql2 = "SELECT q13,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q13";
$res2=mysql_query($sql2);		  
$a2_2=0;
$a2_5=0;
$a2_1=0;
$a2_3=0;
$a2_4=0;
		while($rows = mysql_fetch_assoc($res2))
		{
		            /* $a=strlen($rows['q13']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a2_1=$b;
		                if($a==10)
		                 $a2_2=$b;
		                if($a==9)
		               	$a2_3=$b;
		                if($a==7)
		               	$a2_4=$b;
		                if($a==16)
		                $a2_5=$b;*/	
		                $a=$rows['q13']; $b=$rows['count(*)']; 
		                if($a== "Strongly Disagree")
		                  $a2_1=$b;
		                 		                if($a== "Disagree")
		                {	
		                   $a2_2=$b;
		                 }
		                if($a=="Neutral")
		                	{
		               	$a2_3=$b;
		            }
		                if($a=="Agree")
		               	{   	  	$a2_4=$b;
		               	}
		                if($a=="Strongly Agree")
		                  { // echo $a;
		                  	$a2_5=$b;
		                  }	
		}          

 
$sql3 = "SELECT q14,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q14";
$res3=mysql_query($sql3);		  
$a3_2=0;
$a3_5=0;
$a3_1=0;
$a3_3=0;
$a3_4=0;
		while($rows = mysql_fetch_assoc($res3))
		{
		           /*  $a=strlen($rows['q14']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a3_1=$b;
		                if($a==10)
		                 $a3_2=$b;
		                if($a==9)
		               	$a3_3=$b;
		                if($a==7)
		               	$a3_4=$b;
		                if($a==16)
		                $a3_5=$b;*/
		                    $a=$rows['q14']; $b=$rows['count(*)']; 
		                if($a== "Strongly Disagree")
		                  $a3_1=$b;
		                 		                if($a== "Disagree")
		                {	
		                   $a3_2=$b;
		                 }
		                if($a=="Neutral")
		                	{
		               	$a3_3=$b;
		            }
		                if($a=="Agree")
		               	{   	  	$a3_4=$b;
		               	}
		                if($a=="Strongly Agree")
		                  { // echo $a;
		                  	$a3_5=$b;
		                  }				
		} 
?>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>&bull; Response Chart &bull;</title>
<link rel="shortcut icon" type="image/x-icon" href="logo-iitg.gif">
<link rel="stylesheet" type="text/css" href="a1.css">
<link rel="stylesheet" type="text/css" href="a2.css">
<link rel="stylesheet" type="text/css" href="a3.css">
<script>
function sub(frm)
{
	frm.action="comments.php";
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
<form id="form" method="post" action="a3.php">
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
<div style="width:620px;"><span class="wordwrap"><span class="pspan arial" style="text-align:center;font-size:20px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">• </span><span class="ispan" style="font-size:24px;color:#716D5D" xml:space="preserve"> </span><span class="timesnewroman" style="font-size:24px;color:#716D5D" xml:space="preserve">Response Chart</span><span class="ispan" style="font-size:24px;color:#716D5D" xml:space="preserve">  </span><span class="ispan" style="color:#716D5D" xml:space="preserve">•</span></span></span></div>
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
<!--
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>
<div class="null"></div>
</div>-->
<!--<div id="page2" class="formpage">-->
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
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a1_1;?></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a1_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a1_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a1_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a1_5;?></span></div></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p2f1q2">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">The instructor demonstrated enthusiasm for the subject matter.</span></span></span></div>
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a2_1;?></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a2_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a2_3;?></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a2_4;?></span></div></td>
<td class="last" title="Strongly Agree"<div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a2_5;?></span></div>></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow altrow" id="p2f1q3">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The instructor was available and helpful to students outside of class.</span></span></span></div>
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a3_1;?></span></div></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a3_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a3_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a3_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a3_5;?></span></div></td>
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
<label class="fieldlabel" for="p2f2c"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="font-weight:bold;color:#716D5D" xml:space="preserve"></span></span></span></label>
<div class="null"></div>
</div>
<div class="control capabove">
<div>
<!--<textarea cols="20" rows="2" id="p2f2c" name="p2f2" class="fieldcontent"><?php// echo "hello";?></textarea>-->
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

<!--<input id="prevbutton" type="button" class="navbtn" value="Prev">--><input id="nextbutton" type="button" class="navbtn" value="Comments" onclick="sub(this.form);" ><span id="pagecountspan">Page 2 of 2</span>
</div>
<div id="progressbarblock">
<span id="progressbartext" class="progressbartext">0% Complete</span>
<div id="progressbar" class="progressbar progressbarcorner">
<div id="progressbarvalue" class="progressbarvalue progressbarcorner"></div>
</div>
</div>
<!--<input class="black button" type="button" name="next" value="Go"  onclick="sub(this.form);"/>-->
</form>
<div class="jqmWindow" id="pleasewait"></div>
<div class="jqmWindowSmall" id="saveformprogress"></div>

<div id="saveformdialog"></div>

</body>
</html>
