<?php
$age = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $age = $_POST['age'];

    if (empty($age)) {
        $err_msg = '未入力です';
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
            <input type="" name="age" value="<?= $age ?>">
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
        <?="私は".htmlspecialchars($age, ENT_QUOTES, 'UTF-8')."歳です" ?>
    </div>
</body>

</html>
