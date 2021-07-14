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
        <div class="row">

            <div class="col-md-6"> 
                <img class="pruebaimg" src="src\images\error.png" alt="Error image">
            </div>

            <div class="col-md-6 mb-2"> 

                <div class="row error_title">
                    <h1 class="err_elements error_title">Oh no...</h1>
                </div>

                <div class="row mt-5" >
                    <div class="abt_containerHeader">
                        <h1 class="err_elements error_subTitles">We can't find this page. :(</h1>   
                    </div>
                </div>

                <button class="btn-error err_elements button-rounded-filled">Return home</button>

            </div>
        </div>
    </div>
    <?php endwhile; ?>
</body>

<?php
    get_footer();
?>