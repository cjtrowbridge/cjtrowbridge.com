<!DOCTYPE html>
<html lang="en">
<head>
  <title>Goal Timeline</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <link rel="icon" type="image/jpg" href="/cj.jpg">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  
  <style>
    body{
      background-color: #F8F8F8;
      padding-top: 2rem;
    }
    ul.tree, ul.tree ul {
     list-style-type: none;
     background: url(vline.png) repeat-y;
     margin: 0;
     padding: 0;
   }
   
   ul.tree ul {
     margin-left: 10px;
   }

   ul.tree li {
     margin: 0;
     padding: 0 12px;
     line-height: 20px;
     background: url(/img/node.png) no-repeat;
     color: #369;
     font-weight: bold;
   }

   ul.tree li.last {
     background: #fff url(/img/lastnode.png) no-repeat;
   }
  </style>
  <script>
    $(document).ready(function () {
      $('ul.tree li:last-child').addClass('last');
    });
  </script>
  
</head>
<body>
  
<div class="container">
  <div class="row">
    <div class="col-xs-12">

        <div class="card">
        <div class="card-block">
          <div class="card-text">
            <?php
              $HTML = file_get_contents('https://blog.cjtrowbridge.com/goals/');
              $HTML = stristr($HTML,'<main');
              $EndPos = strpos($HTML,'</main>');
              $HTML = substr($HTML,0,$EndPos);
              $HTML = str_replace('<ul>','<ul class="tree">',$HTML);
              /*
              $HTML = stristr($HTML,'<div class="entry-content">');
              $EndPos = strpos($HTML,'<div class="entry-content">'.PHP_EOL.'			</div><!-- .entry-content -->');
              $HTML = substr($HTML,0,$EndPos);
              */
              echo $HTML;
            ?>
          </div>
        </div>
      </div>
      
    </div><!--End col-xs-12-->
  </div><!--End Row-->
</div><!--End Container-->  
  
<?php

$Now = strtotime(date('Y-m-01'));

for ($i = 0 ; $i < 6; $i++){
  ?>
  
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      
      <div class="card">
        <div class="card-block">
          <div class="card-text">
            
            <h1><a href="https://github.com/cjtrowbridge/cjtrowbridge.com/blob/master/goals/<?php echo date('Y-m',$Now); ?>.html" style="color: #000;"><?php echo date('F Y',$Now); ?></a></h1>
            <?php
              $ThisFile = date('Y-m',$Now).'.html';
              if(file_exists($ThisFile)){
                include($ThisFile);
              }else{
                echo '<p><i>No goals set yet.</i></p>';
              }
              
            ?>
            
          </div><!--End card-text-->
        </div><!--End card-block-->
      </div><!--End card-->
    </div><!--End col-xs-12-->
  </div><!--End Row-->
</div><!--End Container-->

  <?php
  $Now = strtotime('next month',$Now);
}

?>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="card">
        <div class="card-block">
          <div class="card-text">
            
            <h1><a href="https://github.com/cjtrowbridge/cjtrowbridge.com/blob/master/goals/long-term.html" style="color: #000;">Long-Term Goals</a></h1>
            <?php include('long-term.html'); ?>
            
          </div><!--End card-text-->
        </div><!--End card-block-->
      </div><!--End card-->
    </div><!--End col-xs-12-->
  </div><!--End Row-->
</div><!--End Container-->
</body>
</html>
