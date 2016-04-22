<?php get_header(); ?>

	<main role="main">
		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
							<hr/>
							<?php get_template_part('loop'); ?>

							<!--<?php //get_template_part('pagination'); ?>-->
							<?php 
							if (function_exists("wp_bs_pagination"))
							    {
							         //wp_bs_pagination($the_query->max_num_pages);
							         wp_bs_pagination();
							}
						?> 
						</div>
					</div>
				</div>
			</div>	
		</section>
	</main>

<?php get_footer(); ?>
