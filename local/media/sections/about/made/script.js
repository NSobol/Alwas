$(function () { //DOM READEY


  $('body').on('mouseenter', '.made-content', function () {
    let $video = $(this).find('video');

    if ($video.length === 0) return;

    $video[0].currentTime = 0;
  });


});