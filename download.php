<?php
  require 'include/default.php';
  require 'include/news.php';

  printHeader(null, null);
  printMenu("download");
?>

  <!-- Introduction -->
  <div class="paragraph_item">
    <h2>Download</h2>
    <p>
      Latest stable release is 0.8. Please download it here:<br>
      <a href="http://sourceforge.net/project/showfiles.php?group_id=58488&package_id=54362&release_id=192924" target="_blank">LWJGL 0.8 alpha</a>
    </p>
    <p>
      Latest CVS tarball. Please download it here:<br>
      <a href="http://cvs.sourceforge.net/cvstarballs/java-game-lib-cvsroot.tar.bz2">CVS Tarball</a>
    </p>
    <p>
      For a list of all releases of LWJGL please follow this link:<br>
      <a href="http://sourceforge.net/project/showfiles.php?group_id=58488" target="_blank">LWJGL all releases</a>
    </p>
  </div>
  
<?php 
  printFooter();
?>