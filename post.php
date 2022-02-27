<?php

require_once('functions.php');

$pdo = connectDB();

// 投稿をデータベースに保存
if (!empty($_POST['text'])) {
    if (!empty($_POST['image'])) {
        $text = $_POST['text'];
        $image = $_FILES['image'];

        $sql = 'INSERT INTO lists(text, image, created_at) VALUES(:text,:image,now()) ';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':text', $text, PDO::PARAM_STR);
        $stmt->bindValue(':image', $image, PDO::PARAM_STR);
        $stmt->execute();
    
    } else {
        $text = $_POST['text'];

        $sql = 'INSERT INTO lists(text, created_at) VALUES(:text,now()) ';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':text', $text, PDO::PARAM_STR);
        $stmt->execute();
        echo 'aaa';
    }
}

header('Location:post_complete.php');
exit;
