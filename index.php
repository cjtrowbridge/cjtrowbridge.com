<?php

$YearsLeft = round(((599373240+60*60*24*365*78)-time())/(60*60*24*365),1);
$LifePercentage = round((time()-599373240) / (60*60*24*365*78)*100);

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
    
    <div class="col-md-6 col-sm-12"><!--Begin Column 1-->
      <a href="https://www.facebook.com/djcj88" target="_blank"><img src="/cj.jpg" alt="CJ Trowbridge"></a>
    </div><!--End Column 1-->
    
    <div class="col-md-6 col-sm-12"><!--Begin Column 2-->
      
      <div class="card">
        <div class="card-block">
          <div class="card-text">
            
            <div class="row no-gutters">
              <div class="col-xs-12">
                <h1 style="white-space: nowrap;">CJ <a href="https://trowbridge.house/" style="color: #000;" target="_blank">Trowbridge</a></h1>
                <p><b>Software Engineer & Entrepreneur</b><br><i><a href="/resume">Award-winning</a> innovator, building <a href="https://twitter.com/gonedark/status/898606946542120960" target="_blank">technical solutions</a> to business problems.</i></p>
              </div>
              <div class="col-xs-12 col-md-10">
                <p>My life expectancy is <?php echo $LifePercentage; ?>% elapsed, with <?php echo $YearsLeft; ?> years left before my return to the void (hopefully).<p>
              </div>
              <div class="col-xs-12 col-md-2">
                <p><progress value="<?php echo $LifePercentage; ?>" max="100"></progress></p>
              </div>
            </div>

            <p>I just got back from a <a href="https://blog.cjtrowbridge.com" target="_blank">whirlwind tour</a> of Europe!</p>
            <div class="row no-gutters">
              <div class="col-xs-12 col-md-10">
                <p>I'm doing <a href="//blog.cjtrowbridge.com/2017/05/02/the-levels-challenge-start-12-startups-in-12-months/" target="_blank">The Levels Challenge</a>; building 12 startup products in 12 months.</p>
              </div>
              <div class="col-xs-12 col-md-2">
                <p><progress value="9" max="12"></progress></p>
              </div>
            </div>
            
            
            <div class="row no-gutters">
              <div class="col-xs-12 col-md-10">
                <p>I left the workforce to persue a Bachelor's in Computer Science and then a Masters in Business Administration.</p>
                <ol>
                  <li>✔IGETC</li>
                  <li>✔Assist</li>
                  <li>B.S. in Computer Science</li>
                  <li>MBA</li>
                </ol>
              </div>
              <div class="col-xs-12 col-md-2">
                <p><progress value="2" max="4"></progress></p>
              </div>
            </div>
            
            
            <div class="text-muted">
              <p>
                Check out my <a href="//github.com/cjtrowbridge/" target="_blank">github</a>,
                <a href="//www.linkedin.com/in/cjtrowbridge" target="_blank">linkedin</a>, 
                <a href="//cjtrowbridge.com/resume/">resume</a>, 
                and <a href="//blog.cjtrowbridge.com" target="_blank">blog</a>.
              </p>
            </div>
            
            
          </div><!--End Card-text-->
        </div><!--End Card-block-->
      </div><!--End Card-->
      
    </div><!--End column 2-->
    
  </div><!--End row-->
</div><!--End Container-->
  

  
</body>
</html>
