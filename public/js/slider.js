var allSliders = $('[type=range]');

allSliders.change(function (event, ui) {
    $(this).parent().parent().find('.slidervalue').html($(this).val());
});
