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

    $("#tableMateri").DataTable({
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
            url: "pengajar/jsonMateri",
            type: "POST",
        },
        columns: [{
                data: "id_materi",
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
                data: "nama_file",
                className: "text-center",
            },
            {
                data: "tgl_posting",
                className: "text-center",
                // render: function(data, type, full) {
                //     return moment(data).format("DD MMMM YYYY");
                // },
            },
            {
                data: "hits",
                className: "text-center",
                orderable: false,
                render: function(data, type, row) {
                    return data + ' X';
                },
            },
            {
                data: "id_materi",
                searchable: true,
                sortable: false,
                className: "text-center",
                render: function(id_materi, type, full, meta) {
                    return (
                        '<a href="editDataMateri/' + id_materi + '" class="btn btn-info btn-sm">Edit</a> | <a href="deleteDataMateri/' + id_materi +
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