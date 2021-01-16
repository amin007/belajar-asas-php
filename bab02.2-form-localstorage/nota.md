# nota tentang localstore
* [Borang Sekolah](https://github.com/kidino/borang-sekolah)
* [w3schools html5](https://www.w3schools.com/html/html5_webstorage.asp)
* [w3schools js](https://www.w3schools.com/jsref/prop_win_localstorage.asp)

___
# Php Version

```php
//phpinfo();
//echo PHPVERSION() . '<br>';
echo PHP_VERSION . '<br>';
echo PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION . '<br>';
echo '<pre>'; print_r($_SERVER); echo '</pre>';
```

```php
	function pautan($name,$web)
	{
		$icon1 = '<i class="fas fa-globe-asia fa-spin"></i>';
		$icon2 = '<i class="far fa-folder fa-spin"></i>';
		$icon = ($name != $web) ? $icon1 : $icon2;
		$link = ($web == null) ? $name : '<a target="_blank" href="' . $web
		. '">' . $name . '</a>';
		return '&nbsp;&nbsp;' . $icon . $link . '<hr>';
	}
```

___
# Standard
* http://www.php-fig.org/psr/psr-4/

# Sumber ilham dari
* http://jream.com/lab
* https://www.php-fig.org
* https://github.com/amin007/mvc-melayu

___
# Sumber ilham kawan-kawan
* Stylesheet
  * [Bootstrap](http://getbootstrap.com)
  * [Bootstrap.Themes](http://bootstrap.themes.guide)
  * [AdminLTE](https://adminlte.io/themes/AdminLTE)
  * [animate.css](https://daneden.github.io/animate.css)
  * [Sweet Alert](http://t4t5.github.io/sweetalert)
  * [FontAwesome](http://fortawesome.github.io/Font-Awesome)
  * [Enjoy Css](https://enjoycss.com)
* Javascript
  * [jQuery](http://jquery.com)
  * [jQuery.Form](http://malsup.com/jquery/form)
  * [backstretch](http://srobbin.com/jquery-plugins/backstretch)
* Gambar Percuma
  * [7-themes](http://7-themes.com)
  * [Pexels](https://pexels.com)
  * [Pixabay](https://pixabay.com)
  * [Unslpash](https://unsplash.com)
* Lain-lain
  * [markdown-cheatsheet](https://guides.github.com/pdfs/markdown-cheatsheet-online.pdf)