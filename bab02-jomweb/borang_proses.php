<?php

/*echo '$_POST:<pre>';print_r($_POST);echo '</pre>';//*/

include 'DB_Pdo.php';
include 'Sql.php';
include 'tatarajah.php';
$dbPdo = new \Aplikasi\Kitab\DB_Pdo(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
$tanya = new Aplikasi\Kitab\Sql;

# istihar pembolehubah
$jadual = 'biodata';
$medan = '`nim`,`nama`,`alamat`,`bandar`,`kdprody`';
$posmen['nim'] = $_POST[$jadual]['nim'];
$posmen['nama'] = $_POST[$jadual]['nama'];
$posmen['alamat'] = $_POST[$jadual]['alamat'];
$posmen['bandar'] = $_POST[$jadual]['bandar'];
$posmen['kdprody'] = $_POST[$jadual]['kdprody'];

# panggil sql insert
$tanya->tambahSqlBanyakNilai($jadual, $medan, $posmen);

//$result = $dbPdo->selectAll($sql);
//echo '$result:<pre>'; print_r($result) ;echo '</pre>';