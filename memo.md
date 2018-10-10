http://10.0.1.80:8080/

php -S 10.0.1.80:8080 router.php

■PHPビルトインサーバ
https://www.granfairs.com/blog/cto/php-builtin-server

■PHPビルトインサーバ
http://web改善事例.com/php-web-server/

■IP固定
https://www.akakagemaru.info/port/windows10-ipaddress.html

■gulpと
https://qiita.com/hsakurai2/items/948443ad0b0231d9c269
http://bko.hateblo.jp/entry/2015/06/16/003813

■gulpfile.coffee
http://bashalog.c-brains.jp/16/10/12-191300.php

http://www.naka-sys.okinawa/gulp-php/


======
■コマンドプロンプトの文字コード
//UTF8
chcp 65001

//Shift-JIS
chcp 932

//確認
chcp

//UTF-8で立ち上げる
C:\Windows\System32\cmd.exe /K "chcp 65001"


===
■nodeのバージョン設定

//確認
node -v

- -
//インストール可能なバージョンの一覧
nodist dist

//指定バージョンの追加
nodist + 6.11.3

//指定バージョンへの変更
nodist 6.11.3

---
■npmのアップデート
//バージョン確認
npm --version

//アップデート
npm update -g npm

----
■npmインストール関連
//devDependenciesからの削除
npm uninstall パッケージ --save-dev

//Dependenciesからの削除
npm uninstall パッケージ --save

//devDependenciesに追加
npm install パッケージ --save-dev

//pacageのリストからdevDependenciesに追加
npm install --save-dev

//node-sass を立て直す？
npm rebuild node-sass

---
■PHPビルトインサーバ
//立ち上げ
php -S localhost:8000 router.php //←サーバを起動

//アドレス
http://localhost:8000

//終了
Ctrl+C

- -
//バージョン確認
php -v

----
■HTMLでPHP
https://teratail.com/questions/109772


