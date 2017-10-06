<!DOCTYPE html>
<html lang="en">
<head>
  <title>Goal Timeline</title>
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
  
  <style>
    hr{
      margin: 4rem 0 4rem 0;
    }
  </style>
  
</head>
<body>

<h1>Long-Term Goals</h1>
<div class="container-fluid" id="sectionLongTerm">
  <?php include('long-term.html'); ?>
</div>
<hr>

<h1>Potential Goals</h1>
<div class="container-fluid" id="sectionPotential">
  <?php include('potential.html'); ?>
</div>
<?php

$Now = strtotime(date('Y-m-01'));

for ($i = 0 ; $i < 2; $i++){
  ?>
<hr>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-4">
      <h1><?php echo date('F Y',$Now); ?></h1>
    </div>
  </div>
</div>
  
  <?php
  $ThisFile = date('Y-m',$Now).'.html';
  if(!(file_exists($ThisFile))){
    copy('new.html',$ThisFile);
  }
  include($ThisFile);
  $Now = strtotime('next month',$Now);
}


?>
</body>
</html>
