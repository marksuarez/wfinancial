<?php get_header(); ?>

	<main role="main">
		

		<!-- What's Our Deal Section -->

		<section id="">
			<div class="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center">
								What's our deal?
							</h1>
							<p class="text-center lead">
								Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur.
							</p>
							<div class="text-center">
								<a href="#" class="btn btn-default">
									See Done Deals
								</a>
							</div>	
						</div>
					</div>
				</div>	
			</div>
		<section>	

		<!-- /What's Our Deal Section -->

		<!-- DealSlider Section -->

		<section>
			<div class="main-gallery">
				
				<div class="gallery-cell">
					<div class="container">
						<div class="row">
							<div class="col-md-push-8 col-md-4">
								<div class="">	
									<h3>
										Featured Deals
									</h3>
									<hr class="fancy"/>
									<h2>
										$100,000,000 Bridge Loan
									</h2>
									<h4>
										Queens
									</h4>
									<p>
										Maecenas faucibus mollis interdum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
									</p>
									<a href="#">
										View This Deal
									</a>
								</div>	
							</div>
						</div>
					</div>
				</div>

				<div class="gallery-cell">
					<div class="container">
						<div class="row">
							<div class="col-md-push-8 col-md-4">
								<div class="">	
									<h3>
										Featured Deals
									</h3>
									<hr class="fancy"/>
									<h2>
										$100,000,000 Bridge Loan
									</h2>
									<h4>
										Queens
									</h4>
									<p>
										Maecenas faucibus mollis interdum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
									</p>
									<a href="#">
										View This Deal
									</a>
								</div>	
							</div>
						</div>
					</div>
				</div>

				<div class="gallery-cell">
					<div class="container">
						<div class="row">
							<div class="col-md-push-8 col-md-4">
								<div class="">	
									<h3>
										Featured Deals
									</h3>
									<hr class="fancy"/>
									<h2>
										$100,000,000 Bridge Loan
									</h2>
									<h4>
										Queens
									</h4>
									<p>
										Maecenas faucibus mollis interdum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
									</p>
									<a href="#">
										View This Deal
									</a>
								</div>	
							</div>
						</div>
					</div>
				</div>


			</div>
		</section>

		<!-- /Dealslider Section -->

		<!-- Contact Section -->

		<section>
			<div class="container">
				<div class="row no-gutter">
					<div class="col-md-6">
						<div class="contactCard text-center">
							<h3>
								Contact Us
							</h3>
							<p>
								<a href="#">212-684-2283</a><br/>
								<a href="#">info@w-financial.com</a>
							</p>
							<p>
								149 Madison Avenue, Suite 701<br/>
								New York, NY 10016
							</p>
						</div>	
					</div>
					<div class="col-md-6">
						<div class="contactCard text-center">
							<h3>
								Stay In Touch
							</h3>
							<p>
								Keep up to date with our eNews
							</p>
							<a href="#" class="btn btn-default">Sign Me Up</a>
						</div>	
					</div>
				</div>
			</div>
		</section>

		<!-- /Contact Section -->

		

		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>

		<?php endwhile; ?>

		<?php else: ?>

			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>

		<?php endif; ?>

		</section>
	




	</main>

<?php get_footer(); ?>
