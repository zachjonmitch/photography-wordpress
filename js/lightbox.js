$(document).ready(function() {

    var $image = $('.image');
    var $lightbox = $('.lightbox');
    var $backdrop = $('.backdrop');

    $image.on('click', function() {
        $src = $(this).find('img').attr('src');
        $($lightbox).find('img').attr('src', $src);
        $lightbox.css('display', 'flex');
    });

    $lightbox.add($backdrop).on('click', function() {
        $lightbox.css('display', 'none');
    });

});