<html>

<head>
    <title>Laporan Mitra BKK</title>
</head>

<body>

    <center>
        <h2>Mitra BKK Report</h2>
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>Nama Mitra</th>
            <?php
            $no = 1;
            foreach ($mitrabkk as $row) {
                ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['nama_mitra'] ; ?></td>
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