<?php get_header(); ?>
<section class="miniHeader">
	<div class="row breadcrumbs">
		<div class="large-12 columns">
			<div class="breadcrumb">

				<!-- enter breadcrumb code here -->
			</div>
		</div>
	</div><!-- end breadcrumbs -->

	<div class="row">
		<div class="large-12 columns indexHeader">
			<div>
				<h3><?php the_category( ','); ?></h3>
			</div>
		</div>
	</div><!-- end row -->
</section>

<section class="mainContentSection">
	<div class="row contentSection">
		<div class="large-9 columns leftContentSection"><!-- content area -->
			<div class="row rowAfterpComments">	
				<div class="large-12 columns nextRowAfterComments">
					<?php rewind_posts(); ?>
					<!-- start the loop -->
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post">
							<h3 class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
							<div class="meta postInfo">
								<?php _e("Posted by "); ?> <strong><?php the_author_link() ?></strong> on <?php the_date() ?> in <?php the_category(',') ?> 
							</div>
							<div class="storycontent">
								<div class="contentThumb">
									<?php the_post_thumbnail( 'thumbnail' ); ?>
								</div>
								<?php the_content(__('(more...)')); ?>
							</div>
						</div>
							<?php endwhile; else: ?>
								<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<!-- end the loop -->
						<?php endif; ?>
				</div><!-- end large 12 -->
			</div><!-- end row -->
		</div><!-- end 8 cols -->
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>