<div class="paragraph_item">
    <h2>A Closer Look at ALC: Lesson 4</h2>
    <p class="title" align="center">
    Author: <a href="mailto:lightonthewater@hotmail.com">Jesse Maurais</a> | From: <a href="http://www.devmaster.net/articles.php?catID=6" target="_blank">devmaster.net</a><br>
    Modified for LWJGL by: <a href="mailto:brian@matzon.dk">Brian Matzon</a>
    </p>    
    <div style="width: 20em; float: right; padding: 10;"><table border="0" bgcolor="#000000" cellpadding="5" cellspacing="1">
    <tr>
      <td width="100%" class="BlockHeader"><p align="center" class="tableHeader"><b>Other Articles in the Series</b></p></td>
    </tr>
    <tr>
      <td width="100%" bgcolor="#ffffff">
        <table cellpadding="0" cellspacing="0">
          <tr>
            <td width="10%" align="center">*</td>
            <td width="90%" class="ArticleDesc">
            <a href="documentation.php?page=tutorials/openal/devmaster/lesson1">Lesson 1: Single Static Source</a></td>
          </tr>
          <tr>
            <td width="10%" align="center">*</td>
            <td width="90%" class="ArticleDesc">
            <a href="documentation.php?page=tutorials/openal/devmaster/lesson2">Lesson 2: Looping and Fade-away</a></td>
          </tr>
          <tr>
            <td width="10%" align="center">*</td>
            <td width="90%" class="ArticleDesc">
            <a href="documentation.php?page=tutorials/openal/devmaster/lesson3">Lesson 3: Multiple Sources</a></td>
          </tr>
          <tr>
            <td width="10%" align="center">*</td>
            <td width="90%" class="ArticleDesc">
            <a href="documentation.php?page=tutorials/openal/devmaster/lesson4">Lesson 4: A Closer Look at ALC</a></td>
          </tr>
          <tr>
            <td width="10%" align="center">*</td>
            <td width="90%" class="ArticleDesc">
            <a href="documentation.php?page=tutorials/openal/devmaster/lesson5">Lesson 5: Sources Sharing Buffers</a></td>
          </tr>
          <tr>
            <td width="10%" align="center">*</td>
            <td width="90%" class="ArticleDesc">
            <a href="documentation.php?page=tutorials/openal/devmaster/lesson6">Lesson 6: Advanced Loading and Error Handles</a></td>
          </tr>
          <tr>
            <td width="10%" align="center">*</td>
            <td width="90%" class="ArticleDesc">
            <a href="documentation.php?page=tutorials/openal/devmaster/lesson7">Lesson 7: The Doppler Effect</a></td>
          </tr>
        </table>
        </td>
      </tr>
    </table>
  </div>
<p>
<i><b>Note:</b>This article originally deals with ALC Context management, and especially
using multiple contexts. The LWJGL binding does <b>not</b> expose multiple contexts, nor do 
we have any plans to do so. It is an advanced feature, not used in games. This article has
also been edited heavily to make sense in an LWJGL environment which doesn't expose ALC directly.</i></p>
<p>
Up until now we have been letting <code>AL.create()</code> do all the real tricky stuff for 
us. For example handling the audio devices. It's really nice that the 
<code>AL.create()</code> method is there to provide this functionality, but any smart coder 
will want to know exactly what their doing. We may want to, at some point, 
use the verbose <code>AL.create(String deviceArguments, <span class="codeKeyword">int</span> contextFrequency, <span class="codeKeyword">int</span> contextRefresh, <span class="codeKeyword">boolean</span> contextSynchronized)</code> method. 
In this tutorial we will expose the Alc layer and take 
a look at how to handle the devices on our own.</p>
<p>
When using either of the two create methods of <code>AL</code>, a default 
context and device is created for you. You cannot create multiple contexts nor can you
access multiple devices. Thus a lot of the ALC methods are not available, since they
simply don't make any sense. Methods that are available also no longer take a device
or context parameter since they are managed internally.
</p>
<pre class="code">
    <span class="codeComment">// Initialize OpenAL and clear the error bit.</span>
    <span class="codeKeyword">try</span>{
    	AL.create();
    } <span class="codeKeyword">catch</span> (LWJGLException le) {
    	le.printStackTrace();
      <span class="codeKeyword">return</span>;
    }
    AL10.alGetError();
</pre>
<p>Using the default create method is the simplest way to create a context and access a
device. Default values are used, and once called OpenAL is initialized and ready to go.</p>
<pre class="code">
    <span class="codeComment">// Initialize OpenAL and clear the error bit.</span>
    <span class="codeKeyword">try</span>{
    	AL.create("DirectSound3D", 44100, 15, <span class="codeKeyword">false</span>);
    } <span class="codeKeyword">catch</span> (LWJGLException le) {
    	le.printStackTrace();
      <span class="codeKeyword">return</span>;
    }
    AL10.alGetError();
</pre>
<p>Here we initialize OpenAL using arguments for ALC. The first argument tells ALC which device to
access. Passing null is a perfectly valid argument. It forces the ALC to use a default device.<br>
The second argument tells ALC the frequency for mixing output buffer, in units of Hz.
Third argument tells ALC how often it should update it's internal state and buffers.
The final argument determines whether the ALC should run in synchronous mode.
</p>
<pre class="code">
    <span class="codeKeyword">public static int</span> alcGetError();
    <span class="codeKeyword">public static boolean</span> alcIsExtensionPresent(String extName);
    <span class="codeKeyword">public static int</span> alcGetEnumValue(String enumName);
    <span class="codeKeyword">public static </span>String alcGetString(<span class="codeKeyword">int</span> pname);
    <span class="codeKeyword">public static void</span> alcGetInteger(<span class="codeKeyword">int</span> pname, IntBuffer integerdata);
</pre>
<p>It may be pretty obvious to you what these do, but lets humour ourselves and have a closer look. 
First we have 'alcGetError' which is just like 'alGetError' but will return Alc errors. 
The next two functions are for querying Alc extensions. This was just the creators planning 
ahead, as there are no Alc extensions either. The last function, 'alcGetInteger', will return the 
Alc version when passed 'ALC_MAJOR_VERSION' or 'ALC_MINOR_VERSION'.<br>

The function 'alcGetString' is pretty cool. It can take any of the following three parameters to 'token':
<br><br>
&nbsp;&nbsp;&nbsp;* ALC_DEFAULT_DEVICE_SPECIFIER<br>
&nbsp;&nbsp;&nbsp;* ALC_DEVICE_SPECIFIER<br>
&nbsp;&nbsp;&nbsp;* ALC_EXTENSIONS<br>
<br>
The first will return the device string which your OpenAL implementation will prefer you to use. 
In current OpenAL this should be "DirectSound3D", like we used above. The second token 
will return a list of specifiers, but in current OpenAL will only return "DirectSound" (without 
the "3D" for some reason). The last will return a list of Alc extensions, of which none exist yet.
<br>
Well that's most of Alc for you. I hope it gave you a better understanding of how OpenAL interacts with
the operation system.
</p>
</div>