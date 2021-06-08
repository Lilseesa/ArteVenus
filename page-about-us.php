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
            <div class="abt_content">
                <h1 class="abt_elements abt_mainTitle">About</h1>
                <h2 class="abt_elements abt_mainSubtitle">us</h2>
            </div>    
        </div>

        <div class="abt_containerHeader">
            <h1 class="abt_elements abt_title">Our</h1>
            <h2 class="abt_elements abt_subtitle">history</h2>  
        </div>

        <div class="abt_containerText">
            <!--<?php the_content(); ?>-->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <div class="text-center">
            <img class="img-fluid" src="<?php echo get_template_directory_uri().'/src/images/Trapezoid_About.svg';?>" alt="khee"> 
        </div>

        <div class="container abt_image">
            <img class="img-fluid" src="<?php echo get_template_directory_uri().'/src/images/Trapezoid_Team_Image.png';?>" alt="kheex2"> 
        </div>

        <?php endwhile; ?>
    </body>