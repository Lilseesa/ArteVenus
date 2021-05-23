<?php
/**
 * The main template file
 * @link 
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */

get_header();

    if ( have_posts() ) {

    // Load posts loop.
    while ( have_posts() ) {
        the_post();
        ?>
        

        <?php
	}

} else {

	// If no content, include the "No posts found" template.
	?> <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About us</title>

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
        <link rel="stylesheet" href="css/about-style.css">
    </head>  

    <body>

        <div class="container">
            <div class="content">
                <h1 class="elements mainTitle">About</h1>
                <h2 class="elements mainSubtitle">us</h2>
            </div>    
        </div>

        <div class="containerHeader">
            <h1 class="elements title">Our</h1>
            <h2 class="elements subtitle">history</h2>  
        </div>

        <div class="containerText">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <div class="text-center">
            <img class="img-fluid" src="images/Trapezoid_About.svg" alt=""> 
        </div>

    </body> <?php

}