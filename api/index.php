<?php

/*

  CJ Trowbridge
  2019-09-05
  
  The purpose of this api is to deliver various non-static data to various apps and tools throughout this and other sites.

*/

require('Config.php');

if(isset($_GET['countTodoToday'])){
  //$Account = file_get_contents('https://api.trello.com/1/members/me/boards?key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
  //$Todo = file_get_contents('https://api.trello.com/1/boards/'.$TrelloTodoBoardID.'/?key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
  //$TodoLists = file_get_contents('https://api.trello.com/1/boards/'.$TrelloTodoBoardID.'/?lists=open&key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
  $TodoToday = file_get_contents('https://api.trello.com/1/lists/'.$TrelloTodoTodayListID.'/cards?fields=name&key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
  $TodoThisweek = file_get_contents('https://api.trello.com/1/lists/'.$TrelloTodoThisweekListID.'/cards?fields=name&key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
  $TodoNextweek = file_get_contents('https://api.trello.com/1/lists/'.$TrelloTodoNextWeekListID.'/cards?fields=name&key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
  
  $TodoToday    = json_decode($TodoToday,true);
  $TodoThisweek = json_decode($TodoThisweek,true);
  $TodoNextweek = json_decode($TodoNextweek,true);
  
  echo count($TodoToday);
  
}
