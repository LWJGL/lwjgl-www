<? require('_include/header.php'); ?>

<h1>Last 100 lines of the IRC chat (<a href="irc://irc.freenode.net/lwjgl">#LWJGL IRC channel</a>)</h1>
<p>
<?php 
	$body = htmlentities(file_get_contents("http://irc-stats.lwjgl.org/log.php"));
	$lines = split("\n", $body);
	foreach ($lines as $line) {
  	print $line . "<br>\n";
	}	
?>
</p>
<? require('_include/footer.php'); ?>
