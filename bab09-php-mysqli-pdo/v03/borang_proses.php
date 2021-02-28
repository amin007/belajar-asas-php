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
	function soalanP1f()
	{
		if(!isset($_POST['table']['p1f1'])) $_POST['table']['p1f1'] = 0;
		if(!isset($_POST['table']['p1f2'])) $_POST['table']['p1f2'] = 0;
		if(!isset($_POST['table']['p1f3'])) $_POST['table']['p1f3'] = 0;
		if(!isset($_POST['table']['p1f4'])) $_POST['table']['p1f4'] = 0;
		if(!isset($_POST['table']['p1f5'])) $_POST['table']['p1f5'] = 0;
		if(!isset($_POST['table']['p1f6'])) $_POST['table']['p1f6'] = 0;
		if(!isset($_POST['table']['p1f7'])) $_POST['table']['p1f7'] = 0;
		if(!isset($_POST['table']['p1f8'])) $_POST['table']['p1f8'] = 0;
	}
#--------------------------------------------------------------------------------------------------
		//$_POST['table']['p1b(iv)']
		//$_POST['table']['p1civ']
		//$_POST['table']['p2']
		//$_POST['table']['p4']
#--------------------------------------------------------------------------------------------------
###################################################################################################
semakPembolehubah($_POST,'_POST Asal');
soalanP1f();
semakPembolehubah($_POST,'_POST Godek');

