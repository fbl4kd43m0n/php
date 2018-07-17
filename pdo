<?php

$conn = new PDO("mysql:dbname=database;host=localhost", "user", "pass");

$stmt = $conn->prepare("SELECT * FROM table ORDER BY field");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){

	foreach ($row as $key => $value){

		echo "<strong>".$key.":</strong>".$value."<br/>";
	
	}
	
	echo "====================================================================<br>";

}


?>
