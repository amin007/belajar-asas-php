<?php
define('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']) . '/');
//echo '<link rel="stylesheet" type="text/css" href="' . URL . '../styles/theme-base.css" media="screen">';

$_SERVER['BASE_PAGE'] = 'archive/2020.php';
include_once __DIR__ . '/../include/prepend.inc';
//include_once __DIR__ . '/../include/pregen-news.inc';
include_once __DIR__ . '/2020-xml.php';
news_archive_sidebar();
site_header("News Archive - 2020");
//site_header("News Archive - 2020", array("cache" => true));
?>

<h1>News Archive - 2020</h1>

<p>
 Here are the most important news items we have published in 2020 on PHP.net.
</p>

<hr>

<?php
//echo '$NEWS_ENTRIES|' . $NEWS_ENTRIES . '<hr>';
//echo '<pre>'; print_r($NEWS_ENTRIES); echo '</pre>';
print_news2($NEWS_ENTRIES, null, 500, 2020);

/* %s/<a href="\(.*\)"><img src="\/images\/news\/\(.*\)" alt="\(.*\)" width.*><\/a>/<?php news_image("\1", "\2", "\3"); ?>/g */
site_footer(array('elephpants' => true, 'sidebar' => $SIDEBAR_DATA));

#--------------------------------------------------------------------------------------------------
function print_news2($NEWS_ENTRIES, $a, $b, $c)
{
	$tajuk = array('Image','id','date','Tajuk','published','perenggan');
	echo '<table border="1">';
	echo '<tr>';
		foreach($tajuk as $utama):
			echo '<th>' . $utama . '</th>';
		endforeach;
	echo '</tr>';
	foreach($NEWS_ENTRIES as $key => $item):
		$image = findImage($item);
		list($id,$permlink) = findId($item);
		list($published,$newsdate) = findDate($item);
		list($p,$ul) = findContent($item);
		$item['content'] = (is_array($p)) ? '': $p;
		echo '<tr>';
		echo '<td>' . $image . '</td>';
		echo '<td>' . $id . '</td>';
		echo '<td>' . $newsdate . '</td>';
		echo '<td>' . $item['title'] . '</td>';
		echo '<td>' . $published . '</td>';
		echo '<td>' . $item['content'] . '</td>';
		echo '</tr>';
	endforeach;
	echo '</table>';
}
#--------------------------------------------------------------------------------------------------
function print_news3($NEWS_ENTRIES, $a, $b, $c)
{
	foreach($NEWS_ENTRIES as $key => $item):
		$image = findImage($item);
		list($id,$permlink) = findId($item);
		list($published,$newsdate) = findDate($item);
		list($p,$li) = findContent($item);
		$item['content'] = $p;
		artikel($item,$image,$id,$permlink,$newsdate);
	endforeach;
	#
}
#--------------------------------------------------------------------------------------------------
function artikel($item,$image,$id,$permlink,$newsdate)
{
        echo <<< EOT
<article class="newsItem">
	<header>
		<div class="newsImage">{$image}</div>
		<h2 class="newstitle"><a id="{$id}" href="{$permlink}" rel="bookmark"
		class="bookmark">{$item["title"]}</a></h2>
	</header>
	<time class="newsdate" datetime="{$item["published"]}">{$newsdate}</time>
	<div class="newscontent">
		{$item["content"]}
	</div>
</article>

EOT;
}
#--------------------------------------------------------------------------------------------------
function findImage($item)
{
	$image = "";
	if(isset($item["newsImage"])) {
		$image = news_image2(
		$item["newsImage"]["link"], 
		$item["newsImage"]["content"], 
		$item["newsImage"]["title"], false);
	}
	#
	return $image;
}
#--------------------------------------------------------------------------------------------------
function news_image2($URL, $image, $alt, $print = true)
{
	$mainURL = 'https://www.php.net/images/';
	$pic = $mainURL . 'news/' . $image;
	//$align = ' style="float: right;"';
	$align = null; //' align="right"';
	$str = "<a href=\"$URL\"><img src=\"$pic\" alt=\"$alt\" $align>"
	. "</a>";
	if ($print) { echo $str; }

    return $str;
}
#--------------------------------------------------------------------------------------------------
function findId($item)
{
	/*
	scheme - e.g. http
	host | port | user | pass | path 
	query - after the question mark ?
	fragment - after the hashmark #
	*/
	$id = parse_url($item['id']);
	$id = $id["fragment"];
	# debug permlink
	//echo '<pre>'; print_r($item['link']); echo '</pre>';
	# Find the permlink
	foreach($item['link'] as $key => $link)
	{
		$href = $link['@attributes']['href'];
		$rel = $link['@attributes']['rel'];
		$type = $link['@attributes']['type'];
		//echo "<br>\$href=$href<br>\$rel=$rel<br>\$type=$type";
		if ($rel === "via") {
			$permlink = $href;
			break;
		}
	}
	if (!isset($permlink)) {
		$permlink = "#" .$id;
	}

	return array($id,$permlink);
}
#--------------------------------------------------------------------------------------------------
function findDate($item)
{
	$published = substr($item["published"], 0, 10);
	$nixtimestamp = strtotime($published);
	$newsdate = date("d M Y", $nixtimestamp);
	/*if ($onlyyear && date("Y", $nixtimestamp) != $onlyyear) {
		$count--;
		continue;
	}*/
	#
	return array($published,$newsdate);
}
#--------------------------------------------------------------------------------------------------
function findContent($item)
{
	$p = $ul = null;
	# debug $item['content']
	//echo '$item[content]<pre>'; print_r($item['content']); echo '</pre>';
	# buat tatasusunan p //$item['content']['div']['p']
	foreach($item['content'] as $key => $a):
	foreach($a as $b => $c):
		//echo '<pre>$key='; print_r($key); echo '</pre>';
		if($key == 'div') {
			if($b === 'p') {
				echo '<br>$b='.$b;
				$p0 = implode("</p>\r<p>",$a[$b]);
				$p1 = "\r<p>$p0</p>\r";
			}
			else {
				echo '<br>$b='.$b;
				$ul = "\r<ul>\r<li>" . implode("</li>\r<li>",$a['ul']['li'])
					. "</li>\r</ul>\r";
			}
			$p = $p1 . $ul;
			break;
		}
	endforeach;
	endforeach;
	if (!isset($p)) {
		$p = "#";
	}

	return array($p,$ul);
}
#--------------------------------------------------------------------------------------------------