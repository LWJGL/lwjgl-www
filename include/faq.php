<?php
  // News
  // =======================================================
  $faq[0] = array(
    "java.lang.UnsatisfiedLinkError: no lwjgl in java.library.path.",
    "When running the examples or my own program I get a 'Exception in thread \"main\" java.lang.UnsatisfiedLinkError: no lwjgl in java.library.path.",
    "The VM cannot locate the lwjgl runtime library. Specify the path to it using -Djava.library.path=&lt;path/to/library&gt;");
  
  $faq[1] = array(
    "Applets and LWJGL", 
    "Is it possible to use LWJGL from an Applet?", 
    "Unfortunately, no. However you can start a LWJGL application from a webpage using Java WebStart. For more information click <a href=\"http://www.google.com/search?q=java+web+start+tutorial\" target=\"_blank\">here</a>");

  $faq[2] = array(
    "OpenGL ES and LWJGL", 
    "Will LWJGL support OpenGL ES", 
    "OpenGL ES is basically a subset of OpenGL, and we will make the best efforts to get LWJGL running on a device. However we have yet to get our hands on one :(");

  $faq[3] = array(
    "ByteBuffer VS. Arrays", 
    "Whats up with all those ByteBuffers? Why not just use arrays?", 
    "Basically because it's the fastest way to transport data to the OpenGL layer. For more indepth discussion, click <a href=\"http://www.puppygames.net/forums/viewtopic.php?t=295\" target=\"_blank\">here</a>");

  $faq[4] = array(
    "Lack of documentation", 
    "I have been looking all around the site, but I can't find any documentation, apart from the javadoc?", 
    "Yes, this is a known \"issue\". We're only a handfull of developers doing this in our sparetime. We therefor tend to prioritize what we need, or want to work on. Documentation, alas, tend to be at the bottom of the chain. We are aware of it though...");
  // -------------------------------------------------------
  
  /////////////////////////////////////////////////////////////////////////////////
  // Prints the FAQs
  ////////////////////////////////////////////////////////////////////////////////
  function printFAQ() {
    global $faq;
    
    echo "<!-- faq area -->\n  ";
    echo "<div class=\"faq\">";
    echo "<h2>Frequently Asked Questions</h2>";

    // create a list of Q&A
    // iterate each array for sub items
    $count = 0;
    echo "<p><ul>";
    foreach ($faq as $item) {
      echo "<li><a href=\"#" . $count++ . "\">$item[0]</a></li>";
    }
    echo "</ul></p>";
    echo "<p>If you have a question which isn't answered here, please post it to the <a href=\"http://forum.lwjgl.org\" target=\"_blank\">forum</a></p>";
    echo "<hr>";

    // iterate each array for sub items
    $count = 0;
    foreach ($faq as $item) {
      echo "\n    <div class=\"faq_item\">";
      echo "<p><a name=\"#" . $count++ . "\"></a>";
      echo "<font size=\"4\" color=\"ff0000\"><b>Q</b>:&nbsp;</font>" . $item[1];
      echo "<br>";
      echo "<font size=\"4\" color=\"ff0000\"><b>A</b>:&nbsp;</font>" . $item[2];
      echo "</p>";
      echo "</div>";
    }
    echo "\n  </div>\n";
  }
?>