<?php
  // Projects
  // =======================================================
  $projects[0] = array(
    "Alien Flux", 
    "http://puppygames.net/info.php?game=Alien_Flux",
    "http://puppygames.net",
    "Commercial game",
    "Defend the cutest, fluffiest little creatures in the Galaxy from a horde of evil aliens from the fifth dimension! With only fast reactions, animal cunning and a very big laser cannon to help you, you must rescue the Fluffies as malevolent Bubbles attempt to turn them into lime jelly. Fast, fun and furious original arcade action, incredible graphics, and atmospheric sound effects combine to make Alien Flux the best arcade shoot-em-up you've played for over a decade!",
    array ("AlienFlux", 499, 379, 150, 112),
    array ("AlienFlux", 499, 379, 150, 112),
    array ("AlienFlux", 499, 379, 150, 112));  
    
  $projects[1] = array(
    "Tribal Trouble", 
    "http://www.tribaltrouble.com/",
    "http://www.tribaltrouble.com/",
    "Commercial game",
    "Take the role of a chieftain and lead your clueless kinsmen to new discoveries and victories as tribal clashes rage across a group of tropical islands. Tribal Trouble is a fast paced realtime strategy game where you will find yourself pitted against your computer or online players as you collect resources, research new ground-breaking technologies (such as the spear) and rejoice as your armies burn down enemy villages.",
    array ("TribalTrouble", 1024, 768, 150, 113),
    array ("TribalTrouble", 1024, 768, 150, 113),
    array ("TribalTrouble", 1024, 768, 150, 113));    
    
  $projects[2] = array(
    "Extorris", 
    "http://extorris.com/",
    "http://extorris.com/",
    "Commercial game",
    "The extorris game is multiplayer online game set in a futuristic society of convicts. The game build upon the classic concept of space warfare and exploration. The player is a convict banished by an authority to a far away galaxy. Here is he left on his own with a small ship. His goal is now to survive among the other convicts in a harsh anarchistic world and if possible find a way home.",
    array ("Extorris", 1024, 768, 150, 113),
    array ("Extorris", 1024, 768, 150, 113),
    array ("Extorris", 1024, 768, 150, 113));
    
  $projects[3] = array(
    "Marathon", 
    "http://www.digitalage.gr/zdimensions/",
    "http://www.digitalage.gr/zdimensions/",
    "Not provided",
    "Not provided",
    array ("Marathon", 600, 450, 150, 113),
    array ("Marathon", 1024, 768, 150, 113),
    array ("Marathon", 600, 450, 150, 113));          
    
  $projects[3] = array(
    "Vermin ExTerminator", 
    "http://www.vermin-exterminator.de/",
    "http://www.vermin-exterminator.de/",
    "Free, open source game",
    "Vermin ExTerminator is a free multiplayer network game. It's a 2D real-time first-person shooter. Little worms (vermins) fight against each other using hand guns, rifles, grenades or rockets. In other words the game is mix of liero and a real-time worms. The game is written in Java with LWJGL as OpenGL and OpenAL interface. The development is open source and still in progress and till now Vermin ExTerminator is only in alpha version.",
    array ("Vermins", 800, 600, 150, 112),
    array ("Vermins", 800, 600, 150, 112));
    
  $projects[4] = array(
    "StarShip2D", 
    "http://www.drx.dk/starship2d.html",
    "http://www.drx.dk/starship2d.html",
    "Free, open source game",
    "StarShip2D is a 2d scroller game, where you shoot incomming enemies with your cannon or powerfull rockets.",
    array ("starship2d", 640, 480, 162, 122),
    array ("starship2d", 640, 480, 162, 122),
    array ("starship2d", 640, 480, 162, 122));
  // -------------------------------------------------------
  
  /////////////////////////////////////////////////////////////////////////////////
  // Prints the project items
  ////////////////////////////////////////////////////////////////////////////////
  function printProjects() {
    global $projects;
    shuffle($projects);
    
    // iterate each array for sub items
    foreach ($projects as $item) {
      echo "<!-- ". strtoupper($item[0]) ." -->\n";
      echo "<p><u>$item[0]</u></p>";
      echo "<p>";
      echo "<table width=\"600\" border=\"0\">";
      echo "<tr>";
      echo "<td width=\"75\">Website: </td>";
      echo "<td><a href=\"$item[1]\" target=\"_blank\">$item[2]</a></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td width=\"75\">Type: </td>";
      echo "<td>$item[3]</td>";
      echo "</tr>";
      echo "<tr valign=\"top\">";
      echo "<td width=\"75\">Description:</td>";
      echo "<td>$item[4]</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td colspan=\"2\">&nbsp;</td>";
      echo "</tr>";
      echo "</table>";
      
      // check for screenshots
      if($item[5] != null) {
        echo "<table width=\"600\" border=\"0\">";
        echo "<tr>";
        
        // we have at most 3 screenshots
        for($i=0; $i<3; $i++) {
          if(isset($item[5+$i]) && $item[5+$i] != null) {
            echo "<td width=\"150\"><a href=\"javascript:showScreenShot('" . $item[5+$i][0] . "', '". strtolower($item[5+$i][0]) . "', '" . ($i+1) . "', " . $item[5+$i][1] . ", " . $item[5+$i][2] . ");\"><img src=\"images/projects/" . strtolower($item[5+$i][0]) . "_small_" . ($i+1) . ".jpg\" border=\"0\" width=\"" . $item[5+$i][3] . "\" height=\"" . $item[5+$i][4] . "\"><a/></td>";
            echo "<td width=\"10\">&nbsp;</td>";
          } else {
            echo "<td width=\"150\">&nbsp;</td>";
            echo "<td width=\"10\">&nbsp;</td>";
          }
        }
        echo "</tr>";
        echo "</table>";
      }
      echo "</p>";
      echo "<p>&nbsp;</p>";
      echo "<p>&nbsp;</p>";
    }
    echo "\n  </div>\n";  
  }
?>