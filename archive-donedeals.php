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

		<section id="pagehead">

			<div class="breadcrumb-wrapper breadcrumb-in-pagehead">
				<div class="container text-right">
					<?php custom_breadcrumbs(); ?>
				</div>
			</div>

			<div class="pagehead" style="background-image: url(<?php echo site_url() ?>/wp-content/uploads/header_SKYLINE.png);"
				data-100-top="background-position: center bottom 0px;"
				data--600-top="background-position: center bottom -200px;"
				>
				<div class="container">
					<div class="row">
						<div class="col-md-push-2 col-md-8">
							<?php
							if ( is_post_type_archive('donedeals') ) {
							    ?>
							    <h1 class="text-center">Done Deals</h1>
							    <p class="text-center lead">Perhaps the best way to get to know us is to browse a few of the hundreds of loans that we have closed during the last 13 years. When you need SWAT team performance to close a time-sensitive or complex deal, W is your go-to lender.</p>
							    <?php
							} else {
							?>

							<h1 class="text-center"><?php the_archive_title(); ?></h1>
							
							<?php }
							?>

							
						</div>
					</div>
				</div>				
			</div>
		</section>		

		<!-- Done Deals -->

		<section>
			<div class="content">
				<div class="container">
					<div id="isotopeContainerDeals" class="row">

						<?php
							// we add this, to show all posts in our
							// Glossary sorted alphabetically
							$posts = query_posts($query_string .
							'&orderby=menu_order&order=asc&posts_per_page=8'); 
						?>

						<?php if (have_posts()): while (have_posts()) : the_post(); 

						// vars
						$deal_amount = get_field('deal_amount');
						$deal_type = get_field('deal_type');
						$deal_location = get_field('deal_location');
						$deal_short_description = get_field('deal_short_description');
						$deal_long_description = get_field('deal_long_description');
						$repeat_borrower = get_field('repeat_borrower');
						$featured = get_field('featured');
						$orientation = get_field('orientation');
						$grid_image = get_field('grid_image');
						?>

							
						<div class="col-md-6 item">
							<a href="<?php the_permalink(); ?>" class="card-a-wrap">
								
								<div class="card-wrapper-donedeals">

								<div class="card deal-card <?php if ($orientation === 'tall') { echo 'deal-card-tall'; } ?>" style="background-image: url(<?php echo $grid_image ?>);"
									data-bottom-top="@myAttr: 0;" data-bottom-center="@myAttr: 1;"
									>
									
									<div class="card-inner">
										<?php if($repeat_borrower) { ?>
										
										<div class="deal-tag">Repeat Borrower</div>
										
										<?php } else{}; ?>

										<div class="deal-details">
					                        <h2><?php echo $deal_amount; ?></h2>
					                        <h6><?php echo $deal_location; ?></h6>
					                        <p><?php echo $deal_short_description; ?></p>
					                        <!--<?php edit_post_link(); ?>-->
					                    </div>
					                </div>
								
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

					<!-- <?php // get_template_part('pagination'); ?>-->

					<?php 
						if (function_exists("wp_bs_pagination"))
						    {
						         //wp_bs_pagination($the_query->max_num_pages);
						         wp_bs_pagination();
						}
					?> 

				</div>

			</div>

		</section>


		<!-- /Done Deals -->

	</main>




<?php get_footer(); ?>
