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
            <x-slot name="header" >
                <div class="flex">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Doc Storage
                    </h2>
                </div>
            </x-slot>
        </header>
        <div class="header-space" style="height:150px;"></div>
            <section class="mx-auto text-gray-600 p-4 w-11/12 lg:w-3/4 body-font relative bg-white rounded drop-shadow mb-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    @if($mode === 'mail')
                        記事をメール送信する
                    @elseif($mode === 'edit')
                        投稿を編集する
                    @endif
                </h2>
                @if($mode === 'mail')
                <form method="post" action="{{ route('docs.send', $doc->id) }}"> @csrf
                @elseif($mode === 'edit')
                <form method="post" action="{{ route('docs.update', $doc->id) }}"> @csrf
                @endif
                    <div class="p-2 w-full">
                        @if($mode === 'mail')
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">To a friend</label><br/>
                            <select name="email" id="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700  leading-8 transition-colors duration-200 ease-in-out">
                                <option value="">メールを送る相手を選択</option>
                                @foreach ($friends as $friend)
                                    <option value="{{ $friend->email }}"  {{ old('email') == $friend->email ? 'selected' : '' }}>{{ $friend->name }} - {{ $friend->email }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Mail Subject</label>
                            <input placeholder="メールの件名を入力" value="{{ old('subject') }}" type="text" id="subject" name="subject" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        @endif
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Title</label>
                            <input placeholder="100文字以内で入力" value="{{ $doc->title }}" type="text" id="title" name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        @if($mode === 'edit')
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Category</label>
                            <input placeholder="言語や技術名を入力" value="{{ $doc->category }}" type="text" id="category" name="category" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        @endif
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">URL</label>
                            <input placeholder="URLをコピペ" value="{{ $doc->url }}" type="url" id="url" name="url" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-gray-600">Text</label>
                                <textarea placeholder="200文字以内で入力" id="text" name="text" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $doc->text }}</textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            @if($mode === 'mail')
                                <button class="flex mx-auto text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">
                                    Send Mail !!
                                </button>
                            @elseif($mode === 'edit')
                                <button class="flex mx-auto text-white bg-emerald-500 border-0 py-2 px-8 focus:outline-none hover:bg-emerald-600 rounded text-lg">
                                    Update !!
                                </button>
                            @endif
                        </div>
                    </div>
                    <div class="mx-auto flex w-full">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    </div>
                </form>
            </section>
    </x-app-layout>

</body>
</html>