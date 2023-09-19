jQuery(function ($) {
	$('.form-search input[name="s"]').on('keyup', function () {
		var search = $('.form-search input[name="s"]').val();
		if (search.length < 1) {
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
				$(".form-search__result").html('Загрузка...');
			},
			success: function (data) {
				// console.log('asdfa');
				$(".form-search__result").html(data.out);
			}
		});
	});
});