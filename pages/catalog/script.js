$(document).ready(function() {
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