<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titles ;?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/css/bootstrap.min.css">
    <style>
    @media print {
        @page {
            margin: 0mm;
            font-size: 8px;
        }
    }
    </style>
</head>
<body onload="window.print();" onafterprint="redirect()">
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-1">
                    <img src="<?= base_url('frontend');?>/assets/images/logo/logo.png" alt="logo.png" style="width:75px;height:75px;">
                </div>
                <div class="col-sm-11" style="margin-left:-150px;">
                    <h2>
                        <center>
                            SMK MUHAMMADIYAH 1 PURBALINGGA
                        </center>
                    </h2>
                </div>
            </div>
            <br>
            <hr style="border:solid;">

            <div class="row text-center">
                <div class="col-sm-12">
                    <h1>SERTIFIKAT</h1>
                </div>
            </div>
            <br><br><br>
            <div class="row text-center">
                <div class="col-sm-2 text-left">
                    Nama
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-9">
                    <b><?= $cekNilai[0]['nama_lengkap'] ;?></b>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-2 text-left">
                    Alamat
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-9">
                    <span><?= $cekNilai[0]['alamat'] ;?></span>
                </div>
            </div>

            <br><br>
            <div class="row text-center">
                <div class="col-sm-12">
                    <span>Dengan Nilai : <b><?= $cekNilai[0]['nilai'] ;?> </b>
                    <br>
                    dengan Predikat</span>
                    <br><br>
                    <h1><?php
                    if($cekNilai[0]['nilai']>0 && $cekNilai[0]['nilai']<40){
                        echo '<font color:red>Kurang Memuaskan</font>';
                    } else if($cekNilai[0]['nilai']>=40 && $cekNilai[0]['nilai']<60){
                        echo '<font color:black>Memuaskan</font>';
                    }else{
                        echo '<font color:green>Sangat Memuaskan</font>';
                    }
                    ;?></h1>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function redirect(){
    window.location.href = "../../listcustomer";
}
</script>
</html>