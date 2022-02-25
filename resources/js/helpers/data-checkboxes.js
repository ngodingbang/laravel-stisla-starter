'use strict';

$('[data-checkboxes]').each(function () {
  var me = $(this),
    group = me.data('checkboxes'),
    role = me.data('checkbox-role');

  me.change(function () {
    var all = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"])'),
      checked = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"]):checked'),
      dad = $('[data-checkboxes="' + group + '"][data-checkbox-role="dad"]'),
      total = all.length,
      checked_length = checked.length;

    if (role == 'dad') {
      if (me.is(':checked')) {
        all.prop('checked', true);
      } else {
        all.prop('checked', false);
      }
    } else {
      if (checked_length >= total) {
        dad.prop('checked', true);
      } else {
        dad.prop('checked', false);
      }
    }
  });
})

$(document).on('change', ['input.checkbox-selected', 'input#checkbox-all'], function () {
  const length = $('input.checkbox-selected:checked').length;

  $('span#checkbox-selected-display').text(length);

  if (length > 0) {
    $('button#checkbox-delete-all').removeAttr('disabled');
  } else {
    $('button#checkbox-delete-all').attr('disabled', 'disabled');
  }
});
