<?php /* Template Name: Loans Page Template */ get_header(); ?>

	<main role="main">

		<?php get_template_part('pagehead', 'default'); ?>


		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
								<?php wp_nav_menu( array(
								    'menu' => 'Loan Programs',
								    'menu_class' => 'nav-pills nav-stacked custom-nav-stacked',
								) );?>	
						</div>
						<div class="col-md-push-1 col-md-7">

							<?php if (is_page('loan-programs')) { ?>

								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
								
							<?php } else{}; ?>
							
							<?php if (is_page('loan-criteria')) { ?>
								
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>

							<?php } else{}; ?>

							<?php if (is_page('loan-products')) { ?>

								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>

							<?php } else{}; ?>


							<?php if (is_page('terms-and-rates')) { ?>
								
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									
									<?php the_content(); ?>								
						
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
								<br/>

								<div class="panel-group custom-panel-collapse" id="accordion" role="tablist" aria-multiselectable="true">

								<?php if(have_rows('loan_terms_and_rates')):?>
								<?php $counter = 0; ?>
								<?php while( have_rows('loan_terms_and_rates') ): the_row(); 
									$heading = get_sub_field('heading');
									$body = get_sub_field('body');
								?>
							
								<div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingOne">
								      <h6 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $counter ?>" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
								          <?php echo $heading ?>
								        </a>
								      </h6>
								    </div>
								    <div id="<?php echo $counter ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								      <div class="panel-body">
								        <?php echo $body ?>
								      </div>
								    </div>
							  	</div>

								<?php $counter++; ?>
								<?php endwhile; ?>
								<?php else: ?>
								<h1>There are no FAQs.</h1>
								<?php endif; ?>
								
								</div>

								<?php edit_post_link(); ?>

							<?php } else{}; ?>

						</div>
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
