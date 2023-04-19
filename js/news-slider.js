$(document).ready(function() {
  // Assign some jquery elements we'll need
  var $swiper = $(".swiper-container");
  var $bottomSlide = null; // Slide whose content gets 'extracted' and placed
  // into a fixed position for animation purposes
  var $bottomSlideContent = null; // Slide content that gets passed between the
  // panning slide stack and the position 'behind'
  // the stack, needed for correct animation style

  var mySwiper = new Swiper(".swiper-container", {
    spaceBetween: 1,
    slidesPerView: 1,
    spaceBetween: 38,
    centeredSlides: true,
    roundLengths: true,
    loop: true,
    simulateTouch: false,
    loopAdditionalSlides: 30,
    navigation: {
      nextEl: ".sld-next",
      prevEl: ".sld-prev"
    },
    on: {
      slideChange: function (slider) {
        const activeIndex = slider.activeIndex; 
        const realIndex = slider.realIndex + 1;
        const prevArrow = document.querySelector('.sld-prev');
        const nextArrow = document.querySelector('.sld-next');
        const nextTitle = slider.slides[activeIndex].nextElementSibling.querySelector('.slidetitle').innerText;
        const prevTitle = slider.slides[activeIndex].previousElementSibling.querySelector('.slidetitle').innerText;
        const prevIndexTitle =  (realIndex == 1) ? slider.loopedSlides : (realIndex - 1);
        const nextIndexTitle = (realIndex == slider.loopedSlides) ? 1 : (realIndex+1); 
        prevArrow.querySelector('.title').innerText = prevTitle; 
        nextArrow.querySelector('.title').innerText = nextTitle; 
        prevArrow.querySelector('.number').innerText = (prevIndexTitle < 10 ) ? "0"+prevIndexTitle : prevIndexTitle;
        nextArrow.querySelector('.number').innerText = (nextIndexTitle < 10 ) ? "0"+nextIndexTitle : nextIndexTitle; 
      },
    },
  });
});
