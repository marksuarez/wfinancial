<!-- pageHead -->

		<section id="pagehead">

			<div class="breadcrumb-wrapper  breadcrumb-in-pagehead">
				<div class="container text-right">
					<?php custom_breadcrumbs(); ?>
				</div>
			</div>

			<!--<div class="pagehead" <?php// if( get_field('page_header_background') ): ?> style="background-image: url(<?php// the_field('page_header_background'); ?>);" <?php// endif?> 
				data-100-top="background-position: center bottom 0px;"
				data--600-top="background-position: center bottom -200px;"
				>-->
			<div class="pagehead" <?php if( get_field('page_header_background') ): ?> style="background-image: url(<?php the_field('page_header_background'); ?>);" <?php endif?> 
				
				>	
				<div class="container">
					<div class="row">
						<div class="col-md-push-2 col-md-8">
							
							<!-- The title -->
							<?php if( get_field('page_title') ): ?>
							<h1 class="text-center"><?php the_field('page_title'); ?></h1>
							<?php else: ?>
							<h1 class="text-center"><?php the_title(); ?></h1>
							<?php endif; ?>
							<!-- /The title -->

							<!-- The intro -->
							<?php if( get_field('page_intro') ): ?>
								<p class="text-center lead"><?php the_field('page_intro'); ?></p>
							<?php endif; ?>
							<!-- /The intro -->
						
						</div>
					</div>
				</div>				
			</div>
		</section>	

<!-- /pageHead -->