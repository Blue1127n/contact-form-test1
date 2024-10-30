## お問い合わせフォーム（contact-form-test1）

## リポジトリの設定
　1.gitクローン
 　　git clone git@github.com:coachtech-material/laravel-docker-template.git
  2.リモートリポジトリ作成
  　「contact-form-test1」でpublicで作成
  3.リモートリポジトリのURLの変更
   　git remote set-url origin 作成したリポジトリのURL
  4.現在のローカルリポジトリのデータをリモートリポジトリに反映

## Dockerの設定
  docker-compose up -d --build

## Laravelのパッケージのインストール
　1.docker-compose exec php bash　コマンドでPHPコンテナ内にログイン
  2.composer install　コマンドを使って必要なパッケージをインストール

## .env ファイルの作成
  1.cp .env.example .env  .env.exampleファイルをコピーして作成
  2.以下変更
   DB_HOST=mysql
   DB_DATABASE=laravel_db
   DB_USERNAME=laravel_user
   DB_PASSWORD=laravel_pass


  
  
