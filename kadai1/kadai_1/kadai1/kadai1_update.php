<?php
include('kadai1_functions.php'); // 関数を記述したファイルの読み込み

if (
    !isset($_POST['username']) || $_POST['username'] == '' ||
    !isset($_POST['password']) || $_POST['password'] == '' ||
    !isset($_POST['deadline']) || $_POST['deadline'] == '' ||
    !isset($_POST['id']) || $_POST['id'] == ''
) {
    echo json_encode(["error_msg" => "no input"]);
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];
$deadline = $_POST['deadline'];
$id = $_POST['id'];

$pdo = connect_to_db();
// var_dump($todo);
// var_dump($deadline);

$sql = "UPDATE kadai1user_table SET username=:username, password=:password, deadline=:deadline,
updated_at=sysdate() WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

exec_query($stmt);

header("Location:kadai1_read.php");
exit();
