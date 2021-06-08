
function makeCardSwipe(x) {
    if (x.matches) { // If media query matches

        // Turn on Trepezoid Image HTML for phone and Turn Off Trepezoid Image HTML for Desktop
        document.getElementById('trapezoid-image-desktop').style.display = "none";
        document.getElementById('trapezoid-image-phone').style.display = "block";

        // Turn on Swiper HTML for phone and Turn Off Swiper HTML for Desktop
        document.getElementById('cardContainerDesktop').style.display = "none";
        document.getElementById('cardContainerSwiper').style.display = "block";
        const swiper = new Swiper('.mySwiper', {
        spaceBetween: 32,
        slidesPerView: "auto",
        loop: true,
        centeredSlides: true,
        });

    } else {
        // document.getElementById("ourProducts").classList.add("container");
        // document.getElementById('cardContainerDesktop').style.display = "flex";
        // document.getElementById('cardContainerSwiper').style.display = "none";
        document.getElementById('trapezoid-image-desktop').style.display = "block";
        document.getElementById('trapezoid-image-phone').style.display = "none";

    }
  }

var x = window.matchMedia("(max-width: 375px)")
makeCardSwipe(x) // Call listener function at run time
x.addListener(makeCardSwipe) // Attach listener function on state changes


                   