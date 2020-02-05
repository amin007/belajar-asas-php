<?php
# https://www.phpflow.com/php/how-to-convert-xml-to-associative-array/
$dirlist = getFileList('entries/');
foreach($dirlist as $key02 => $value):
	if ($value['type'] != 'dir'):
		$path = $value['name'];
		//$path = 'entries/01-JPN01_P003-010-110M09Y19.xml';
		# Convert *.xml File Into String
		$xmlfile = file_get_contents($path);
		# Convert string of XML into an Object
		$ob = simplexml_load_string($xmlfile, 'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NOBLANKS);
		# Encode XML Object Into JSON
		$json = json_encode($ob);
		# Decode Json Object
		//$configData[] = json_decode($json, true);
		$NEWS_ENTRIES[] = json_decode($json,TRUE);
	else:echo '';endif;
endforeach;
#
//echo '<pre>'; print_r($configData); echo '</pre>';
//echo '<pre>'; print_r($NEWS_ENTRIES); echo '</pre>';
#-------------------------------------------------------------------------------------------------------------
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
#-------------------------------------------------------------------------------------------------------------