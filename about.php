<?php
  require 'include/default.php';
  require 'include/news.php';

  printHeader(null, null);
  printMenu("about");
?>

  <!-- Introduction -->
  <div class="paragraph_item">
    <h2>About</h2>
    <p>
      <i>Taken from a <a href="http://www.javagaming.org/cgi-bin/JGNetForums/YaBB.cgi?board=LWJGL;action=display;num=1067072465;start=31#31" target="_blank">post</a> by Caspian on Javagaming.org</i>
      <br>
      <br>
      In response to everything here I'd like to state our goals with LWJGL: 
      <ul>
        <li>Speed<br></li>
        <li>Simplicity<br></li>
        <li>Ubiquity<br></li>
        <li>Smallness<br></li>
        <li>Security<br></li>
        <li>Robustness<br></li>
        <li>Minimalism<br></li>
      </ul>
      <p>
      and this will help explain how we got to where we are today and more importantly where 
      we're going and <i>where we're not going</i>. 
      <p><u><b>Speed</b></u><br> 
      The whole point of LWJGL was to bring the speed of Java rendering into the 21st century. 
      This is why we have:
      <br>
      <ul>
        <br>
        <li>Thrown out methods designed for efficient C programming that make no sense at all in java, such as glColor3fv. <br></li>
        <li>Made the library throw an exception when hardware acceleration is not available on Windows. No point in running at 5fps is there? <br></li>
      </ul>
      <br>
      <p><u><b>Ubquity</b></u><br>
      Our library is designed to work on devices as small as phones right the
      way up to multiprocessor rendering servers. Just because there aren't
      any phones or consoles yet with fast enough JVMs and 3d acceleration is
      neither here nor there - there will be, one day. We're carefully
      tailoring the library so that when it happens we'll have OpenGL ES
      support in there just like that. This means that: 
      <br>
      <ul>
      <li>We had to have a very small footprint or it'll never catch on in the J2ME space at all. That's why the binary distribution is under half a meg, and that takes care of 3d sound, graphics, and IO. <br> </li><li> Even under desktop environments having a 1-2mb download just to call a few 3D functions is daft. <br></li>
      <li>
      We've worked to a lowest common denominator principle rather than 
      attempting to design for all possibilities, but we've made sure that
      99% of required uses are covered. That's why we've only got one window,
      and why we don't guarantee that windowed mode is even supported (it's
      officially a debug mode and hence we don't even supply some very basic
      windowy abilities that you'd get in AWT) and why we don't allow
      multiple thread rendering contexts. <br></li>
      </ul>
      <br>
      <p><u><b>Simplicity</b></u><br>
      LWJGL needed to be simple for it to be used by a wide range of
      developers. We wanted relative newbies to be able to get on with it,
      and professionals to be able to use it professionally, maybe typically
      coming from a C++ background. We had to choose a paradigm that actually
      fits with OpenGL, and one that fits with our target platforms which
      ranges from PDA to desktop level. This is why:
      <br>
      <ul><br>
      <li>We aren't catering for single-buffered drawing<br></li>
      <li>We don't require that an instance of GL is passed around all over the place but <i>we do not prevent this style of coding</i>. See below for why. <br></li>
      <li>We removed a lot of stuff that 99% of games programmers need to know nothing about <br> </li>
      <li>We have decided that consistency is better than complexity. Rather than
      allowing multiple ways to call the same methods and bloating the
      library we've just said, "Right, no arrays. They're slower anyway. Get
      used to buffers, as this is what buffers are meant to be used for." </li>
      </ul>
      <br>
      <p><u><b>Smallness</b></u> <br> See ubiquity above. We had to be small. <br>
      <ul><br>
      <li>Small == simple. The less ways there are to do something, the easier it is to learn the only way that works or is allowed. <br> </li>
      <li>Small == <i>our code</i> is less buggy. Wouldn't you rather be hunting for bugs in your own code, not ours? <br> </li>
      <li>Small == downloadable. No version nightmares. LWJGL is small enough to download with every application that uses it. <br></li>
      <li>Small == J2ME. <br> </li>
      </ul><br>
      <p><u><b>Security</b></u> <br>
      We realised a few months ago that no-one was going to take us seriously
      if we couldn't guarantee the security of the LWJGL native libraries.
      This is why we: <br> 
      <ul><br>
      <li>No longer use pointers but exclusively use buffers instead <br> </li>
      <li>
      Are gradually adding further checks to buffer positions and limits to
      ensure that the values are within allowed ranges to prevent buffer
      attacks <br></li>
      </ul>
      <br><p>
      <u><b>Robustness</b></u> <br>
      Similarly to security we have now realised that a reliable system is
      far more useful than a fast system. When we actually had a proper
      application to benchmark finally we had some real data. Many of our
      original design decisions were based on microbenchmarks - well, you
      have to start somewhere! But with a real application to benchmark we
      now know we can throw out asserts and replace them with a proper if
      (...) check and a thrown exception. We know also that we can move all
      that GL error checking out of native code and into Java code and we
      will no longer need a separate DLL for debug mode. <br> &nbsp;<br> As
      for runtime exceptions, they have their place. There's not a reasonably
      well defined argument as to when you should use a runtime exception and
      when you should use a checked exception. When I made OpenGLException a
      checked exception all it did was end up littering my code with try {}
      catch {} sections - except that if you've got an OpenGLException there
      is very little sensible you can do to rectify it because it should
      never have occurred in the first place. That's why it's a runtime
      exception. You should simply not write code than can throw it because
      it is generally not recoverable nicely. However for robustness (and
      security) we are required to throw an exception if something is amiss.
      It falls, I believe, into exactly the same category of trouble as NPEs,
      ArrayIndexOOBs and ClassCastExceptions: should never occur but needs to
      be trapped somewhere. 
      <br>
      <p>
      <u><b>Minimalism</b></u> <br>
      This is another critical factor in our design decisions. If it doesn't
      need to be in the library, it's not in the library. Our original aim
      was to produce a library that provided the bare minimum required to
      access the hardware that Java couldn't access, and by and large we're
      sticking to this mantra. The vector math code in the LWJGL is looking
      mighty scared at the moment because it's probably for the chop - well,
      at least, from the core library - as it's not an enabling technology at
      all, and there are numerous more fully featured alternatives. We
      chucked out GLU because it's mostly irrelevant to game developers
      except for a few functions that we really need to get redeveloped in
      pure Java - but basically, GLU is just a library of code built on top
      of the enablement layer.
    </p>
  </div>
  
<?php 
  printFooter();
?>