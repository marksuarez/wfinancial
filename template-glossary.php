<?php /* Template Name: Glossary Page Template */ get_header(); ?>

	<main role="main">

		<?php get_template_part('pagehead', 'default'); ?>

		<section id="glossary">
			<div class="content">
				<div class="container">
					

					<div class="row">
						<div class="col-md-3">
							<div class="text-center margin-bottom-50">
								<div class="btn-group btn-group-justified glossary">
								
									<?php $letters = range('a','e'); ?>

									<?php foreach ($letters as $i) { ?>
									<?php $iup = strtoupper($i); ?>
  								
  										<a data-scroll href="#<?php echo $i ?>" class="btn btn-default"><?php echo $iup ?></a>
								
									<?php } ?>



								</div>

								<div class="btn-group btn-group-justified glossary">
								<?php $letters = range('f','j'); ?>
									<?php foreach ($letters as $i) { ?>
									<?php $iup = strtoupper($i); ?>
  								
  										<a data-scroll href="#<?php echo $i ?>" class="btn btn-default"><?php echo $iup ?></a>
								
									<?php } ?>
								</div>

								<div class="btn-group btn-group-justified glossary">
								<?php $letters = range('k','o'); ?>
									<?php foreach ($letters as $i) { ?>
									<?php $iup = strtoupper($i); ?>
  								
  										<a data-scroll href="#<?php echo $i ?>" class="btn btn-default"><?php echo $iup ?></a>
								
									<?php } ?>
								</div>	

								<div class="btn-group btn-group-justified glossary">
								<?php $letters = range('p','t'); ?>
									<?php foreach ($letters as $i) { ?>
									<?php $iup = strtoupper($i); ?>
  								
  										<a data-scroll href="#<?php echo $i ?>" class="btn btn-default"><?php echo $iup ?></a>
								
									<?php } ?>
								</div>	
								<div class="btn-group btn-group-justified glossary">
								<?php $letters = range('u','y'); ?>
									<?php foreach ($letters as $i) { ?>
									<?php $iup = strtoupper($i); ?>
  								
  										<a data-scroll href="#<?php echo $i ?>" class="btn btn-default"><?php echo $iup ?></a>
								
									<?php } ?>
								</div>	

							</div>
						</div>
					
						
						<div class="col-md-push-1 col-md-8">

							<?php $letters = range('a','z'); ?>
							<?php foreach ($letters as $i) { ?>
							<?php $iup = strtoupper($i); ?>
							
							<h2 id="<?php echo $i ?>" class="offset"><?php echo $iup ?></h2>
							<hr/>
							
							
							<?php if(have_rows('glossary-'.$i)):?>
							<?php while( have_rows('glossary-'.$i) ): the_row(); 
								$term = get_sub_field('term');
								$definition = get_sub_field('definition');
							?>

						
							
						

							
							<h6><?php echo $term; ?></h6>
							<p><?php echo $definition; ?></p>
							<hr/>

						<?php endwhile; ?>
						<?php else: ?>
							
							<h5>No Terms</h5>
							<hr/>

						<?php endif; ?>
						<?php } ?>

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