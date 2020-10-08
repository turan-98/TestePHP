<?php 

include './includes/connects.php';

$conn = getConnection();

$sql = 'INSERT INTO cliente (nome, email) VALUES (?,?)';

$conn->exec($sql)

?>