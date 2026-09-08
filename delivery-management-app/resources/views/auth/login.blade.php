@extends('layouts.app')

@section('title', 'ログイン')

@section('content')

<div class="max-w-md mx-auto">

    <div class="bg-white rounded-xl shadow-sm p-8">

        <h1 class="text-2xl font-bold text-center">
            ログイン
        </h1>

        <p class="text-sm text-gray-500 text-center mt-2">
            Delivery Manager
        </p>


        <form action="#" method="POST" class="mt-8 space-y-5">

            @csrf

            <div>
                <label class="block text-sm font-medium mb-2">
                    メールアドレス
                </label>

                <input
                    type="email"
                    name="email"
                    placeholder="example@example.com"
                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                >
            </div>


            <div>
                <label class="block text-sm font-medium mb-2">
                    パスワード
                </label>

                <input
                    type="password"
                    name="password"
                    placeholder="パスワード"
                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                >
            </div>


            <div class="flex items-center">
                <input
                    type="checkbox"
                    name="remember"
                    class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                >

                <label class="ml-2 text-sm text-gray-600">
                    ログイン状態を保持する
                </label>
            </div>


            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700"
            >
                ログイン
            </button>

        </form>


        <p class="text-center text-sm text-gray-500 mt-6">
            アカウントをお持ちでないですか？

            <a href="#" class="text-blue-600 hover:underline">
                ユーザー登録
            </a>
        </p>

    </div>

</div>

@endsection