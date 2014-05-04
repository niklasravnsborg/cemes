<html>
<head>
<title>Service-Bereich</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<link rel="stylesheet" type="text/css" href="./style/style.css">
<link rel="icon" type="image/png" href="./style/img/favicon.png" />
<script src="./ckeditor/ckeditor.js"></script>

</head>
<body style="margin:0px;">
<?php include("../functions/functions.php"); ?>

<div id="admin_bar">
  Kengu<b>CMS</b> beta 
  | <a href="../index.php?id=home" target="_blank">Meine Website</a> 
  | <a href="../index.php?id=<?php echo($_GET['id']); ?>" target="_blank">Aktuelle Seite anschauen</a>
  <div style="font-size:0.8em;float:right;">
    &copy Jan Thie&szlig Brockmann. Abgesehen vom <a href="http://ckeditor.com/">CKEditor</a>
  </div>
</div>
<div style="height:80px;"> </div>
<h1 contenteditable="true" style="text-align:center;">Klick mal hier auf diese &Uumlberschrift!</h1>
<?php

$id = $_GET['id'];
$path="..";
$pre = '<form action="./functions/edit.php" method="post">
		<p>
		    <input type="hidden" name="id" value="'.$_GET['id'].'">
			<textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10">
';
$post = '</textarea>
		</p>
		<p>
			<input type="submit" value="Speichern">
		</p>
	</form>
';
?>
<?php include("../style/body.php");?>

</body>
</html>