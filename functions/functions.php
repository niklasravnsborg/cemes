<?php

function getCurr(){
  $current = null;
  if ( isset($_GET['id']) ) {
    $current = $_GET['id'];
  } else {
    header('Location: index.php?id=home');
  }
  return $current;
}

/* DRAW NAVIGATION */
function drawNavi($path){
  $current = getCurr();
  echo('<ul>');
  $avail = scandir($path."/pages/");
  include($path."/functions/navi.php");
  foreach($navi as $page) {
    if($page!='.' and $page!='..'){
      $file = $page[0];
	  $id = explode('.',$page[0])[0];
	  $show = $page[1];
	  if($current==$id){
	    echo('<li class="current"><a href="index.php?id='.$id.'">'.$show.'</a></li>');
		continue;
	  }
      echo('<li><a href="index.php?id='.$id.'">'.$show.'</a></li>');
	}
  }
  echo('</ul><div id="push"></div>');
}

/* DRAW CONTENT */
function drawCont($path){
  $current = getCurr();
  if (file_exists($path."/pages/".$current.".html")){
    include($path."/pages/".$current.".html");
  } elseif (file_exists("./pages/".$current.".php")){
    include($path."/pages/".$current.".php");
  } else {
    include($path."/errors/error.html");
  }
}
?>