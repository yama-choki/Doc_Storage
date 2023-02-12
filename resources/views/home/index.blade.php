<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doc Strage</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-[100vh]">
    <x-app-layout>
{{-- ヘッダー　ここから --}}
        <header>
            <x-slot name="header">
                <div class="flex">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight w-1/5">
                        Home
                    </h2>
                </div>
            </x-slot>
        </header>
{{-- ヘッダー　ここまで --}}

        <div style="height:150px"></div>
        <main class="md:flex md:container md:mx-auto justify-around">
{{-- プロフィール　ここから  使用する値：Auth::user()  処理：ユーザー情報をuserテーブルから削除--}}
            <div class="md:w-5/12 lg:w-5/12">
                <div class="user-info bg-white rounded drop-shadow mx-2">
                    <form method="post" action="{{ route('home.destroy', Auth::user()->id) }}"  onsubmit="return deleteAccount();">@csrf
                        <div class="p-2 w-full flex justify-between">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight p-2">
                                Profile
                            </h2>
                            <div class="">
                                <button type="submit" href="#" data-id=""
                                    class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-5 focus:outline-none hover:bg-pink-600 rounded text-lg">
                                    Account Delete ?
                                </button>
                            </div>
                        </div>
                        <div class="p-2">
                            <input type="hidden" value="" name="">
                            <div>
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                    <div>{{ Auth::user()->name }}</div>
                                </div>
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">Email</label>
                                    <div>{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
{{-- プロフィール　ここまで --}}
{{-- フレンド追加フォーム　ここから  使用する値：name, email, remarks, user_id  処理：入力値をfriendsテーブルに送信 --}}
                <div class="user-info bg-white rounded drop-shadow mx-2 mt-4">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight p-2">
                        Add Friends
                    </h2>
                    <form method="post" action="{{ route('home.store') }}">@csrf
                        <input type="hidden" value="" name="">
                        <div class="p-2 w-full">
                            <div class="relative">
                                <input type="hidden" id="user_id" name="user_id"
                                    value="{{ Auth::user()->id }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Friend Name</label>
                                <input placeholder="友達の名前を入力してください" type="text" id="name" name="name"
                                    value="{{ old('name') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Friend Email</label>
                                <input placeholder="友達のメールアドレスを入力してください" type="email" id="email" name="email"
                                    value="{{ old('email') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Remarks</label>
                                <input placeholder="備考" type="text" id="remarks" name="remarks"
                                    value="{{ old('remarks') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="p-2 w-full">
                                <button
                                    class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Add Contact !!
                                </button>
                            </div>
                        </div>
                        <div class="mx-3 flex w-full">
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        </div>
                    </form>
                </div>
            </div>
{{-- フレンド追加フォーム　ここまで --}}
{{-- フレンドリスト　ここから  使用する値：$friends  行う処理：フレンドをリストを表示、指定したフレンドをfriendsテーブルから削除 --}}
            <div class="contact-list w-full md:w-7/12 lg:w-5/12 p-2">
                {{ $friends->links() }}
                <ul class="mb-10">
                    @foreach($friends as $friend)
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>
                                    <label for="name" class="leading-7 text-sm text-gray-600">Friend Name</label>
                                    <h1 class="font-bold break-words whitespace-pre-line">{{ $friend->name }}</h1>
                                    <label for="name" class="leading-7 text-sm text-gray-600">Friend Email</label>
                                    <h1 class="font-bold break-words whitespace-pre-line">{{ $friend->email }}</h1>
                                    @if(isset($friend->remarks))
                                    <label for="name" class="leading-7 text-sm text-gray-600">Remarks</label>
                                    <h1 class="font-bold break-words whitespace-pre-line">{{ $friend->remarks }}</h1>
                                    @endif
                                </div>
                                <div>
                                    <div>{{ $friend->created_at->format('Y/m/d-H:i') }}</div>
                                    <form onsubmit="return deleteFriend();" method="POST"
                                        action="{{ route('home.delete', $friend->id) }}"
                                        id="">@csrf
                                        <button type="submit" href="#" data-id=""
                                            class="flex mx-auto text-white bg-pink-500 border-0 py-2 mt-4 px-5 focus:outline-none hover:bg-pink-600 rounded text-lg">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                {{ $friends->links() }}
            </div>
{{-- フレンドリスト　ここまで --}}
        </main>

{{-- 削除確認メッセージ --}}
        <script>
            function deleteFriend() {
                if (confirm('フレンドリストは復元できません。本当に削除しますか？')) {
                    return true;
                } else {
                    return false;
                }
            }

            function deleteAccount() {
                if (confirm('アカウントは復元できません。本当に削除しますか？')) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
{{-- 削除確認メッセージ --}}
    </x-app-layout>

</body>

</html>



