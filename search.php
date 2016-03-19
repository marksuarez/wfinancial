<?php get_header(); ?>

	<main role="main">
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
