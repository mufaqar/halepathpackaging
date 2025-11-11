<?php
/* Template Name: Checkout */
get_header();

 $qty = $_GET['quantity'];
 $total =   $qty * esc_attr($_GET['price']);

      
?>

<!-- breadcrumb area -->
<div class="basic-breadcrumb-area bg-opacity bg-1 ptb-100">
    <div class="container">
        <div class="basic-breadcrumb text-center">
            <h3 class=""><?php the_title();?></h3>
            <ol class="breadcrumb text-xs">
                <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
            </ol>
        </div>
    </div>
</div>

<div class="container">
    <div class="checkout-container">
        <!-- Hidden fields to receive box data -->
        <input type="hidden" id="dimension" name="dimension" value="<?php echo esc_attr($_GET['dimension']); ?>">
        <input type="hidden" id="boxStock" name="box_stock" value="<?php echo esc_attr($_GET['box_stock']); ?>">
        <input type="hidden" id="quantity" name="quantity" value="<?php echo esc_attr($_GET['quantity']); ?>">
        <input type="hidden" id="printing" name="printing" value="<?php echo esc_attr($_GET['printing']); ?>">
        <input type="hidden" id="price" name="price" value="<?php echo esc_attr($_GET['price']); ?>">
         <input type="hidden" id="total" name="total" value="<?php echo $total ?>">


       



        <!-- Order Summary Section -->

        <div class="row">
            <div class="order-summary col-md-4">
                <h2 class="section-title">Order Summary</h2>
                <div class="row">
                    <div class="col-md-12">
                        <p><strong>Product Name:</strong> <?php echo esc_html($_GET['box_stock']); ?></p>
                        <p><strong>Dimensions:</strong> <?php echo esc_html($_GET['dimension']); ?></p>
                        <p><strong>Material:</strong> Rigid</p>

                        <p><strong>Quantity:</strong> <?php echo esc_html($_GET['quantity']); ?></p>
                        <p><strong>Printing:</strong> <?php echo esc_html($_GET['printing']); ?></p>
                        <p class="order-total">Total: <?php echo $total ?></p>
                    </div>
                </div>
            </div>

            <!-- Shipping Details Section -->
            <div class="shipping-details col-md-8">
                <h2 class="section-title">Shipping Details</h2>

                <!-- AJAX response container -->
                <div id="checkoutMsg"></div>

                <form id="checkoutFormData">
                    <div class="form-group">
                        <label for="recipientName">Recipient Name</label>
                        <input type="text" class="form-control" id="recipientName" placeholder="Enter recipient name"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="streetAddress">Street Address</label>
                        <input type="text" class="form-control" id="streetAddress" placeholder="Enter street address"
                            required>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" placeholder="Enter city" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" class="form-control" id="state" placeholder="Enter state" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="zipCode">ZIP Code</label>
                                <input type="text" class="form-control" id="zipCode" placeholder="Enter ZIP code"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="additionalInfo">Additional Information</label>
                        <textarea class="form-control" id="additionalInfo" rows="3"
                            placeholder="Enter any additional information"></textarea>
                    </div>

                    <button type="submit" class="btn btn-checkout">Proceed to Checkout</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>
jQuery(document).ready(function($) {
    $('#checkoutFormData').on('submit', function(e) {
        e.preventDefault();

        var formData = {
            action: 'send_order_email',
            dimension: $('#dimension').val(),
            price: $('#total').val(),
            boxStock: $('#boxStock').val(),
            quantity: $('#quantity').val(),
            printing: $('#printing').val(),
            recipientName: $('#recipientName').val(),
            phoneNumber: $('#phoneNumber').val(),
            streetAddress: $('#streetAddress').val(),
            city: $('#city').val(),
            state: $('#state').val(),
            zipCode: $('#zipCode').val(),
            additionalInfo: $('#additionalInfo').val(),
        };

        $('#checkoutMsg').html('<div class="alert alert-info">Sending order...</div>');

        $.post('<?php echo admin_url("admin-ajax.php"); ?>', formData, function(response) {
            $('#checkoutMsg').html('<div class="alert alert-success">' + response + '</div>');
            $('#checkoutFormData')[0].reset();
        }).fail(function() {
            $('#checkoutMsg').html(
                '<div class="alert alert-danger">Error sending email. Please try again.</div>'
            );
        });
    });
});
</script>