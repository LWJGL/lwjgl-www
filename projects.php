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
					'url'     => 'http://www.drx.dk/starship2d.php',
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

$projects[] = array('name'    => 'Super Dudester',
					'url'     => 'http://puppygames.net',
					'type'    => 'Commercial game',
					'desc'    => 'Super Dudester is trapped in Dr. Doooom\'s Bad Trip Machine! Only you can help him escape. The Dude must make his way from the start room to the exit room. Each room he encounters is different, and he must learn how to escape each one.',
					'screens' => array(0 => array('small' => 'superdudester_small_1.jpg',
											      'big'   => 'superdudester_1.jpg'),
								       1 => array('small' => 'superdudester_small_2.jpg',
												  'big'   => 'superdudester_2.jpg'),
								       2 => array('small' => 'superdudester_small_3.jpg',
												  'big'   => 'superdudester_3.jpg')));		
												  
$projects[] = array('name'    => 'Gravity Battle',
					'url'     => 'http://www.cokeandcode.com/gravitybattle/',
					'type'    => 'Commercial game (in progress)',
					'desc'    => 'Gravity Battle is a game of thrust and control. Gently guide your pod around the levels completing the tasks set out. Watch out for the inhabitants of the caverns and be sure to pick up all the bonuses. Ah, but wait! Completing the level isn\'t good enough, can you get 3 medals on every level?',
					'screens' => array(0 => array('small' => 'gravitybattle_small_1.jpg',
											      'big'   => 'gravitybattle_1.jpg'),
								       1 => array('small' => 'gravitybattle_small_2.jpg',
												  'big'   => 'gravitybattle_2.jpg'),
								       2 => array('small' => 'gravitybattle_small_3.jpg',
												  'big'   => 'gravitybattle_3.jpg')));												  										  
												  
$projects[] = array('name'    => 'Puppytron',
					'url'     => 'http://www.puppygames.net/',
					'type'    => 'Freeware game',
					'desc'    => 'Intense shoot-em-up with 100% pure frenzied gameplay. Play for the glory. Only hiscores matter. Play it <a href="http://puppygames.net/applets/puppytron.jnlp">here</a>',
					'screens' => array(0 => array('small' => 'puppytron_small_1.jpg',
											      'big'   => 'puppytron_1.jpg'),
								       1 => array('small' => 'puppytron_small_2.jpg',
												  'big'   => 'puppytron_2.jpg'),
								       2 => array('small' => 'puppytron_small_3.jpg',
												  'big'   => 'puppytron_3.jpg')));
												 
$projects[] = array('name'    => 'Illuminati',
					'url'     => 'http://www.ninjasoftware.com/',
					'type'    => 'Commercial game',
					'desc'    => 'Brick-puzzle game featuring awesome visuals and music. A free demo is available for you to check out the addictive gameplay!',
					'screens' => array(0 => array('small' => 'illuminati_small_1.jpg',
											      'big'   => 'illuminati_1.jpg'),
								       1 => array('small' => 'illuminati_small_2.jpg',
												  'big'   => 'illuminati_2.jpg'),
								       2 => array('small' => 'illuminati_small_3.jpg',
												  'big'   => 'illuminati_3.jpg')));		

$projects[] = array('name'    => 'Cultris',
					'url'     => 'http://cultris.ath.cx/',
					'type'    => 'Free game',
					'desc'    => 'Everyone knows Tetris - Cultris is a extremly fast-paced multiplayer version.',
					'screens' => array(0 => array('small' => 'cultris_small_1.jpg',
											      'big'   => 'cultris_1.jpg'),
								       1 => array('small' => 'cultris_small_2.jpg',
												  'big'   => 'cultris_2.jpg'),
								       2 => array('small' => 'cultris_small_3.jpg',
												  'big'   => 'cultris_3.jpg')));	
                          
$projects[] = array('name'    => 'Keith Goes Painting ',
					'url'     => 'http://www.wolfys.co.uk/',
					'type'    => 'Free game',
					'desc'    => 'Keiths\' Boss has left town with intstructions that all the furniture in his house must be painted. It is up to you to guide Keith around the big house and paint the furniture before his Boss comes home and sacks him. The house seems to be infested with giant worms, flappy bat things and other rare baddys. But fear not, for Keith is armed with a paint gun which can be used splat a path through the house. There are many hidden places to explore and secrets to find, good luck!',
					'screens' => array(0 => array('small' => 'keith_goes_painting_small_1.jpg',
											      'big'   => 'keith_goes_painting_1.jpg'),
								       1 => array('small' => 'keith_goes_painting_small_2.jpg',
												  'big'   => 'keith_goes_painting_2.jpg'),
								       2 => array('small' => 'keith_goes_painting_small_3.jpg',
												  'big'   => 'keith_goes_painting_3.jpg')));	                          
												  
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
		echo "            <td width=\"110\" valign=\"top\">&nbsp;&nbsp;&nbsp;&nbsp;<i>Description:</i></td>\n";
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
	The following is a list of projects that use LWJGL. Please write to <a href="mailto:info@lwjgl.org">info@lwjgl.org</a> if you have a project you want to have listed. Please include 3 small and large screenshots along with a description of your project.
</p>

<?
displayProjects();

require('_include/footer.php');
?>
