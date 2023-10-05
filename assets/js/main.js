// saveData.js
// $(document).ready(function () {
//     // При отправке формы
//     $('.form-search').on('submit', function (e) {
//         e.preventDefault(); // Предотвращаем отправку формы, чтобы не перейти на другую страницу
//
//         // Получаем значение из form-search__input
//         var inputValue = $('.form-search__input').val();
//
//         // Сохраняем значение в localStorage
//         localStorage.setItem('searchInputValue', inputValue);
//
//         // Переходим на другую страницу
//         window.location.href = 'другая_страница.html'; // Замените на реальный URL другой страницы
//     });
// });
// retrieveData.js
$(document).ready(function () {
    // Извлекаем значение из localStorage
    // var searchInputValue = localStorage.getItem('searchInputValue');

    // Устанавливаем значение в .catalog-search__input
    // $('.catalog-search__input').val(searchInputValue);
});

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

