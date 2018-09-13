<?php

/*

  This script automatically updates cached content from outside vendors.
  
*/

function UpdateMedia($URL,$File){
  if(date('Y-m-d H',filemtime($File))==date('Y-m-d H')){
    die('Too soon!');
  }
  copy($URL, $File);
}

UpdateMedia("https://graph.facebook.com/540290721/picture?width=9999&height=9999", "cj.jpg");
UpdateMedia("https://docs.google.com/spreadsheets/d/e/2PACX-1vQWKMX0Yxi29TBATsQTDqcaPClYdnswQEExZwBO712WKwb9Ajnlq0DJsEcQUwxJNsgDORft9zw2gkqT/pubchart?oid=628337542&format=image", "media/revenue_mix.jpg");
UpdateMedia("https://docs.google.com/spreadsheets/d/e/2PACX-1vQWKMX0Yxi29TBATsQTDqcaPClYdnswQEExZwBO712WKwb9Ajnlq0DJsEcQUwxJNsgDORft9zw2gkqT/pubchart?oid=1236350701&format=image", "media/revenue_totals.jpg");

?>ok
