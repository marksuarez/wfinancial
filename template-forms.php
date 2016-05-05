<?php /* Template Name: Forms Page Template */ get_header(); ?>

	<main role="main">

		<?php get_template_part('pagehead', 'default'); ?>


		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<?php wp_nav_menu( array(
							    'menu' => 'Forms',
							    'menu_class' => 'nav-pills nav-stacked custom-nav-stacked',
							) );?>
						</div>
						<div class="col-md-push-1 col-md-7">

							<!-- -->


							<?php if (is_page(21)) { ?>


								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
									

							<?php } else{}; ?>


							<?php if (is_page(258)) { ?>

								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
								
							<?php } else{}; ?>



							<?php if (is_page(256)) { ?>
								
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
								<hr/>
								<div class="table-responsive">
							        <table class="table table-hover">
							          	<thead>
								            <tr>
								              <th>Property Information</th>
								              <th></th>
								            </tr>
							          	</thead>
							          	<tbody id="myTable">
								        
								        <?php if(have_rows('property_info')):?>
										<?php while( have_rows('property_info') ): the_row(); 
										$heading = get_sub_field('heading');
										$body = get_sub_field('body');
										?>
								            <tr>
								              <td><h6><?php echo $heading ?></h6></td>
								              <td><?php echo $body ?></td>					
								            </tr>
								            
								            <?php endwhile; ?>
											<?php else: ?>
								            <?php endif; ?>
							         	</tbody>
							        </table>   
						      	</div>

						      <div class="table-responsive">
						        <table class="table table-hover">
						          <thead>
						            <tr>
						              <th>Borrower Information</th>
						              <th></th>
						            </tr>
						          </thead>
						          

						          <tbody id="myTable">
						          	<?php if(have_rows('borrower_info')):?>
									<?php while( have_rows('borrower_info') ): the_row(); 
										$heading = get_sub_field('heading');
										$body = get_sub_field('body');
									?>
						            <tr>
						              <td><?php echo $heading ?></td>
						              <td><?php echo $body ?></td>					
						            </tr>
						            
						            <?php endwhile; ?>
										<?php else: ?>
						            <?php endif; ?>
						          </tbody>


						        </table>   
						      </div>
						      <?php edit_post_link(); ?>
							
							<?php } else{}; ?>



							<?php if (is_page(240)) { ?>

								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
							
							<?php } else{}; ?>

							<?php if (is_page(236)) { ?>
								
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>								
									<?php edit_post_link(); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>

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
