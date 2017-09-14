<!DOCTYPE html>
<html lang="en">
<head>
  <title>Goals</title>
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
    h1{
      padding-bottom: 1em;
    }
    #sectionCurrent,
    #sectionLongTerm,
    #sectionPotential{
      min-height: 1080px;
    }
  </style>
  
</head>
<body>

<h1><a style="float: right;" href="https://github.com/cjtrowbridge/cjtrowbridge.com/tree/master/goals" target="_blank">Github</a>Current Goals</h1>
<div class="container-fluid" id="sectionCurrent">
  <?php include('current.html'); ?>
</div>
<hr>

<h1>Long-Term Goals</h1>
<div class="container-fluid" id="sectionLongTerm">
  <?php include('long-term.html'); ?>
</div>
<hr>

<h1>Potential Goals</h1>
<div class="container-fluid" id="sectionPotential">
  <?php include('potential.html'); ?>
</div>

</body>
</html>
