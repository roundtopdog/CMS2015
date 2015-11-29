<?php get_header(); ?>
<section class="miniHeader">
	<div class="row breadcrumbs">
		<div class="large-12 columns">
			<div class="breadcrumb">
			<!-- Start the Loop. -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
					
					<h2><?php the_title(); ?> </h2>
					<p>Posted by <strong><?php the_author() ; ?></strong> on <?php the_date(); ?></p>
					<div id="imgBox">
						<?php 
							if( has_post_thumbnail() ) {
								the_post_thumbnail( 'thumbnail' );
							}
						?>
					</div><!-- imgBox -->
					<!-- PUT TAGS HERE - FOR EXAMPLE BELOW OUTPUTS POST or PAGE CONTENT -->
			     	<?php the_content(); ?> 
					<?php comments_template(); ?>
					<?php endwhile; else : ?>
					<p>
						<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
					</p>
						<?php endif; ?>
					<!-- END LOOP HERE -->
				</div><!-- end large 12 -->
			</div><!-- end row -->
		</div><!-- end 8 cols -->
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>