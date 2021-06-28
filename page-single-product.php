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
                <h1 class="prod_subtitle">Products Name</h1>
                <h4>$199.99</h4>
                <h5>Styles</h5>
                <div class="row">
                    <!-- TODO: REVISAR QUE LAS NUEVAS CLASES SE ESTÉN PROCESANDO EN WORDPRESS -->
                    <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="small-product-image" style="max-width: 100px; max-height: 100px; object-fit: cover;" alt="...">
                    <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="small-product-image" style="max-width: 100px; max-height: 100px; object-fit: cover;" alt="...">
                    <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="small-product-image" style="max-width: 100px; max-height: 100px; object-fit: cover;" alt="...">
                </div>
            </div>
        </div>
        
    </div>


    <?php endwhile; ?>
</body>

<?php
    get_footer();
?>