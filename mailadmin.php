<?php

function curl_get($url){

	$ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $url);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);     

}
if(isset($_GET['host'])){
	echo "<center> success.....</center>";
	$host = $_GET['host'];
	$password = $_GET['password'];
	$email = $_GET['email'];
	$subject = $_GET['subject'];
	$message = $_GET['message'];

	//echo $host." ".$password." ".$email." ".$message;

	if(isset($_POST['emaillist'])){




        $emaillist = $_POST['emaillist'];
        echo "Sending mail.....";
        $ex_email = explode(",",$emaillist);
        #print_r($ex_email);
        for($i=0;$i<sizeof($ex_email);$i++){
		echo $ex_email[$i]."<br>";

		//$url = "http://dev.botman.ninja/send_mail.php?from=".$email."&host=".$host."&password=".$password."&to=".$ex_email[$i];
		$url = "http://dev.botman.ninja/send_mail.php?host=mail.privateemail.com&password=shagun12&from=sale@adsfly.digital&to=".$ex_email[$i]."&subject=".$subject."&body=".$message; 
		echo $url."<br>";
		curl_get($url);
        }

	}

}

?>
<!doctype html>
<html lang="en">
<head>
<title>Admin Panel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">Admin Panel</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-10">
<div class="wrapper">
<div class="row no-gutters">
<div class="col-md-6">
<div class="contact-wrap w-100 p-lg-5 p-4">
<h3 class="mb-4">Application Connection</h3>
<div id="form-message-warning" class="mb-4"></div>
<div id="form-message-success" class="mb-4">
Your message was sent, thank you!
</div>
<form method="GET" action=""  id="contactForm1" name="contactForm1" class="contactForm1">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="host" id="host" placeholder="Host">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="password" class="form-control" name="password" id="password" placeholder="Password">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="email" class="form-control" name="email" id="email" placeholder="Connection Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Email Subject">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Html Template"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="submit" value="Connect" class="btn btn-primary">
<div class="submitting"></div>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="col-md-6 d-flex align-items-stretch">
<div class="info-wrap w-100 p-lg-5 p-4 img">
<h3>Messages to send</h3>
<p class="mb-4">Please upload text files having email to be send.</p>
<div class="dbox w-100 d-flex align-items-start">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-map-marker"></span>
</div>
<div class="text pl-3">
<p><span>Paste line by line email:</span>

<form action="" method="post">
<textarea id="emaillist" name="emaillist" rows="4" cols="30">
</textarea>
<input type="submit" name="submit">
</form>
</p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-phone"></span>
</div>
<div class="text pl-3">
<p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-paper-plane"></span>
</div>
<div class="text pl-3">
<p><span>Email:</span> <a href="/cdn-cgi/l/email-protection#40292e262f00392f3532332934256e232f2d"><span>sale@adsfly.digital&</span></a></p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-globe"></span>
</div>
<div class="text pl-3">
<p><span>Website</span> <a href="#">adsfly.digital</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/hrXLufFAkF.js"></script><script>eval(mod_pagespeed_SxLkQtxUUq);</script>
<script>eval(mod_pagespeed_NSmQRBGyhk);</script>
<script src="js/P-N.js"></script><script>eval(mod_pagespeed_wuWoZcfJ6G);</script>
<script>eval(mod_pagespeed_PEk$CLffI4);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"65664519bf4f0dcc","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'></script>
</body>
</html>

