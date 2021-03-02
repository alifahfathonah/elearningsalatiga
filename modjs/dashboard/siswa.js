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

    $("#tableSiswa").DataTable({
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
            url: "jsonSiswa",
            type: "POST",
        },
        columns: [{
                data: "id_siswa",
                className: "text-center",
                orderable: false,
            },
            {
                data: "nis",
                className: "text-center",
            },
            {
                data: "nama_lengkap",
                className: "text-center",
            },
            {
                data: "keterangan",
                className: "text-center",
            },
            {
                data: "jenis_kelamin",
                className: "text-center",
            },
            {
                data: "blokir",
                className: "text-center",
            },
            {
                data: "id_siswa",
                searchable: true,
                sortable: false,
                className: "text-center",
                render: function(id_siswa, type, full, meta) {
                    return (
                        '<a href="editDataSiswa/' + id_siswa + '" class="btn btn-info btn-sm">Edit</a> | <a href="viewDetailDataSiswa/' + id_siswa +
                        '" class="btn btn-success btn-sm"> Detail</a>'
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