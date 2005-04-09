<? require('_include/header.php'); ?>

<h1>Last 100 lines of the IRC chat (<a href="irc://irc.freenode.net/lwjgl">#LWJGL IRC channel</a>)</h1>
<p>
<?php 

	function formatIRCLine($line) { 
		$date = sscanf($line, "%s %s");
		$content = substr($line, strlen($date[0] . $date[1]) + 2);
		
		return "[" . $date[1] . " " . $content;
	}

	$body = htmlentities(file_get_contents("http://irc-stats.lwjgl.org/log.php"));
	$lines = split("\n", $body);
	foreach ($lines as $line) {
		if(strlen($line) > 0) {
  		print formatIRCLine($line) . "<br>\n";
		}
	}	
?>
</p>
<? require('_include/footer.php'); ?>
