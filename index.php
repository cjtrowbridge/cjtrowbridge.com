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
      
      <h1 style="white-space: nowrap;">CJ <a href="https://trowbridge.house/" style="color: #000;" target="_blank">Trowbridge</a></h1>
      <p>Creating business solutions to shared problems.</p>
      
      <div class="card">
        <div class="card-block">
          <div class="card-text">
            
            <div class="row no-gutters">
              <div class="col-xs-12 col-md-10">
                <p>My life expectancy is <?php echo $LifePercentage; ?>% elapsed, with <?php echo $YearsLeft; ?> years left before my return to the void (hopefully).<p>
              </div>
              <div class="col-xs-12 col-md-2">
                <p><progress value="<?php echo $LifePercentage; ?>" max="100"></progress></p>
              </div>
            </div>
            
          </div><!--End Card-text-->
        </div><!--End Card-block-->
      </div><!--End Card-->
      
      <?php 
      $ManBurn = strtotime('September 1, 2018');
      if(time() < $ManBurn){
        $ManBurnCountdown = ceil( ( $ManBurn - time() ) / (60*60*24) );
      ?>
      
      <div class="card">
        <div class="card-block">
          <div class="card-text">
            
            <p>The man <a href="http://www.bmir.org/" target="_blank">burns</a> in <?php echo $ManBurnCountdown; ?> days!</p>
            <p><b>My Burning Man Address:</b></p>
            <p>
              <a href="http://www.playajoy.org/" target="_blank">Comfort and Joy</a>, 
              <b>7:30 and Dewey</b>, 
              <a href="https://en.wikipedia.org/wiki/Burning_Man" target="_blank">Black Rock City</a>, 
              <a href="https://en.wikipedia.org/wiki/Nevada" target="_blank">Nevada</a>, 
              <a href="https://en.wikipedia.org/wiki/United_States" target="_blank">United States</a>, 
              <a href="https://en.wikipedia.org/wiki/North_America" target="_blank">North America</a>, 
              <a href="https://en.wikipedia.org/wiki/Earth" target="_blank">Earth (Sol 3)</a>, 
              <a href="https://en.wikipedia.org/wiki/Solar_System" target="_blank">Sol System</a>, 
              <a href="https://en.wikipedia.org/wiki/Carina–Sagittarius_Arm" target="_blank">Carina–Sagittarius Arm</a>, 
              <a href="https://en.wikipedia.org/wiki/Milky_Way" target="_blank">Milky Way Galaxy</a>, 
              <a href="https://en.wikipedia.org/wiki/Local_Group" target="_blank">Local Group</a>, 
              <a href="https://en.wikipedia.org/wiki/Virgo_Cluster" target="_blank">Virgo Cluster</a>, 
              <a href="https://en.wikipedia.org/wiki/Laniakea_Supercluster" target="_blank">Laniakea Supercluster</a>,
              <a href="https://en.wikipedia.org/wiki/Universe" target="_blank">The Universe</a>.
            </p>
            <p>Come find me!</p>
            
          </div><!--End Card-text-->
        </div><!--End Card-block-->
      </div><!--End Card-->
      
      <?php
      }
      ?>
      
      <div class="card">
        <div class="card-block">
          <div class="card-text">
            
            <p>I just got back from a <a href="https://blog.cjtrowbridge.com" target="_blank">whirlwind tour</a> of Europe!</p>
            
          </div><!--End Card-text-->
        </div><!--End Card-block-->
      </div><!--End Card-->
      
      
      <div class="card">
        <div class="card-block">
          <div class="card-text">
            
            <div class="row no-gutters">
              <div class="col-xs-12 col-md-10">
                <p>I recently completed <a href="//blog.cjtrowbridge.com/2017/05/02/the-levels-challenge-start-12-startups-in-12-months/" target="_blank">The Levels Challenge</a>; building 12 startup products in 12 months.</p>
              </div>
              <div class="col-xs-12 col-md-2">
                <p><progress value="12" max="12"></progress></p>
              </div>
            </div>
            
          </div><!--End Card-text-->
        </div><!--End Card-block-->
      </div><!--End Card-->
      <div class="card">
        <div class="card-block">
          <div class="card-text">
            
            <div class="row no-gutters">
              <div class="col-xs-12 col-md-10">
                <p>I left the workforce to finally get my degree(s)!</p>
                <ol>
                  <li><a href="http://admission.universityofcalifornia.edu/transfer/general-education-igetc/igetc/index.html" target="_blank">IGETC</a> ✔</li>
                  <li><a href="http://web2.assist.org/web-assist/help/help-what_is_assist.html" target="_blank">Assist</a> ✔</li>
                  <li><a href="http://catalog.sierracollege.edu/departments/sociology/#degreescertificatestext" target="_blank">Associate's in Social Justice</a> ⏳</li>
                  <li>Bachelor's in Computer Science</li>
                  <li>Master's in Business Administration</li>
                </ol>
              </div>
              <div class="col-xs-12 col-md-2">
                <p><progress value="3" max="6"></progress></p>
              </div>
            </div>
            
          </div><!--End Card-text-->
        </div><!--End Card-block-->
      </div><!--End Card-->
      
      <div class="text-muted">
        <p>
          Check out my 
          <a href="//facebook.com/djcj88/" target="_blank">facebook</a>,
          <a href="//instagram.com/cjtrowbridge/" target="_blank">instagram</a>,
          <a href="//github.com/cjtrowbridge/" target="_blank">github</a>,
          <a href="//www.linkedin.com/in/cjtrowbridge" target="_blank">linkedin</a>, 
          <a href="//cjtrowbridge.com/resume/">resume</a>, 
          and <a href="//blog.cjtrowbridge.com" target="_blank">blog</a>.
        </p>
      </div>

      
    </div><!--End column 2-->
    
  </div><!--End row-->
</div><!--End Container-->
  

  
</body>
</html>
