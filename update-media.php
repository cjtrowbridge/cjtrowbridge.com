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

function (){
  $Sheet = file_get_contents("https://spreadsheets.google.com/feeds/list/1QiHfopOcjt34zO2PIvi4EpiD7ukdQ-7e4a5P9tYJIcs/od6/public/values?alt=json-in-script");
  
  $Cells = $Sheet->feed->entry;
  
  var_dump($Cells);
}

UpdateMedia("https://docs.google.com/spreadsheets/d/e/2PACX-1vQWKMX0Yxi29TBATsQTDqcaPClYdnswQEExZwBO712WKwb9Ajnlq0DJsEcQUwxJNsgDORft9zw2gkqT/pubchart?oid=628337542&format=image", "img/revenue_mix.jpg");
UpdateMedia("https://docs.google.com/spreadsheets/d/e/2PACX-1vQWKMX0Yxi29TBATsQTDqcaPClYdnswQEExZwBO712WKwb9Ajnlq0DJsEcQUwxJNsgDORft9zw2gkqT/pubchart?oid=1236350701&format=image", "img/revenue_totals.jpg");

UpdateMedia("https://graph.facebook.com/540290721/picture?width=9999&height=9999", "cj.jpg");
UpdateMedia("https://graph.facebook.com/540290721/picture?width=9999&height=9999", "img/cj.jpg");
UpdateMedia("https://graph.facebook.com/643280183/picture?width=9999&height=9999", "img/ben.jpg");
UpdateMedia("https://graph.facebook.com/1227603033/picture?width=9999&height=9999", "img/zach.jpg");
UpdateMedia("https://graph.facebook.com/797969965/picture?width=9999&height=9999", "img/jenny.jpg");

