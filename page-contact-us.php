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
    <div class="row ct_mainTitles">
      <h1 class="ct_contactUs ct_mainTitle">Contact</h1>
      <h2 class="ct_contactUs ct_mainSubtitle">us</h2>
    </div>

    <div class="row mt-5 ct_content" >
      <div class="row">
          <!-- Contact us Title -->

          <div class="ct_containerHeader">
            <h1 class="ct_elements ct_title">Tell</h1>
            <h2 class="ct_elements ct_subtitle">us</h2>  
          </div>

      </div>

      <div class="row">
        <!-- info -->
        <div class="ct_containerText">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>

    <div class="ct_formContainer" >
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
          <div class="form-row">
              <label for="inputMessage">Message</label>
            <input type="text" class="form-control" id="inputMessage" placeholder="Click to add a message...">
          </div>

          <div class="text-center">
                <button type="submit" class="btn btn-primary ct_btn">Send</button>
          </div>
        </div>
      </form> 
    </div>

  </div>

    <?php endwhile; ?>
</body>