<?php get_header(); ?>

	<main role="main">
		<section>
			<div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<div class="text-center"><?php custom_breadcrumbs(); ?></div>

								<?php 
								$dealAmount = get_field('deal_amount');
								$dealType = get_field('deal_type');
								$dealLocation = get_field('deal_location');
								$dealShortDescription = get_field('deal_short_description');
								$dealLongDescription = get_field('deal_long_description');
								?>
								<img src="<?php the_field('full_image'); ?>" width="100%" />
								<div style="height: 50px; background: url(<?php the_field('full_image'); ?>) cover center center no-repeat;"></div>
								<ul>
									<li><?php echo $dealAmount; ?></li>
									<li><?php echo $dealType; ?></li>
									<li><?php echo $dealLocation; ?></li>
									<li><?php echo $dealShortDescription; ?></li>
									<li><?php echo $dealLongDescription; ?></li>
									
								</ul>
								<?php previous_post_link('%link', 'Previous post'); ?>
								<?php next_post_link('%link', 'Next post'); ?>
								




							<?php endwhile; ?>

							<?php else: ?>

							<article>

								<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

							</article>

						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>



		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail(); // Fullsize image for the single post ?>
									</a>
								<?php endif; ?>
								<!-- /post thumbnail -->

								<!-- post title -->
								<h1>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h1>
								<!-- /post title -->

								<!-- post details -->
								<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
								<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
								<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
								<!-- /post details -->

								<?php the_content(); // Dynamic Content ?>

								<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

								<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

								<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

								<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

								<?php comments_template(); ?>

							</article>
							<!-- /article -->

						<?php endwhile; ?>

						<?php else: ?>

							<!-- article -->
							<article>

								<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

							</article>
							<!-- /article -->

						<?php endif; ?>
					</div>
				</div>
			</div>			
		</section>
	</main>

<?php get_footer(); ?>
