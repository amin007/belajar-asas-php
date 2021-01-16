<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__;
class Sql_Insert
{
#=================================================================================================
#-------------------------------------------------------------------------------------------------
	function __construct() { }
#-------------------------------------------------------------------------------------------------
	public function arahanSet($myTable, $data)
	{
		$senarai = null; //echo '<pre>$data->'; print_r($data); echo '</pre>';
		foreach ($data as $medan => $nilai)
		{
			$senarai[] = ($nilai==null) ? " `$medan`=null" : " `$medan`='$nilai'";
		}

		# set sql
		$sql  = "INSERT INTO $myTable SET \r";
		$sql .= implode(",\r", $senarai);

		return $sql;
	}
#-------------------------------------------------------------------------------------------------
	public function arahanValues($myTable, $medan, $data)
	{
		//echo '<pre>$data->'; print_r($data); echo '</pre>';

		# set sql
		$sql  = "INSERT INTO $myTable\r($medan) VALUES \r";
		$sql .= implode(",\r", $data) . ";";

		return $sql;
	}
#-------------------------------------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------
#=================================================================================================
}