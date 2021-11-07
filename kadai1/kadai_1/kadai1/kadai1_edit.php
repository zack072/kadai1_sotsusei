<?php
// var_dump($_GET);
// exit();

// 関数ファイル読み込み
include("kadai1_functions.php");
// 送信されたidをgetで受け取る
$id = $_GET['id'];
// DB接続&id名でテーブルから検索
$pdo = connect_to_db();

$sql = 'SELECT * FROM kadai1user_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //strとは違う

exec_query($stmt);
$record = $stmt->fetch(PDO::FETCH_ASSOC); //allとは違う
// var_dump($record);
// exit();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB連携型 リスト（編集画面）</title>
</head>

<body>
    <form action="kadai1_update.php" method="POST">
        <fieldset>
            <legend>DB連携型 リスト（編集画面）</legend>
            <a href="kadai1_read.php">一覧画面</a>
            <div>
                username: <input type="text" name="username" value="<?= $record["username"] ?>">
            </div>
            <div>
                password: <input type="text" name="password" value="<?= $record["password"] ?>">
            </div>
            <div>
                deadline: <input type="date" name="deadline" value="<?= $record["deadline"] ?>">
            </div>
            <input type="hidden" name="id" value="<?= $record['id'] ?>">
            <div>
                <button>submit</button>
            </div>

        </fieldset>
    </form>

</body>

</html>