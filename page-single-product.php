<?php
/**
 * The main template file
 * @link
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */

get_header();?>

<?php

//loop
while( have_posts() ) : the_post(); ?>

<body>
    <!-- Content -->
    <div class=container>
        <!-- Product -->
        <div class="row">
            <div class="col-md-6 mb-2"> 
                <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="img-fluid border-image-radius" alt="...">
            </div>
                <div class="col-md-6"> 
                    <h1 class="single_prod_title">Products Name</h1>
                    <h4 class="single-prod-price my-4">$199.99</h4>
                        <h5 class="single-prod-section-title">Styles:</h5>
                        <div class="row">
                            <div class="d-flex flex-wrap">
                                <!-- TODO: REVISAR QUE LAS NUEVAS CLASES SE ESTÉN PROCESANDO EN WORDPRESS -->
                                <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="small-product-image mx-1" alt="...">
                                <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="small-product-image mx-1" alt="...">
                                <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="small-product-image mx-1" alt="...">
                            </div>
                            <div class="position-relative my-3">
                                <input class="single-prod-quantity-input" type="number" name="" id="" value="1" min="1">
                            </div>
                            
                        </div>
                        <p class="single-prod-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p class="single-prod-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="position-relative my-5">
                            <button type="button" class="btn-buy-products button-rounded-filled-large text-center position-absolute top-0 start-50 translate-middle">Buy Now</button>
                        </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <h1 class="single_prod_title">Related products</h1>
            <!--Products Section -->
            <div class="row p-3 ">
                <div class="col-lg-12">
                    <!--Products Title -->
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <!-- Product Card -->
                        <div class="col">
                            <div class="card-v2 pb-4">
                                <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="card-img-top border-card-image-radius" alt="...">
                                <div class="d-flex flex-column pt-2">
                                    <p class="card-info-text-v2 mx-3">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <div class="d-flex mx-auto">
                                        <button type="button" class="btn-buy-products button-rounded-filledv2">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card -->
                        <!-- Product Card -->
                        <div class="col">
                            <div class="card-v2 pb-4">
                                <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="card-img-top border-card-image-radius" alt="...">
                                <div class="d-flex flex-column pt-2">
                                    <p class="card-info-text-v2 mx-3">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <div class="d-flex mx-auto">
                                        <button type="button" class="btn-buy-products button-rounded-filledv2">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card -->
                        <!-- Product Card -->
                        <div class="col">
                            <div class="card-v2 pb-4">
                                <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="card-img-top border-card-image-radius" alt="...">
                                <div class="d-flex flex-column pt-2">
                                    <p class="card-info-text-v2 mx-3">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <div class="d-flex mx-auto">
                                        <button type="button" class="btn-buy-products button-rounded-filledv2">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card -->
                    </div>
                </div>
            </div>

        </div>
        
        
    </div>


    <?php endwhile; ?>
</body>

<?php
    get_footer();
?>