<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print Nilai</title>
  <style>
    @page { size: auto;  margin: 0mm; }
    table {
      border-collapse: collapse;
    }

    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td, #customers td {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers t {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }
	</style>
</head>
<body>
<center>
  Laporan Nilai
</center>
<br><br><br>
<center>
  <table id="customer" border="1">
    <thead>
      <tr>
        <td>No</td>
        <td>Nama Siswa</td>
        <td>Mata Pelajaran</td>
        <td>Jawaban Benar</td>
        <td>Jawaban Salah</td>
        <td>Jawaban nilai</td>
      </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach ($cekTopik as $row) {
        ; ?>
    <tr>
      <td><?= $no++ ; ?></td>
      <td><?= $row['nama_lengkap'] ; ?></td>
      <td><?= $row['judul'] ; ?></td>
      <td><?= $row['jml_benar'] ; ?></td>
      <td><?= $row['jml_salah'] ; ?></td>
      <td><?= $row['nilai'] ; ?></td>
    </tr>
    <?php
    }
    ;?>
    </tbody>
  </table>
</center>
  
</body>
</html>