<?php
/**
 * The main template file
 * @link https://localhost/wordpress/?page_id=8
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
        <!-- Landing Image Section -->
        <div class="container">

            <div class="row prod_main_titles">
                <h1 class="prod_elements prod_title">Products</h1>
            </div>
    
            <div class="row mt-5 prod_main_content hm_boder-radius-section" >
                <div class="row">
                    <!-- Special offers Title -->
                    <div class="prod_containerHeader">
                        <h1 class="prod_elements prod_subtitle">Special offers</h1>
                    </div>
                </div>
            </div>
        </div>

         <!--Products Section -->
        <div class="row p-3 mt-3">
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

        <div class="container">
            <div class="row mt-5 prod_main_content hm_boder-radius-section" >
                <div class="row">
                    <!-- Special offers Title -->
                    <div class="prod_containerHeader">
                        <h1 class="prod_elements prod_subtitle">New products</h1>
                    </div>
                </div>
            </div>
        </div>

        <!---------------------------------------------------------------Cards new products section------------------------------------------------------------------>

        <div class="row p-3 mt-3">
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

<?php endwhile; ?>
</body>

<?php
    get_footer();
?>