<?php
  require 'include/default.php';

  printHeader(null, null);
  printMenu("documentation");
  
  if(isset($HTTP_GET_VARS['page'])) {
    $page = $HTTP_GET_VARS['page'] . ".php";
    if (file_exists($page) AND !preg_match("#^\.\./#", $page)) {
      include($page);
    } else {
      echo "<p align=\"center\">You have reached this page because of an error. Please contact <a href=\"mailto:info@lwjgl.org\">info@lwjgl.org</a> and report the error.</p>";
    }
  } else {
?>

  <!-- Introduction -->
  <div class="paragraph_item">
    <h2>Documentation</h2>
    <p>
    	Here you will find documentation for LWJGL. You are encouraged to submit tutorials for fame and glory!
    </p>
    <p>
    	<a href="/javadoc" target="_blank">LWJGL javadoc</a><br><br>
    	<a href="http://lwjgl.org/wiki/tiki-index.php">LWJGL Wiki</a><br><br>
    	<a href="?page=tutorials/openal/devmaster/lesson1">Using OpenAL</a>
    </p>
  </div>
  
<?php 
  }
  printFooter();
?>