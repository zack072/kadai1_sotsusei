<?php

function connect_to_db()
{ // DB接続情報
    $dbn = 'mysql:dbname=gsacf_d09_09;charset=utf8;port=3306;host=localhost';
    $user = 'root';
    $pwd = '';

    // DB接続
    try {
        return new PDO($dbn, $user, $pwd);
    } catch (PDOException $e) {
        exit('DB接続エラー:' . $e->getMessage());
    }
}

function exec_query($stmt)
{
    try {
        $stmt->execute();
    } catch (PDOException $e) {
        exit('sql実行エラー：' . $e->getMessage());
    }
}
