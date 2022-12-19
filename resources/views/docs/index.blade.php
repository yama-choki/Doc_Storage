<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Document Strage</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-[100vh]">
    <x-app-layout>
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
    </x-app-layout>

</body>
</html>