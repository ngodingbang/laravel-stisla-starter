var datatable;

$(document).ready(function () {
  datatable = $('.datatable').DataTable({
    processing: true,
    serverSide: true,
    ajax: typeof datatable_ajax !== 'undefined' ? datatable_ajax : {
      url: datatable_url,
      type: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      },
    },
    columns: datatable_columns,
    order: typeof datatable_order !== 'undefined' ? datatable_order : [],
    language: {
      url: datatable_language_url,
    },
  });
});
