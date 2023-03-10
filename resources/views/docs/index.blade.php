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
{{-- ヘッダー　ここから --}}
        <header>
            <x-slot name="header">
                <div class="flex">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight w-1/5">
                        Doc Storage
                    </h2>
                    <form action="{{ route('docs.index') }}" method="get" class="w-4/5 flex">
                        <input type="search" id="search" name="search" placeholder="資料を探す"
                            class=" w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200 ease-in-out">
                        <button
                            class="ml-2 text-white bg-indigo-500 border-0 py-2 px-2 md:px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Search</button>
                    </form>
                </div>
            </x-slot>
        </header>
{{-- ヘッダー　ここまで --}}
        <div class="header-space h-44"></div>
        <div class="md:flex md:container mx-auto justify-between px-4">
{{-- 投稿フォーム　ここから 使用する値：title, category, url, text, user_id,  入力値をdocsテーブルに送信--}}
            <section class="md:w-4/12 ">
                <div class="text-gray-600 body-font relative bg-white  rounded drop-shadow mb-16">
                    <form method="post" action="{{ route('docs.store') }}">@csrf
                        <input type="hidden" value="{{ $user->id }}" name="user_id">
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Title</label>
                                <input placeholder="100文字以内で入力" type="text" id="title" name="title"
                                    value="{{ old('title') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Category</label>
                                <input placeholder="言語や技術名を入力" type="text" id="category" name="category"
                                    value="{{ old('caegory') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">URL</label>
                                <input placeholder="URLをコピペ" type="url" id="url" name="url"
                                    value="{{ old('url') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="message" class="leading-7 text-sm text-gray-600">Text</label>
                                    <textarea placeholder="200文字以内で入力" id="message" name="text"
                                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('text') }}</textarea>
                                </div>
                            </div>
                            <div class="p-2 w-full">
                                <button
                                    class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Storage !!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 p-4" :errors="$errors" />
            </section>
{{-- 投稿フォーム　ここまで --}}
{{-- 投稿のリスト　ここから  使用する値：$docs  処理：自分の投稿をリスト表示、URL先に遷移、編集フォームに遷移、メール送信フォームに遷移、投稿の削除--}}
            <section class="md:w-7/12 sm:mt-16 md:mt-0 mb-8">
                {{ $docs->links() }}
                <ul class="mb-10">
                    @foreach ($docs as $doc)
                        <li class="w-full">
                            <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                                <div class="flex justify-between">
                                    <div class="w-2/5 break-words whitespace-pre-line">{{ $doc->category }}</div>
                                    <div>{{ $doc->updated_at->format('Y/m/d-H:i') }}</div>
                                </div>
                                <h1 class="font-bold break-words whitespace-pre-line">{{ $doc->title }}</h1>
                                <div class="break-words whitespace-pre-line">{{ $doc->text }}</div>
                                <div class="flex justify-around flex-wrap">
                                    <div class="max-[470px]:mx-4">
                                        <a href="{{ $doc->url }}" class="" target="_blank">
                                            <button
                                                class="flex text-white bg-indigo-500 border-0 py-2 px-2 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                                Document
                                            </button>
                                        </a>
                                    </div>
                                    <div class="max-[470px]:mx-4">
                                        <form method="GET" action="{{ route('docs.show', $doc->id) }}">
                                            <input type="hidden" value="edit" name="mode">
                                            <button
                                                class="flex text-white bg-emerald-500 border-0 py-2 px-8 focus:outline-none hover:bg-emerald-600 rounded text-lg">
                                                Edit
                                            </button>
                                        </form>
                                    </div>
                                    <div class="max-[470px]:mx-4 max-[470px]:mt-1">
                                        <form method="GET" action="{{ route('docs.show', $doc->id) }}">
                                        <input type="hidden" value="mail" name="mode">
                                            <button
                                                class="flex text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">
                                                Mail
                                            </button>
                                        </form>
                                    </div>
                                    <div class="max-[470px]:mx-4 max-[470px]:mt-1">
                                        <form onsubmit="return deletePost();" method="POST" action="{{ route('docs.delete', $doc->id) }}" id="delete_{{ $doc->id }}">@csrf
                                            <button type="submit" href="#" data-id="{{ $doc->id }}"
                                                class="flex text-white bg-pink-500 border-0 py-2 px-5 focus:outline-none hover:bg-pink-600 rounded text-lg">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                {{ $docs->links() }}
            </section>
        </div>
{{-- 投稿のリスト　ここまで --}}

{{-- 削除確認メッセージ ここから--}}
        <script>
            function deletePost() {
                if (confirm('本当に削除しますか？')) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
{{-- 削除確認メッセージ ここまで--}}
    </x-app-layout>

</body>

</html>
