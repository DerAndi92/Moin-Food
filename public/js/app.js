var _POPUP = undefined;


$(function () {
    'use strict';

    // Popup
    $.fn.popup = function(options) {

        $.Popup = function(settings)
        {
            let p = this;
            let defaults = {

                // Markup
                containerId : 'popup',
                backClass : 'popup_wrap',
                backOpacity : 0.7,
                containerClass : 'popup',
                closeClass : 'popup_close',
                speed : 200,
                loadingTime: 300,

                // Callbacks
                error : function(p, data){
                    if(data === undefined)
                        alert('Error');
                    else
                        alert(data.code + ': ' + data.message);
                },
            };

            let $container;
            let $identifier;
            let $back;
            let $p;

            p.o = $.extend(true, {}, defaults, settings);

            p.open = function(ele){

                // Get identifier
                let id = $(ele).attr('data-popup');

                // Cache check
                if( _POPUP === undefined || _POPUP != p || (_POPUP != undefined && $identifier != id) ){

                    if(_POPUP != p ||(_POPUP != undefined && $identifier != id)) {
                        p.cleanUp();
                    }

                    // Set identifier in plugin
                    $identifier = id;

                    // Get content url
                    let content = $(ele).attr('href');
                    if( content === null){
                        p.o.error.call(p, content);
                        return false;
                    }

                    // Create popup container
                    $container = $('<div id="'+p.o.containerId+'"/>')
                        .prependTo($('body'));

                    // Create back and fade in
                    $back = $('<div class="'+p.o.backClass+'"/>')
                        .appendTo($container)
                        .css('opacity', 0)
                        .animate({
                            opacity : p.o.backOpacity
                        }, p.o.speed)
                        .on('click', function(e){
                            p.close(e);
                        });

                    // Get Ajax Content
                    $.ajax({
                        url : content,
                        success : function(data){
                            showContent(data.data);
                        },
                        error : function(data){
                            p.o.error.call(p, data);
                        }
                    });
                } else {
                    // Just show the popup again
                    $container.fadeIn();
                }

                return p;
            };

            /**
             * Shows the content
             *
             * @param  {string} content
             */
            function showContent(content){

                // Set popup container and put in the content
                $p = $('<div class="'+p.o.containerClass+'">')
                    .appendTo($container)
                    .css('opacity', 0)
                    .html(content);

                // Add close button function
                p.addClose();

                // Show it!
                $p.animate({opacity : 1}, p.o.speed);

            }

            p.addClose = function(e) {
                $($p).find('.' + p.o.closeClass)
                    .on('click', function(e){
                        p.close(e);
                    });
            }

            /**
             * Close the popup
             *
             * @return {Object}
             */
            p.close = function(e){
                if(e !== undefined) e.preventDefault();
                $container.fadeOut();
                return p;

            };

            /**
             * Clean up the popup
             *
             * @return {Object}
             */
            p.cleanUp = function(){

                // Cannot remove $container, maybe there is another popup instance!
                $('#' + p.o.containerId).remove();
                $container = $p = $back = undefined;
                _POPUP = undefined;

                return p;

            };
        };

        let $popup = new $.Popup(options);
        return this.each( function() {
            $(this).on('click', function(e){
                e.preventDefault();
                _POPUP = $popup.open(this);
            });
        });
    };

}(jQuery));

$(document).ready(function(){

    $('[data-popup]').popup();

    $("#search .locate-icon").on('click', function(event) {
        $("#restaurant-search").val('Eilbek');
    });

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
                    let section = $('#restaurant-list');
                    if(section.length == 0) {
                        $('#search').after(data.data.restaurants);
                    } else {
                        section.replaceWith(data.data.restaurants);
                    }
                    scrollTo('search');
                    $('#restaurant-list [data-popup]').popup();
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

    $('a[href^="#"]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 50
                }, 500);
                return false;
            }
        }
    });

    var urlHash = window.location.href.split("#")[1];
    if (urlHash) {
        scrollTo(urlHash);
    }

    function scrollTo(urlHash) {
        $('html,body').animate({
            scrollTop: $('.' + urlHash + ', #' + urlHash +',[name='+urlHash+']').first().offset().top - 50
        }, 500);
    }
});