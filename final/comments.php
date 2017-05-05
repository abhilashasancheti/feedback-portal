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

$sql = "SELECT q15,count(*) FROM formval  GROUP BY q15";
$res=mysql_query($sql);
$numrows = mysql_num_rows($res);
/*$r1="Strongly Disagree";
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
*/$a2_2=0;
$a2_5=0;
$a2_1=0;
$a2_3=0;
$a2_4=0;$x=0;
		while($rows = mysql_fetch_array($res))
		{      
			if($rows[0]!="")
             $cars[$x++]=$rows[0];    
      
           }  
     if($x<$numrows)
       {
       	   while ($x<$numrows)
       	   {
       	   	 $cars[$x++]="";
       	   }
       }		
?>		

<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>&bull; Response Chart&bull;</title>
<link rel="shortcut icon" type="image/x-icon" href="logo-iitg.gif">
<link rel="stylesheet" type="text/css" href="a1.css">
<link rel="stylesheet" type="text/css" href="a2.css">
<link rel="stylesheet" type="text/css" href="a3.css">
<script>

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
<!--<div id="infoheader" class="headerclass pagemargins">

</div>-->
<div id="header" class="headerclass pagemargins" style="background-color:#FFFFFF;">
<table width="100%" cellpadding="0px" cellspacing="0px" border="0px">
<col width="100%">
<tr align="center">
<td><img class="headerimg pngfix" alt="Header Image" src="a+.png" width="363" height="109" style="padding-bottom:10px;max-width:363px;"></td>
</tr>
<tr>
<td>
<div style="width:620px;"><span class="wordwrap"><span class="pspan arial" style="text-align:center;font-size:20px;"><span class="ispan" style="color:#716D5D" xml:space="preserve">• </span><span class="ispan" style="font-size:24px;color:#716D5D" xml:space="preserve"> </span><span class="timesnewroman" style="font-size:24px;color:#716D5D" xml:space="preserve">Comments/Suggestions</span><span class="ispan" style="font-size:24px;color:#716D5D" xml:space="preserve">  </span><span class="ispan" style="color:#716D5D" xml:space="preserve">•</span></span></span></div>
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

<div class="null"></div>
</div>
<div class="control capabove">
<table id="p2f1c" class="cttable">
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
<div class="null"></div>
</div>

<div>
<!--<textarea cols="18" rows="2" id="p2f2c" name="p2f2" class="fieldcontent">
	
?></textarea>-->
<div style="width:620px;"><span class="wordwrap"><span class="pspan arial" style="text-align:left;font-size:20px;">
	<span class="timesnewroman" style="font-size:20px;" xml:space="preserve">
		<?php
          for ($x=0;$x<$numrows;$x=$x+1)
				{ 
					if($x%2==0) 
						{ echo '<br>';
					// echo  " " . "•";
					 echo  "<p style='color:navy;'>" . "•" .$cars[$x] ;
                      // echo  "<p style='color:black text-align:right;'>" . "•" .$cars[$x] ;
					    }
					 else
					 	{ echo '<br>';
					// echo  " " . "•";
					 echo  "<p style='color:blue;'>" . "•" .$cars[$x] ;}
					// echo  $_SESSION['name'] .'<br>';

				}
				

?>
</span> </span><span class="ispan" style="color:#716D5D" xml:space="preserve"></span></span></div>
<div class="fielderror"></div>

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
<!--<input id="prevbutton" type="button" class="navbtn" value="Prev"><input id="nextbutton" type="button" class="navbtn" value="Prev" onclick="sub(this.form);"/ >
<input id="nextbutton" type="button" class="navbtn" value="Submit" onclick="sub1(this.form);" ><span id="pagecountspan">Page 2 of 2</span>-->
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
