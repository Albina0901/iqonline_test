$(function () {

    $('.calculate__form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: "calc.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(response)
            {
                if (response !== 'error') {
                    $('.calculate__sum span').html(response +' руб.');
                } else {
                    alert('Заполните все поля!');
                }
            }
        });
    });

});