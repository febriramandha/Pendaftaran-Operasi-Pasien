// Datatables
$(document).ready(function () {
    $('#table1').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
        },
    })
});

// Select 2
$(function () {
    $('select').each(function () {
        $(this).select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
            closeOnSelect: !$(this).attr('multiple'),
        });
    });
});

// Avatar Initial
$(document).ready(function () {
    $('.profile').initial();
});