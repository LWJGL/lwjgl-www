<?php
  require 'include/default.php';
  require 'include/news.php';

  printHeader(null, null);
  printMenu("home");
?>

  <!-- Introduction -->
  <div class="paragraph_item">
    <h2>Introduction</h2>
    <p>
      The Lightweight Java Game Library (LWJGL) is a solution aimed directly at professional 
      and amateur Java programmers alike to enable commercial quality games to be 
      written in Java. LWJGL provides developers access to high performance 
      crossplatform libraries such as OpenGL (Open Graphics Library) and OpenAL (Open Audio Library) allowing
      for state of the art 3D games and 3D sound. Additionally LWJGL provides access to controllers such
      as Gamepads, Steering wheel and Joysticks. All in a simple and straight forward API.
    </p>
    <p>
      LWJGL is not meant to make writing games particularly easy; it is primarily an enabling
      technology which allows developers to get at resources that are simply otherwise
      unavailable or poorly implemented on the existing Java platform. We anticipate that 
      the LWJGL will, through evolution and extension, become the foundation for more complete
      game libraries and "game engines" as they have popularly become known, and hide some 
      of the new evils we have had to expose in the APIs.
    </p>
    <p>
      LWJGL is available under a BSD license, which means it's open source and freely available
      at no charge. However, we won't mind a <a href="http://sourceforge.net/donate/index.php?group_id=58488">donation</a>. 
    </p>
    <p>
      Please visit us on the Freenode IRC Network: <a href="irc://irc.freenode.net/lwjgl">#LWJGL</a>. Do idle if there is no one to answer any of your questions, we are on different timezones.
    </p>
  </div>
  
<?php 
  printNews(); 
  printFooter();
?>