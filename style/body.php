<div id="wrapper">
  <div id="logo">
    <img src="<?php echo($path);?>/style/img/logo.png" />
  </div>
  <div id="navi">
    <?php drawNavi($path); ?>
  </div>
  <div class="push"></div>
  <hr/>
  <div id="content">
    <?php if(isset($pre) and isset($post)){echo($pre);drawCont($path);echo($post);}else{drawCont($path);} ?>
  </div>
</div>
<div id="footer">
  &copy 2014 by Jan Thie&szlig Brockmann | <a href="index.php?id=impressum">Impressum</a> | <a href="index.php?id=team">Team</a>
</div>