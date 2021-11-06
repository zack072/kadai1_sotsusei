<?php
var_dump($_POST);
exit();

include('functions.php'); // 関数を記述したファイルの読み込み

if (
    !isset($_POST['todo']) || $_POST['todo'] == '' ||
    !isset($_POST['deadline']) || $_POST['deadline'] == ''
) {
    echo json_encode(["error_msg" => "no input"]);
    exit();
}

$todo = $_POST['todo'];
$deadline = $_POST['deadline'];

$pdo = connect_to_db(); // 関数実行

// $dbn = 'mysql:dbname=gsacf_d09_09;charset=utf8;port=3306;host=localhost';
// $user = 'root';
// $pwd = '';

// try {
//   $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//   exit('DB Error：' . $e->getMessage());
// }

$sql = 'INSERT INTO todo_table(id, todo, deadline, created_at, updated_at) VALUES(NULL, :todo, :deadline, sysdate(), sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':todo', $todo, PDO::PARAM_STR);
$stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);

exec_query($stmt);
// try {
//   $stmt->execute();
// } catch (PDOException $e) {
//   exit('sql実行エラー：' . $e->getMessage());
// }
header("Location:todo_input.php");
exit();
