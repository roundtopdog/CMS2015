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


<section class="miniHeader">
	<div class="row breadcrumbs">
		<div class="large-12 columns">
			<div class="breadcrumb">
				<?php 
					// if there is a parent, display the link
					$parent_title = get_the_title( $post->post_parent );
						if ( $parent_title != the_title( ' ', ' ', false ) ) {
							echo '<a href="' . get_permalink( $post->post_parent ) . '" title="' . $parent_title . '">' . $parent_title . '</a> » ';
						} 
					// then go on to the current page link
				?>
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?></a> »
			</div>
		</div>
	</div><!-- end breadcrumbs -->
		<div class="row">
			<div class="large-12 columns indexHeader">
				<?php single_cat_title( '', true ); ?>
				<h3><?php the_title(); ?></h3>	
			</div>
		</div>
</section>

<section class="mainContentSection">
	<div class="row contentSection">
		<div class="large-9 columns leftContentSection"><!-- content area -->
			<!-- START LOOP HERE -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
						<?php echo get_the_title(); ?>	
			<h2><?php the_title(); ?> </h2>
			<p class="pComments">Posted by <strong><?php the_author() ; ?></strong> on 
			<span class="entry-date"><?php echo get_the_date(); ?></span> in 
			<strong><?php the_category(' '); ?></strong> | <?php get_comments_number(); ?> comments</p>
			<div class="row rowAfterpComments">
				<?php 
					if( has_post_thumbnail() ) {
						the_post_thumbnail( 'thumbnail' );
					}
				?>
				<!-- PUT TAGS HERE -- FOR EXAMPLE BELOW OUTPUTS POST or PAGE CONTENT -->
			     <?php the_content(); ?> 
				<?php endwhile; else : ?>
				 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				<!-- END LOOP HERE -->
			</div><!-- end row -->
		</div><!-- end 8 cols -->

		<div class="large-3 columns sidebarSection">
			<div class="row sidebarContent">
				<h5>From The Blog</h5>
	            <ul>
					<?php
					    $args = array( 'numberposts' => '5');
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
						}
					?>
				</ul> 
			</div><!-- end row -->
			
			<div class="row sidebarContent">
				<h5>Archives</h5>
				<ul>
					<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 20 ) ); ?>
				</ul>			
			</div><!-- end row -->

			<div class="row sidebarContent">
				<h5>Recent Posts</h5>
				<ul>
					<?php
					    $args = array( 'order' => 'asc');
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
						}
					?>
				</ul>			
			</div>
		</div><!-- end 4 cols -->
	</div><!--end section div -->
</section>

<footer>
	<div class="footerWrapper">
		<div class="row" data-equalizer>
			<div class="large-3 columns widget " data-equalizer-watch>
				<div class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
					<h6>YOUR SLOGAN GOES HERE</h6>
				</div><!-- logo -->
				<h6>&copy;Chameleon Theme 2010</h6>
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>

			<div class="large-3 columns widget" data-equalizer-watch>
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>

			<div class="large-3 columns widget" data-equalizer-watch>
				<?php dynamic_sidebar( 'footer3' ); ?>
			</div>

			<div class="large-3 columns widget" data-equalizer-watch>
				<?php dynamic_sidebar( 'footer4' ); ?>
			</div>
			
			<div class="row ">
				<div class="large-12 columns  footerText">
					<p>Designed by <strong>Elegant WordPress Themes</strong> | Powered by <strong> Wordpress</strong></p>
				</div>
	    	</div><!-- powered by -->
		</div><!-- row data-equalizer -->
	</div><!-- end footerWrapper -->
	<?php wp_footer(); ?><!-- puts the admin bar on the page when you view it -->	
</footer>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
