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
//SELECT count(*) FROM `formval` WHERE instructor = "Saswata Shannigrahi" AND q5 = "Neutral" 
// Create connection
$conn = mysql_connect($servername, $username, $password);
$db =mysql_select_db($dbname,$conn);
// Check connection
$sql="SELECT count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi'";
$res=mysql_query($sql);
$rows = mysql_fetch_assoc($res);
$total=$rows['count(*)'];
$sql1 = "SELECT q1,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q1";//SELECT q1,count(*) FROM formval  GROUP BY q1";
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
		{
		            /* $a=strlen($rows['q1']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a1_1=$b;
		                if($a==10)
		                 $a1_2=$b;
		                if($a==9)
		               	$a1_3=$b;
		                if($a==7)
		               	$a1_4=$b;
		                if($a==16)
		                $a1_5=$b;	*/

                                 $a=$rows['q1']; $b=$rows['count(*)']; 
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
 
$sql2 = "SELECT q2,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q2";
$res2=mysql_query($sql2);		  
$a2_2=0;
$a2_5=0;
$a2_1=0;
$a2_3=0;
$a2_4=0;
		while($rows = mysql_fetch_assoc($res2))
		{
		           /*  $a=strlen($rows['q2']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a2_1=$b;
		                if($a==10)
		                 $a2_2=$b;
		                if($a==9)
		               	$a2_3=$b;
		                if($a==7)
		               	$a2_4=$b;
		                if($a==16)
		                $a2_5=$b;	
		}          */    $a=$rows['q2']; $b=$rows['count(*)']; 
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
		                  }		}	

 
$sql3 = "SELECT q3,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q3";
$res3=mysql_query($sql3);		  
$a3_2=0;
$a3_5=0;
$a3_1=0;
$a3_3=0;
$a3_4=0;
		while($rows = mysql_fetch_assoc($res3))
		{
		           /*  $a=strlen($rows['q3']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a3_1=$b;
		                if($a==10)
		                 $a3_2=$b;
		                if($a==9)
		               	$a3_3=$b;
		                if($a==7)
		               	$a3_4=$b;
		                if($a==16)
		                $a3_5=$b;	
		} */
		    $a=$rows['q3']; $b=$rows['count(*)']; 
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
		                  }		}	

$sql4 = "SELECT q4,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q4";
$res4=mysql_query($sql4);		  
$a4_2=0;
$a4_5=0;
$a4_1=0;
$a4_3=0;
$a4_4=0;
		while($rows = mysql_fetch_assoc($res4))
		{
		            /* $a=strlen($rows['q4']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a4_1=$b;
		                if($a==10)
		                 $a4_2=$b;
		                if($a==9)
		               	$a4_3=$b;
		                if($a==7)
		               	$a4_4=$b;
		                if($a==16)
		                $a4_5=$b;	
		} */
		    $a=$rows['q4']; $b=$rows['count(*)']; 
		                if($a== "Strongly Disagree")
		                  $a4_1=$b;
		                 		                if($a== "Disagree")
		                {	
		                   $a4_2=$b;
		                 }
		                if($a=="Neutral")
		                	{
		               	$a4_3=$b;
		            }
		                if($a=="Agree")
		               	{   	  	$a4_4=$b;
		               	}
		                if($a=="Strongly Agree")
		                  { // echo $a;
		                  	$a4_5=$b;
		                  }		}	

$sql5 = "SELECT q5,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q5";
$res5=mysql_query($sql5);		  
$a5_2=0;
$a5_5=0;
$a5_1=0;
$a5_3=0;
$a5_4=0;
		while($rows = mysql_fetch_assoc($res5))
		{
		            /* $a=strlen($rows['q5']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a5_1=$b;
		                if($a==10)
		                 $a5_2=$b;
		                if($a==9)
		               	$a5_3=$b;
		                if($a==7)
		               	$a5_4=$b;
		                if($a==16)
		                $a5_5=$b;	
		} */
		    $a=$rows['q5']; $b=$rows['count(*)']; 
		                if($a== "Strongly Disagree")
		                  $a5_1=$b;
		                 		                if($a== "Disagree")
		                {	
		                   $a5_2=$b;
		                 }
		                if($a=="Neutral")
		                	{
		               	$a5_3=$b;
		            }
		                if($a=="Agree")
		               	{   	  	$a5_4=$b;
		               	}
		                if($a=="Strongly Agree")
		                  { // echo $a;
		                  	$a5_5=$b;
		                  }		}	

$sql6 = "SELECT q6,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q6";
$res6=mysql_query($sql6);		  
$a6_2=0;
$a6_5=0;
$a6_1=0;
$a6_3=0;
$a6_4=0;
		while($rows = mysql_fetch_assoc($res6))
		{
		           /*  $a=strlen($rows['q6']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a6_1=$b;
		                if($a==10)
		                 $a6_2=$b;
		                if($a==9)
		               	$a6_3=$b;
		                if($a==7)
		               	$a6_4=$b;
		                if($a==16)
		                $a6_5=$b;	
		} */
		    $a=$rows['q6']; $b=$rows['count(*)']; 
		                if($a== "Strongly Disagree")
		                  $a6_1=$b;
		                 		                if($a== "Disagree")
		                {	
		                   $a6_2=$b;
		                 }
		                if($a=="Neutral")
		                	{
		               	$a6_3=$b;
		            }
		                if($a=="Agree")
		               	{   	  	$a6_4=$b;
		               	}
		                if($a=="Strongly Agree")
		                  { // echo $a;
		                  	$a6_5=$b;
		                  }		}	

$sql7 = "SELECT q7,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q7";
$res7=mysql_query($sql7);		  
$a7_2=0;
$a7_5=0;
$a7_1=0;
$a7_3=0;
$a7_4=0;
		while($rows = mysql_fetch_assoc($res7))
		{
		           /*  $a=strlen($rows['q7']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a7_1=$b;
		                if($a==10)
		                 $a_2=$b;
		                if($a==9)
		               	$a7_3=$b;
		                if($a==7)
		               	$a7_4=$b;
		                if($a==16)
		                $a7_5=$b;	
		} */
		    $a=$rows['q7']; $b=$rows['count(*)']; 
		                if($a== "Strongly Disagree")
		                  $a7_1=$b;
		                 		                if($a== "Disagree")
		                {	
		                   $a7_2=$b;
		                 }
		                if($a=="Neutral")
		                	{
		               	$a7_3=$b;
		            }
		                if($a=="Agree")
		               	{   	  	$a7_4=$b;
		               	}
		                if($a=="Strongly Agree")
		                  { // echo $a;
		                  	$a7_5=$b;
		                  }		}	

$sql8 = "SELECT q8,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q8";
$res8=mysql_query($sql8);		  
$a8_2=0;
$a8_5=0;
$a8_1=0;
$a8_3=0;
$a8_4=0;
		while($rows = mysql_fetch_assoc($res8))
		{
		            /* $a=strlen($rows['q8']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a8_1=$b;
		                if($a==10)
		                 $a8_2=$b;
		                if($a==9)
		               	$a8_3=$b;
		                if($a==7)
		               	$a8_4=$b;
		                if($a==16)
		                $a8_5=$b;	
		} */
		    $a=$rows['q8']; $b=$rows['count(*)']; 
		                if($a== "Strongly Disagree")
		                  $a8_1=$b;
		                 		                if($a== "Disagree")
		                {	
		                   $a8_2=$b;
		                 }
		                if($a=="Neutral")
		                	{
		               	$a8_3=$b;
		            }
		                if($a=="Agree")
		               	{   	  	$a8_4=$b;
		               	}
		                if($a=="Strongly Agree")
		                  { // echo $a;
		                  	$a8_5=$b;
		                  }		}	

$sql9 = "SELECT q9,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q9";
$res9=mysql_query($sql9);		  
$a9_2=0;
$a9_5=0;
$a9_1=0;
$a9_3=0;
$a9_4=0;
		while($rows = mysql_fetch_assoc($res9))
		{
		            /* $a=strlen($rows['q9']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a9_1=$b;
		                if($a==10)
		                 $a9_2=$b;
		                if($a==9)
		               	$a9_3=$b;
		                if($a==7)
		               	$a9_4=$b;
		                if($a==16)
		                $a9_5=$b;	
		} */
		    $a=$rows['q9']; $b=$rows['count(*)']; 
		                if($a== "Strongly Disagree")
		                  $a9_1=$b;
		                 		                if($a== "Disagree")
		                {	
		                   $a9_2=$b;
		                 }
		                if($a=="Neutral")
		                	{
		               	$a9_3=$b;
		            }
		                if($a=="Agree")
		               	{   	  	$a9_4=$b;
		               	}
		                if($a=="Strongly Agree")
		                  { // echo $a;
		                  	$a9_5=$b;
		                  }		}	

$sql10 = "SELECT q10,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q10";
$res10=mysql_query($sql10);		  
$a10_2=0;
$a10_5=0;
$a10_1=0;
$a10_3=0;
$a10_4=0;
		while($rows = mysql_fetch_assoc($res10))
		{      /*
		             $a=strlen($rows['q10']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a10_1=$b;
		                if($a==10)
		                 $a10_2=$b;
		                if($a==9)
		               	$a10_3=$b;
		                if($a==7)
		               	$a10_4=$b;
		                if($a==16)
		                $a10_5=$b;	
		} */
		    $a=$rows['q10']; $b=$rows['count(*)']; 
		                if($a== "Strongly Disagree")
		                  $a10_1=$b;
		                 		                if($a== "Disagree")
		                {	
		                   $a10_2=$b;
		                 }
		                if($a=="Neutral")
		                	{
		               	$a10_3=$b;
		            }
		                if($a=="Agree")
		               	{   	  	$a10_4=$b;
		               	}
		                if($a=="Strongly Agree")
		                  { // echo $a;
		                  	$a10_5=$b;
		                  }		}	

$sql11 = "SELECT q11,count(*) FROM formval WHERE instructor = 'Saswata Shannigrahi' Group by q11";
$res11=mysql_query($sql11);		  
$a11_2=0;
$a11_5=0;
$a11_1=0;
$a11_3=0;
$a11_4=0;
		while($rows = mysql_fetch_assoc($res11))
		{
		          /*   $a=strlen($rows['q11']); $b=$rows['count(*)']; 
		                if($a==19)
		                 $a11_1=$b;
		                if($a==10)
		                 $a11_2=$b;
		                if($a==9)
		               	$a11_3=$b;
		                if($a==7)
		               	$a11_4=$b;
		                if($a==16)
		                $a11_5=$b;	
		} */
		    $a=$rows['q11']; $b=$rows['count(*)']; 
		                if($a== "Strongly Disagree")
		                  $a11_1=$b;
		                 		                if($a== "Disagree")
		                {	
		                   $a11_2=$b;
		                 }
		                if($a=="Neutral")
		                	{
		               	$a11_3=$b;
		            }
		                if($a=="Agree")
		               	{   	  	$a11_4=$b;
		               	}
		                if($a=="Strongly Agree")
		                  { // echo $a;
		                  	$a11_5=$b;
		                  }		}	
?>

<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>&bull;Response Chart &bull;</title>
<link rel="shortcut icon" type="image/x-icon" href="image/logo-iitg.gif">
<link rel="stylesheet" type="text/css" href="styles/a1.css">
<link rel="stylesheet" type="text/css" href="styles/a2.css">
<link rel="stylesheet" type="text/css" href="styles/a3.css">
<script>
function sub(frm)
{
	frm.action="response4.php";
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
<form id="form" method="post" action="response4.php">
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
<div id="page1" class="formpage" style="display:block;">
<div class="formrow f1 f2">
<div id="p1f1" class="field textField n1">
<div class="caption capabove alignleft">
<label class="fieldlabel" for="p1f1c"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="font-weight:bold;color:#716D5D" xml:space="preserve">Course Name </span></span></span></label>
<div class="null"></div>
</div>
<div class="control capabove">
<div>
<input type="text" id="p1f1c" name="p1f1" value="<?php echo $_SESSION['coursename']; ?>"<class="fieldcontent">
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
<input type="text" id="p1f2c" name="p1f2" value="<?php echo $_SESSION['tname']; ?>"class="fieldcontent">
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
<div class="staticcontrol"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:center;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">Total number of Feedbacks.: <?php echo $total;?></span></span></span></div>
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
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a1_1;?></span></div></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a1_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a1_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a1_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a1_5;?></span></div></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p1f5q2">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">I was academically prepared for this course.</span></span></span></div>
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a2_1;?></span></div>
</td><td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a2_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a2_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a2_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a2_5;?></span></div></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow altrow" id="p1f5q3">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The class size was appropriate.</span></span></span></div>
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a3_1;?></span></div></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a3_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a3_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a3_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a3_5;?></span></div></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p1f5q4">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">The classes started and ended on time.</span></span></span></div>
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a4_1;?></span></div></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a4_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a4_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a4_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a4_5;?></span></div></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow altrow" id="p1f5q5">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The course increased my knowledge of the subject matter.</span></span></span></div>
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a5_1;?></span></div></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a5_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a5_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a5_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a5_5;?></span></div></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p1f5q6">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">The course increased my interest in the subject matter.</span></span></span></div>
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a6_1;?></span></div></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a6_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a6_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a6_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a6_5;?></span></div></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow altrow" id="p1f5q7">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The overall quality of this course was excellent.</span></span></span></div>
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a7_1;?></span></div></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a7_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a7_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a7_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a7_5;?></span></div></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p1f5q8">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">I would recommend this course to other students.</span></span></span></div>
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a8_1;?></span></div></td>
<td title="Disagree"<div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a8_2;?></span></div>></td>
<td title="Neutral"<div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a8_3;?></span></div>></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a8_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a8_5;?></span></div></td>
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
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a9_1;?></span></div></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a9_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a9_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a9_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a9_5;?></span></div></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p1f7q2">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">The textbooks and learning materials were relevant and useful.</span></span></span></div>
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a10_1;?></span></div></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a10_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a10_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a10_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#716D5D;"><?php echo $a10_5;?></span></div></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow altrow" id="p1f7q3">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">Tests and assignments were based on material covered in class.</span></span></span></div>
</th><td title="Strongly Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a11_1;?></span></div></td>
<td title="Disagree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a11_2;?></span></div></td>
<td title="Neutral"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a11_3;?></span></div></td>
<td title="Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a11_4;?></span></div></td>
<td class="last" title="Strongly Agree"><div><span class="timesnewroman" style="text-align:left;font-size:14px;color:#FFFFFF;"><?php echo $a11_5;?></span></div></td>
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
<!--<div id="page2" class="formpage">
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
</td><td
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
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p2f1q1" id="p2f1q1_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p2f1q1" id="p2f1q1_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" name="p2f1q1" id="p2f1q1_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p2f1q1" id="p2f1q1_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p2f1q1" id="p2f1q1_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow" id="p2f1q2">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">The instructor demonstrated enthusiasm for the subject matter.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p2f1q2" id="p2f1q2_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p2f1q2" id="p2f1q2_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" name="p2f1q2" id="p2f1q2_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p2f1q2" id="p2f1q2_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p2f1q2" id="p2f1q2_5"></td>
</tr>
<tr class="ctqrow">
<th class="fielderror" colspan="6"></th>
</tr>
<tr class="ctqrow altrow" id="p2f1q3">
<th>
<div class="ctqlabel"><span class="wordwrap"><span class="pspan timesnewroman" style="text-align:left;font-size:14px;"><span class="ispan" style="color:#FFFFFF" xml:space="preserve">The instructor was available and helpful to students outside of class.</span></span></span></div>
</th><td title="Strongly Disagree"><input type="radio" class="fieldcontent ctd" value="Strongly Disagree" name="p2f1q3" id="p2f1q3_1"></td><td title="Disagree"><input type="radio" class="fieldcontent ctd" value="Disagree" name="p2f1q3" id="p2f1q3_2"></td><td title="Neutral"><input type="radio" class="fieldcontent ctd" value="Neutral" name="p2f1q3" id="p2f1q3_3"></td><td title="Agree"><input type="radio" class="fieldcontent ctd" value="Agree" name="p2f1q3" id="p2f1q3_4"></td><td class="last" title="Strongly Agree"><input type="radio" class="fieldcontent ctd" value="Strongly Agree" name="p2f1q3" id="p2f1q3_5"></td>
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
<input id="prevbutton" type="button" class="navbtn" value="Prev">--><input id="nextbutton" type="button" class="navbtn" value="Next" onclick="sub(this.form);"/><span id="pagecountspan">Page 1 of 2</span>
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