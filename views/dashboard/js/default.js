$(function() {

    $.get('dashboard/xhrGetListings', function(o) {

        for (var i = 0; i < o.length; i++)
        {
            console.log(o[i].data);

            $('#listInserts').append('<div>' + o[i].data + '<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');
        }

        $('.del').on('click', function() {
            delItem = $(this);
            var id = $(this).attr('rel');

            $.post('dashboard/xhrDeleteListing', {'id': id}, function(o) {
                delItem.parent().remove();
            }, 'json');

            return false;
        });

    }, 'json');



    $('#randomInsert').submit(function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function(o) {
            $('#listInserts').append('<div>' + o.data + '<a class="del" rel="'+ o.id +'" href="#">X</a></div>');
        }, 'json');


        return false;
    });

});