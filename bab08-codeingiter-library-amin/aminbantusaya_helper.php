<?php
/**
 * CodeIgniter | Amin007 godek sebab MIT
 *
 * An open source application development framework for PHP
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter AminBantuSaya Helpers
 *
 * @package		CodeIgniter
 * @subpackage		Helpers
 * @category		Helpers
 * @author		Amin007
 * @folder		./aplication/helper/
 */
#--------------------------------------------------------------------------------------------------
//echo '<!-- ini fungsi amin-bantu-saya-laa -->' . "\n";
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('semakPembolehubah')):
	/**
	 * semakPembolehubah()
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
		/*
		 * tagVar()
		 *
		 * gaya kod html untuk paparkan output dalam bentuk koding
		 * rujuk url #https://www.w3schools.com/tags/tag_var.asp
		 *
		 **/

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
	 * huruf()
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
	/**
	 * bersih()
	 *
	 * kebersihan adalah sebahagian dari iman.
	 * sila guna tanpa was-was
	 **/
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
if ( ! function_exists('diatas')):
	/**
	 * diatas()
	 *
	 * biasanya orang akan guna template. tetapi ini kita gunakan kaedah paling mudah
	 * hendak paparkan koding html dalam bootstrap dan fontawesome.
	 **/
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
if ( ! function_exists('dibawah')):
	/**
	 * dibawah()
	 *
	 * setiap benda ada pasangannya. ini adalah pasangan diatas()
	 **/
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
	/**
	 * dikaki()
	 *
	 * memandangkan akan wujud kita mengodek jquery, jadi kita buat asingkan kod ini 
	 * di bawah sekali. 
	 **/
	function dikaki()
	{
		echo "\n</body>\n</html>";
	}
endif;
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('semakXXX')):
	#function semakXXX(){}
endif;//*/
#--------------------------------------------------------------------------------------------------