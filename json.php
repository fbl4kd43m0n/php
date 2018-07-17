//Transformando dados do banco de dados em json

<?php

$conn = new mysqli("localhost", "user", "pass", "database");

if ($conn->connect_error){
	echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM table ORDER BY field");

$data = array();

while ($row = $result->fetch_assoc()) {
	
	array_push($data, $row);
		
}

echo json_encode($data);

?>
