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

UpdateMedia("https://graph.facebook.com/540290721/picture?width=9999&height=9999", "cj.jpg");
UpdateMedia("https://docs.google.com/spreadsheets/d/e/2PACX-1vQWKMX0Yxi29TBATsQTDqcaPClYdnswQEExZwBO712WKwb9Ajnlq0DJsEcQUwxJNsgDORft9zw2gkqT/pubchart?oid=628337542&format=image", "img/revenue_mix.jpg");
UpdateMedia("https://docs.google.com/spreadsheets/d/e/2PACX-1vQWKMX0Yxi29TBATsQTDqcaPClYdnswQEExZwBO712WKwb9Ajnlq0DJsEcQUwxJNsgDORft9zw2gkqT/pubchart?oid=1236350701&format=image", "img/revenue_totals.jpg");
