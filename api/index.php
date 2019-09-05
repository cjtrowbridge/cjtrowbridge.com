<?php

/*

  CJ Trowbridge
  2019-09-05
  
  The purpose of this api is to deliver various non-static data to various apps and tools throughout this and other sites.

*/

require('Config.php');

if(isset($_GET['countTodo'])){
  switch(strtolower($_GET['countTodo'])){
    case 'today':
      echo CountResults('https://api.trello.com/1/lists/59d2a3ff6aa56bebcf59326c/cards?fields=name&key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
      break;
    case 'thisweek':
      echo CountResults('https://api.trello.com/1/lists/5b208152a17ff1f420290902/cards?fields=name&key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
      break;
    case 'nextweek':
      echo CountResults('https://api.trello.com/1/lists/5d7085ac61b4181c42204c68/cards?fields=name&key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
      break;
      
  }
}

function CountResults($URL){
  if(
    isset($_GET['debug']) && 
    ($_GET['debug']==$TrelloAPIKey)
  ){
    echo '<pre>';
    echo '<a href="'.$URL.'" target="_blank">'.$URL.'</a>';
  }

  $Returned = file_get_contents($URL);
  if(
    isset($_GET['debug']) && 
    ($_GET['debug']==$TrelloAPIKey)
  ){
    var_dump($Returned);
  }
  
  $Data = json_decode($Returned,true);
  if(
    isset($_GET['debug']) && 
    ($_GET['debug']==$TrelloAPIKey)
  ){
    var_dump($Data);
    echo '</pre>';
  }
  
  return count($Data);
}
