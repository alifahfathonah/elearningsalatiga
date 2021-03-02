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

    $("#tableBursa").DataTable({
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
            url: "jsonBursa",
            type: "POST",
        },
        columns: [{
                data: "id_bursa",
                className: "text-center",
                orderable: false,
            },
            {
                data: "keterangan",
                className: "text-left",
            },
            {
                data: "id_bursa_pic",
                sortable: false,
                className: "text-center",
                render: function(id_bursa_pic, type, full, meta) {
                    return (
                        '<a href="viewBursaPic/' + id_bursa_pic  + '" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Detail</a>'
                    );
                },
            },
            {
                data: "id_bursa",
                sortable: false,
                className: "text-center",
                render: function(id_bursa, type, full, meta) {
                    return (
                        '<a href="editDataBursa/' + id_bursa  + '" class="btn btn-info btn-sm">Edit</a>'
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