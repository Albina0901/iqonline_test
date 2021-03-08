$(function () {
    // ajax-запрос
    $('.calculate__form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: "calc.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                if (response !== 'error') {
                    $('.calculate__sum span').html(response + ' руб.');
                } else {
                    alert('Заполните все поля!');
                }
            }
        });
    });
    // validate input
    $('input[name=radio]').on('change', function () {
        let sum_selector = 'input[name=sum1]';
        let value = $(this).val();
        if (value === '0') {
            $(sum_selector).prop('disabled', true);
            $(sum_selector).val('');
        } else {
            $('.range_2').prop('disabled', false);
        }
    });
    // rangeslider
    let output = document.querySelector('.range_1');
    $('.cl').rangeslider ({
        polyfill: false,
        onSlide: function (position, value) {
            $(output).val(value)
        }
    });
    $(output).on('change input', function() {
        $('.cl').val(this.value).change();
    });

    let output1 = document.querySelector('.range_2');
    $('.cl1').rangeslider ({
        polyfill: false,
        onSlide: function (position, value) {
            if ($(output1).prop('disabled') === false) {
                $(output1).val(value);
            } else {
                $(output1).val(0);
            }
        }
    });
    $(output1).on('change input', function() {
        $('.cl1').val(this.value).change();
    });
           
});
