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