@extends('layouts.app')

@section('title', '月の収支')

@section('content')

<div>

    {{-- タイトル --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">

        <div>

            <h1 class="text-2xl font-bold">
                月の収支
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                2026年9月
            </p>

        </div>


        <select
            class="rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
        >
            <option>2026年9月</option>
            <option>2026年8月</option>
            <option>2026年7月</option>
        </select>

    </div>


    {{-- 集計 --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

        <div class="bg-white rounded-xl shadow-sm p-6">

            <p class="text-sm text-gray-500">
                売上合計
            </p>

            <p class="text-3xl font-bold mt-3">
                ¥284,500
            </p>

        </div>


        <div class="bg-white rounded-xl shadow-sm p-6">

            <p class="text-sm text-gray-500">
                経費合計
            </p>

            <p class="text-3xl font-bold text-red-500 mt-3">
                ¥72,300
            </p>

        </div>


        <div class="bg-blue-600 rounded-xl shadow-sm p-6 text-white">

            <p class="text-sm text-blue-100">
                利益
            </p>

            <p class="text-3xl font-bold mt-3">
                ¥212,200
            </p>

        </div>

    </div>


    {{-- 一覧 --}}
    <div class="bg-white rounded-xl shadow-sm mt-8 overflow-hidden">

        <div class="p-6 border-b">

            <h2 class="font-bold">
                収支一覧
            </h2>

        </div>


        <div class="divide-y">

            {{-- 売上 --}}
            <div class="p-5 flex items-center justify-between">

                <div>

                    <p class="font-medium">
                        Amazon
                    </p>

                    <p class="text-sm text-gray-500">
                        9月8日
                    </p>

                </div>

                <p class="font-bold">
                    + ¥12,000
                </p>

            </div>


            {{-- 売上 --}}
            <div class="p-5 flex items-center justify-between">

                <div>

                    <p class="font-medium">
                        Uber
                    </p>

                    <p class="text-sm text-gray-500">
                        9月8日
                    </p>

                </div>

                <p class="font-bold">
                    + ¥6,500
                </p>

            </div>


            {{-- 経費 --}}
            <div class="p-5 flex items-center justify-between">

                <div>

                    <p class="font-medium">
                        ガソリン
                    </p>

                    <p class="text-sm text-gray-500">
                        9月8日
                    </p>

                </div>

                <p class="font-bold text-red-500">
                    - ¥3,200
                </p>

            </div>


            <div class="p-5 flex items-center justify-between">

                <div>

                    <p class="font-medium">
                        Amazon
                    </p>

                    <p class="text-sm text-gray-500">
                        9月7日
                    </p>

                </div>

                <p class="font-bold">
                    + ¥14,000
                </p>

            </div>

        </div>

    </div>

</div>

@endsection