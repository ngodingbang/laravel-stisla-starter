const olds = @json($olds);

$('select.select2').each(function (index) {
    const name = $(this).attr('name');
    const old = name in olds ? olds[name] : null;

    $(this).val(old).trigger('change');
});
