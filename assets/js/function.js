$(function () {
    $('input[type=radio]').on('change', function (e) {
        var whichOne = $(e.currentTarget).val();
        $('span').hide();
        $('span[name=' + whichOne + ']').show();
    });
});