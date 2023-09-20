function searchClick() {
    $('.form-search').click(function() {
        $('.menu').addClass('menu-block');
        $('.form-search__result').addClass('search-block');
    });
}
searchClick();

// function burgerClose() {
//     $('.burger-btn').click(function() {
//         $('.menu').addClass('menu-active');
//         $('.contacts').addClass('contacts-active');
//     });
// }
// burgerClose()
function burgerClose() {
    $('.burger-btn').click(function() {
        $('.burger-btn').toggleClass('active-burger');
        $('.burger-wrap').toggleClass('burger-wrap-active');
        $('.form-search').toggleClass('form-none');
    });
}
burgerClose()


function searchClose(){
$(document).click(function (e) {
    if ($(e.target).closest(".form-search").length) {
        // клик внутри элемента
        return;
    }
    // клик снаружи элемента
    $(".menu").removeClass('menu-block');
    $('.form-search__result').removeClass('search-block');

});
}
searchClose();

// $('.autoplay').slick({
//     arrows: true,
//     prevArrow: $('.prev'),
//     nextArrow: $('.next'),
//     slidesToShow: 3,
//     infinite: true,
//     slidesToScroll: 1,
//     variableWidth: true,
//     // autoplay: true,
// });
$('.autoplay').slick({
    arrows: true,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    // centerMode: true,
    responsive: [
        {
            breakpoint: 390,
            settings: {
                centerMode: true,
            }
        }
        ]
});
$(function() {
    var $menu_popup = $('.menu-popup');

    $(".menu-triger").click(function(){
        $('body').addClass('body_pointer');
        $menu_popup.show(0);
        $menu_popup.animate(
            {right: parseInt($menu_popup.css('left'),10) == 0 ? -$menu_popup.outerWidth() : 0},
            300
        );
        return false;
    });

    $(".menu-close").click(function(){
        $('body').removeClass('body_pointer');
        $menu_popup.animate(
            {right: parseInt($menu_popup.css('right'),10) == 0 ? -$menu_popup.outerWidth() : 0},
            300,
            function(){
                $menu_popup.hide(0);
            }
        );
        return false;
    });

    $(document).on('click', function(e){
        if (!$(e.target).closest('.menu-popup').length){
            $('body').removeClass('body_pointer');
            $menu_popup.animate(
                {right: parseInt($menu_popup.css('right'),10) == 0 ? -$menu_popup.outerWidth() : 0},
                300,
                function(){
                    $menu_popup.hide(0);
                }
            );
        }
    });
});

// $('.autoplay').slick({
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 2000,
// });