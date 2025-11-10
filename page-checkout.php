<?php
/* Template Name: Checkout */
get_header();
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

<style>
body {
    background-color: #f8f9fa;
    padding-top: 20px;
    padding-bottom: 40px;
}
.checkout-container {
    margin: 0 auto;
    background: white;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.order-summary {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 30px;
}
.section-title {
    border-bottom: 2px solid #337ab7;
    padding-bottom: 10px;
    margin-bottom: 20px;
    color: #337ab7;
}
.btn-checkout {
    background-color: #337ab7;
    color: white;
    padding: 12px 30px;
    font-size: 18px;
    border-radius: 4px;
    width: 100%;
    margin-top: 20px;
}
.btn-checkout:hover {
    background-color: #286090;
    color: white;
}
.form-group {
    margin-bottom: 20px;
}
.form-control {
    border-radius: 4px;
}
.order-total {
    font-size: 18px;
    font-weight: bold;
    color: #337ab7;
}
</style>

<div class="container">
    <div class="checkout-container">
        <h1 class="text-center">Checkout</h1>

        <!-- Hidden fields to receive box data -->
        <input type="hidden" id="dimension" name="dimension" value="<?php echo esc_attr($_GET['dimension']); ?>">
        <input type="hidden" id="boxStock" name="box_stock" value="<?php echo esc_attr($_GET['box_stock']); ?>">
        <input type="hidden" id="quantity" name="quantity" value="<?php echo esc_attr($_GET['quantity']); ?>">
        <input type="hidden" id="printing" name="printing" value="<?php echo esc_attr($_GET['printing']); ?>">

        <p><strong>Selected Box:</strong> <?php echo esc_html($_GET['dimension']); ?> (<?php echo esc_html($_GET['box_stock']); ?>)</p>
        <p><strong>Quantity:</strong> <?php echo esc_html($_GET['quantity']); ?></p>
        <p><strong>Printing:</strong> <?php echo esc_html($_GET['printing']); ?></p>

        <!-- Order Summary Section -->
        <div class="order-summary">
            <h2 class="section-title">Order Summary</h2>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Product Name:</strong> Rigid Foldable Boxes</p>
                    <p><strong>Dimensions:</strong> 5 x 4 x 1</p>
                    <p><strong>Material:</strong> Rigid</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Quantity:</strong> 250</p>
                    <p><strong>Printing:</strong> Bothside</p>
                    <p class="order-total">Total: $1255</p>
                </div>
            </div>
        </div>

        <!-- Shipping Details Section -->
        <div class="shipping-details">
            <h2 class="section-title">Shipping Details</h2>

            <div class="alert alert-info">
                <strong>Email:</strong> Use your email as your login. We'll send all receipts and tracking there.
            </div>

            <!-- AJAX response container -->
            <div id="checkoutMsg"></div>

            <form id="checkoutFormData">
                <div class="form-group">
                    <label for="recipientName">Recipient Name</label>
                    <input type="text" class="form-control" id="recipientName" placeholder="Enter recipient name" required>
                </div>

                <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
                </div>

                <div class="form-group">
                    <label for="streetAddress">Street Address</label>
                    <input type="text" class="form-control" id="streetAddress" placeholder="Enter street address" required>
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
                            <input type="text" class="form-control" id="zipCode" placeholder="Enter ZIP code" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="additionalInfo">Additional Information</label>
                    <textarea class="form-control" id="additionalInfo" rows="3" placeholder="Enter any additional information"></textarea>
                </div>

                <button type="submit" class="btn btn-checkout">Proceed to Checkout</button>
            </form>
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
            $('#checkoutMsg').html('<div class="alert alert-danger">Error sending email. Please try again.</div>');
        });
    });
});
</script>
