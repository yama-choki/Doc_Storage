<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# アプリケーション名
My_Laravel_Apps
* Doc Strage(資料保管庫)

# 開発理由
　私は以前、Vue.js（Nuxt.js）やFirebaseなどを使用して、ポートフォリオのURLを投稿し公開することを目的としたWebアプリを開発し、それを自分のポートフォリオとして企業に就職しました。  
　しかし、恥ずかしながら世の中に公開できるほどのクオリティではなく、自分だけでポートフォリオを量産できるわけでもなかったので、参考にした記事や教材のURLを投稿し簡単にアクセスできるようにしていました。  
　結局、そのアプリは全く使用しない状態になってしまったのですが、Laravelを独学しアウトプットをしたかったため、以前開発したアプリを資料を保管するアプリとして、開発しなおそうと思い、本アプリを開発しました。  
<br>

　記事を参考にして実装した機能は、その記事を見返せばスムーズに実装できる反面、しばらく使わないと検索しても他の記事などに埋もれて見つけられないという不都合もあります。  
　QiitaやZennやブログなど、ネット上のいろんなところにある有用な記事を保存できれば便利だと思うので、ぜひ利用されてください。
<br>

　現在作成している機能は上記の機能（Doc Strageの機能）だけですが、
* 今後別のアプリを開発する際、環境構築やデプロイなどの手間を省く
* アプリが肥大化した際、必要応じてデータベースの構成を変更、それに伴うシステムの調整の練習  
などの目的で、他のアプリを追加できるように構成しています。
<br>

# 主な使用要領
* 必要と感じたもの
* 開発時に参考にしたもの
* 今後、学習したい教材
* その他忘れたくない、ネット上のすべてのコンテンツ  
のURL保存できます。
<br>

1. 新規登録またはテストアカウントでログインしてください
2. Doc Strageページに移動しフォームに自由に入力し、Strage!!ボタンを押してください
3. Docuentボタンをクリックすると別タブで登録したURLのページが表示されます
4. Editボタンを押すと、投稿の内容を編集できます
5. Deleteを押すと、投稿が削除されます
6. ヘッダーの入力欄に任意のワードを入力の上、Searchボタンを押すと、タイトル、カテゴリー、テキストの中で検索し、表示できます。


### どんなアプリか覗きたい方・試しに触ってみたい方・企業の採用担当者様
　「どこの馬の骨かもわからない男が作ったアプリに、個人情報を登録するなんてありえない」という私と同じ考えの方向けにテストアカウントを用意しています。  

> メールアドレス：test@test.com  
> パスワード　　：password123  

でログイン可能です。  
　テストアカウントの投稿には、私がこれまで学習で使用した記事やダミーデータで作成した投稿などが保存されています。  
　テストアカウントでも、通常のアカウントどおりのすべての機能が使用できます。  
<br>
### このアプリ使えるじゃんって思った方
新規登録の上使用していただけると喜びます。
<br>

# 使用技術
* Laravel
* MySQL
* Tailwind css
* alpine.js
* JavaScript
<br>

# 機能一覧
* ログイン機能
* ログアウト機能
* ユーザー登録機能
* フォームのバリデーション機能（検証機能）
* 投稿機能
* 編集機能
* 削除機能（削除フラグを使用しています）
* 検索機能
* ページネーション機能
<br>

# アプリのURL
* https://yamachoki.sakura.ne.jp/My_Laravel_Apps/docs
