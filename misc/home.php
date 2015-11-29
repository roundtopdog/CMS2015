<?php wp_head(); ?><!-- adds space to below the admin bar  -->
<?php get_header(); ?>


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
</section>
	<div class="row">
		<div class="large-12 columns indexHeader">
			<?php echo get_the_title(); ?>
			<h3><?php the_title(); ?></h3>	
		</div>
	</div>
<section class="mainContentSection">
	<div class="row contentSection">
		<div class="large-9 columns leftContentSection"><!-- content area -->
			<h2><?php the_title(); ?> </h2>
				<!-- <hr>  -->

				<!-- START LOOP HERE -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
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
	</div><!--end contentSection div -->
</section>

<?php get_footer(); ?>
