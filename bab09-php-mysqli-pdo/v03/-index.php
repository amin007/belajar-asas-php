<?php
/*
 * Ini fail index.php
 * Dalam ini kita isytiharkan
 * 1. laporan tahap kesilapan kod PHP
 * 2. zon masa kita pada Asia/Kuala Lumpur
 * 3. setkan tatarajah sistem
 * 4. masukkan semua fail class dari folder Aplikasi/Kelas
 * 5. istihar class Mulakan
 */
# 1. laporan tahap kesilapan kod PHP
error_reporting(E_ALL);

# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');

# 3. setkan tatarajah sistem
$listFile = array('tatarajah','DB_Folder/Tanya',
'DB_Folder/Sql','DB_Folder/DB_Pdo');
/*foreach($listFile as $file):
	require $file . '.php';
	echo "require '$file.php';<br>";
endforeach;*/
require 'tatarajah.php';
require 'DB_Folder/Tanya.php';
require 'DB_Folder/Sql.php';
require 'DB_Folder/DB_Pdo.php';

#--------------------------------------------------------------------------------------------------
//$aplikasi = new \Aplikasi\Kitab\Peta();
diatasV02('Inlis');
#--------------------------------------------------------------------------------------------------
$tanya = new \Aplikasi\Kitab\Tanya();
//$this->db = new \Aplikasi\Kitab\DB_Pdo(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
//$this->sql = new \Aplikasi\Kitab\Sql();
//$this->insertSql = new \Aplikasi\Kitab\Sql_Insert();//*/
#--------------------------------------------------------------------------------------------------
/*
SELECT NGDBBP2020,UB,TK,IR,NAMA,ETNIK,ALAMAT,
CATATAN,TEL_NO,NAMAKAMPUNG,LOKALITI
FROM `inlist_all_bp_vs_tk_pom_2020`
WHERE alamat like '%balang%'

LIMIT 1000
*/
#--------------------------------------------------------------------------------------------------
$myTable = '`inlist_all_bp_vs_tk_pom_2020`';
$cantum = 'concat_ws("-",SUBSTRING(NGDBBP2020,1,2),SUBSTRING(NGDBBP2020,3,3),SUBSTRING(NGDBBP2020,6,3),TK) as BP,';
$medan = $cantum . 'UB,IR,NAMA,ETNIK,ALAMAT,CATATAN,TEL_NO,NAMAKAMPUNG,LOKALITI';
 #--------------------------------------------------------------------------------------------------
$carian = $susun = null;
$carian[] = array(
	'atau' => 'WHERE',
	'medan' => 'ALAMAT',
	'fix' => '%like%',
	'apa' => '37%jawa%muar',
	//'akhir' => '',
);
/*$carian[] = array(
	'atau' => 'AND',
	'medan' => 'NAMAKAMPUNG',
	'fix' => '%like%',
	'apa' => 'Kampung Parit Tunggul%',
	//'akhir' => '',
);*/
#--------------------------------------------------------------------------------------------------
/*$susun[0]['mengira'] = 1000;
$susun[0]['kumpul'] = 1000;
$susun[0]['order'] = 1000;
$susun[0]['dari'] = 1000;*/
$susun[0]['max'] = 10000;
#--------------------------------------------------------------------------------------------------
$senarai[$myTable] = $tanya->
//cariSql($myTable, $medan, $carian, $susun);
cariSemuaData($myTable, $medan, $carian, $susun);

//semakPembolehubah($senarai,'senarai');
$id = 'id="myTable"';
//$class = $id . ' class="excel"';
//$class = $id . ' class="table table-bordered table-hover table-sm"';//bootstrap 4.3
$class = $id . ' class="w3-table-all w3-hoverable w3-small"';// w3css
foreach($senarai as $myTable => $row):
	$papar = binaJadual($row, $myTable, $class);
	$bilRow = count($row);
endforeach;

#--------------------------------------------------------------------------------------------------
//masukCssTableExcel();
//diatas();
//echo '<i class="fas fa-search"></i>';
//echo '<input type="text" id="myInput" onkeyup="myFunction()" placeholder="&#61447; Search for names..">';
?>
<style>
.input-icon{
	position: absolute;
	left: 10px;
	top: calc(50% - 0.5em); /* Keep icon in center of input, regardless of the input height */
}
.input-wrapper{
	position: relative;
}
</style>
<div class="w3-container">
<div class="w3-cell w3-border w3-round w3-blue">
Ada <?php echo $bilRow ?> yang wujud.
</div><!-- / class="w3-cell0 w3-round" -->
<div class="w3-cell w3-border w3-round w3-grey">
Anda mencari
</div><!-- / class="w3-cell0 w3-round" -->
<div class="w3-cell w3-border w3-round w3-green">
<?php
	echo '=' . $carian[0]['apa'] . '';
?>
</div><!-- / class="w3-cell0 w3-round" -->
</div><!-- / class="w3-container" -->
<div class="input-wrapper">
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for alamat">
	<label for="stuff" class="fas fa-search input-icon"></label>
</div><!-- / class="input-wrapper" -->
<?php
echo $papar;
//dibawah();
?>


<!-- khas untuk jquery dan js2 lain
=============================================================================================== -->
<script>
function myFunction() {
	// Declare variables
	var input, filter, table, tr, td, i, txtValue;
	input = document.getElementById("myInput");
	filter = input.value.toUpperCase();
	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");

	// Loop through all table rows, and hide those who don't match the search query
	for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[7];
		if (td) {
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
		}
	}
}
</script>
<?php
dikaki();