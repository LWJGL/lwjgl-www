<?php
  require 'include/default.php';
  require 'include/news.php';

  printHeader(null, null);
  printMenu("forum");
?>

  <div class="iframe">
    <iframe FRAMEBORDER="0" width="100%" height="2800" src="http://forum.lwjgl.org/"></iframe>
  </div>
  
<?php 
  printFooter();
?>