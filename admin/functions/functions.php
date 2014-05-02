<?php 

function drawEdit($id){
  echo("<form action='functions/edit.php'>");
  echo("<Textarea name='page'>");
  include("../pages/".$id.".html");
  echo("</Textarea><input type='hidden' name='id' value='".$id."'>");
  echo("<input type='submit' value=' Absenden '><input type='reset' value=' Abbrechen '>");
  echo("</form>");
}

function getCurr(){
  $current = null;
  if ( isset($_GET['id']) ) {
    $current = $_GET['id'];
  }
  return $current;
}

function drawNavi(){
  echo("<p>Hier können Sie die HTML-Seiten bearbeiten.</p>");
  $current = getCurr();
  echo('<ul>');
  foreach(scandir("../pages/") as $page) {
    if($page!='.' and $page!='..'){
      $file = $page;
	  $id = explode('.',$page)[0];
	  $type = explode('.',$page)[1];
	  if ($type == 'html'){
	    if($current==$id){
	      echo('<li><b><a href="index.php?id='.$id.'">'.$id.'</a></b></li>');
		  continue;
	    }
        echo('<li><a href="index.php?id='.$id.'">'.$id.'</a></li>');
	  }
	}
  }
  echo('</ul><div id="push"></div>');
}

function drawPage(){
  if (isset($_GET['id'])){
    $id = $_GET['id'];
    drawEdit($id);
  } else {
    echo("Wählen Sie eine Seite um sie zu bearbeiten.");
  }
}

function savePage(){
  echo("SAVE");
}


?>