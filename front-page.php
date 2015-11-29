<?php get_header(); ?>
<section class="fpMiniHeader">
		<div class="row">
			<div class="large-12 columns imageSlider">
				<div class="fotorama">
				  	<img src="http://www.lorempixel.com/960/400">
				  	<img src="http://www.lorempixel.com/961/400">
				  	<img src="http://www.lorempixel.com/959/400">
				  	<img src="http://www.lorempixel.com/958/400">
				</div>
			</div>
		</div>
</section>
	
<section>
	<div class="row">
		<div class="large-12 colums textUnderSlider">
			<h2>"Chameleon is an extremely versatile theme with a myriad of options and styles"</h2>
			<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. deleniti, fugit eharum i  Nihilatione asperiores.</h6>
		</div><!-- end textUnderSlider -->
	</div><!-- end row -->
</section>

<section>
	<div class="row frontPageContentArea">
		<div class="large-12 columns ">
			<div class="row">
				<div class="large-4 columns fpca">
					<h5>Some Information Here</h5>
					<img src="http://www.lorempixel.com/225/226">
					<p> minus dolor, velit quisquam. Architecto nulla magnam nam eius corporis enim.</p>
				</div><!-- end 4 cols -->

				<div class="large-4 columns fpca">
					<h5>Some Information Here</h5>
					<img src="http://www.lorempixel.com/225/224">
					<p> minus dolor, velit quisquam. Architecto nulla magnam nam eius corporis enim.</p>
				</div><!-- end 4 cols -->

				<div class="large-4 columns fpca">
					<h5>Some Information Here</h5>
					<img src="http://www.lorempixel.com/225/225">
					<p> dolor, velit quisquam. Architecto nulla magnam nam eius corporis enim.</p>
				</div><!-- end 4 cols -->
			</div><!-- end row -->
		</div><!-- end frntPageContentArea -->
	</div><!-- end row -->

	<div class="row frontPageContentLower">
		<div class="large-4 columns">
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
		</div><!-- end large 4 cols -->

		<div class="large-8 columns">
			<div class="frontPageImages">
			    <ul class="somelightSlider">
			      	<li>
			          	<h3>First Slide</h3>
			          	<p>Lorem ipsum Cupidatat quis pariatur anim.</p>
			      	</li>
			      	<li>
			          	<h3>Second Slide</h3>
			          	<p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
			      	</li>

			      	<li>
			          	<h3>Third Slide</h3>
			          	<p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
			      	</li>

			      	<li>
			          	<h3>Fourth Slide</h3>
			          	<p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
			      	</li>
			    </ul>
			</div>
		</div>
	</div><!-- end row -->
</section>

<?php get_footer(); ?>