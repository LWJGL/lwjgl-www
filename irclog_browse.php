<?php 
  require('_include/header.php');

  $date = $_GET['date'];
  if(!$date) {
    $date = time();
  }

  function get_file($file) {
    $ch = curl_init($file);
    curl_setopt($ch,CURLOPT_ENCODING , "gzip");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $body = curl_exec ($ch);
    curl_close ($ch);
    return $body;
  }

  $date = $_GET['date'];
  if(!$date) {
    $date = time();
  }

  echo "<h1>LWJGL Log: " . date("Y-m-d", $date) . " (<a href='irc://irc.freenode.net/lwjgl'>#LWJGL IRC channel</a>)</h1>";
  echo "<p>";
  $body = get_file("http://echelog.matzon.dk/logs/lwjgl.php?date=$date");
  echo $body;
  echo "</p>";
  require('_include/footer.php'); 
?>