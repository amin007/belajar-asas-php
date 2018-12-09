<!doctypehtml>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"content="width=device-width,initial-scale=1,shrink-to-fit=no">
<meta name="description"content="">
<meta name="author"content="">
<link rel="icon"href="../../../../favicon.ico">

<title>FloatinglabelsexampleforBootstrap</title>

<!--Bootstrap core CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!--Custom styles for this template-->
<link href="floating-labels.css" rel="stylesheet">
</head>

<body>
<form class="form-signin" method="POST" action="borang_proses.php">
<div class="text-centermb-4">
<img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
<h1 class="h3mb-3font-weight-normal">Floatinglabels</h1>
</div>

<div class="form-label-group">
	<label for="inputNim">nim</label>
	<input type="text" name="biodata[nim]" class="form-control" placeholder="nim">
</div>

<div class="form-label-group">
	<label for="inputnAMA">nama</label>
	<input type="text" name="biodata[nama]" class="form-control" placeholder="nama">
</div>

<div class="form-label-group">
	<label for="inputEmail">alamat</label>
	<input type="text" name="biodata[alamat]" class="form-control" placeholder="alamat">
</div>

<div class="form-label-group">
	<label for="inputEmail">bandar</label>
	<input type="text" name="biodata[bandar]" class="form-control" placeholder="bandar">
</div>

<div class="form-label-group">
	<label for="inputEmail">kdprody</label>
	<input type="text" name="biodata[kdprody]" class="form-control" placeholder="kdprody">
</div>

<div class="checkboxmb-3">
	<label><input type="checkbox" value="remember-me">Remember me</label>
</div>

<input type="submit" value="Poslaju" class="btnbtn-lgbtn-primarybtn-block">

<p class="mt-5mb-3text-mutedtext-center">&copy;2017-2018</p>
</form>
</body>
</html>
