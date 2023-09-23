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
    $('.burger-wrap').toggleClass('burger-wrap-active')
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

