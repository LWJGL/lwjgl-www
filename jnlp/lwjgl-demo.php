<? 
header("Content-type: application/x-java-jnlp-file"); 
?>

<!-- JNLP File for LWJGL Demos --> 
<jnlp 
  spec="1.0+" 
  codebase="http://lwjgl.org/jnlp/" 
  href="lwjgl-demo.php/<?php echo substr($_SERVER["PATH_INFO"], 1, strlen($_SERVER["PATH_INFO"])-1); ?>"> 
  <information> 
    <title>LWJGL Demo [<?php echo substr($_SERVER["PATH_INFO"], 1, strlen($_SERVER["PATH_INFO"])-1); ?>]</title> 
    <vendor>LWJGL</vendor> 
    <homepage href="http://lwjgl.org/"/> 
    <description>Demonstration of LWJGL</description> 
    <description kind="short">Technology Preview</description> 
    <offline-allowed/> 
  </information> 
  <security> 
      <all-permissions/> 
  </security>
  <resources> 
    <j2se version="1.4+"/> 
    <jar href="lwjgl.jar"/>
    <jar href="lwjgl_test.jar" main="true"/>
    <jar href="lwjgl_util.jar"/>
    <jar href="lwjgl_fmod3.jar"/>
    <jar href="lwjgl_media.jar"/>
  </resources> 
  <resources os="Windows">
    <j2se version="1.4+"/> 
    <nativelib href="lwjgl_win32.jar"/>
    <nativelib href="lwjglaudio_win32.jar"/>
    <nativelib href="lwjglfmod3_win32.jar"/>";
  </resources> 
  <resources os="Linux" arch="i386">
    <j2se version="1.4+"/> 
    <nativelib href="lwjgl_linux.jar"/>
    <nativelib href="lwjglaudio_linux.jar"/>
    <nativelib href="lwjglfmod3_linux.jar"/>";
  </resources>   
  <!--<property key="java.library.path" value="." />-->
  <application-desc main-class="org.lwjgl.<?php echo substr($_SERVER["PATH_INFO"], 1, strlen($_SERVER["PATH_INFO"])-1); ?>">
  <?php
    if(isset($HTTP_GET_VARS['arguments'])) {
      $arguments = $HTTP_GET_VARS['arguments'];
      foreach ($arguments as $argument) {
        echo "<argument>" . $argument . "</argument>\n";
      }
    }
  ?>
  </application-desc>
</jnlp>