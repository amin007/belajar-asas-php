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
	function folderFiles()
	{
		$dirlist = getFileList("./");
		//echo '<tr><td> name</td><td> type</td><td> size</td><td> lastmod</td></tr>';
		$folder = $files = array();
		foreach($dirlist as $key => $value):
			if ($value['type'] == 'dir'):
				$folder[$key]['name'] = $value['name'];
				$folder[$key]['type'] = $value['type'];
				$folder[$key]['size'] = $value['size'];
				$folder[$key]['lastmod'] = $value['lastmod'];
			else:
				$files[$key]['name'] = $value['name'];
				$files[$key]['type'] = $value['type'];
				$files[$key]['size'] = $value['size'];
				$files[$key]['lastmod'] = $value['lastmod'];
			endif;
		endforeach;

		return array($folder,$files);
	}
#--------------------------------------------------------------------------------------------------
	function pautan($name,$web)
	{
		return '<i class="far fa-folder fa-spin"></i>'
		. '<a target="_blank" href="' . $web . '">'
		. $name . '</a><hr>';
	}
#--------------------------------------------------------------------------------------------------
	function list_files()
	{
		list($folder,$files) = folderFiles();
		diatas();
		echo "\n<hr><table><tr><td valign=\"top\">";
			foreach($folder as $key => $value):
				echo pautan($value['name'],$value['name']) . '';
			endforeach;
		echo "\n\n</td><td valign=\"top\">\n";
			foreach($files as $key => $value):
				echo pautan($value['name'],$value['name']) . '';
			endforeach;
		echo "\n</td></tr></table>";
		dibawah();
	}
#--------------------------------------------------------------------------------------------------
	function diatas($title = 'List Folder')
	{
		print <<<END
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
		#
	}
#--------------------------------------------------------------------------------------------------
list_files();