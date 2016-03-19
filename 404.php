<?php get_header(); ?>

	<main role="main">
		<section>
			<div class="container">
				<div class="row">	
					<div class="col-md-12">
						<article id="post-404">
							<h1 class="text-center"><?php _e( 'Page not found', 'html5blank' ); ?></h1>
							<h2 class="text-center">
								<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
							</h2>
						</article>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
