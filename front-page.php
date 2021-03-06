<?php get_header(); ?>

	<main role="main">
		

		<!-- What's Our Deal Section -->

		<section id="whatsOurDeal">
			<div class="whatsOurDeal">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php if( get_field('page_title') ): ?>
							<h1 class="text-center"><?php the_field('page_title'); ?></h1>
							<?php endif; ?>
							<!--<hr/ style="opacity: 0.1">-->
							<?php if( get_field('page_intro') ): ?>
							<p class="text-center lead"><?php the_field('page_intro') ?></p>
							<?php endif; ?>
							<!--<hr/ style="opacity: 0.1">-->
							<div class="text-center"><a href="<?php echo site_url(); ?>/donedeals" class="btn btn-primary">See Done Deals</a></div>	
						</div>
					</div>
				</div>	
			</div>
		</section>	

		<!-- /What's Our Deal Section -->


		<!-- DealSlider Section (Dynamic) -->

		<section>

			<div class="main-gallery">


			<?php $args = array ( 'post_type'    => 'donedeals', 'posts_per_page' => '-1'); ?>
			<?php $query = new WP_Query( $args ); ?>
			<?php if ( $query->have_posts()): while ( $query->have_posts()) :  $query->the_post(); ?> 
			<?php
				// vars
				$deal_amount = get_field('deal_amount');
				$deal_type = get_field('deal_type');
				$deal_location = get_field('deal_location');
				$deal_short_description = get_field('deal_short_description');
				$deal_long_description = get_field('deal_long_description');
				$repeat_borrower = get_field('repeat_borrower');
				$featured = get_field('featured');
				$full_image = get_field('full_image');
			?>	

			<?php if($featured) : ?>
				
				<div class="gallery-cell" style="background-image: url('<?php echo $full_image ?>');">
					<div class="container">
						<div class="row">
							<div class="col-md-push-7 col-md-4">
								<div class="card-wrapper-featured">
									<div class="card card-featured">
										<div class="card-inner">
											<div class="card-featured-label">	
												<h6 class="">Featured Deals</h6>
												<hr class="fancy"/>
											</div>
											<div class="card-featured-label">	
												<h2><?php echo $deal_amount; ?><br/>
												<?php echo $deal_type; ?></h2>
											</div>	
											<div class="card-featured-label">	
												<h6 class="small"><?php echo $deal_location; ?></h6>
												<p><?php echo $deal_short_description; ?></p>
											</div>
											<div class="card-featured-label">
												<h6 class="small"><a href="<?php the_permalink(); ?>">View This Deal</a></h6>
											</div>
										</div>
									</div>	
								</div>	
							</div>
						</div>
					</div>
				</div>
				
			<?php else: endif; ?>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

			</div>

		</section>

		<!-- /DealSlider Section (Dynamic) -->
						

		<!-- Contact Section -->

		<section>
			<div class="contact-section">
				<div class="container">
					<div class="or-circle">OR</div>
					<div class="row no-gutter">
						<div class="col-md-6">
							<div class="text-center">
								<h4>
									Contact Us
								</h4>
								<p>
									<a href="#">212-684-2283</a><br/>
									<a href="#">info@w-financial.com</a><br/>
									149 Madison Avenue, Suite 701<br/>
									New York, NY 10016
								</p>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="text-center">
								<h4>
									Stay In Touch
								</h4>
								<p>
									Keep up to date with<br/>W Financial eNews
								</p>
								<a href="<?php echo site_url(); ?>/join-our-mailing-list" class="btn btn-primary">Sign Up to our Mailing List</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- /Contact Section -->

	</main>

<?php get_footer(); ?>
