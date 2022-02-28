<?php
session_start();
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // フォームの送信時にエラーチェック
    if ($post['item'] === '') {
        $error['item'] = 'blank';
    }
    if ($post['name'] === '') {
        $error['name'] = 'blank';
    }
    if ($post['email'] === '') {
        $error['email'] = 'blank';
    } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'email';
    }
    if ($post['tel'] === '') {
        $error['tel'] = 'blank';
    } else if (!filter_var($post['tel'], FILTER_VALIDATE_INT) === false) {
        $error['tel'] = 'tel';
    }
    if ($post['contact'] === '') {
        $error['contact'] = 'blank';
    }
    if (count($error) === 0) {
        // エラーがない時は確認画面に移動
        $_SESSION['form'] = $post;
        header('Location: confirm.php');
        exit();
    }
} else {
    if (isset($_SESSION['form'])) {
        $post = $_SESSION['form'];
    }
    
}

?>