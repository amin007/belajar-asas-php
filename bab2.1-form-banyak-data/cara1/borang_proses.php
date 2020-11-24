<?php
	# semak data dalam $_POST
	echo '<pre>';	print_r($_POST); echo '</pre>';//*/

if (count($_POST) > 0)
{
	#masukkan pembolehubah
		$id = $_POST['id'];
		$status = $_POST['status'];
		$amout = $_POST['amout'];
		
	#sql
		$sql = "\r UPDATE data_infaq SET"
		. " status = '$status',"
		. " amout = '$amout' "
		. " WHERE id='$id' ";
		
		echo "<pre>$sql</pre>";

}
	