<? require('_include/header.php'); ?>
<h1>Donations</h1>
<p>
	In the span of LWJGL's lifetime a series of donations have enabled us to advance the project further
	by purchasing hardware and services to make LWJGL an even better solution for your problems. Should you
	wish to donate to the project too, please do so using the paypal link to the lower left in the menu.
	<br/>
	<i>If you are not on this list and have donated please contact <a href="mailto:donation@lwjgl.org">donation@lwjgl.org</a> and we will fix this ASAP</i>
	<br/>
	<br/>
	The following is a randomized list of users that have donated to the LWJGL project:<br/>
	<i>note: we no longer link to sites, due to several SEO only donations</i>
</p>
<ul>
	<?
		$donations[] = array("Brian Matzon");
		$donations[] = array("Anthony Rogers");
		$donations[] = array("Anthony Lovell");
		$donations[] = array("Shane Essary");
		$donations[] = array("Gavia");
		$donations[] = array("Oliver Due Billing");
		$donations[] = array("Apostolos Tsakpinis");
		$donations[] = array("Scott Palmer");
		$donations[] = array("Chris Heimpel");
		$donations[] = array("Caspian Rychlik-Prince");
		$donations[] = array("Christiaan Ghijselinck");
		$donations[] = array("David Hope");
		$donations[] = array("Ruben Steins");
		$donations[] = array("Sharp Production");
		$donations[] = array("John Yates");
		$donations[] = array("Benoit Hambucken");
		$donations[] = array("John Watson");
		$donations[] = array("Elias Naur");
		$donations[] = array("Andrew Kelly");
		$donations[] = array("Gregory Pierce");
		$donations[] = array("Shannon Smith");
		$donations[] = array("Franz Bartlechner - multiple donations");
		$donations[] = array("Peter Koeleman");
		$donations[] = array("Benjamin Bingham");
		$donations[] = array("So-Woo Lee");
		$donations[] = array("Tonny Espeset");
		$donations[] = array("Ivan Lazarte");
		$donations[] = array("SEO Company");
		$donations[] = array("Christian Haehnel");
		$donations[] = array("Marc Sachse");
		$donations[] = array("Steve Klouvi");
		$donations[] = array("Franz Bartlechner");
		$donations[] = array("Ewald Kicker");
		$donations[] = array("Filippo Cortigiani");
		$donations[] = array("Christoph Kilz");
		$donations[] = array("Jesse Pavel");
		$donations[] = array("Charles Ditzel");
		$donations[] = array("Thomas Schuster");
		$donations[] = array("Aviram Preshel");
		$donations[] = array("Tomas Andrle - multiple donations");
		$donations[] = array("Jörg Junghänel");
		$donations[] = array("Tobias Fritz");
		$donations[] = array("Nathan Sweet");
		$donations[] = array("Tiana Bruno Rakotoarimanana");
		$donations[] = array("Andreas Wallberg");
		$donations[] = array("Andreas Wiesbauer");
		
		shuffle($donations);
		
		foreach($donations as $key => $value) {
			echo '<li>';
			echo htmlentities($value[0]);
			echo '</li>';
		}
	?>
</ul>
<p>
	<b>LWJGL Monetary situation as of 18th November 2008</b>
	<p>
		<i>I have stopped making a detailed list available online, because its basically always stale. I am maintaining an ad hoc list of income/expenses that is available on request.</i>
		<br/>
		We have about 300$ on paypal (income: donations, expenses: hosting) and about (depending on dollar rate) 400$ on my account (income: adsense, expenses: domains, ssl).<br/>
		We are averaging about 20$ a month in expenses and a 125$ every year for a certificate. The average income from adsense is $20 a month (with %50 comming from echelog! (all channels)).
		<br/>
</p>
<br/>
</p>
</div>

<? require('_include/footer.php'); ?>
