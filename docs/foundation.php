<?php $pn = "Foundation"; ?>
<?php include('temps/header.php'); ?>
<!-- Docs page layout -->
<div class="bs-header">
  <div class="container">
    <h1>Foundation Extras</h1>
    <p>Goodies shipped over from ZURB's excellent framework.</p>
</div>
</div>
    <div class="container bs-docs-container">
      <div class="row">
        <div class="col-lg-3">
          <div class="bs-sidebar">
            <ul class="nav bs-sidenav">
				<li><a href="#responsiveTables"><i class="icon-chevron-right"></i> Responsive tables</a></li>
				<li><a href="#socialIcons"><i class="icon-chevron-right"></i> SVG social icons</a></li>
				<li><a href="#flexVideo"><i class="icon-chevron-right"></i> Flex video</a></li>
				<li><a href="#offCanvas"><i class="icon-chevron-right"></i> Off-canvas layouts</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9">

			<section id="responsiveTables">
				<div class="page-header">
					<h1>Responsive tables</h1>
				</div>
				<p class="lead">A CSS/JS solution for tables that allows them to shrink on small devices without sacrificing the value of tables, comparison of columns.</p>
				<h3>How the tables work</h3>
				<p>ZURB's solution for responsive tables requires two included files: <code>responsive-tables.less</code> and <code>responsive-tables.js.</code></p>
				<p>The Javascript will help us create some new elements on small devices, so we don't have to modify our table markup on the page. The CSS applies the requisite positioning and overflow styles to make the new elements work.</p>
				<h3>Attach to your markup</h3>
				<p>On any data table in your markup, you simply need to attach a class of <code>.responsive</code> and the CSS/JS will do the rest.</p>
				<div class="row">
					<div class="bs-docs-example">
					<table class="responsive">
						<thead>
							<tr>
								<th>Header 1</th>
								<th>Header 2</th>
								<th>Header 3</th>
								<th>Header 4</th>
								<th>Header 5</th>
								<th>Header 6</th>
								<th>Header 7</th>
								<th>Header 8</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>row 1, cell 1</td>
								<td>row 1, cell 2</td>
								<td>row 1, cell 3</td>
								<td>row 1, cell 4</td>
								<td>row 1, cell 5</td>
								<td>row 1, cell 6</td>
								<td>row 1, cell 7</td>
								<td>row 1, cell 8</td>
							</tr>
							<tr>
								<td>row 2, cell 1</td>
								<td>row 2, cell 2</td>
								<td>row 2, cell 3</td>
								<td>row 2, cell 4</td>
								<td>row 2, cell 5</td>
								<td>row 2, cell 6</td>
								<td>row 2, cell 7</td>
								<td>row 2, cell 8</td>
							</tr>
							<tr>
								<td>row 3, cell 1</td>
								<td>row 3, cell 2</td>
								<td>row 3, cell 3</td>
								<td>row 3, cell 4</td>
								<td>row 3, cell 5</td>
								<td>row 3, cell 6</td>
								<td>row 3, cell 7</td>
								<td>row 3, cell 8</td>
							</tr>
							<tr>
								<td>row 4, cell 1</td>
								<td>row 4, cell 2</td>
								<td>row 4, cell 3</td>
								<td>row 4, cell 4</td>
								<td>row 4, cell 5</td>
								<td>row 4, cell 6</td>
								<td>row 4, cell 7</td>
								<td>row 4, cell 8</td>
							</tr>
						</tbody>
					</table>
					</div>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="responsive"&gt;
  …
&lt;/table&gt;
</pre>
<hr/>
	<h3>Larger content table</h3>
	<p>The effect is even more pronounced on a table like this one, where we detail how to craft different armor types in Skyrim (we're nerds, okay).</p>
	<p>Notice on a small device how we maintain the left column when it has so much content.</p>
		<div class="bs-docs-example">
			<table class="responsive">
			<thead>
  				  <tr>
      				<th>Perk</th>
      				<th>Description</th>
      				<th>ID</th>
      				<th>Skill Req</th>
      				<th>Perk Req</th>
    				</tr>
					</thead>
  				<tbody>
    				<tr>
      				<td>Steel Smithing</td>
      				<td>Can create Steel armor and weapons at forges, and improve them twice as much.</td>
      				<td>000cb40d</td>
      				<td></td>
      				<td></td>
    				</tr>
    				<tr>
      				<td>Arcane Blacksmith</td>
      				<td>You can improve magical weapons and armor.</td>
      				<td>0005218e</td>
      				<td>60 Smithing</td>
      				<td>Steel Smithing</td>
    				</tr>
    				<tr>
      				<td>Dwarven Smithing</td>
      				<td>Can create Dwarven armor and weapons at forges, and improve them twice as much.</td>
      				<td>000cb40e</td>
      				<td>30 Smithing</td>
      				<td>Steel Smithing</td>
    				</tr>
    				<tr>
      				<td>Orcish Smithing</td>
      				<td>Can create Orcish armor and weapons at forges, and improve them twice as much.</td>
      				<td>000cb410</td>
      				<td>50 Smithing</td>
      				<td>Dwarven Smithing</td>
    				</tr>
    				<tr>
      				<td>Ebony Smithing</td>
      				<td>Can create Ebony armor and weapons at forges, and improve them twice as much.</td>
      				<td>000cb412</td>
      				<td>80 Smithing</td>
      				<td>Orcish Smithing</td>
    				</tr>
    				<tr>
      				<td>Daedric Smithing</td>
      				<td>Can create Daedric armor and weapons at forges, and improve them twice as much.</td>
      				<td>000cb413</td>
      				<td>90 Smithing</td>
      				<td>Ebony Smithing</td>
    				</tr>
    				<tr>
      				<td>Elven Smithing</td>
      				<td>Can create Elven armor and weapons at forges, and improve them twice as much.</td>
      				<td>000cb40f</td>
      				<td>30 Smithing</td>
      				<td>Steel Smithing</td>
    				</tr>
    				<tr>
      				<td>Advanced Armors</td>
      				<td>Can create Scaled and Plate armor at forges, and improve them twice as much.
      				</td><td>000cb414</td>
      				<td>50 Smithing</td>
      				<td>Elven Smithing</td>
    				</tr>
    				<tr>
      				<td>Glass Smithing</td>
      				<td>Can create Glass armor and weapons at forges, and improve them twice as much.</td>
      				<td>000cb411</td>
      				<td>70 Smithing</td>
      				<td>Advanced Armors</td>
    				</tr>
    				<tr>
      				<td>Dragon Armor</td>
      				<td>Can create Dragon armor at forges, and improve them twice as much.</td>
      				<td>00052190</td>
      				<td>100 Smithing</td>
      				<td>Daedric Smithing or Glass Smithing</td>
    				</tr>
				  </tbody>
				</table>
				</div>
				<hr/>
					<h3>Very Long 1st Cell Content</h3>
					<p>Finally, in this example you'll see how this works for very long first-cell content. Both the first cell and the remaining cells are independently scrollable on small devices.</p>
					<p>We do this so we can correctly predict the height of the cells for both the pinned columns and the rest of the columns.</p>
						<div class="bs-docs-example">
							<table class="responsive">
								<thead>
									<tr>
										<th>Header 1</th>
										<th>Header 2</th>
										<th>Header 3</th>
										<th>Header 4</th>
										<th>Header 5</th>
										<th>Header 6</th>
										<th>Header 7</th>
										<th>Header 8</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Ham pork leberkas bresaola, brisket t-bone filet mignon hamburger salami andouille short loin sausage.</td>
										<td>row 1, cell 2</td>
										<td>row 1, cell 3</td>
										<td>row 1, cell 4</td>
										<td>row 1, cell 5</td>
										<td>row 1, cell 6</td>
										<td>row 1, cell 7</td>
										<td>row 1, cell 8</td>
									</tr>
									<tr>
										<td>Ham pork leberkas bresaola, brisket t-bone filet mignon hamburger salami andouille short loin sausage.</td>
										<td>row 2, cell 2</td>
										<td>row 2, cell 3</td>
										<td>row 2, cell 4</td>
										<td>row 2, cell 5</td>
										<td>row 2, cell 6</td>
										<td>row 2, cell 7</td>
										<td>row 2, cell 8</td>
									</tr>
									<tr>
										<td>Ham pork leberkas bresaola, brisket t-bone filet mignon hamburger salami andouille short loin sausage.</td>
										<td>row 3, cell 2</td>
										<td>row 3, cell 3</td>
										<td>row 3, cell 4</td>
										<td>row 3, cell 5</td>
										<td>row 3, cell 6</td>
										<td>row 3, cell 7</td>
										<td>row 3, cell 8</td>
									</tr>
									<tr>
										<td>Ham pork leberkas bresaola, brisket t-bone filet mignon hamburger salami andouille short loin sausage.</td>
										<td>row 4, cell 2</td>
										<td>row 4, cell 3</td>
										<td>row 4, cell 4</td>
										<td>row 4, cell 5</td>
										<td>row 4, cell 6</td>
										<td>row 4, cell 7</td>
										<td>row 4, cell 8</td>
									</tr>
								</tbody>
							</table>
						</div>
				</div> <!--.row -->
			</section>
			<section id="socialIcons">
				<div class="page-header">
					<h1>SVG Social Icons</h1>
				</div>
				<p class="lead">This guest playground piece from Adam Fairhead at <a href="http://fairheadcreative.com" target="_blank">Fairhead Creative</a> is a great example of resolution-independent, future-thinking iconography. Plus, they're pretty.</p>
				<h3>How to Use Them</h3>
		        <p>Each icon is designed to be used as the background of an anchor, and each icon has its own class as well as a couple of global classes. They are all set to be inline, so you can put them up against each other, in line with your text, or in any kind of layout or construct.</p>
		        <p>To use an icon, create an anchor and give it a class of <code>.fc-webicon</code>, as well as a class for the social network or service you want to represent. For example, Facebook would look like this:</p>
		<div class="bs-docs-example">
			<p><a href="#" class="fc-webicon facebook">like us on Facebook</a></p>
		</div>
<pre class="prettyprint">
&lt;a <span class="selector">href="#" class="<span class="property">fc-webicon facebook</span>"</span>&gt;Like us on Facebook&lt;/a&gt;
</pre>
		<p>You can then specify a size as well (<code>.small</code> and <code>.large</code>). The beautiful thing is those sizes are just CSS, not additional assets. Since the images are resolution-independent SVG files they can be scaled to any size, large or small, and they maintain that clarity on any kind of screen (including Retina screens). Pretty nifty.</p>
			<div class="bs-docs-example">
				<p>
			     <a href="#" class="fc-webicon facebook small">like us on Facebook</a>
			     <a href="#" class="fc-webicon facebook">like us on Facebook</a>
			     <a href="#" class="fc-webicon facebook large">like us on Facebook</a>
			   </p>
			</div>
<pre class="prettyprint linenums">
&lt;a <span class="selector">href="#" class="fc-webicon facebook <span class="property">small</span>"</span>&gt;Like us on Facebook&lt;/a&gt;
&lt;a <span class="selector">href="#" class="fc-webicon facebook"</span>&gt;Like us on Facebook&lt;/a&gt;
&lt;a <span class="selector">href="#" class="fc-webicon facebook <span class="property">large</span>"</span>&gt;Like us on Facebook&lt;/a&gt;
</pre>
			 <p>Each icon is very clearly and reliably named. Hover on any of the icons on this page to see what their class is when you add it to an anchor.</p>
	        <h4>Small Icons</h4>

	        <a class="fc-webicon behance small" href="#">Behance</a>
	        <a class="fc-webicon creativecloud small" href="#">Creative Cloud</a>
	        <a class="fc-webicon dribbble small" href="#">Dribbble</a>
	        <a class="fc-webicon dropbox small" href="#">Dropbox</a>
	        <a class="fc-webicon evernote small" href="#">Evernote</a>
	        <a class="fc-webicon facebook small" href="#">Facebook</a>
	        <a class="fc-webicon flickr small" href="#">Flickr</a>
	        <a class="fc-webicon github small" href="#">Github</a>
	        <a class="fc-webicon googleplus small" href="#">GooglePlus</a>
	        <a class="fc-webicon icloud small" href="#">iCloud</a>
	        <a class="fc-webicon linkedin small" href="#">LinkedIn</a>
	        <a class="fc-webicon mail small" href="#">Mail</a>
	        <a class="fc-webicon msn small" href="#">MSN</a>
	        <a class="fc-webicon pinterest small" href="#">Pinterest</a>
	        <a class="fc-webicon rdio small" href="#">Rdio</a>
	        <a class="fc-webicon rss small" href="#">RSS</a>
	        <a class="fc-webicon skitch small" href="#">Skitch</a>
	        <a class="fc-webicon skype small" href="#">Skype</a>
	        <a class="fc-webicon spotify small" href="#">Spotify</a>
	        <a class="fc-webicon stumbleupon small" href="#">StumbleUpon!</a>
	        <a class="fc-webicon twitter small" href="#">Twitter</a>
	        <a class="fc-webicon vimeo small" href="#">Vimeo</a>
	        <a class="fc-webicon youtube small" href="#">YouTube</a>
	        <a class="fc-webicon youversion small" href="#">YouVersion</a>
	        <a class="fc-webicon zerply small" href="#">Zerply</a>

	        <hr>

	        <h4>Regular Icons</h4>
	        <a class="fc-webicon behance" href="#">Behance</a>
	        <a class="fc-webicon creativecloud" href="#">Creative Cloud</a>
	        <a class="fc-webicon dribbble" href="#">Dribbble</a>
	        <a class="fc-webicon dropbox" href="#">Dropbox</a>
	        <a class="fc-webicon evernote" href="#">Evernote</a>
	        <a class="fc-webicon facebook" href="#">Facebook</a>
	        <a class="fc-webicon flickr" href="#">Flickr</a>
	        <a class="fc-webicon github" href="#">Github</a>
	        <a class="fc-webicon googleplus" href="#">GooglePlus</a>
	        <a class="fc-webicon icloud" href="#">iCloud</a>
	        <a class="fc-webicon linkedin" href="#">LinkedIn</a>
	        <a class="fc-webicon mail" href="#">Mail</a>
	        <a class="fc-webicon msn" href="#">MSN</a>
	        <a class="fc-webicon pinterest" href="#">Pinterest</a>
	        <a class="fc-webicon rdio" href="#">Rdio</a>
	        <a class="fc-webicon rss" href="#">RSS</a>
	        <a class="fc-webicon skitch" href="#">Skitch</a>
	        <a class="fc-webicon skype" href="#">Skype</a>
	        <a class="fc-webicon spotify" href="#">Spotify</a>
	        <a class="fc-webicon stumbleupon" href="#">StumbleUpon!</a>
	        <a class="fc-webicon twitter" href="#">Twitter</a>
	        <a class="fc-webicon vimeo" href="#">Vimeo</a>
	        <a class="fc-webicon youtube" href="#">YouTube</a>
	        <a class="fc-webicon youversion" href="#">YouVersion</a>
	        <a class="fc-webicon zerply" href="#">Zerply</a>

	        <hr>

	        <h4>Large Icons</h4>
	        <a class="fc-webicon behance large" href="#">Behance</a>
	        <a class="fc-webicon creativecloud large" href="#">Creative Cloud</a>
	        <a class="fc-webicon dribbble large" href="#">Dribbble</a>
	        <a class="fc-webicon dropbox large" href="#">Dropbox</a>
	        <a class="fc-webicon evernote large" href="#">Evernote</a>
	        <a class="fc-webicon facebook large" href="#">Facebook</a>
	        <a class="fc-webicon flickr large" href="#">Flickr</a>
	        <a class="fc-webicon github large" href="#">Github</a>
	        <a class="fc-webicon googleplus large" href="#">GooglePlus</a>
	        <a class="fc-webicon icloud large" href="#">iCloud</a>
	        <a class="fc-webicon linkedin large" href="#">LinkedIn</a>
	        <a class="fc-webicon mail large" href="#">Mail</a>
	        <a class="fc-webicon msn large" href="#">MSN</a>
	        <a class="fc-webicon pinterest large" href="#">Pinterest</a>
	        <a class="fc-webicon rdio large" href="#">Rdio</a>
	        <a class="fc-webicon rss large" href="#">RSS</a>
	        <a class="fc-webicon skitch large" href="#">Skitch</a>
	        <a class="fc-webicon skype large" href="#">Skype</a>
	        <a class="fc-webicon spotify large" href="#">Spotify</a>
	        <a class="fc-webicon stumbleupon large" href="#">StumbleUpon!</a>
	        <a class="fc-webicon twitter large" href="#">Twitter</a>
	        <a class="fc-webicon vimeo large" href="#">Vimeo</a>
	        <a class="fc-webicon youtube large" href="#">YouTube</a>
	        <a class="fc-webicon youversion large" href="#">YouVersion</a>
	        <a class="fc-webicon zerply large" href="#">Zerply</a>
			<hr />
			<h3>Why SVG Icons?</h3>
			   <p>When you consider how common ultra-high resolution screens have become and couple that with the ubiquity of low-bandwidth mobile connections it becomes clear that we need to start really exploring and using alternate image methods. Since they are defined by vector shapes and colors rather than bitmaps, SVG files can be much smaller than a comparable PNG or JPG while also supporting any arbitrary size. Adam did a great job putting together a series of refined, vibrant icons that rely on modern browser support for SVG (with small PNG fallbacks).</p>

			   <p>SVG images are still somewhat poorly understood and underutilised &mdash; our hope is that playground pieces like this will start to really illustrate their value and lead to greater understanding and adoption (starting with our own understanding).</p>
			</section>
			<!-- Flex Video
			================================================== -->
			<section id="flexVideo">
					<div class="page-header">
						<h1>Flex Video</h1>
						<p class="lead">If you're embedding video from YouTube, Vimeo, or another site that uses iframe, embed or object elements you can wrap your video in div.flex-video to create an intrinsic ratio that will properly scale your video on any device.</p>
					</div>
					<ul class="nav tabs" id="flexVideos">
						<li class="active"><a href="#video1" data-toggle="tab">4:3</a></li>
						<li><a href="#video2" data-toggle="tab">Widescreen</a></li>
						<li><a href="#video3" data-toggle="tab">Vimeo</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="video1">
							<div class="flex-video">
								<iframe width="420" height="315" src="http://www.youtube.com/embed/9otNWTHOJi8" frameborder="0" allowfullscreen=""></iframe>
							</div>
							<p>4:3 is the default size for the <code>.flex-video</code> element, and the assumption for .flex-video for chrome (controls) height is based on YouTube.</p>
						</div>
						<div class="tab-pane" id="video2">
							<div class="flex-video widescreen">
								<iframe width="560" height="315" src="http://www.youtube.com/embed/N966cATFWjI" frameborder="0" allowfullscreen=""></iframe>
							</div>
							<p>By adding a class of <code>.widescreen</code> we change the ratio to 16:9, ideal for more recent video and most popular YouTube or Vimeo embeds.</p>
						</div>
						<div class="tab-pane" id="video3">
							<div class="flex-video widescreen vimeo">
								<iframe src="http://player.vimeo.com/video/21762736?title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
							</div>
							<p>Because Vimeo places their chrome on the player itself, adding a class of <code>.vimeo</code> creates a container that is sized for the video only &emdash; no extra padding for the controls.</p>
						</div>
					</div>
					<h3>The code</h3>
<pre class="prettyprint linenums">
&lt;div class="flex-video"&gt;
  &lt;iframe width="420" height="315" src="http://www.youtube.com/embed/9otNWTHOJi8" frameborder="0" allowfullscreen=""&gt;&lt;/iframe&gt;
&lt;/div&gt;</pre>
</section>
<section id="offCanvas">
	<h1>Off Canvas Layouts</h1>
	<p class="lead">Foundation layouts that give you the flexibility of native off-canvas layouts on the Web.</p>
	   <h3>Off Canvas What Now?</h3>
	   <p>If you've used Facebook's iPhone app (or Path, or any number of apps that now follow this convention) then you've seen an off canvas panel in a native app. You hit a button and a panel slides in from the left (or depending on how you look at it, the main panel slides out of the way).</p>
	   <p>The four layouts below are a few different examples of off-canvas layouts created specifically for Foundation. </p>
	<div class="row">
	    	 <div class="span6">
	    	   <a href="offcanvas-1.html" class="th" target="_blank"><img alt="Offcanvas-1" src="http://www.zurb.com/playground/images/playground/offcanvas-1.jpg?1360615022"></a>
	    	   <h5><a href="offcanvas-1.html">Bottom Nav Layout</a></h5>
	    	   <p>This layout moves the nav menu to the bottom on mobile, and enables a sliding sidebar.<br><a href="offcanvas-1.html" target="_blank">View this layout →</a></p>
	    	 </div>
	    	 <div class="span6">
	    	   <a href="offcanvas-2.html" class="th" target="_blank"><img alt="Offcanvas-2" src="http://www.zurb.com//playground/images/playground/offcanvas-2.jpg?1360615022"></a>
	    	   <h5><a href="offcanvas-2.html">Top Nav Layout</a></h5>
	    	   <p>This layout has a sliding top nav as well as a sliding sidebar.<br><a href="offcanvas-1.html" target="_blank">View this layout →</a></p>
	    	 </div>
	    </div>
		<div class="row">
		    	 <div class="span6">
		    	   <a href="offcanvas-3.html" class="th" target="_blank"><img alt="Offcanvas-3" src="http://www.zurb.com//playground/images/playground/offcanvas-3.jpg?1360615022"></a>
		    	   <h5><a href="offcanvas-3.html">Paneled</a></h5>
		    	   <p>A very different layout, this has full-width panels stacked on desktops but enables a tabbed panel layout on mobile.<br><a href="offcanvas-3.html" target="_blank">View this layout →</a></p>
		    	 </div>
		    	 <div class="span6">
		    	   <a href="offcanvas-4.html" class="th" target="_blank"><img alt="Offcanvas-4" src="http://www.zurb.com//playground/images/playground/offcanvas-4.jpg?1360615022"></a>
		    	   <h5><a href="offcanvas-4.html">Sidebar on Mobile Only</a></h5>
		    	   <p>This layout moves the navigation to the sidebar on mobile only.<br><a href="offcanvas-4.html" target="_blank">View this layout →</a></p>
		    	 </div>
		    	</div>
			<h3>How to use</h3>
			<pre class="prettyprint linenums">
&lt;body class="off-canvas"&gt;
</pre>
			<h3>Repurpose, Rebuild, Reuse</h3>
			<p>These are examples, but they are durable, tested code -- it has been tested this on modern desktop browsers as well as iOS, Android and Windows phone. The CSS involved is pretty crafty so you'll need to dig in a little, but it's well worth it.</p>
</section>
      </div>
  </div>
</div>
<?php include('temps/footer.php'); ?>

<script type="text/javascript">
	
	$(document).ready(function() {
		if($('.responsive').length) {
			var switched = false;
			var updateTables = function() {
				if (($(window).width() < 767) && !switched ){
					switched = true;
					$("table.responsive").each(function(i, element) {
						splitTable($(element));
					});
					return true;
				} else if (switched && ($(window).width() > 767)) {
					switched = false;
					$("table.responsive").each(function(i, element) {
						unsplitTable($(element));
					});
				}
			};
			$(window).load(updateTables);
			$(window).bind("resize", updateTables);
			
			
			function splitTable(original) {
				original.wrap("<div class='table-wrapper' />");
				var copy = original.clone();
				copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
				copy.removeClass("responsive");
				original.closest(".table-wrapper").append(copy);
				copy.wrap("<div class='pinned' />");
				original.wrap("<div class='scrollable' />");
			}
			function unsplitTable(original) {
				original.closest(".table-wrapper").find(".pinned").remove();
				original.unwrap();
				original.unwrap();
			}
		}
	});
	
	
	
</script>