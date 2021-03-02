<html>

<head>
    <title>Laporan Data Siswa</title>
</head>

<body>

    <center>
        <h2>Administrator Report</h2>
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Hp</th>
            <th>Email</th>
            <th>Blokir</th>
            <?php
            $no = 1;
            foreach ($admin as $row) {
                ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['username'] ; ?></td>
            <td><?= $row['nama_lengkap'] ; ?></td>
            <td><?= $row['alamat'] ; ?></td>
            <td><?= $row['no_telp'] ; ?></td>
            <td><?= $row['email'] ; ?></td>
            <td><?= $row['blokir'] ; ?></td>
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