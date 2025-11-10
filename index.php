<?php get_header();?>
		<!-- slider-area start -->
		<div class="slider-area">
			<div class="slider-active owl-carousel">
			     <?php $args = array(
                'posts_per_page'   => -1,
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_type'        => 'home-banners',
                'post_status'      => 'publish',
                'suppress_filters' => true
            );
            $banners = get_posts( $args );
            foreach ($banners as $banner){
                $burl =  get_the_post_thumbnail_url($banner->ID);
                ?>
				<div class="single-silder height-100 hero-slide vh-100" style="background-image: url('')">
				<img src="<?php echo $burl;?>" alt="<?php echo $banner->post_title;?>" />
					<!--<div class="container">
						<div class="display-table">
							<div class="table-cell">
								<div class="slider-text slider-pos text-animation">
									<h2>Get your free Health treatment</h2>
									<p>It has survived not only five centuries, but also the leap <br /> into electronic typesetting, remaining</p>
									<a class="btn" href="#">Learn More</a>
									<a class="btn btn-black" href="#">Appointment</a>
								</div>							
							</div>
						</div>					
					</div>-->
				</div>
				   <?php }?>

			</div>
		</div>
		<!-- slider-area end -->
		
		<div class="about-area pt-60 pb-30">
			<div class="container">
				<div class="area-title text-center">
					<h2>WHY <span> <?php echo get_field('company-name','options')?>?</span></h2>
					<p><?php echo get_field('why_choose_us','options')?></p>
				</div>
				<!--div class="row">
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							
							<i class="fal fa-hands-usd"></i>
							<h3><?php echo get_field('option_1','options')?></h3>
							
						</div>
					</div>
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							<i class="fal fa-dollar-sign"></i>
							<h3><?php echo get_field('option_1','options')?></h3>
							
						</div>
					</div>
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							<i class="far fa-shipping-fast"></i>
							<h3><?php echo get_field('option_2','options')?></h3>
							
						</div>
					</div>
					
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							<i class="far fa-file-certificate"></i>
							<h3><?php echo get_field('option_3','options')?></h3>
							
						</div>
					</div>
					
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							<i class="far fa-ruler-triangle"></i>
							<h3><?php echo get_field('option_4','options')?></h3>
							
						</div>
					</div>
					
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							<i class="far fa-file-signature"></i>
							<h3><?php echo get_field('option_5','options')?></h3>
							
						</div>
					</div>
				</div-->
				<div class="row">
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							
							<img src="<?php echo THEME_DIR;?>/img/icons/No-die-&-plate-charge.png" alt="<?php echo get_field('option_1','options')?>">
							<h3><?php echo get_field('option_1','options')?></h3>
							
						</div>
					</div>
					
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							<img src="<?php echo THEME_DIR;?>/img/icons/High-quality-offset-printing.png" alt="<?php echo get_field('option_2','options')?>">
							<h3><?php echo get_field('option_2','options')?></h3>
							
						</div>
					</div>
					
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							<img src="<?php echo THEME_DIR;?>/img/icons/15-business-day-turnaround.png" alt="<?php echo get_field('option_3','options')?>">
							<h3><?php echo get_field('option_3','options')?></h3>
							
						</div>
					</div>
					
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							<img src="<?php echo THEME_DIR;?>/img/icons/Starting-from-100-boxes.png" alt="<?php echo get_field('option_4','options')?>">
							<h3><?php echo get_field('option_4','options')?></h3>
							
						</div>
					</div>
					
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							<img src="<?php echo THEME_DIR;?>/img/icons/Custom-Sizes-&-Style.png" alt="<?php echo get_field('option_5','options')?>">
							<h3><?php echo get_field('option_5','options')?></h3>
							
						</div>
					</div>
					<div class="col-md-2 col-sm-6 mb-30 pl-0 pr-0">
						<div class="features-box border-box text-center">
							<img src="<?php echo THEME_DIR;?>/img/icons/Competitive-Pricing.png" alt="<?php echo get_field('option_6','options')?>">
							<h3><?php echo get_field('option_6','options')?></h3>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
	
		<!-- team-area start -->
		<div class="team-area pt-60 pb-60 ">
			<div class="container">
				<div class="area-title text-center">
					<h2><?php echo get_field('categories_boxe_heading','options')?></h2>
					<p><?php echo get_field('categories_boxe_sub_heading','options')?></p>
				</div>			
				
				
		<!-- 1 Category-area start -->
	
				<div class="row">
				   <?php  if( have_rows('categories_boxes', 'options' )):
                                    // loop through the rows of data
                                    while ( have_rows('categories_boxes', 'options') ) : the_row();?>
				<div class="col-sm-6 col-md-4">
						<div class="team-item">
						<a href="<?php the_sub_field('categories_box_link') ?>">
							<div class="team-item-image">
								<img src="<?php the_sub_field('categories_box_image') ?>" alt="<?php the_sub_field('categories_box_name') ?>">
								<div class="team-item-detail">
								<img class="hover-image" src="<?php the_sub_field('categories_box_image_2') ?>" alt="<?php the_sub_field('categories_box_name') ?>">
									
								</div>
							</div>
							</a>
							
						
							
	
							
							<div class="badges-wrapper"><span class="badge badge-sale"> <?php the_sub_field('sale_label') ?></span></div>
							<div class="team-info">
								<h4 class="team-item-name"><a href="<?php the_sub_field('categories_box_link') ?>"><?php the_sub_field('categories_box_name') ?></a></h4>
								<span class="team-item-role"><?php the_sub_field('categories_box_sub_heading') ?></span>
										
							</div>
						</div>
					</div>
				
				
				                         <?php endwhile; ?>
<?php else:
echo 'No categories found';
endif; ?>
				
				

				</div>

			</div>
		</div>
		<!-- team-area end -->
		
			<!-- department-area start -->
		<div class="department-area theme-bg pt-90 pb-50">
			<div class="container">
				<div class="area-title text-center text-white">
					<h2><?php echo get_field('order_heading','options')?></h2>
					<p><?php echo get_field('order_sub_heading','options')?></p>
				</div>			
				<div class="row">
					<div class="col-md-4 col-sm-4 mb-40">
						<div class="department-box text-center">
							<div class="icon-box">
								<i class="fal fa-boxes"></i>
							</div>
							<div class="dep-text">
								<h3><?php echo get_field('order_option_heading1','options')?></h3>
								<p><?php echo get_field('order_option_detail_1','options')?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 mb-40">
						<div class="department-box text-center">
							<div class="icon-box">
								<i class="fal fa-box-open"></i>
							</div>
							<div class="dep-text">
								<h3><?php echo get_field('order_option_heading_2','options')?></h3>
								<p><?php echo get_field('order_option_detail_2','options')?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 mb-40">
						<div class="department-box text-center">
							<div class="icon-box">
								<i class="fad fa-file-signature"></i>
							</div>
							<div class="dep-text">
								<h3><?php echo get_field('order_option_heading_3','options')?></h3>
								<p><?php echo get_field('order_option_detail_3','options')?></p>
							</div>
						</div>
					</div>
		
				</div>
			</div>
		</div>
		<!-- department-area end -->
		<!-- Box 1 start -->
		<div class="appointment-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6  no-gutter">
						<div >
							<img src="<?php echo get_field('large_box_image_1','options')?>" class="img-responsive" alt="<?php echo get_field('large_box_heading_1','options')?>">
						</div>
					</div>
					<div class="col-sm-6  no-gutter">
						<div class="quick-appointment-form">
							<h3><?php echo get_field('large_box_heading_1','options')?></h3>
							<p class=""><?php echo get_field('large_box_detail_1','options')?>
							<br/><br/>
							
							 </p>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<!-- Box 1 end -->
		
			<!-- Box 2 start -->
		<div class="appointment-area">
			<div class="container-fluid">
				<div class="row">
				<div class="col-sm-6  no-gutter">
						<div class="quick-appointment-form">
							<h3><?php echo get_field('large_box_heading_2','options')?></h3>
							<p class=""><?php echo get_field('large_box_detail_2','options')?>
							
							 </p>
						</div>
					</div>
					<div class="col-sm-6  no-gutter">
						<div class="">
							<img src="<?php echo get_field('large_box_image_2','options')?>" class="img-responsive" alt="<?php echo get_field('large_box_heading_2','options')?>">
						</div>
					</div>
					
				</div>
			</div>
		</div>		
		<!-- Box 2 end -->
		
	
		
			<!-- features-area start -->
		<div class="features-area ptb-90">
			<div class="container">
				<div class="area-title text-center">
					<h2><?php echo get_field('make_our_process_step_heading','options')?> </h2>
					<p><?php echo get_field('make_our_process_step_detail','options')?> </p>
				</div>			
				<div class="row">
				  <?php  if( have_rows('make_our_process', 'options' )):
                                    // loop through the rows of data
                                    while ( have_rows('make_our_process', 'options') ) : the_row();?>
				<div class="col-md-5ths col-xs-6 mb-30">
				
						<div class="process-item text-center">
							<div class="process-item-icon">
<img src="<?php the_sub_field('process_icon') ?>" class="img-responsive" alt="<?php the_sub_field('process_name') ?>">
								
							</div>
							<div class="process-item-content">
								<span class="process-item-number"><?php the_sub_field('process_no') ?></span>
								<h3 class="process-item-title"><?php the_sub_field('process_name') ?></h3>
								<p><?php the_sub_field('process_detail') ?></p>
							</div>
						</div>
					</div>
					                         <?php endwhile; ?>
<?php else:
echo 'No Process Found';
endif; ?>
				
			</div>
		</div>
		<!-- features-area end -->
			</div>
			
			<!-- Mian Img-area start -->
		<div class="post-preview">
								<a href="#"><img src="<?php echo get_field('full_banner_image','options')?>" alt="Hale Path Packaging"></a>
						
							</div>
							
		
		<!-- Mian Img-area end -->
	<!-- basic-testimonial-area start -->
		<div class="basic-testimonial-area gray-bg pt-90 pb-60">
			<div class="container">
				<div class="area-title text-center">
					<h2>CUSTOMER REVIEW</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci.</p>
				</div>			
				<div class="row">
					<div class="testimonial-active owl-carousel">
						 <?php  if( have_rows('client_testimonials', 'options' )):
                                    // loop through the rows of data
                                    while ( have_rows('client_testimonials', 'options') ) : the_row();?>
						<div class="col-md-12 mb-30">
							<div class="testimonial-box">
								<blockquote><?php the_sub_field('client_review') ?>
									<span class="fa fa-quote-right"></span>
								</blockquote>
								<div class="testimonial-content">
									<h6 class="testimonial-name"><?php the_sub_field('client_name') ?></h6>
									<span class="testimonial-pos"><?php the_sub_field('job_title') ?></span>
								</div>							
							</div>
						</div>
						
						                         <?php endwhile; ?>
<?php else:
echo 'No client testimonials found';
endif; ?>
					</div>	
				</div>
			</div>
		</div>
		<!-- basic-testimonial-area end -->	
			<div class="team-area pt-90 pb-60 ">
			<div class="container-fluid">			
				<div class="row">
				<?php $args = array(
    'posts_per_page'   => 12,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'instagram-updates',
    'post_status'      => 'publish',
    'suppress_filters' => true
);
$instagram = get_posts( $args );
foreach ($instagram as $news){
    $burl =  get_the_post_thumbnail_url($news->ID);
    ?>
					<div class="col-sm-6 col-md-3 pl-0 pr-0">
						<div class="insta-item">
							<div class="insta-item-image">
								<img src="<?php echo $burl;?>" alt="<?php echo $news->post_title;?>">
								<div class="insta-item-detail">
									<?php /*?><h5 class="insta-item-title"><?php echo $news->post_title;?></h5>
									<p><?php echo substr( wp_strip_all_tags($news->post_content) ,0 , 238)?>...</p><?php */?>
									<div class="insta-social-icon">
										<a href="<?php echo get_field('instagram-link',$news->ID);?>"  target="_blank"><i class="ion-social-instagram"></i></a>
									
									</div>
								</div>
							</div>
							
						</div>
					</div>
			
			 <?php }?>
				</div>
			</div>
		</div>
	
<?php get_footer();?>
		