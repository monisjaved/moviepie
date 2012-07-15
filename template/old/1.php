  <body>

    <div class="navbar navbar-fixed-top">
		  <div class="navbar-inner">
		    <div class="container">
		      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </a>
		      <a class="brand" href="index.html">Bootstrap 101</a>
		      <div class="nav-collapse">
		        <ul class="nav">
		          <li><a href="index.html">Welcome</a></li>
		          <li class="active"><a href="setup-notes.html">Setup Notes</a></li>
		          <li><a href="navbar-examples.html">Navbar Examples</a></li>
		         	<li><a href="tabs-pills.html">Tabs &amp; Pills</a></li>
              <li><a href="carousel.html">Carousel</a></li>
		        </ul>
		        	<a class="btn btn-primary pull-right" href="http://twitter.github.com/bootstrap/"><b class="icon-home icon-white"></b> Twitter Bootstrap Home</a>
		      </div><!-- /.nav-collapse -->
		    </div><!-- /.container -->
		  </div><!-- /navbar-inner -->
		</div><!-- /navbar -->

    <div class="container">
    <div class="page-header">
	    <h1>Setup Notes</h1>
    </div>
    <p class="alert alert-success">PLEASE NOTE: The examples given here depend upon and cannot replace <a href="http://twitter.github.com/bootstrap/components.html#navbar">Twitter Bootstrap's own excellent documentation</a>.</p>

		
		<h3>Page contents:</h3>
		<ul>
			<li>Sample Document Head</li>
			<li>Alternate CSS Option</li>
			<li>JavaScript Setup</li>
		</ul>

<hr>

		<div id="head-section" class="row">
			<div class="span3">
		    <h2>Sample Document Head</h2>
		    <p>Based on Twitter Bootstrap's examples, <a href="http://twitter.github.com/bootstrap/examples.html">online here</a>, with occasional variations based on the also-excellent <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.</p>

				<h3>Note the CSS sequence</h3>
		    <p>This CSS configuration is needed to make the nav work responsively:</p>
		    	<ol>
		    		<li>bootstrap.css, followed by ...</li>
		    		<li>embedded styles for navbar-top-fixed</li>
		    		<li>followed by bootstrap-responsive.css</li>
		    	</ol>
		    <p>This is noted <a href="http://twitter.github.com/bootstrap/components.html#navbar">in Bootstrap 2.0's documentation</a> under "Fixed navbar."</p> 
		    <p><strong>A possible alternative approach is noted below.</strong></p>
		  </div><!-- .span -->
		  <div class="span9">
		    <pre>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
  &lt;meta charset=&quot;utf-8&quot;&gt;
  &lt;title&gt;Sample Site&lt;/title&gt;
    
  &lt;!-- Mobile viewport optimized: h5bp.com/viewport --&gt;
  &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width&quot;&gt;

  &lt;!-- Styles --&gt;
  &lt;link href=&quot;css/bootstrap.css&quot; rel=&quot;stylesheet&quot;&gt;
  &lt;style&gt;
    body {
    padding-top: 60px; /* When using the navbar-top-fixed */
    }
  &lt;/style&gt;
  &lt;link href=&quot;css/bootstrap-responsive.css&quot; rel=&quot;stylesheet&quot;&gt;

  &lt;!-- HTML5 shim, for IE6-8 support of HTML5 elements --&gt;
  &lt;!--[if lt IE 9]&gt;
    &lt;script src=&quot;http://html5shim.googlecode.com/svn/trunk/html5.js&quot;&gt;&lt;/script&gt;
  &lt;![endif]--&gt;

  &lt;!-- Fav and touch icons --&gt;
    &lt;!-- OR remove these lines and place icons directly
        in the site root folder mathiasbynens.be/notes/touch-icons --&gt;
  &lt;link rel=&quot;shortcut icon&quot; href=&quot;img/favicon.ico&quot;&gt;
  &lt;link rel=&quot;apple-touch-icon&quot; href=&quot;img/apple-touch-icon.png&quot;&gt;
  &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;72x72&quot; href=&quot;img/apple-touch-icon-72x72.png&quot;&gt;
  &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;114x114&quot; href=&quot;img/apple-touch-icon-114x114.png&quot;&gt;

&lt;/head&gt;</pre>

			</div><!-- .span -->
		</div><!-- .row -->

<hr>		

<!-- Alternate CSS -->

    <div class="row">
      <div id="css-section" class="span3">
				<h2>Alternate CSS Option</h2>
        <p>If your workflow includes inlining and minifying your CSS before publication, you might choose to use CSS imports to pull <strong>bootstrap.css</strong> and <strong>bootstrap-responsive.css</strong> into a single stylesheet, then add your own custom styles.</p>
      </div>
      <div class="span9">
      	<h3>In the Markup</h3>
      	<p>Link to a single parent CSS file.</p>
				<pre>&lt;!-- Main stylesheet imports bootstrap css and adds custom --&gt;
&lt;link href=&quot;css/style.css&quot; rel=&quot;stylesheet&quot;&gt;</pre>
				
				<h3>Main Stylesheet</h3>
				<p>Import bootstrap stylesheets, and then adjust for the navbar-top-fixed, if needed.</p>
				<pre>/* Main Stylesheet */
/* Import Bootstrap styles and Responsive styles */
@import url('bootstrap.css');
@import url('bootstrap-responsive.css');

/* Add top padding for navbar-top-fixed */
body {
  padding-top: 60px;
  padding-bottom: 40px;
  }
/* Remove top padding when top navbar goes static in narrow viewports */
@media (max-width: 979px) {
  body {
    padding-top: 0;
  }
}</pre>
      </div><!-- .span -->
    </div><!-- .row -->      

<hr>

<!-- JavaScript Links -->      
    <div id="js-section" class="row">
    	<div class="span3">
    		<h2>JavaScript Setup</h2>
    		<p>Link up your JavaScript files at the bottom of the document, just before the closing body tag.</p>
    		<p>This example includes:</p>
    		<ul>
    			<li>jQuery from Google API with local fallback, a la <a href="http://html5boilerplate.com/">the HTML5 Boilerplate</a></li>
    			<li>Twitter Bootstrap's entire compiled and minified plugin bundle.</li>
    			<li>An example of an additional plugin: Google Prettify for code prettifying (used in this sample site).</li>
    			<li>Sample lines used to initialize scripts in this page.</li>
    		</ul>
    	</div><!-- .span -->
    	<div class="span9">
    		<pre>&lt;!-- Link jQuery via Google + local fallback, see h5bp.com --&gt;
&lt;script src=&quot;//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;window.jQuery || document.write('&lt;script src=&quot;js/jquery-1.7.1.min.js&quot;&gt;&lt;\/script&gt;')&lt;/script&gt;

&lt;!-- Bootstrap JS, the minified bundle --&gt;
&lt;script src=&quot;js/bootstrap.min.js&quot;&gt;&lt;/script&gt;

&lt;!-- Sample Plugin: Prettify --&gt;
&lt;script src=&quot;js/prettify/prettify.js&quot;&gt;&lt;/script&gt;

&lt;!-- If needed, initialize scripts on this page --&gt;
&lt;script&gt;

  // Activate Google Prettify for pretty-printing code
  addEventListener('load', prettyPrint, false);

  $(document).ready(function(){

    // Add prettyprint class to pre elements
    $('pre').addClass('prettyprint');

    // Initialize tabs and pills
    $('.note-tabs').tab();
		
  });
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
    	</div><!-- .span -->
    </div><!-- .row -->

      <hr>

      <footer>
        <p>By David Cochran of <a href="http://okwu.edu">Oklahoma Wesleyan University</a> and <a href="http://alittlecode.com/">aLittleCode.com</a> for <a href="http://webdesign.tutsplus.com/">webdesign.tutsplus.com</a>. Free for your use! (No warranties, no guarantees.)</p>
        <p><a href="http://webdesign.tutsplus.com/series/twitter-bootstrap-101/">See the full Twitter Bootstrap 101 Tutorial Series</a></p>
      </footer>

    </div> <!-- /container -->

<!-- ==============================================
		 JavaScript below! 															-->

<!-- jQuery via Google + local fallback, see h5bp.com -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

<!-- Bootstrap JS -->
    <script src="js/bootstrap-trim.min.js"></script>

<!-- Prettify -->
    <script src="js/prettify/prettify.js"></script>
    
<!-- Initialize Scripts -->
		<script>
		
		addEventListener('load', prettyPrint, false);
		
			$(document).ready(function(){

        // Add prettyprint CSS to head now that we know JS is running
          $('head').append('<link href="js/prettify/prettify.css" rel="stylesheet">');

        // Add prettyprint class to pre elements
          $('pre').addClass('prettyprint');

				// Initialize tabs and pills
					$('.note-tabs').tab();
								
			}); // end document.ready
		</script>


  </body>
</html>
