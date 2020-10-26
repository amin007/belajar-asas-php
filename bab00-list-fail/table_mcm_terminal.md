# papar koding mysql seperti dalam terminal

```
amin@localhost:contoh_jadual> SELECT * FROM dnschanger;
+--------------------+-----------------+-----------------+
| Streamyx           | 202.188.18.188  | 1.9.1.9         |
+--------------------+-----------------+-----------------+
| Google DNS         | 8.8.8.8         | 8.8.4.4         |
+--------------------+-----------------+-----------------+
| Cloudflare DNS     | 1.1.1.1         | 1.0.0.1         |
+--------------------+-----------------+-----------------+
| Cloudflare3 DNS    | 1.1.1.3         | 1.0.0.3         |
+--------------------+-----------------+-----------------+
| OpenDNS            | 208.67.222.123  | 208.67.222.220  |
+--------------------+-----------------+-----------------+
| OpenDNS Home       | 208.67.222.222  | 208.67.220.220  |
+--------------------+-----------------+-----------------+
| Quad9              | 9.9.9.9         | 149.112.112.112 |
+--------------------+-----------------+-----------------+
| CleanBrowsing      | 185.228.168.9   | 185.228.169.9   |
+--------------------+-----------------+-----------------+
| Verisign           | 64.6.64.6       | 64.6.65.6       |
+--------------------+-----------------+-----------------+
| Alternate DNS      | 198.101.242.72  | 23.253.163.53   |
+--------------------+-----------------+-----------------+
| AdGuard DNS        | 176.103.130.130 | 176.103.130.131 |
+--------------------+-----------------+-----------------+
| Level 3            | 209.244.0.3     | 209.244.0.3     |
+--------------------+-----------------+-----------------+
| Norton ConnectSafe | 199.85.126.10   | 199.85.127.10   |
+--------------------+-----------------+-----------------+
| OpenNic            | 10.150.40.234   | 50.116.23.211   |
+--------------------+-----------------+-----------------+
| DNS Advantage      | 156.154.70.1    | 156.154.71.1    |
+--------------------+-----------------+-----------------+
| DNS Watch          | 84.200.69.80    | 84.200.70.40    |
+--------------------+-----------------+-----------------+
| Comodo Secure DNS  | 8.26.56.26      | 8.20.247.20     |
+--------------------+-----------------+-----------------+
| GreenTeamDNS       | 81.218.119.11   | 209.88.198.133  |
+--------------------+-----------------+-----------------+
| SafeDNS            | 195.46.39.39    | 195.46.39.40    |
+--------------------+-----------------+-----------------+
| SmartViper         | 208.76.50.50    | 208.76.51.51    |
+--------------------+-----------------+-----------------+
| Dyn                | 216.146.35.35   | 216.146.36.36   |
+--------------------+-----------------+-----------------+
```

##cabaran
jadi kita ada 2 masalah iaitu 
1. macam mana nak buat + dan - sesuai dengan saiz medan dalam jadual
2. macam mana nak buat space data lain ikut saiz data yang paling besar

##dapatkan pembolehubah utama
jadi kita set saiz pembolehubah utama untuk medan-medan tersebut
```php
	$kira[01] = $kira[02] = $kira[03] = 0;
	$s1 = $s2 = $s3 = '';
```

lepas itu kita guna arahan ulangan/loop untuk dapatkan nilai medan yang paling besar

```php
	foreach(dnschanger() as $name => $web):
		$data = explode('|', $web);
		//$data0 = strlen($data[0]);
		if(strlen($data[1]) > $kira[01]) $kira[01] = strlen($data[1]);
		if(strlen($data[2]) > $kira[02]) $kira[02] = strlen($data[2]);
		if(strlen($data[3]) > $kira[03]) $kira[03] = strlen($data[3]);
	endforeach;
```

explode() digunakan untuk pecahkan $web kepada beberapa tatasusunan

strlen() digunakan untuk mengukur bilangan saiz data yang paling besar dan dimasukkan dalam $kira

#paparkan simbol '-'
kira boleh guna for untuk paparkan nilai tersebut
```php
	for($i = 1;$i < $kira[01]; $i++): $g .= '-'; endfor;
```

berikut adalah contoh koding satu garisan + dan -
```php
	$g = "\n+-"; for($i = 1;$i < $kira[01]; $i++): $g .= '-'; endfor;
	$g .= '-+'; for($i = 1;$i < $kira[02]; $i++): $g .= '-'; endfor;
	$g .= '-+'; for($i = 1;$i < $kira[03]; $i++): $g .= '-'; endfor;
	$g .= '--+';
```

lepas itu kita kena kita space ' '
```php
	for($i = 1; $i < ($kira[01] - strlen($data[1]) + 1); $i++): $s1.=" "; endfor;
```

baru kita cantumkan jadi satu baris
```php
	echo "$g\n| " . $data[1] . "$s1|" . $data[2] . "$s2|" . $data[3]. "$s3 |";
```
___
# Php Version

```php
//phpinfo();
//echo PHPVERSION() . '<br>';
echo PHP_VERSION . '<br>';
echo PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION . '<br>';
echo '<pre>'; print_r($_SERVER); echo '</pre>';
```

# Standard
* http://www.php-fig.org/psr/psr-4/

# Sumber ilham dari
* http://jream.com/lab
* https://www.php-fig.org
* https://github.com/amin007/mvc-melayu
___
# Sumber ilham kawan-kawan
* Php
  * [Learn-Php-For-Wordpress](https://code.tutsplus.com/courses/learn-php-for-wordpress/lessons/php-in-the-loop)
* Stylesheet
  * [Bootstrap](http://getbootstrap.com)
  * [Bootstrap.Themes](http://bootstrap.themes.guide)
  * [AdminLTE](https://adminlte.io/themes/AdminLTE)
  * [animate.css](https://daneden.github.io/animate.css)
  * [Sweet Alert](http://t4t5.github.io/sweetalert)
  * [FontAwesome](http://fortawesome.github.io/Font-Awesome)
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
