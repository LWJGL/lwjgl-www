<?php
  require 'include/default.php';

  printHeader(null, null);
  printMenu("download");
?>

  <!-- Introduction -->
  <div class="paragraph_item">
    <h2>Download</h2>
    <p>
      Latest stable release is 0.92. Please download it here:<br>
      <a href="https://sourceforge.net/project/showfiles.php?group_id=58488" target="_blank">LWJGL 0.92 alpha</a>
    </p>
    <!--
    <p>
      Random Win32 CVS builds are provided here: <i>Please note that these builds may be more buggy than an official release, but will typically contain the newest features.</i><br>
      <a href="http://matzon.dk/brian/lwjgl/builds/lwjgl-2004-05-14.zip">lwjgl-2004-05-14.zip</a> <i>swt enabled!</i><br>
      <a href="http://matzon.dk/brian/lwjgl/builds/lwjgl-2004-05-14-swt.zip">lwjgl-2004-05-14-swt.zip</a> <i>swt enabled! (includes swt support files)</i><br>
    </p>
    -->
    <p>
      Latest CVS tarball. Please download it here:<br>
      <a href="http://cvs.sourceforge.net/cvstarballs/java-game-lib-cvsroot.tar.bz2">CVS Tarball</a>
    </p>
  </div>
  
<?php 
  printFooter();
?>