<html>
<head>
        <title>Course Feedback</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
		<link rel="shortcut icon" href="images/logo-iitg.gif" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />

		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>



		<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
	
	</head>
<body>
	
	<div class="main">
      <img src="images/iitg.gif" alt="IIT Guwahati">
			<h1>Course Feedback </h1>
			<div class="wrapper">
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
					<form class="register" action="insert.php" method="post">
						<h3>Change Password</h3>
						<div class="column">
							<div>
								<label>Name:</label>
								<input type="text" name="name"/>
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Webmail:(@iitg.ernet.in)</label>
								<input type="text" name="username"/>
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>New Password:</label>
								<input type="password" name="npass"/>
								<span class="error">This is an error</span>
							</div>
							
						</div>
						<div class="column">
							<div>
								<label>Roll No. :</label>
								<input type="text" name="rollno"/>
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Old Password:</label>
								<input type="password" name="password"/>
								<span class="error">This is an error</span>
							</div>
								<div>
								<label>Retype Password:</label>
								<input type="password" name="npass1"/>
								<span class="error">This is an error</span>
							</div>
						</div>
						<div class="bottom">
							
							<input type="submit" value="Change" name="submit" />
							<a href="index.php" rel="login" class="linkform">You have an account already? Log in here</a>
							<div class="clear"></div>
						</div>
					</form>

<form class="login active" action="login_final1.php" method="post">
						<h3>Login</h3>
						<div >
							<label>Username:</label>
							<input type="text" name="username" placeholder="your webmail-id"/>
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Password: <a href="forgot_password.php" rel="forgot_password" class="forgot linkform">Forgot your password?</a></label>
							<input type="password" name="password" placeholder="your password"/>
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Login Type: </label>
							<!--<input type="text" />-->
							<select name="login">
 						    <option value="--select--" selected>--select--</option>
  							<option value="Student">Student</option> 
  							<option value="Faculty">Faculty</option>
  							<option value="Admin">Admin</option>
   							</select>
							<span class="error">This is an error</span>
						</div>
						<!--<div>
							<label>Department </label>
						
							<select name="dept">
 						    <option value="--select--" selected>--select--</option>
  							<option value="CSE">CSE</option> 
  							<option value="MNC">MNC</option>
  							
   							</select>
							<span class="error">This is an error</span>
						</div>-->
						<div>
							<label for="message" text-align="center">Enter the code below:</label>
							<img src="captcha_code_file.php?rand=<?php echo rand(); ?>"id="captchaimg" style="margin-left:50px;">
							
							<input id="6_letters_code" name="6_letters_code" type="text"> 
							<p style="text-align:center;"> Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</p>
						</div>
						<div class="bottom">
							<div class="remember"><input type="checkbox" /><span>Keep me logged in</span></div>
							<input type="submit" value="Login" name="submit"></input>
							<a href="index.php" rel="register" class="linkform">Change your Password, Click here</a>
							<div class="clear"></div>
						</div>
					</form>
					
					<form class="forgot_password">
						<h3>Forgot Password</h3>
						<div>
							<label>Username or Email:</label>
							<input type="text" />
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							<input type="submit" value="Send reminder"></input>
							<a href="index.php" rel="login" class="linkform">Suddenly remebered? Log in here</a>
							<a href="register.php" rel="register" class="linkform">You don't have an account? Register here</a>
							<div class="clear"></div>
						</div>
					</form>
				</div>
				<div class="clear"></div>
			</div>
			
		</div>
		</div>

					<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="forgot1.js"></script>

</body>
</html>