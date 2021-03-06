<?php wp_head(); ?><!-- adds space to below the admin bar  -->
<?php get_header(); ?>


<section class="miniHeader">
	<div class="row breadcrumbs">
		<div class="large-12 columns">
		

			
		</div>
	</div><!-- end breadcrumbs -->


<?php single_cat_title( '', true ); ?>
	<div class="row">
		<div class="large-12 columns indexHeader">
<!-- START LOOP HERE -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			<?php echo get_the_title(); ?>
			
			<h3><?php the_title(); ?></h3>	
		</div>
	</div>
</section>

<section class="mainContentSection">
	<div class="row contentSection">
		<div class="large-9 columns leftContentSection"><!-- content area -->
		<h2><?php the_title(); ?> </h2>
		<!-- <hr>  -->
		<p class="pComments">Posted by <strong><?php the_author() ; ?></strong> on 
		<span class="entry-date"><?php echo get_the_date(); ?></span> in 
		<strong><?php the_category(' '); ?></strong> | <?php get_comments_number(); ?> comments</p>
		<!-- <hr> -->
		
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
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus veritatis minus magnam enim, aut incidunt possimus neque quas eum natus ipsa, placeat iste temporibus, repudiandae nesciunt vel! Possimus, quidem, eaque.
</section>

<?php get_footer(); ?>
