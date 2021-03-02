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

    let table = $("#tableKelasDet").DataTable({
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
        // fixedColumns: true,
        fixedHeader: true,
        order: [], //Initial no order.

        // Load data for the table's content from an Ajax source
        ajax: {
            url: "jsonKelasDet",
            type: "POST",
        },
        columns: [{
                data: "id_kelas_detail",
                className: "text-center",
                orderable: false,

            },
            {
                data: "nama_kelas",
                className: "text-center",
            },
            {
                data: "nama_guru",
                className: "text-center",
            },
            {
                data: "nama_lengkap",
                className: "text-center",
            },
            {
                data: "id_kelas_detail",
                searchable: true,
                sortable: false,
                className: "text-center",
                render: function(id_kelas_detail, type, full, meta) {
                    return (
                        '<a href="editDataDetailKelas/' + id_kelas_detail + '">Edit</a> | <a href="DeleteDetailDataKelas/' + id_kelas_detail +
                        '"> Hapus</a> | <a href="viewDetailDataKelas"> Lihat</a> <br> <a href="printDataKelas/' + full.id_kelas +
                        '" class="btn btn-outline-dark btn-sm" target="_blank"> Cetak Data Kelas</a>'
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
    table.columns.adjust().draw();
});