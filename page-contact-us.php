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

    <div class="container">
        <div class="ct_content">
            <h1 class="ct_elements ct_mainTitle">Contact</h1>
            <h2 class="ct_elements ct_mainSubtitle">us</h2>
        </div>    
    </div>

    <div class="ct_containerHeader">
        <h1 class="ct_elements ct_title">Tell</h1>
        <h2 class="ct_elements ct_subtitle">us</h2>  
    </div>

    <div class="ct_containerText">
        <!--<?php the_content(); ?>-->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class="text-center">
        <img class="img-fluid" src="<?php echo get_template_directory_uri().'/src/images/Trapezoid_Left_Contact.svg';?>" alt=""> 
    </div>

    <div class="ct_formContainer">
        <div class="container ct_trapezoid">
            <img class="img-fluid" src="<?php echo get_template_directory_uri().'/src/images/Trapezoid_Right_Contact.svg';?>" alt="">
        </div>

        <form class="container ct_form">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputName">Your Name</label>
                <input type="email" class="form-control" id="inputName" placeholder="Write your name">
              </div>
              <div class="form-group col-md-4">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="Write an Email">
              </div>
            </div>
            <div class="form-row">
              <label for="inputMessage">Message</label>
              <input type="text" class="form-control" id="inputMessage" placeholder="Click to add a message...">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary ct_btn">Send</button>
            </div>
          </form> 
    </div>

    <?php endwhile; ?>
</body>