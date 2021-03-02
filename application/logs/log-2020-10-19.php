<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-19 00:00:17 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:00:17 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:00:17 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:00:17 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:00:17 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:00:17 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:15 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:15 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:15 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:15 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:15 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:15 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:33 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:33 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:33 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:33 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:33 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:08:33 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:10 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:10 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:10 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:10 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:10 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:10 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:10 --> Query error: Unknown column 'id_user' in 'where clause' - Invalid query: SELECT `tbl_detail_order`.`id_detail_order` AS `id_detail_order`, `tbl_detail_order`.`id_item` AS `dettim`, `tbl_detail_order`.`no_order` AS `no_order`, count(tbl_detail_order.qty) AS qty, `tbl_detail_order`.`harga` AS `harga`, `tbl_detail_order`.`diskon` AS `diskon`, sum(tbl_detail_order.total) AS total, `tbl_item`.`nama_item` AS `nama_item`
FROM `tbl_detail_order`
LEFT JOIN `tbl_item` ON `tbl_detail_order`.`id_item`=`tbl_item`.`id_item`
WHERE `tbl_detail_order`.`no_order` = 'PO00000004'
AND `tbl_detail_order`.`status_transaksi` =0
AND `id_user` = '1'
GROUP BY `tbl_detail_order`.`no_order`, `tbl_detail_order`.`id_item`
ERROR - 2020-10-19 00:09:16 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:16 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:09:16 --> Query error: Unknown column 'id_user' in 'where clause' - Invalid query: SELECT `tbl_detail_order`.`id_detail_order` AS `id_detail_order`, `tbl_detail_order`.`id_item` AS `dettim`, `tbl_detail_order`.`no_order` AS `no_order`, count(tbl_detail_order.qty) AS qty, `tbl_detail_order`.`harga` AS `harga`, `tbl_detail_order`.`diskon` AS `diskon`, sum(tbl_detail_order.total) AS total, `tbl_item`.`nama_item` AS `nama_item`
FROM `tbl_detail_order`
LEFT JOIN `tbl_item` ON `tbl_detail_order`.`id_item`=`tbl_item`.`id_item`
WHERE `tbl_detail_order`.`no_order` = 'PO00000004'
AND `tbl_detail_order`.`status_transaksi` =0
AND `id_user` IS NULL
GROUP BY `tbl_detail_order`.`no_order`, `tbl_detail_order`.`id_item`
ERROR - 2020-10-19 00:12:12 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:12:12 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:12:12 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:12:12 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:12:12 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:12:12 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:13:56 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:13:56 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:13:56 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:13:56 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:13:56 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:13:56 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:00 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:00 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:38 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:38 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:38 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:38 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:38 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:38 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:51 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:51 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:15:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:16:25 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:16:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:16:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:16:25 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:16:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:16:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:32 --> Severity: Notice --> Undefined variable: id D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 80
ERROR - 2020-10-19 00:26:32 --> Severity: Notice --> Undefined variable: ambil D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:26:32 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:26:32 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:26:32 --> Severity: Warning --> A non-numeric value encountered D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 110
ERROR - 2020-10-19 00:26:32 --> Severity: Notice --> Undefined variable: faktur D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 62
ERROR - 2020-10-19 00:26:32 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:32 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:32 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:32 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:32 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:32 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Undefined variable: id D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 80
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Undefined variable: ambil D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:26:50 --> Severity: Warning --> A non-numeric value encountered D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 110
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Undefined variable: faktur D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 62
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 62
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:26:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:27:13 --> Severity: Notice --> Undefined variable: id D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 80
ERROR - 2020-10-19 00:27:13 --> Severity: Notice --> Undefined variable: ambil D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:27:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:27:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:27:13 --> Severity: Warning --> A non-numeric value encountered D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 110
ERROR - 2020-10-19 00:28:07 --> Severity: Notice --> Undefined variable: id D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 80
ERROR - 2020-10-19 00:28:07 --> Severity: Notice --> Undefined variable: ambil D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:07 --> Severity: Warning --> A non-numeric value encountered D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 110
ERROR - 2020-10-19 00:28:08 --> Severity: Notice --> Undefined variable: id D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 80
ERROR - 2020-10-19 00:28:08 --> Severity: Notice --> Undefined variable: ambil D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:08 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:08 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:08 --> Severity: Warning --> A non-numeric value encountered D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 110
ERROR - 2020-10-19 00:28:13 --> Severity: Notice --> Undefined variable: id D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 80
ERROR - 2020-10-19 00:28:13 --> Severity: Notice --> Undefined variable: ambil D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:13 --> Severity: Warning --> A non-numeric value encountered D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 110
ERROR - 2020-10-19 00:28:14 --> Severity: Notice --> Undefined variable: id D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 80
ERROR - 2020-10-19 00:28:14 --> Severity: Notice --> Undefined variable: ambil D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:14 --> Severity: Warning --> A non-numeric value encountered D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 110
ERROR - 2020-10-19 00:28:17 --> Severity: Notice --> Undefined variable: id D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 80
ERROR - 2020-10-19 00:28:17 --> Severity: Notice --> Undefined variable: ambil D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:17 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:17 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 91
ERROR - 2020-10-19 00:28:17 --> Severity: Warning --> A non-numeric value encountered D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 110
ERROR - 2020-10-19 00:31:11 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:31:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:31:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:31:11 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:31:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:31:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:42 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:42 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:49 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:49 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:35:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:04 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:04 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:06 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:06 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:06 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:06 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:06 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:06 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:22 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:22 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:22 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:22 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:22 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:22 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:49 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:49 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:36:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:13 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:13 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:58 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:58 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:58 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:58 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:58 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:38:58 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:39:05 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:39:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:39:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:39:05 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:39:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:39:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:40 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:40 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:40:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:41:09 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:41:09 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:41:09 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:41:09 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:41:09 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:41:09 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:00 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:00 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:01 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:01 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:01 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:01 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:01 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:42:01 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:38 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:38 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:38 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:38 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:38 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:38 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:58 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:58 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:58 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:58 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:58 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:43:58 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:06 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:06 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:06 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:06 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:06 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:06 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:25 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:25 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:44:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:25 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:25 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:45 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:45 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:45 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:45 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:45 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:45:45 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:11 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:11 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:21 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:21 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:32 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:32 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:32 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:32 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:32 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:46:32 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:59:21 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:59:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:59:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:59:21 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:59:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 00:59:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:19 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:19 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:19 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:19 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:19 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:19 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:40 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:40 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:02:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:03:33 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:03:33 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:03:33 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:03:33 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:03:33 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:03:33 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:04:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:04:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:04:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:04:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:04:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 01:04:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:34:11 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:34:15 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:34:15 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:34:15 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:34:15 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:34:15 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:34:15 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:34:15 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:35:31 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:35:59 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:35:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:35:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:35:59 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:35:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:35:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:35:59 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:36:03 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:36:20 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:36:20 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:36:20 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:36:20 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:36:20 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:36:20 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:36:21 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:36:22 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:36:35 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:36:35 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:36:35 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:36:35 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:36:35 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:36:35 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:36:35 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:36:38 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:37:30 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:38:59 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:38:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:38:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:38:59 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:38:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:38:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:38:59 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:39:01 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:39:13 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:13 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:39:14 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:39:15 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:39:42 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:42 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:39:42 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:39:43 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:39:54 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:54 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:54 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:54 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:54 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:54 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:39:55 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:39:55 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:40:18 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:18 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:40:18 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:40:19 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:40:36 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:36 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:40:36 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:40:36 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:41:20 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:41:26 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:41:27 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:41:27 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:42:19 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:42:20 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:42:32 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:42:34 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:42:36 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:42:37 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:42:37 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:42:37 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:42:37 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:42:37 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:42:38 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:42:39 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:42:56 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:42:56 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:42:56 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:42:56 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:42:56 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:42:56 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:42:56 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:42:57 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:43:01 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:43:26 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:43:40 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:43:45 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:43:45 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:43:50 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:43:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:43:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:43:50 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:43:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:43:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:43:51 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:43:52 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:43:59 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:43:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:43:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:43:59 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:43:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:43:59 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:43:59 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:44:00 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:45:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:45:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:45:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:45:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:45:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:45:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:45:08 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:45:09 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:45:13 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:45:45 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:46:27 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:48:45 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:49:16 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:49:18 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:49:20 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:49:20 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:49:20 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:49:20 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:49:20 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:49:20 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:49:20 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:49:21 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:49:25 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:49:29 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:49:30 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:49:36 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:49:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:49:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:49:36 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:49:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:49:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:49:36 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:49:37 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:50:30 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:50:31 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:50:33 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:50:35 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:50:37 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:50:48 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 04:50:49 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:50:49 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:50:49 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:50:50 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:51:01 --> 404 Page Not Found: /index
ERROR - 2020-10-19 04:51:05 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 04:51:05 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:09:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:09:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:09:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:09:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:09:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:09:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 05:09:07 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 05:09:08 --> 404 Page Not Found: /index
ERROR - 2020-10-19 05:10:12 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 05:10:13 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:10:13 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:10:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:10:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:10:13 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:10:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:10:13 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 05:10:14 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 05:10:14 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:12:04 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:12:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:12:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:12:04 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:12:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:12:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 05:12:05 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 05:12:05 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:13:03 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:03 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:03 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:03 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:03 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:03 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 05:13:03 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 05:13:04 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:13:47 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:47 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:47 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:47 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:47 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:47 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 05:13:47 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 05:13:48 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:14:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 05:14:08 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 05:14:09 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:14:34 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:34 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:34 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:34 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:34 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:34 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 05:14:35 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 05:14:36 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:15:44 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:15:44 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:15:44 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:15:44 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:15:44 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:15:44 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 05:15:44 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 05:15:45 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:18:39 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:18:39 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:18:39 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:18:39 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:18:39 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:18:39 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 05:18:41 --> 404 Page Not Found: /index
ERROR - 2020-10-19 05:18:41 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:03:07 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:03:10 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:03:18 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:03:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:03:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:03:18 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:03:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:03:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:03:18 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:03:19 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:03:30 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/getStok
ERROR - 2020-10-19 14:10:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:10:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:10:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:10:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:10:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:10:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:10:08 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:10:08 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:11:29 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:11:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:11:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:11:29 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:11:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:11:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:11:29 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:11:30 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:12:36 --> Severity: Compile Error --> Cannot redeclare Dashboard_model::viewWhere() D:\xampp\htdocs\djawipos\application\modules\dashboard\models\Dashboard_model.php 27
ERROR - 2020-10-19 14:12:57 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:12:57 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:12:57 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:12:57 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:12:57 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:12:57 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:12:58 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:12:58 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:13:50 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:13:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:13:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:13:50 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:13:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:13:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:13:52 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:13:52 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 14:15:11 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:15:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:15:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:15:11 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:15:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:15:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:15:12 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:15:13 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:15:55 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:15:55 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:15:55 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:15:55 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:15:55 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:15:55 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:15:55 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:15:56 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:16:31 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:31 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:31 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:31 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:31 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:31 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:16:31 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:16:32 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:16:33 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 332
ERROR - 2020-10-19 14:16:42 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:42 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:16:43 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:16:43 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:16:45 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 332
ERROR - 2020-10-19 14:16:51 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:51 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:16:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:16:51 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:16:52 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:16:53 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 332
ERROR - 2020-10-19 14:17:04 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:17:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:17:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:17:04 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:17:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:17:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:17:04 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:17:05 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:17:06 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 332
ERROR - 2020-10-19 09:17:36 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ';' or ',' D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 334
ERROR - 2020-10-19 14:17:42 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:17:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:17:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:17:42 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:17:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:17:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:17:42 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:17:42 --> 404 Page Not Found: /index
ERROR - 2020-10-19 09:17:59 --> Severity: error --> Exception: syntax error, unexpected '$show' (T_VARIABLE) D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 332
ERROR - 2020-10-19 09:18:09 --> Severity: error --> Exception: syntax error, unexpected '$show' (T_VARIABLE), expecting ';' or ',' D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 332
ERROR - 2020-10-19 09:18:11 --> Severity: error --> Exception: syntax error, unexpected '$show' (T_VARIABLE), expecting ';' or ',' D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 332
ERROR - 2020-10-19 09:18:15 --> Severity: error --> Exception: syntax error, unexpected '$show' (T_VARIABLE), expecting ';' or ',' D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 332
ERROR - 2020-10-19 09:18:16 --> Severity: error --> Exception: syntax error, unexpected '$show' (T_VARIABLE), expecting ';' or ',' D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 332
ERROR - 2020-10-19 09:18:21 --> Severity: error --> Exception: syntax error, unexpected '$show' (T_VARIABLE), expecting ';' or ',' D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 332
ERROR - 2020-10-19 09:18:22 --> Severity: error --> Exception: syntax error, unexpected '$show' (T_VARIABLE), expecting ';' or ',' D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 332
ERROR - 2020-10-19 14:18:22 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:18:22 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:18:22 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:18:22 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:18:22 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:18:22 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:18:23 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:18:23 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:18:42 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:18:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:18:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:18:42 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:18:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:18:42 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:18:42 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:18:43 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:21:01 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:01 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:01 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:01 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:01 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:01 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:21:01 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:21:01 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:21:21 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:21 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:21 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:21:22 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:21:22 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:21:46 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:46 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:21:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:21:46 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:21:46 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:22:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:22:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:22:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:22:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:22:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:22:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:22:07 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:22:07 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:23:44 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:23:44 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:23:44 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:23:44 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:23:44 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:23:44 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:23:44 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:23:45 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:32:04 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:32:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:32:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:32:04 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:32:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:32:04 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:32:05 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:32:07 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:32:50 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:32:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:32:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:32:50 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:32:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:32:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:32:50 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:32:51 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:33:05 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:33:05 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:33:06 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:33:06 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:33:40 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:33:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:33:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:33:40 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:33:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:33:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:33:40 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:33:41 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:34:00 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:34:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:34:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:34:00 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:34:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:34:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:34:00 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:34:01 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:37:18 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:37:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:37:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:37:18 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:37:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:37:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:37:19 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:37:19 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:37:29 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:37:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:37:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:37:29 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:37:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:37:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:37:29 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:37:30 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:39:17 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:39:17 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:39:17 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:39:17 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:39:17 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:39:17 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:39:18 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:39:18 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:40:05 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:40:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:40:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:40:05 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:40:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:40:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:05 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:40:06 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:40:35 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:40:35 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:40:35 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:40:35 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:40:35 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:40:35 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:40:35 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:40:36 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:44:16 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:16 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:44:17 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:44:17 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:44:25 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:25 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:44:25 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:44:26 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:44:29 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:29 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:29 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:44:29 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:44:29 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:44:46 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:46 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:44:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:44:46 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:44:47 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:48:03 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:03 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:03 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:03 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:03 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:03 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:48:03 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:48:04 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:48:09 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:09 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:09 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:09 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:09 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:09 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:48:09 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 09:48:10 --> 404 Page Not Found: /index
ERROR - 2020-10-19 14:48:23 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:23 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:23 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:23 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:23 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:23 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:48:24 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 14:48:49 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:49 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:48:49 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 14:48:53 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:53 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:53 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:53 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:53 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:48:53 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:48:54 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 14:49:05 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:49:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:49:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:49:05 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:49:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:49:05 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:49:06 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 14:59:40 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:59:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:59:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:59:40 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:59:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 14:59:40 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 09:59:40 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:00:36 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:04:36 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:04:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:04:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:04:36 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:04:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:04:36 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:04:37 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:04:37 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:04:40 --> Severity: Notice --> Undefined variable: harga D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 326
ERROR - 2020-10-19 15:04:40 --> Severity: Notice --> Undefined variable: total D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 327
ERROR - 2020-10-19 15:04:41 --> Severity: Notice --> Undefined variable: harga D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 326
ERROR - 2020-10-19 15:04:41 --> Severity: Notice --> Undefined variable: total D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 327
ERROR - 2020-10-19 15:05:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:05:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:05:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:05:07 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:05:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:05:07 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:05:07 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:05:08 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:05:11 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:05:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:05:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:05:11 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:05:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:05:11 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:05:12 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:05:12 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:06:02 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:06:02 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:06:02 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:06:02 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:06:02 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:06:02 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:06:03 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:06:04 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:06:46 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:06:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:06:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:06:46 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:06:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:06:46 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:06:47 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:06:47 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:08:16 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:08:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:08:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:08:16 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:08:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:08:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:08:17 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:08:17 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:08:44 --> Severity: Notice --> Undefined variable: harga D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 326
ERROR - 2020-10-19 15:08:44 --> Severity: Notice --> Undefined variable: total D:\xampp\htdocs\djawipos\application\modules\transaksi\controllers\Transaksi.php 327
ERROR - 2020-10-19 15:12:14 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:12:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:12:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:12:14 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:12:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:12:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:12:15 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:12:16 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:13:23 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:23 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:23 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:13:24 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:13:49 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:49 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:49 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:49 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:13:50 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:13:55 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:55 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:55 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:55 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:55 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:13:55 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:13:56 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:13:56 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 15:14:15 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:15 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:16 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:16 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:16 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:14:16 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:14:50 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:50 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:50 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:51 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:14:51 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 15:14:51 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:51 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:14:51 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:14:53 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:14:53 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:16:25 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:16:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:16:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:16:25 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:16:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:16:25 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:16:26 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:16:26 --> 404 Page Not Found: /index
ERROR - 2020-10-19 15:16:27 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:16:27 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:16:27 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:16:27 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:16:27 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:16:27 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:16:28 --> 404 Page Not Found: /index
ERROR - 2020-10-19 10:16:28 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 15:33:27 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:33:27 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:33:27 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:33:27 --> Severity: Notice --> Undefined variable: dtitem D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:33:27 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 15:33:27 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp\htdocs\djawipos\application\modules\transaksi\views\v_AddDataOrder.php 110
ERROR - 2020-10-19 10:33:28 --> 404 Page Not Found: ../modules/transaksi/controllers/Transaksi/frontend
ERROR - 2020-10-19 10:33:28 --> 404 Page Not Found: /index
