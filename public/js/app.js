$(document).ready(function(){

    $(".search-more-button").on('click', function(event) {
        event.preventDefault();
        $(".search-extend").slideToggle();
    });
});