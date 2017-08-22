$(document).ready(function() {
    var $load = $('.load-more');

    $load.on('click', function() {
        
        var $page = $(this).data('page');
        var $ajaxurl = $(this).data('url');

        $.ajax({

            url : $ajaxurl,
            type: 'POST',
            data : {
                page: $page,
                action: 'load_more'
            },
            error : function( response ) {
                console.log(response);
            },
            success : function( response ) {

                $('.gallery-posts').append( response );

            }

        });

    });

});