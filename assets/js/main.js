function searchClick() {
    $('.form-search').click(function() {
        $('.menu').addClass('menu-block');
        $('.logo').addClass('logo-none');
        $('.form-search__input').addClass('search-aaa');
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
        $('.menu').toggleClass('menu-visible');
        $('.contacts').toggleClass('contacts-visible');
        $('.burger-btn').toggleClass('active-burger');
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
    $('.logo').removeClass('logo-none');
    $(".form-search__input").removeClass('search-aaa');
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
});

// $('.autoplay').slick({
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 2000,
// });