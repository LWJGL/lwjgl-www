<?php
  require 'include/default.php';
  require 'include/news.php';

  printHeader(null, null);
  printMenu("projects");
?>
  <script type="text/javascript" language="javascript">
    // our window
    var ssWindow = null;
    
    // shows the screenshot using supplied name. File to show is based on document & number
    function showScreenShot(name, document, number, imgWidth, imgHeight) {
      // nuke old if exists
    	if (ssWindow != null) {
      ssWindow.close();
    	}
    	
    	// calculate sizes
    	var docWidth 	= imgWidth + 1;
    	var docHeight 	= imgHeight + 40;
    	var centerX 	= (screen.width) ? (screen.width-docWidth)/2 : 0;
    	var centerY 	= (screen.height) ? (screen.height-docHeight)/2 : 0;
    	var extra 	= (navigator.userAgent.toLowerCase().indexOf("msie") > -1) ? 15 : 0;
    	
    	// if screen is < image, make window window size - scrollbar size
    	if (screen.width < imgWidth) {
    	  docWidth = screen.width - 50;
    	} 
    
    	if (screen.height < imgHeight) {
    	  docHeight = screen.height - 50;
    } 
    	
    	// open our window
    	ssWindow 	= window.open("", name, "left=" + centerX + ",top=" + centerY + ",width=" + docWidth + ", height=" + (docHeight + extra) + ",location=no,menubar=no,status=no,toolbar=no,scrollbars=no,resizable=no");
    	
    	// write the html
    	ssWindow.document.open();
    	ssWindow.document.write("<html>\n");
    	ssWindow.document.write("  <head>\n");
    	ssWindow.document.write("    <title>" + name + "</title>\n");
    	ssWindow.document.write("    <link rel=\"STYLESHEET\" href=\"default.css\" type=\"text/css\"\n>");
    	ssWindow.document.write("  </head>\n");
    	ssWindow.document.write("  <body leftmargin=\"0\" topmargin=\"0\">\n");
    	ssWindow.document.write("  <a href=\"javascript:window.close()\"><img src=\"" + "images/projects/" + document + "_" + number + ".jpg\" border=\"0\" width=\"" + imgWidth + "\" height=\"" + imgHeight + "\"></a>\n");
    	ssWindow.document.write("  <p>\n");
    	ssWindow.document.write("  <div align=\"center\"><font family=\"Fixedsys\"><a href=\"javascript:window.close()\">close window</a></font>\n");
    	ssWindow.document.write("  </body>\n");
    	ssWindow.document.write("<html>");
    	ssWindow.document.close();
    
      // come hence forth, my true popup!
    	ssWindow.focus();
    }
  </script>

  <!-- Introduction -->
  <div class="paragraph_item">
    <h2>Projects</h2>
    <p>
      The following is a list of projects that use LWJGL:<br>
      <i>Please write to <a href="mailto:info@lwjgl.org">info@lwjgl.org</a> if you have a project you want to have listed</i>
    </p>
    
    <!-- ALIEN FLUX -->
    <p><u>Alien Flux</u></p>
    <p>
    <table width="600" border="0">
      <tr>
        <td width="75">Website: </td>
        <td><a href="http://puppygames.net/info.php?game=Alien_Flux" target="_blank">http://puppygames.net</a></td>
      </tr>
      <tr>
        <td width="75">Type: </td>
        <td>Commercial game</td>
      </tr>
      <tr valign="top	">
        <td width="75">Description:</td>
        <td>Defend the cutest, fluffiest little creatures in the Galaxy from a horde of evil aliens from the fifth dimension! With only fast reactions, animal cunning and a very big laser cannon to help you, you must rescue the Fluffies as malevolent Bubbles attempt to turn them into lime jelly. Fast, fun and furious original arcade action, incredible graphics, and atmospheric sound effects combine to make Alien Flux the best arcade shoot-em-up you've played for over a decade!</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
    <table width="600" border="0">
      <tr>
        <td><a href="javascript:showScreenShot('AlienFlux', 'alienflux', '1', 499, 379);"><img src="images/projects/alienflux_small_1.jpg" border="0" width="150" height="112"><a/></td>
        <td witdh="10">&nbsp;</td>
        <td><a href="javascript:showScreenShot('AlienFlux', 'alienflux', '2', 499, 379);"><img src="images/projects/alienflux_small_2.jpg" border="0" width="150" height="112"><a/></td>
        <td witdh="10">&nbsp;</td>
        <td><a href="javascript:showScreenShot('AlienFlux', 'alienflux', '3', 499, 379);"><img src="images/projects/alienflux_small_3.jpg" border="0" width="150" height="112"><a/></td>
      </tr>
    </table>
    </p>
  
    <!-- TRIBAL TROUBLE -->
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><u>Tribal Trouble</u></p>
    <p>
    <table width="600" border="0">
      <tr>
        <td width="75">Website: </td>
        <td><a href="http://www.tribaltrouble.com/" target="_blank">http://www.tribaltrouble.com/</a></td>
      </tr>
      <tr>
        <td width="75">Type: </td>
        <td>Commercial game</td>
      </tr>
      <tr valign="top	">
        <td width="75">Description:</td>
        <td>Take the role of a chieftain and lead your clueless kinsmen to new discoveries and victories as tribal clashes rage across a group of tropical islands. Tribal Trouble is a fast paced realtime strategy game where you will find yourself pitted against your computer or online players as you collect resources, research new ground-breaking technologies (such as the spear) and rejoice as your armies burn down enemy villages.</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
    <table width="600" border="0">
      <tr>
        <td><a href="javascript:showScreenShot('TribalTrouble', 'tribaltrouble', '1', 1024, 768);"><img src="images/projects/tribaltrouble_small_1.jpg" border="0" width="150" height="113"><a/></td>
        <td witdh="10">&nbsp;</td>
        <td><a href="javascript:showScreenShot('TribalTrouble', 'tribaltrouble', '2', 1024, 768);"><img src="images/projects/tribaltrouble_small_2.jpg" border="0" width="150" height="113"><a/></td>
        <td witdh="10">&nbsp;</td>
        <td><a href="javascript:showScreenShot('TribalTrouble', 'tribaltrouble', '3', 1024, 768);"><img src="images/projects/tribaltrouble_small_3.jpg" border="0" width="150" height="113"><a/></td>
      </tr>
    </table>
    </p>
    
    <!-- EXTORRIS -->
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><u>Extorris</u></p>
    <p>
    <table width="600" border="0">
      <tr>
        <td width="75">Website: </td>
        <td><a href="http://extorris.com/" target="_blank">http://extorris.com/</a></td>
      </tr>
      <tr>
        <td width="75">Type: </td>
        <td><i>not provided</i></td>
      </tr>
      <tr valign="top	">
        <td width="75">Description:</td>
        <td><i>not provided</i></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
    <table width="600" border="0">
      <tr>
        <td><a href="javascript:showScreenShot('Extorris', 'extorris', '1', 1024, 768);"><img src="images/projects/extorris_small_1.jpg" border="0" width="150" height="113"><a/></td>
        <td witdh="10">&nbsp;</td>
        <td><a href="javascript:showScreenShot('Extorris', 'extorris', '2', 1024, 768);"><img src="images/projects/extorris_small_2.jpg" border="0" width="150" height="113"><a/></td>
        <td witdh="10">&nbsp;</td>
        <td><a href="javascript:showScreenShot('Extorris', 'extorris', '3', 1024, 768);"><img src="images/projects/extorris_small_3.jpg" border="0" width="150" height="113"><a/></td>
      </tr>
    </table>
    </p>
    
    <!-- MARATHON -->
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><u>Marathon</u></p>
    <p>
    <table width="600" border="0">
      <tr>
        <td width="75">Website: </td>
        <td><a href="http://www.digitalage.gr/zdimensions/" target="_blank">http://www.digitalage.gr/zdimensions/</a></td>
      </tr>
      <tr>
        <td width="75">Type: </td>
        <td><i>not provided</i></td>
      </tr>
      <tr valign="top	">
        <td width="75">Description:</td>
        <td><i>not provided</i></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
    <table width="600" border="0">
      <tr>
        <td><a href="javascript:showScreenShot('Marathon', 'marathon', '1', 600, 450);"><img src="images/projects/marathon_small_1.jpg" border="0" width="150" height="113"><a/></td>
        <td witdh="10">&nbsp;</td>
        <td><a href="javascript:showScreenShot('Marathon', 'marathon', '2', 1024, 768);"><img src="images/projects/marathon_small_2.jpg" border="0" width="150" height="113"><a/></td>
        <td witdh="10">&nbsp;</td>
        <td><a href="javascript:showScreenShot('Marathon', 'marathon', '3', 600, 450);"><img src="images/projects/marathon_small_3.jpg" border="0" width="150" height="113"><a/></td>
      </tr>
    </table>
    </p>
  </div>
  
<?php 
  printFooter();
?>