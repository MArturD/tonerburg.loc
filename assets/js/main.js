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

function myFocus($input) {
	var $input = jQuery($input);

	// Сфокусируемся на поле ввода
	$input.focus();

	// Переместим курсор в конец текста
	var inputLength = $input.val().length;
	$input[0].setSelectionRange(inputLength, inputLength);
}

jQuery(document).ready(function ($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках

	// Извлекаем значение из localStorage
	// var searchInputValue = localStorage.getItem('searchInputValue');

	// Устанавливаем значение в .catalog-search__input
	// $('.catalog-search__input').val(searchInputValue);

// $(document).ready(function () {
	// $('.form-search__img').on('click', function () {
	//     $('.form-search__input').focus().select();
	// });
// });

	function searchClick() {
		$('.form-search').click(function () {
			$('.menu').addClass('menu-block');
			$('.form-search__result').addClass('search-block');
		});
	}

	searchClick();


	$(".form-search__input").focus(function () { // задаем функцию при получении фокуса элементом <form-search__input>
		$('.form-search').trigger('click');
	});
	$(".form-search__input").blur(function () { // задаем функцию при потери фокуса элементом <form-search__input>

	});

	$('.burger-btn').on('click', function () {

		$('.form-search').addClass('dn_mobile').removeAttr('style');

		var burder = $('.burger-menu');
		if (burder.is(':visible')) {
			burder.slideUp(300);
		} else {
			burder.slideDown(300);
		}
		// $('.burger-menu').slideToggle(function (){
		//     console.log('222');
		//
		//     if ($(this).is(':visible'))
		//         $(this).css('display', 'flex');
		// });
		// $('.form-search').slideToggle(function (){
		//     if ($(this).is(':visible'))
		//         $(this).css('display', 'none');
		// });
		// $('.burger-wrap').toggleClass('burger-wrap-active')

	})

	function search_close() {
		$('.form-search__img').click(function () {
			$('.burger-wrap').removeClass('burger-wrap-active');
			$('.form-search').removeClass('form-search-none');
			$('.burger-menu').css('display', 'none');
		});
	}

	search_close();

	$('.search__img').on('click', function () {

		var input = $('.form-search__input');
		if (input.val().length) {
			input.trigger('click');
		}

		$('.form-search').slideToggle(function () {
			if ($(this).is(':visible'))
				$(this).css('display', 'flex');
		})

		$('.burger-menu').removeClass(function () {
			if ($(this).is(':visible'))
				$(this).css('display', 'none');
		});
		$('.burger-wrap').removeClass('burger-wrap-active')

	})

	function searchClose() {
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
});

