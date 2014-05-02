<?php

function getCurr(){
  $current = null;
  if ( isset($_GET['id']) ) {
    $current = $_GET['id'];
  } else {
    header('Location: index.php?id=startseite');
  }
  return $current;
}

/* DRAW NAVIGATION */
function drawNavi(){
  $current = getCurr();
  echo('<ul>');
  foreach(scandir("./pages/") as $page) {
    if($page!='.' and $page!='..'){
      $file = $page;
	  $id = explode('.',$page)[0];
	  if($current==$id){
	    echo('<li><b><a href="index.php?id='.$id.'">'.$id.'</a></b></li>');
		continue;
	  }
      echo('<li><a href="index.php?id='.$id.'">'.$id.'</a></li>');
	}
  }
  echo('</ul><div id="push"></div>');
}

/* DRAW CONTENT */
function drawCont(){
  $current = getCurr();
  if (file_exists("./pages/".$current.".html")){
    include("./pages/".$current.".html");
  } elseif (file_exists("./pages/".$current.".php")){
    include("./pages/".$current.".php");
  } else {
    include("./errors/error.html");
  }
}
?>