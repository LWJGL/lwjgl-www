<?
require('_include/header.php');

function displayChangelog($version) {
	echo "<p>\n";
	echo "    <a name=\"".$version."\"><b>LWJGL ".$version."</b></a> <span class=\"newsdate\"><a href=\"#top\">Back to top</a></span>\n";
	echo "</p>\n";
	echo "<pre>";
	@readfile('changelogs/'.$version.'-changelog.txt');
	echo "</pre>";
}
?>

<h1><a name="top">Changelog</a></h1>
<p>
	The following is a list of changes of LWJGL per release.
</p>
<ul>
	<li><a href="http://www.lwjgl.org/changelogs/full-changelog.txt" target="_blank">Full changelog</a></li>
	<li><a href="#0.93">LWJGL 0.93</a></li>
	<li><a href="#0.92">LWJGL 0.92</a></li>
	<li><a href="#0.90">LWJGL 0.90</a></li>
	<li><a href="#0.89">LWJGL 0.89</a></li>
	<li><a href="#0.80">LWJGL 0.80</a></li>
	<li><a href="#0.70">LWJGL 0.70</a></li>
	<li><a href="#0.60">LWJGL 0.60</a></li>
	<li><a href="#0.50">LWJGL 0.50</a></li>
	<li><a href="#0.40">LWJGL 0.40</a></li>
	<li><a href="#0.30">LWJGL 0.30</a></li>
	<li><a href="#0.20">LWJGL 0.20</a></li>
	<li><a href="#0.10">LWJGL 0.10</a></li>
</ul>

<?
displayChangelog('0.93');
displayChangelog('0.92');
displayChangelog('0.90');
displayChangelog('0.89');
displayChangelog('0.80');
displayChangelog('0.70');
displayChangelog('0.60');
displayChangelog('0.50');
displayChangelog('0.40');
displayChangelog('0.30');
displayChangelog('0.20');
displayChangelog('0.10');

require('_include/footer.php');
?>
