$(function () { //DOM READEY


  ScrollTrigger.matchMedia({
    '(min-width: 1200px)': function () {
      $('.about-advantages-item').each(function () {
        gsap.fromTo($(this).find('.about-advantages__picture img'),
          {
            y: '5%',
          },
          {
            y: '-5%',
            ease: 'none',
            scrollTrigger: {
              trigger: $(this),
              start: 'top bottom',
              end: 'bottom top',
              scrub: 1,
            },
          }
        );
      });
    }
  });

  ScrollTrigger.matchMedia({
    '(min-width: 1200px)': function () {
      $('.about-advantages-item').each(function () {
        gsap.fromTo($(this).find('.about-advantages__info'),
          {
            y: '-40px',
          },
          {
            y: '40px',
            ease: 'none',
            scrollTrigger: {
              trigger: $(this),
              start: 'top bottom',
              end: 'bottom top',
              scrub: 1,
            },
          }
        );
      });
    }
  });


});