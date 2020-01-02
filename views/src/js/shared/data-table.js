(function ($) {
  'use strict';
  $(function () {
    $('#order-listing').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "bLengthChange": false,
      "language": {
        search: "Sort By :"
      }
    });
    $('#order-listing').each(function () {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Filtre');
      // search_input.removeClass('form-control-sm');
      var s = datatable.closest('.dataTables_wrapper').find(".dataTables_filter").append('<button type="button" id="addNew" data-toggle="modal" data-target="#exampleModal-4" class="btn btn-primary ml-2">Nouveau</button>');
    });
  });
  $(function () {
    var fixedColumnTable = $('#fixed-column').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      columnDefs: [{
        orderable: false,
        targets: [1]
      }],
      fixedHeader: {
        header: false,
        footer: true
      },
      scrollY: 300,
      scrollX: true,
      scrollCollapse: true,
      bAutoWidth: false,
      paging: false,
      fixedColumns: true,
      "iDisplayLength": 10,
      "bLengthChange": true,
      "language": {
        search: "Sort By :"
      }
    });
    $('#fixed-column').each(function () {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Sort');
      // search_input.removeClass('form-control-sm');
      var s = datatable.closest('.dataTables_wrapper').find(".dataTables_filter").append('<button type="button" id="addNew" class="btn btn-primary ml-2">New Record</button>');
    });
    $('#fixed-column_wrapper').resize(function() {
      fixedColumnTable.draw();
    });
  });
})(jQuery);