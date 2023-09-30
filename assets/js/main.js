function searchClick() {
    $('.form-search').click(function() {
        $('.menu').addClass('menu-block');
        $('.form-search__result').addClass('search-block');
    });
}
searchClick();

$('.burger-btn').on('click', function () {

    $('.burger-menu').slideToggle(function (){
        if ($(this).is(':visible'))
            $(this).css('display', 'flex');
    });
    $('.form-search').slideToggle(function (){
        if ($(this).is(':visible'))
            $(this).css('display', 'none');
    });
    $('.burger-wrap').toggleClass('burger-wrap-active')

})
function search_close() {
    $('.form-search__img').click(function() {
        $('.burger-wrap').removeClass('burger-wrap-active');
        $('.form-search').removeClass('form-search-none');
        $('.burger-menu').slideToggle(function (){
            if ($(this).is(':visible'))
                $(this).css('display', 'none');
        });
    });
}
search_close();

$('.search__img').on('click', function () {

    $('.form-search').slideToggle(function (){
        if ($(this).is(':visible'))
            $(this).css('display', 'flex');
    });
    $('.burger-menu').removeClass(function (){
        if ($(this).is(':visible'))
            $(this).css('display', 'none');
    });
    $('.burger-wrap').removeClass('burger-wrap-active')

})

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

