<?php

function round_up($number, $precision = 2)
{
    $fig = (int) str_pad('1', $precision, '0');
    return (ceil($number * $fig) / $fig);
}


?><!DOCTYPE html>
<html>
<head>
	<title>Christopher Trowbridge</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	<link rel="icon" type="image/jpg" href="/cj.jpg">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4 col-sm-12">
					<img src="/christopher.jpg" alt="Photo of Christopher Trowbridge">
				</div>
				<div class="col-md-8 col-sm-12">
					<h1>Christopher Trowbridge</h1>
					<p>
						<b>Software Engineer</b><br>
						<i>Smart creative developer and award winning innovator, building solutions to shared problems.</i>
					</p>
					<hr>
					<p>
						Check out my blog post on <a href="https://blog.cjtrowbridge.com/people-who-inspire-me/" target="_blank">people who inspire me</a>.
					</p>
					<p>
						This year was my first burn. The Man burns in <?php echo round_up((strtotime('SEP 02, 2017')-time())/(60*60*24),0); ?> days. Check out my <a href="https://blog.cjtrowbridge.com/2016/09/17/burning-man-2016-360-videos/" target="_blank">360 videos</a>!
					</p>
					<p>
						I was born a <a href="//trowbridge.house" target="_blank">tenth generation</a> American entrepreneur, in the mountains of Oregon.
					</p>
					<p>
						The best way to get ahold of me is by email at <a href="mailto:chris.j.trowbridge@gmail.com">chris.j.trowbridge@gmail.com</a>.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 footer">
		Check out my 
		<a href="https://github.com/cjtrowbridge/" target="_blank">github</a>,
		<a href="//www.linkedin.com/in/cjtrowbridge" target="_blank">linkedin</a>, 
		<a href="//christophertrowbridge.com/resume/">resume</a>, 
		and <a href="//blog.cjtrowbridge.com" target="_blank">blog</a>.
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>
