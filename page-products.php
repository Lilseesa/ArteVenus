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
                <?php echo do_shortcode( '[sale_products columns=3 limit=3]' )?> 
            </div>
        </div>

        <div class="container">
            <div class="row mt-5 prod_main_content hm_boder-radius-section" >
                <div class="row">
                    <!-- Special offers Title -->
                    <div class="prod_containerHeader">
                        <h1 class="prod_elements prod_subtitle">All products</h1>
                    </div>
                </div>
            </div>
        </div>

        <!---------------------------------------------------------------Cards new products section------------------------------------------------------------------>

        <div class="row p-3 mt-3">
            <div class="col-lg-12">
                <?php echo do_shortcode( '[products columns=3 limit=6]' )?>
            </div>
        </div>
        
    </div>

<?php endwhile; ?>
</body>

<?php
    get_footer();
?>