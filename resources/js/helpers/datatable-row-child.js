$(document).ready(function () {
  let datatable = $('.datatable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: datatable_url,
      type: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      },
    },
    columns: datatable_columns,
    order: typeof datatable_order !== 'undefined' ? datatable_order : [
      [1, 'asc'],
    ],
    language: {
      url: datatable_language_url,
    },
  });

  $('.datatable tbody').on('click', 'td.details-control', async function () {
    let tr = $(this).closest('tr');
    let row = datatable.row(tr);
    let button = $(this).children('button');

    if (row.child.isShown()) {
      tr.removeClass('shown');
      row.child.hide();

      button.removeClass('btn-danger');
      button.children('i#icon-show').removeClass('d-none');
      button.children('i#icon-hide').addClass('d-none');

      return;
    }

    try {
      button.attr('disabled', 'disabled');

      const response = await $.ajax({
        url: button.data('url'),
        type: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
      });

      row.child(response).show();
    } catch (error) {
      console.log(error)
    } finally {
      tr.addClass('shown');

      button.addClass('btn-danger').removeAttr('disabled');
      button.children('i#icon-hide').removeClass('d-none');
      button.children('i#icon-show').addClass('d-none');
    }
  });
});
