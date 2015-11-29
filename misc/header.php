
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
	<script src="<?php echo get_template_directory_uri(); ?>/js/test.js" type="text/javascript"></script>

	<!-- add fonts -->
	<link href='https://fonts.googleapis.com/css?family=Kreon:400,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

	<!-- add foundation glyphicons -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation-icons/foundation-icons.css">
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation-icons/foundation-icons.eot">
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation-icons/foundation-icons.svg">
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation-icons/foundation-icons.ttf">
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation-icons/foundation-icons.woff">

<!-- droidSans
kreon light
kreon
blackJackRegular -->
	
</head>
<body>
<div id="wrapper">
<header>
	<div class="row">
		<div class="large-12 columns">
			 
			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<label>
					
					<input type="search" class="search-field fi-social-facebook" placeholder="Search " value="Search This Website..." name="s" title="Search for:" />
				</label>
				<!-- <input type="submit" class="search-submit" value="place gliph icon here" /> -->
			</form>
		</div>
	</div>
	<div class="row" data-equalizer >	
		<div class="large-4 columns headerFirst" data-equalizer-watch >
			<i class="fi-cloud style2"></i>
			<span class="fi-at-sign"></span>

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