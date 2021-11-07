<?php
include('kadai1_functions.php'); // 関数を記述したファイルの読み込み
$pdo = connect_to_db(); // 関数実行

$sql = 'SELECT * FROM kadai1user_table';
$stmt = $pdo->prepare($sql);

exec_query($stmt);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// データの出力用変数（初期値は空文字）を設定
$output = "";
foreach ($result as $record) {
    $output .= "<tr>";
    $output .= "<td>{$record["username"]}</td>";
    $output .= "<td>{$record["password"]}</td>";
    $output .= "<td>{$record["deadline"]}</td>";
    // edit deleteリンクを追加
    $output .= "<td><a href='kadai1_edit.php?id={$record["id"]}'>edit</a></td>";
    $output .= "<td><a href='kadai1_delete.php?id={$record["id"]}'>delete</a></td>";
    $output .= "</tr>";
}
// $recordの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
// 今回は以降foreachしないので影響なし
unset($record);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB連携型 リスト（一覧画面）</title>
</head>

<body>
    <fieldset>
        <legend>DB連携型 リスト（一覧画面）</legend>
        <a href="kadai1_input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th>名前</th>
                    <th>パスワード</th>
                    <th>日付</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?= $output ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>