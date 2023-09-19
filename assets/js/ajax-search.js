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
        };
        $.ajax({
            url: searchForm.url,
            // url: 'http://tonerburg/wp-admin/admin-ajax.php',
            data :data,
            type: 'POST',
            dataType : 'json',
            beforeSend:function(xhr){
            },
            success: function (data){
                console.log(data)
            }
        });
    });
});