<?php
  require 'include/default.php';
  require 'include/news.php';

  printHeader(null, null);
  printMenu("changelog");
  
  function printChangelog($version) {
    echo "<a name=\"$version\"></a>\n";
    echo "<h3>LWJGL $version&nbsp;&nbsp;&nbsp;<a href=\"#top\">top</a></h3>\n";
    echo "<div style=\"padding-left: 20px;\">\n";
    echo "<pre>";
    @readfile("changelogs/$version-changelog.txt");
    echo "</pre>\n";
    echo "</div>\n";
  }
?>
  <a name="top"></a>
  <!-- Introduction -->
  <div class="paragraph_item">
    <h2>Changelog</h2>
    <p>The following is a list of changes of LWJGL per release.</p>
    <p>
      <ul>
      	<li><a href="changelogs/full-changelog.txt">Full changelog</a></li>
        <li><a href="#0.89">LWJGL 0.89</a></li>
        <li><a href="#0.80">LWJGL 0.80</a></li>
        <li><a href="#0.70">LWJGL 0.70</a></li>
        <li><a href="#0.60">LWJGL 0.60</a></li>
        <li><a href="#0.50">LWJGL 0.50</a></li>
        <li><a href="#0.40">LWJGL 0.40</a></li>
        <li><a href="#0.30">LWJGL 0.30</a></li>
        <li><a href="#0.20">LWJGL 0.20</a></li>
        <li><a href="#0.10">LWJGL 0.10</a></li>
      </ul>
    </p>

    <?php printChangelog("0.89"); ?>
    <?php printChangelog("0.80"); ?>
    <?php printChangelog("0.70"); ?>
    <?php printChangelog("0.60"); ?>
    <?php printChangelog("0.50"); ?>
    <?php printChangelog("0.40"); ?>
    <?php printChangelog("0.30"); ?>
    <?php printChangelog("0.20"); ?>
    <?php printChangelog("0.10"); ?>
  </div>
  
<?php 
  printFooter();
?>