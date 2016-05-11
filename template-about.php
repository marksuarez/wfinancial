<?php /* Template Name: About Page Template */ get_header(); ?>

	<main role="main">

		<?php get_template_part('pagehead', 'default'); ?>


		<section id="about-nav">
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
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="modal-dialog card">
												<div class="modal-content">
													<!--<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></div>-->

														<div class="row row-eq-height">
															
															<div class="col-md-6 col-md-push-6 flex">
																<div class="donedeal-inner-image" <?php if( get_sub_field('grid_portrait') ): ?> style="background-image: url(<?php the_sub_field('grid_portrait'); ?>);" <?php endif?>>
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																</div>
															</div>
														
															<div class="col-md-6 col-md-pull-6">
																<div class="donedeal-inner-text">
																	<div class="card-featured-label">
																		<h2><?php echo $name; ?></h2>
																		<h6><?php echo $role; ?><br/></h6>
																		<hr class="fancy"/>
																	</div>
																	<div class="card-featured-label">
																		<?php echo $bio; ?>
																		<a href="mailto:<?php echo $email; ?>">Contact <?php echo $name; ?></a>
																	</div>
																	<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
																</div>	
															</div>
														</div>	
															
													<!--<div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button></div>-->
												</div>	
											</div>
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
								<div class="card-featured-label">
									<h6>Reference</h6>
									<hr class="fancy"/>
								</div>
								<div class="card-featured-label">
									<?php echo $quote ?>
								</div>	
								<div class="card-featured-label">
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
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-6">
							<div class="affiliates-logo">
								<?php if( get_field('affiliates_logo') ): ?>
									<img class="img-responsive" src="<?php echo the_field('affiliates_logo'); ?>"/>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<?php echo get_field('affiliates'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>

<?php get_footer(); ?>
