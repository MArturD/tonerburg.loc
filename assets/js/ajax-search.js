jQuery(document).ready(function ($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках

	$('.form-search input[name="s"]').on('click keyup', function () {
		var input = $(this);
		var search = $('.form-search input[name="s"]').val();

		var result = $(".form-search__result");
		myFocus(input);

		if (!search.length) {
			result.html('');
			return false;
		}

		var data = {
			s: search,
			action: 'search-ajax',
			nonce: searchForm.nonce
		};

		$.ajax({
			url: searchForm.url,
			// url: 'http://tonerburg/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			dataType: 'json',

			beforeSend: function (xhr) {
				result.html(
					'<div class="ii-search-result__no-results">\n' +
					'            <p>Загрузка...</p>\n' +
					'        </div>'
				);
			},
			success: function (data) {
				result.addClass('search-block').html(data.out);
				myFocus(input);
			}
		});
	});

	$('.search-catalog input[name="s"]').on('keyup', function () {
		var input = $(this);
		var search = $('.search-catalog input[name="s"]').val();
		var data = {
			s: search,
			term_id: term_id,
			action: 'search-catalog-ajax',
			nonce: searchForm.nonce
		};
		$.ajax({
			url: searchForm.url,
			// url: 'http://tonerburg/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			dataType: 'json',

			beforeSend: function (xhr) {
				$(".catalog-table__one tbody").html(`<tr>
                                    <td colspan="2" class="catalog-table__line_one">Загрузка...</td>
                                </tr>`);
			},
			success: function (data) {
				$(".catalog-table__one tbody").html(data.out);
				myFocus(input);
			}
		});
	});
});