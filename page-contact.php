<?php  /* Template name: Contact us */  get_header();
while (have_posts()){ the_post();?>
       
       <!-- breadcrumb area -->
		<div class="basic-breadcrumb-area bg-opacity bg-1 ptb-100">
			<div class="container">
				<div class="basic-breadcrumb text-center">
					<h3 class=""><?php the_title();?></h3>
					<ol class="breadcrumb text-xs">
						 <?php if(function_exists('bcn_display')) { bcn_display();}?>
					</ol>
				</div>
			</div>
		</div>	
		<!-- breadcrumb area -->
       
       	<!-- basic-contact-area -->
		<?php /*?><div class="basic-contact-area pt-50 pb-10">
			<div class="container">
				<div class="row multi-columns-row">
					<div class="col-sm-12 col-md-6 col-lg-6 mb-40">
						<div class="contact-person">
							<h4><strong>Office Location</strong></h4>
							
						<p><a href="#"><i class="fa fa-map-marker"></i> <?php echo get_field('address','options')?></a></p>
						<p><a href="tel:<?php echo get_field('phone','options')?>"> <i class="fa fa-phone"></i> <?php echo get_field('phone','options')?></a> </p>
							<p><a href="tel:<?php echo get_field('mobile','options')?>"> <i class="fa fa-mobile"></i> <?php echo get_field('mobile','options')?></a> </p>
							<p><a href="mailto:<?php echo get_field('email','options')?>"><i class="fa fa-envelope-o"></i> <?php echo get_field('email','options')?></a> </p>
							<p><a href="mailto:<?php echo get_field('email_2','options')?>"><i class="fa fa-envelope-o"></i> <?php echo get_field('email_2','options')?></a></p>
						</div>
					</div>

		<div class="col-sm-12 col-md-6 col-lg-6 mb-40">
			<?php echo get_field('google_map','options')?>
				</div>
					
				
				<!--	<div class="col-sm-4 col-md-4 col-lg-4 mb-40">
						<div class="contact-person">
							<h4>Enquiry Phone.</h4>
							
							
						</div>
					</div>

					<div class="col-sm-4 col-md-4 col-lg-4 mb-40">
						<div class="contact-person">
							<h4>Email Support.</h4>
							
							<a href="mailto:<?php echo get_field('email','options')?>"><i class="fa fa-envelope-o"></i> <?php echo get_field('email','options')?></a> <br>
							<a href="mailto:<?php echo get_field('email_2','options')?>"><i class="fa fa-envelope-o"></i> <?php echo get_field('email_2','options')?></a>
						</div>
					</div>-->
				</div>
			</div>
		</div><?php */?>
		<!-- basic-contact-area end -->
		
		<?php /*?><div class="map-area">
			<div class="container">
				<?php echo get_field('google_map','options')?>
			</div>
		</div><?php */?>
			<!-- other-area start -->
		<div class="service-area pt-90 pb-50">
			<div class="container">
				<div class="row">
					   <?php  if( have_rows('office_address', 'options' )):
                                    // loop through the rows of data
                                    while ( have_rows('office_address', 'options') ) : the_row();?>
					<div class="col-md-4 col-sm-6 mb-40">
						<div class="service-box">
							<?php /*?><div class="service-img">
								<a href="service-details.html"><img src="img/service/1.jpg" alt="" /></a>
							</div><?php */?>
							<div class="service-content">
								<div class="contact-person">
							<h4><strong><?php the_sub_field('office_country') ?></strong></h4>
							
						<p><a href="#"><i class="fa fa-map-marker"></i> <?php the_sub_field('office_address') ?></a></p>
						<p><a href="tel:<?php the_sub_field('office_phone') ?>"> <i class="fa fa-phone"></i> <?php the_sub_field('office_phone') ?></a> </p>
							
							<p><a href="mailto:<?php the_sub_field('office_email') ?>"><i class="fa fa-envelope-o"></i> <?php the_sub_field('office_email') ?></a> </p>
							
						</div>
							</div>
						</div>
					</div>
				 <?php endwhile; ?>
<?php else:
echo 'No Offices found';
endif; ?>
				</div>
			</div>
		</div>						
		<!-- other-area end -->
		<div class="basic-contact-form ptb-40">
			<div class="container">
				<div class="area-title text-center">
					<h2>Let’s talk</h2>
					<p>Do you want to collaborate with us? Have a suggestion or simply wish to say hello? Get in touch with us.</p>
				</div>			
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						
						 <?php the_content();?>
						<!-- Ajax response -->
					<!--	<div class="ajax-response text-center"></div>-->
					</div>
				</div>			
			</div>
		</div>						
		

        <!-- About Us Area Start Here -->
        <?php /*?><div class="service-details-area pt-90">
			<div class="container">
				<div class="service-details-info">
				
					<p>  </p>
				</div>
			</div>
		</div><?php */?>
        
        
        
     
      <?php } get_footer();?>