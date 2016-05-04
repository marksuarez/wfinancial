<?php /* Template Name: FAQ Page Template */ get_header(); ?>

	<main role="main">

		<?php get_template_part('pagehead', 'default'); ?>


		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<div class="panel-group custom-panel-collapse" id="accordion" role="tablist" aria-multiselectable="true">

							<?php if(have_rows('faqs')):?>

							<?php $counter = 0; ?>

							<?php while( have_rows('faqs') ): the_row(); 

							$question = get_sub_field('question');
							$answer = get_sub_field('answer');

							?>

							
								<div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingOne">
								      <h6 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $counter ?>" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
								          <?php echo $question ?>
								        </a>
								      </h6>
								    </div>
								    <div id="<?php echo $counter ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								      <div class="panel-body">
								        <?php echo $answer ?>
								      </div>
								    </div>
							  	</div>
							


							<?php $counter++; ?>

							<?php endwhile; ?>

							<?php else: ?>

							<h1>There are no FAQs.</h1>

							<?php endif; ?>

							</div>

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
