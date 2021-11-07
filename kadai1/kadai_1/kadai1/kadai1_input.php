<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=“https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css” rel=“stylesheet” />
    <link href=“https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css” rel=“stylesheet” />
    <link href=“https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap” rel=“stylesheet” />
    <title>DB連携型 リスト（入力画面）</title>
</head>

<body>
    <form action="kadai1_create.php" method="POST">
        <fieldset>
            <legend>DB連携型 リスト（入力画面）</legend>
            <a href="kadai1_read.php">一覧画面</a>
            <div>
                名前: <input type="username" name="username">
            </div>
            <div>
                パスワード: <input type="password" name="password">
            </div>
            <div>
                日付: <input type="date" name="deadline">
            </div>
            <div>
                <button type="submit" class="row, btn btn-primary">保存</button>
                <!-- <button class="btn btn-primary">submit</button> -->
            </div>
        </fieldset>
    </form>

</body>

</html>