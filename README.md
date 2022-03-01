# 技術力調査（contactform/skillcheck-1 & skillcheck-2）

2種類のお問合せフォームを制作

skillcheck-1 →　phpのみで作成 (http://skillcheck-1.contactform.com.lkjhgfdsa.conohawing.com)  
skillcheck-2 →　php・css・JavaScriptを用いて作成 (http://skillcheck-2.contactform.com.lkjhgfdsa.conohawing.com)  
 
# 開発環境
 
macOS  
VirtualBox Linux(Ubuntu)
 
# 実際に費やした時間
 
制作期間　02/11~02/28　合計 59時間

## 時間の内訳
- ### 仮想環境構築
時間　29時間  

- ### お問合せフォーム制作  
時間　23時間  

- ### 提出準備
時間　7時間
 
# 実装中に問題となったこと・工夫したところ

## 問題となったこと
- 仮想環境構築は初挑戦であり、課題の内容を把握することに時間を要した  
- Linux(Ubuntu)をダウンロードし、VirtualBoxで読み込む際に手こずった   
- 仮想環境にて作業を開始したが挙動が極端に遅く、制作ができなかった　→　解決できずmacOSを使用  
- お問合せ完了後に確認メールを送るが、フリーメール（google/yahoo）に送信できなかった　 
- お問合せフォームにて、件名（プルダウン）で選択された内容が入力エラーの際に保持されず悩んだ  
 
## 工夫したところ
- お問合せフォーム（skillcheck-2)では、JavaScriptを用いて”CONTACTFORM”をタイプライターで書いているように表現した  
- データベース登録の際、動作確認のURLがあれば便利であると判断し、レンタルサーバー（ConoHa WING）を使用  

# 改善点
- macOSで制作していたがXAMPPを入れ使用していた。MAMPを使えば都合がいいことが多かったと思う
- 仮想環境を構築したが、使用できなかったことを残念に思う（挙動が遅い問題の解決を目指す）
- フリーメールにも確認メールを送れるよう改善したい

 
# どのような動作テストを行ったか
 
macOSにてXAMPPを立ち上げ、ローカルホストで画面を確認しながらプログラムファイルを作成。  
メール送信やデータベース登録の動作テストは、レンタルサーバーにファイルを格納し動作確認のURLを発行し確認。  

動作確認できます
↓↓↓
skillcheck-1 →　http://skillcheck-1.contactform.com.lkjhgfdsa.conohawing.com  

skillcheck-2 →　http://skillcheck-2.contactform.com.lkjhgfdsa.conohawing.com

 
# 参考資料または参考サイト
 
- https://youtu.be/tHLnMiRXzNw  
- https://youtu.be/HNHjpmdPFNU  
- https://eng-entrance.com/what-is-ubuntu
- よくわかるPHPの教科書（PHP7対応版）  
- http://www.ci.seikei.ac.jp/advpro/docs/VirtualBox%EF%BC%86Ubuntu%E3%82%A4%E3%83%B3%E3%82%B9%E3%83%88%E3%83%BC%E3%83%AB%E3%83%9E%E3%83%8B%E3%83%A5%E3%82%A2%E3%83%AB.pdf

