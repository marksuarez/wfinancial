<?php get_header(); ?>

	<main role="main">
		<section>
			<div class="light-bg">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>





				<div class="container">
					<div class="row">
						

						<div class="col-md-12">

							<div class="breadcrumb-wrapper">
								<div class="container text-right">
									<?php custom_breadcrumbs(); ?>
								</div>
							</div>



							<div class="card">
								

								<?php 
								$dealAmount = get_field('deal_amount');
								$dealType = get_field('deal_type');
								$dealLocation = get_field('deal_location');
								$dealShortDescription = get_field('deal_short_description');
								$dealLongDescription = get_field('deal_long_description');
								$repeat_borrower = get_field('repeat_borrower');
								?>
								
								<div>
									<div class="row row-eq-height">

										
										<div class="col-md-6 col-md-push-6 flex">
											<div class="donedeal-inner-image" style="background-image: url(<?php the_field('full_image'); ?>);" ></div>
											<div>
											<!--<img class="img-responsive" src="<?php //the_field('full_image'); ?>"/>-->
											</div>
										</div>

										<div class="col-md-6 col-md-pull-6">
											<div class="donedeal-inner-text">
											<!--<img src="<?php //the_field('full_image'); ?>" width="100%" />-->
													
												<div class="card-featured-label">
													<h2><?php echo $dealAmount; ?></h2>
													<h2><?php echo $dealType; ?></h2>
													
												</div>	
												<div class="card-featured-label">
													<h6><?php echo $dealLocation; ?><br/>
														<!--<?php //if($repeat_borrower) { ?>Repeat Borrower<?php// } else{}; ?>--></h6>
													<hr class="fancy"/>
												</div>
												<div class="card-featured-label">
													<!--<p><?php echo $dealShortDescription; ?></p>-->
													<?php echo $dealLongDescription; ?>
												</div>
											</div>	
										</div>

										<div class="text-center">
											<div class="arrow arrow-left">
												<?php previous_post_link('%link', '<i class="fa fa-angle-left"></i>'); ?>
											</div>
											<div class="arrow arrow-right">
												<?php next_post_link('%link', '<i class="fa fa-angle-right"></i>'); ?>
											</div>
										</div>
										

									</div>
								</div>
							</div>		
							<div class="text-center back-to-donedeals-block">
								
								<a href="<?php echo site_url() . '/donedeals'; ?>" class="btn btn-primary btn-block">Back To Done Deals</a>
								
							</div>
								
								




							

							
						</div>
					</div>
				</div>

				
				
				

			
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			</div>
		</section>


	</main>

<?php get_footer(); ?>
