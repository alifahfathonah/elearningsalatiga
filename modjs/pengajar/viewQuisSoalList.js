// Ambil ID Uri Segment 4
let pageURL = window.location.href;
let lastURLSegment = pageURL.substr(pageURL.lastIndexOf('/') + 1);

// View Datatable Kelas
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

    let table = $("#tableQuisList").DataTable({
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
        info: false,
        filter: false,
        paginate: false,
        ordering: false,
        processing: true, //Feature control the processing indicator.
        serverSide: true, //Feature control DataTables' server-side processing mode.
        autoWidth: false,
        // fixedColumns: true,
        fixedHeader: true,
        order: [], //Initial no order.

        // Load data for the table's content from an Ajax source
        ajax: {
            url: "../jsonQuisList/" + lastURLSegment,
            type: "POST",
        },
        columns: [{
                data: "id_soal",
                className: "text-center",
                orderable: false,
            },
            {
                data: "soal",
                className: "text-center",
            },
            {
                data: "pilihan_1",
                className: "text-center",
            },
            {
                data: "pilihan_2",
                className: "text-center",
            },
            {
                data: "pilihan_3",
                className: "text-center",
            },
            {
                data: "pilihan_4",
                className: "text-center",
            },
            {
                data: "pilihan_5",
                className: "text-center",
            },
            {
                data: "jawaban",
                className: "text-center",
                render: function(data, type, row) {
                    if (data === 1) {
                        return 'A';
                    } else if (data === '2') {
                        return 'B';
                    } else if (data === '3') {
                        return 'C';
                    } else if (data === '4') {
                        return 'D';
                    } else {
                        return 'E';
                    }
                },
            },
            {
                data: "id_soal",
                searchable: true,
                sortable: false,
                className: "text-center",
                render: function(id_soal, type, full, meta) {
                    return (
                        '<a href="../editDataSoal/' + id_soal + '">Edit</a> | <a href="deleteDataSoal/' +
                        id_soal + '"> Hapus</a>'
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