<?php
/**
 * The main template file
 * @link 
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */

get_header(); ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <!-- Scripts -->
        
        <!-- Swiper -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <!-- Boostrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="wp-content\themes\themevenus\css\style.css">
    </head>  

    <body>
        <div class="containerContent">
            <div class="content">
                <H1 class="elements title">Handmade</H1>
                <H2 class="elements subtitle">souvenirs</H2>
                <button class="elements btnGoToBuy">Start Buying</button>
            </div>    
        </div>

        <div class="text-center">
            <img class="img-fluid" src="wp-content\themes\themevenus\images\Trapezoid_Image.svg" alt="">
        </div>

        <div id="ourProducts" class="our-products-content">
            <div class="container cards">
                <h1 class="titleCards"> Our products</h1>
                <div id="cardContainerDesktop" class="cardContainer">
                    <div class="card card-1">
                        <div class="img-overlay"></div>
                        <!-- TODO: arreglar los title de las cards en desk -->
                        <!-- TODO: mejorar el overlay para aplicarlo en todas las cards -->
                        <h5 class="card-title">Product 1</h5>
                        <img src="wp-content\themes\themevenus\images\placeholder (1).jpg" alt="">
                    </div>
                    <div class="card card-2">
                        <div class="img-overlay"></div>
                        <h5 class="card-title">Product 2</h5>
                        <img src="wp-content\themes\themevenus\images\placeholder (2).jpg" alt="">
                    </div>
                    <div class="card card-3">
                        <div class="img-overlay"></div>
                        <h5 class="card-title">Product 3</h5>
                        <img src="wp-content\themes\themevenus\images\placeholder (3).jpg" alt="">
                    </div>
                </div>
                <div id="cardContainerSwiper" class="cardContainer swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img-overlay"></div>
                            <h5 class="card-title">Product 1</h5>
                            <img src="wp-content\themes\themevenus\images\placeholder (1).jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <div class="img-overlay"></div>
                            <h5 class="card-title">Product 2</h5>
                            <img src="wp-content\themes\themevenus\images\placeholder (2).jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <div class="img-overlay"></div>
                            <h5 class="card-title">Product 3</h5>
                            <img src="wp-content\themes\themevenus\images\placeholder (3).jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <p class="card-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et lacus maximus, commodo nunc vel, vestibulum enim. Integer elit mauris, ornare in dictum non, venenatis id enim. Pellentesque aliquam ante urna, vitae bibendum justo gravida ac. </p>
                </div>
                
                <button class="btnAllProducts">Go to products</button>

            </div>
            <!-- //TODO: Arreglar el trapezoid para iphone -->
            <img id="TL" class="contentCards" src="wp-content\themes\themevenus\images\Trapezoid_Left.svg" alt="">
        </div>
    </body>

    <!--TODO: arreglar los script para wordpress-->
    <!--<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="wp-content\themes\themevenus\js\main.js"></script>-->

    <?php
    get_footer();
