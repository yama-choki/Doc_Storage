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
        <header>
            <x-slot name="header" >
                <div class="flex">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight w-1/5">
                        Doc Strage
                    </h2>
                    <form action="" class="w-4/5 flex">
                        <input type="text" id="text" name="email" placeholder="資料を探す" class=" w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200 ease-in-out">
                        <button class="ml-2 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Search</button>
                    </form>
                </div>
            </x-slot>
        </header>
        <div class="header-space h-44"></div>
        <div class="md:flex md:container mx-auto justify-between px-4">
            <section class="text-gray-600 body-font relative bg-white w-4/12 rounded drop-shadow sticky top-60" style="height:500px;">
                <form action="POST">
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Title</label>
                            <input placeholder="100文字以内で入力" type="text" id="title" name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Category</label>
                            <input placeholder="言語や技術名を入力" type="text" id="category" name="category" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">URL</label>
                            <input placeholder="URLをコピペ" type="url" id="url" name="url" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-gray-600">Text</label>
                                <textarea placeholder="200文字以内で入力" id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                Storage !!
                            </button>
                        </div>
                    </div>
                </form>
            </section>
            <section class="w-7/12">
                <ul class="mb-10">
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div>Laravel</div>
                                <div>2022-12-20 22:36</div>
                            </div>
                            <h1 class="font-bold break-words">タイトル</h1>
                            <div class="break-words">jflkjfsdlafjisajiawjiwejiofjwiojfioq</div>
                            <div class="flex">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Go To Document
                                </button>
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
    </x-app-layout>

</body>
</html>