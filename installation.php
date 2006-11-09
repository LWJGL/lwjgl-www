<? require('_include/header.php'); ?>

<h1><a name="top">Installation</a></h1>
<p>
	As LWJGL is more or less self contained, the actual installation typically amounts to extracting the archive, and asserting that everything works fine by running an example. The following paragraphs will walk you through the installation on the supported platforms: <a href="#windows">Windows</a>, <a href="#linux">Linux</a> and <a href="#macosx">Mac OS X</a>.<br/><br/>

	Below the installations instructions you will find help on how to integrate LWJGL into <a href="#eclipse">Eclipse</a>, <a href="#netbeans">Netbeans</a> and <a href="#jcreator">JCreator</a>.<br/><br/>

	<b><a name="windows">Windows</a></b> <span class="newsdate"><a href="#top">Back to top</a></span>
</p>
<ul>
	<li><a href="download.php">Download</a> the distribution</li>
	<li>
		Unpack the archive, file contents (in sub folders) should include (amongst other things):<br/><br/>
		<pre>lwjgl.dll
lwjglaudio.dll
lwjgl.jar
lwjgl_util.jar
lwjgl_test.jar</pre>
	</li>
	<li>
		Test LWJGL by opening a command prompt, and navigating to the folder where the archive was extracted. Once navigated, issue the following command:<br/><br/>
		<pre>java -cp .;res;jar\lwjgl.jar;jar\lwjgl_test.jar;jar\lwjgl_util.jar;jar\lwjgl_fmod3.jar;jar\lwjgl_devil.jar;jar\jinput.jar; 
    -Djava.library.path=native\win32 org.lwjgl.test.WindowCreationTest</pre>
		A window should appear and you should see the following output:<br/><br/>
		<pre>Found &lt;number&gt; display modes
240, 320, WindowCreationTest
Display created
Moving to 100, 100
Window created
600, 800, Game</pre>
	</li>
</ul>

<p>
	<b><a name="linux">Linux</a></b> <span class="newsdate"><a href="#top">Back to top</a></span>
</p>
<ul>
	<li><a href="download.php">Download</a> the distribution</li>
	<li>
		Unpack the archive, file contents (in sub folders) should include (amongst other things):<br/><br/>
		<pre>liblwjgl.so
libopenal.so
lwjgl.jar
lwjgl_util.jar
lwjgl_test.jar</pre>
	</li>
	<li>
		Test LWJGL by opening a command prompt, and navigating to the folder where the archive was extracted. Once navigated, issue the following command:<br/><br/>
		<pre>java -cp .:res:jar/lwjgl.jar:jar/lwjgl_test.jar:jar/lwjgl_util.jar:jar/lwjgl_fmod3.jar:jar/lwjgl_devil.jar:jar/jinput.jar: 
    -Djava.library.path=native/linux org.lwjgl.test.WindowCreationTest</pre>
		Should library loading fail, try using -Djava.library.path to specify the path. For example:<br/><br/>
		<pre>java -cp .:res:jar/lwjgl.jar:jar/lwjgl_test.jar:jar/lwjgl_util.jar:jar/lwjgl_fmod3.jar:jar/lwjgl_devil.jar:jar/jinput.jar: 
    -Djava.library.path=/home/lwjgluser/lwjgl/ org.lwjgl.test.WindowCreationTest</pre>
		A window should appear and you should see the following output:<br/><br/>
		<pre>Found &lt;number&gt; display modes
240, 320, WindowCreationTest
Display created
Moving to 100, 100
Window created
600, 800, Game</pre>
	</li>
</ul>

<p>
	<b><a name="macosx">Mac OS X</a></b> <span class="newsdate"><a href="#top">Back to top</a></span>
</p>
<ul>
	<li><a href="download.php">Download</a> the distribution</li>
	<li>
		Unpack the archive, file contents (in sub folders) should include (amongst other things):<br/><br/>
		<pre>liblwjgl.jnilib
libopenal.dylib
lwjgl.jar
lwjgl_util.jar
lwjgl_test.jar</pre>
	</li>
	<li>
		Test LWJGL by opening a command prompt, and navigating to the folder where the archive was extracted. Once navigated, issue the following command:<br/><br/>
		<pre>java -cp .:res:jar/lwjgl.jar:jar/lwjgl_test.jar:jar/lwjgl_util.jar:jar/lwjgl_fmod3.jar:jar/lwjgl_devil.jar:jar/jinput.jar: 
    -Djava.library.path=native/macosx org.lwjgl.test.WindowCreationTest</pre>
		A window should appear and you should see the following output:<br/><br/>
		<pre>Found &lt;number&gt; display modes
240, 320, WindowCreationTest
Display created
Moving to 100, 100
Window created
600, 800, Game</pre>
	</li>
</ul>

<h1><a name="ide">Installation</a></h1>
<p>
	Using LWJGL in your IDE is as as simple as including the jar and telling where the native files are to be located. The following lists how to install LWJGL in some popular IDEs: <a href="#eclipse">Eclipse</a>, <a href="#netbeans">Netbeans</a>, <a href="#jcreator">JCreator</a>.<br/><br/>
	
	<b><a name="eclipse">Eclipse</a></b> <span class="newsdate"><a href="#top">Back to top</a></span>
</p>
<ul>
	<li>Having installed LWJGL on your platform of choice, fire up Eclipse.</li>
	<li>
		Create a new project, and add lwjgl.jar to the build path of your project (Project->Properties->Java build path) by clicking 'Add External JARs' under the Libraries tab<br/><br/>
		<img src="_gfx/installation/eclipse-1.png" alt="LWJGL Installation under Eclipse"/><br/><br/>
	</li>
	<li>
		Having created a class to run, create a new run target by selecting the 'Run' icon or using the menu (Run -> Run...)<br/><br/>
		<img src="_gfx/installation/eclipse-2.png" alt="LWJGL Installation under Eclipse"/><br/><br/>
		Select 'New' from the dialog box<br/><br/>
		<img src="_gfx/installation/eclipse-3.png" alt="LWJGL Installation under Eclipse"/><br/><br/>
		Supply a name for your new target, and make SURE you add the path to the dll files supplying the -Djava.library.path argument to the vm. The path you supply is relative to the working directory. Adjust this too if needed.<br/><br/>
		<img src="_gfx/installation/eclipse-4.png" alt="LWJGL Installation under Eclipse"/><br/><br/>
	</li>
	<li>You should now be able to run the application directly from Eclipse. Run the newly created target to confirm.</li>
</ul>

<p>
	<b><a name="netbeans">Netbeans</a></b> <span class="newsdate"><a href="#top">Back to top</a></span>
</p>
<ul>
	<li>Having installed LWJGL on your platform of choice, fire up Netbeans.</li>
	<li>
		Create a new project, and mount lwjgl.jar in the project filesystem by right clicking the Filesystem and selecting Mount -> Archive Files<br/><br/>
		<img src="_gfx/installation/netbeans-1.png" alt="LWJGL Installation under Netbeans"/><br/><br/>
	</li>
	<li>
		Having created a class to run, you need to setup that class to execute using an External Execution<br/><br/>
		<img src="_gfx/installation/netbeans-2.png" alt="LWJGL Installation under Netbeans"/><br/><br/>
		Since Netbeans doesn't allow to change the library path you either have to change the working directory of the executor to the lwjgl.dll or copy files over to whereever you run from. More info is provided in the <a href="http://www.netbeans.org/kb/faqs/miscellaneous.html#FAQ_34" target="_blank">Netbeans FAQ</a>.<br/><br/>
		<img src="_gfx/installation/netbeans-3.png" alt="LWJGL Installation under Netbeans"/><br/><br/>
	</li>
	<li>You should now be able to run the application directly from Netbeans. Push F6 to verify.</li>
</ul>

<p>
	<b><a name="jcreator">JCreator</a></b> <span class="newsdate"><a href="#top">Back to top</a></span>
</p>
<ul>
	<li>
		Create project. Goto Project->Project Properties, select 'Required Libraries' tab and click New.<br/><br/>
		<img src="_gfx/installation/jcreator-1.jpg" alt="LWJGL Installation under JCreator"/><br/><br/>
	</li>
	<li>
		Call new library collection LWJGL. Click add->path and add the path to where you installed lwjgl. Then click add->Archive and select the 2 .jar files.<br/><br/>
		<img src="_gfx/installation/jcreator-2.jpg" alt="LWJGL Installation under JCreator"/><br/><br/>
	</li>
	<li>
		Make sure the LWJGL library is ticked.<br/><br/>
		<img src="_gfx/installation/jcreator-3.jpg" alt="LWJGL Installation under JCreator"/><br/><br/>
	</li>
</ul>
	

<? require('_include/footer.php'); ?>
