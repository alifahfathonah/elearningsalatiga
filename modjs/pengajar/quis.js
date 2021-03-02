// View Datatable Mata Pelajaran
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

    $("#tableQuiz").DataTable({
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
        info: false,
        filter: false,
        scrollX: true,
        paginate: false,
        ordering: false,
        processing: true, //Feature control the processing indicator.
        serverSide: true, //Feature control DataTables' server-side processing mode.
        autoWidth: false,
        order: [], //Initial no order.

        // Load data for the table's content from an Ajax source
        ajax: {
            url: "jsonQuiz",
            type: "POST",
        },
        columns: [{
                data: "id_tq",
                className: "text-center",
                orderable: false,
            },
            {
                data: "judul",
                className: "text-center",
            },
            {
                data: "nama_kelas",
                className: "text-center",
            },
            {
                data: "mapel",
                className: "text-center",
            },
            {
                data: "tgl_buat",
                className: "text-center",
                render: function(data, type, full) {
                    return moment(data).format("DD MMMM YYYY");
                },
            },
            {
                data: "waktu_mengerjakan",
                className: "text-center",
            },
            {
                data: "info",
                className: "text-center",
            },
            {
                data: "terbit",
                className: "text-center",
            },
            {
                data: "id_tq",
                searchable: true,
                sortable: false,
                className: "text-center",
                render: function(id_tq, type, full, meta) {
                    return (
                        '<a href="editDataTopik/' + id_tq + '">Edit</a> | <a href="deleteDataTopik/' + id_tq +
                        '"> Hapus</a></br><a href="addQuisSoal/' +
                        id_tq + '" class="btn btn-outline-dark">Buat Quis</a></br><a href="viewQuisSoalList/' +
                        id_tq + '" class="btn btn-outline-dark">Daftar Quis</a></br><a href="viewQuisKoreksiSoal/' +
                        id_tq + '" class="btn btn-outline-dark">Koreksi Quis</a></br><a href="printNilai/' +
                        id_tq + '/' +
                        full.id_kelas + '" class="btn btn-outline-dark" target="_blank">Cetak Nilai</a>'
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