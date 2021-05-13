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


                   