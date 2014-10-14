<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Font Testing Page - Latin Version</title>
<link type="text/css" href="css/styles-v9.css?rand=<?php echo rand(5,500)?>" rel="stylesheet" charset="utf-8" />
<link type="text/css" href="css/print-v9.css" rel="stylesheet" media="print" charset="utf-8" />
<script src="js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script>localStorage.clear();</script>
<script src="js/fontdrag.js" type="text/javascript" charset="utf-8"></script>
<script src="js/otfeatures-v9.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/contentEditable" type="text/javascript" charset="utf-8"></script>
<script src="js/constants-latin.js" type="text/javascript" charset="utf-8"></script>

<script>
 $(document).ready(function(){
    
    // Tabs
    var tabContainers = $('div.tabs > div');
    $('div.tabs ul.tabNavigation a').click(function () {
        tabContainers.hide().filter(this.hash).show();
        $('div.tabs ul.tabNavigation a').removeClass('selected');
        $(this).addClass('selected');
        return false;
    }).filter(':first').click();
    
    // OT Features Panel
    $('#showhide').click(function () {
        $('#otfeatures').slideToggle("fast", function() {
		    $("#showhide").text($(this).is(':visible') ? "Hide OpenType Features" : "OpenType Features");
		  });
    });

    // OT Features initial Run
    refreshFeatures();
    
    // Grab the text from the JS constant file, and show it
    prepareAndShowFontLayout();

});
</script>
</head>

<body spellcheck="false">



<?php include("includes/top.php"); ?>

<section id="custom">

	<div class="tabs">
	  <!-- Navigation (Ideally, this should be outside the "custom" section, so the navigation's font does not change.) -->
	  <ul class="tabNavigation">
	    <li><a href="#headlines">Headlines</a></li>
	    <li><a href="#text">Text</a></li>
	    <li><a href="#hamburgefonstiv">hamburgefonstiv</a></li>
	    <li><a href="#lowercases">a-z</a></li>
	    <li><a href="#caps">Words</a></li>
	    <li><a href="#allcaps">Caps</a></li>
	    <li><a href="#space">Spacing</a></li>
	    <li><a href="#quotes">Quotes</a></li>
	    <li><a href="#layout">Layout</a></li>
	    <li><a href="#lettering">Lettering</a></li>
	    <li><a href="#kern">Kern</a></li>
	    <li><a href="#hinting">Hinting</a></li>
	    <li><a href="#latin">Latin</a></li>
	    <li><a href="#world">World Scripts</a></li>
	  </ul>
	
	  <!-- Headlines (Content injected via constants.js) -->
	  <div id="headlines">
		<!-- <div style="white-space: nowrap; overflow: hidden; width: 920px;"> -->
		<div></div>
	  </div>
	  
	  <!-- Text (Content injected via Javascript) -->
	  <div id="text" style="width: 97%;">
			<div class="textsettingCol1"></div>
			<div class="textsettingCol2"></div>
	  </div>

	  <!-- quotes text from Vernon Adams http://vernnobile.github.io/webfont-testing/ -->
	  <div id="quotes">
			<div contenteditable="true">
<?php
$steps = array(36, 30, 28, 26, 24, 22, 20, 19, 18, 17, 16, 15, 14, 13, 12);
foreach($steps as $step) {
	echo '<p class="sizelabel">'.$step.'</p>';
	echo '<p style="font-size: '.$step.'px;">
	&lsquo;I feel&rsquo; &lsquo;ah&rsquo; &lsquo;no.&rsquo; &lsquo;no?&rsquo; &lsquo;if&rsquo; &lsquo;cake!&rsquo; &lsquo;&iquest;jeff?&rsquo; &lsquo;&iexcl;si!&rsquo; &lsquo;i&rsquo;ll&rsquo;<br>
	\'I feel\' \'ah\' \'no.\' \'no?\' \'if\' \'cake!\' \'&iquest;jeff?\' \'&iexcl;si!\' \'i\'ll\'<br>
	,I feel&rsquo; ,ah&rsquo; ,no.&rsquo; ,no?&rsquo; ,if&rsquo; ,cake!&rsquo; ,&iquest;jeff?&rsquo; ,&iexcl;si!&rsquo; ,i&rsquo;ll&rsquo;<br>
	&ldquo;I feel&rdquo; &ldquo;ah&rdquo; &ldquo;no.&rdquo; &ldquo;no?&rdquo; &ldquo;if&rdquo; &ldquo;cake!&rdquo; &ldquo;&iquest;jeff?&rdquo; &ldquo;&iexcl;si!&rdquo; &ldquo;i&rsquo;ll&rdquo;<br>
	"I feel" "ah" "no." "no?" "if" "cake!" "&iquest;jeff?" "&iexcl;si!" "i\'ll"<br>
	&lsaquo;I feel&rsaquo; &lsaquo;ah&rsaquo; &lsaquo;no.&rsaquo; &lsaquo;no?&rsaquo; &lsaquo;if&rsaquo; &lsaquo;cake!&rsaquo; &lsaquo;&iquest;jeff?&rsaquo; &lsaquo;&iexcl;si!&rsaquo; &lsaquo;i&rsquo;ll&rsaquo;<br>
	&laquo;I feel&raquo; &laquo;ah&raquo; &laquo;no.&raquo; &laquo;no?&raquo; &laquo;if&raquo; &laquo;cake!&raquo; &laquo;&iquest;jeff?&raquo; &laquo;&iexcl;si!&raquo; &laquo;i&rsquo;ll&raquo;<br>
	&rsaquo;I feel&lsaquo; &rsaquo;ah&lsaquo; &rsaquo;no.&lsaquo; &rsaquo;no?&lsaquo; &rsaquo;if&lsaquo; &rsaquo;cake!&lsaquo; &rsaquo;&iquest;jeff?&lsaquo; &rsaquo;&iexcl;si!&lsaquo; &rsaquo;i&rsquo;ll&lsaquo;<br>
	&raquo;I feel&laquo; &raquo;ah&laquo; &raquo;no.&laquo; &raquo;no?&laquo; &raquo;if&laquo; &raquo;cake!&laquo; &raquo;&iquest;jeff?&laquo; &raquo;&iexcl;si!&laquo; &raquo;i&rsquo;ll&laquo;';
}
?>
			</div>
	  </div>

	  <!-- hamburgefonstiv (Content injected via constants.js) -->
	  <div id="hamburgefonstiv">
	  		<div ></div>				
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div>
				<div class="textsettingCol1"></div>
				<div class="textsettingCol2"></div>
			</div>
	  </div>

	  <!-- Lowercases a-z (Content injected via constants.js) -->
	  <div id="lowercases">
	  		<div></div>				
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div>
				<div class="textsettingCol1"></div>
				<div class="textsettingCol2"></div>
			</div>
	  </div>

	  <!-- Caps (Content injected via constants.js) -->
	  <div id="caps">
	  		<div></div>				
	  </div>

	  <!-- All Caps (Content injected via constants.js) -->
	  <div id="allcaps">
	  		<div></div>				
	  </div>

	  <!-- Spacing and Colour -->
	  <div id="space">
	  	<?php include("includes/latin/space.php"); ?>						
	  </div>

	  <!-- Layout -->
	  <div id="layout">
	  	<?php include("includes/latin/layout.php"); ?>						
	  </div>

	  <!-- Lettering Sheet -->
	  <div id="lettering">
	  	<?php include("includes/latin/lettering.php"); ?>			
	  </div>

	  <!-- Kerning -->
	  <div id="kern">
	  	<?php include("includes/latin/kerning.php"); ?>			
	  </div>

	  <!-- Hinting (Content injected via constants.js) -->
	  <div id="hinting">
	  		<div contenteditable="true">
				
				<p class="sizelabel"><?php echo $_SERVER['HTTP_USER_AGENT'] ?></p><p>&nbsp;</p>
				
				<p class="sizelabel">48px</p>
				<p class="hints-lower" style="font-size: 48px;"></p>
				<p class="hints-caps" style="font-size: 48px;"></p>
				<p class="hints-numbers" style="font-size: 48px;"></p>
				<p>&nbsp;</p>

				<p class="sizelabel">28px</p>
				<p class="hints-lower" style="font-size: 28px;"></p>
				<p style="font-size: 28px;">
					<span class="hints-caps"></span> 
					<span class="hints-numbers"></span>
				</p><p>&nbsp;</p>
				
				<?php for ($i = 24; $i >= 9; $i--) { ?>
				<p class="sizelabel"><?php echo $i; ?>px</p>
				<p class="hints-lower" style="font-size: <?php echo $i; ?>px;"></p>
				<p style="font-size: <?php echo $i; ?>px;">
					<span class="hints-caps"></span> 
					<span class="hints-numbers"></span>
				</p>
				<p>&nbsp;</p>
				<?php } ?>

	  		</div>
	  </div>

	  <!-- Latin -->
	  <div id="latin">
	  	<?php include("includes/latin/diatrics.php"); ?>
	  </div>
	  
	  <!-- Non-Latin -->
	  <div id="world">
	  	<?php include("includes/latin/world-scripts.php"); ?>

	  </div>

	</div><!-- end tabs -->

</section>
		
<!-- Footer -->

<?php include("includes/footer.php"); ?>

</body>
</html>