<?php /* Template Name: Contact Page Template */ get_header(); ?>

	<main role="main">

		<?php get_template_part('pagehead', 'default'); ?>

		<section>
			<div class="contact">
				<div class="container-fluid">
					<div class="row no-gutter">
						<div class="col-md-6 hidden-xs hidden-sm">
							<div id="map-container" class="map-container"></div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-8">
									<div class="contact-wrapper">
										<?php if (have_posts()): while (have_posts()) : the_post(); ?>
										<?php the_content(); ?>								
										<?php edit_post_link(); ?>
										<?php endwhile; ?>
										<?php else: ?>
										<?php endif; ?>
										</div>
								</div>
								<div class="col-md-2">
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
<!--
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<h1><?php the_title(); ?></h1>

					<?php //if (have_posts()): while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php// the_content(); ?>

							<?php// comments_template( '', true ); // Remove if you don't want comments ?>

							<br class="clear">

							<?php// edit_post_link(); ?>


					<?php //endwhile; ?>

					<?php //else: ?>

						<article>

							<h2><?php// _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>

					<?php// endif; ?>

					</div>
				</div>
			</div>
		</section>
-->
	</main>

<?php //get_sidebar(); ?>

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script> 
    <script>	

    function init_map() {
        var myOptions = {
            zoom: 15,
            center: new google.maps.LatLng(40.74615379999999, -73.98364019999997),
            draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scaleControl: false,
            navigationControl: false,
    		mapTypeControl: false,
    		scrollwheel: false, 
    		disableDoubleClickZoom: true,
        };
        map = new google.maps.Map(document.getElementById('map-container'), myOptions);
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(40.74615379999999, -73.98364019999997)
        });
        infowindow = new google.maps.InfoWindow({
            content: '<strong>W Financial</strong><br>149 Madison Avenue, Suite 701<br>10016 New York City<br>'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);

    </script>

<?php get_footer(); ?>
