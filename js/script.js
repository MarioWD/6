$(function() {

    var prevActive = false;
    $('#images').on('change', tempImage);
    function tempImage() {
        prevActive = false;

        $('#slideshow_container').show();
        $('#myCarousel').find('.carousel-inner').empty();
        $('#myCarousel').find('.carousel-indicators').hide();
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
                var attrs = {
                    src: e.target.result,
                    style: 'margin:auto;max-width:100%;'
                };
                var class_name = !prevActive?'item active':'item';
                if (!prevActive) {prevActive = true;};
                var container = $("<div/>").attr({class: class_name}).append($('<img/>').attr(attrs));
                $('#myCarousel').find('.carousel-inner').append(container);
            };
            read.readAsDataURL(f);
        }
    };

    function prevImage(e) {
    };
});

