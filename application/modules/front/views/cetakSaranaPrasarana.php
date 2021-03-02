<html>

<head>
    <title>Laporan Data Sarana Prasarana</title>
</head>

<body>

    <center>
        <h2>Sarana Prasarana Report</h2>
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>Keterangan</th>
            <?php
            $no = 1;
            foreach ($sarpra as $row) {
                ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['keterangan'] ; ?></td>
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