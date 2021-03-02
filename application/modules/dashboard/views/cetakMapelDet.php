<html>

<head>
    <title>Laporan Mata Pelajaran</title>
</head>

<body>

    <center>
        <h2>Laporan Mata Pelajaran </h2>
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th class="center">
                No
            </th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Pengajar</th>
            <th>Deskripsi</th>
            <?php
            $no = 1;
            foreach ($mapelDet as $row) {
                ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['mapel'] ; ?></td>
            <td><?= $row['keterangan'] ; ?></td>
            <td><?= $row['nama_lengkap'] ; ?></td>
            <td><?= $row['deskripsi'] ; ?></td>

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