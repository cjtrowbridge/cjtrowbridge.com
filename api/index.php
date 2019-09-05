<?php

/*

  CJ Trowbridge
  2019-09-05
  
  The purpose of this api is to deliver various non-static data to various apps and tools throughout this and other sites.

*/

require('Config.php');

//Figure out the route and set a global variable in case htaccess is not available.
if(!(isset($_GET['route']))){
  //If the route is not set via superglobal, then parse it from the REQUEST_URI
  $_GET['route'] = $_SERVER['REQUEST_URI'];
}
//Remove any extra slashes in the request
$_GET['route'] = trim($_GET['route'], '/');
//If there is a question mark, truncate the url we are parsing at that point.
$Temp = explode("?", $_GET['route']);
$_GET['route'] = $Temp[0];
//Make sure there is exactly one trailing slash in the route
if(!(substr($_GET['route'], -1)=='/')){$_GET['route'].='/';}
$RequestSegments = explode('/', $_GET['route']);
$Route = array();
foreach($RequestSegments as $RequestSegment){
  if(!(trim($RequestSegment)=='')){
    $Route[]=$RequestSegment;
  }
}
$this->Route = $Route;
//Clean up these variables
unset($Route, $RequestSegments, $RequestSegment);

function Route($Index){
  if(isset($Route[$Index])){
    return $Route[$Index];
  }else{
    return false;
  }
}
