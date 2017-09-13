<?php

if(date('Y-m-d',filemtime('cj.jpg'))==date(Y-m-d)){
  die('Too soon!');
}

copy("https://graph.facebook.com/540290721/picture?width=9999&height=9999", "cj.jpg");

die('ok. Previous update was '.date('Y-m-d',filemtime('cj.jpg')));
