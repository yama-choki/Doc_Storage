<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div style="height:150px"></div>
    <main class="md:flex md:container md:mx-auto justify-around">
        <div class="md:w-5/12 lg:w-5/12">
            <div class="user-info bg-white rounded drop-shadow mx-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight p-2">
                    Profile
                </h2>
                <form method="post" action="{{ route('docs.store') }}">@csrf
                    <input type="hidden" value="" name="">
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">User Name</label>
                            <input placeholder="自分の名前" type="text" id="name" name="name"
                                value=""
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Email</label>
                            <input placeholder="自分のメールアドレス" type="text" id="email" name="email" disabled
                                value=""
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="p-2 w-full">
                            <button
                                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                Update !!
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="user-info bg-white rounded drop-shadow mx-2 mt-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight p-2">
                    Add Friends
                </h2>
                <form method="post" action="{{ route('docs.store') }}">@csrf
                    <input type="hidden" value="" name="">
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Friend Name</label>
                            <input placeholder="友達の名前を入力してください" type="text" id="friendName" name="friendName"
                                value="{{ old('friendName') }}"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Friend Email</label>
                            <input placeholder="友達のメールアドレスを入力してください" type="text" id="friendEmai;" name="friendEmail"
                                value="{{ old('friendEmail') }}"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="p-2 w-full">
                            <button
                                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                Add Contact !!
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="contact-list w-7/12 lg:w-5/12">
            <ul class="mb-10">
                    <li class="w-full">
                        <div class="bg-white mt-4 p-4 rounded drop-shadow w-full">
                            <div class="flex justify-between">
                                <div></div>
                                <div>登録日時</div>
                            </div>
                            <h1 class="font-bold break-words whitespace-pre-line">友達の名前</h1>
                            <div class="break-words whitespace-pre-line">友達のメールアドレス</div>
                            <div class="flex justify-around">
                                <form method="GET" action="">
                                    <button
                                        class="flex mx-auto text-white bg-emerald-500 border-0 py-2 px-8 focus:outline-none hover:bg-emerald-600 rounded text-lg">
                                        Edit
                                    </button>
                                </form>
                                <form onsubmit="return deleteReport();" method="POST"
                                    action=""
                                    id="">@csrf
                                    <button type="submit" href="#" data-id=""
                                        class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-5 focus:outline-none hover:bg-pink-600 rounded text-lg">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
            </ul>
        </div>
    </main>
</x-app-layout>
