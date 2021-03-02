<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-14 08:34:13 --> Severity: Notice --> Undefined index: nama_Item D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 303
ERROR - 2020-10-14 08:50:04 --> Query error: Unknown column 'kd_item' in 'where clause' - Invalid query: SELECT *
FROM `tbl_item`
WHERE `kd_item` = '000005'
 LIMIT 1
ERROR - 2020-10-14 08:50:51 --> Query error: Unknown column 'kd_item' in 'where clause' - Invalid query: SELECT *
FROM `tbl_item`
WHERE `kd_item` = '000005'
 LIMIT 1
ERROR - 2020-10-14 03:51:18 --> Severity: error --> Exception: syntax error, unexpected 'alert' (T_STRING), expecting ')' D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 235
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:52:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' OR  LIKE '%ac%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:52:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:52:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:52:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%'' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:52:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:52:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:52:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' OR  LIKE '%5%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:52:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:52:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' OR  LIKE '%50%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:52:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 03:52:59 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:53:22 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:53:23 --> 404 Page Not Found: /index
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:53:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' OR  LIKE '%12%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:53:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:53:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:53:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:53:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 03:54:20 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:54:20 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:54:23 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:54:24 --> 404 Page Not Found: /index
ERROR - 2020-10-14 08:54:25 --> Severity: Notice --> Undefined index: id_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:25 --> Severity: Notice --> Undefined index: nama_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:25 --> Severity: Notice --> Undefined index: alamat_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:25 --> Severity: Notice --> Undefined index: kota_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:25 --> Severity: Notice --> Undefined index: provinsi_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:25 --> Severity: Notice --> Undefined index: kodepos_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:25 --> Severity: Notice --> Undefined index: negara_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:25 --> Severity: Notice --> Undefined index: cp D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:25 --> Severity: Notice --> Undefined index: status_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE ' at line 4 - Invalid query: SELECT *
FROM `tbl_supplier`
WHERE `status_supplier` = '1'
AND ( LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' )
ORDER BY `id_supplier` ASC
 LIMIT 10
ERROR - 2020-10-14 08:54:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:54:31 --> Severity: Notice --> Undefined index: id_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:31 --> Severity: Notice --> Undefined index: nama_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:31 --> Severity: Notice --> Undefined index: alamat_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:31 --> Severity: Notice --> Undefined index: kota_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:31 --> Severity: Notice --> Undefined index: provinsi_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:31 --> Severity: Notice --> Undefined index: kodepos_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:31 --> Severity: Notice --> Undefined index: negara_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:31 --> Severity: Notice --> Undefined index: cp D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:31 --> Severity: Notice --> Undefined index: status_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  ' at line 4 - Invalid query: SELECT *
FROM `tbl_supplier`
WHERE `status_supplier` = '1'
AND ( LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' )
ORDER BY `id_supplier` ASC
 LIMIT 10
ERROR - 2020-10-14 08:54:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:54:32 --> Severity: Notice --> Undefined index: id_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:32 --> Severity: Notice --> Undefined index: nama_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:32 --> Severity: Notice --> Undefined index: alamat_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:32 --> Severity: Notice --> Undefined index: kota_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:32 --> Severity: Notice --> Undefined index: provinsi_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:32 --> Severity: Notice --> Undefined index: kodepos_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:32 --> Severity: Notice --> Undefined index: negara_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:32 --> Severity: Notice --> Undefined index: cp D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:32 --> Severity: Notice --> Undefined index: status_supplier D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:54:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%tes%' OR  LIKE '%tes%' OR  LIKE '%tes%' OR  LIKE '%tes%' OR  LIKE '%tes%'' at line 4 - Invalid query: SELECT *
FROM `tbl_supplier`
WHERE `status_supplier` = '1'
AND ( LIKE '%tes%' OR  LIKE '%tes%' OR  LIKE '%tes%' OR  LIKE '%tes%' OR  LIKE '%tes%' OR  LIKE '%tes%' OR  LIKE '%tes%' OR  LIKE '%tes%' OR  LIKE '%tes%' )
ORDER BY `id_supplier` ASC
 LIMIT 10
ERROR - 2020-10-14 08:54:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 03:55:53 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:55:53 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:55:59 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:55:59 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:56:14 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:56:14 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:56:17 --> 404 Page Not Found: /index
ERROR - 2020-10-14 03:56:17 --> 404 Page Not Found: /index
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:56:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:56:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%'' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' OR  LIKE '%qwe%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 08:56:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 08:58:18 --> Severity: Notice --> Undefined index: id_kartu D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:58:18 --> Severity: Notice --> Undefined index: nama_kartu D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:58:18 --> Severity: Notice --> Undefined index: charge D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:58:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' )
ORDER BY `id_kartu` ASC
 LIMIT 10' at line 3 - Invalid query: SELECT *
FROM `tbl_kartu`
WHERE ( LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' )
ORDER BY `id_kartu` ASC
 LIMIT 10
ERROR - 2020-10-14 08:58:18 --> Severity: Notice --> Undefined index: id_kartu D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:58:18 --> Severity: Notice --> Undefined index: nama_kartu D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:58:18 --> Severity: Notice --> Undefined index: charge D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 08:58:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' )
ORDER BY `id_kartu` ASC
 LIMIT 10' at line 3 - Invalid query: SELECT *
FROM `tbl_kartu`
WHERE ( LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' )
ORDER BY `id_kartu` ASC
 LIMIT 10
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:00:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:06:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:06:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:10:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:10:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:10:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 04:13:02 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:13:04 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:04 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:04 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:04 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:04 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:04 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:04 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:04 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:04 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:04 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%t%' OR `kode_item` LIKE '%t%' OR `kode_barcode` LIKE '%t%' OR `nama_item`' at line 6 - Invalid query: SELECT `id_item`, `kode_item`, `kode_barcode`, `nama_item`, `jenis_item`, `satuan_item`
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND (`id_item` LIKE '%t%' OR  LIKE '%t%' OR `kode_item` LIKE '%t%' OR `kode_barcode` LIKE '%t%' OR `nama_item` LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:13:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:13:07 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:07 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:07 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:07 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:07 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:07 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:07 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:07 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:07 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:07 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%te%' OR `kode_item` LIKE '%te%' OR `kode_barcode` LIKE '%te%' OR `nama_it' at line 6 - Invalid query: SELECT `id_item`, `kode_item`, `kode_barcode`, `nama_item`, `jenis_item`, `satuan_item`
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND (`id_item` LIKE '%te%' OR  LIKE '%te%' OR `kode_item` LIKE '%te%' OR `kode_barcode` LIKE '%te%' OR `nama_item` LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:13:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:13:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:13:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:13:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%'' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:13:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:13:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:13:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:13:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 04:14:17 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:14:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:14:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:14:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 04:16:11 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:16:11 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:16:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' OR  LIKE '%te%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:16:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:16:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:16:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:16:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:16:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%'' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' OR  LIKE '%000%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:16:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 04:21:49 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:21:50 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:22:59 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:22:59 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:03 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:03 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:13 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:13 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:26 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:26 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:35 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:35 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:38 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:38 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:44 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:44 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:47 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:23:47 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:23:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:23:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:23:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 04:24:45 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:24:45 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:24:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' OR  LIKE '%Te%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:24:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' OR  LIKE '%T%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:24:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:24:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:24:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' OR  LIKE '%00%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:24:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 04:25:22 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:25:22 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:25:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:25:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' OR  LIKE '%qw%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:26:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 04:26:32 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:26:33 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:26:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' OR  LIKE '%a%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:26:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 04:29:53 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:29:55 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:29:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' OR  LIKE '%t%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:29:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 04:30:55 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:30:55 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:30:58 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:30:58 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: nama_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Severity: Notice --> Undefined index: id_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:31:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE ' at line 6 - Invalid query: SELECT *
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND ( LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' OR  LIKE '%q%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 09:31:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 04:47:28 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:47:28 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:47:31 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:47:31 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:47:33 --> Severity: Notice --> Undefined index: id_kartu D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:47:33 --> Severity: Notice --> Undefined index: nama_kartu D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:47:33 --> Severity: Notice --> Undefined index: charge D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:47:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%b%' OR  LIKE '%b%' OR  LIKE '%b%' )
ORDER BY `id_kartu` ASC
 LIMIT 10' at line 3 - Invalid query: SELECT *
FROM `tbl_kartu`
WHERE ( LIKE '%b%' OR  LIKE '%b%' OR  LIKE '%b%' )
ORDER BY `id_kartu` ASC
 LIMIT 10
ERROR - 2020-10-14 04:49:22 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:49:22 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:49:54 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:49:55 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:49:55 --> Severity: Notice --> Undefined index: id_kartu D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:49:55 --> Severity: Notice --> Undefined index: nama_kartu D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:49:55 --> Severity: Notice --> Undefined index: charge D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:49:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%b%' OR  LIKE '%b%' OR  LIKE '%b%' )
ORDER BY `id_kartu` ASC
 LIMIT 10' at line 3 - Invalid query: SELECT *
FROM `tbl_kartu`
WHERE ( LIKE '%b%' OR  LIKE '%b%' OR  LIKE '%b%' )
ORDER BY `id_kartu` ASC
 LIMIT 10
ERROR - 2020-10-14 09:50:45 --> Severity: Notice --> Undefined index: nama_kartu D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:50:45 --> Severity: Notice --> Undefined index: charge D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 09:50:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%bc%' OR  LIKE '%bc%' )
ORDER BY `id_kartu` ASC
 LIMIT 10' at line 3 - Invalid query: SELECT `id_kartu`, `nama_`
FROM `tbl_kartu`
WHERE (`id_kartu` LIKE '%bc%' OR  LIKE '%bc%' OR  LIKE '%bc%' )
ORDER BY `id_kartu` ASC
 LIMIT 10
ERROR - 2020-10-14 09:50:46 --> Query error: Unknown column 'nama_' in 'field list' - Invalid query: SELECT `id_kartu`, `nama_`
FROM `tbl_kartu`
ORDER BY `id_kartu` ASC
 LIMIT 10
ERROR - 2020-10-14 04:50:46 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:50:47 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:50:58 --> 404 Page Not Found: /index
ERROR - 2020-10-14 04:50:58 --> 404 Page Not Found: /index
ERROR - 2020-10-14 09:52:56 --> Severity: error --> Exception: Too few arguments to function Dashboard_model::jsonWhere(), 3 passed in D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php on line 584 and exactly 4 expected D:\xampp\htdocs\djawipos\application\modules\dashboard\models\Dashboard_model.php 67
ERROR - 2020-10-14 09:56:04 --> Severity: error --> Exception: Too few arguments to function Dashboard_model::jsonWhere(), 3 passed in D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php on line 710 and exactly 4 expected D:\xampp\htdocs\djawipos\application\modules\dashboard\models\Dashboard_model.php 67
ERROR - 2020-10-14 09:57:35 --> Severity: error --> Exception: Too few arguments to function Dashboard_model::jsonWhere(), 3 passed in D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php on line 830 and exactly 4 expected D:\xampp\htdocs\djawipos\application\modules\dashboard\models\Dashboard_model.php 67
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR `nama_item` LIKE '%0%' OR  LIKE '%0%' at line 6 - Invalid query: SELECT *, `id_item`, `nama_item`
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND (`id_item` LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR `nama_item` LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR `id_item` LIKE '%0%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 10:01:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:01:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR `nama_item` LIKE '%1%' OR  LIKE '%1%' at line 6 - Invalid query: SELECT *, `tbl_item`.`id_item`, `nama_item`
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND (`tbl_item`.`id_item` LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR `nama_item` LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR  LIKE '%1%' OR `tbl_item`.`id_item` LIKE '%1%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 10:01:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:02:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR `nama_item` LIKE '%0%' OR  LIKE '%0%' at line 6 - Invalid query: SELECT *, `tbl_item`.`id_item` AS `id_item`, `nama_item`
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND (`tbl_item`.`id_item` LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR `nama_item` LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR `tbl_item`.`id_item` LIKE '%0%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 10:02:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: photo D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: kode_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: kode_barcode D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: nama_jenis D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: nama_satuan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: harga_pokok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: harga_jual D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: stok D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: stok_minimal D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: diskon D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: keterangan D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Severity: Notice --> Undefined index: status_item D:\xampp\htdocs\djawipos\application\libraries\Datatables.php 301
ERROR - 2020-10-14 10:03:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR `tbl_item`.`nama_item` LIKE '%0%' OR' at line 6 - Invalid query: SELECT *, `tbl_item`.`id_item` AS `id_item`, `tbl_item`.`nama_item`
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
AND (`tbl_item`.`id_item` LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR `tbl_item`.`nama_item` LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR  LIKE '%0%' OR `tbl_item`.`id_item` LIKE '%0%' )
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 10:03:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\djawipos\engines\core\Exceptions.php:271) D:\xampp\htdocs\djawipos\engines\core\Common.php 570
ERROR - 2020-10-14 05:03:58 --> 404 Page Not Found: /index
<<<<<<< HEAD
ERROR - 2020-10-14 05:10:18 --> 404 Page Not Found: /index
ERROR - 2020-10-14 05:10:19 --> 404 Page Not Found: /index
ERROR - 2020-10-14 05:10:24 --> Severity: error --> Exception: Too few arguments to function Dashboard_model::json(), 1 passed in D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php on line 166 and exactly 2 expected D:\xampp\htdocs\djawipos\application\modules\dashboard\models\Dashboard_model.php 59
ERROR - 2020-10-14 05:16:16 --> 404 Page Not Found: ../modules/master/controllers/Master/frontend
ERROR - 2020-10-14 10:17:05 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ';' or ',' D:\xampp\htdocs\djawipos\application\modules\master\views\v_editItem.php 272
ERROR - 2020-10-14 05:17:05 --> 404 Page Not Found: ../modules/master/controllers/Master/frontend
ERROR - 2020-10-14 05:17:13 --> 404 Page Not Found: ../modules/master/controllers/Master/frontend
ERROR - 2020-10-14 05:18:28 --> 404 Page Not Found: ../modules/master/controllers/Master/frontend
ERROR - 2020-10-14 05:44:13 --> 404 Page Not Found: ../modules/master/controllers/Master/diskonPel
ERROR - 2020-10-14 05:44:26 --> 404 Page Not Found: ../modules/master/controllers/Master/diskonPel
=======
ERROR - 2020-10-14 20:37:12 --> Query error: Unknown column 'tbl_item.photo' in 'field list' - Invalid query: SELECT `tbl_item`.`id_item` AS `id_item`, `tbl_item`.`kode_item` AS `kode_item`, `tbl_item`.`kode_barcode` AS `kode_barcode`, `tbl_item`.`photo` AS `photo`, `tbl_item`.`supplier` AS `supplier`, `tbl_item`.`nama_item` AS `nama_item`, `tbl_item`.`jenis_item` AS `jenis_item`, `tbl_jenis`.`nama_jenis` AS `nama_jenis`, `tbl_satuan`.`nama_satuan` AS `nama_satuan`, `tbl_item`.`satuan_item` AS `satuan_item`, `tbl_item`.`harga_pokok` AS `harga_pokok`, `tbl_item`.`harga_jual` AS `harga_jual`, `tbl_item`.`stok` AS `stok`, `tbl_item`.`stok_minimal` AS `stok_minimal`, `tbl_item`.`diskon` AS `diskon`, `tbl_item`.`tgl_exp` AS `tgl_exp`, `tbl_item`.`keterangan` AS `keterangan`, `tbl_item`.`status_item` AS `status_item`
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 20:37:20 --> Query error: Unknown column 'tbl_item.photo' in 'field list' - Invalid query: SELECT `tbl_item`.`id_item` AS `id_item`, `tbl_item`.`kode_item` AS `kode_item`, `tbl_item`.`kode_barcode` AS `kode_barcode`, `tbl_item`.`photo` AS `photo`, `tbl_item`.`supplier` AS `supplier`, `tbl_item`.`nama_item` AS `nama_item`, `tbl_item`.`jenis_item` AS `jenis_item`, `tbl_jenis`.`nama_jenis` AS `nama_jenis`, `tbl_satuan`.`nama_satuan` AS `nama_satuan`, `tbl_item`.`satuan_item` AS `satuan_item`, `tbl_item`.`harga_pokok` AS `harga_pokok`, `tbl_item`.`harga_jual` AS `harga_jual`, `tbl_item`.`stok` AS `stok`, `tbl_item`.`stok_minimal` AS `stok_minimal`, `tbl_item`.`diskon` AS `diskon`, `tbl_item`.`tgl_exp` AS `tgl_exp`, `tbl_item`.`keterangan` AS `keterangan`, `tbl_item`.`status_item` AS `status_item`
FROM `tbl_item`
LEFT JOIN `tbl_jenis` ON `tbl_item`.`jenis_item`=`tbl_jenis`.`id_jenis`
LEFT JOIN `tbl_satuan` ON `tbl_item`.`satuan_item`=`tbl_satuan`.`id_satuan`
WHERE `tbl_item`.`status_item` = '1'
ORDER BY `id_item` ASC
 LIMIT 10
ERROR - 2020-10-14 15:38:32 --> 404 Page Not Found: ../modules/master/controllers/Master/diskonPel
ERROR - 2020-10-14 15:38:41 --> 404 Page Not Found: /index
ERROR - 2020-10-14 15:38:41 --> 404 Page Not Found: /index
ERROR - 2020-10-14 15:38:49 --> 404 Page Not Found: /index
ERROR - 2020-10-14 15:38:50 --> 404 Page Not Found: /index
ERROR - 2020-10-14 15:38:51 --> 404 Page Not Found: /index
ERROR - 2020-10-14 15:38:51 --> 404 Page Not Found: /index
ERROR - 2020-10-14 15:38:53 --> 404 Page Not Found: /index
ERROR - 2020-10-14 15:38:53 --> 404 Page Not Found: /index
ERROR - 2020-10-14 20:42:39 --> Query error: Table 'djawiposlite.tbl_setting' doesn't exist - Invalid query: SELECT *
FROM `tbl_setting`
ERROR - 2020-10-14 16:05:39 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:05:39 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:06:16 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:06:16 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:06:17 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:06:17 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:06:26 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:06:26 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:06:29 --> 404 Page Not Found: ../modules/pemdata/controllers/Pemdata/setting
ERROR - 2020-10-14 16:07:49 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:07:50 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:07:50 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:07:51 --> 404 Page Not Found: /index
ERROR - 2020-10-14 21:08:18 --> Severity: error --> Exception: Too few arguments to function Dashboard_model::jsonWhere(), 3 passed in D:\xampp\htdocs\djawiposlite\application\modules\master\controllers\Master.php on line 495 and exactly 4 expected D:\xampp\htdocs\djawiposlite\application\modules\dashboard\models\Dashboard_model.php 67
ERROR - 2020-10-14 21:08:26 --> Severity: error --> Exception: Too few arguments to function Dashboard_model::jsonWhere(), 3 passed in D:\xampp\htdocs\djawiposlite\application\modules\master\controllers\Master.php on line 495 and exactly 4 expected D:\xampp\htdocs\djawiposlite\application\modules\dashboard\models\Dashboard_model.php 67
ERROR - 2020-10-14 21:09:32 --> Severity: Notice --> Undefined variable: dtsatuan D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:09:32 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:09:32 --> Severity: error --> Exception: Too few arguments to function Dashboard_model::jsonWhere(), 3 passed in D:\xampp\htdocs\djawiposlite\application\modules\master\controllers\Master.php on line 393 and exactly 4 expected D:\xampp\htdocs\djawiposlite\application\modules\dashboard\models\Dashboard_model.php 67
ERROR - 2020-10-14 16:12:38 --> 404 Page Not Found: ../modules/master/controllers/Master/index.html
ERROR - 2020-10-14 16:20:06 --> 404 Page Not Found: ../modules/master/controllers/Master/dataJenis
ERROR - 2020-10-14 21:22:54 --> Query error: Table 'djawiposlite.kode_jenis' doesn't exist - Invalid query: SELECT `id_jenis`
FROM `kode_jenis`
WHERE `nama_jenis` = 'status_jenis'
ORDER BY `id_jenis` ASC
 LIMIT 10
ERROR - 2020-10-14 21:23:26 --> Query error: Table 'djawiposlite.kode_jenis' doesn't exist - Invalid query: SELECT `id_jenis`
FROM `kode_jenis`
WHERE `nama_jenis` = 'tbl_jenis'
ORDER BY `id_jenis` ASC
 LIMIT 10
ERROR - 2020-10-14 21:23:36 --> Query error: Table 'djawiposlite.kode_jenis' doesn't exist - Invalid query: SELECT `id_jenis`
FROM `kode_jenis`
WHERE `nama_jenis` = 'tbl_jenis'
ORDER BY `id_jenis` ASC
 LIMIT 10
ERROR - 2020-10-14 21:23:55 --> Query error: Table 'djawiposlite.kode_jenis' doesn't exist - Invalid query: SELECT `id_jenis`
FROM `kode_jenis`
WHERE `nama_jenis` = 'tbl_jenis'
ORDER BY `id_jenis` ASC
 LIMIT 10
ERROR - 2020-10-14 21:24:37 --> Query error: Table 'djawiposlite.kode_jenis' doesn't exist - Invalid query: SELECT `id_jenis`
FROM `kode_jenis`
WHERE `nama_jenis` = 'status_jenis'
ORDER BY `id_jenis` ASC
 LIMIT 10
ERROR - 2020-10-14 21:24:48 --> Query error: Table 'djawiposlite.kode_jenis' doesn't exist - Invalid query: SELECT `id_jenis`
FROM `kode_jenis`
WHERE `nama_jenis` = 'status_jenis'
ORDER BY `id_jenis` ASC
 LIMIT 10
ERROR - 2020-10-14 21:29:51 --> Severity: Notice --> Undefined variable: dtsatuan D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:29:51 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:29:51 --> Severity: error --> Exception: Too few arguments to function Dashboard_model::jsonWhere(), 3 passed in D:\xampp\htdocs\djawiposlite\application\modules\master\controllers\Master.php on line 393 and exactly 4 expected D:\xampp\htdocs\djawiposlite\application\modules\dashboard\models\Dashboard_model.php 67
ERROR - 2020-10-14 21:30:00 --> Severity: Notice --> Undefined variable: dtsatuan D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:30:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:30:00 --> Severity: error --> Exception: Too few arguments to function Dashboard_model::jsonWhere(), 3 passed in D:\xampp\htdocs\djawiposlite\application\modules\master\controllers\Master.php on line 393 and exactly 4 expected D:\xampp\htdocs\djawiposlite\application\modules\dashboard\models\Dashboard_model.php 67
ERROR - 2020-10-14 21:30:50 --> Severity: Notice --> Undefined variable: dtsatuan D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:30:50 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:30:50 --> Severity: error --> Exception: Too few arguments to function Dashboard_model::jsonWhere(), 3 passed in D:\xampp\htdocs\djawiposlite\application\modules\master\controllers\Master.php on line 393 and exactly 4 expected D:\xampp\htdocs\djawiposlite\application\modules\dashboard\models\Dashboard_model.php 67
ERROR - 2020-10-14 21:33:44 --> Severity: Notice --> Undefined variable: dtsatuan D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:33:44 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:33:44 --> Query error: Unknown column 'id_statuan' in 'field list' - Invalid query: SELECT `id_statuan`, `nama_satuan`, `status_satuan`
FROM `tbl_satuan`
WHERE `status_satuan` = '1'
ORDER BY `id_satuan` ASC
 LIMIT 10
ERROR - 2020-10-14 21:33:49 --> Severity: Notice --> Undefined variable: dtsatuan D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:33:49 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:33:50 --> Query error: Unknown column 'id_statuan' in 'field list' - Invalid query: SELECT `id_statuan`, `nama_satuan`, `status_satuan`
FROM `tbl_satuan`
WHERE `status_satuan` = '1'
ORDER BY `id_satuan` ASC
 LIMIT 10
ERROR - 2020-10-14 21:34:16 --> Severity: Notice --> Undefined variable: dtsatuan D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:34:16 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:36:54 --> Severity: Notice --> Undefined variable: satuan D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:36:54 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:37:04 --> Severity: Notice --> Undefined variable: dtsatuan D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:37:04 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 16:41:55 --> 404 Page Not Found: /index
ERROR - 2020-10-14 21:42:04 --> Severity: Notice --> Undefined variable: dtsatuan D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 21:42:04 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\djawiposlite\application\modules\master\views\v_Satuan.php 132
ERROR - 2020-10-14 16:42:05 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:42:05 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:50:08 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:50:08 --> 404 Page Not Found: /index
ERROR - 2020-10-14 16:51:01 --> 404 Page Not Found: ../modules/master/controllers/Master/diskonPel
>>>>>>> 6f1bc162c210f0d2b3a0e0dae0c52a4a9f514b28
ERROR - 2020-10-14 17:42:55 --> 404 Page Not Found: /index
ERROR - 2020-10-14 17:43:24 --> 404 Page Not Found: ../modules/master/controllers/Master/frontend
ERROR - 2020-10-14 17:43:50 --> 404 Page Not Found: ../modules/master/controllers/Master/frontend
ERROR - 2020-10-14 17:46:37 --> 404 Page Not Found: ../modules/master/controllers/Master/deleteDataItem6
ERROR - 2020-10-14 17:47:09 --> 404 Page Not Found: ../modules/master/controllers/Master/deleteDataItem6
ERROR - 2020-10-14 17:47:39 --> 404 Page Not Found: ../modules/master/controllers/Master/deleteDataItem6
ERROR - 2020-10-14 17:48:54 --> 404 Page Not Found: ../modules/master/controllers/Master/deleteDataItem
ERROR - 2020-10-14 17:51:57 --> 404 Page Not Found: ../modules/master/controllers/Master/dataItem
ERROR - 2020-10-14 17:53:34 --> 404 Page Not Found: ../modules/master/controllers/Master/dataItem
ERROR - 2020-10-14 22:56:00 --> Severity: error --> Exception: Too few arguments to function Master::deleteDataitem(), 0 passed in D:\xampp\htdocs\djawipos\engines\core\CodeIgniter.php on line 532 and exactly 1 expected D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 352
ERROR - 2020-10-14 22:56:09 --> Severity: error --> Exception: Too few arguments to function Master::deleteDataitem(), 0 passed in D:\xampp\htdocs\djawipos\engines\core\CodeIgniter.php on line 532 and exactly 1 expected D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 352
ERROR - 2020-10-14 22:56:11 --> Severity: error --> Exception: Too few arguments to function Master::deleteDataitem(), 0 passed in D:\xampp\htdocs\djawipos\engines\core\CodeIgniter.php on line 532 and exactly 1 expected D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 352
ERROR - 2020-10-14 22:57:02 --> Severity: error --> Exception: Too few arguments to function Master::deleteDataitem(), 0 passed in D:\xampp\htdocs\djawipos\engines\core\CodeIgniter.php on line 532 and exactly 1 expected D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 352
ERROR - 2020-10-14 17:57:06 --> 404 Page Not Found: ../modules/master/controllers/Master/dataItem
ERROR - 2020-10-14 17:57:34 --> 404 Page Not Found: ../modules/master/controllers/Master/dataItem
ERROR - 2020-10-14 17:57:36 --> 404 Page Not Found: ../modules/master/controllers/Master/dataItem
ERROR - 2020-10-14 17:57:37 --> 404 Page Not Found: ../modules/master/controllers/Master/dataItem
ERROR - 2020-10-14 23:20:53 --> Severity: error --> Exception: Call to undefined method Toastr::danger() D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 279
ERROR - 2020-10-14 18:21:52 --> 404 Page Not Found: /index
ERROR - 2020-10-14 18:22:00 --> 404 Page Not Found: /index
ERROR - 2020-10-14 18:22:02 --> 404 Page Not Found: /index
ERROR - 2020-10-14 23:25:20 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 18:25:20 --> 404 Page Not Found: /index
ERROR - 2020-10-14 23:25:43 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 18:25:43 --> 404 Page Not Found: /index
ERROR - 2020-10-14 23:27:25 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:31:09 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:31:23 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:31:26 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:31:45 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:31:47 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:31:51 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:32:00 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:32:02 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:32:06 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 18:32:44 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 281
ERROR - 2020-10-14 23:32:46 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 18:33:04 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 281
ERROR - 2020-10-14 18:33:06 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 281
ERROR - 2020-10-14 23:33:18 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:33:45 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:33:48 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:33:56 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:33:58 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:35:30 --> Severity: Notice --> Undefined index: preview_gambar D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 270
ERROR - 2020-10-14 23:35:32 --> Severity: Notice --> Undefined index: preview_gambar D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 270
ERROR - 2020-10-14 23:36:03 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 18:37:35 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 280
ERROR - 2020-10-14 18:37:37 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 280
ERROR - 2020-10-14 23:37:44 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:42:03 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 18:43:13 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC), expecting end of file D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 362
ERROR - 2020-10-14 23:43:29 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:43:49 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:45:30 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:46:29 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:46:50 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:47:14 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:47:16 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:47:18 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:48:24 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:49:25 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:49:51 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:49:55 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:49:57 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:50:11 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:50:12 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:50:19 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:50:24 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:50:29 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 23:51:16 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 18:51:38 --> 404 Page Not Found: /index
ERROR - 2020-10-14 18:51:39 --> 404 Page Not Found: /index
ERROR - 2020-10-14 18:51:51 --> 404 Page Not Found: /index
ERROR - 2020-10-14 18:51:51 --> 404 Page Not Found: /index
ERROR - 2020-10-14 23:52:26 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 18:54:09 --> 404 Page Not Found: /index
ERROR - 2020-10-14 18:54:09 --> 404 Page Not Found: /index
ERROR - 2020-10-14 18:54:14 --> 404 Page Not Found: /index
ERROR - 2020-10-14 18:54:14 --> 404 Page Not Found: /index
ERROR - 2020-10-14 23:54:29 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 18:58:00 --> 404 Page Not Found: /index
ERROR - 2020-10-14 18:58:01 --> 404 Page Not Found: /index
ERROR - 2020-10-14 18:58:06 --> 404 Page Not Found: /index
ERROR - 2020-10-14 18:58:06 --> 404 Page Not Found: /index
ERROR - 2020-10-14 23:58:27 --> The upload path does not appear to be valid.
ERROR - 2020-10-14 19:01:10 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' D:\xampp\htdocs\djawipos\application\modules\master\controllers\Master.php 276
ERROR - 2020-10-14 19:01:45 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:01:46 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:05:58 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:05:59 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:06:04 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:06:04 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:06:04 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:06:04 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:06:04 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:06:08 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:06:08 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:07:32 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:07:32 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:07:33 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:07:36 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:07:36 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:08:41 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:08:42 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:08:43 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:08:43 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:08:43 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:08:45 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:08:46 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:09:05 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:09:05 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:09:33 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:09:33 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:09:33 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:09:36 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:09:36 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:11:48 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:11:49 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:11:49 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:11:49 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:11:50 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:11:53 --> 404 Page Not Found: /index
ERROR - 2020-10-14 19:11:53 --> 404 Page Not Found: /index
