<?php

if(date('Y-m-d',filemtime())==date(Y-m-d)){
  die('Too soon!');
}

copy("https://graph.facebook.com/540290721/picture?width=9999&height=9999", "cj.jpg");
