<?php
  require 'include/default.php';
  require 'include/news.php';

  printHeader(null, null);
  printMenu("documentation");
?>

  <!-- Introduction -->
  <div class="paragraph_item">
    <h2>Documentation</h2>
    <p>
    	Here you will find documentation for LWJGL. Currently only javadoc is available.
    </p>
    <p>
    	<a href="/javadoc" target="_blank">LWJGL javadoc</a>
    </p>
  </div>
  
<?php 
  printFooter();
?>