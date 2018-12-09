<?php

/*echo '$_POST:<pre>';print_r($_POST);echo '</pre>';//*/

include 'DB_Pdo.php';
include 'tatarajah.php';
$dbPdo = new \Aplikasi\Kitab\DB_Pdo(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);

# istihar pembolehubah
$jadual = 'biodata';
$nim = $_POST[$jadual]['nim'];
$nama = $_POST[$jadual]['nama'];
$alanat = $_POST[$jadual]['alamat'];
$bandar = $_POST[$jadual]['bandar'];
$kdprody = $_POST[$jadual]['kdprody'];
# panggil sql update
$sql = $this->tanya->ubahSqlSimpan
	//ubahSimpan
	($posmen[$jadual], $jadual, $medanID);
	$paparID = $jadual . '/' . $dataID;

echo '$sql:<pre>'; print_r($sql); echo '</pre>';

//$result = $dbPdo->selectAll($sql);
//echo '$result:<pre>'; print_r($result) ;echo '</pre>';
