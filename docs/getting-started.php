<?php $pn = "Getting Started"; ?>
<?php include('temps/header.php'); ?>


    <!-- Docs page layout -->
    <div class="bs-header">
      <div class="container">
        <h1>Getting started</h1>
        <p>An overview of Bootstrap, how to download and use, basic templates and examples, and more.</p>
      </div>
    </div>
  <div class="container bs-docs-container">
      <div class="row">
        <div class="col-lg-3">
          <div class="bs-sidebar">
            <ul class="nav bs-sidenav">
              
                <li>
  <a href="#download">Download Bootstrap</a>
  <ul class="nav">
    <li><a href="#download-options">Download options</a></li>
    <li><a href="#download-cdn">Bootstrap CDN</a></li>
  </ul>
</li>
<li>
  <a href="#whats-included">What's included</a>
</li>
<li>
  <a href="#template">Basic template</a>
</li>
<li>
  <a href="#browsers">Browser support</a>
</li>
<li>
  <a href="#license-faqs">License FAQs</a>
</li>
<li>
  <a href="#customizing">Customizing Bootstrap</a>
</li>
              
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
            <!-- Getting started
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="download">Download Bootstrap</h1>
    </div>
    <p class="lead">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>

    <h3>Download compiled CSS and JS</h3>
    <p class="lead">The fastest way to get started is to get the compiled and minified versions of our CSS and JavaScript. No documentation or original source files are included.</p>
    <p><a class="btn btn-large btn-primary" href="http://getbootstrap.com/bs-v3.0.0-rc1-dist.zip" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download compiled']);">Download Bootstrap</a></p>

    <hr>

    <h3 id="download-options">More download options</h3>
    <div class="bs-docs-dl-options">
      <h4>
        <a href="https://github.com/twbs/bootstrap/archive/3.0.0-wip.zip" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download source']);">Download latest source code</a>
      </h4>
      <p>Get the original files for all CSS and JavaScript by downloading the latest version directly from GitHub.</p>
      <h4>
        <a href="https://github.com/twbs/bootstrap" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'GitHub project']);">Clone or fork via GitHub</a>
      </h4>
      <p>Clone the entire project or fork your own version of Bootstrap to make it your own by visiting us on GitHub.</p>
      <h4>
        Install with <a href="http://bower.io">Bower</a>
      </h4>
      <p>Install and manage the original files for all CSS and JavaScript, along with a local copy of the docs, using <a href="http://bower.io">Bower</a>.</p>
      <div class="highlight"><pre><code class="bash"><span class="nv">$ </span>bower install bootstrap
</code></pre></div>
    </div>

    <hr>

    <h3 id="download-cdn">Use the Bootstrap CDN</h3>
    <p>The folks over at <a href="https://www.netdna.com/">NetDNA</a> have graciously provided CDN support for Bootstrap's CSS and JavaScript. To use, swap your local instances for the <a href="http://www.bootstrapcdn.com/">Bootstrap CDN</a> links listed below.</p>
<div class="highlight"><pre><code class="html"><span class="lineno">1</span> <span class="c">&lt;!-- Latest compiled and minified CSS --&gt;</span>
<span class="lineno">2</span> <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">href=</span><span class="s">&quot;//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css&quot;</span><span class="nt">&gt;</span>
<span class="lineno">3</span> 
<span class="lineno">4</span> <span class="c">&lt;!-- Latest compiled and minified JavaScript --&gt;</span>
<span class="lineno">5</span> <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>
</code></pre></div>

    <div class="bs-callout bs-callout-warning" id="callout-less-compilation">
      <h4>LESS compilation</h4>
      <p>If you download the original files, you need to compile Bootstrap's LESS files into usable CSS. To do that, Bootstrap only officially supports <a href="http://twitter.github.io/recess/">Recess</a>, Twitter's CSS hinter built on top of <a href="http://lesscss.org">less.js</a>.</p>
    </div>
  </div>



  <!-- File structure
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="whats-included">What's included</h1>
    </div>
    <p class="lead">Within the download you'll find the following directories and files, logically grouping common assets and providing both compiled and minified variations.</p>
    <p>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Bootstrap. You'll see something like this:</p>

<div class="highlight"><pre><code class="bash">bootstrap/
├── css/
│   ├── bootstrap.css
│   ├── bootstrap.min.css
├── js/
│   ├── bootstrap.js
│   ├── bootstrap.min.js
</code></pre></div>

    <p>This is the most basic form of Bootstrap: compiled files for quick drop-in usage in nearly any web project. We provide compiled CSS and JS (<code>bootstrap.*</code>), as well as compiled and minified CSS and JS (<code>bootstrap.min.*</code>). The image files are compressed using <a href="http://imageoptim.com/">ImageOptim</a>, a Mac app for compressing PNGs.</p>
    <div class="bs-callout bs-callout-danger">
      <h4>jQuery required</h4>
      <p>Please note that <strong>all JavaScript plugins require jQuery</strong> to be included, as shown in the <a href="#template">starter template</a>.</p>
    </div>
  </div>



  <!-- Template
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="template">Basic template</h1>
    </div>
    <p class="lead">Make use of a super basic HTML template, or dive into a <a href="http://examples.getbootstrap.com">few examples</a> we've started for you. We encourage folks to iterate on these examples and not simply use them as an end result.</p>

    <p>Copy and paste the HTML from below to get started with a bare bones Bootstrap document.</p>
<div class="highlight"><pre><code class="html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html&gt;</span>
  <span class="nt">&lt;head&gt;</span>
    <span class="nt">&lt;title&gt;</span>Bootstrap 101 Template<span class="nt">&lt;/title&gt;</span>
    <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">&quot;viewport&quot;</span> <span class="na">content=</span><span class="s">&quot;width=device-width, initial-scale=1.0&quot;</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Bootstrap --&gt;</span>
    <span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">&quot;css/bootstrap.min.css&quot;</span> <span class="na">rel=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">media=</span><span class="s">&quot;screen&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/head&gt;</span>
  <span class="nt">&lt;body&gt;</span>
    <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>

    <span class="c">&lt;!-- JavaScript plugins (requires jQuery) --&gt;</span>
    <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;http://code.jquery.com/jquery.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>
    <span class="c">&lt;!-- Include all compiled plugins (below), or include individual files as needed --&gt;</span>
    <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;js/bootstrap.min.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>

    <span class="c">&lt;!-- Optionally enable responsive features in IE8 --&gt;</span>
    <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;js/respond.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>
  <span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
</code></pre></div>

    <h3>Looking for more example templates?</h3>
    <p>Check out the new <a href="https://github.com/twbs/bootstrap-examples">Examples repository on GitHub</a>, or <a href="http://examples.getbootstrap.com">view them in your browser</a>. Included are over a dozen example templates for building with and extending Bootstrap.</p>
  </div>



  <!-- Browser compatibility
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="browsers">Browser compatibility</h1>
    </div>
    <p class="lead">Bootstrap is built to work best in the latest desktop and mobile browsers, meaning older and less advanced browsers might receive a less stylized, though fully functional, version of certain components.</p>

    <h3>Supported browsers</h3>
    <p>Specifically, we support the latest versions of the following:</p>
    <ul>
      <li>Chrome (Mac, Windows, iOS, and Android)</li>
      <li>Safari (Mac and iOS only, as Windows has more or less been discontinued)</li>
      <li>Firefox (Mac, Windows)</li>
      <li>Internet Explorer</li>
      <li>Opera (Mac, Windows)</li>
    </ul>
    <p>Unofficially, Bootstrap should look and behave well enough in Chromium for Linux and Internet Explorer 7, though they are not officially supported.</p>

    <h3>Internet Explorer 8 and 9</h3>
    <p>Internet Explorer 8 and 9 are also supported, however, please be aware that many CSS3 properties—e.g., rounded corners and shadows—are not supported by IE8. The <code>placeholder</code> attribute is also not supported in either of these versions.</p>
    <p>In addition, <strong>Internet Explorer 8 requires the use of <a href="https://github.com/scottjehl/Respond">respond.js</a> to enable media query support.</strong></p>

    <h3>IE Compatibility modes</h3>
    <p>Bootstrap is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate <code>meta</code> tag in your pages.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">&quot;X-UA-Compatible&quot;</span> <span class="na">content=</span><span class="s">&quot;IE=edge&quot;</span><span class="nt">&gt;</span>
</code></pre></div>
    <p>See <a href="http://stackoverflow.com/questions/6771258/whats-the-difference-if-meta-http-equiv-x-ua-compatible-content-ie-edge">this StackOverflow question</a> for more information.</p>
  </div>



  <!-- License FAQs
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="license-faqs">License FAQs</h1>
    </div>
    <p class="lead">Bootstrap is released under the Apache 2 license and is copyright 2013 Twitter. Boiled down to smaller chunks, it can be described with the following conditions.</p>

    <div class="row">
      <div class="col-12 col-lg-6">
        <h4>It allows you to:</h4>
        <ul>
          <li>Freely download and use Bootstrap, in whole or in part, for personal, company internal or commercial purposes</li>
          <li>Use Bootstrap in packages or distributions that you create</li>
        </ul>
      </div>
      <div class="col-12 col-lg-6">
        <h4>It forbids you to:</h4>
        <ul>
          <li>Redistribute any piece of Bootstrap without proper attribution</li>
          <li>Use any marks owned by Twitter in any way that might state or imply that Twitter endorses your distribution</li>
          <li>Use any marks owned by Twitter in any way that might state or imply that you created the Twitter software in question</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <h4>It requires you to:</h4>
        <ul>
          <li>Include a copy of the license in any redistribution you may make that includes Bootstrap</li>
          <li>Provide clear attribution to Twitter for any distributions that include Bootstrap</li>
        </ul>
      </div>
      <div class="col-12 col-lg-6">
        <h4>It does not require you to:</h4>
        <ul>
          <li>Include the source of Bootstrap itself, or of any modifications you may have made to it, in any redistribution you may assemble that includes it</li>
          <li>Submit changes that you make to Bootstrap back to the Bootstrap project (though such feedback is encouraged)</li>
        </ul>
      </div>
    </div>
    <p>The full Bootstrap license is located <a href="https://github.com/twbs/bootstrap/blob/master/README.md">in the project repository</a> for more information.</p>
  </div><!-- /.bs-docs-section -->




  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="customizing">Customizing Bootstrap</h1>
    </div>
    <p class="lead">Customizing Bootstrap is best accomplished when you treat it as another dependency in your development stack. Doing so ensures future upgrades are as easy as possible while also familiarizing yourself to the intricacies of the framework.</p>

    <p>Once you've downloaded and included Bootstrap's CSS into your templates, you can move on to customizing the included components. To do so, create a new stylesheet (LESS, if you like, or just plain CSS) to house your customizations.</p>

    <div class="bs-callout bs-callout-info">
      <h4>Compiled or minified?</h4>
      <p>Unless you plan on reading a good chunk of the compiled CSS, go with the minified. It's the same code, just compacted. Less bandwidth is good, especially in production environments.</p>
    </div>

    <p>From there, include whatever Bootstrap components and HTML content you need to get your template setup. It's best to have a rough idea in mind of modifications to make and content to include, so be sure to spend a brief amount of time on that before moving on.</p>

    <h3>Customizing components</h3>
    <p>There are varying degrees to customizing components, but most fall into two camps: light customizations and complete visual overhauls. Luckily, there are plenty of examples of both.</p>
    <p>We define light customizations as mostly surface layer changes, things like a color and font changes to existing Bootstrap components. A great example of this is the the <a href="http://translate.twitter.com">Twitter Translation Center</a> (coded by @mdo). Let's look at how to implement the custom button we wrote for this site, <code>.btn-ttc</code>.</p>
    <p>Instead of using the provided Bootstrap buttons, which only require just one class to start, <code>.btn</code>, we'll add our own modifier class, <code>.btn-ttc</code>. This will give us a slightly custom look with minimal effort.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn btn-ttc&quot;</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
</code></pre></div>

  <p>In the custom stylesheet, add the following CSS:</p>

<div class="highlight"><pre><code class="css"><span class="c">/* Custom button</span>
<span class="c">-------------------------------------------------- */</span>

<span class="c">/* Override base .btn styles */</span>
<span class="c">/* Apply text and background changes to three key states: default, hover, and active (click). */</span>
<span class="nc">.btn-ttc</span><span class="o">,</span>
<span class="nc">.btn-ttc</span><span class="nd">:hover</span><span class="o">,</span>
<span class="nc">.btn-ttc</span><span class="nd">:active</span> <span class="p">{</span>
  <span class="k">color</span><span class="o">:</span> <span class="nb">white</span><span class="p">;</span>
  <span class="k">text-shadow</span><span class="o">:</span> <span class="m">0</span> <span class="m">-1px</span> <span class="m">0</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="o">,</span> <span class="m">0</span><span class="o">,</span> <span class="m">0</span><span class="o">,</span> <span class="m">0</span><span class="o">.</span><span class="m">25</span><span class="p">);</span>
  <span class="k">background-color</span><span class="o">:</span> <span class="m">#007da7</span><span class="p">;</span>
<span class="p">}</span>

<span class="c">/* Apply the custom-colored gradients */</span>
<span class="c">/* Note: you&#39;ll need to include all the appropriate gradients for various browsers and standards. */</span>
<span class="nc">.btn-ttc</span> <span class="p">{</span>
  <span class="k">background-repeat</span><span class="o">:</span> <span class="k">repeat-x</span><span class="p">;</span>
  <span class="k">background-image</span><span class="o">:</span> <span class="n">linear</span><span class="o">-</span><span class="n">gradient</span><span class="p">(</span><span class="k">top</span><span class="o">,</span> <span class="m">#009ED2</span> <span class="m">0</span><span class="o">%,</span> <span class="m">#007DA7</span> <span class="m">100</span><span class="o">%</span><span class="p">);</span>
  <span class="o">...</span>
<span class="p">}</span>

<span class="c">/* Set the hover state */</span>
<span class="c">/* An easy hover state is just to move the gradient up a small amount. Add other embellishments as you see fit. */</span>
<span class="nc">.btn-ttc</span><span class="nd">:hover</span> <span class="p">{</span>
  <span class="k">background-position</span><span class="o">:</span> <span class="m">0</span> <span class="m">-15px</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div>

    <p>Customizing Bootstrap components takes time, but should be straightforward. <strong>Look to the source code often and duplicate the selectors you need for your modifications.</strong> Placing them after the Bootstrap source makes for easy overriding without complication. <strong>To recap, here's the basic workflow:</strong></p>
    <ul>
      <li>For each element you want to customize, find its code in the compiled Bootstrap CSS. Copy and paste the selector for a component as-is. For instance, to customize the navbar background, just snag <code>.navbar</code>.</li>
      <li>Add all your custom CSS in a separate stylesheet using the selectors you just copied from the Bootstrap source. No need for prefacing with additional classes or using <code>!important</code> here.</li>
      <li>Rinse and repeat until you're happy with your customizations.</li>
    </ul>
    <p>Going beyond light customizations and into visual overhauls is just as straightforward as the above custom button. For a site like <a href="http://yourkarma.com">Karma</a>, which uses Bootstrap as a CSS reset with heavy modifications, more extensive work is involved, but well worth it in the end.</p>

    <div class="bs-callout bs-callout-info">
      <h4>Alternate customization methods</h4>
      <p>While not recommended for folks new to Bootstrap, you may use one of two alternate methods for customization. The first is modifying the source .less files (making upgrades super difficult), and the second is mapping source LESS code to <a href="http://ruby.bvision.com/blog/please-stop-embedding-bootstrap-classes-in-your-html">your own classes via mixins</a>. For the time being, neither options are documented here.</p>
    </div>

    <h3>Removing potential bloat</h3>
    <p>Not all sites and applications need to make use of everything Bootstrap has to offer, especially in production environments where bandwidth literally becomes a financial issue. We encourage folks to remove whatever is unused with our <a href="../customize/">Customizer</a>.</p>
    <p>Using the Customizer, simply uncheck any component, feature, or asset you don't need. Hit download and swap out the default Bootstrap files with these newly customized ones. You'll get vanilla Bootstrap, but without the features *you* deem unnecessary. All custom builds include compiled and minified versions, so use whichever works for you.</p>

  </div>

        </div>
      </div>

    </div>
<?php include('temps/footer.php');?>