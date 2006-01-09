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
	<i>If you want a link associated with your name, please mention this when donating or send an email to <a href="mailto:donation@lwjgl.org">donation@lwjgl.org</a><br/>
</p>
<ul>
	<?
		$donations[] = array("Brian Matzon", 														"http://echelog.matzon.dk/");
		$donations[] = array("Anthony Rogers [tomato.co.uk]", 													"http://www.tomato.co.uk/");
		$donations[] = array("Anthony Lovell", 													"");
		$donations[] = array("Shane Essary", 														"");
		$donations[] = array("Gavia", 																	"");
		$donations[] = array("Oliver Due Billing", 											"");
		$donations[] = array("Apostolos Tsakpinis [zdimensions.gr]", 										"http://www.zdimensions.gr/");
		$donations[] = array("Scott Palmer", 														"");
		$donations[] = array("Chris Heimpel", 													"");
		$donations[] = array("Caspian Rychlik-Prince [puppygames.net]", "http://puppygames.net/");
		$donations[] = array("Christiaan Ghijselinck", 									"");
		$donations[] = array("David Hope", 															"");
		$donations[] = array("Ruben Steins", 														"");
		$donations[] = array("Sharp Production", 												"");
		$donations[] = array("John Yates", 															"");
		$donations[] = array("Benoit Hambucken", 												"");
		$donations[] = array("John Watson", 														"");
		$donations[] = array("Elias Naur [oddlabs.com]", 								"http://oddlabs.com");
		$donations[] = array("Andrew Kelly [games.swizel-studios.com]", 														"http://games.swizel-studios.com/");
		$donations[] = array("Gregory Pierce", "");
		$donations[] = array("Shannon Smith", "");
		$donations[] = array("Franz Bartlechner", "");
		$donations[] = array("Peter Koeleman", "");

		
		shuffle($donations);
		
		foreach($donations as $key => $value) {
			echo '<li>';
			if($value[1] != '') {
				echo '<a href="' . $value[1] . '" target="_blank">' . $value[0] . '</a>';
			} else {
				echo $value[0];
			}
			echo '</li>';
		}
	?>
</ul>
<p>
	<b>LWJGL Monetary situation as of 9th January 2006</b>
<p>The following table displays the current monetary situation of LWJGL. It is purely made to get an overview and does not necessarily accurately display the exact current funds of LWJGL.
	<br/>
	Please note that the total expenses are currently 0$ since the hosting is provided free of charge by <a href="http://puppygames.net">Puppygames</a> and that the domains (lwjgl.org and lwjgl.com) are paid by <a href="mailto:brian@matzon.dk">Brian Matzon</a>.
</p>
<table align="center">
	<tr>
		<td colspan="2"><b>Income</b></td>
	</tr>
	<tr>
		<td width="100">Adsense</td>
		<td align="right">$322.35</td>
	</tr>
	<tr>
		<td>Paypal</td>
		<td align="right">$236.84</td>
	</tr>
	<tr>
		<td>Total income</td>
		<td align="right">$559.19</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2"><b>Expenses</b></td>
	</tr>
	<tr>
		<td>Hosting</td>
		<td align="right">$0.00</td>
	</tr>
	<tr>
		<td>Domains</td>
		<td align="right">$0.00</td>
	</tr>
	<tr>
		<td>Total expenses</td>
		<td align="right">$0.00</td>
	</tr>
</table>
<div align="center">
<br/>
<i>Adsense currently averages at $1.47/day</i>
<br/>
<br/>
<h2>Planned expenses</h2>
<p>
	* LWJGL Developer Guide - $1000/onetime
</p>
<br/>
<h2>Wishlist</h2>
<p>
	* LWJGL Code signing certificate - $200/year
</p>	
</p>
</div>

<? require('_include/footer.php'); ?>
