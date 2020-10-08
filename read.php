<?php 

include './includes/connects.php';

$conn = getConnection();

$sql = "SELECT * FROM clientes";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();



?>