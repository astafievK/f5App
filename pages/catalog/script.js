$(document).ready(function() {
    $("#profile").click(function() {
        $.getJSON('check_auth.php', function(data) {
            console.log(data.auth)
            if (data.auth) {
                window.location.href = 'profile.php';
            } else {
                $("#modalProfile").css("display", "block");
            }
        });
    });

    $("#overlayProfile").click(function() {
        $("#modalProfile").css("display", "none");
    });



    $('#search').on('input', function() {
        const searchQuery = $(this).val().toLowerCase();

        $('.card-wrapper').each(function() {
            const title = $(this).find('.title').text().toLowerCase();
            const description = $(this).find('.description').text().toLowerCase();

            if (title.includes(searchQuery) || description.includes(searchQuery)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });



    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#goTop').fadeIn();
        } else {
            $('#goTop').fadeOut();
        }
    });
    $('#goTop').click(function(){
        $('body,html').animate({scrollTop : 0}, 500);
    });
});