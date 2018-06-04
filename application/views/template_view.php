<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<meta name="google" value="notranslate" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>registrationTest</title>
		<script src="/js/jquery-1.11.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/countdown.js" type="text/javascript"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML'></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
	</head>

<div id="timer"> </div>
	
<!--	<body oncopy="return false;" >-->
		<div id="wrapper">
			<div id="header">
		 <div class="image">
    </div>		
<div id="menu">	   
	<ul>
		<li class="first active"><a href="/">Main page</a></li>
		<li><a href="/registration">Registration</a></li>
		<li><a href="/personal">Personal</a></li>
		<li class="last"><a href="/login">Login</a></li>
	</ul>
	<br class="clearfix" />
	</div>
		</div>
		<div id="page">
			<div id="content">
				<div class="box">
					<?php include 'application/views/'.$content_view; ?>
				</div>
				<br class="clearfix" />
			</div>
			<br class="clearfix" />
		</div>
	</div>
</body>
</html>