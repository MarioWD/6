$(function() {

    var prevActive;
    var indi_i;

    $('#images').on('change', tempImage);
    $('#title').on('input', rewrite);
    $('#body').on('input', rewrite);
    $('.js-month-sel').on('click', changeBlogMonth);

    function changeBlogMonth(e) {
        e.preventDefault();
        $(this).parent().find('.active').removeClass('active');
        $(this).addClass('active');
        var ajax = {
            method: 'post',
            data: $(this).data(),
            url: '/Blogger',
            success: monthBlogs,
            dataType: 'html' 
        };
        $.ajax(ajax);
    }
    
    function monthBlogs(data) {
        $('.img-row').empty();
        $('.img-row').append(data);
    }

    function tempImage() {
        prevActive = false;
        prevActive = 0;

        $('#slideshow_container').show();
        $('#myCarousel').find('.carousel-inner').empty();
        $('#myCarousel').find('.carousel-indicators').empty();
        $('#myCarousel').find('.carousel-control').hide();

        if (this.files.length > 1)
        {
            $('#myCarousel').find('.carousel-indicators').show();
            $('#myCarousel').find('.carousel-control').show();
        }

        for (var i = 0, f; f = this.files[i]; i++)
        {
            var read = new FileReader();
            read.onload = function(e) {
                indi_i++;

                var attrs = {
                    src: e.target.result,
                    style: 'margin:auto;max-width:100%;'
                };

                var indi_attrs = {
                    'data-target': '#myCarousel',
                    'data-slide': indi_i,
                };

                var class_name = !prevActive?'active':'';
                if (!prevActive) {prevActive = true;};

                indi_attrs.class = class_name;
                var container = $("<div/>").attr({class: 'item '+class_name}).append($('<img/>').attr(attrs));
                var indicator = $("<li/>").attr(indi_attrs);

                $('#myCarousel').find('.carousel-inner').append(container);
                $('#myCarousel').find('.carousel-indicators').append(indicator);
            };
            read.readAsDataURL(f);
        }
    };

    function rewrite() {
        var new_title = $(this).val();
        $($(this).data('target')).text(new_title);
    }
});

