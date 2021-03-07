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


$(function () {
    var $document = $(document);
    var selector = '[data-rangeslider]';
    var $inputRange = $(selector);

    function valueOutput(element) {
        var value = element.value;
        var output = element.parentNode.getElementsByClassName('.cl');  
        output.innerHTML = value; 
    }
    for (var i = $inputRange.length - 1; i >= 0; i--) {
        valueOutput($inputRange[i]);
    };
    $document.on('input', selector, function (e) {
        valueOutput(e.target);
    });
    $inputRange.rangeslider({
        polyfill: false
    });
});