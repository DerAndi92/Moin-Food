$(document).ready(function(){

    $(".search-more-button").on('click', function(event) {
        event.preventDefault();
        $(".search-extend").slideToggle();
    });

    $(document).on('submit', 'form#mf-search', function(e){

        e.preventDefault();

        if(!$(this).hasClass("loading")) {

            var self = $(this);
            var buttonCache = '';

            $.ajax({
                type: 'post',
                url: self.attr('action'),
                cache: false,
                data: self.serialize(),
                beforeSend: function() {
                    buttonCache = $('.search-button').html();
                    $('.search-button').html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
                },
                success: function(data) {
                    $('.search-button').html(buttonCache);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var obj = jQuery.parseJSON(xhr.responseText);
                    alert(obj.message);
                    self.removeClass("loading");
                    $('.search-button').html(buttonCache);
                }
            });
        }
    });
});