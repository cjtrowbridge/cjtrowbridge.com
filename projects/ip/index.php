<?php

$ip = $_SERVER['REMOTE_ADDR'];
if(!(is_dir('cache'))){
  mkdir('cache');
}

$cacheFile='cache/'.$ip.'.txt';
if(file_exists($cacheFile)){
  $data = file_get_contents($cacheFile);
  if(isset($_GET['verbose'])){echo '<p>Found in cache.</p>';}
}else{
  $data = file_get_contents("http://ipinfo.io/{$ip}/json");
  file_put_contents($cacheFile,$data);
  if(isset($_GET['verbose'])){echo '<p>Fetched from API.</p>';}
}

$details = json_decode($data);
echo '<h1>'.$details->city.', '.$details->state.', '.$details->zip.' ('.$details->loc.')</h1>';
echo '<pre>';
var_dump($details);
echo '</pre>';
