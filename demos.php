<?php
  require 'include/default.php';
  require 'include/news.php';

  printHeader(null, null);
  printMenu("demos");
?>

  <!-- Introduction -->
  <div class="paragraph_item">
    <h2>Demos</h2>
    <p>The following is a list of webstartable demos of LWJGL, all from the <code>org.lwjgl.test.*</code> package</p>
    <p><b>Input</b></p>
    <p><pre>
      ControllerCreationTest    [<a href="jnlp/lwjgl-demo.php/input.ControllerCreationTest">launch</a> | <a href="jnlp/source.php?path=input/ControllerCreationTest.java" target="_blank">source</a>]
      ControllerTest            [<a href="jnlp/lwjgl-demo.php/input.ControllerTest">launch</a> | <a href="jnlp/source.php?path=input/ControllerTest.java" target="_blank">source</a>]
      HWCursorTest              [<a href="jnlp/lwjgl-demo.php/input.HWCursorTest">launch</a> | <a href="jnlp/source.php?path=input/HWCursorTest.java" target="_blank">source</a>]
      KeyboardTest              [<a href="jnlp/lwjgl-demo.php/input.KeyboardTest">launch</a> | <a href="jnlp/source.php?path=input/KeyboardTest.java" target="_blank">source</a>]
      MouseCreationTest         [<a href="jnlp/lwjgl-demo.php/input.MouseCreationTest">launch</a> | <a href="jnlp/source.php?path=input/MouseCreationTest.java" target="_blank">source</a>]
      MouseTest                 [<a href="jnlp/lwjgl-demo.php/input.MouseTest">launch</a> | <a href="jnlp/source.php?path=input/MouseTest.java" target="_blank">source</a>]</pre>
    </p>
    
    <p><b>OpenAL</b></p>
    <p><pre>
      ALCTest                   [<a href="jnlp/lwjgl-demo.php/openal.ALCTest">launch</a> | <a href="jnlp/source.php?path=openal/ALCTest.java" target="_blank">source</a>]
      PositionTest              [<a href="jnlp/lwjgl-demo.php/openal.PositionTest">launch</a> | <a href="jnlp/source.php?path=openal/PositionTest.java" target="_blank">source</a>]
      EAXTest                   [<a href="jnlp/lwjgl-demo.php/openal.EAXTest">launch</a> | <a href="jnlp/source.php?path=openal/EAXTest.java" target="_blank">source</a>]
      MovingSoundTest           [<a href="jnlp/lwjgl-demo.php/openal.MovingSoundTest">launch</a> | <a href="jnlp/source.php?path=openal/MovingSoundTest.java" target="_blank">source</a>]
      OpenALCreationTest        [<a href="jnlp/lwjgl-demo.php/openal.OpenALCreationTest">launch</a> | <a href="jnlp/source.php?path=openal/OpenALCreationTest.java" target="_blank">source</a>]
      PlayTest                  [<a href="jnlp/lwjgl-demo.php/openal.PlayTest">launch</a> | <a href="jnlp/source.php?path=openal/PlayTest.java" target="_blank">source</a>]
      PlayTestMemory            [<a href="jnlp/lwjgl-demo.php/openal.PlayTestMemory">launch</a> | <a href="jnlp/source.php?path=openal/PlayTestMemory.java" target="_blank">source</a>]
      SourceLimitTest           [<a href="jnlp/lwjgl-demo.php/openal.SourceLimitTest">launch</a> | <a href="jnlp/source.php?path=openal/SourceLimitTest.java" target="_blank">source</a>]
      StressTest                [<a href="jnlp/lwjgl-demo.php/openal.StressTest">launch</a> | <a href="jnlp/source.php?path=openal/StressTest.java" target="_blank">source</a>]</pre>
      </p>
      
    <p><b>OpenGL</b></p>
    <p><pre>
      FullScreenWindowedTest    [<a href="jnlp/lwjgl-demo.php/opengl.FullScreenWindowedTest">launch</a> | <a href="jnlp/source.php?path=opengl/FullScreenWindowedTest.java" target="_blank">source</a>]
      Game                      [<a href="jnlp/lwjgl-demo.php/opengl.Game">launch</a> | <a href="jnlp/source.php?path=opengl/Game.java" target="_blank">source</a>]
      Grass                     [<a href="jnlp/lwjgl-demo.php/opengl.Grass">launch</a> | <a href="jnlp/source.php?path=opengl/Grass.java" target="_blank">source</a>]
      PbufferTest               [<a href="jnlp/lwjgl-demo.php/opengl.PbufferTest">launch</a> | <a href="jnlp/source.php?path=opengl/PbufferTest.java" target="_blank">source</a>]
      VBOIndexTest              [<a href="jnlp/lwjgl-demo.php/opengl.VBOIndexTest">launch</a> | <a href="jnlp/source.php?path=opengl/VBOIndexTest.java" target="_blank">source</a>]
      VBOTest                   [<a href="jnlp/lwjgl-demo.php/opengl.VBOTest">launch</a> | <a href="jnlp/source.php?path=opengl/VBOTest.java" target="_blank">source</a>]</pre>
    </p>
    
    <p><b>org.lwjgl</b></p>
    <p><pre>
      SysTest                   [<a href="jnlp/lwjgl-demo.php/SysTest">launch</a> | <a href="jnlp/source.php?path=SysTest.java" target="_blank">source</a>]
      DisplayTest               [<a href="jnlp/lwjgl-demo.php/DisplayTest">launch</a> | <a href="jnlp/source.php?path=DisplayTest.java" target="_blank">source</a>]
      WindowCreationTest        [<a href="jnlp/lwjgl-demo.php/WindowCreationTest">launch</a> | <a href="jnlp/source.php?path=WindowCreationTest.java" target="_blank">source</a>]</pre>
    </p>
  </div>
  
<?php 
  printFooter();
?>