<?php
#--------------------------------------------------------------------------------------------------
	/*
	$fileList = glob('/*.*');
	foreach($fileList as $filename)
	{
		# Use the is_file function to make sure that it is not a directory.
		if(is_file($filename))
		{
			echo $filename . '<br>';
		}
	}
	*/
#--------------------------------------------------------------------------------------------------
	function versiphp()
	{
		//phpinfo();
		//echo PHP_VERSION . '<br>';
		echo PHPVERSION() . '<br>';
		echo PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION . '<br>';
		echo '$_SERVER=><pre>'; print_r($_SERVER); echo '</pre>';
	}
#--------------------------------------------------------------------------------------------------
	function paparVersiPhp()
	{
		$p = 'PHP ' . PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION
		. '.' . PHP_RELEASE_VERSION . '';
		return $p;
	}
#--------------------------------------------------------------------------------------------------
	function getFileList($dir)
	{
		# array to hold return value
		$retval = [];
		# add trailing slash if missing
		if(substr($dir, -1) != "/") { $dir .= "/"; }
		# open pointer to directory and read list of files
		$d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
		while(FALSE !== ($entry = $d->read()))
		{
			# skip hidden files
			if($entry{0} == ".") continue;
			if(is_dir("{$dir}{$entry}"))
			{
				$retval[] = [
				'name' => "{$dir}{$entry}/",
				'type' => filetype("{$dir}{$entry}"),
				'size' => 0,
				'lastmod' => filemtime("{$dir}{$entry}")
				];
			}
			elseif(is_readable("{$dir}{$entry}"))
			{
				$retval[] = [
				'name' => "{$dir}{$entry}",
				'type' => mime_content_type("{$dir}{$entry}"),
				'size' => filesize("{$dir}{$entry}"),
				'lastmod' => filemtime("{$dir}{$entry}")
				];
			}
		}

		$d->close();
		return $retval;
	}
#--------------------------------------------------------------------------------------------------
	function pautan($name,$web)
	{
		$icon1 = '<i class="fas fa-globe-asia fa-spin"></i>';
		$icon2 = '<i class="far fa-folder fa-spin"></i>';
		$icon = ($name != $web) ? $icon1 : $icon2;
		$link = ($web == null) ? $name : '<a target="_blank" href="' . $web
		. '">' . $name . '</a>';
		return "\n" . '&nbsp;&nbsp;' . $icon . $link . '<hr>';
	}
#--------------------------------------------------------------------------------------------------
	function list_files()
	{
		$dirlist = getFileList("./");
		//echo "<pre>",print_r($dirlist),"</pre>";
		//echo '<tr><td> name</td><td> type</td><td> size</td><td> lastmod</td></tr>';
		$ipAdd = get_client_ip();
		$failIni = basename($_SERVER['PHP_SELF']);
		$phpVersion = paparVersiPhp();
		diatas();
		echo "\n$failIni | $phpVersion |$ipAdd<hr><table><tr><td valign=\"top\">";
		foreach($dirlist as $key02 => $value):
			if ($value['type'] == 'dir'):
				echo pautan($value['name'],$value['name']) . '';
			else:echo '';endif;
		endforeach;
		echo "\n\n</td><td valign=\"top\">\n";
		echo "\n\n</td><td valign=\"top\">\n";
		foreach(getIdea() as $name => $web): echo pautan($name,$web); endforeach;
		echo "\n\n</td><td valign=\"top\">\n";
		foreach(dnschanger() as $name => $web): echo paparan($web,null); endforeach;
		echo "\n</td></tr></table>";
		dibawah();
	}
#--------------------------------------------------------------------------------------------------
	function kiraPaparan()
	{
		$kira[01] = $kira[02] = $kira[03] = 0;
		//$kira[02] = 16;$kira[03] = 16;
		foreach(dnschanger() as $name => $web):
			$data = explode('|', $web);
			//$data0 = strlen($data[0]);
			if(strlen($data[1]) > $kira[01]) $kira[01] = strlen($data[1]);
			if(strlen($data[2]) > $kira[02]) $kira[02] = strlen($data[2]);
			if(strlen($data[3]) > $kira[03]) $kira[03] = strlen($data[3]);
		endforeach;

		return $kira;
	}
#--------------------------------------------------------------------------------------------------
	function paparan($web, $test)
	{
		# set pembolehubah utama
		$p1 = 'pre';#https://www.w3schools.com/tags/tag_var.asp
		$p2 = 'kbd';
		$p3 = 'code';
		$p4 = 'samp';
		$kira = kiraPaparan();
		$data = explode('|', $web);
		$semak01 = ($kira[01] - strlen($data[1]) + 1);
		$semak02 = ($kira[02] - strlen($data[2]) + 1);
		$semak03 = ($kira[03] - strlen($data[3]) + 1);
		# papar
			$p = "\n<$p2>| " . $data[1];
			for($i = 1; $i < $semak01; $i++): $p .= "&nbsp;"; endfor;
			$p .=  "|" . $data[2];
			for($i = 1; $i < $semak02; $i++): $p .= "&nbsp;"; endfor;
			$p .= "|" . $data[3];
			for($i = 1; $i < $semak03; $i++): $p .= "&nbsp;"; endfor;
			$p .= "&nbsp;|</$p2><hr>";
		#
		return $p;
	}
#--------------------------------------------------------------------------------------------------
	function test_files()
	{
		# pembolehubah asas
		$ipAdd = get_client_ip();
		$failIni = basename($_SERVER['PHP_SELF']);
		$phpVersion = paparVersiPhp();
		$kira = $kira01 = $kira02 = $kira03 = 0;

		# papar fail//diatas();
		foreach(dnschanger() as $name => $web):
			$data = explode('|', $web);
			//$data0 = strlen($data[0]);
			if(strlen($data[1]) > $kira01) $kira01 = strlen($data[1]);
			if(strlen($data[2]) > $kira02) $kira02 = strlen($data[2]);
			if(strlen($data[3]) > $kira03) $kira03 = strlen($data[3]);
		endforeach;
		echo "<pre>kira03 = $kira03 <hr>";
		foreach(dnschanger() as $name => $web):
			$data = explode('|', $web);
			$g = "\n+-"; for($i = 1;$i < $kira01; $i++): $g .= '-'; endfor;
			$g .= '-+-'; for($i = 1;$i < $data2; $i++): $g .= '-'; endfor;
			$g .= '-+-'; for($i = 1;$i < $kira03; $i++): $g .= '-'; endfor;
			$g .= '-+';
			# papar
			echo "$g\n| " . $data[1];
			for($i = 1; $i < ($kira01 - strlen($data[1]) + 1); $i++): echo " "; endfor;
			echo "|" . $data[2] . " |" . $data[3];
			$space = $kira03 - strlen($data[3]) + 1;
			for($i = 1; $i < $space; $i++): echo " "; endfor;
			echo " |";
		endforeach; echo $g . '</pre>';

		//dibawah();
	}
#--------------------------------------------------------------------------------------------------
	function getIdea()
	{
		$papar = array(
			'[TM Test]'=>'//speedtest.tm.com.my',
			'[Fast.com]'=>'//fast.com',
			'[Speedtest.net]'=>'https://www.speedtest.net',
			'[Kalendar]'=>'https://www.mysumber.com/cuti-umum.html',
			'[jQuery]'=>'http://jquery.com',
			'[Bootstrap]'=>'http://getbootstrap.com',
			'[animate.css]'=>'https://daneden.github.io/animate.css',
			'[Sweet Alert]'=>'http://t4t5.github.io/sweetalert',
			'[FontAwesome]'=>'http://fortawesome.github.io/Font-Awesome',
			'[backstretch]'=>'http://srobbin.com/jquery-plugins/backstretch',
			'[jQuery.Form]'=>'http://malsup.com/jquery/form',
			'[Pixabay]'=>'https://pixabay.com',
			'[Pexels]'=>'https://pexels.com',
			'[Unslpash]'=>'https://unsplash.com',
			'[7-themes]'=>'http://7-themes.com',
		);

		return $papar;
	}
#--------------------------------------------------------------------------------------------------
	function dnschanger()
	{
		$data['dns01'] = '|Streamyx --------- | 202.188.18.188  | 1.9.1.9';
		$data['dns02'] = '|Google DNS-------- | 8.8.8.8         | 8.8.4.4';
		$data['dns03'] = '|Cloudflare DNS---- | 1.1.1.1         | 1.0.0.1';
		$data['dns04'] = '|Cloudflare3 DNS--- | 1.1.1.3         | 1.0.0.3';
		$data['dns05'] = '|OpenDNS----------- | 208.67.222.123  | 208.67.222.220';
		$data['dns06'] = '|OpenDNS Home------ | 208.67.222.222  | 208.67.220.220';
		$data['dns07'] = '|Quad9------------- | 9.9.9.9         | 149.112.112.112';
		$data['dns08'] = '|CleanBrowsing----- | 185.228.168.9   | 185.228.169.9';
		$data['dns09'] = '|Verisign---------- | 64.6.64.6       | 64.6.65.6';
		$data['dns10'] = '|Alternate DNS----- | 198.101.242.72  | 23.253.163.53';
		$data['dns11'] = '|AdGuard DNS------- | 176.103.130.130 | 176.103.130.131';
		$data['dns12'] = '|Level 3 ---------- | 209.244.0.3     | 209.244.0.3';
		$data['dns13'] = '|Norton ConnectSafe | 199.85.126.10   | 199.85.127.10';
		$data['dns14'] = '|OpenNic----------- | 10.150.40.234   | 50.116.23.211';
		$data['dns15'] = '|DNS Advantage----- | 156.154.70.1    | 156.154.71.1';
		$data['dns16'] = '|DNS Watch--------- | 84.200.69.80    | 84.200.70.40';
		$data['dns17'] = '|Comodo Secure DNS- | 8.26.56.26      | 8.20.247.20';
		$data['dns18'] = '|GreenTeamDNS------ | 81.218.119.11   | 209.88.198.133';
		$data['dns19'] = '|SafeDNS----------- | 195.46.39.39    | 195.46.39.40';
		$data['dns20'] = '|SmartViper-------- | 208.76.50.50    | 208.76.51.51';
		$data['dns21'] = '|Dyn--------------- | 216.146.35.35   | 216.146.36.36';
		//*/
		return $data;
	}
#--------------------------------------------------------------------------------------------------
	function get_client_ip()
	{# Function to get the client IP address
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';

		return $ipaddress . "<br>\n";
	}
#--------------------------------------------------------------------------------------------------
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
}
#--------------------------------------------------------------------------------------------------
	function dibawah()
	{
		print <<<END

<!-- Footer
=============================================================================================== -->
<!-- footer class="footer">
	<div class="container">
		<span class="label label-info">
		&copy; Hak Cipta Terperihara 2016. Theme Asal Bootstrap Twitter
		</span>
	</div>
</footer -->

<!-- khas untuk jquery dan js2 lain
=============================================================================================== -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script -->
</body>
</html>
END;
}
#--------------------------------------------------------------------------------------------------