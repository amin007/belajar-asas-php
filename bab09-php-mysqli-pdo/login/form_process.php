<?php
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
# set pembolehubah dahulu, ikutkan cara ini tak selamat, tetapi untuk kefahaman asas 
$username = $_POST['user'];
$password = $_POST['pass'];
#--------------------------------------------------------------------------------------------------
# bentuk arahan sql dahulu
$sql = "select * from users where username = '$username' and password = '$password' ";
#--------------------------------------------------------------------------------------------------
$result = mysqli_query($dbh,$query);//execute SQL statement
if (!$result) die("Database access failed: " . mysqli_error());
//output error message if query execution failed
$rows = mysqli_num_rows($result);// get number of rows returned
#--------------------------------------------------------------------------------------------------
if($rows == 1):
	#==============================================================================================
		while ($row = mysqli_fetch_array($result))
		{
			$dataUser = $row['username'];
			//$dataPass = $row['password'];
			echo "<p>Login success!! Welcome - $dataUser ";
			
		}
	#==============================================================================================
else:
	 echo "Failed to login";
endif;
#--------------------------------------------------------------------------------------------------
//mysqli_close($dbh); //close the database connection
