<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "私の名前は、" . $_POST['message'] . "です。<br>";
} ?>
<a href="02_form.php">戻る</a>
