 
 <?php
	/*

 	*/
	$query = "SELECT telephone_number, country FROM theTable WHERE id=id";
	$result = $mysqli->query($query);

	$row = $result->fetch_array(MYSQLI_ASSOC);
	printf($row["telephone_number"], $row["country"]);

 
 /*
 	from the array into string
 */
 /*
 	upload string to ftp save mpac_file_number to db
 */
