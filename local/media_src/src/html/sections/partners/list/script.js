$('.pnslist-block').each(function() {
  let $video = $(this).find('video');

  if ($video.length === 0) return;

  $(window).scroll(function(){
    let videoTopPosition = $video[0].getBoundingClientRect().top;
    let windowHeight = $(window).innerHeight();

    if (videoTopPosition < (windowHeight / 3 * 2)) {
      if (!$video.hasClass('is-palyed')) {
        $video.addClass('is-palyed');
        $video.trigger('play');
      };
    };
  });
});