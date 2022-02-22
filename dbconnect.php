<?php
try {//$db = new PDO('mysql:charset=UTF8;dbname=データベースの名前;host=localhost', 'username', 'password');
       $db = new PDO('mysql:dbname=s0bc8_contactform;host=mysql67.conoha.ne.jp;charset=utf8','s0bc8_contactform','Kakin0tane_33');
    } catch (PDOException $e) {
            echo 'DB接続エラー:' .$e->getMessage();
        }
?>