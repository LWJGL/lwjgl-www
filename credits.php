<?php
  require 'include/default.php';
  require 'include/news.php';

  printHeader(null, null);
  printMenu("credits");
?>

  <!-- Introduction -->
  <div class="paragraph_item">
    <h2>Credits</h2>
    <p>
		The following people have helped to make this project what it is today:
		<br>
		<br>
		<b>Active developers:</b><br>
 			- Caspian Rychlik-Prince<br>
 			- Brian Matzon<br>
 			- Elias Naur<br>
 			- Erik Duijs<br>
 			- Ioannis Tsakpinis<br>
 		<br>
 		<br>
 		<b>Contributors:</b><br>
 			- Niels Jørgensen<br>
 			- Tristan Campbell<br>
 			- Gregory Pierce<br>
 			- Luke Holden<br>
		<br>
		<br>
		<b>Additional credits goes to:</b><br>
 			- Joseph I. Valenzuela [OpenAL stuff]<br>
 			- Lev Povalahev [OpenGL Extensions]<br>
    </p>
  </div>
  
<?php 
  printFooter();
?>