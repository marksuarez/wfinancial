<?php get_header(); ?>

	<main role="main">
		
		<!-- pageHead -->

		<section id="pageHead">
			<div class="pageHead">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center">
								<?php the_title(); ?>
							</h1>
							<p class="text-center lead">
								We bring 30 years of experience to the business. And, lorem, ipsum dolor. Dolor lorem is the ipsum. Lorem ipsum dolor lorem ipsum. And, lorem, ipsum dolor. Dolor lorem is the ipsum. Lorem ipsum dolor lorem ipsum. And, lorem, ipsum dolor lorem lorem.
							</p>	
						</div>
					</div>
				</div>				
			</div>
		</section>	

		<!-- /pageHead -->

		<!-- pageContent -->

		<section id="pageContent">
			<div class="pageContent">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							
						</div>
					</div>
				</div>				
			</div>
		</section>			

		<!-- /pageContent -->

		

		<section>

			<h1><?php the_title(); ?></h1>

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

		<?php endif; ?>

		</section>
	




	</main>

<?php get_footer(); ?>
