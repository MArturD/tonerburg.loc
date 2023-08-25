function searchClick() {
    $('.form-search').click(function() {
        $('.menu').addClass('menu-block');
        $('.form-search__input').addClass('search-aaa');
    });
}
searchClick();


function searchClose(){
$(document).click(function (e) {
    if ($(e.target).closest(".form-search").length) {
        // клик внутри элемента
        return;
    }
    // клик снаружи элемента
    $(".menu").removeClass('menu-block');
    $(".form-search__input").removeClass('search-aaa');
});
}
searchClose();
