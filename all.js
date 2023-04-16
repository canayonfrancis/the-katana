$(document).ready(function(){
    //caches a jQuery object containing the header element
    var header = $(".header");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 10) {
            header.removeClass('bigheader').addClass("smallheader");
        } else {
            header.removeClass("smallheader").addClass('bigheader');
        }
    });

    // Image preview function when an specific image is being clicked
    $('.preview-image').click(function() {
        var src = $(this).attr('src');
        $('body').append('<div class="preview-container"><img src="'+src+'" class="preview-image-lg"/><div class="preview-close"></div></div>');
    });
      
    $(document).on('click', '.preview-close', function() {
        $('.preview-container').remove();
    });
});