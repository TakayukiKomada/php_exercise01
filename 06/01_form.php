<?php
<<<<<<< HEAD
// 変数を用意
$age = '';
$err_msg = '';
$msg = "";
// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age =  $_POST['age'];

    if (empty($age)) {
        $err_msg = '未入力です';
    } else {
        $msg = "私は{$age}歳です";
=======
$age = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $age = $_POST['age'];

    if (empty($age)) {
        $err_msg = '未入力です';
>>>>>>> main
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>POSTメソッド</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <label for="">年齢</label><br>
<<<<<<< HEAD
            <input type="" name="age" value="">
=======
            <input type="" name="age" value="<?= $age ?>">
>>>>>>> main
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
<<<<<<< HEAD
        <?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?>
=======
        <?="私は".htmlspecialchars($age, ENT_QUOTES, 'UTF-8')."歳です" ?>
>>>>>>> main
    </div>
</body>

</html>
