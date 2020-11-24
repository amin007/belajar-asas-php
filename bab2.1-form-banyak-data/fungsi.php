<?php
#--------------------------------------------------------------------------------------------------
function diatas($tajuk = 'Bootstrap & Font Awesome')
{
	?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $tajuk ?></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
}
#--------------------------------------------------------------------------------------------------
function dibawah()
{
	?>
<!--
# masukkan js dan jquery di bawah ini ########################################################################################### -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
#--------------------------------------------------------------------------------------------------
function data()
{
	$data = array(
		array('id'=>1,'nama'=>'Awek001','notel'=>'012345678'),
		array('id'=>2,'nama'=>'Awek002','notel'=>'013456789'),
		array('id'=>3,'nama'=>'Awek003','notel'=>'014567890'),
		array('id'=>4,'nama'=>'Awek004','notel'=>'015678901'),
		array('id'=>5,'nama'=>'Awek005','notel'=>'016789012')
		);

	return $data;
}
#--------------------------------------------------------------------------------------------------