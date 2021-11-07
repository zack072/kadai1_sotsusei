<?php
include('kadai1_functions.php');
$id = $_GET['id'];


$pdo = connect_to_db();

$sql = "DELETE FROM kadai1user_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

exec_query($stmt);

header("Location:kadai1_read.php");
exit();
