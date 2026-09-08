@extends('layouts.app')

@section('title', 'ユーザー登録')

@section('content')

<div class="max-w-md mx-auto">

    <div class="bg-white rounded-xl shadow-sm p-8">

        <h1 class="text-2xl font-bold text-center">
            ユーザー登録
        </h1>

        <p class="text-sm text-gray-500 text-center mt-2">
            Delivery Managerを始めましょう
        </p>


        <form action="#" method="POST" class="mt-8 space-y-5">

            @csrf

            {{-- 名前 --}}
            <div>
                <label class="block text-sm font-medium mb-2">
                    名前
                </label>

                <input
                    type="text"
                    name="name"
                    placeholder="山田 太郎"
                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                >
            </div>


            {{-- メールアドレス --}}
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


            {{-- パスワード --}}
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


            {{-- パスワード確認 --}}
            <div>
                <label class="block text-sm font-medium mb-2">
                    パスワード（確認）
                </label>

                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="もう一度入力してください"
                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                >
            </div>


            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700"
            >
                アカウントを作成
            </button>

        </form>


        <p class="text-center text-sm text-gray-500 mt-6">
            すでにアカウントをお持ちですか？

            <a href="#" class="text-blue-600 hover:underline">
                ログイン
            </a>
        </p>

    </div>

</div>

@endsection