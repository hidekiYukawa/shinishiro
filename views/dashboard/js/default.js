$( function () {

    $.get( 'dashboard/xhrGetListings', function ( o ) {

        for (var i = 0; i < o.length; i++) {
            console.log( o[ i ].data );

            $( '#listInserts' ).append( '<div>' + o[ i ].data + '<a class="del" rel="' + o[ i ].id + '" href="#"> X </a></div>' );
        }

        $( '.del' ).on( 'click', function () {

            delItem = $( this );
            // alert("CLICK --> " + delItem.attr("rel"));

            var id = delItem.attr( 'rel' );

            console.log( "ID ====== : " + id );

            $.post( 'dashboard/xhrDeleteListing', {'id': id}, function ( o ) {
                // alert("Now deleting item :: " + delItem.parent().html());

                delItem.parent().remove();
            }, 'json' );

            return false;
        } );

    }, 'json' );


    $( '#randomInsert' ).submit( function () {
        var url = $( this ).attr( 'action' );
        var data = $( this ).serialize();

        $.post( url, data, function ( o ) {
            $( '#listInserts' ).append( '<div>' + o.data + '<a class="del" rel="' + o.id + '" href="#">X</a></div>' );
        }, 'json' );


        return false;
    } );

} );