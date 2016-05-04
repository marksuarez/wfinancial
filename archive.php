<?php get_header(); ?>

	<main role="main">

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

		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php // _e('Archives', 'html5blank' ); ?></h1>
						<?php // get_template_part('loop'); ?>
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
		</section>

	</main>




<?php get_footer(); ?>
