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
    <body>
        <!-- Content -->
        <div class=container>
            <!-- Landing Image Section -->
            <div class="row">
                <div class="col-lg-12 position-relative">

                    <!-- Image -->
                    <img fill="#31777B" style="mix-blend-mode:multiply" src="https://images.unsplash.com/photo-1548588681-adf41d474533?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=cover&w=1355&q=80" class="img-fluid border-image-radius" alt="...">
                    <!-- Image -->

                    <!-- Title, Subtitle, CTA -->
                    <div class="col-lg-6 position-absolute top-50  ms-5">
                        <H1 class="title">Handmade</H1>
                        <h2 class="subtitle">souvernir</h2>
                        <button href="products" type="button" class="btn-buy button-rounded-filled">Start Buying</button>
                    </div>
                    <!-- Title, Subtitle, CTA -->
                </div>
            </div>
            <!-- Landing Image Section -->

             <!-- Our Products Section -->
            <div class="row p-5 mt-4 hm_boder-radius-section" style="background:#209690">
                <div class="col-lg-12">
                    <!-- Our Products Title -->
                    <h1 class="title text-center my-2 py-2"> Our products</h1>
                    <!-- Our Products Title -->
                    <?php echo do_shortcode( '[products columns=3 limit=6]' )?>
                        <!-- Product Card -->
                    </div>
                </div>
            </div>
               <!-- Our Products Section -->
        </div>
        <!-- Content -->
    </body>
    <?php
    get_footer();
