<?php
  // LWJGL menu
  // =======================================================
  $menuItems['LWJGL'] = array(
    "home",               "/",                                                      "_top",
    "about",              "about.php",                                              "_top",
    "download",           "download.php",                                           "_top",
    "installation",       "installation.php",                                       "_top",
    "documentation",      "documentation.php",                                      "_top",
    "forum",              "http://forum.lwjgl.org/",                                "_blank",
    "faq",                "faq.php",                                                "_top",
    "projects",           "projects.php",                                           "_top",
//    "demos",              "demos.php",                                              "_top",
    "license",            "license.php",                                            "_top",
    "contact",            "contact.php",                                            "_top",
    "credits",            "credits.php",                                            "_top");
  
  // Developers
  $menuItems['Developers'] = array(
    "CVS tree",           "http://cvs.sourceforge.net/viewcvs.py/java-game-lib/",   "_blank", 
    "project home",       "http://sourceforge.net/projects/java-game-lib",          "_blank");
    
  // Developers
  $menuItems['Miscellaneous'] = array(
    "links",              "links.php",                                              "_top", 
    "changelog",          "changelog.php",                                          "_top");
  // -------------------------------------------------------

  ////////////////////////////////////////////////////////////////////////////////
  // Prints the left navigation menu, makring $current as selected element
  ////////////////////////////////////////////////////////////////////////////////
  function printMenu($current) {
    // LWJGL menu
    global $menuItems;        
    
    // print out beginning
    echo "<!-- left navigation -->\n";  
    echo "<div class=\"menu\">\n";

    // iterate each array for sub items
    foreach ($menuItems as $key => $value) {
      echo "  <div class=\"menu_header\">" . $key ."</div>\n";
      for ($i = 0; $i < count($value); $i+=3) {
        echo "    ";
        if (strcmp($current, $value[$i]) == 0) {
          echo "<div class=\"current_page\">" . $value[$i] . "</div>\n";
        } else {
          echo "<a class=\"menu_item\" href=\"" . $value[$i+1] . "\" target=\"" . $value[$i+2] . "\">" . $value[$i] . "</a>\n";
        }
      }
      echo "  <br>\n\n";
    }
    
    echo "  <!-- icon block -->\n";
    echo "  <div align=\"center\">\n";
    echo "    <!-- donation -->\n";
    echo "    <p>&nbsp;</p>\n";
    echo "    <a href=\"http://sourceforge.net/donate/index.php?group_id=58488\"><img src=\"http://images.sourceforge.net/images/project-support.jpg\" width=\"88\" height=\"32\" border=\"0\" alt=\"Support This Project\" title=\"Donate to LWJGL\"/></a>\n";
    echo "    <!-- SF icon -->\n";
    echo "    <br><br>\n";
    echo "    <a href=\"http://sourceforge.net\"><img src=\"http://sourceforge.net/sflogo.php?group_id=58488&type=1\" width=\"88\" height=\"31\" border=\"0\" alt=\"SourceForge.net Logo\" title=\"SourceForge.net Logo\"></a>\n";
    echo "  </div>\n";
    echo "  <br>\n";
    echo "</div>\n\n";
  }
  
  ////////////////////////////////////////////////////////////////////////////////
  // Prints the LWJGL header, using $title and $header as supplied name
  // If no header or title is given, defaults are used
  ////////////////////////////////////////////////////////////////////////////////
  function printHeader($title, $header) {
    // check for title
    if(!isset($title)) {
      $title = "LWJGL";
    }
    
    // check for header
    if(!isset($header)) {
      $header = "Lightweight Java Game Library";
    }
    
    echo "<html>\n";
    echo "  <head>\n";
    echo "    <title>" . $title . "</title>\n";
    echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"default.css\">\n";
    echo "  </head>\n";
    echo "<body>\n";
    echo "<!-- top header -->\n";
    echo "<div class=\"header\"><a class=\"header\" href=\"/\">" . $header . "</a></div>\n\n";
  }
  
  ////////////////////////////////////////////////////////////////////////////////
  // Prints the LWJGL footer
  ////////////////////////////////////////////////////////////////////////////////
  function printFooter() {
    echo "<div class=\"footer\">this site and its content is © <a class=\"footer\" href=\"mailto:info@lwjgl.org\">lwjgl.org</a>";
    echo "<!-- java.net icon -->\n";
    echo "<br><br>\n";
    echo "</div>\n\n";
    echo "</body>";
    echo "</html>";
  }
?>