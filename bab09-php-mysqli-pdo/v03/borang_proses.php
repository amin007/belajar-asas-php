<?php
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
###################################################################################################
#--------------------------------------------------------------------------------------------------
	function soalanS11($bil = 1)//5
	{
		for($kira = 1; $kira <= $bil; $kira++):
			if(!isset($_POST['table']['s11-' . $kira])) $_POST['table']['s11-' . $kira] = 0;
		endfor;
		#
		$_POST['table2']['S11'] = $_POST['table']['s11-1'] . $_POST['table']['s11-2']
		. $_POST['table']['s11-3'] . $_POST['table']['s11-4'] . $_POST['table']['s11-5'];
		#
	}
#--------------------------------------------------------------------------------------------------
	function soalanP1f($bil = 1)//8
	{
		for($kira = 1; $kira <= $bil; $kira++):
			if(!isset($_POST['table']['p1f' . $kira])) $_POST['table']['p1f' . $kira] = 0;
		endfor;
		#
		$_POST['table2']['P1F'] = $_POST['table']['p1f1'] . $_POST['table']['p1f2']
		. $_POST['table']['p1f3'] . $_POST['table']['p1f4'] . $_POST['table']['p1f5']
		. $_POST['table']['p1f6'] . $_POST['table']['p1f7'] . $_POST['table']['p1f8'];
		#
	}
#--------------------------------------------------------------------------------------------------
	function soalanP2($bil = 1)//6
	{
		for($kira = 1; $kira <= $bil; $kira++):
			if(!isset($_POST['table']['p2-' . $kira])) $_POST['table']['p2-' . $kira] = 0;
		endfor;
		#
		$_POST['table2']['P2'] = $_POST['table']['p2-1'] . $_POST['table']['p2-2']
		. $_POST['table']['p2-3'] . $_POST['table']['p2-4']
		. $_POST['table']['p2-5'] . $_POST['table']['p2-6'];
		#
	}
#--------------------------------------------------------------------------------------------------
	function soalanP3($bil = 1)//8
	{
		for($kira = 1; $kira <= $bil; $kira++):
			if(!isset($_POST['table']['p3-' . $kira])) $_POST['table']['p3-' . $kira] = 0;
		endfor;
		#
		$_POST['table2']['P3'] = $_POST['table']['p3-1'] . $_POST['table']['p3-2']
		. $_POST['table']['p3-3'] . $_POST['table']['p3-4'] . $_POST['table']['p3-5']
		. $_POST['table']['p3-6'] . $_POST['table']['p3-7'] . $_POST['table']['p3-8'];
		#
	}
#--------------------------------------------------------------------------------------------------
	function soalanP5($bil = 1)//9
	{
		for($kira = 1; $kira <= $bil; $kira++):
			if(!isset($_POST['table']['p5-' . $kira])) $_POST['table']['p5-' . $kira] = 0;
		endfor;
		#
		$_POST['table2']['P5'] = $_POST['table']['p5-1'] . $_POST['table']['p5-2']
		. $_POST['table']['p5-3'] . $_POST['table']['p5-4'] . $_POST['table']['p5-5']
		. $_POST['table']['p5-6'] . $_POST['table']['p5-7'] . $_POST['table']['p5-8']
		. $_POST['table']['p5-9'];
		#
	}
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################
$_POST['table']['p6'] = 'sempadan pkp katanya';
soalans11(5);
soalanP1f(8);
soalanP2(6);
soalanP3(8);
soalanP5(9);
//semakPembolehubah($_POST,'_POST Asal');
semakPembolehubah($_POST,'_POST Godek');

