/**
 * Created by Jekko on 08.08.2016.
 */
(function ($,undefined) {
    $(document).ready(function () {
        $('form').submit(function () {
            $('.alert').remove();
            $.ajax({
                type: 'POST',
                url:  '/',
                data: $(this).serialize(),
                dataType: 'json',
                beforeSend: function(){
                    var loadgif = '<div id="loading" class="text-center"><img src="./loader.gif"></div> ';
                    $('form').append(loadgif);
                },
                success: function (data) {
                    $('.result').html(data);
                },
                error: function () {
                    var msg = "<div class='alert alert-danger'><li>Введите URL!</li></div>";
                    $('form').before(msg);
                },
                complete: function() {
                    $('#loading').remove();
                }
            });
            return false;
        });
        
    });
})(jQuery);