<?php

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
    <div class="col-xs-12">
      <div class="card">
        <div class="card-block">
          <div class="card-text">

  
            <div class="container">
              <div class="row">
                
                <div class="col-md-3 col-sm-12">
                  <a href="https://www.facebook.com/djcj88" target="_blank"><img src="/cj.jpg" alt="Photo of CJ Trowbridge"></a>
                  <!--
                    This photo automatically updates daily to my current Facebook photo!
                    https://github.com/cjtrowbridge/cjtrowbridge.com/blob/master/update-photo.php
                  -->
                </div><!--End col-md-3 col-sm-12-->
                
                <div class="col-md-9 col-sm-12">
                  <h1>CJ <a href="https://trowbridge.house/" style="color: #000;" target="_blank">Trowbridge</a></h1>
                  <p><b>Software Engineer & Entrepreneur</b><br><i><a href="/resume">Award-winning</a> innovator, building <a href="https://twitter.com/gonedark/status/898606946542120960" target="_blank">technical solutions</a> to business problems.</i></p>
                  <hr>
                  <div class="lifeEvent">
                    Full time student at two different colleges working on a Bachelors in Computer Science and then a Masters in Business Administration.
                  </div>
                  <div class="lifeEvent">
                    A <a href="https://dj-cj.com" target="_blank">professional DJ</a> for <?php echo (date('Y')-2003); ?> years.
                  </div>
                  <div class="lifeEvent">
                    Doing <a href="//blog.cjtrowbridge.com/2017/05/02/the-levels-challenge-start-12-startups-in-12-months/" target="_blank">The Levels Challenge</a>; building 12 startup products in 12 months.
                    <progress value="8" max="12"></progress>
                  </div>
                  <div class="lifeEvent">
                    My life expectancy is <?php echo $LifePercentage; ?>% elapsed, with <?php echo round(((599373240+60*60*24*365*78)-time())/(60*60*24*365),1); ?> years left.
                    <progress value="<?php echo $LifePercentage; ?>" max="78"></progress>
                  </div>
                </div><!--End col-md-9 col-sm-12-->
                
              </div><!--End row-->
            </div><!--End container-->
            
          </div><!--End card-text-->
        </div><!--End card-block-->
      </div><!--End card-->
    </div><!--End col-xs-12-->
  </div><!--End Row-->
</div><!--End Container-->
  
  <div class="text-muted text-xs-center">
    <a href="//github.com/cjtrowbridge/" target="_blank">github</a>,
    <a href="//www.linkedin.com/in/cjtrowbridge" target="_blank">linkedin</a>, 
    <a href="//cjtrowbridge.com/resume/">resume</a>, 
    and <a href="//blog.cjtrowbridge.com" target="_blank">blog</a>.
  </div>
</body>
</html>
