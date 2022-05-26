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

  $(".datatable tbody").on("click", "td.details-control", async function () {
    let tr = $(this).closest("tr");
    let row = datatable.row(tr);
    let button = $(this).children("button");

    if (row.child.isShown()) {
      tr.removeClass("shown");
      row.child.hide();

      button.removeClass("btn-danger");
      button.children("i#icon-show").removeClass("d-none");
      button.children("i#icon-hide").addClass("d-none");

      return;
    }

    try {
      button.attr("disabled", "disabled");

      const response = await $.ajax({
        url: button.data("url"),
        type: "POST",
      });

      row.child(response).show();
    } catch (error) {
      console.log(error);
    } finally {
      tr.addClass("shown");

      button.addClass("btn-danger").removeAttr("disabled");
      button.children("i#icon-hide").removeClass("d-none");
      button.children("i#icon-show").addClass("d-none");
    }
  });
});
