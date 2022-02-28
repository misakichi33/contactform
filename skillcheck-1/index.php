<?php require('check.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合せフォーム</title>
</head>
<body>
    <!-- お問合せフォーム画面 -->
    <div class="container">
        <form action="" method="POST" novalidate>
            <p>お問い合わせ</p>

            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <label for="inputItem">件名</label>
                    </div>
                    <div class="col-md-8">
                        <select name="item" id="inputItem" class="form-control" value="<?php echo htmlspecialchars($post['item']); ?>" required autofocus>
                            <option value="" >件名を選択してください</option>
                            <option value="ご意見" <?php echo $post['item'] == "ご意見" ? "selected": null?>>ご意見</option>
                            <option value="ご感想" <?php echo $post['item'] == "ご感想" ? "selected": null?>>ご感想</option>
                            <option value="その他" <?php echo $post['item'] == "その他" ? "selected": null?>>その他</option>
				        </select>
                        <?php if ($error['item'] === 'blank'): ?>
                            <p class="error_msg">※件名を選択下さい</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <label for="inputName">お名前</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="name" id="inputName" class="form-control" value="<?php echo htmlspecialchars($post['name']); ?>" required autofocus>
                        <?php if ($error['name'] === 'blank'): ?>
                            <p class="error_msg">※お名前をご記入下さい</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <label for="inputEmail">メールアドレス</label>
                    </div>
                    <div class="col-8">
                        <input type="email" name="email" id="inputEmail" class="form-control" value="<?php echo htmlspecialchars($post['email']); ?>" required>
                        <?php if ($error['email'] === 'blank'): ?>
                            <p class="error_msg">※メールアドレスをご記入下さい</p>
                        <?php endif; ?>
                        <?php if ($error['email'] === 'email'): ?>
                            <p class="error_msg">※メールアドレスを正しくご記入ください</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <label for="inputTel">電話番号</label>
                    </div>
                    <div class="col-8">
                        <input type="tel" name="tel" id="inputTel" class="form-control" value="<?php echo htmlspecialchars($post['tel']); ?>" required>
                        <?php if ($error['tel'] === 'blank'): ?>
                            <p class="error_msg">※電話番号をご記入下さい</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <label for="inputContent">お問い合わせ内容</label>
                    </div>
                    <div class="col-8">
                        <textarea name="contact" id="inputContent" rows="10" class="form-control" required><?php echo htmlspecialchars($post['contact']); ?></textarea>
                        <?php if ($error['contact'] === 'blank'): ?>
                            <p class="error_msg">※お問い合わせ内容をご記入下さい</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8 offset-4">
                    <button type="submit">確認画面へ</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>