# 07_php2 ブックマークアプリ

## 紹介と使い方

  - Google Books APIsから検索して、お気に入りをMysqlに検索結果を保存

  - 本の名前とURL, コメントを記載し保存可能

## 工夫した点

  - 本の名前とURL, コメントを記載し保存可能
  - 検索ボックス追加
  - 見た目調整

### 課題08追記 2023/07/02
  - 削除ボタン追加
  - ブックマーク一覧(select.php)からクリックして更新(detal.php)できるように

### 課題09追記 2023/07/14
  - ブックマークアプリにログインを実装(作成途中)

## 苦戦した点

  - お気に入り(Bookmark)を検索された本の横にボタンを設けるなどして実装したいが未完成
  - Google Books APIだと本の種類が少ない。Amazonでやりたい
  - ブックマーク一覧からリンクで本に飛べるようにしたい

### 課題08追記 2023/07/02
  - 更新ボタンクリック後うまく更新が反映されない

## 参考にした web サイトなど

  - https://labo.kon-ruri.co.jp/google-books-apis/
  - https://developers.google.com/books/docs/overview?hl=ja
  - https://api.app-rox.com/search.php?tag=%E6%9C%AC%E3%83%BB%E6%9B%B8%E7%B1%8D
  - https://j-hack.gitbooks.io/lets-build-meteor-rest-api-server/content/step03.html