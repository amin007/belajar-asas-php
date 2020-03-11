<?php 
// Include the database config file 
include_once 'dbConfig.php'; 
 
if(!empty($_POST["country_id"]))
{
	// Fetch state data based on the specific country 
	$query = "SELECT * FROM tb_states WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY state_name ASC"; 
	$result = $db->query($query); 

	// Generate HTML of state options list 
	if($result->num_rows > 0){ 
		echo '<option value="">Select State</option>'; 
		while($row = $result->fetch_assoc())
		{
			echo '<option value="'.$row['id'].'">'.$row['state_name'].'</option>'; 
		}
	}else{ 
		echo '<option value="">State not available</option>'; 
	}
}elseif(!empty($_POST["state_id"]))
{
	// Fetch city data based on the specific state 
	$query = "SELECT * FROM tb_cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC"; 
	$result = $db->query($query); 

	// Generate HTML of city options list 
	if($result->num_rows > 0){ 
		echo '<option value="">Select city</option>'; 
		while($row = $result->fetch_assoc()){  
			echo '<option value="'.$row['id'].'">'.$row['city_name'].'</option>'; 
		}
	}else{
		echo '<option value="">City not available</option>'; 
	}
}
?>