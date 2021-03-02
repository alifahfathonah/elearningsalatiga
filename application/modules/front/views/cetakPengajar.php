<html>

<head>
    <title>Laporan Data Pengajar</title>
</head>

<body>

    <center>
        <h2>Siswa Report</h2>
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tgl Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Email</th>
            <th>Nomor Hp</th>
            <th>Foto</th>
            <th>Blokir</th>
            <?php
            $no = 1;
            foreach ($siswa as $row) {
                ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['nip'] ; ?></td>
            <td><?= $row['nama_lengkap'] ; ?></td>
            <td><?= $row['username_login'] ; ?></td>
            <td><?= $row['alamat'] ; ?></td>
            <td><?= $row['tempat_lahir'] ; ?></td>
            <td><?= tgl_indo($row['tgl_lahir']) ; ?></td>
            <td><?= $row['jenis_kelamin'] ; ?></td>
            <td><?= $row['keterangan'] ; ?></td>
            <td><?= $row['email'] ; ?></td>
            <td><?= $row['no_telp'] ; ?></td>
            <td><img src="<?= base_url('frontend'); ?>/assets/images/users/pengajar/<?= $row['foto'] ; ?>" alt="<?= $row['foto'] ; ?>" style="width:75px;heigth:75px;"> </td>
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