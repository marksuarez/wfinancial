<?php get_header(); ?>

	<main role="main">

		<?php get_template_part('pagehead', 'default'); ?>

		<section>
			<div class="content">
				<div class="container">	
					<div class="row">
						<div class="col-md-push-3 col-md-6">
								<!--<h1><?php the_title(); ?></h1>-->

							<?php if (have_posts()): while (have_posts()) : the_post(); ?>

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

							<?php endif;  ?>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>

<?php get_footer(); ?>