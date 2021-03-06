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

<!-- <?php

//loop

while( have_posts() ) : the_post(); ?> -->

<body>

  <div class="container">
    <div class="row ct_mainTitles">
      <h1 class="ct_contactUs ct_mainTitle subtitle">Contact</h1>
      <h2 class="ct_contactUs ct_mainSubtitle subtitle">us</h2>
    </div>

    <div class="row mt-5 ct_content hm_boder-radius-section" >
      <div class="row">
          <!-- Contact us Title -->

          <div class="ct_containerHeader">
            <h1 class="ct_elements ct_title title">Tell</h1>
            <h2 class="ct_elements ct_subtitle title">us</h2>  
          </div>

      </div>

      <div class="row">
        <!-- info -->
        <div class="ct_containerText">
          <p>Send us an email with the form below, use this if you have an issue with some payment in the page or if you want extra information about some of our products</p>
        </div>
      </div>
    </div>

    <div class="ct_formContainer hm_boder-radius-section" >
      <form class="container ct_form">
        <div class="form-row">
            <div class="form-group row-md-6">
                <label for="inputName">Your Name</label>
                <input type="email" class="form-control" id="inputName" placeholder="Write your name">
            </div>
            <div class="form-group row-md-6">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="Write an Email">
            </div>
          <div class="form-row">
              <label for="inputMessage">Message</label>
            <input type="text" class="form-control" id="inputMessage" placeholder="Click to add a message...">
          </div>

          <div class="text-center">
                <button type="submit" class="btn button-send">Send</button>
          </div>
        </div>
      </form> 
    </div>

  </div>

    <?php endwhile; ?>
</body>
<?php
  get_footer();
?>