$(function() {
    var fSizeArray = new Array('12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '36', '40', '44', '48', '52', '56', '60', '72', '84', '96');
    $('#slider').slider({
        value: 18,
        min: 0,
        max: 28,
        step: 1,
        slide: function(event, ui) {
            var vfSizeArray = fSizeArray[ui.value];
            $('#font_size').val(vfSizeArray + ' px');
            $('#resize_area').css('font-size', vfSizeArray + 'px' );
        }
    });
    $('#font_size').val((fSizeArray[$('#slider').slider('value')]) + ' px');
});
