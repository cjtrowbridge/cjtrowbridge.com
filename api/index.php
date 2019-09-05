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
      echo CountResults('https://api.trello.com/1/lists/'.$TrelloTodoTodayListID.'/cards?fields=name&key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
      break;
    case 'thisweek':
      echo CountResults('https://api.trello.com/1/lists/'.$TrelloTodoThisweekListID.'/cards?fields=name&key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
      break;
    case 'nextweek':
      echo CountResults('https://api.trello.com/1/lists/'.$TrelloTodoNextWeekListID.'/cards?fields=name&key='.$TrelloAPIKey.'&token='.$TrelloAPIToken);
      break;
      
  }
}

function CountResults($URL){
  $Returned = file_get_contents($URL);
  $Data = json_decode($Returned,true);
  return count($Data);
}
