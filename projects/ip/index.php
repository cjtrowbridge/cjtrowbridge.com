<?php

if(isset($_GET['ip'])){
  echo GetUserLocation($_GET['ip']);
}else{
  echo GetUserLocation();
}

function GetUserLocation($IP = false, $Coordinates = false){

  if($IP == false){
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  
  if(!(is_dir('cache'))){
    mkdir('cache');
  }

  $cacheFile='cache/'.$ip.'.txt';
  if(file_exists($cacheFile)){
    $data = file_get_contents($cacheFile);
    //if(isset($_GET['verbose'])){echo '<p>Found in cache.</p>';}
  }else{
    $data = file_get_contents("http://ipinfo.io/{$ip}/json");
    file_put_contents($cacheFile,$data);
    //if(isset($_GET['verbose'])){echo '<p>Fetched from API.</p>';}
  }

  $details = json_decode($data);

  if($Coordinates){
    return $details->loc;
  }else{
    return $details->city.', '.$details->region.', '.$details->postal;
  }
}
