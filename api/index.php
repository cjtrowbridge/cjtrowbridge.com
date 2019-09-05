<?php

/*

  CJ Trowbridge
  2019-09-05
  
  The purpose of this api is to deliver various non-static data to various apps and tools throughout this and other sites.

*/

require('Config.php');

if(isset($_GET['countTodoToday'])){
  //$Account = file_get_contents('https://api.trello.com/1/members/me/boards?key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
  $Todo = file_get_contents('https://api.trello.com/1/boards/'.$TrelloTodoBoardID.'/?key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
  echo $Todo;
}
