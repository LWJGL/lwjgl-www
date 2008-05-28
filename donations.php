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
		$donations[] = array("Franz Bartlechner");
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
		$donations[] = array("Tomas Andrle");
		$donations[] = array("Jörg Junghänel");
		
		shuffle($donations);
		
		foreach($donations as $key => $value) {
			echo '<li>';
			echo htmlentities($value[0]);
			echo '</li>';
		}
	?>
</ul>
<p>
	<b>LWJGL Monetary situation as of 27th August 2006</b>
<p>The following table displays the current monetary situation of LWJGL. It is purely made to get an overview and does not necessarily accurately display the exact current funds of LWJGL.
	<br/>
	Please note that the total expenses are currently 20$/month + domains (lwjgl.org/.com).
</p>
<table align="center">
	<tr>
		<td colspan="2"><b>Income</b></td>
	</tr>
	<tr>
		<td width="100">Adsense</td>
		<td align="right">$529.95</td>
	</tr>
	<tr>
		<td>Paypal</td>
		<td align="right">$669.7</td>
	</tr>
	<tr>
		<td>Total income</td>
		<td align="right">$1199.65</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2"><b>Expenses</b></td>
	</tr>
	<tr>
		<td>Hosting</td>
		<td align="right">$120.00</td>
	</tr>
	<tr>
		<td>Domains</td>
		<td align="right">$0.00</td>
	</tr>
	<tr>
		<td>Code signing certificate</td>
		<td align="right">$99.5</td>
	</tr>
	<tr>
		<td>Total expenses</td>
		<td align="right">$219.5</td>
	</tr>
</table>
<div align="center">
<br/>
<i>Adsense currently averages at $0.99/day</i>
<br/>
<br/>
<h2>Planned expenses</h2>
<p>
 * <strike>LWJGL Developer Guide - $1000/onetime</strike>
</p>
<br/>
</p>
</div>

<? require('_include/footer.php'); ?>
