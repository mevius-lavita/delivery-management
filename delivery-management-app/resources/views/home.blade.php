@extends('layouts.app')

@section('title', 'ホーム')

@section('content')

<div>

    {{-- タイトル --}}
    <div class="mb-8">

        <p class="text-sm text-gray-500">
            2026年9月8日（火）
        </p>

        <h1 class="text-2xl font-bold mt-1">
            今日の収支
        </h1>

    </div>


    {{-- 収支カード --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

        {{-- 売上 --}}
        <div class="bg-white rounded-xl shadow-sm p-6">

            <p class="text-sm text-gray-500">
                今日の売上
            </p>

            <p class="text-3xl font-bold mt-3">
                ¥18,500
            </p>

        </div>


        {{-- 経費 --}}
        <div class="bg-white rounded-xl shadow-sm p-6">

            <p class="text-sm text-gray-500">
                今日の経費
            </p>

            <p class="text-3xl font-bold mt-3 text-red-500">
                ¥3,200
            </p>

        </div>


        {{-- 利益 --}}
        <div class="bg-blue-600 rounded-xl shadow-sm p-6 text-white">

            <p class="text-sm text-blue-100">
                今日の利益
            </p>

            <p class="text-3xl font-bold mt-3">
                ¥15,300
            </p>

        </div>

    </div>


    {{-- 登録ボタン --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-8">

        <a
            href="#"
            class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition"
        >

            <p class="text-lg font-bold">
                ＋ 売上を登録
            </p>

            <p class="text-sm text-gray-500 mt-2">
                今日の配達売上を登録します
            </p>

        </a>


        <a
            href="#"
            class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition"
        >

            <p class="text-lg font-bold">
                ＋ 経費を登録
            </p>

            <p class="text-sm text-gray-500 mt-2">
                ガソリン代などの経費を登録します
            </p>

        </a>

    </div>


    {{-- 今日の履歴 --}}
    <div class="bg-white rounded-xl shadow-sm mt-8">

        <div class="p-6 border-b">

            <h2 class="font-bold">
                今日の履歴
            </h2>

        </div>


        <div class="divide-y">

            <div class="p-6 flex items-center justify-between">

                <div>
                    <p class="font-medium">
                        Amazon 配達
                    </p>

                    <p class="text-sm text-gray-500 mt-1">
                        09:00
                    </p>
                </div>

                <p class="font-bold">
                    + ¥12,000
                </p>

            </div>


            <div class="p-6 flex items-center justify-between">

                <div>
                    <p class="font-medium">
                        Uber 配達
                    </p>

                    <p class="text-sm text-gray-500 mt-1">
                        15:00
                    </p>
                </div>

                <p class="font-bold">
                    + ¥6,500
                </p>

            </div>


            <div class="p-6 flex items-center justify-between">

                <div>
                    <p class="font-medium">
                        ガソリン
                    </p>

                    <p class="text-sm text-gray-500 mt-1">
                        18:30
                    </p>
                </div>

                <p class="font-bold text-red-500">
                    - ¥3,200
                </p>

            </div>

        </div>

    </div>

</div>

@endsection