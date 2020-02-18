<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Koleksi Makanan</title>
<meta name="description" content="koleksi makanan yang sedap dimakan">
<meta name="author" content="Amin Ledang">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/reveal.css">
<link rel="stylesheet" href="css/theme/black.css" id="theme">
<link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" type="text/css">
<!-- link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" -->

<!-- Theme used for syntax highlighting of code -->
<!-- link rel="stylesheet" href="lib/css/monokai.css" -->

<!--[if lt IE 9]>
<script src="lib/js/html5shiv.js"></script>
<![endif]-->
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

<div class="reveal">
<!-- Any section element inside of this container is displayed as a slide -->
<div class="slides">
<!-- ========================================================================================== -->
<section>
	<h1>Koleksi Makanan</h1>
	<h3>koleksi makanan yang sedap dimakan</h3>
</section>
<!-- ========================================================================================== -->
<?php
$senarai = array('biskut cipmore 10 keping - yani.jpg',
	'biskut cipmore 30 keping - yani.jpg',
	'biskut cipmore 100 keping - yani.jpg',
	'brownies RM 10 15pcs.jpg',
	'brownies RM 15.jpg',
	'kotak.jpg',
	'sambal garing - yani.jpg',
	'sambal garing RM 10 160gm.jpg'
);
foreach($senarai as $produk):?>
<section data-background="images/slides/<?php echo $produk ?>">
	<div style="background-color: rgba(0, 0, 0, 0.5); color: #fff;">
		<h4><i class="far fa-folder fa-spin"></i><?php echo $produk ?></h4>
		<table class="excel">
		<tr><td rowspan="2">
			<image src="images/slides/<?php echo $produk ?>"
			height="400" width="400">
			</td>
			<td align="top" valign="middle">Harga</td>
		</tr>
		<tr><td align="top">Diskaun</td></tr>
		</table>
	</div>
</section>
<!-- ========================================================================================== -->
<?php
endforeach; echo "\n";
?>
</div><!-- / div class="slides" -->
</div><!-- / div class="reveal" -->

<script src="js/reveal.js"></script>
<script>
// More info https://github.com/hakimel/reveal.js#configuration
Reveal.initialize({
	controls: true,
	progress: true,
	center: true,
	hash: true,

	transition: 'slide', // none/fade/slide/convex/concave/zoom
	// More info https://github.com/hakimel/reveal.js#dependencies
	dependencies: [
	{ src: 'plugin/highlight/highlight.js', async: true },
	{ src: 'plugin/zoom-js/zoom.js', async: true },
	{ src: 'plugin/notes/notes.js', async: true }
	]
});
</script>

<!-- Everything below this point is only used for the reveal.js demo page -->
<div class="share-reveal" style="display: none; position: absolute; bottom: 16px; left: 50%; 
margin-left: -139px; z-index: 20;">
<a class="share-reveal-editor" href="./">Home</a>
<a class="share-reveal-editor" href="https://slides.com">Try the online editor</a>

<a class="share-reveal-facebook" href="http://www.facebook.com/amin007.ledang">
Facebook
</a>

<a class="share-reveal-twitter" href="http://www.instagram.com/aminledang">
Instagram
</a>
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

.share-reveal svg {vertical-align: middle;}

.share-reveal a + a {margin-left: 10px;}

.share-reveal-editor {border: 2px solid #fff;}

.share-reveal-twitter,
.share-reveal-follow {background-color: #00aced;}
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