<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 6;

$stmt->execute(array($id));

// $conn->rollBack();
$conn->commit();

echo "Deletado com sucesso!";

?>