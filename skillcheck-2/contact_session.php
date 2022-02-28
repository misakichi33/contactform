<?php

session_start();

// 入力画面からのアクセスでなければ、戻す
if (!isset($_SESSION['form'])) {
    header('Location: index.php');
    exit();
} else {
    $post = $_SESSION['form'];
}
    $item= $post['item'];
    $name= $post['name'];
    $email= $post['email'];
    $tel= $post['tel'];
    $contact= $post['contact'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {//false
            // データベースへ接続
            require('dbconnect.php');
            //データベースへ書き込む
            $contact = $db->exec("INSERT INTO `contactform`(`item`, `name`, `email`, `tel`, `contact`) VALUES ('$item', '$name','$email', '$tel','$contact')");  
    
            // 管理者とユーザーへメールを送信
            require('mail.php');

    // セッションを消してお礼画面へ
    unset($_SESSION['form']);
    header('Location: thanks.html');
    exit();

}
?>
