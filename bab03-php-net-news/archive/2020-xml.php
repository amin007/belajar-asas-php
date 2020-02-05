<?php
# https://www.phpflow.com/php/how-to-convert-xml-to-associative-array/
$path = 'entries/2020-01-30-1.xml';
# Convert *.xml File Into String
$xmlfile = file_get_contents($path);
# Convert string of XML into an Object
$ob = simplexml_load_string($xmlfile);
# Encode XML Object Into JSON
$json = json_encode($ob);
# Decode Json Object
//$configData = json_decode($json, true);
$NEWS_ENTRIES = json_decode($json,TRUE);
#
//echo '<pre>'; print_r($configData); echo '</pre>';
//echo '<pre>'; print_r($NEWS_ENTRIES); echo '</pre>';