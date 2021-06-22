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

    <div class="container">

        <div class="row abt_main_titles">
            <h1 class="abt_elements abt_mainTitles">About</h1>
            <h2 class="abt_elements abt_mainSubtitle">us</h2>
        </div>

        <div class="row mt-5 abt_main_content hm_boder-radius-section" >
            <div class="row">
                <!-- About us Title -->

                <div class="abt_containerHeader">
                    <h1 class="abt_elements abt_title title">Our</h1>
                    <h2 class="abt_elements abt_subtitle title">history</h2>    
                </div>

                <div class="abt_containerText card-price-desktop mt-3">
                   <?php the_content(); ?>
                </div>

            </div>
        </div>

        <div class="row mt-3">
                <!-- info -->
            <img src="<?php echo get_template_directory_uri().'/src/images/Team_Image2.png';?>" class="abt_img_holder" alt="team image">
        </div>

    </div>

<?php endwhile; ?>
</body>

<?php
    get_footer();
?>