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
<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

<!--Custom styles for this template-->
<link href="floating-labels.css"rel="stylesheet">
</head>

<body>
<form class="form-signin" method="POST" action="borang02.php">
<div class="text-centermb-4">
<img class="mb-4"src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg"alt=""width="72"height="72">
<h1 class="h3mb-3font-weight-normal">Floatinglabels</h1>
<p>Buildformcontrolswithfloatinglabelsviathe<code>:placeholder-shown</code>pseudo-element.<ahref="https://caniuse.com/#feat=css-placeholder-shown">WorksinlatestChrome,Safari,andFirefox.</a></p>
</div>

<div class="form-label-group">
<input type="email" name="biodata[email]" id="inputEmail" class="form-control" 
placeholder="Emailaddress" required autofocus>
<label for="inputEmail">Emailaddress</label>
</div>

<div class="form-label-group">
<input type="password" name="biodata[password]" id="inputPassword" 
class="form-control" placeholder="Password" required>
<label for="inputPassword">Password</label>
</div>

<div class="checkboxmb-3">
<label>
<input type="checkbox" value="remember-me">Rememberme
</label>
</div>
<input type="submit" value="Login" class="btnbtn-lgbtn-primarybtn-block">
<p class="mt-5mb-3text-mutedtext-center">&copy;2017-2018</p>
</form>
</body>
</html>
