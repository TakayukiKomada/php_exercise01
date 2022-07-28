<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['items'];

    if (empty($name)) {
        $err_msgs[] = "氏名を入力してください";
    }
    if (empty($tel)) {
        $err_msgs[] = "電話番号を入力してください";
    }
    if (empty($email)) {
        $err_msgs[] = "メールアドレスを入力してください";
    }
    function h($str)
    {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    if (empty($err_msgs)) {

        header('Location:05_confirm.php?purchase_item=' . $item_key);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4課題</title>



<body>
    <h3>個人情報を入力してください</h3>

    <?php if ($err_msgs) : ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">

        <div>
            <label for="">氏名</label><br>
            <input type="text" name="name"><br>
            <label for="">電話番号</label><br>
            <input type="number" name="tel"><br>
            <label for="">メールアドレス</label><br>
            <input type="text" name="email">
        </div>

        <h3>購入するものを選択してください</h3>
        <select name="items">
            <?php foreach ($items as $item) : ?>
                <option value="<?= $item ?>"><?= $item ?></option>';
            <?php endforeach; ?>
        </select>
        <div class=" submit">
            <input type="submit" value="送信">
        </div>
    </form>

    

</body>

</html>
