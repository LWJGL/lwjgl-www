<?php
  // News
  // =======================================================
	// 
	$news[0] = array(
    "LWJGL 0.93 released!", 
    "Thats right - another release fresh off the build machine. For more info about the release, please visit <a href=\"http://puppygames.net/forums/viewtopic.php?p=5405\">this</a> thread on the boards.",
    "Wednesday, October 27th, 2004");
    	
	$news[1] = array(
    "LWJGL 0.92 released!", 
    "LWJGL 0.92 has arrived! Get Downloading! Please follow <a href=\"http://puppygames.net/forums/viewtopic.php?p=5052\">this thread</a> for more info",
    "Monday, September 5th, 2004");

  $news[2] = array(
    "LWJGL on Mac OS X (Donation Drive)", 
    "The initial Max OS X port was made by Elias on a Mac we borrowed. With the limited time in hand Elias successfully created a Mac port (although somewhat crippled). As some of you may know, we have since then tried many times to get Mac developers to join the team. So far we have met with limited success. In order to fix the LWJGL Mac port we needto have a dedicated developer with a Mac willing to offer a lot of spare time. To that end Elias (or actually the - soon to be - company <a href=\"http://oddlabs.com/\" target=\"_blank\">Oddlabs</a> that is currently working on Tribal Trouble) has expressed a willingness to purchase a Mac and commit to finally getting Mac OS X properly supported. As Elias has already proved his skills, we see this as a very good solution.<br><br>However, as many of you know Mac hardware is rather pricey - which is why we have decided to donate what is in the LWJGL donation fund (It was originally setupto allow us to do whatever needed to get a Mac port going). We hope to increase the fund to $1000 USD as fast as possible.The fund currently holds $90.89 USD. Caspian Rychlik-Prince willdonate $400 (!) to the cause which means we're already halfway! The sooner we reach the $1000 mark, the sooner the Mac port can be finished!<br><br>This is your chance to help out with the LWJGL library! So dig deep ;)<br><br>Should we increase this fund to more than $1000 the remaining money will be kept in the fund, and used to help with creating new features (ie. purchasing a controller to do the Force Feedback implementation), hosting on a proper server or other LWJGL causes.<br><br>To donate to the LWJGL fund, follow this link: <a href=\"http://sourceforge.net/donate/index.php?group_id=58488\" target=\"_blank\">http://sourceforge.net/donate/index.php?group_id=58488</a> (Paypal donation).<br><br>Note: 10% of all proceeds will go to EFF.<br>Should you wish to donate directly, without any proceeds going to EFF, you can do so by sending money to the: brian@matzon.dk paypal account.",
    "Wednesday, July 21st, 2004");

	$news[3] = array(
    "LWJGL @ JavaOne", 
    "LWJGL powered <a href=\"http://www.puppygames.net/downloads/hallucinogenesis/hallucinogenesis.jnlp\">Super Elvis</a> by <a href=\"http://puppygames.net/\" target=\"_blank\">puppygames.net</a> won the Sun Microsystems 'Technology Game Development Contest'!\nAdditionally Sun demoed another application using LWJGL: <a href=\"http://home.halden.net/tombr/squareheads/squareheads.html\" target=\"_blank\">Square Heads</a> and commented on it's sheer speed.",
    "Wednesday, June 30th, 2004");

  $news[4] = array(
    "LWJGL Wiki", 
    "One of LWJGL's shortcommings has always been the lack of good tutorials and examples. Well all this ends now! We have setup a wiki, and all registered users may add new articles, FAQ entries and more. So please start filling the wiki with content:<br><a href=\"http://wiki.lwjgl.org\" target=\"_blank\">LWJGL Wiki</a>",
    "Thursday, April 29th, 2004");

  $news[5] = array(
    "LWJGL 0.9a released", 
    "LWJGL 0.9 alpha has been released! Download <a href=\"http://www.lwjgl.org/download.php\">here</a>.<br>consider <a href=\"http://sourceforge.net/donate/index.php?group_id=58488\">donating</a> if you find LWJGL usefull.",
    "Tuesday, April 13th, 2004");
  
  $news[6] = array(
    "New site!", 
    "Welcome to the grand opening of our new site! Please browse around. Should you find any errors or have trouble finding exactly what your looking for, please email <a href=\"mailto:info@lwjgl.org\">info@lwjgl.org</a>",
    "Sunday, March 28th, 2004");
  
  // -------------------------------------------------------
  
  /////////////////////////////////////////////////////////////////////////////////
  // Prints the news
  ////////////////////////////////////////////////////////////////////////////////
  function printNews() {
    global $news;
    
    echo "<!-- news area -->\n  ";
    echo "<div class=\"news\">";
    echo "<h2>News</h2>";

    // iterate each array for sub items
    foreach ($news as $item) {
      echo "\n    <div class=\"news_item\">";
      echo "<h4>" . $item[0] . "</h4>";
      echo "<p>";
      echo "$item[1]";
      echo "<span class=\"date\"><br><i>$item[2]</i></span>";
      echo "</p>";
      echo "</div>";
      echo "<br>";
    }
    echo "\n  </div>\n";  
  }
?>