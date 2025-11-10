<?php get_header(); $getcategory = get_the_category( $post_id ); ?>

	<!-- breadcrumb area -->
		<div class="basic-breadcrumb-area bg-opacity bg-1 ptb-350">
			<div class="container">
				<div class="basic-breadcrumb text-center">
					<h3 class=""><?php the_title();?></h3>
					<ol class="breadcrumb text-xs">
						<?php /*?><li><a href="index.html">Home</a></li>
						<li><a href="#">Product</a></li>
						<li class="active">Product</li><?php */?>
						  <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
					</ol>
				</div>
			</div>
		</div>	
		<!-- breadcrumb area -->		
<!-- product-area start -->
		<div class="product-area pt-90 pb-60">
			<div class="container">
				<div class="row mb-60">
					<div class="col-md-12 col-sm-12">
						<div class="found">
							<p><?php echo  $getcategory[0]->description; ?></p>
						</div>
					</div>
					
				</div>
				<div class="row">
				 <?php if ( have_posts() ): while ( have_posts() ) : the_post();
					  $burl =  get_the_post_thumbnail_url($post->ID , 'medium');
						$burl2 = get_field('feature_image_2',$post->ID);
							if ($burl2 == '') { $burl2 = $burl;   }
					?>
					<div class="col-md-3 col-sm-4 mb-30">
						<div class="product-box">
							<div class="product-img">
							<a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
							 <img src="<?php echo $burl;?>" alt="<?php echo $post->post_title;?>" />
							
								<div class="sale-tag">
									<span><?php echo get_field('products_sale_label','options')?></span>
								</div>
								<div class="action-box">
								 <img class="hover-image" src="<?php echo $burl2;?>" alt="<?php echo $post->post_title;?>" />
									
									
								</div>
								</a>
							</div>
							<div class="product-content text-center">
								<h3 class="product-title"><a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
								<?php /*?><div class="product-price">
									<span>Hale</span>
									
								</div><?php */?>
							</div>
						</div>
					</div>
					
<?php endwhile;
else :
  // No, we don't have any posts, so maybe we display a nice message

  echo "<p class='bg-danger xmsgred'>" . __( "Sorry, there are no products at this time." ) . "</p>";
endif;

?>
			
				</div>
				<div class="paginginfo">
<div class="col-md-12 mtb-8"> <?php wp_pagenavi(); ?></div>

</div>
			</div>
		</div>
		<!-- product-area end -->








<?php get_footer();?>