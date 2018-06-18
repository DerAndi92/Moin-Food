$(document).ready(function() {

    $(document).on('click', '#nav-toggle a', function(e) {
        $("#nav-toggle, #menu nav").toggleClass('active');
    });

    $(document).on('click', '.btn[save-action]', function(e) {
        e.preventDefault();
        console.log(this);
        let form = $(this).attr('save-action');
        $("#" + form).submit();
    });

    $(document).on('click', '.btn[destroy-action]', function(e) {
        let msg = $(this).attr('destroy-action');
        return confirm(msg)
    });
});
