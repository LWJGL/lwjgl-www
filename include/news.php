<?php
  // News
  // =======================================================
  $news[0] = array(
    "New site!", 
    "Welcome to the grand opening of our new site! Please browse around. Should you find any errors or have trouble finding exactly what your looking for, please email <a href=\"mailto:info@lwjgl.org\">info@lwjgl.org</a>",
    "Sunday, March 28th, 2004");
  
  // -------------------------------------------------------
  
  /////////////////////////////////////////////////////////////////////////////////
  // Prints the news
  ////////////////////////////////////////////////////////////////////////////////
  function printNews() {
    global $news;
    
    echo "<!-- news area -->\n  ";
    echo "<div class=\"news\">";
    echo "<h2>News</h2>";

    // iterate each array for sub items
    foreach ($news as $item) {
      echo "\n    <div class=\"news_item\">";
      echo "<h4>" . $item[0] . "</h4>";
      echo "<p>";
      echo "$item[1]";
      echo "<span class=\"date\"><br><i>$item[2]</i></span>";
      echo "</p>";
      echo "</div>";
      echo "<br>";
    }
    echo "\n  </div>\n";  
  }
?>