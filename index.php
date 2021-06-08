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
                        <button type="button" class="btn btnBuy button-rounded-filled">Start Buying</button>
                    </div>
                    <!-- Title, Subtitle, CTA -->
                </div>
            </div>
            <!-- Landing Image Section -->

             <!-- Our Products Section -->
            <div class="row p-5 mt-5 border-section" style="background:#209690">
                <div class="col-lg-12">
                    <!-- Our Products Title -->
                    <h1 class="title text-center py-5"> Our products</h1>
                    <!-- Our Products Title -->
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <!-- Product Card -->
                        <div class="col">
                            <div class="card pb-4">
                                <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="card-img-top border-card-image-radius" alt="...">
                                <div class="d-flex flex-column pt-2">
                                    <p class="card-info-text mx-3">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <div class="d-flex ms-auto">
                                        <div class="d-flex flex-row me-4">
                                        
                                        </div>
                                        <button type="button" class="btn button-rounded-filled me-3">Start Buying</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card -->
                        <!-- Product Card -->
                        <div class="col">
                            <div class="card pb-4">
                                <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="card-img-top border-card-image-radius" alt="...">
                                <div class="d-flex flex-column pt-2">
                                    <p class="card-info-text mx-3">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <div class="d-flex ms-auto">
                                        <div class="d-flex flex-row">
                                           
                                        </div>
                                        <button type="button" class="btn button-rounded-filled me-3">Start Buying</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card -->
                        <!-- Product Card -->
                        <div class="col">
                            <div class="card pb-4">
                                <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" class="card-img-top border-card-image-radius" alt="...">
                                <div class="d-flex flex-column pt-2">
                                    <p class="card-info-text mx-3">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <div class="d-flex ms-auto">
                                        <div class="d-flex flex-row">
                                            
                                        </div>
                                        <button type="button" class="btn button-rounded-filled me-3">Start Buying</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card -->
                    </div>
                </div>
            </div>
               <!-- Our Products Section -->
        </div>
        <!-- Content -->


        <!-- Content -->
        <!-- <div class="containerContent">
            <div class="content">
                <H1 class="elements title">Handmade</H1>
                <H2 class="elements subtitle">souvenirs</H2>
                <button class="elements btnGoToBuy">Start Buying</button>
            </div>    
        </div>

        <div class="img-fluid text-center">
            <svg class="trapezoid-image">
                <defs>
                    <clipPath id="TrapezoidImage">
                        <path d="M40 88.6309C40 47.8407 74.7367 15.6902 115.405 18.8398L1143.86 98.4897C1169.9 100.506 1190 122.224 1190 148.34V513.958C1190 538.867 1171.66 559.978 1147 563.465L119.801 708.716C77.6616 714.674 40 681.964 40 639.405V88.6309Z" fill="url(#pattern0)"/>
                        <path d="M40 88.6309C40 47.8407 74.7367 15.6902 115.405 18.8398L1143.86 98.4897C1169.9 100.506 1190 122.224 1190 148.34V513.958C1190 538.867 1171.66 559.978 1147 563.465L119.801 708.716C77.6616 714.674 40 681.964 40 639.405V88.6309Z" fill="#31777B" style="mix-blend-mode:multiply"/>
                    </clipPath>
                </defs>
                <image class="custom-trapezoid-img" xlink:href="https://images.unsplash.com/photo-1548588681-adf41d474533?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=cover&w=1355&q=80" clip-path="url(#TrapezoidImage)" />   
            </svg>
        </div>

        <div id="ourProducts" class="our-products-content">
            <div class="cards">
                <h1 class="titleCards"> Our products</h1>
                <div id="cardContainerDesktop" class="cardContainer">
                    <div class="card card-1">
                        <div class="img-overlay"></div>
                        <h5 class="card-title">Product 1</h5>
                        <img src="http://webzine.unitedfashionforpeace.com/wp-content/uploads/2013/10/DANY%C3%89-The-Song-of-the-weaver-Collection-Gogo-ribbed-pots-1-Copier.jpg" alt="imagen de producto">
                    </div>
                    <div class="card card-2">
                        <div class="img-overlay"></div>
                        <h5 class="card-title">Product 2</h5>
                        <img src="http://smallbiztrends.com/wp-content/uploads/2018/10/shutterstock_354254963.jpg" alt="">
                    </div>
                    <div class="card card-3">
                        <div class="img-overlay"></div>
                        <h5 class="card-title">Product 3</h5>
                        <img src="https://image.freepik.com/free-photo/bamboo-bags-row-local-market-trendy-fashion-handmade-goods_96943-35.jpg" alt="">
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
            <svg class="contentCards">
                <path d="M40 218.686C40 193.804 58.2956 172.708 82.9274 169.189L1132.93 19.1551C1163.05 14.8509 1190 38.2242 1190 68.6523V944.836C1190 975.095 1163.33 998.419 1133.34 994.392L83.345 853.383C58.5256 850.049 40 828.87 40 803.827V218.686Z"/>
            </svg>
        </div> -->
    </body>
    <?php
    get_footer();
