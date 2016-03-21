<?php get_header(); ?>

	<main role="main">
		
		<!-- Default Archive Page
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php // _e('Archives', 'html5blank' ); ?></h1>
						<?php // get_template_part('loop'); ?>
						<?php // get_template_part('pagination'); ?>
					</div>
				</div>
			</div>	
		</section>
		-->

		<!-- Done Deals -->

		<section>
			<div>
				<div class="container">
					<div id="isotopeContainerDeals" class="row">

						<?php if (have_posts()): while (have_posts()) : the_post(); 

						// vars
						$deal_amount = get_field('deal_amount');
						$deal_type = get_field('deal_type');
						$deal_location = get_field('deal_location');
						$deal_short_description = get_field('deal_short_description');
						$deal_long_description = get_field('deal_long_description');
						$repeat_borrower = get_field('repeat_borrower');
						$featured_deal = get_field('featured_deal');

						?>

							
						<div class="col-md-6 item">
							<a href="<?php the_permalink(); ?>" class="dealCard">
								<div class="dealCardInner">
									<?php if($repeat_borrower) { ?>
									
									<div class="dealTag">Repeat Borrower</div>
									
									<?php } else{}; ?>

									<div class="dealDetails">
				                        <h2><?php echo $deal_amount; ?></h2>
				                        <h4><?php echo $deal_location; ?></h4>
				                        <p><?php echo $deal_short_description; ?></p>
				                        <?php edit_post_link(); ?>
				                    </div>
								</div>	
							</a>
						</div>		

						<?php endwhile; ?>

						<?php else: ?>

						<div class="col-md-12">
							<h2 class="text-center"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
						</div>	
							
						<?php endif; ?>

					</div>

					<?php get_template_part('pagination'); ?>
					
				</div>

			</div>

		</section>


		<!-- /Done Deals -->

	</main>




<?php get_footer(); ?>
