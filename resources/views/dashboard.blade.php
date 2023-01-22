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
            <x-slot name="header">
                <div class="flex">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight w-1/5">
                        Dashboard
                    </h2>
                </div>
            </x-slot>
        </header>
        <div class="header-space h-44"></div>

    </x-app-layout>

</body>

</html>
