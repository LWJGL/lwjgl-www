<?
require('_include/header.php');

$projects = array();

$projects[] = array('name'    => 'Extorris',
					'url'     => 'http://extorris.com',
					'type'    => 'Commercial game',
					'desc'    => 'The extorris game is multiplayer online game set in a futuristic society of convicts. The game build upon the classic concept of space warfare and exploration. The player is a convict banished by an authority to a far away galaxy. Here is he left on his own with a small ship. His goal is now to survive among the other convicts in a harsh anarchistic world and if possible find a way home.',
					'screens' => array(0 => array('small' => 'extorris_small_1.jpg',
					 							  'big'   => 'extorris_1.jpg'),
								       1 => array('small' => 'extorris_small_2.jpg',
												  'big'   => 'extorris_2.jpg'),
								       2 => array('small' => 'extorris_small_3.jpg',
												  'big'   => 'extorris_3.jpg')));

$projects[] = array('name'    => 'Vermin ExTerminator',
					'url'     => 'http://www.vermin-exterminator.de/',
					'type'    => 'Free, open source game',
					'desc'    => 'Vermin ExTerminator is a free multiplayer network game. It\'s a 2D real-time first-person shooter. Little worms (vermins) fight against each other using hand guns, rifles, grenades or rockets. In other words the game is mix of liero and a real-time worms. The game is written in Java with LWJGL as OpenGL and OpenAL interface. The development is open source and still in progress and till now Vermin ExTerminator is only in alpha version.',
					'screens' => array(0 => array('small' => 'vermins_small_1.jpg',
												  'big'   => 'vermins_1.jpg'),
								       1 => array('small' => 'vermins_small_2.jpg',
												  'big'   => 'vermins_2.jpg')));
												   
$projects[] = array('name'    => 'StarShip2D',
					'url'     => 'http://www.drx.dk/starship2d.html',
					'type'    => 'Free, open source game',
					'desc'    => 'StarShip2D is a 2d scroller game, where you shoot incomming enemies with your cannon or powerfull rockets.',
					'screens' => array(0 => array('small' => 'starship2d_small_1.jpg',
											      'big'   => 'starship2d_1.jpg'),
								       1 => array('small' => 'starship2d_small_2.jpg',
												  'big'   => 'starship2d_2.jpg'),
								       2 => array('small' => 'starship2d_small_3.jpg',
												  'big'   => 'starship2d_3.jpg')));

$projects[] = array('name'    => 'Tribal Trouble',
					'url'     => 'http://www.tribaltrouble.com/',
					'type'    => 'Commercial game',
					'desc'    => 'Take the role of a chieftain and lead your clueless kinsmen to new discoveries and victories as tribal clashes rage across a group of tropical islands. Tribal Trouble is a fast paced realtime strategy game where you will find yourself pitted against your computer or online players as you collect resources, research new ground-breaking technologies (such as the spear) and rejoice as your armies burn down enemy villages.',
					'screens' => array(0 => array('small' => 'tribaltrouble_small_1.jpg',
											      'big'   => 'tribaltrouble_1.jpg'),
								       1 => array('small' => 'tribaltrouble_small_2.jpg',
												  'big'   => 'tribaltrouble_2.jpg'),
								       2 => array('small' => 'tribaltrouble_small_3.jpg',
												  'big'   => 'tribaltrouble_3.jpg')));
												  
$projects[] = array('name'    => 'Alien Flux',
					'url'     => 'http://puppygames.net',
					'type'    => 'Commercial game',
					'desc'    => 'Defend the cutest, fluffiest little creatures in the Galaxy from a horde of evil aliens from the fifth dimension! With only fast reactions, animal cunning and a very big laser cannon to help you, you must rescue the Fluffies as malevolent Bubbles attempt to turn them into lime jelly. Fast, fun and furious original arcade action, incredible graphics, and atmospheric sound effects combine to make Alien Flux the best arcade shoot-em-up you\'ve played for over a decade!',
					'screens' => array(0 => array('small' => 'alienflux_small_1.jpg',
											      'big'   => 'alienflux_1.jpg'),
								       1 => array('small' => 'alienflux_small_2.jpg',
												  'big'   => 'alienflux_2.jpg'),
								       2 => array('small' => 'alienflux_small_3.jpg',
												  'big'   => 'alienflux_3.jpg')));

function displayProjects() {
	
	GLOBAL $projects;
	
	shuffle($projects);
	
	foreach ($projects as $project) {
		echo "<p>\n";
		echo "    <b>".$project['name']."</b> <span class=\"newsdate\"><a href=\"#top\">Back to top</a></span><br/><br/>\n";
		echo "    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-bottom: 1px solid #cccccc;\">\n";
		echo "        <tr>\n";
		echo "            <td width=\"110\">&nbsp;&nbsp;&nbsp;&nbsp;<i>Website:</i></td>\n";
		echo "            <td><a href=\"".$project['url']."\" target=\"_blank\">".$project['url']."</a></td>\n";
		echo "        </tr>\n";
		echo "        <tr>\n";
		echo "            <td width=\"110\">&nbsp;&nbsp;&nbsp;&nbsp;<i>Type:</i></td>\n";
		echo "            <td>".$project['type']."</td>\n";
		echo "        </tr>\n";
		echo "        <tr>\n";
		echo "            <td width=\"110\">&nbsp;&nbsp;&nbsp;&nbsp;<i>Description:</i></td>\n";
		echo "            <td>".$project['desc']."</td>\n";
		echo "        </tr>\n";
		echo "        <tr>\n";
		echo "            <td colspan=\"2\"><br/>\n";
		
		for ($i = 0; $i < count($project['screens']); $i++) {
			echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"javascript: openPopUp('".urlencode($project['screens'][$i]['big'])."');\"><img src=\"_gfx/projects/".$project['screens'][$i]['small']."\" border=\"0\" alt=\"\"/></a>\n";
		}
		
		echo "            <br/><br/></td>\n";
		echo "        </tr>\n";
		echo "    </table>\n";
		echo "</p>\n";
	}
}
?>

<script language="JavaScript">
	<!--
		function openPopUp(image) {
			openWindow = window.open('picpopup.php?image='+image,'ProjectScreenshot','resizable=no,scrollbars=auto,menubar=no,toolbar=no,location=no,width=400,height=400');
		}
	//-->
</script>

<h1><a name="top">Projects</a></h1>
<p>
	The following is a list of projects that use LWJGL. Please write to <a href="mailto:info@lwjgl.org">info@lwjgl.org</a> if you have a project you want to have listed.
</p>

<?
displayProjects();

require('_include/footer.php');
?>
