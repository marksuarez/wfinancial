<?php get_header(); ?>

	<main role="main">

		<?php get_template_part('pagehead', 'default'); ?>
		


<?php if (is_page('about')) { ?>

		<!-- pageContent (About Page) Dynamic-->

		<section>
			<div class="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="text-center">
								<div class="horizontal-sub-menu" role="group" aria-label="...">
								  	<a href="#overview" class="about-menu" data-scroll>Overview</a>
								  	<a href="#senior-partners" class="about-menu" data-scroll>Senior Partners</a>
								  	<a href="#references" class="about-menu" data-scroll>References</a>
								  	<a href="#affiliates" class="about-menu" data-scroll>Affiliates</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="overview" class="offset">
			<div class="light-bg">
				<div class="container-fluid">
					<div class="row row-eq-height">
						
						<div class="col-md-6 overview-image-column" <?php if( get_field('overview_image') ): ?> style="background-image: url(<?php the_field('overview_image'); ?>);" <?php endif?> ></div>
						
						<div class="col-md-6 overview-text-column">
							<?php if( get_field('overview_title') ): ?>
								<h3><?php the_field('overview_title'); ?></h3>
							<?php else: ?>
								<h3>Overview</h3>
							<?php endif; ?>
							<hr class="fancy"/>
							<?php if( get_field('overview_text') ): ?>
								<?php echo the_field('overview_text'); ?>
							<?php endif; ?>
						</div>

					</div>
				</div>
			</div>
		</section>	


		<section id="senior-partners" class="offset">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="about-title">
								<?php if( get_field('people_title') ): ?>
									<h3 class="text-center"><?php the_field('people_title'); ?></h3>
								<?php else: ?>
									<h3 class="text-center">Senior Partners</h3>
								<?php endif; ?>	
								<?php if( get_field('people_intro') ): ?>
									<p class="lead text-center"><?php echo the_field('people_intro'); ?></p>
								<?php endif; ?>	
								<hr class="fancy"/>
							</div>
						</div>
					</div>
					<div class="row">

						<?php if(have_rows('people_bios')):?>

						<?php $counter = 0; ?>

						<?php while( have_rows('people_bios') ): the_row(); 

							// people bio variables
							$name = get_sub_field('name');
							$role = get_sub_field('role');
							$bio = get_sub_field('bio');
							$email = get_sub_field('email');
							$grid_portrait = get_sub_field('grid_portrait');
							// $wide_portrait = ;																					
							// /people bio variables
						?>

						<div class="col-md-4">

							<a href="#<?php echo $counter; ?>" data-toggle="modal" class="card-a-wrap">
								<div class="card-wrapper-partners">
									<div class="card partner-card">	
										<img class ="img-responsive" src="<?php echo $grid_portrait; ?>"/>
										<div class="card-inner">	
										<h4><?php echo $name; ?></h4>
										<h6><?php echo $role; ?></h6>
										</div>
									</div>
								</div>
							</a>
							<div id="<?php echo $counter; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content" <?php if( get_sub_field('wide_portrait') ): ?> style="background-image: url(<?php the_sub_field('wide_portrait'); ?>);" <?php endif?>>
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											
										</div>
										<div class="container">
											<div class="row">
												<div class="col-md-6">
													<div class="card-wrapper-partners">
														<div class="card">
															<div class="card-inner">
																<div class="modal-body">
																	<h4 id="myModalLabel"><?php echo $name; ?></h4>
																	<h6 id="myModalLabel"><?php echo $role; ?></h6>
																	<p><?php echo $bio; ?></p>
																	<a href="mailto:<?php echo $email; ?>">Contact</a>
																</div>
															</div>
														</div>	
													</div>	
												</div>	
											</div>
										</div>
										<div class="modal-footer">
											<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php $counter++; ?>

						<?php endwhile; ?>

						<?php else: ?>

							<h1>There are no People Bios.</h1>

						<?php endif; ?>
					
						
					</div>
				</div>
			</div>
		</section>


		<section id="references" class="offset">
			<div class="content light-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="about-title">
								<?php if( get_field('references_title') ): ?>
									<h3 class="text-center"><?php the_field('references_title'); ?></h3>
								<?php else: ?>
									<h3 class="text-center">References</h3>
								<?php endif; ?>	
								<?php if( get_field('references_intro') ): ?>
									<p class="lead text-center"><?php echo the_field('references_intro'); ?></p>
								<?php endif; ?>	
								<hr class="fancy"/>
							</div>
						</div>
					</div>
				</div>

				<div class="references-gallery">
					
					<?php if(have_rows('references')):?>
						<?php while( have_rows('references') ): the_row(); 

						$person = get_sub_field('person');
						$quote = get_sub_field('quote');

						?>
					<div class="card-wrapper-references">
						<div class="card">
							<div class="card-inner">
								<h6>Reference</h6>
								<hr class="fancy"/>
								<div>
									<?php echo $quote ?>
									<h6 class="small-h6"><?php echo $person ?></h6>
								</div>
							</div>
						</div>
					</div>	


						<?php endwhile; ?>

						<?php else: ?>

						<h1>There are no FAQs.</h1>

					<?php endif; ?>

				</div>
			</div>	
		</section>


		<section id="affiliates" class="offset">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="about-title">
								<?php if( get_field('affiliates_title') ): ?>
									<h3 class="text-center"><?php the_field('affiliates_title'); ?></h3>
								<?php else: ?>
									<h3 class="text-center">Affiliates</h3>
								<?php endif; ?>	
								<?php if( get_field('affiliates_intro') ): ?>
									<p class="lead text-center"><?php echo the_field('affiliates_intro'); ?></p>
								<?php endif; ?>
								<hr class="fancy"/>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-5">
							
							<?php echo get_field('affiliates'); ?>

						</div>
						<div class="col-md-push-1 col-md-6">
							
							<div class="card affiliates-logo-card">
								<?php if( get_field('affiliates_logo') ): ?>
									<img class="img-responsive" src="<?php echo the_field('affiliates_logo'); ?>"/>
								<?php endif; ?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- /pageContent (About Page) Dynamic-->

<?php } else{}; ?>



<?php if ( is_page(21) || is_page(19) || in_array(21, $post->ancestors) || in_array(19, $post->ancestors)) { ?>

		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<?php if (is_page(19) || in_array(19, $post->ancestors)) {?>
								<?php wp_nav_menu( array(
								    'menu' => 'Loan Programs',
								    'menu_class' => 'nav-pills nav-stacked custom-nav-stacked',
								) );?>
							<?php }; ?>

							<?php if (is_page(21) || in_array(21, $post->ancestors)) {?>
								<?php wp_nav_menu( array(
								    'menu' => 'Forms',
								    'menu_class' => 'nav-pills nav-stacked custom-nav-stacked',
								) );?>
							<?php }; ?>	
						</div>
						<div class="col-md-push-1 col-md-7">

							<?php if (is_page('loan-programs')) { ?>

								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
								
							<?php } else{}; ?>
							
							<?php if (is_page('loan-criteria')) { ?>
								
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>

							<?php } else{}; ?>

							<?php if (is_page('loan-products')) { ?>

								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>

							<?php } else{}; ?>


							<?php if (is_page('terms-and-rates')) { ?>
								
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									
									<?php the_content(); ?>								
						
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
								<br/>

								<div class="panel-group custom-panel-collapse" id="accordion" role="tablist" aria-multiselectable="true">

								<?php if(have_rows('loan_terms_and_rates')):?>
								<?php $counter = 0; ?>
								<?php while( have_rows('loan_terms_and_rates') ): the_row(); 
									$heading = get_sub_field('heading');
									$body = get_sub_field('body');
								?>
							
								<div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingOne">
								      <h6 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $counter ?>" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
								          <?php echo $heading ?>
								        </a>
								      </h6>
								    </div>
								    <div id="<?php echo $counter ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								      <div class="panel-body">
								        <?php echo $body ?>
								      </div>
								    </div>
							  	</div>

								<?php $counter++; ?>
								<?php endwhile; ?>
								<?php else: ?>
								<h1>There are no FAQs.</h1>
								<?php endif; ?>
								
								</div>

								<?php edit_post_link(); ?>

							<?php } else{}; ?>




							<!-- -->


							<?php if (is_page(21)) { ?>


								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
									

							<?php } else{}; ?>


							<?php if (is_page(258)) { ?>

								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
								
							<?php } else{}; ?>



							<?php if (is_page(256)) { ?>
								
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
								<hr/>
								<div class="table-responsive">
							        <table class="table table-hover">
							          	<thead>
								            <tr>
								              <th>Property Information</th>
								              <th></th>
								            </tr>
							          	</thead>
							          	<tbody id="myTable">
								        
								        <?php if(have_rows('property_info')):?>
										<?php while( have_rows('property_info') ): the_row(); 
										$heading = get_sub_field('heading');
										$body = get_sub_field('body');
										?>
								            <tr>
								              <td><h6><?php echo $heading ?></h6></td>
								              <td><?php echo $body ?></td>					
								            </tr>
								            
								            <?php endwhile; ?>
											<?php else: ?>
								            <?php endif; ?>
							         	</tbody>
							        </table>   
						      	</div>

						      <div class="table-responsive">
						        <table class="table table-hover">
						          <thead>
						            <tr>
						              <th>Borrower Information</th>
						              <th></th>
						            </tr>
						          </thead>
						          

						          <tbody id="myTable">
						          	<?php if(have_rows('borrower_info')):?>
									<?php while( have_rows('borrower_info') ): the_row(); 
										$heading = get_sub_field('heading');
										$body = get_sub_field('body');
									?>
						            <tr>
						              <td><?php echo $heading ?></td>
						              <td><?php echo $body ?></td>					
						            </tr>
						            
						            <?php endwhile; ?>
										<?php else: ?>
						            <?php endif; ?>
						          </tbody>


						        </table>   
						      </div>
						      <?php edit_post_link(); ?>
							
							<?php } else{}; ?>



							<?php if (is_page(240)) { ?>

								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
							
							<?php } else{}; ?>

							<?php if (is_page(236)) { ?>
								
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>

							<?php } else{}; ?>


						      
						</div>
					</div>
				</div>
			</div>
		</section>

<?php } else{}; ?>
	


<?php if (is_page('press')) { ?>

		<!-- pageContent (Press Page) (DYNAMIC LOOP) -->

		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-2 pressFilters">
							<ul>
								<!-- Populates Select Dropdown Filter with the past 8 years -->
								<li><a href="#"><?php echo date("Y")?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-1 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-2 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-3 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-4 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-5 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-6 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-7 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-8 year")); ?></a></li>
    						</ul>
    					</div>
    				</div>	
    				<div id="isotopeContainerPress" class="row">

						<?php if(have_rows('press_items')):?>
						<?php while( have_rows('press_items') ): the_row(); 

							// press variables
							$title = get_sub_field('press_item_title');
							$date = get_sub_field('press_item_date');
							
							$time = strtotime($date);
							$month = date("F", $time);
							$year = date("Y", $time);

							$link = get_sub_field('press_item_link');
							$link_text = get_sub_field('press_item_link_text');																							
							// /press variables
						?>

						<div class="col-md-6 item <?php echo $year; ?>">
							<div class="card-wrapper-press">
								<div class="card card-press"
									data-bottom-top="@myAttr: 0;" 
									data-bottom-center="@myAttr: 1;"
								>
									<div class="card-inner">
										<h4><?php echo $month; ?>, <?php echo $year; ?></h4>
										<p><?php echo $title; ?></p>
										<h6><a href="<?php echo $link; ?>"><?php echo $link_text; ?></a></h6>
									</div>
								</div>
							</div>	
						</div>

						<?php endwhile; ?>

						<?php else: ?>

							<h1>There are no Press Items.</h1>

						<?php endif; ?>

					</div>
				</div>
			</div>
		</section>

		<!-- /pageContent (Press Page) (DYNAMIC LOOP) -->

<?php } else{}; ?>



<?php if (is_page('sitemap')) { ?>
	<section>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php //echo do_shortcode( '[htmlmap showpages showposts]' ); ?>
						<?php echo do_shortcode( '[wp_sitemap_page]' ); ?>
					</div>
				</div>	
			</div>
		</div>

<?php } else{}; ?>



<?php if (is_page('contact')) { ?>

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

<?php } else{}; ?>



<?php if (is_page('search')) { ?>

		<!-- pagecontent (Search Page) -->

		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php get_template_part('searchform'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- /pagecontent (search page) -->

<?php } else{}; ?>



<?php if (is_page('faq')) { ?>

		<!-- pagecontent (accordians Page) -->

		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<div class="panel-group custom-panel-collapse" id="accordion" role="tablist" aria-multiselectable="true">

							<?php if(have_rows('faqs')):?>

							<?php $counter = 0; ?>

							<?php while( have_rows('faqs') ): the_row(); 

							$question = get_sub_field('question');
							$answer = get_sub_field('answer');

							?>

							
								<div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingOne">
								      <h6 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $counter ?>" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
								          <?php echo $question ?>
								        </a>
								      </h6>
								    </div>
								    <div id="<?php echo $counter ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								      <div class="panel-body">
								        <?php echo $answer ?>
								      </div>
								    </div>
							  	</div>
							


							<?php $counter++; ?>

							<?php endwhile; ?>

							<?php else: ?>

							<h1>There are no FAQs.</h1>

							<?php endif; ?>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- /pagecontent (accordians page) -->

<?php } else{}; ?>



<?php if (is_page('glossary')) { ?>

		<section id="glossary">
			<div class="content">
				<div class="container">
					

					<div class="row">
						<div class="col-md-3">
							<div class="text-center margin-bottom-50">
								<div class="btn-group btn-group-justified glossary">
								
									<?php $letters = range('a','e'); ?>

									<?php foreach ($letters as $i) { ?>
									<?php $iup = strtoupper($i); ?>
  								
  										<a data-scroll href="#<?php echo $i ?>" class="btn btn-default"><?php echo $iup ?></a>
								
									<?php } ?>



								</div>

								<div class="btn-group btn-group-justified glossary">
								<?php $letters = range('f','j'); ?>
									<?php foreach ($letters as $i) { ?>
									<?php $iup = strtoupper($i); ?>
  								
  										<a data-scroll href="#<?php echo $i ?>" class="btn btn-default"><?php echo $iup ?></a>
								
									<?php } ?>
								</div>

								<div class="btn-group btn-group-justified glossary">
								<?php $letters = range('k','o'); ?>
									<?php foreach ($letters as $i) { ?>
									<?php $iup = strtoupper($i); ?>
  								
  										<a data-scroll href="#<?php echo $i ?>" class="btn btn-default"><?php echo $iup ?></a>
								
									<?php } ?>
								</div>	

								<div class="btn-group btn-group-justified glossary">
								<?php $letters = range('p','t'); ?>
									<?php foreach ($letters as $i) { ?>
									<?php $iup = strtoupper($i); ?>
  								
  										<a data-scroll href="#<?php echo $i ?>" class="btn btn-default"><?php echo $iup ?></a>
								
									<?php } ?>
								</div>	
								<div class="btn-group btn-group-justified glossary">
								<?php $letters = range('u','y'); ?>
									<?php foreach ($letters as $i) { ?>
									<?php $iup = strtoupper($i); ?>
  								
  										<a data-scroll href="#<?php echo $i ?>" class="btn btn-default"><?php echo $iup ?></a>
								
									<?php } ?>
								</div>	

							</div>
						</div>
					
						
						<div class="col-md-push-1 col-md-8">

							<?php $letters = range('a','z'); ?>
							<?php foreach ($letters as $i) { ?>
							<?php $iup = strtoupper($i); ?>
							
							<h2 id="<?php echo $i ?>" class="offset"><?php echo $iup ?></h2>
							<hr/>
							
							
							<?php if(have_rows('glossary-'.$i)):?>
							<?php while( have_rows('glossary-'.$i) ): the_row(); 
								$term = get_sub_field('term');
								$definition = get_sub_field('definition');
							?>

						
							
						

							
							<h6><?php echo $term; ?></h6>
							<p><?php echo $definition; ?></p>
							<hr/>

						<?php endwhile; ?>
						<?php else: ?>
							
							<h5>No Terms</h5>
							<hr/>

						<?php endif; ?>
						<?php } ?>

						</div>

				</div>
			</div>
		</section>

<?php } else{}; ?>


<!--
		<section>
			<div class="content">
			<div class="container">	
				<div class="row">
					<div class="col-md-push-3 col-md-6">
							<!--<h1><?php the_title(); ?></h1>-->

						<?php /* if (have_posts()): while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<?php the_content(); ?>

								<br class="clear">

								<?php edit_post_link(); ?>

							</article>

						<?php endwhile; ?>

						<?php else: ?>

							<article>

								<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

							</article>

						<?php endif; */ ?>
					<!--</div>
				</div>
			</div>
			</div>
		</section>
	
-->


	</main>





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
