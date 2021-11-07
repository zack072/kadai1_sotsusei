<?php
include('kadai1_functions.php'); // 関数を記述したファイルの読み込み

if (
    !isset($_POST['username']) || $_POST['username'] == '' ||
    !isset($_POST['password']) || $_POST['password'] == '' ||
    !isset($_POST['deadline']) || $_POST['deadline'] == ''
) {
    echo json_encode(["error_msg" => "no input"]);
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];
$deadline = $_POST['deadline'];


$pdo = connect_to_db(); // 関数実行

$sql = 'INSERT INTO kadai1user_table(id, username, password, deadline, is_admin, is_deleted, created_at, updated_at) VALUES(NULL, :username, :password, :deadline, is_admin, is_deleted, sysdate(), sysdate())';

$stmt = $pdo->prepare($sql); //実行準備
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);

exec_query($stmt);

header("Location:kadai1_input.php");
exit();
