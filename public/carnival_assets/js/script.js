///////////////////////////////
// Fix the Home Height
///////////////////////////////

$(function() {
    var setHomeBannerHeight = function(){
        var homeHeight= $(window).height();
        $('#window-height').height(homeHeight);
    }

    setHomeBannerHeight();
});



  ///////////////////////////////
  // Header Fixed
  ///////////////////////////////


$(document).ready(function(){

    var menu = $('#navigation');
    var origOffsetY = menu.offset().top;

    function scroll() {
       if ($(window).scrollTop() >= origOffsetY) {
            $('#navigation').addClass('nav-wrap');
            $('#header').addClass('exp');
            //$('.content').addClass('menu-padding');
        } else {
            $('#navigation').removeClass('nav-wrap');
            $('#header').removeClass('exp');
            //$('.content').removeClass('menu-padding');
        }



        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            addPackery();
        }


    }

    document.onscroll = scroll;

});

///////////////////////////////
// showing icon in placeholder
///////////////////////////////

$(document).ready(function() {
	$('.iconified').on('keyup', function() {
        var input = $(this);
        if(input.val().length === 0) {
            input.addClass('empty');
        } else {
            input.removeClass('empty');
        }
    });
});


/*=======================================
            Fancybox
========================================*/

$(document).ready(function() {
    $(".fancybox").fancybox();
});