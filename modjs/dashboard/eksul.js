// View Datatable Item
$(document).ready(function() {
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
        return {
            iStart: oSettings._iDisplayStart,
            iEnd: oSettings.fnDisplayEnd(),
            iLength: oSettings._iDisplayLength,
            iTotal: oSettings.fnRecordsTotal(),
            iFilteredTotal: oSettings.fnRecordsDisplay(),
            iPage: Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
            iTotalPages: Math.ceil(
                oSettings.fnRecordsDisplay() / oSettings._iDisplayLength
            ),
        };
    };

    $("#tableSarpra").DataTable({
        initComplete: function() {
            var api = this.api();
            $("#datatables input")
                .off(".DT")
                .on("keyup.DT", function(e) {
                    if (e.keyCode == 13) {
                        api.search(this.value).draw();
                    }
                });
        },
        oLanguage: {
            sProcessing: "loading...",
        },
        scrollCollapse: true,
        fixedColumns: true,
        fixedHeader: true,
        responsive: true,
        scrollX: true,
        processing: true, //Feature control the processing indicator.
        serverSide: true, //Feature control DataTables' server-side processing mode.
        autoWidth: false,
        order: [], //Initial no order.

        // Load data for the table's content from an Ajax source
        ajax: {
            url: "jsonEskul",
            type: "POST",
        },
        columns: [{
                data: "id_eskul",
                className: "text-center",
                orderable: false,
            },
            {
                data: "keterangan",
                className: "text-left",
            },
            {
                data: "file",
                className: "text-center",
                render: function(data, type, row) {
                    return '<a href="../frontend/assets/images/eskul/' + data + '" target="_blank"><img src="../frontend/assets/images/eskul/' + data + '" width="75px" height="75px"/></a>';
                }
            },
            {
                data: "id_eskul",
                searchable: true,
                sortable: false,
                className: "text-center",
                render: function(id_eskul, type, full, meta) {
                    return (
                        '<a href="editDataEskul/' + id_eskul  + '" class="btn btn-info btn-sm">Edit</a> | <a href="deleteDataEskul/' + id_eskul  +
                        '" class="btn btn-success btn-sm"> Hapus</a>'
                    );
                },
            },
        ],

        order: [
            [0, "asc"]
        ],
        rowCallback: function(row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            var index = page * length + (iDisplayIndex + 1);
            $("td:eq(0)", row).html(index);
        },

    });
});