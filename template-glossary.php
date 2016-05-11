<?php /* Template Name: Glossary Page Template */ get_header(); ?>

	<main role="main">

		<!-- Page Head -->
		<?php get_template_part('pagehead', 'default'); ?>

		<!-- Page Content -->
		<section id="glossary">
			<div class="content">
				
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="text-center margin-bottom-50 custom-nav-stacked">
								
								<!-- Letters List -->

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

								<!-- End Letters List -->

							</div>
						</div>
						
						<div class="col-md-push-1 col-md-8">

							<?php $letters = range('a','z'); ?>
							<?php foreach ($letters as $i) { ?>
							<?php $iup = strtoupper($i); ?>
								
							<h2 id="<?php echo $i ?>" class="offset offset-glossary"><?php echo $iup ?></h2>
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
	</main>

<?php get_footer(); ?>