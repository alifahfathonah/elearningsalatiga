<html>

<head>
    <title>Laporan Data Siswa</title>
</head>

<body>

    <center>
        <h2>Laporan Data Siswa Kelas <?= $siswaDet[0]['kelasKeterangan'] ;?></h2>
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tgl Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Tahun Masuk</th>
            <th>Email</th>
            <th>Nomor Hp</th>
            <th>Foto</th>
            <?php
            $no = 1;
            foreach ($siswaDet as $row) {
                ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['nis'] ; ?></td>
            <td><?= $row['nama_lengkap'] ; ?></td>
            <td><?= $row['kelasKeterangan'] ; ?></td>
            <td><?= $row['alamat'] ; ?></td>
            <td><?= $row['tempat_lahir'] ; ?></td>
            <td><?= tgl_indo($row['tgl_lahir']) ; ?></td>
            <td><?= $row['jenis_kelamin'] ; ?></td>
            <td><?= $row['keterangan'] ; ?></td>
            <td><?= $row['nama_ayah'] ; ?></td>
            <td><?= $row['nama_ibu'] ; ?></td>
            <td><?= $row['th_masuk'] ; ?></td>
            <td><?= $row['email'] ; ?></td>
            <td><?= $row['no_telp'] ; ?></td>
            <td><img src="<?= base_url('frontend'); ?>/assets/images/users/siswa/<?= $row['foto'] ; ?>" alt="<?= $row['foto'] ; ?>" style="width:75px;heigth:75px;"> </td>
            
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