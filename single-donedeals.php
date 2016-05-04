<?php get_header(); ?>

	<main role="main">
		<section>
			<div class="">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<div class="text-center">
								<div class="arrow arrow-left">
									<?php previous_post_link('%link', '<i class="fa fa-angle-left"></i>'); ?>
								</div>
								<div class="arrow arrow-right">
									<?php next_post_link('%link', '<i class="fa fa-angle-right"></i>'); ?>
								</div>
							</div>



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
								?>
								
								<div>
									<div class="row row-eq-height">
										<div class="col-md-6" style="min-height: 620px;">
											<div style="padding: 70px 40px;">
											<!--<img src="<?php //the_field('full_image'); ?>" width="100%" />-->
												<h2 style="margin:0;"><?php echo $dealAmount; ?></h2>
												<h2 style="margin:0;"><?php echo $dealType; ?></h2>
												<hr class="fancy"/>
												<h6><?php echo $dealLocation; ?></h6>
												<!--<p><?php echo $dealShortDescription; ?></p>-->
												<?php echo $dealLongDescription; ?>
											</div>	
										</div>
										<div class="col-md-6" style="min-height: 620px; background: #eaebeb no-repeat url(<?php the_field('full_image'); ?>) center center/cover;">
											<div class="" ></div>
											<div>
											<!--<img class="img-responsive" src="<?php the_field('full_image'); ?>"/>-->
											</div>
										</div>
										

									</div>
								</div>
							</div>		
								
								
								




							

							
						</div>
					</div>
				</div>

				<div class="text-center" style="padding: 30px;">
								
								<a href="<?php echo site_url() . '/donedeals'; ?>" class="btn btn-primary">Back To Done Deals</a>
								
							</div>
				
				

			
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			</div>
		</section>


		<!--
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php //if (have_posts()): while (have_posts()) : the_post(); ?>

							<article id="post-<?php //the_ID(); ?>" <?php post_class(); ?>>

								<?php //if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
									<a href="<?php //the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php //the_post_thumbnail(); // Fullsize image for the single post ?>
									</a>
								<?php //endif; ?>

								<h1>
									<a href="<?php //the_permalink(); ?>" title="<?php// the_title(); ?>"><?php //the_title(); ?></a>
								</h1>

								<span class="date"><?php// the_time('F j, Y'); ?> <?php //the_time('g:i a'); ?></span>
								<span class="author"><?php //_e( 'Published by', 'html5blank' ); ?> <?php// the_author_posts_link(); ?></span>
								<span class="comments"><?php //if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>

								<?php// the_content(); // Dynamic Content ?>

								<?php// the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

								<p><?php// _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

								<p><?php// _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

								<?php //edit_post_link(); // Always handy to have Edit Post Links available ?>

								<?php //comments_template(); ?>



						<?php //endwhile; ?>

						<?php //else: ?>

							<article>

								<h1><?php //_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

							</article>

						<?php //endif; ?>
					</div>
				</div>
			</div>			
		</section>
		-->

	</main>

<?php get_footer(); ?>
