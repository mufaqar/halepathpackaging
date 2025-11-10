<?php get_header();  ?>
<!-- breadcrumb area -->
<div class="basic-breadcrumb-area bg-opacity bg-1 ptb-100">
    <div class="container">
        <div class="basic-breadcrumb text-center">
            <h3 class=""><?php the_title();?></h3>
            <ol class="breadcrumb text-xs">
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
<?php while(have_posts()){ the_post(); $burl =  get_the_post_thumbnail_url($post->ID);?>
<div class="product-area divider-bottom ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="large-product">
                    <!-- Nav tabs -->
                    <ul class="large-product-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                data-toggle="tab"><img src="<?php echo $burl;?>" alt="<?php the_title();?>" /></a></li>
                        <?php if(get_field('feature_image_2')){?>
                        <li role="presentation"><a href="#1" aria-controls="1" role="tab" data-toggle="tab"><img
                                    src="<?php echo get_field('feature_image_2');?>" alt="<?php the_title();?>" /></a>
                        </li>
                        <?php } if(get_field('feature_image_3')){?>
                        <li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab"><img
                                    src="<?php echo get_field('feature_image_3');?>" alt="<?php the_title();?>" /></a>
                        </li>
                        <?php } if(get_field('feature_image_4')){?>
                        <li role="presentation"><a href="#3" aria-controls="3" role="tab" data-toggle="tab"><img
                                    src="<?php echo get_field('feature_image_4');?>" alt="<?php the_title();?>" /></a>
                        </li>
                        <?php } if(get_field('feature_image_5')){?>
                        <li role="presentation"><a href="#4" aria-controls="4" role="tab" data-toggle="tab"><img
                                    src="<?php echo get_field('feature_image_5');?>" alt="<?php the_title();?>" /></a>
                        </li>
                        <?php } if(get_field('feature_image_6')){?>
                        <li role="presentation"><a href="#4" aria-controls="5" role="tab" data-toggle="tab"><img
                                    src="<?php echo get_field('feature_image_6');?>" alt="<?php the_title();?>" /></a>
                        </li>
                        <?php } ?>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content large-img-content">
                        <div role="tabpanel" class="tab-pane active" id="home"><a class="popup-link"
                                href="<?php echo $burl;?>"><img src="<?php echo $burl;?>"
                                    alt="<?php the_title();?>" /></a></div>
                        <?php if(get_field('feature_image_2')){?>
                        <div role="tabpanel" class="tab-pane" id="1"><a class="popup-link"
                                href="<?php echo get_field('feature_image_2');?>"><img
                                    src="<?php echo get_field('feature_image_2');?>" alt="<?php the_title();?>" /></a>
                        </div>
                        <?php } if(get_field('feature_image_3')){?>
                        <div role="tabpanel" class="tab-pane" id="2"><a class="popup-link"
                                href="<?php echo get_field('feature_image_3');?>"><img
                                    src="<?php echo get_field('feature_image_3');?>" alt="<?php the_title();?>" /></a>
                        </div>
                        <?php } if(get_field('feature_image_4')){?>
                        <div role="tabpanel" class="tab-pane" id="3"><a class="popup-link"
                                href="<?php echo get_field('feature_image_4');?>"><img
                                    src="<?php echo get_field('feature_image_4');?>" alt="<?php the_title();?>" /></a>
                        </div>
                        <?php } if(get_field('feature_image_5')){?>
                        <div role="tabpanel" class="tab-pane" id="4"><a class="popup-link"
                                href="<?php echo get_field('feature_image_5');?>"><img
                                    src="<?php echo get_field('feature_image_5');?>" alt="<?php the_title();?>" /></a>
                        </div>
                        <?php } if(get_field('feature_image_6')){?>
                        <div role="tabpanel" class="tab-pane" id="5"><a class="popup-link"
                                href="<?php echo get_field('feature_image_6');?>"><img
                                    src="<?php echo get_field('feature_image_6');?>" alt="<?php the_title();?>" /></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="product-description mb-30">
                    <h2 class="m-b-5">Custom <?php the_title();?></h2>
                    <div class="tab_container">

                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs" role="tablist" style="margin-bottom: 0;">
                            <li role="presentation" class="active">
                                <a href="#standard" aria-controls="standard" role="tab" data-toggle="tab">Standard
                                    Sizes</a>
                            </li>
                            <li role="presentation">
                                <a href="#quote" aria-controls="quote" role="tab" data-toggle="tab">Request a Quote</a>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content"
                            style="background:#e7f0ff; padding:25px; border:1px solid #ddd; border-top:none; border-radius:0 0 8px 8px;">

                            <!-- Standard Sizes Tab -->
                            <div role="tabpanel" class="tab-pane fade in active" id="standard">
                                <h4><strong>Available Sizes for Rigid Foldable Boxes</strong></h4>
                                <p>
                                    Choose from our popular Standard Sizes for a quick, off-the-shelf solution, or
                                    request a Custom Quote for a perfect, tailored fit.
                                    Whether you need something immediately or designed specifically for your brand, we
                                    provide flexible options to meet every need and budget.
                                </p>

                                <form action="<?php echo site_url('/checkout'); ?>" method="get" id="boxSelectionForm">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Dimensions</label>
                                            <select name="dimension" class="form-control" required>
                                                <option value="5 x 4 x 1">5 x 4 x 1</option>
                                                <option value="6 x 5 x 2">6 x 5 x 2</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                            <label>Box Stock</label>
                                            <select name="box_stock" class="form-control" required>
                                                <option value="Rigid">Rigid</option>
                                                <option value="Foldable">Foldable</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                            <label>Quantity</label>
                                            <select name="quantity" class="form-control" required>
                                                <option value="100">100</option>
                                                <option value="200">200</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                            <label>Printing</label>
                                            <select name="printing" class="form-control" required>
                                                <option value="Outside only">Outside only</option>
                                                <option value="Inside & outside">Inside & outside</option>
                                            </select>
                                        </div>
                                    </div>
									 <p style="margin-top:20px; font-size:16px;">
                                    <strong>Price:</strong> $650 for 100 items
                                </p>

                                    <button type="submit" class="btn btn-primary btn-lg"
                                        style="margin-top:20px;background:#2b2d85;border:none;border-radius:50px;">
                                        Proceed to Checkout
                                    </button>
                                </form>


                               

                               

                                <!-- Icons Row -->
                                <div class="row text-center" style="margin-top:30px;">
                                    <div class="col-sm-4">
                                        <i class="fa fa-clock"></i>
                                        <p><strong>Quick</strong><br>Turnaround</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="fa fa-box"></i>
                                        <p><strong>Free</strong><br>Designing</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="fa fa-van"></i>
                                        <p><strong>Free</strong><br>Shipping</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Request a Quote Tab -->
                            <div role="tabpanel" class="tab-pane fade" id="quote">
                                <div class="product-price desc-price  mb-30"><span> Request A Quotation </span></div>
                                <?php echo do_shortcode( '[forminator_form id="859"]' ); ?>
                            </div>
                        </div>

                    </div>
                </div>





                <?php /*?> <div class="product-description mb-30">
                    <h2 class="m-b-5"><?php the_title();?></h2>
                    <span class="star-rating star-rating-4"></span>
                    <a href="#" class="text-xs">2 customer reviews</a>
                </div>
                <div class="product-price desc-price  mb-30">
                    <span>$39</span>
                    <span class="price-old">$50</span>
                </div>
                <hr>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                <p>Tags: <a href="#" rel="tag">medicine</a>, <a rel="tag" href="#">baby</a></p>
                <hr>
                <!-- PRODUCT FORM -->
                <form method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="sr-only">Quantity</label>
                                <input type="number" class="form-control" step="1" min="1" value="1">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="sr-only">Color</label>
                                <select class="form-control">
                                    <option value="blue">Blue</option>
                                    <option value="red">Red</option>
                                    <option value="green">Green</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="sr-only">Size</label>
                                <select class="form-control">
                                    <option selected="selected" disabled>Size</option>
                                    <option value="xxs">xs</option>
                                    <option value="xs">s</option>
                                    <option value="s">m</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- .row -->

                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-block btn-round btn-base">Add to cart</a>
                        </div>
                    </div><!-- .row -->
                </form> <?php */?>
            </div>
        </div>

        <div class="row mt-70">
            <div class="col-md-9 col-xs-12">

                <!-- TABS NAV-->
                <ul class="nav-text-tabs">
                    <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                    <li><a href="#data-sheet" data-toggle="tab">Product Specification</a></li>

                </ul>
                <!-- END TABS NAV-->

                <!-- TAB CONTENT -->
                <div class="tab-content">

                    <div id="description" class="tab-pane active">
                        <p><?php the_content();?></p>

                        <p>

                            To get the <strong><?php the_title();?></strong> at your doorstep Email us at
                            <strong><?php echo get_field('email','options')?></strong> or call us directly at
                            <strong><?php echo get_field('phone','options')?></strong> to get your queries processed.
                            Our customer support representative is available 24/7 to assist you.
                        </p>
                    </div>

                    <div id="data-sheet" class="tab-pane">
                        <table class="table table-striped">
                            <tbody>
                                <!--	<tr>
											<th>Name</th>
											<th>Value</th>
										</tr>-->
                                <?php  if( have_rows('product_specification', '' )):
                                    // loop through the rows of data
                                    while ( have_rows('product_specification', '') ) : the_row();?>
                                <tr>
                                    <td><strong><?php the_sub_field('specification_name') ?></strong></td>
                                    <td><?php the_sub_field('specification_detail') ?></td>
                                </tr>
                                <?php endwhile; ?>
                                <?php else:
echo 'No Specification found';
endif; ?>

                            </tbody>
                        </table>
                    </div>



                </div>
                <!-- END TAB CONTENT -->

            </div>

            <div class="col-md-3 col-xs-12 pt-10">

                <div class="widget">
                    <h6 class="text-uppercase widget-title">Why Choose Us ? </h6>
                    <p>We are built on the core values of Customer Centrism, Precision Designs and the Passion to
                        provide Personalized Packaging solutions for all. </p>
                    <ul class="list-styled">
                        <li>More than 10 years experience</li>
                        <li>Free Quote</li>
                        <li>Free Consultancy</li>
                        <li>Risk-Free Transaction</li>
                        <li>Free Design Support</li>
                        <li>Fast Shipping (Right at your doorstep)</li>
                    </ul>
                </div>


            </div>
        </div><!-- .row -->
    </div>
</div>
<!-- product-area end -->
<?php } ?>
<!-- related products-area start -->

<div class="related-product-area pt-90 pb-60">
    <div class="container">
        <div class="area-title text-center">
            <h2>Related Products</h2>
            <p>High-Quality Material for high-Quality products</p>
        </div>
        <div class="row">
            <?php $args = array(
        'posts_per_page'   => 8,
        'post__not_in'        => array($post->ID),
        'orderby'          => 'rand',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'suppress_filters' => true
    );
    $recents = get_posts( $args );
    foreach ($recents as $recent){
        $burl =  get_the_post_thumbnail_url($recent->ID);
		$burl2 = get_field('feature_image_2',$recent->ID);
							if ($burl2 == '') { $burl2 = $burl;   }
        ?>
            <div class="col-md-3 col-sm-4 mb-30">
                <div class="product-box">
                    <div class="product-img">
                        <a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
                            <img src="<?php echo $burl;?>" alt="<?php echo $recent->post_title;?>" />

                            <div class="sale-tag">
                                <span><?php echo get_field('products_sale_label','options')?></span>
                            </div>
                            <div class="action-box">
                                <img class="hover-image" src="<?php echo $burl2;?>"
                                    alt="<?php echo $recent->post_title;?>" />


                            </div>
                        </a>
                    </div>
                    <div class="product-content text-center">
                        <h3 class="product-title"><a href="<?php echo the_permalink(); ?>"
                                title="<?php the_title(); ?>"><?php echo $recent->post_title;?></a></h3>
                        <?php /*?><div class="product-price">
                            <span>Hale</span>

                        </div><?php */?>
                    </div>
                </div>
            </div>
            <?php }?>

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



<?php get_footer();?>
<style type="text/css">
div.cloudzoom-zoom,
div.cloudzoom-zoom-inside {
    display: block !important;
}

div.cloudzoom-blank,
div.cloudzoom-blank div.cloudzoom-lens {
    display: none !important;
}
</style>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cloudzoom.js"></script>
<script>
CloudZoom.quickStart();
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#noticb').delay(10000).fadeOut(400);
});
</script>