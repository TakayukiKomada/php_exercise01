<?php
$count1 = '';
$count2 = '';
$count3 = '';
$err_msg = '';
$msg = '';
$sum = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $count1 = $_POST['count1'];
    $count2 = $_POST['count2'];
    $count3 = $_POST['count3'];

    if (is_numeric($count1) && is_numeric($count2) && is_numeric($count3)) {
        $sum = $count1 + $count2 + $count3;
    } else {
        $err_msg = '数字を入力してください。';
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
            <?php if (isset($err_msg)) : ?>
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
        <?php if (isset($sum)) {
            echo '<br>';
            echo htmlspecialchars("合計値は{$sum}です", ENT_QUOTES, 'UTF-8');
        }
        ?>
    </div>
</body>

</html>
