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
			<div class="row rowAfterpComments">	
				<div class="large-12 columns">
					<!-- Start the Loop. -->
					 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					 	<!-- Test if the current post is in category 3. -->
					 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
					 	<!-- Otherwise, the div box is given the CSS class "post". -->

					 	<?php if ( in_category( '3' ) ) : ?>
					 		<div class="post-cat-three">
					 	<?php else : ?>
					 		<div class="post">
					 	<?php endif; ?>


					 	<!-- Display the Title as a link to the Post's permalink. -->

					 	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


					 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

					 	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


					 	<!-- Display the Post's content in a div box. -->

					 	<div class="entry">
					 		<?php the_content(); ?>
					 	</div>


					 	<!-- Display a comma separated list of the Post's Categories. -->

					 	<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
					 	</div> <!-- closes the first div box -->


					 	<!-- Stop The Loop (but note the "else:" - see next line). -->

					 <?php endwhile; else : ?>


					 	<!-- The very first "if" tested to see if there were any Posts to -->
					 	<!-- display.  This "else" part tells what do if there weren't any. -->
					 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


					 	<!-- REALLY stop The Loop. -->
					 <?php endif; ?>

				</div><!-- end large 12 -->
			</div><!-- end row -->
		</div><!-- end 8 cols -->

		<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>