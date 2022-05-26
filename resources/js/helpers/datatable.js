var datatable;
var datatable_options;

$(function () {
  datatable_options = {
    processing: true,
    serverSide: true,
    ajax:
      typeof datatable_ajax !== "undefined"
        ? datatable_ajax
        : {
            url: datatable_ajax_url,
            type: "POST",
          },
    columns: datatable_columns,
  };

  if (typeof datatable_order !== "undefined") {
    datatable_options.order = datatable_order;
  }

  if (typeof datatable_length_menu !== "undefined") {
    datatable_options.lengthMenu = datatable_length_menu;
  }

  if (typeof datatable_language_url !== "undefined") {
    datatable_options.language = {
      url: datatable_language_url,
    };
  }

  datatable = $(".datatable").DataTable(datatable_options);
});
