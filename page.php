<?php get_header(); ?>

	<main role="main">
		
		<!-- pageHead -->

		<section id="pageHead">
			<div class="pageHead">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center">
								<?php the_title(); ?>
							</h1>
							<p class="text-center lead">
								We bring 30 years of experience to the business. And, lorem, ipsum dolor. Dolor lorem is the ipsum. Lorem ipsum dolor lorem ipsum. And, lorem, ipsum dolor. Dolor lorem is the ipsum. Lorem ipsum dolor lorem ipsum. And, lorem, ipsum dolor lorem lorem.
							</p>	
						</div>
					</div>
				</div>				
			</div>
		</section>	

		<!-- /pageHead -->

<?php if (is_page('press')) { ?>

		<!-- pageContent (Press Page) 

		<section id="pageContent">
			<div class="pageContent">
				

				<div class="container">
					
					<div class="row pressFilters">
						<div class="col-md-12">
							<ul>
        						<li><a href="#">yearone</a></li>
        						<li><a href="#">yeartwo</a></li>
    						</ul>
						</div>
					</div>

					<div id="isotopeContainerPress" class="row">
						
						<div class="col-md-6 item yearone">
							<article class="pressCard">
								<h2>January 2016</h2>
								<p>Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum.</p>
								<a href="#">Read More</a>
							</article>
						</div>
						<div class="col-md-6 item yearone">
							<article class="pressCard">
								<h2>January 2016</h2>
								<p>Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum.</p>
								<a href="#">Read More</a>
							</article>
						</div>
						<div class="col-md-6 item yeartwo">
							<article class="pressCard">
								<h2>January 2016</h2>
								<p>Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum.</p>
								<a href="#">Read More</a>
							</article>
						</div>
						<div class="col-md-6 item yeartwo">
							<article class="pressCard">
								<h2>January 2016</h2>
								<p>Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum.</p>
								<a href="#">Read More</a>
							</article>
						</div>
						<div class="col-md-6 item yeartne">
							<article class="pressCard">
								<h2>January 2016</h2>
								<p>Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum.</p>
								<a href="#">Read More</a>
							</article>
						</div>
						<div class="col-md-6 item yeartwo">
							<article class="pressCard">
								<h2>January 2016</h2>
								<p>Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum.</p>
								<a href="#">Read More</a>
							</article>
						</div>
						<div class="col-md-6 item yearone">
							<article class="pressCard">
								<h2>January 2016</h2>
								<p>Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum.</p>
								<a href="#">Read More</a>
							</article>
						</div>

					</div>
				</div>				
			</div>
		</section>			

		/pageContent -->


		<!-- pageContent (Press Page) (DYNAMIC LOOP) -->

		<section>
			<div>
				<div class="container">
					<div class="row pressFilters">
						<div class="col-md-12">
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
							<article class="pressCard">
								<h2><?php echo $month; ?>, <?php echo $year; ?></h2>
								<p><?php echo $title; ?></p>
								<a href="<?php echo $link; ?>"><?php echo $link_text; ?></a>
							</article>
						</div>

						<?php endwhile; ?>

						<?php else: ?>

							<h1>There are no Press Items.</h1>

						<?php endif; ?>

					</div>
				</div>
			</div>
		</section>

		<!-- /pageContent (Press Page) (DYNAMIC LOOP) -->

<?php } else{}; ?>


<?php if(is_archive()) { ?>

		<!-- pageContent (Done Deals Page) -->

		<section>
			<div class="pageContent">
				<div class="container">
					<div id="isotopeContainerDeals" class="row">
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight1">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight2">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight2">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight2">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight1">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight1">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight2">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight1">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight2">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight2">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight1">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight1">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight2">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 item">
							<a href="#" class="dealCard dealCardHeight1">
								<div class="dealCardInner">
									<div class="dealTag">Repeat Borrower</div>
			                    	<div class="dealDetails">
			                        	<h2>$8,000,000</h2>
			                        	<h4>Midtown, Manhattan</h4>
			                        	<p>This development site needed refinancing to become New York’s newest hotel. We secured it.</p>
			                    	</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		<section>	

		<!-- /pageContent -->

<?php } else{}; ?>





<?php if (is_page('about')) { ?>
		
		<!-- pageContent (About Page) 

		<section>
			<div class="pageContent">
				<div class="container">
					<div class="row">
						<div class="col-md-4">

							<a href="#greggwinter" data-toggle="modal">
								<img src=""/>
								<h2>Gregg Winter</h2>
								<h4>Principal</h4>
							</a>

							<div id="greggwinter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h3 id="myModalLabel">Modal header</h3>
										</div>
										<div class="modal-body">
											<p>One fine body…</p>
										</div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
											<button class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">

							<a href="#davidmheiden" data-toggle="modal">
								<img src=""/>
								<h2>David M. Heiden</h2>
								<h4>Principal</h4>
							</a>

							<div id="davidmheiden" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h3 id="myModalLabel">Modal header</h3>
										</div>
										<div class="modal-body">
											<p>One fine body…</p>
										</div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
											<button class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<a href="#marclbailin" data-toggle="modal">
								<img src=""/>
								<h2>Marc L. Bailin</h2>
								<h4>Principal</h4>
							</a>
							<div id="marclbailin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h3 id="myModalLabel">Modal header</h3>
										</div>
										<div class="modal-body">
											<p>One fine body…</p>
										</div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
											<button class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		/pageContent -->

		<!-- pageContent (About Page) Dynamic-->

		<section>
			<div>
				<div class="container">
					<div class="row">

						<?php if(have_rows('people_bios')):?>

						<?php $counter = 0; ?>

						<?php while( have_rows('people_bios') ): the_row(); 

							// people bio variables
							$name = get_sub_field('name');
							$role = get_sub_field('role');
							$bio = get_sub_field('bio');
							$email = get_sub_field('email');
							// $grid_portrait = ;
							// $wide_portrait = ;																					
							// /people bio variables
						?>

						<div class="col-md-4">

							<a href="#<?php echo $counter; ?>" data-toggle="modal">
								<img src=""/>
								<h2><?php echo $name; ?></h2>
								<h4><?php echo $role; ?></h4>
							</a>
							<div id="<?php echo $counter; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h3 id="myModalLabel"><?php echo $name; ?></h3>
										</div>
										<div class="modal-body">
											<p><?php echo $bio; ?></p>
											<a href="mailto:<?php echo $email; ?>">Contact</a>
										</div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
											<button class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>

						</div>

						<?php $counter++; ?>

						<?php endwhile; ?>

						<?php else: ?>

							<h1>There are no People Bios.</h1>

						<?php endif; ?>
					
						
					</div>
				</div>
			</div>
		</section>

		<!-- /pageContent (About Page) Dynamic-->

<?php } else{}; ?>


<?php if (is_page('search')) { ?>

		<!-- pagecontent (Search Page) -->

		<section>
			<div class="pageContent">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php get_template_part('searchform'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- /pagecontent (search page) -->

<?php } else{}; ?>


<?php if (is_page('loan-programs')) { ?>

		<!-- pagecontent (accordians Page) -->

		<section>
			<div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="accordion" id="accordion2">
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
											Collapsible Group Item #1
										</a>
									</div>
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="accordion-inner">
											Anim pariatur cliche. Minim qui you in1.com probably haven't heard of them et cardigan trust fund culpa biodiesel.
										</div>
									</div>
								</div>
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
											Collapsible Group Item #2
										</a>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="accordion-inner">
											Anim pariatur cliche...
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</section>

		<!-- /pagecontent (accordians page) -->

<?php } else{}; ?>






		<i class="glyphicon glyphicon-adjust"></i>

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
