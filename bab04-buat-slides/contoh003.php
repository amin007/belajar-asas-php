<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Koleksi Makanan</title>
<meta name="description" content="koleksi makanan yang sedap dimakan">
<meta name="author" content="Amin Ledang">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
	/*background:#cccccc;*/
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
/*table.excel tbody td { vertical-align:bottom; }*/
table.excel td
{
	text-align: center;
	vertical-align:bottom;
	padding: 0 3px; /*border: 1px solid #aaaaaa;*/
	/*background:#ffffff;*/
}
</style>
</head>
<body>
<?php
$senarai = array('cipmore10'=>'biskut cipmore 10 keping - yani.jpg',
	'cipmore30'=>'biskut cipmore 30 keping - yani.jpg',
	'cipmore100'=>'biskut cipmore 100 keping - yani.jpg',
	'brownies10'=>'brownies RM 10 15pcs.jpg',
	'brownies15'=>'brownies RM 15.jpg',
	'kotak'=>'kotak.jpg',
	'sambal01'=>'sambal garing - yani.jpg',
	'sambal02'=>'sambal garing RM 10 160gm.jpg'
);
?>
<div class="reveal">
<div class="slides">
<!-- ========================================================================================== -->
<section class="container" style="border: 2px solid #000000;">
	<h1>Koleksi Makanan</h1>
	<h3>koleksi makanan yang sedap dimakan</h3>
	<?php foreach($senarai as $id => $produk):?>
		<image src="images/slides/<?php echo $produk ?>"
		height="300" width="300" class="img-thumbnail">
	<?php endforeach; ?>	
</section>
<!-- ========================================================================================== -->
<?php
foreach($senarai as $id => $produk):?>
<section class="container" style="border: 2px solid #000000;">
	<h4><i class="fas fa-cookie fa-spin"></i><?php echo $produk ?></h4>
	<table class="table">
	<tr><td rowspan="2">
		<image src="images/slides/<?php echo $produk ?>"
		height="500" width="500" class="img-thumbnail">
		</td>
		<td align="top" valign="middle">Harga</td>
	</tr>
	<tr><td align="top">Diskaun</td></tr>
	</table>
</section>
<!-- ========================================================================================== -->
<?php
endforeach; echo "\n";
?>
</div><!-- / div class="slides" -->
</div><!-- / div class="reveal" -->

<!-- khas untuk jquery dan js2 lain
=============================================================================================== -->
<script src="js/reveal.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
// More info https://github.com/hakimel/reveal.js#configuration
Reveal.initialize({
	controls: true, progress: true,	center: true, hash: true,
	width: "100%", height: "100%", margin: 0, minScale: 1, maxScale: 1,

	transition: 'slide', // none/fade/slide/convex/concave/zoom
	// More info https://github.com/hakimel/reveal.js#dependencies
	dependencies: [
	/*{ src: 'plugin/highlight/highlight.js', async: true },
	{ src: 'plugin/zoom-js/zoom.js', async: true },
	{ src: 'plugin/notes/notes.js', async: true }*/
	]
});
</script>

<!-- Everything below this point is only used for the reveal.js demo page -->
<div class="share-reveal" style="display: none; position: absolute; bottom: 16px; left: 30%; 
margin-left: -139px; z-index: 20;">
<a class="share-reveal-editor" href="./">Anjung</a>
<a class="share-reveal-editor" href="#">Pesanan</a>
<a class="share-reveal-facebook" href="http://www.facebook.com/amin007.ledang">Facebook</a>
</div>

<style>
/* Social sharing */
.share-reveal a {
display: inline-block;
height: 34px;
line-height: 32px;
padding: 0 10px;
color: #fff;
font-family: Helvetica, sans-serif;
text-decoration: none;
font-weight: bold;
font-size: 12px;
vertical-align: top;
text-transform: uppercase;
box-sizing: border-box;
}

.share-reveal .share-reveal-editor {line-height: 30px;}
.share-reveal a + a {margin-left: 10px;}
.share-reveal-editor {
	border: 2px solid;
	background-color:#000000;
}
.share-reveal-facebook {background-color: #4B71B8;}
</style>

<script>
[].slice.call( document.querySelectorAll( '.share-reveal-facebook, .share-reveal-twitter' ) ).forEach( function( element ) {
element.addEventListener( 'click', function( event ) {
event.preventDefault();
var width = 500, height = 300;
var winTop = window.screenY + (window.screen.height / 2) - (height / 2);
var winLeft = window.screenX + (window.screen.width / 2) - (width / 2);
window.open(this.href, 'shre', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + width + ',height=' + height);
} );
} );

if( !navigator.userAgent.match( /(iphone|android)/gi ) && !!document.querySelector ) {
document.querySelector( '.share-reveal' ).style.display = 'block';
document.querySelector( '.fork-reveal' ).style.display = 'block';
}
</script>

</body>
</html>