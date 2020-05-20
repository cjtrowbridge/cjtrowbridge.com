<?php

/*

  This script automatically updates cached content from outside vendors.
  
*/

function UpdateMedia($URL,$File){
  if(date('Y-m-d H',filemtime($File))==date('Y-m-d H')){
    echo '<p>Too soon for: <a href="'.$File.'">'.$File.'</a></p>';
    return false;
  }
  copy($URL, $File);
  echo '<p>Updated: <a href="'.$File.'">'.$File.'</a></p>';
}

function UpdateMRR(){
  if(date('Y-m-d H',filemtime( 'open/mrr.txt' ))==date('Y-m-d H')){
    echo '<p>Too soon for: <a href="open/mrr.txt">open/mrr.txt</a></p>';
    return false;
  }
  
  $File = file_get_contents("https://spreadsheets.google.com/feeds/list/1QiHfopOcjt34zO2PIvi4EpiD7ukdQ-7e4a5P9tYJIcs/od6/public/values/cre1l");
  $Start = "<gsx:total>";
  $Position = strpos($File, $Start) + strlen($Start);
  $Substring = substr($File,$Position);

  $EndPosition = strpos($Substring,"<");
  $MRR = substr($Substring, 0, $EndPosition);

  file_put_contents('open/mrr.txt', $MRR);
  echo '<p>Updated: <a href="open/mrr.txt">open/mrr.txt</a>: '.$NewMRR.'</p>';
  return;
}


UpdateMRR();

if(file_exists('Config.php')){
  include('Config.php');
  global $Config;
  foreach($Config as $Media){
    UpdateMedia(
      $Media['Source'],
      $Media['Destination']
    );
  }
}else{
  echo '<p>No extended configuration file found.</p>';
}
