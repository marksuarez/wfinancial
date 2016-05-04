<?php /* Template Name: Press Page Template */ get_header(); ?>

	<main role="main">

		<?php get_template_part('pagehead', 'default'); ?>


		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-2 pressFilters">
							<ul>
								<!-- Populates Select Dropdown Filter with the past 8 years -->
								<li><a href="#"><?php echo date("Y")?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-1 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-2 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-3 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-4 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-5 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-6 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-7 year")); ?></a></li>
        						<li><a href="#"><?php echo date("Y",strtotime("-8 year")); ?></a></li>
    						</ul>
    					</div>
    				</div>	
    				<div id="isotopeContainerPress" class="row">

						<?php if(have_rows('press_items')):?>
						<?php while( have_rows('press_items') ): the_row(); 

							// press variables
							$title = get_sub_field('press_item_title');
							$date = get_sub_field('press_item_date');
							
							$time = strtotime($date);
							$month = date("F", $time);
							$year = date("Y", $time);

							$link = get_sub_field('press_item_link');
							$link_text = get_sub_field('press_item_link_text');																							
							// /press variables
						?>

						<div class="col-md-6 item <?php echo $year; ?>">
							<div class="card-wrapper-press">
								<div class="card card-press"
									data-bottom-top="@myAttr: 0;" 
									data-bottom-center="@myAttr: 1;"
								>
									<div class="card-inner">
										<h4><?php echo $month; ?>, <?php echo $year; ?></h4>
										<p><?php echo $title; ?></p>
										<h6><a href="<?php echo $link; ?>"><?php echo $link_text; ?></a></h6>
									</div>
								</div>
							</div>	
						</div>

						<?php endwhile; ?>

						<?php else: ?>

							<h1>There are no Press Items.</h1>

						<?php endif; ?>

					</div>
				</div>
			</div>
		</section>


<!--
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<h1><?php the_title(); ?></h1>

					<?php //if (have_posts()): while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php// the_content(); ?>

							<?php// comments_template( '', true ); // Remove if you don't want comments ?>

							<br class="clear">

							<?php// edit_post_link(); ?>


					<?php //endwhile; ?>

					<?php //else: ?>

						<article>

							<h2><?php// _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>

					<?php// endif; ?>

					</div>
				</div>
			</div>
		</section>
-->
	</main>

<?php //get_sidebar(); ?>


<?php get_footer(); ?>
