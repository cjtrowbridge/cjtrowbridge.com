<?php

function round_up($number, $precision = 2){
	$fig = (int) str_pad('1', $precision, '0');
	return (ceil($number * $fig) / $fig);
}

?><!DOCTYPE html>
<html>
<head>
	<title>CJ Trowbridge</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	
	<link rel="icon" type="image/jpg" href="/cj.jpg">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4 col-sm-12">
					<img src="/cj.jpg" alt="Photo of CJ Trowbridge">
				</div>
				<div class="col-md-8 col-sm-12">
					<h1>CJ Trowbridge</h1>
					<p><b>Software Engineer</b><br><i>Smart-creative and <a href="/resume">award-winning</a> innovator, building technical solutions to business problems.</i></p>
					<hr>
					<p>I am doing <a href="//blog.cjtrowbridge.com/2017/05/02/the-levels-challenge-start-12-startups-in-12-months/" target="_blank">The Levels Challenge</a>, building 12 startup products in 12 months.
						<ol>
							<li><b><a href="https://securities.science/" target="_blank">Securities Science</a>:</b> Run SQL Queries agains historic stock data.</li>
							<li><b><a href="https://rsialert.com/" target="_blank">RSI Alert</a>:</b> Be alerted when RSI-14 drops below 30.</li>
							<li><b><a href="https://draupnr.io" target="_blank">Draupnr</a>:</b> Automatically generate static web sites based on feeds.</li>
							<li><b><a href="https://cronput.com/" target="_blank">CronPUT</a>:</b> Manages cron jobs.</li>
							<li><b><a href="https://condensr.io/" target="_blank">Condensr</a>:</b> Condense longform text.</li>
							<li><b><a href="https://exoticweapons.io/" target="_blank">Exotic Weapons</a>:</b> A blog about building passive income sources.</li>
							<li><b><a href="https://topstoryreview.com/" target="_blank">Top Story Review</a>: [RC-1]</b> An automatic parser and condenser of top news sources.</li>
							<li><b><a href="javascript:void(0);">Wearing Today</a>: [ALPHA]</b> Track what you wear on each day so you don't look like a schmuck wearing the same thing twice to a class or date.</li>
							<li><b><a href="javascript:void(0);">Little John</a>: [Pre-ALPHA]</b> A simple cryptocurrency trading app. (Think Robinhood but for Crypto)</li>
							<li><b><a href="javascript:void(0);">Subscriptions as a Service</a>: [ALPHA]</b> Manage user subscriptions simply. We handle everything for you with simple tools.</li>
							<li><b><a href="javascript:void(0);">Powerhouse CRM</a>: [ALPHA]</b> A powerful and free CRM platform.</li>
							<li>?</li>
							
						</ol>
					</p>
					<hr>
					<p>I am also currently exploring exotic income sources at <a href="https://exoticweapons.io/" target="_blank">ExoticWeapons.io</a>.</p>
					<p>I was born a <a href="//trowbridge.house" target="_blank">tenth generation</a> American entrepreneur, in the mountains of Oregon. With my life expectancy, I am <?php echo round((time()-599373240) / (60*60*24*365*78)*100); ?> percent through, and have <?php echo round(((599373240+60*60*24*365*78)-time())/(60*60*24*365),1); ?> years left.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 footer">
		<a href="//github.com/cjtrowbridge/" target="_blank">github</a>,
		<a href="/goals" target="_blank">goals</a>,
		<a href="//www.linkedin.com/in/cjtrowbridge" target="_blank">linkedin</a>, 
		<a href="//cjtrowbridge.com/resume/">resume</a>, 
		and <a href="//blog.cjtrowbridge.com" target="_blank">blog</a>.
	</div>
</body>
</html>
