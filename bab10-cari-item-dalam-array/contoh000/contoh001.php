<?php
#--------------------------------------------------------------------------------------------------
include 'tatasusunan.php';
#--------------------------------------------------------------------------------------------------
$senarai = getCodeCourses();
$findID  = 'critical-international-migration-law';//'Undergraduate';
$columnName = 'url';//'level';

if (in_array($findID, $senarai['code_courses'])) {
    echo "$findID was found\n";
}

//$found_key = array_search($findID, $senarai);
$found_key = array_search($findID, array_column($senarai['code_courses'], $columnName));
/*
foreach($senarai as $myTable => $rows):
	$found_key[] = array_search($findID, $rows);
	//$found_key[] = array_search($findID, array_column($senarai, $columnName));
	//$found_key = array_search('Amy', array_column($people, 'fav_color'));

endforeach;//*/

//echo '$senarai=><pre>';print_r($senarai);echo '</pre><hr>';
echo '$found_key=><pre>';
print_r($senarai['code_courses'][$found_key]);
echo '</pre><hr>';
