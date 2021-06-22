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
            <h1 class="abt_elements abt_mainTitle subtitle">About</h1>
            <h2 class="abt_elements abt_mainSubtitle subtitle">us</h2>
        </div>

        <div class="row mt-5 abt_main_content hm_boder-radius-section" >
            <div class="row">
                <!-- About us Title -->

                <div class="abt_containerHeader">
                    <h1 class="abt_elements abt_title title">Our</h1>
                    <h2 class="abt_elements abt_subtitle title">history</h2>    
                </div>

                <div class="abt_containerText card-price-desktop">
                    <!--<?php the_content(); ?>-->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

            </div>
        </div>

        <div class="abt_secondary_content hm_boder-radius-section" >
            <div class="row">
                <!-- info -->
                <img src="<?php echo get_template_directory_uri().'/src/images/Team_Image2.png';?>" class="abt_img_holder" alt="team image">
            </div>
        </div>

    </div>

    <?php endwhile; ?>
    </body>

    <?php
        get_footer();
    ?>