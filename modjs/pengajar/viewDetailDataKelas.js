let getKelas = document.getElementById('id_kelas').value;
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

    $("#tableSiswaDet").DataTable({
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
            url: "jsonSiswa/" + getKelas,
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
                data: "alamat",
                className: "text-center",
            },
            {
                data: "tempat_lahir",
                className: "text-center",
            },
            {
                data: "tgl_lahir",
                className: "text-center",
                render: function(data, type, full) {
                    return moment(data).format("DD MMMM YYYY");
                },
            },
            {
                data: "jenis_kelamin",
                className: "text-center",
            },
            {
                data: "nama_agama",
                className: "text-center",
            },
            {
                data: "nama_ayah",
                className: "text-center",
            },
            {
                data: "nama_ibu",
                className: "text-center",
            },
            {
                data: "th_masuk",
                className: "text-center",
            },
            {
                data: "email",
                className: "text-center",
            },
            {
                data: "no_telp",
                className: "text-center",
            },
            {
                data: "foto",
                className: "text-center",
                render: function(data, type, full) {
                    return '<img src="../frontend/assets/images/users/siswa/' +
                        data + '" style="width:75px;heigth:75px;">';
                },
            },
            {
                data: "id_siswa",
                searchable: true,
                sortable: false,
                className: "text-center",
                render: function(id_siswa, type, full, meta) {
                    return (
                        '<a href="viewDetailDataSiswa/' + id_siswa +
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