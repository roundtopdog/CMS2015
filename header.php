<?php wp_head(); ?><!-- adds space to below the admin bar  -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CMS2015</title>
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<!-- add foundation style sheets -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css">
	
	
	<!-- add foundation js files -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/app.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/what-input.min.js" type="text/javascript"></script>
	
	<!-- add fonts -->
	<link href='https://fonts.googleapis.com/css?family=Kreon:300' rel='stylesheet' type='text/css'>
	
	<!-- add foundation glyphicons -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation-icons/foundation-icons.css">
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation-icons/foundation-icons.eot">
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation-icons/foundation-icons.svg">
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation-icons/foundation-icons.ttf">
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation-icons/foundation-icons.woff">

	<!-- 1. Link to jQuery (1.8 or later), -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <!-- 33 KB -->
	
	<!-- fotorama.css & fotorama.js. -->
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

	<!-- lightSlider -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightslider.css" /> 
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/lightslider.js">                 
		<!-- required jquery/1.11.0 -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/lightslider.js" type="text/javascript"></script>
	<!-- <link type="text/javascript" href="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.js">
	<link type="text/javascript" href="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.min.js"> -->

</head>
<body>
<div id="wrapper">

<div class="row searchBar">
	<div class="large-12 colums">

		<!-- search form goes here -->
		<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
			<div><input type="text" size="18" placeholder="Search This Site...... " value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
			</div>
		</form>
	</div><!-- end large col right -->
</div><!-- end serachBar -->

<header>
	<div class="row" data-equalizer >	
		<div class="large-4 columns headerFirst" data-equalizer-watch >
			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
				<h6>YOUR SLOGAN GOES HERE</h6>
			</div><!-- logo -->
		</div>
		<div class="large-8 columns headerSecond" data-equalizer-watch >
		    <nav>
		    	<div class="MainNavMenu">
		        	<?php wp_page_menu(); ?> 
		        </div><!-- end MainNavMenu -->
		    </nav>
		</div>
	</div>
</header>
