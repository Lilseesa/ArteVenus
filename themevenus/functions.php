<?php
/* Inline script printed out in the header */
add_action('wp_head', 'tutsplus_add_script_wp_head');
function tutsplus_add_script_wp_head() {
    ?>
        <script>
            function makeCardSwipe(x) {
				if (x.matches) { // If media query matches
					document.getElementById('cardContainerDesktop').style.display = "none";
					document.getElementById('cardContainerSwiper').style.display = "block";
					const swiper = new Swiper('.mySwiper', {
					spaceBetween: 32,
					slidesPerView: "auto",
					loop: true,
					centeredSlides: true,
					});

				} else {
					document.getElementById("ourProducts").classList.add("container");
					document.getElementById('cardContainerDesktop').style.display = "flex";
					document.getElementById('cardContainerSwiper').style.display = "none";

				}
			  }

			var x = window.matchMedia("(max-width: 375px)")
			makeCardSwipe(x) // Call listener function at run time
			x.addListener(makeCardSwipe) // Attach listener function on state changes
        </script>
    <?php
}