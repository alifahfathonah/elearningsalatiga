<html>

<head>
    <title>Laporan Data Kelas</title>
</head>

<body>

    <center>
        <h2>Laporan Data Kelas </h2>
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>Nama Kelas</th>
            <th>Guru</th>
            <th>Ketua Kelas</th>
            <?php
            $no = 1;
            foreach ($kelasDet as $row) {
                ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['nama_kelas'] ; ?></td>
            <td><?= $row['nama_guru'] ; ?></td>
            <td><?= $row['nama_lengkap'] ; ?></td>

        </tr>
    <?php
                $no++;
            };
    ?>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>