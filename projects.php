<?php
  require 'include/default.php';
  require 'include/projects.php';

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
  
<?php 
  printProjects();
?>    
  
<?php 
  printFooter();
?>