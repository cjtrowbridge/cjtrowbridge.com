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
    
    <div class="col-md-10 col-sm-12"> 
      <br>
      <h1 style="white-space: nowrap;">CJ <a href="https://trowbridge.house/" style="color: #000;" target="_blank">Trowbridge</a></h1>
      <p><b>Software Engineer & Entrepreneur</b><br><i><a href="/resume">Award-winning</a> innovator, building <a href="https://twitter.com/gonedark/status/898606946542120960" target="_blank">technical solutions</a> to business problems.</i></p>
    </div>
                
    <div class="col-md-2 col-sm-12">
      <a href="https://www.facebook.com/djcj88" target="_blank"><img src="/cj.jpg" alt="CJ Trowbridge"></a>
    </div>
    
    
    <div class="col-xs-12 col-lg-6">
      <br>
      
      <div class="card">
        <div class="card-block">
          <div class="card-text">
            <h4>Current Academic Goals</h4>
            <p>
              <ul>
                <li>Bachelor's in Computer Science</li>
                <li>Master's in Business Administration</li>
              </ul>
            </p>
          </div>
        </div>
      </div><!--End Academics Card-->
    
    </div>
    <div class="col-xs-12 col-lg-6">
    
      <div class="card">
        <div class="card-block">
          <div class="card-text">
            <h4>Current Projects</h4>
            
            <div class="row no-gutters">
              <div class="col-xs-12 col-md-10">
                <p>My life expectancy is <?php echo $LifePercentage; ?>% elapsed, with <?php echo $YearsLeft; ?> years left before my return to the void.<p>
              </div>
              <div class="col-xs-12 col-md-2">
                <p><progress value="<?php echo $LifePercentage; ?>" max="100"></progress></p>
              </div>
            </div>

            <p>I am learning <a href="https://en.wikipedia.org/wiki/Go_(game)" target="_blank">Go</a> and enjoy Chess. I would love to meet more people interested in both.</p>
            <div class="row no-gutters">
              <div class="col-xs-12 col-md-10">
                <p>Doing <a href="//blog.cjtrowbridge.com/2017/05/02/the-levels-challenge-start-12-startups-in-12-months/" target="_blank">The Levels Challenge</a>; building 12 startup products in 12 months.</p>
              </div>
              <div class="col-xs-12 col-md-2">
                <p><progress value="8" max="12"></progress></p>
              </div>
            </div>
            
          </div>
        </div>
      </div><!--End Current Projects Card-->
      
      <div class="card">
        <div class="card-block">
          <div class="card-text">
            
            <h4>Social Justice</h4>
            
            <p>I am expanding my <?php echo date('Y')-2003; ?> year <a href="https://dj-cj.com" target="_blank">DJ business</a> to focus on social justice through professional fundraising and pro bono services for worthy causes.</p>
            
            <p><b>Here Are Some Worthy Causes To Which I Subscribe and Donate Monthly:</b>
              <div class="row">
                
                <div class="col-xs-12 col-md-8">
                  <b>ACLU:</b> a nonprofit whose mission is, 
                  <div class="blockquote">"To defend and preserve the individual rights and liberties guaranteed to every person in this country by the Constitution and laws of the United States."</div>
                </div>
                <div class="col-xs-12 col-md-4">
                  <a href="https://action.aclu.org/secure/aclu-first-line-defense-peoples-rights?s_src=UNV170101INA&ms=web_hero_trump_gol" target="_blank" class="btn btn-block btn-success">Pitch In a Few Bucks a Month<br >To The ACLU</a>
                </div>
                
                <div class="col-xs-12"><br></div>
                
                <div class="col-xs-12 col-md-8">
                  <b>Planetary Society:</b> a nonprofit founded by Carl Sagan and led by Bill Nye whose mission is, 
                  <div class="blockquote">"To inspire the people of Earth to explore other worlds, understand our own, and seek life elsewhere."</div>
                </div>
                <div class="col-xs-12 col-md-4">
                  <a href="https://secure.planetary.org/site/SPageNavigator/memberships.html" target="_blank" class="btn btn-block btn-success">Pitch In a Few Bucks a Month<br> To The Planetary Society</a>
                </div>
                
              </div>
            </p>
            
          </div>
        </div>
      </div><!--End Social Justice Card-->
      
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
