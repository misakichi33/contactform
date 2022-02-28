<?php
    $to ='misakichi_610@misakichisub.pannosuke.com';
    $from = $email;//ユーザーのアドレス
    $subject = 'お問い合わせが届きました';
    $body = <<<EOT
件名：{$post['item']}
名前： {$post['name']}
メールアドレス： {$post['email']}
電話番号：{$post['tel']}
お問合せ内容：
{$post['contact']}
EOT;
    mb_send_mail($to, $subject, $body, "From: {$from}");


    // ユーザーへメールを送信
    $to_user ='misakichi_610@misakichisub.pannosuke.com';
    $from_user = $email;
    $subject_user = 'お問い合わせありがとうございます！';
    $body_user = <<<EOT

以下の内容でお問合せをお受けいたしました。
内容を確認後、お返事させていただきます。

*----*----*----*----*----*----*----*----*----*----*----*----*
件名：{$post['item']}
名前： {$post['name']}
メールアドレス： {$post['email']}
電話番号：{$post['tel']}
お問合せ内容：
{$post['contact']}
*----*----*----*----*----*----*----*----*----*----*----*----*

EOT;
    mb_send_mail($from_user, $subject_user, $body_user);

?>
