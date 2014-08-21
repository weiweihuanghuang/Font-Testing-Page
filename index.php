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

	  <!-- quotes (Content injected via constants.js) -->
	  <div id="quotes">
	  		<div contenteditable="true">

				<?php $sizes = array(36, 30, 28, 26, 24, 22, 20, 19, 18, 17, 16, 15, 14, 13, 12);?>
				<?php foreach ($sizes as $i) { ?>
				<p class="sizelabel"><?php echo $i; ?>px</p>
				<p style="font-size: <?php echo $i; ?>px;">
				<span class="quotes-1"></span><br><span class="quotes-2"></span><br><span class="quotes-3"></span><br><span class="quotes-4"></span><br><span class="quotes-5"></span><br><span class="quotes-6"></span><br><span class="quotes-7"></span><br><span class="quotes-8"></span><br><span class="quotes-9"></span><br>
				<?php } ?>

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