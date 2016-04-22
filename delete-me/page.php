<?php get_header(); ?>

	<main role="main">
		
		<!-- pageHead -->

		<section id="pageHead">
			<div class="pageHead" style="background: url('http://www.wfinancial.dev/wp-content/uploads/PageTop.png') center center / cover;">
				<div class="container">
					<div class="row">
						<div class="col-md-push-2 col-md-8">
							<h1 class="text-center"><?php the_title(); ?></h1>
							<?php if( get_field('intro') ): ?>
							<p class="text-center lead"><?php the_field('intro'); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>				
			</div>
		</section>	

		<!-- /pageHead -->




		<!-- BreadCrumb 
		<section>
			<div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="text-center">
								<?php //custom_breadcrumbs(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		 / BreadCrumb -->





<?php if ( is_page(21) || is_page(19) || in_array(21, $post->ancestors) || in_array(19, $post->ancestors)) { ?>
		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-3">

							<?php if (is_page(19) || in_array(19, $post->ancestors)) {?>
								<?php wp_nav_menu( array(
								    'menu' => 'Loan Programs',
								    'menu_class' => 'nav-pills nav-stacked custom-nav-stacked',
								) );?>
							<?php }; ?>

							<?php if (is_page(21) || in_array(21, $post->ancestors)) {?>
								<?php wp_nav_menu( array(
								    'menu' => 'Forms',
								    'menu_class' => 'nav-pills nav-stacked custom-nav-stacked',
								) );?>
							<?php }; ?>	

						</div>
						<div class="col-md-push-1 col-md-7">

							<?php if (is_page('loan-programs')) { ?>
								<h2>Loan Overview</h2>
								<p class="lead">W Financial <strong>commercial mortgage bridge loans</strong> are designed to help the Borrower accomplish immediate real estate goals and then, depending upon the borrower’s business plan, to exit the bridge loan either upon the sale of the property or by refinancing the bridge loan with an inexpensive bank loan. Our affiliate, <a href="#">Winter & Company</a> specializes in arranging such conventional financing.</p> 
								<p class="lead">As a provider of bridge loans for investment, income-producing and owner-occupied real estate, W Financial will help you or your client execute a viable business plan and exit strategy. Vacant/distressed property with a value-added business plan will also be considered.</p>
							<?php } else{}; ?>
							
							<?php if (is_page('loan-criteria')) { ?>
								<h2>Loan Criteria</h2>
								<p>Our strong preference is always to provide senior debt on cash-flowing properties, or properties that will or can readily become cash-flowing. We target loans between $500,000 and $30,000,000.  Larger loan applications are also welcome. While the majority of the commercial bridge loans we originate and service are in the New York Metropolitan area, if a loan meets our criteria, we are interested in loan opportunities in primary markets nationwide.</p>
								<p>We provide first mortgage bridge loan financing for the following property types:</p>
								<ul class="list-group custom-list-group">
									<li class="list-group-item">Multi-family / Apartment buildings</li>
									<li class="list-group-item">Mixed-use properties</li>
									<li class="list-group-item">Commercial and retail co-ops and condominiums</li>
									<li class="list-group-item">Retail / Shopping Centers</li>
									<li class="list-group-item">Acquisition of performing of defaulted notes</li>
									<li class="list-group-item">Office buildings</li>
									<li class="list-group-item">Warehouse / Industrial</li>
									<li class="list-group-item">Self-storage</li>
									<li class="list-group-item">Net-leased</li>
									<li class="list-group-item">Owner-occupied</li>
								</ul>
								<p>Our borrower must have a viable business plan and exit strategy along with relevant experience, net worth and liquidity.</p>

							<?php } else{}; ?>

							<?php if (is_page('loan-products')) { ?>
								<h2>Loan Products</h2>
								<p class="lead">W Financial primarily makes first mortgage bridge loans.</p>
					
								<ul class="list-group custom-list-group">
									<li class="list-group-item" style="padding: 30px;">
										<p>We will consider second mortgages and mezzanine loans on a highly selective basis
										To discuss or submit new loan opportunities, contact</p>

										David Heiden<br/>
										Phone: <a href="#">212-684-2283 x114</a><br/>
										Email: <a href="mailto:david@w-financial.com">david@w-financial.com</a>
									</li>
								</ul>

								<ul class="list-group custom-list-group">
									<li class="list-group-item" style="padding: 30px;">
										<p>For other information about W Financial Fund, LP, contact:</p>

										Gregg Winter<br/>
										Phone: <a href="#">212-684-2283 x114</a><br/>
										Email: <a href="mailto:david@w-financial.com">david@w-financial.com</a>
									</li>
								</ul>

							<?php } else{}; ?>





							<?php if (is_page('terms-and-rates')) { ?>
								<h2>Loan Terms and Rates</h2>					

								<div class="panel-group custom-panel-collapse" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									      <h6 class="panel-title">
									        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#1" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									          Interest rates
									        </a>
									      </h6>
									    </div>
									    <div id="1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									      <div class="panel-body">
									        W's rates typically fall within the range between 8% and 10% depending upon the usual factors such as: Quality and experience of sponsorship, location, cash flow (or the lack thereof), the nature of the borrower’s business plan and the amount of time necessary to execute same. Our loans are structured with a floating rate based on a spread above Prime.
									      </div>
									    </div>
								  	</div>
								  	<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									      <h6 class="panel-title">
									        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#2" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									          Term
									        </a>
									      </h6>
									    </div>
									    <div id="2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									      <div class="panel-body">
									        While the most typical loan term is one year, we have originated loans with terms ranging from six months to five years.
									      </div>
									    </div>
								  	</div>
								  	<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									      <h6 class="panel-title">
									        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#3" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									          Loan-To-Value
									        </a>
									      </h6>
									    </div>
									    <div id="3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									      <div class="panel-body">
									        For first mortgages, W Financial will typically lend up to 75% loan to value - to be determined on a case-by-case basis. Mezzanine and second mortgage loans will only be considered on cash-flowing properties for strong sponsors with real expertise, net worth, liquidity and meaningful guarantees.
									      </div>
									    </div>
								  	</div>
								  	<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									      <h6 class="panel-title">
									        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#4" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									          Prepayment
									        </a>
									      </h6>
									    </div>
									    <div id="4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									      <div class="panel-body">
									        Our loans typically have no prepayment penalty after a short lockout period.
									      </div>
									    </div>
								  	</div>
								  	<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									      <h6 class="panel-title">
									        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#5" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									          Points
									        </a>
									      </h6>
									    </div>
									    <div id="5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									      <div class="panel-body">
									        Typically 2%. In some cases part of the origination fee may be structured as an exit fee (deferred until the loan is repaid).
									      </div>
									    </div>
								  	</div>
								  	<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									      <h6 class="panel-title">
									        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#6" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									          Recourse
									        </a>
									      </h6>
									    </div>
									    <div id="6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									      <div class="panel-body">
									        Most loans are structured with full recourse.
									      </div>
									    </div>
								  	</div>
								  	<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									      <h6 class="panel-title">
									        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#7" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									          Brokers
									        </a>
									      </h6>
									    </div>
									    <div id="7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									      <div class="panel-body">
									        Most loans are introduced to W Financial by our valuable network of mortgage brokers. Brokers are always protected. We always welcome the opportunity to expand our network of commercial mortgage brokers, so call or email us with your bridge loan opportunities for a fast, efficient and reliable response.
									      </div>
									    </div>
								  	</div>
								  	<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									      <h6 class="panel-title">
									        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#8" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									          Payment Reserver
									        </a>
									      </h6>
									    </div>
									    <div id="8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									      <div class="panel-body">
									        Depending upon the type of loan request, the nature of the business plan and the financial strength of the Sponsor, we may elect to structure the loan with an Interest Reserve to cover a portion of the monthly interest payments.
									      </div>
									    </div>
								  	</div>
								</div>

							<?php } else{}; ?>




							<!-- -->




							<?php if (is_page('forms')) { ?>
								
								<h2>Loan Checklist</h2>

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

						      
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th><h3>Property Info</h3></th>
											</tr>	
										</thead>
										<?php //if(have_rows('property_info')):?>
										<?php //while( have_rows('property_info') ): the_row(); 
										//$heading = get_sub_field('heading');
										//$body = get_sub_field('body');
										?>
										<?php //echo $heading ?>
										<?php //echo $body ?>
										<?php //endwhile; ?>
										<?php //else: ?>
										<h1>There are no Items.</h1>
										<?php //endif; ?>
									</table>
								</div>
								-->
								<!--								<h3>Borrower Info</h3>
								<?php //if(have_rows('borrower_info')):?>
								<?php //while( have_rows('borrower_info') ): the_row(); 
								//$heading = get_sub_field('heading');
								//$body = get_sub_field('body');
								?>
								<?php //echo $heading ?>
								<?php //echo $body ?>
								<?php //endwhile; ?>
								<?php //else: ?>
								<h1>There are no Items.</h1>
								-->
							<?php //endif; ?>


						<?php } //else{}; ?>


						      
						</div>
					</div>
				</div>
			</div>
		</section>

<?php } else{}; ?>
	
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
			<div class="content">
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
							<div class="card">
								<div class="card-inner">
									<h4><?php echo $month; ?>, <?php echo $year; ?></h4>
									<p><?php echo $title; ?></p>
									<h6><a href="<?php echo $link; ?>"><?php echo $link_text; ?></a></h6>
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

		<!-- /pageContent (Press Page) (DYNAMIC LOOP) -->

<?php } else{}; ?>


<?php if(is_archive()) { ?>

		<!-- pageContent (Done Deals Page) 

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

		 /pageContent -->

<?php } else{}; ?>





<?php if (is_page('about')) { ?>
		<!--<a href="http://www.wfinancial.dev/loan-programs/#d">link</a>-->
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
			<div class="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="text-center">
								<div class="" role="group" aria-label="...">
								  	<a href="" class="">Overview</a>
								  	<a href="" class="">Senior Partners</a>
								  	<a href="" class="">References</a>
								  	<a href="" class="">Affiliates</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="overview">
			<div class="" style="background-color: #f4f4f4; ">
				<div class="container-fluid">

					<div class="row" style="display:flex;">
						<div class="col-md-6" style="background-color: black; background: url('http://www.wfinancial.dev/wp-content/uploads/10_EAST_34TH.png')  center;">

						</div>
						<div class="col-md-6">
							<div style="padding: 100px;">
							<h1>Overview</h1>
							<p>We understand the issues that can stop many banks in their tracks, and we can see the hidden value that some transactions offer and find a way to work with the borrower and his advisors to find an effective way to structure each deal.</p>
							<p>Commercial loans provided by W Financial are intended to be a short-term solution that can, for example, enable the purchase and improvement of a vacant, distressed, or non cash-flowing property, or alternatively, refinance existing debt to help stabilize and improve a property prior to a sale or a conventional bank refinancing.</p>
							<p>In some cases, an opportunity may present itself that requires a buyer to close within 30 days with no mortgage contingency. In such cases, closing with W Financial will "de-stress" the transaction and give the buyer/borrower plenty of breathing room to arrange optimal, low-rate conventional renancing at a later date when time allows.</p>
							<p>In fact, W Financial never offers to make a bridge loan without first identifying one or more viable exit strategies either via a conventional refinancing or, depending upon the borrower's business plan, the marketing and sale of a property.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	



		<section>
			<div class="content" style="padding:60px 0px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-center">Senior Partners</h2>
							<p class="lead text-center">Aenean lacinia bibendum nulla sed consectetur. Donec sed rient montes.</p>
						</div>
					</div>
					<div class="row">

						<?php if(have_rows('people_bios')):?>

						<?php $counter = 0; ?>

						<?php while( have_rows('people_bios') ): the_row(); 

							// people bio variables
							$name = get_sub_field('name');
							$role = get_sub_field('role');
							$bio = get_sub_field('bio');
							$email = get_sub_field('email');
							$grid_portrait = get_sub_field('grid_portrait');
							// $wide_portrait = ;																					
							// /people bio variables
						?>

						<div class="col-md-4">

							<a href="#<?php echo $counter; ?>" data-toggle="modal">
								<div class="card">	
									<img class ="img-responsive" src="<?php echo $grid_portrait; ?>"/>
									<div class="card-inner">	
									<h5><?php echo $name; ?></h5>
									<h6><?php echo $role; ?></h6>
									</div>
								</div>
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

		<section>
			<div class="content" style="padding: 60px 0px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-center">References</h2>
							<p class="lead text-center">Aenean lacinia bibendum nulla sed consectetur. Donec sed rient montes.</p>
						</div>
					</div>
				</div>

				<div class="references-gallery" style="position: relative; background-color: transparent;">
					
					<?php if(have_rows('references')):?>
					<?php while( have_rows('references') ): the_row(); 

					$person = get_sub_field('person');
					$quote = get_sub_field('quote');

					?>
					<div class="card-wrapper-references">
						<div class="card">
							<div class="card-inner">
							<!--<div class="container">-->
								<!--<div class="row">-->
									<!--<div class="col-md-6">-->
										<h6>Reference</h6>
										<hr/ style="height: 3px; background-color: #D95E5E; border: 0; width: 40px; margin: 5px 0px;">
										<div style="margin: 40px 0px;">
											<?php echo $quote ?>
											<h6><?php echo $person ?></h6>
										</div>
									<!--</div>-->
								<!--</div>-->
							<!--</div>-->
							</div>
						</div>
					</div>	

					<?php endwhile; ?>

					<?php else: ?>

					<h1>There are no FAQs.</h1>

					<?php endif; ?>
				</div>
			</div>	
		</section>

 		<!--
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<?php //if(have_rows('references')):?>


							<?php //while( have_rows('references') ): the_row(); 

							//$person = get_sub_field('person');
							//$quote = get_sub_field('quote');

							?>
							<?php //echo $person ?>
							<?php //echo $quote ?>

							<?php //endwhile; ?>

							<?php //else: ?>

							<h1>There are no FAQs.</h1>

							<?php //endif; ?>

					</div>
				</div>
			</div>
		</section>
		-->





		<section>
			<div class="content" style="margin: 60px 0px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-center">Affiliates</h2>
							<p class="lead text-center">Aenean lacinia bibendum nulla sed consectetur. Donec sed rient montes.</p>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-6">
							
							<?php echo get_field('affiliates'); ?>

						</div>
						<div class="col-md-6">
							
							<div class="card"></div>

						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- /pageContent (About Page) Dynamic-->

<?php } else{}; ?>


<?php if (is_page('contact')) { ?>

		<section>
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-8">
									<ul class="list-group">
										<li class="list-group-item">
											<h6>Contact Us</h6>
											<p>W Financial Fund, LP<br/>
											149 Madison Avenue, Suite 701<br/>
											New York, NY 10016</p>
										</li>
										<li class="list-group-item">
											<h6>To Discuss Or Submit New Loan Opportunities, Contact:</h6>
											<p>David Heiden<br/>
												Phone: 212-684-2283 x114<br/>
												Fax: 212-532-1222<br/>
												Email: david@w-financial.com</p>
										</li>
										<li class="list-group-item">
											<h6>For Other Information About W Financial Fund, Lp, Contact:</h6>
											<p>Gregg Winter<br/>
												Phone: 212-684-2283 x111<br/>
												Email: gregg@w-financial.com</p>
										</li>
										</li>
										<li class="list-group-item">
											<p>Stay informed about our special commercial loan programs and hear about our recently closed transactions!
											<p><a href="#">Click here to join our mailing list</a></p>
										</li>
									</ul>
								</div>
								<div class="col-md-2">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div id="map-container" style="min-height: 500px;"></div>
						</div>
					</div>
				</div>
			</div>

		</section>

<?php } else{}; ?>


<?php if (is_page('search')) { ?>

		<!-- pagecontent (Search Page) -->

		<section>
			<div class="content">
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
		
		<a href="http://www.wfinancial.dev/loan-programs/#d">link</a>

		<!-- pagecontent (accordians Page) -->

		<section>
			<div class="content">
				<div class="container">
					<div class="row">
    
					    <div class="col-md-12">
					          	
					      <!-- tabs left -->
					      <div class="tabbable">
					        <ul class="nav nav-tabs nav-justified">
					          <li><a href="#a" data-toggle="tab">Loan Programs</a></li>
					          <li class="active"><a href="#b" data-toggle="tab">Terms and Rates</a></li>
					          <li><a href="#c" data-toggle="tab">Loan Criteria</a></li>
					          <li><a href="#d" data-toggle="tab">Loan Products</a></li>
					        </ul>
					        <div class="tab-content">
					         <div class="tab-pane fade in active" id="a">
					         	<h1>Loan Terms and Rates</h1>

								<?php if(have_rows('loan_terms_and_rates')):?>


									<?php while( have_rows('loan_terms_and_rates') ): the_row(); 

									$heading = get_sub_field('heading');
									$body = get_sub_field('body');

									?>
									<?php echo $heading ?>
									<?php echo $body ?>

									<?php endwhile; ?>

									<?php else: ?>

									<h1>There are no FAQs.</h1>

									<?php endif; ?>

					         </div>
					         <div class="tab-pane fade" id="b">
					         	<h1>Loan Criteria</h1>
								<?php echo get_field('loan_criteria'); ?>
								<h1>Loan Products</h1>
								<?php echo get_field('loan_products'); ?>

					         </div>
					         <div class="tab-pane fade" id="c">
					         	<h1>Loan Products</h1>
								<?php echo get_field('loan_products'); ?>

					         </div>
					         <div class="tab-pane fade" id="d">
					         	<h1>Loan Programs</h1>
					         	<p>W Financial commercial mortgage bridge loans are designed to help the Borrower accomplish immediate real estate goals and then, depending upon the borrower’s business plan, to exit the bridge loan either upon the sale of the property or by refinancing the bridge loan with an inexpensive bank loan. Our affiliate, Winter & Company specializes in arranging such conventional financing. As a provider of bridge loans for investment, income-producing and owner-occupied real estate, W Financial will help you or your client execute a viable business plan and exit strategy. Vacant/distressed property with a value-added business plan will also be considered.</p>
					         </div>
					        </div>
					      </div>
					      <!-- /tabs -->
					    
					  </div><!-- /row -->

					 


					<div class="row">
						<div class="col-md-2">
							<div class="list-group">
							  <a href="#a" class="list-group-item" data-toggle="tab">Loan Programs</a>
							  <a href="#b" class="list-group-item" data-toggle="tab">Terms and Rates</a>
							  <a href="#c" class="list-group-item" data-toggle="tab">Loan Criteria</a>
							  <a href="#d" class="list-group-item" data-toggle="tab">Loan Products</a>
							</div>
							
							<ul class="nav nav-pills nav-stacked">
							  <li class="nav-item">
							    <a class="nav-link active" href="#a" data-toggle="tab">Loan Programs</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#b" data-toggle="tab">Terms and Rates</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#c" data-toggle="tab">Loan Criteria</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#d" data-toggle="tab">Loan Products</a>
							  </li>
							</ul>
						</div>
						<div class="col-md-push-1 col-md-9">
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

		<section>
			<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<h1>Loan Terms and Rates</h1>

						<?php if(have_rows('loan_terms_and_rates')):?>


							<?php while( have_rows('loan_terms_and_rates') ): the_row(); 

							$heading = get_sub_field('heading');
							$body = get_sub_field('body');

							?>
							<?php echo $heading ?>
							<?php echo $body ?>

							<?php endwhile; ?>

							<?php else: ?>

							<h1>There are no FAQs.</h1>

							<?php endif; ?>

					</div>
				</div>
			</div>
			</div>
		</section>

		<section>
			<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Loan Criteria</h1>
						<?php echo get_field('loan_criteria'); ?>
						<h1>Loan Products</h1>
						<?php echo get_field('loan_products'); ?>
					</div>
				</div>
			</div>
			</div>
		</section>

		<!-- /pagecontent (accordians page) -->

<?php } else{}; ?>


<?php if (is_page('faq')) { ?>

		<!-- pagecontent (accordians Page) -->

		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!--
							<?php //if(have_rows('faqs')):?>

							<?php //$counter = 0; ?>

							<?php //while( have_rows('faqs') ): the_row(); 

							//$question = get_sub_field('question');
							//$answer = get_sub_field('answer');

							?>

							<div class="accordion" id="accordion">
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php //echo $counter ?>">
											<?php //echo $question ?>
										</a>
									</div>
									<div id="<?php //echo $counter ?>" class="accordion-body collapse">
										<div class="accordion-inner">
											<?php //echo $answer ?>
										</div>
									</div>
								</div>
							</div>

							<?php //$counter++; ?>

							<?php //endwhile; ?>

							<?php //else: ?>

							<h1>There are no FAQs.</h1>

							<?php //endif; ?>
							
							-->

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


<!--

							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingOne">
							      <h4 class="panel-title">
							        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							          Collapsible Group Item #1
							        </a>
							      </h4>
							    </div>
							    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							      <div class="panel-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingTwo">
							      <h4 class="panel-title">
							        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							          Collapsible Group Item #2
							        </a>
							      </h4>
							    </div>
							    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							      <div class="panel-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingThree">
							      <h4 class="panel-title">
							        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							          Collapsible Group Item #3
							        </a>
							      </h4>
							    </div>
							    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							      <div class="panel-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							      </div>
							    </div>
							  </div>
							</div>
-->
						</div>
					</div class="row">
				</div>
			</div>
		</section>


		<!-- /pagecontent (accordians page) -->


<?php } else{}; ?>

<?php if (is_page('glossary')) { ?>

		<section>
			<div class="content">
				<div class="container">
					


					<div class="row">
						<div class="col-md-12">
							<div class="text-center">
								<div class="btn-group glossary">
								
									<?php $letters = range('a','z'); ?>

									<?php foreach ($letters as $i) { ?>
									<?php $iup = strtoupper($i); ?>
  								
  									<a data-scroll href="#<?php echo $i ?>" class="btn btn-default"><?php echo $iup ?></a>
								
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						


						<?php foreach ($letters as $i) { ?>
						<?php $iup = strtoupper($i); ?>
						<h1 id="<?php echo $i ?>"><?php echo $iup ?></h1>
						<?php if(have_rows('glossary-'.$i)):?>
						<?php while( have_rows('glossary-'.$i) ): the_row(); 
							$term = get_sub_field('term');
							$definition = get_sub_field('definition');
						?>

						<div class="col-md-3">
							<h3><?php echo $iup; ?></h3>
						</div>

						<div class="col-md-9">
						<h3><?php echo $term; ?></h3>
						<p><?php echo $definition; ?></p>

						<?php endwhile; ?>
						<?php else: ?>
						<h3>None</h3>
						<?php endif; ?>
						<?php } ?>

					</div>
				</div>
			</div>
		</section>

<?php } else{}; ?>





<?php if (is_page('forms')) { ?>


		<section>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<h1>
								Checklist
							</h1>
							<h1>Property Info</h1>
							<?php if(have_rows('property_info')):?>
							<?php while( have_rows('property_info') ): the_row(); 
							$heading = get_sub_field('heading');
							$body = get_sub_field('body');
							?>
							<?php echo $heading ?>
							<?php echo $body ?>
							<?php endwhile; ?>
							<?php else: ?>
							<h1>There are no Items.</h1>
							<?php endif; ?>
							
							<h1>Borrower Info</h1>
							<?php if(have_rows('borrower_info')):?>
							<?php while( have_rows('borrower_info') ): the_row(); 
							$heading = get_sub_field('heading');
							$body = get_sub_field('body');
							?>
							<?php echo $heading ?>
							<?php echo $body ?>
							<?php endwhile; ?>
							<?php else: ?>
							<h1>There are no Items.</h1>
							<?php endif; ?>



						</div>
					</div>
				</div>
			</div>
		</section>


<?php } else{}; ?>


		<section>
			<div class="content">
			<div class="container">	
				<div class="row">
					<div class="col-md-push-3 col-md-6">
							<!--<h1><?php the_title(); ?></h1>-->

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
					</div>
				</div>
			</div>
			</div>
		</section>
	




	</main>

	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
  
    <script>	

    function init_map() {
        var myOptions = {
            zoom: 15,
            center: new google.maps.LatLng(40.74615379999999, -73.98364019999997),
            draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scaleControl: false,
            navigationControl: false,
    		mapTypeControl: false,
    		scrollwheel: false, 
    		disableDoubleClickZoom: true,
        };
        map = new google.maps.Map(document.getElementById('map-container'), myOptions);
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(40.74615379999999, -73.98364019999997)
        });
        infowindow = new google.maps.InfoWindow({
            content: '<strong>W Financial</strong><br>149 Madison Avenue, Suite 701<br>10016 New York City<br>'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);

    </script>

<?php get_footer(); ?>
