<?php
#--------------------------------------------------------------------------------------------------
if (!class_exists('Memcached')) {
    include ("memcached.php");
}
$memtest = new Memcached();
$memtest->addServer("localhost", 11211);
#--------------------------------------------------------------------------------------------------
require 'tatarajah.php';
#--------------------------------------------------------------------------------------------------
$dbh = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or
die("Unable to connect to MySQL: " . mysqli_error());
//connect to MySQL server if (!$dbh)

//if connection failed output error message
if (!mysqli_select_db($dbh,DB_NAME)) die("Unable to select database: " . mysqli_error());
//if selection fails output error message
#--------------------------------------------------------------------------------------------------
$query = "SELECT `LOKALITI UNTUK INDEKS` as lokaliti FROM a_johor WHERE
`LOKALITI UNTUK INDEKS` like '%bakri%'";
$result = mysqli_query($dbh,$query);//execute SQL statement
if (!$result) die("Database access failed: " . mysqli_error());
//output error message if query execution failed
$rows = mysqli_num_rows($result);// get number of rows returned
#--------------------------------------------------------------------------------------------------
$querykey = "DBQUERY" . md5($query);
$result2 = $memtest->get($querykey);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($querykey,'querykey');
//semakPembolehubah($result2,'result2');
#--------------------------------------------------------------------------------------------------
$kira = 1;
#--------------------------------------------------------------------------------------------------
if($rows):
	#==============================================================================================
	if ($result2) {
		print "<p>" . ($kira++) . " | Data was: |";
		semakPembolehubah($result2,'result2');
		print "Caching success!</p><p>Retrieved data from memcached!</p>";
	} else {
	#==============================================================================================
		while ($row = mysqli_fetch_array($result))
		{
			$data = $row['lokaliti'];
			$memtest->set($querykey, $data);
			print "<p>" . ($kira++) . " | Data was: " . $data . " | ";
			print "This direct from the DB</p>";
		}
	#==============================================================================================
	}//*/
	#==============================================================================================
endif;
#--------------------------------------------------------------------------------------------------
/*if ($rows)
{
	while ($row = mysqli_fetch_array($result))
	{
		echo 'lokaliti: ' . $row['lokaliti'] . '<br>';
		echo '<hr>';
	}
}//*/
#--------------------------------------------------------------------------------------------------
//mysqli_close($dbh); //close the database connection