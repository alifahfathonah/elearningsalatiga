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
            <th>Photo</th>
            <?php
            $no = 1;
            foreach ($eskul as $row) {
                ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['keterangan'] ; ?></td>
            <td><img src="<?= base_url('frontend');?>/assets/images/eskul/<?= $row['file']; ?>" alt="<?= $row['file']; ?>" style="width:120px;heigth:120px;"></td>
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