<?php /* Template Name: Search Page Template */ get_header(); ?>

	<main role="main">

		<?php get_template_part('pagehead', 'default'); ?>
		


		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php get_template_part('searchform'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>


<?php get_footer(); ?>
