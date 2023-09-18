jQuery(function ($){
    $('.form-search input[name="s"]').on('keyup', function (){
        var search = $('.form-search input[name="s"]').val();
        if (search.length < 4){
            return false;
        }
        var data = {
            s:search,
            action: 'search-ajax',
            nonce : searchForm.nonce
        }
        console.log(data)
    });
});