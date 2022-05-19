<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-05-19 04:01:46 --> 404 Page Not Found: Artikel/index
ERROR - 2022-05-19 04:01:56 --> 404 Page Not Found: Artikel/index
ERROR - 2022-05-19 22:11:00 --> Query error: Expression #31 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sidesci-master.cu.id_pend' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `c`.*, `c`.`id` as `id_sppt`, `c`.`created_at` as `tanggal_daftar`, `cu`.`id_pend`, `u`.`nik` AS `nik`, `u`.`nama` as `namatertagih`, `w`.*, (CASE WHEN c.jenis_wp = 1 THEN u.nama ELSE c.nama_wp_luar END) AS namatertagih, (CASE WHEN c.jenis_wp = 1 THEN CONCAT("RT ", `w`.`rt`, " / RW ", `w`.`rw`, " - ", w.dusun) ELSE c.alamat_wp_luar END) AS alamat, COUNT(DISTINCT c.id) AS jumlah
FROM `tbl_data_sppt` `c`
LEFT JOIN `tbl_sppt_penduduk` `cu` ON `cu`.`id_sppt` = `c`.`id`
LEFT JOIN `tweb_penduduk` `u` ON `u`.`id` = `cu`.`id_pend`
LEFT JOIN `tweb_wil_clusterdesa` `w` ON `w`.`id` = `u`.`id_cluster`
GROUP BY `c`.`id`, `cu`.`id`
ORDER BY cast(c.nomor as unsigned)
 LIMIT 50
ERROR - 2022-05-19 22:11:00 --> Severity: error --> Exception: Call to a member function result_array() on bool D:\laragon\www\neo-sidega\donjo-app\models\Data_sppt_model.php 129
