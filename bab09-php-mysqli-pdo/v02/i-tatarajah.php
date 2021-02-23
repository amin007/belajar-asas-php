<?php
# Sentiasa menyediakan garis condong di belakang (/) pada hujung jalan
define('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']) . '/');
define('Tajuk_Muka_Surat', '***');

############################################################################################
## isytihar konsan MYSQL dan GAMBAR ikut lokasi $server
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$server = $_SERVER['SERVER_NAME'];

/*
echo "<br>Alamat IP : <font color='red'>" . $ip . "</font> |
\r<br>Nama PC : <font color='red'>" . $hostname . "</font> |
\r<br>Server : <font color='red'>" . $server . "</font>\r";
//*/

if ($server == 'laman.web.anda')
{	# isytihar tatarajah mysql
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', '***');
	define('DB_USER', '***');
	define('DB_PASS', '***');
}
else
{	# isytihar tatarajah mysql
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', '***');
	define('DB_USER', '***');
	define('DB_PASS', '**');
}
//echo DB_HOST . "," . DB_USER . "," . DB_PASS . ",," . DB_NAME . "<br>";
############################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('semakPembolehubah')):
	/**
	 * semakPembolehubah
	 *
	 * Fungsi ini menyemak pembolehubah yang ada sama ada string atau array
	 *
	 * @param $senarai => string / array
	 * @param $jadual => string
	 * @param $p => int
	 * @return null, cuma echo sahaja
	 */
	function semakPembolehubah($senarai,$jadual='entahlah',$p='0')
	{
		# semak $senarai adalah array atau tidak
		$semak = is_array($senarai) ? 'array' : 'bukan';
		if($semak == 'array'):
			echo '<pre>$' . $jadual . '=><br>';
			if($p == '0') print_r($senarai);
			if($p == '1') var_export($senarai);
			echo '</pre>' . "\n";
		else:
			echo tagVar($senarai,$jadual,2);
		endif;
		//$this->semakPembolehubah($ujian,'ujian',0);
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('tagVar')):
	function tagVar($senarai,$jadual,$pilih=2)
	{
		# set pembolehubah utama
		$p1 = 'pre';#https://www.w3schools.com/tags/tag_var.asp
		$p2 = 'kbd';
		$p3 = 'code';
		$p4 = 'samp';
		# setkan tatasusunan
		$p[1] = "<$p1>\$$jadual = $senarai</$p1><br>\n";
		$p[2] = "<$p2>\$$jadual = $senarai</$p2><br>\n";
		$p[3] = "<$p3>\$$jadual = $senarai</$p3><br>\n";
		$p[4] = "<$p4>\$$jadual = $senarai</$p4><br>\n";
		#
		return $p[$pilih];
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('huruf')):
	/**
	 * huruf
	 *
	 * Fungsi ini tukar huruf sama ada besar atau kecil atau sebagainya
	 *
	 * @param $jenis => string
	 * @param $papar => string
	 * @return $papar => string
	 */
	function huruf($jenis, $papar)
	{
		switch($jenis)
		{# mula - pilih $jenis
			case 'BESAR':
				$papar = strtoupper($papar); # huruf('BESAR', )
				break;
			case 'kecil':
				$papar = strtolower($papar); # huruf('kecil', )
				break;
			case 'Depan':
				$papar = ucfirst($papar); # huruf('Depan', )
				break;
			case 'Besar_Depan':
				$papar = mb_convert_case($papar, MB_CASE_TITLE); # huruf('Besar_Depan', )
				break;
		}# tamat - pilih $jenis

		return $papar;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('bersih')):
	/** */
	function bersih($papar)
	{
		# lepas lari aksara khas dalam SQL
		//$papar = mysql_real_escape_string($papar);
		# buang ruang kosong (atau aksara lain) dari mula & akhir
		$papar = trim($papar);

		return $papar;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaJadual')):
	function binaJadual($row, $myTable, $class)
	{
		$output  = null;
		$output .= "\n\t" . '<table ' . $class . '>';
		#-----------------------------------------------------------------
		$printed_headers = false;# mula bina jadual
		#-----------------------------------------------------------------
		for ($kira=0; $kira < count($row); $kira++)
		{	# print the headers once:
			if ( !$printed_headers )
			{##===========================================================
				$output .= "\n\t<thead><tr>\n\t<th>#</th>";
				foreach ( array_keys($row[$kira]) as $tajuk ) :
				$output .= "\n\t" . '<th>' . $tajuk . '</th>';
				endforeach;
				$output .= "\n\t" . '</tr></thead>';
			##============================================================
				$printed_headers = true;
			}
		#-----------------------------------------------------------------
			# print the data row
			//$output .= "\n\t<tbody>";
			$output .= "<tr>\n\t<td>" . ($kira+1) . '</td>';
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\n\t" . '<td>' . $data . '</td>';
			endforeach;
			$output .= "\n\t" . '</tr>';
			//$output .= "\n\t" . '</tbody>';
		}#----------------------------------------------------------------
		$output .= "\n\t" . '</table>';

		return $output;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('inputSearch')):
	function inputSearch()
	{
		$papar = "#myInput{
	background-position: 10px 12px; /* Position the search icon */
	background-repeat: no-repeat; /* Do not repeat the icon image */
	width: 100%; /* Full-width */
	font-size: 16px; /* Increase font-size */
	padding: 12px 20px 12px 40px; /* Add some padding */
	border: 1px solid #ddd; /* Add a grey border */
	margin-bottom: 1px; /* Add some space below the input */
	}";

		return $papar;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('masukCssTableExcel')):
	function masukCssTableExcel()
	{
		print <<<END
<style type="text/css">
/* ********************************************************************* */
.butangBulat {border-radius: 50px;}
.butang1 {border-radius: 2px;}
.butang2 {border-radius: 4px;}
.butang3 {border-radius: 8px;}
.butang4 {border-radius: 12px;}
.butang5 {border-radius: 50%;}
/* ********************************************************************* */
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td
{
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
</style>
END;
		#
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('diatas')):
	/** */
	function diatas($title = 'List Folder')
	{
		print <<<END
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,, maximum-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>$title</title>
<link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<style type="text/css">
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#cccccc;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td
{
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
</style>
</head>
<body>

END;
		#
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('diatasV02')):
	/** */
	function diatasV02($tajuk = 'W3.CSS')
	{
		$css = inputSearch();
		print <<<END
<!DOCTYPE html>
<html lang="en">
<head>
<title>$tajuk</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" type="text/css">
<style>
$css
</style>
</head>
<body>

END;
		#
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dibawah')):
	/** */
	function dibawah()
	{
		print <<<END
<!-- khas untuk jquery dan js2 lain
=============================================================================================== -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script -->
END;
		#
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dikaki')):
	/** */
	function dikaki()
	{
		echo "\n</body>\n</html>";
	}
endif;
#--------------------------------------------------------------------------------------------------
//if ( ! function_exists('xxx')):
//endif;
#--------------------------------------------------------------------------------------------------