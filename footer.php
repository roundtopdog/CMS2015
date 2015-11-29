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
alert();
      $(document).foundation();
     $("#lightSlider").lightSlider();
    $("#lightSlider").lightSlider({
        item: 3,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,
 
        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////
 
        speed: 400, //ms'
        auto: false,
        loop: false,
        slideEndAnimation: true,
        pause: 2000,
 
        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',
 
        rtl:false,
        adaptiveHeight:false,
 
        vertical:false,
        verticalHeight:500,
        vThumbWidth:100,
 
        thumbItem:10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: 'middle',
 
        enableTouch:true,
        enableDrag:true,
        freeMove:true,
        swipeThreshold: 40,
 
        responsive : [],
 
        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {}
    });




    </script>

 <script type="text/javascript">
      $(document).ready(function() {
        

         
      });
    </script>

</body>
</html>
