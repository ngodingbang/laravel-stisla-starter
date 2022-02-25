'use strict';

$('input.custom-file-input').change(function (event) {
  const element = event.currentTarget
  const files = element.files

  if (files.length <= 0) {
    return
  }

  const file = files[0]

  $(element).prev('.custom-file-label').text(file.name)
  $($(element).data('preview')).attr('src', URL.createObjectURL(file))
});
