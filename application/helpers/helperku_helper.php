<?php

function set_zone()
{
    return date_default_timezone_set("Asia/Jakarta");
}

function tgl_indo($tgl)
{
    $tanggal = substr($tgl, 8, 2);
    $bulan = getBulan(substr($tgl, 5, 2));
    $tahun = substr($tgl, 0, 4);
    return $tanggal . ' ' . $bulan . ' ' . $tahun;
}

function tgl_simpan($tgl)
{
    $tanggal = substr($tgl, 0, 2);
    $bulan = substr($tgl, 3, 2);
    $tahun = substr($tgl, 6, 4);
    return $tahun . '-' . $bulan . '-' . $tanggal;
}

function hari_ini($w)
{
    $seminggu = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    $hari_ini = $seminggu[$w];
    return $hari_ini;
}

function getBulan($bln)
{
    switch ($bln) {
        case 1:
            return "January";
            break;
        case 2:
            return "February";
            break;
        case 3:
            return "March";
            break;
        case 4:
            return "April";
            break;
        case 5:
            return "May";
            break;
        case 6:
            return "June";
            break;
        case 7:
            return "July";
            break;
        case 8:
            return "August";
            break;
        case 9:
            return "September";
            break;
        case 10:
            return "October";
            break;
        case 11:
            return "November";
            break;
        case 12:
            return "December";
            break;
    }
}

function getConvertBulan($bln)
{
    switch ($bln) {
        case "January":
            return 1;
            break;
        case "February":
            return 2;
            break;
        case "March":
            return 3;
            break;
        case "April":
            return 4;
            break;
        case "May":
            return 5;
            break;
        case "June":
            return 6;
            break;
        case "July":
            return 7;
            break;
        case "August":
            return 8;
            break;
        case "September":
            return 9;
            break;
        case "October":
            return 10;
            break;
        case "November":
            return 11;
            break;
        case "December":
            return 12;
            break;
    }
}

function getConvertHari()
{
    $tanggal = date('Y-m-d');
    $hari   = date('l', microtime($tanggal));
    switch ($hari) {
        case "Monday":
            return 'Senin';
            break;
        case "Tuesday":
            return 'Selasa';
            break;
        case "Wednesday":
            return 'Rabu';
            break;
        case "Thursday":
            return 'Kamis';
            break;
        case "Friday":
            return 'Jumat';
            break;
        case "Saturday":
            return 'Sabtu';
            break;
    }
}

function salam()
{
    //ubah timezone menjadi jakarta
    date_default_timezone_set("Asia/Jakarta");

    //ambil jam dan menit
    $jam = date('H:i');

    //atur salam menggunakan IF
    if ($jam > '05:01' && $jam < '10:00') {
        $salam = 'Pagi';
    } elseif ($jam >= '10:00' && $jam < '15:00') {
        $salam = 'Siang';
    } elseif ($jam >= '15:00' && $jam < '18:00') {
        $salam = 'Sore';
    } else {
        $salam = 'Malam';
    }
    return $salam;
}

function now()
{
    set_zone();
    return date('Y:m:d H:i:s');
}
