<?php
$count1 = '';
$count2 = '';
$count3 = '';
$err_msg = '';
$msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $count1 = $_POST['count1'];
    $count2 = $_POST['count2'];
    $count3 = $_POST['count3'];

    $sum = $count1 + $count2 + $count3;


    if (empty($count1) && empty($count2) && empty($count3)) {
        $err_msg = '数字を入力してください。';
    } else {
        $msg = "合計値は{$sum}です";
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>全てに数字を入力してください</title>
</head>

<body>
    <h1>全てに数字を入力してください</h1>
    <form action="" method="POST">
        <div>
            <ul>
                <li>全てに数字を入力してください</li>
            </ul><br>
            <p>1つ目の数字</p>
            <input type="number" name="count1">
            <p>2つ目の数字</p>
            <input type="number" name="count2">
            <p>3つ目の数字</p>
            <input type="number" name="count3">
            <?php if (!empty($err_msg)) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
        <?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?>
    </div>
</body>

</html>
