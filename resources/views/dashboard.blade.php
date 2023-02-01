<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doc Storage</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-[100vh]">
    <x-app-layout>
        <header>
            <x-slot name="header">
                <div class="flex">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight w-1/5">
                        Dashboard
                    </h2>
                </div>
            </x-slot>
        </header>
        <div class="header-space" style="height:140px;"></div>
        <div class="container mx-auto lg:w-3/5 mb-4">
            <div class="user-info bg-white rounded drop-shadow m-2">
                <div class="p-2">
                    <div>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            アプリについて
                        </h2>
                        <p>本アプリを使用していただきありがとうございます。</p>
                        <p>本アプリは”WebサイトのURLを保存する”・”保存したURLを友人に共有する”アプリです。</p>
                        <p>このページではアプリの使用要領について説明します。</p>
                    </div>
                    <div>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            テストアカウントでログインの方へ
                        </h2>
                        <p>テストアカウントは共有（誰でもログイン可能な）アカウントになります。</p>
                        <p>友達のメールアドレスの登録など、テストアカウントでデータの操作を行った際は、データを元の状態に戻してログアウトしてください。</p>
                    </div>
                </div>
            </div>
            <div class="user-info bg-white rounded drop-shadow mx-2 mt-3">
                <div class="p-2">
                    <div>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            Homeページ
                        </h2>
                        <p>アカウント管理や友人の情報を管理するページです。</p>
                    </div>
                    <div class="md:flex p-2 mt-2">
                        <div class="text md:w-1/2">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight ">
                                プロフィール
                            </h2>
                            <p>自分のアカウント情報が表示されています。</p>
                            <p>”Account Delete？ボタン”を押すとアカウントを削除することができます。</p>
                            <p>※データベースから完全に削除されます。</p>
                        </div>
                        <div class="img md:w-1/2 mt-2">
                            <img src="{{ asset('img/profile.png') }}" alt="">
                        </div>
                    </div>
                    <div class="md:flex p-2 mt-2">
                        <div class="text md:w-1/2">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                                友達追加フォーム
                            </h2>
                            <p>友達のメールアドレスを登録するフォームです。</p>
                            <p>「名前」「メールアドレス」「備考」を入力の上”Add Contact!!ボタン”を押して連絡先を登録できます。</p>
                        </div>
                        <div class="img md:w-1/2 mt-2">
                            <img src="{{ asset('img/add_friends.png') }}" alt="">
                        </div>
                    </div>
                    <div class="md:flex p-2 mt-2">
                        <div class="text md:w-1/2">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                                友達リスト
                            </h2>
                            <p>登録した友達の情報が表示されています。</p>
                            <p>”Deleteボタン”を押すと登録情報を削除できます。</p>
                            <p>※データベースから完全に削除されます。</p>
                        </div>
                        <div class="img md:w-1/2 mt-2">
                            <img src="{{ asset('img/friend_list.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-info bg-white rounded drop-shadow mx-2 mt-3">
                <div class="p-2">
                    <div>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            Doc Storageページ
                        </h2>
                        <p>WebサイトのURLなどを投稿し、その投稿を閲覧、メール送信するページです。</p>
                    </div>
                    <div class="md:flex p-2 mt-2">
                        <div class="text md:w-1/2">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight ">
                                投稿フォーム
                            </h2>
                            <p>Webサイトの情報を投稿するフォームです。</p>
                            <p>各項目を入力の上”Storage!!ボタン”を押すと投稿できます。</p>
                        </div>
                        <div class="img md:w-1/2 mt-2">
                            <img src="{{ asset('img/doc_storage_form.png') }}" alt="">
                        </div>
                    </div>
                    <div class="md:flex p-2 mt-2">
                        <div class="text md:w-1/2">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                                投稿リスト
                            </h2>
                            <p>自分の投稿がリスト表示されています。</p>
                            <p>”Documentボタン”で登録されているサイトに遷移します。</p>
                            <p>”Editボタン”で投稿を編集するページに遷移します。</p>
                            <p>”Mailボタン”でメール送信フォームに遷移します。</p>
                            <p>”Deleteボタン”で投稿を削除します。</p>
                            <p>※データベースにデータは残されています。</p>
                        </div>
                        <div class="img md:w-1/2 mt-2">
                            <img src="{{ asset('img/doc_list.png') }}" alt="">
                        </div>
                    </div>
                    <div class="md:flex p-2 mt-2">
                        <div class="text md:w-1/2">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                                編集フォーム
                            </h2>
                            <p>投稿の内容を編集するフォームです。</p>
                            <p>必要欄を入力の上”Update!!ボタン”で更新できます。</p>
                        </div>
                        <div class="img md:w-1/2 mt-2">
                            <img src="{{ asset('img/update_form.png') }}" alt="">
                        </div>
                    </div>
                    <div class="md:flex p-2 mt-2">
                        <div class="text md:w-1/2">
                            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                                メール送信フォーム
                            </h2>
                            <p>投稿の内容をメール送信するフォームです。</p>
                            <p>送信先を選択の上、”Send Mail!!ボタン”で指定したメールアドレスに投稿内容を送信します。</p>
                        </div>
                        <div class="img md:w-1/2 mt-2">
                            <img src="{{ asset('img/mail_form.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>

</body>

</html>
