<?php  /* Template name: About us */  get_header();
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
       

        <!-- About Us Area Start Here -->
        <div class="service-details-area pt-90">
			<div class="container">
				<div class="service-details-info">
				
					<p>  <?php the_content();?> </p>
				</div>
			</div>
		</div>
       
       <!-- clients-area start -->
		<div class="clients-area ptb-40">
			<div class="container">
			<h2 class="text-center">Our Successful Clients</h2>
				<div class="row">
					<div class="clients-active owl-carousel">
					<?php $args = array(
    'posts_per_page'   => 10,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'clients-updates',
    'post_status'      => 'publish',
    'suppress_filters' => true
);
$clients = get_posts( $args );
foreach ($clients as $client){
    $burl =  get_the_post_thumbnail_url($client->ID);
    ?>
						<div class="col-sm-12">
							<div class="basic-clients">
								<a href="#"><img src="<?php echo $burl;?>" alt="<?php echo $news->post_title;?>" /></a>
							</div>
						</div>
		<?php }?>
					</div>
				</div>
			</div>
		</div>
		<!-- clients-area end -->
        
        
        
     
      <?php } get_footer();?>