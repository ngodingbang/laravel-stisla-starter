const olds = @json($olds);

$('select.select2').each(function (index) {
    name = $(this).attr('name')
    old = name in olds ? olds[name] : null;

    $(this).val(old).trigger('change');
});
