/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */


import gsap from "gsap";
// animasi aksen
gsap.fromTo('.aksen', { scale: 0 }, { duration: 1, delay:1, scale: 1, stagger: 0.2, ease: 'elastic.out(1, 0.3)' })

document.addEventListener('DOMContentLoaded', function () {
    // navbar 
    console.log(document.querySelector('#masthead'));
   // Slider 1 Initialization
 const slider1 = new Splide('#slider1', {
    type      : 'loop',
    autoplay  : true,
    speed     : 1500,
    perPage   : 3,
    gap       : '2rem',
    pagination: false,
    classes   : {
      arrows: 'splide__arrows your-class-arrows',
      arrow : 'splide__arrow your-class-arrow',
      prev  : 'splide__arrow--prev your-class-prev',
      next  : 'splide__arrow--next your-class-next',
    },
  })
  

  // Slider 2 Initialization
 const slider2 = new Splide('#slider2', {
    type      : 'loop',
    heightRatio:0.7,
    direction  : 'ttb', // Top-to-bottom (vertical direction)
    autoplay  : false,
    speed     : 1500,
    perPage   : 1,
    gap       : '2rem',
    arrows    : false,
    pagination: false,
  })
  

 // Slider 2 Initialization
 const slider3 = new Splide('#slider3', {
    type      : 'fade',
    autoplay  : false,
    speed     : 1500,
    perPage   : 1,
    gap       : '0rem',
    autoHeight: true,
    pagination: false,
    classes   : {
        arrows: 'splide__arrows slider-3-arrows',
        arrow : 'splide__arrow slider-3-arrow',
        prev  : 'splide__arrow--prev slider-3-prev',
        next  : 'splide__arrow--next slider-3-next',
      },
  })

  const slider4 = new Splide('#slider4', {
    type      : 'loop',
    autoplay  : true,
    interval  : 3000, 
    speed     : 1500,
    perPage   : 5,
    rewind: false,
    perMove: 1,  
    gap       : '2rem',
    pagination: false,
    arrows:false
  })

  slider1.mount();
  slider2.mount();
  slider3.mount();
  slider2.sync(slider3);
  slider4.mount();

  

});

