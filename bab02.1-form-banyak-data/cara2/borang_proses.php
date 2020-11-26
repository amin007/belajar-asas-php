<?php
	# semak data dalam $_POST
	echo '<pre>';	print_r($_POST); echo '</pre>';//*/

if (count($_POST) > 0)
{
	#loop dapatkan data dari $_POST[]
	foreach($_POST['table'] as $data):
		#masukkan pembolehubah
			$id = $data['id'];
			$status = $data['status'];
			$amout = $data['amout'];
			
		#sql
			$sql = "\r UPDATE data_infaq SET"
			. " status = '$status',"
			. " amout = '$amout' "
			. " WHERE id='$id' ";
			
			echo "<pre>$sql</pre>";
	endforeach;
}
	