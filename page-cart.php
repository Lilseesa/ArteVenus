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
        <?php echo do_shortcode( '[woocommerce_cart]' )?>
    </div>


    <?php endwhile; ?>
</body>

<?php
    get_footer();
?>