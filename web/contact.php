<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php
		  // if submitted form process and send mail
		  if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
			// set the variables
			$realname = "";
			$email = "";
			$feedback = "";
			$sendto = "bdcpromotions@gmail.com";
			$from = "";
			$subject = "";
			$message = "";
		  }
		?>
		<title>Be DC &ndash; Home</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link rel="stylesheet" href="images/styles.css" type="text/css" />
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-19579756-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
	</head>
	<body id="home" >
		<div id="header" >
			<div class="wrap">
				<ul>
					<li><a href="http://www.b-dc.info/index.html" STYLE="TEXT-DECORATION: NONE">Home</a></li>
					<li><a href="http://www.b-dc.info/about.html" STYLE="TEXT-DECORATION: NONE">About</a></li>
					<li><a href="http://www.b-dc.info/contact.php" STYLE="TEXT-DECORATION: NONE">Contact</a></li>
				</ul>
			</div>
		</div><!--end #header-->
		<div id="promo">
			<div class="wrap">
			<table><tr><td valign=top>
				<h2>Be of help.</h2>
<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
	$realname = $_POST['realname']; 
	$email = $_POST['email']; 
	$message = $_POST['feedback']; 
	$subject = "Feedback from $realname. Email-address: $email";
	
	
	// send the email
	mail($sendto, $subject, $message, $email);

	echo("<p>Thank you very much for your feedback and support.</p>\n");
	}
	else {
?>
<!-- ***  START HTML FORM -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="POST">
  <table cellpadding="4" cellspacing="0" border="0">
	<tr><td><b>Name: </b></td><td><input type="text" name="realname" size="25"></td></tr>
	<tr><td><b>Email:</b></td><td><input type="text" name="email" size="25"></td></tr>
	<tr><td colspan=2><b>Feedback:</b><br />
		<textarea name="feedback" rows="4" cols="40" wrap="physical"></textarea>
	</td></tr>
	<tr><td colspan="2" align="right"><input type="submit" value="Send Feedback"></td></tr>
  </table>
  </form>
<!-- *** END HTML FORM -->

<?php } ?>
			</td><td>
			</td><td>
				<a href="http://www.b-dc.info/index.html">
				<img src="images/bdc_logo_380px.png" BORDER=0/>
				</a>
			</td></tr></table>
			</div>
		</div><!--end #promo-->
		<div id="cta">
			<div class="wrap">
				<a/>  </a>
			</div>
		</div>
		<div id="footer">
			<div class="wrap">
				<p>Copyright &copy; 2015. All Rights Reserved. The BeDC logo is trademarked</p>
			</div>
		</div>
	</body>
</html>